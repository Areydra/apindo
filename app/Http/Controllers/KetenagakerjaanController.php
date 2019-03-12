<?php

namespace App\Http\Controllers;

use App\Models\LogoAnggota;
use App\Models\Ketenagakerjaan;
use Illuminate\Http\Request;
use App\Models\Footer;

class KetenagakerjaanController extends Controller
{
    // KETENAGAKERJAAN
    public function undang_undang()
    {
        return view('ketenagakerjaan.undang_undang',  ['logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),'footer' => Footer::get()->first(),'data' => Ketenagakerjaan::where('kategori', 'undang undang')->get()]);
    }
    public function peraturan_pemerintah()
    {
        return view('ketenagakerjaan.peraturan_pemerintah',  ['logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),'footer' => Footer::get()->first(),'data' => Ketenagakerjaan::where('kategori', 'peraturan pemerintah')->get()]);
    }
    public function permen()
    {
        return view('ketenagakerjaan.permen',  ['logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),'footer' => Footer::get()->first(),'data' => Ketenagakerjaan::where('kategori', 'permen')->get()]);
    }
    public function kepmen()
    {
        return view('ketenagakerjaan.kepmen',  ['logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),'footer' => Footer::get()->first(),'data' => Ketenagakerjaan::where('kategori', 'kepmen')->get()]);
    }
    public function surat_edaran()
    {
        return view('ketenagakerjaan.surat_edaran',  ['logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),'footer' => Footer::get()->first(),'data' => Ketenagakerjaan::where('kategori', 'surat edaran menteri')->get()]);
    }
    public function perda_dki()
    {
        return view('ketenagakerjaan.perda_dki',  ['logo_anggota' => LogoAnggota::orderBy('id', 'DESC')->paginate(10),'footer' => Footer::get()->first(),'data' => Ketenagakerjaan::where('kategori', 'perda dki')->get()]);
    }
    public function bpjs_ketenagakerjaan()
    {
        return view('ketenagakerjaan.bpjs_ketenagakerjaan');
    }
    public function bpjs_kesehatan()
    {
        return view('ketenagakerjaan.bpjs_kesehatan');
    }
}
