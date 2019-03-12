<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\VisiMisi;
use App\Models\Sejarah;
use App\Models\Struktur;
use App\Models\Team;
use App\Models\Hubungi_kami;
use App\Models\ProgramKerja;
use App\Models\Gallery;
use App\Models\User;
use App\Models\LogoAnggota;
use App\Models\Footer;
use App\Models\TeksBerjalan;
use App\Models\Ketenagakerjaan;
use App\Models\StrukturPengurus;
use App\Models\HubungiKami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;
use Auth;
use App\KeanggotaanApindo;
use App\PelatihanSeminar;

class adminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    // view **
    public function artikel()
    {
        return view('admin.crud.artikel.artikel', ['data' => Artikel::orderBy('id','DESC')->paginate(10)]);
    }
    public function gallery()
    {
        return view('admin.crud.gallery.gallery', ['data' => Gallery::orderBy('id',' DESC')->paginate(10)]);
    }
    public function kepmen()
    {
        return view('admin.crud.ketenagakerjaan.kepmen', ['data' => Ketenagakerjaan::where('kategori', 'kepmen')->orderBy('id',' DESC')->paginate(10)]);
    }
    public function keanggotaan_apindo()
    {
        return view('admin.crud.keanggotaan_apindo.keanggotaan_apindo', ['data' => KeanggotaanApindo::orderBy('id','DESC')->paginate(10)]);
    }
    public function logo_anggota()
    {
        return view('admin.crud.logo_anggota.logo_anggota', ['data' => LogoAnggota::orderBy('id','DESC')->paginate(10)]);
    }
    public function peraturan_pemerintah()
    {
        return view('admin.crud.ketenagakerjaan.peraturan_pemerintah', ['data' => Ketenagakerjaan::where('kategori', 'peraturan pemerintah')->orderBy('id',' DESC')->paginate(10)]);
    }
    public function permen()
    {
        return view('admin.crud.ketenagakerjaan.permen', ['data' => Ketenagakerjaan::where('kategori', 'permen')->orderBy('id',' DESC')->paginate(10)]);
    }
    public function perda_dki()
    {
        return view('admin.crud.ketenagakerjaan.perda_dki', ['data' => Ketenagakerjaan::where('kategori', 'perda dki')->orderBy('id',' DESC')->paginate(10)]);
    }
    public function pelatihan_seminar()
    {
        return view('admin.crud.pelatihan_seminar.pelatihan_seminar', ['data' => PelatihanSeminar::orderBy('id','DESC ')->paginate(10)]);
    }
    public function pesan_hubungi_kami()
    {
        return view('admin.pesan_hubungi_kami', ['data' => Hubungi_kami::orderBy('id','DESC ')->paginate(10)]);
    }
    public function surat_edaran_menteri()
    {
        return view('admin.crud.ketenagakerjaan.surat_edaran_menteri', ['data' => Ketenagakerjaan::where('kategori', 'surat edaran menteri')->orderBy('id',' DESC')->paginate(10)]);
    }
    public function undang_undang()
    {
        return view('admin.crud.ketenagakerjaan.undang_undang', ['data' => Ketenagakerjaan::where('kategori', 'undang undang')->orderBy('id',' DESC')->paginate(10)]);
    }
    public function struktur_pengurus()
    {
        return view('admin.crud.struktur_pengurus.struktur_pengurus', ['data' => StrukturPengurus::orderBy('id',' DESC')->paginate(10)]);
    }
    public function user()
    {
        return view('admin.crud.user.user', ['data' => User::orderBy('id','DESC ')->paginate(10)]);
    }

    // Form create show
    public function user_add()
    {
        return view('admin.crud.user.user_add', ['data' => User::orderBy('id','DESC ')->paginate(10)]);
    }
    public function artikel_add()
    {
        return view('admin.crud.artikel.artikel_add', ['data' => Artikel::orderBy('id','DESC')->paginate(10)]);
    }
    public function sejarah_add()
    {
        return view('admin.crud.sejarah_add', ['data' => Sejarah::first()]);
    }
    public function hubungi_kami_teks_add()
    {
        return view('admin.crud.halaman.hubungi_kami.hubungi_kami_teks_add', ['data' => HubungiKami::where('kategori', 'hubungi_kami_teks')->first()]);
    }
    public function kantor_sekretariat_add()
    {
        return view('admin.crud.halaman.hubungi_kami.kantor_sekretariat_add', ['data' => HubungiKami::where('kategori', 'kantor_sekretariat')->first()]);
    }
    public function kontak_person_add()
    {
        return view('admin.crud.halaman.hubungi_kami.kontak_person_add', ['data' => HubungiKami::where('kategori', 'kontak_person')->first()]);
    }
    public function teks_berjalan_add()
    {
        return view('admin.crud.halaman.teks_berjalan_add', ['data' => TeksBerjalan::first()]);
    }
    public function footer_add()
    {
        return view('admin.crud.halaman.footer_add', ['data' => Footer::first()]);
    }
    public function hubungan_industrial_add()
    {
        return view('admin.crud.program_kerja.hubungan_industrial_add', ['data' => ProgramKerja::where('kategori', 'hubungan_industrial')->first()]);
    }
    public function pelatihan_add()
    {
        return view('admin.crud.program_kerja.pelatihan_add', ['data' => ProgramKerja::where('kategori', 'pelatihan')->first()]);
    }
    public function hubungan_masyarakat_add()
    {
        return view('admin.crud.program_kerja.hubungan_masyarakat_add', ['data' => ProgramKerja::where('kategori', 'hubungan_masyarakat')->first()]);
    }
    public function bidang_umkm_add()
    {
        return view('admin.crud.program_kerja.bidang_umkm_add', ['data' => ProgramKerja::where('kategori', 'bidang_umkm')->first()]);
    }
    public function visi_misi_add()
    {
        return view('admin.crud.visi_misi_add', ['data' => VisiMisi::first()]);
    }
    public function admin_setting()
    {
        $id = Auth::user()->id;
        return view('admin.admin_setting', ['data' => User::Where('id', $id)->first()]);
    }
    public function gallery_add()
    {
        return view('admin.crud.gallery.gallery_add', ['data' => Gallery::orderBy('id',' DESC')->paginate(10)]);
    }
    public function undang_undang_add()
    {
        return view('admin.crud.ketenagakerjaan.undang_undang_add', ['data' => Ketenagakerjaan::where('kategori', 'undang undang')->orderBy('id',' DESC')->paginate(10)]);
    }
    public function struktur_pengurus_add()
    {
        return view('admin.crud.struktur_pengurus.struktur_pengurus_add');
    }
    public function peraturan_pemerintah_add()
    {
        return view('admin.crud.ketenagakerjaan.peraturan_pemerintah_add', ['data' => Ketenagakerjaan::where('kategori', 'peraturan pemerintah')->orderBy('id',' DESC')->paginate(10)]);
    }
    public function permen_add()
    {
        return view('admin.crud.ketenagakerjaan.permen_add', ['data' => Ketenagakerjaan::where('kategori', 'permen')->orderBy('id',' DESC')->paginate(10)]);
    }
    public function kepmen_add()
    {
        return view('admin.crud.ketenagakerjaan.kepmen_add', ['data' => Ketenagakerjaan::where('kategori', 'kepmen')->orderBy('id',' DESC')->paginate(10)]);
    }
    public function surat_edaran_menteri_add()
    {
        return view('admin.crud.ketenagakerjaan.surat_edaran_menteri_add', ['data' => Ketenagakerjaan::where('kategori', 'surat edaran menteri')->orderBy('id',' DESC')->paginate(10)]);
    }
    public function perda_dki_add()
    {
        return view('admin.crud.ketenagakerjaan.perda_dki_add', ['data' => Ketenagakerjaan::where('kategori', 'perda dki')->orderBy('id',' DESC')->paginate(10)]);
    }
    public function logo_anggota_add()
    {
        return view('admin.crud.logo_anggota.logo_anggota_add', ['data' => LogoAnggota::orderBy('id','DESC')->paginate(10)]);
    }
    public function keanggotaan_apindo_add()
    {
        return view('admin.crud.keanggotaan_apindo.keanggotaan_apindo_add', ['data' => KeanggotaanApindo::orderBy('id','DESC')->paginate(10)]);
    }
    public function pelatihan_seminar_add()
    {
        return view('admin.crud.pelatihan_seminar.pelatihan_seminar_add', ['data' => PelatihanSeminar::orderBy('id','DESC ')->paginate(10)]);
    }

    // Form Store   
    public function user_store(Request $data)
    {
        $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:35'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        User::create([
            'name' => $data->name,
            'username' => $data->username,
            'email' => $data->email,
            'role' => $data->role,
            'password' => Hash::make($data->password),
        ]);
        return redirect()->route('user_add')->with('status', 'Berhasil menambahkan user');
    }
    public function keanggotaan_apindo_store(Request $data)
    {
        $data->validate([
            'nama_pt' => ['required', 'max:255'],
        ]);

        KeanggotaanApindo::create([
            'nama_pt' => $data->nama_pt,
            'contact_person' => $data->contact_person,
            'alamat' => $data->alamat,
        ]);
        return redirect()->route('keanggotaan_apindo_add')->with('status', 'Berhasil menambahkan anggota');
    }
    public function pelatihan_seminar_store(Request $data)
    {
        $data->validate([
            'topik' => ['required', 'max:255'],
            'waktu' => ['required', 'max:35'],
            'peserta' => ['required', 'min:1', 'max:255'],
            'registrasi' => ['required', 'min:6', 'max:255'],
            'tempat' => ['required', 'min:6', 'max:255'],
            'narasumber' => ['required', 'min:3', 'max:255'],
            'investasi' => ['required', 'min:3', 'max:255']
        ]);

        PelatihanSeminar::create([
            'topik' => $data->topik,
            'waktu' => $data->waktu,
            'peserta' => $data->peserta,
            'registrasi' => $data->registrasi,
            'tempat' => $data->tempat,
            'narasumber' => $data->narasumber,
            'investasi' => $data->investasi
        ]);
        return redirect()->route('pelatihan_seminar_add')->with('status', 'Berhasil membuat jadwal');
    }
    public function artikel_store(Request $request)
    {
        $request->validate([
            'judul' =>    'required|min:5|max:255|',
            'kategori' => 'required|min:1|max:255|',
            'artikel' => 'required|min:5',
        ]);
        $namaGambar = $request->file('gambar');
        if(empty($namaGambar)){
            $data = [
                        'slug' => str_slug($request->judul, '-'),
                        'judul' => $request->judul,
                        'kategori' => $request->kategori,
                        'artikel' => $request->artikel
                    ];
        }else{
            $data = [
                        'slug' => str_slug($request->judul, '-'),
                        'judul' => $request->judul,
                        'kategori' => $request->kategori,
                        'artikel' => $request->artikel,
                        'gambar' => $request->file('gambar')->store('artikel')
                    ];
        }
        Artikel::create($data);
        return redirect()->route('artikel_add')->with('status', 'Berhasil buat artikel');
    }
    public function gallery_store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|max:100000'
        ]);
        $data = [
            'gambar' => $request->file('gambar')->store('galeri')
        ];
        Gallery::create($data);
        return redirect()->route('gallery_add')->with('status', 'Gambar berhasil ditambahkan');
    }
    public function logo_anggota_store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|max:100000'
        ]);
        $namaGambar = $request->file('gambar');
        $data = [
            'link'   => $request->link,
            'gambar' => $request->file('gambar')->store('logo anggota')
        ];
        LogoAnggota::create($data);
        return redirect()->route('logo_anggota_add')->with('status', 'Berhasil tambah logo Anggota');
    }   
    public function sejarah_store(Request $request)
    {
        $request->validate([
            'sejarah' => 'required|min:5'
        ]);
        $data = [
            'sejarah' => $request->sejarah
        ];
        Sejarah::create($data);
        return redirect()->back();
    }
    public function hubungi_kami_teks_store(Request $request)
    {
        $request->validate([
            'hubungi_kami_teks' => 'required|min:5'
        ]);
        $namaGambar = $request->file('gambar');
        $namaGambar2 = $request->file('gambar2');

        if(!empty($namaGambar) && !empty($namaGambar2)){
            $data = [
                'teks' => $request->hubungi_kami_teks,
                'gambar' => $request->file('gambar')->store('hubungi kami'),
                'gambar2' => $request->file('gambar2')->store('hubungi kami'),
                'kategori' => 'hubungi_kami_teks'
            ];
        }elseif(!empty($namaGambar) && empty($namaGambar2)){
            $data = [
                'teks' => $request->hubungi_kami_teks,
                'gambar' => $request->file('gambar')->store('hubungi kami'),
                'kategori' => 'hubungi_kami_teks'
            ];
        }elseif(!empty($namaGambar2) && empty($namaGambar)){
            $data = [
                'teks' => $request->hubungi_kami_teks,
                'gambar2' => $request->file('gambar2')->store('hubungi kami'),
                'kategori' => 'hubungi_kami_teks'
            ];
        }else{
            $data = [
                'teks' => $request->hubungi_kami_teks,
                'kategori' => 'hubungi_kami_teks'
            ];
        }
        HubungiKami::create($data);
        return redirect()->back();
    }
    public function kantor_sekretariat_store(Request $request)
    {
        $request->validate([
            'alamat' => 'required|min:5',
            'no_telepon' => 'required|min:5',
            'email' => 'required|min:5',
            'kode_pos' => 'required|min:5'
        ]);
        $data = [
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'kode_pos' => $request->kode_pos,
            'kategori' => 'kantor_sekretariat'
        ];
        HubungiKami::create($data);
        return redirect()->back();
    }
    public function kontak_person_store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'no_telepon' => 'required|min:5',
            'email' => 'required|min:5'
        ]);
        $data = [
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'kategori' => 'kontak_person'
        ];
        HubungiKami::create($data);
        return redirect()->back();
    }
    public function teks_berjalan_store(Request $request)
    {
        $request->validate([
            'teks_berjalan' => 'required|min:5'
        ]);
        $data = [
            'teks' => $request->teks_berjalan
        ];
        TeksBerjalan::create($data);
        return redirect()->back();
    }
    public function footer_store(Request $request)
    {
        $request->validate([
            'footer' => 'required|min:5'
        ]);
        $data = [
            'teks' => $request->footer
        ];
        Footer::create($data);
        return redirect()->back();
    }
    public function hubungan_industrial_store(Request $request)
    {
        $request->validate([
            'hubungan_industrial' => 'required|min:5'
        ]);
        $data = [
            'teks' => $request->hubungan_industrial,
            'kategori' => 'hubungan_industrial'
        ];
        ProgramKerja::create($data);
        return redirect()->back();
    }
    public function pelatihan_store(Request $request)
    {
        $request->validate([
            'pelatihan' => 'required|min:5'
        ]);
        $data = [
            'teks' => $request->pelatihan,
            'kategori' => 'pelatihan'
        ];
        ProgramKerja::create($data);
        return redirect()->back();
    }
    public function hubungan_masyarakat_store(Request $request)
    {
        $request->validate([
            'hubungan_masyarakat' => 'required|min:5'
        ]);
        $data = [
            'teks' => $request->hubungan_masyarakat,
            'kategori' => 'hubungan_masyarakat'
        ];
        ProgramKerja::create($data);
        return redirect()->back();
    }
    public function bidang_umkm_store(Request $request)
    {
        $request->validate([
            'bidang_umkm' => 'required|min:5'
        ]);
        $data = [
            'teks' => $request->bidang_umkm,
            'kategori' => 'bidang_umkm'
        ];
        ProgramKerja::create($data);
        return redirect()->back();
    }
    public function visi_misi_store(Request $request)
    {
        $request->validate([
            'visi' => 'required|min:5',
            'misi' => 'required|min:5'
        ]);
        $data = [
            'visi' => $request->visi,
            'misi' => $request->misi
        ];
        VisiMisi::create($data);
        return redirect()->back();
    }
    public function undang_undang_store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|max:100000'
        ]);
        $nama = $request->nama;
        if(!empty($nama)){
             $data = [
                'gambar' => $request->file('gambar')->store('ketenagakerjaan'),
                'nama' => $nama,
                'kategori' => 'undang undang'
            ];
        }else{ 
             $data = [
                'gambar' => $request->file('gambar')->store('ketenagakerjaan'),
                'kategori' => 'undang undang'
            ];
        }
      Ketenagakerjaan::create($data);
        return redirect()->route('undang_undang_add')->with('status', 'Berhasil menambahkan Undang Undang');
    }
    public function struktur_pengurus_store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|max:100000',
            'nama' => 'required|min:3',
            'jabatan' => 'required|min:3'
        ]);
        $namaGambar = $request->file('gambar');
        if(!empty($namaGambar)){
             $data = [
                'gambar' => $request->file('gambar')->store('struktur_pengurus'),
                'nama' => $request->nama,
                'jabatan' => $request->jabatan
            ];
        }else{ 
             $data = [
                'nama' => $request->nama,
                'jabatan' => $request->jabatan
            ];
        }
      StrukturPengurus::create($data);
        return redirect()->route('struktur_pengurus_add')->with('status', 'Berhasil menambahkan Pengurus');
    }    
    public function peraturan_pemerintah_store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|max:100000'
        ]);
        $nama = $request->nama;
        if(!empty($nama)){
            $data = [
                'gambar' => $request->file('gambar')->store('ketenagakerjaan'),
                'nama' => $nama,
                'kategori' => 'peraturan pemerintah'
            ];
        }else{
            $data = [
                'gambar' => $request->file('gambar')->store('ketenagakerjaan'),
                'kategori' => 'peraturan pemerintah'
            ];
        }
        Ketenagakerjaan::create($data);
        return redirect()->route('peraturan_pemerintah_add')->with('status', 'Berhasil menambahkan Peraturan Pemerintah');
    }
    public function permen_store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|max:100000'
        ]);
        $nama = $request->nama;
        if(!empty($nama)){
             $data = [
                'gambar' => $request->file('gambar')->store('ketenagakerjaan'),
                'nama' => $nama,
                'kategori' => 'permen'
            ];
        }else{ 
             $data = [
                'gambar' => $request->file('gambar')->store('ketenagakerjaan'),
                'kategori' => 'permen'
            ];
        }        Ketenagakerjaan::create($data);
        return redirect()->route('permen_add')->with('status', 'Berhasil menambahkan Permen');
    }
    public function kepmen_store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|max:100000'
        ]);
        $nama = $request->nama;
        if(!empty($nama)){
            $data = [
                'gambar' => $request->file('gambar')->store('ketenagakerjaan'),
                'nama' => $nama,
                'kategori' => 'kepmen'
            ];
        }else{
            $data = [
                'gambar' => $request->file('gambar')->store('ketenagakerjaan'),
                'kategori' => 'kepmen'
            ];
        }
        Ketenagakerjaan::create($data);
        return redirect()->route('kepmen_add')->with('status', 'Berhasil menambahkan Kepmen');
    }
    public function surat_edaran_menteri_store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|max:100000'
        ]);
        $nama = $request->nama;
        if(!empty($nama)){
             $data = [
                'gambar' => $request->file('gambar')->store('ketenagakerjaan'),
                'nama' => $nama,
                'kategori' => 'surat edaran menteri'
            ];
        }else{ 
             $data = [
                'gambar' => $request->file('gambar')->store('ketenagakerjaan'),
                'kategori' => 'surat edaran menteri'
            ];
        }        Ketenagakerjaan::create($data);
        return redirect()->route('surat_edaran_menteri_add')->with('status', 'Berhasil menambahkan Surat Edaran Menteri');
    }
    public function perda_dki_store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|max:100000'
        ]);
        $nama = $request->nama;
        if(!empty($nama)){
             $data = [
                'gambar' => $request->file('gambar')->store('ketenagakerjaan'),
                'nama' => $nama,
                'kategori' => 'perda dki'
            ];
        }else{ 
             $data = [
                'gambar' => $request->file('gambar')->store('ketenagakerjaan'),
                'kategori' => 'perda dki'
            ];
        }
        Ketenagakerjaan::create($data);
        return redirect()->route('perda_dki_add')->with('status', 'Berhasil menambahkan Perda DKI');
    }




    // Form edit show
    public function keanggotaan_apindo_edit($id)
    {
        return view('admin.crud.keanggotaan_apindo.keanggotaan_apindo_edit', ['data' => KeanggotaanApindo::findOrFail($id)]);
    }
    public function pelatihan_seminar_edit($id)
    {
        return view( 'admin.crud.pelatihan_seminar.pelatihan_seminar_edit', ['data' => PelatihanSeminar::findOrFail($id)]);
    }
    public function artikel_edit($id)
    {
        return view('admin.crud.artikel.artikel_edit', ['data' => Artikel::findOrFail($id)]);
    }
    public function user_edit($id)
    {
        return view('admin.crud.user.user_edit', ['data' => User::findOrFail($id)]);
    }
    public function struktur_pengurus_edit($id)
    {
        return view('admin.crud.struktur_pengurus.struktur_pengurus_edit', ['data' => StrukturPengurus::findOrFail($id)]);
    }


    // form update
    public function struktur_pengurus_update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'max:100000',
            'nama' => 'required|min:3',
        ]);
        $namaGambar = $request->file('gambar');
        if(!empty($namaGambar)){
             $data = [
                'gambar' => $request->file('gambar')->store('struktur_pengurus'),
                'nama' => $request->nama,
                'jabatan' => $request->jabatan
            ];
        }else{ 
             $data = [
                'nama' => $request->nama,
                'jabatan' => $request->jabatan
            ];
        }
      StrukturPengurus::findOrFail($id)->update($data);
        return redirect()->route('struktur_pengurus_edit',$id)->with('status', 'Berhasil mengubah Pengurus');
    }   
    public function keanggotaan_apindo_update(Request $data, $id)
    {
        $data->validate([
            'nama_pt' => ['required', 'max:255'],
        ]);

        KeanggotaanApindo::findOrFail($id)->update([
            'nama_pt' => $data->nama_pt,
            'contact_person' => $data->contact_person,
            'alamat' => $data->alamat,
        ]);
        return redirect()->route('keanggotaan_apindo_edit', $id)->with('status', 'Berhasil update data anggota');
    }
    public function pelatihan_seminar_update(Request $data, $id)
    {
        $data->validate([
            'topik' => ['required', 'max:255'],
            'waktu' => ['required', 'max:35'],
            'peserta' => ['required', 'min:1', 'max:255'],
            'registrasi' => ['required', 'min:6', 'max:255'],
            'tempat' => ['required', 'min:6', 'max:255'],
            'narasumber' => ['required', 'min:3', 'max:255'],
            'investasi' => ['required', 'min:3', 'max:255']
        ]);

        PelatihanSeminar::findOrFail($id)->update([
            'topik' => $data->topik,
            'waktu' => $data->waktu,
            'peserta' => $data->peserta,
            'registrasi' => $data->registrasi,
            'tempat' => $data->tempat,
            'narasumber' => $data->narasumber,
            'investasi' => $data->investasi
        ]);
        return redirect()->route('pelatihan_seminar_edit', $id)->with('status', 'Berhasil update jadwal');
    }
    public function admin_setting_avatar_update(Request $request, $id)
    {
        $namaGambar = $request->file('gambar');
        $password = $request->password;
        if(!empty($namaGambar) && $password){
            User::findOrFail($id)->update([
                'gambar' => $request->file('gambar')->store('admin avatar'),
                'password' => Hash::make($request->password)
            ]);
        }elseif(!empty($namaGambar) && !$password){
            User::findOrFail($id)->update([
                'gambar' => $request->file('gambar')->store('admin avatar')
            ]);
        }elseif($password && empty($namaGambar)){
            User::findOrFail($id)->update([
                'password' => Hash::make($request->password)
            ]);
        }
        return redirect(route('admin_setting'))->with('status', 'Berhasil update');
    }      
    public function user_update(Request $request, $id)
    {
        if(!empty($request->password)){
            User::findOrFail($id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password),
            ]);
        }else{
            User::findOrFail($id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'role' => $request->role,
            ]);
        }
        return redirect()->route('user_edit',$id)->with('status', 'Berhasil mengupdate user');
    }
    public function sejarah_update(Request $request, $id)
    {
        Sejarah::findOrFail($id)->update([
            'sejarah' => $request->sejarah
        ]);
        return redirect()->route('sejarah_add');
    }
    public function hubungi_kami_teks_update(Request $request, $id)
    {
        $namaGambar = $request->file('gambar');
        $namaGambar2 = $request->file('gambar2');
        if(!empty($namaGambar) && !empty($namaGambar2)){
            HubungiKami::findOrFail($id)->update([
                'gambar' => $request->file('gambar')->store('hubungi kami'),
                'gambar2' => $request->file('gambar2')->store('hubungi kami'),
                'teks' => $request->hubungi_kami_teks
            ]);
        }elseif(!empty($namaGambar) && empty($namaGambar2)){
            HubungiKami::findOrFail($id)->update([
                'gambar' => $request->file('gambar')->store('hubungi kami'),
                'teks' => $request->hubungi_kami_teks
            ]);
        }elseif(!empty($namaGambar2) && empty($namaGambar)){
            HubungiKami::findOrFail($id)->update([
                'gambar2' => $request->file('gambar2')->store('hubungi kami'),
                'teks' => $request->hubungi_kami_teks
            ]);
        }else{
            HubungiKami::findOrFail($id)->update([
                'teks' => $request->hubungi_kami_teks
            ]);
        }
        return redirect()->route('hubungi_kami_teks_add');
    }
    public function kantor_sekretariat_update(Request $request, $id)
    {
        HubungiKami::findOrFail($id)->update([
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'kode_pos' => $request->kode_pos
        ]);
        return redirect()->route('kantor_sekretariat_add');
    }
    public function kontak_person_update(Request $request, $id)
    {
        HubungiKami::findOrFail($id)->update([
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email
        ]);
        return redirect()->route('kontak_person_add');
    }
    public function teks_berjalan_update(Request $request, $id)
    {
        TeksBerjalan::findOrFail($id)->update([
            'teks' => $request->teks_berjalan
        ]);
        return redirect()->route('teks_berjalan_add');
    }
    public function footer_update(Request $request, $id)
    {
        Footer::findOrFail($id)->update([
            'teks' => $request->footer
        ]);
        return redirect()->route('footer_add');
    }
    public function hubungan_industrial_update(Request $request, $id)
    {
        ProgramKerja::findOrFail($id)->update([
            'teks' => $request->hubungan_industrial
        ]);
        return redirect()->route('hubungan_industrial_add');
    }
    public function pelatihan_update(Request $request, $id)
    {
        ProgramKerja::findOrFail($id)->update([
            'teks' => $request->pelatihan
        ]);
        return redirect()->route('pelatihan_add');
    }
    public function hubungan_masyarakat_update(Request $request, $id)
    {
        ProgramKerja::findOrFail($id)->update([
            'teks' => $request->hubungan_masyarakat
        ]);
        return redirect()->route('hubungan_masyarakat_add');
    }
    public function bidang_umkm_update(Request $request, $id)
    {
        ProgramKerja::findOrFail($id)->update([
            'teks' => $request->bidang_umkm
        ]);
        return redirect()->route('bidang_umkm_add');
    }
    public function visi_misi_update(Request $request, $id)
    {
        VisiMisi::findOrFail($id)->update([
            'visi' => $request->visi,
            'misi' => $request->misi
        ]);
        return redirect()->route('visi_misi_add');
    }
    public function artikel_update(Request $request, $id)
    {
        $namaGambar = $request->file('gambar');
        if (empty($namaGambar)) {
            Artikel::findOrFail($id)->update([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'artikel' => $request->artikel
            ]);
        } else {
            Artikel::findOrFail($id)->update([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'artikel' => $request->artikel,
                'gambar' => $request->file('gambar')->store('struktur')
            ]);
        }
        return redirect()->route('artikel_edit', $id)->with('status', 'Berhasil update artikel');
    }

    public function destroy($table, $id)
    {
        if ($table=='sejarah'){
            Sejarah::destroy($id);
        }else if($table=='struktur'){
            Struktur::destroy($id);
        }else if($table=='team'){
            Team::destroy($id);
        }else if($table=='artikel'){
            Artikel::destroy($id);
        }else if($table=='visi_misi'){
            VisiMisi::destroy($id);
        }else if ($table == 'gallery') {
            Gallery::destroy($id);
        }else if ($table == 'logo_anggota') {
            LogoAnggota::destroy($id);
        }else if ($table == 'keanggotaan') {
            KeanggotaanApindo::destroy($id);
        }else if ($table == 'pelatihan_seminar') {
            PelatihanSeminar::destroy($id);
        }else if ($table == 'hubungi_kami') {
            Hubungi_kami::destroy($id);
        }else if ($table == 'ketenagakerjaan') {
            Ketenagakerjaan::destroy($id);
        }else if ($table == 'user') {
            User::destroy($id);
        }else if ($table == 'program_kerja') {
            ProgramKerja::destroy($id);
        }else if ($table == 'struktur_pengurus') {
            StrukturPengurus::destroy($id);
        }
        return redirect()->back();
    }
}
