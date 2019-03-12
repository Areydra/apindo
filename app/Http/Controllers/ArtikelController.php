<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Gallery;
use App\Models\Sejarah;
use App\Models\VisiMisi;
use App\Models\LogoAnggota;
use App\Models\Hubungi_kami;
use App\Models\HubungiKami;
use App\Models\ProgramKerja;
use App\Models\StrukturPengurus;
use Illuminate\Http\Request;
use App\Models\Footer;

class ArtikelController extends Controller
{
    // ARTIKEL
    public function hubungi_kami()
    {
        $data = [
                    'logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),
                    'footer' => Footer::get()->first(),
                    'hubungi_kami_teks' => HubungiKami::where('kategori', 'hubungi_kami_teks')->first(),
                    'kantor_sekretariat' => HubungiKami::where('kategori', 'kantor_sekretariat')->first(),
                    'kontak_person' => HubungiKami::where('kategori', 'kontak_person')->first()
                ];
        return view('artikel.hubungi_kami', $data);
    }
    public function sejarah()
    {
        return view('artikel.sejarah', ['logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),'footer' => Footer::get()->first(),'sejarah' => Sejarah::get()->first()]);
    }
    public function bisnis_industri()
    {
        return view('artikel.bisnis_industri' , ['logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),'footer' => Footer::get()->first(),'bisnis' => Artikel::where('kategori', 'Bisnis dan Industri')->get()]);
    }
    public function hukum_ketenagakerjaan()
    {
        return view('artikel.hukum_ketenagakerjaan' , ['logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),'footer' => Footer::get()->first(),'hukum_ketenagakerjaan' => Artikel::where('kategori', 'Hukum dan Ketenagakerjaan')->get()]);
    }
    public function sdm()
    {
        return view('artikel.pengembangan_sdm' , ['logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),'footer' => Footer::get()->first(),'sdm' => Artikel::where('kategori', 'Pengembangan SDM')->get()]);
    }
    public function serikat_pekerja()
    {
        return view('artikel.serikat_pekerja' , ['logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),'footer' => Footer::get()->first(),'serikat_pekerja' => Artikel::where('kategori', 'Serikat Pekerja/Buruh')->get()]);
    }

    public function lks_tripartite()
    {
        return view('artikel.lks_tripartite' , ['logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),'footer' => Footer::get()->first(),'lks' => Artikel::where('kategori', 'LKS Tripartite')->get()]);
    }
    public function informasi_kegiatan()
    {
        return view('artikel.informasi_kegiatan' , ['logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),'footer' => Footer::get()->first(),'informasi_kegiatan' => Artikel::where('kategori', 'Informasi Kegiatan Anggota')->get()]);
    }
    public function tentang_kami()
    {
        return view('artikel.tentang_kami', ['logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),'footer' => Footer::get()->first(),'sejarah' => Sejarah::get()->first()]);
    }
    public function struktur_pengurus()
    {
        return view('artikel.struktur_pengurus', ['logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),'footer' => Footer::get()->first(), 'struktur_pengurus' => StrukturPengurus::get()]);
    }
    public function visi_misi()
    {
        return view('artikel.visi_misi', ['logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),'footer' => Footer::get()->first(),'visi_misi' => VisiMisi::get()->first()]);
    }
    public function program_kerja()
    {
        $data = [
                    'logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),
                    'footer' => Footer::get()->first(),
                    'hubungan_industrial' => ProgramKerja::where('kategori', 'hubungan_industrial')->first(),
                    'pelatihan' => ProgramKerja::where('kategori', 'pelatihan')->first(),
                    'hubungan_masyarakat' => ProgramKerja::where('kategori', 'hubungan_masyarakat')->first(),
                    'bidang_umkm' => ProgramKerja::where('kategori', 'bidang_umkm')->first()
                ];
        return view('artikel.program_kerja', $data);
    }
    public function gallery()
    {
        return view('artikel.gallery', ['logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),'footer' => Footer::get()->first(),'pictures' => Gallery::get()]);
    }

    // ARTIKEL DETAIL
    public function artikel_detail($slug)
    {
        $data = [
                    'data' => Artikel::where('slug', $slug)->first(),
                    'artikel_baru' => Artikel::orderBy('id', 'desc')->get(),
                    'logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),
                    'footer' => Footer::get()->first()
        ];
        return view('artikel.detail.artikel_detail', $data);
    }

    public function hubungi_kami_post(Request $request)
    {
        $request->validate([
            'nama_lengkap'   => 'required|min:5|max:45',
            'email'          => 'required|min:5|max:45',
            'subject'        => 'required|min:5'
        ]);
        Hubungi_kami::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'subject' => $request->subject,
            'isi' => $request->isi
        ]);
        return redirect()->back()->with('terkirim', 'Terimakasih telah menghubungi kami');
    }

}
