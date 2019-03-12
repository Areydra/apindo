<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Gallery;
use App\Models\TeksBerjalan;
use App\Models\Footer;
use App\Models\LogoAnggota;
use App\KeanggotaanApindo;
use App\PelatihanSeminar;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        $data = [
            'artikel_terbaru'       => Artikel::orderBy('id', 'DESC')->paginate(5),
            'slider_active'         => Artikel::get()->first(),
            'logo_anggota'          => LogoAnggota::orderBy('id', 'DESC')->paginate(10),
            'artikel_populer'       => Artikel::inRandomOrder()->paginate(5),
            'slider'                => Gallery::orderBy('id', 'DESC')->paginate(5),
            'lks'                   => Artikel::orderBy('id', 'DESC')->where('kategori', 'LKS Tripartite')->paginate(4),
            'sdm'                   => Artikel::orderBy('id', 'DESC')->where('kategori', 'Pengembangan SDM')->paginate(4),
            'bisnis'                => Artikel::orderBy('id', 'DESC')->where('kategori', 'Bisnis dan Industri')->paginate(4),
            'serikat_pekerja'       => Artikel::orderBy('id', 'DESC')->where('kategori', 'Serikat Pekerja/Buruh')->paginate(4),
            'informasi_kegiatan'    => Artikel::orderBy('id', 'DESC')->where('kategori', 'Informasi Kegiatan Anggota')->paginate(4),
            'hukum_ketenagakerjaan' => Artikel::orderBy('id', 'DESC')->where('kategori', 'Hukum dan Ketenagakerjaan')->paginate(4),
            'marquee'               => TeksBerjalan::get()->first(),
            'footer'                => Footer::get()->first()
        ];
        return view('index', $data);
    }

    // LAYANAN ANGGOTA
    public function pelatihan_seminar()
    {
        $data = [
                    'logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),
                    'footer'    => Footer::get()->first(),
                    'pelatihan_seminar' => PelatihanSeminar::paginate(10)
                ];
        return view('layanan_anggota.pelatihan_seminar', $data);
    }
    public function informasi_anggota()
    {
        $data = [
                    'logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),
                    'footer'         => Footer::get()->first(),
                    'informasi_anggota' => KeanggotaanApindo::paginate(10)
                ];
        return view('layanan_anggota.informasi_anggota', $data);
    }
    public function cari(Request $request)
    {
        $result = Artikel::where('judul','LIKE',"%".$request->cari."%")->orWhere('artikel', 'LIKE', "%" . $request->cari . "%")->paginate(20);
        return view('artikel.cari', ['data' => $result, 'logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),'footer' => Footer::get()->first()]);
    }
}
