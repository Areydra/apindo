<?php

// Auth::routes();

Route::post('login','Auth\LoginController@login')->name('login');
// Route::get('login',  'Auth\LoginController@showLoginForm')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// ------------PUBLIK-------------
Route::group(['middleware' => 'web'], function () {
    Route::get('/','userController@index');

    Route::get('/artikel', 'userController@cari')->name('cari');

    Route::get('/layanan-bantuan-hukum', 'userController@layanan_bantuan_hukum')->name('lbh');
    Route::get('/hukum-dan-ketenagakerjaan', 'userController@hukum_dan_ketenagakerjaan')->name('hdk');
    Route::get('/media-bisnis-dan-industri', 'userController@media_bisnis_dan_industri')->name('mbdi');
    Route::get('/agenda-pelatihan-&-informasi-anggota', 'userController@agenda_pelatihan_informasi_anggota')->name('apia');

    // ARTIKEL
    Route::get('/sejarah', 'ArtikelController@sejarah')->name('sejarah');
    Route::get('/gallery', 'ArtikelController@gallery')->name('gallery');
    Route::get('/pengembangan-sdm', 'ArtikelController@sdm')->name('sdm');
    route::get('/visi-misi', 'ArtikelController@visi_misi')->name('visi-misi');
    Route::get('/hubungi-kami', 'ArtikelController@hubungi_kami')->name('hubungi_kami');
    Route::get('/tentang-kami', 'ArtikelController@tentang_kami')->name('tentang_kami');
    route::get('/program-kerja', 'ArtikelController@program_kerja')->name('program_kerja');
    Route::get('/artikel/{slug}', 'ArtikelController@artikel_detail')->name('artikel_detail');
    Route::get('/lks-tripartite', 'ArtikelController@lks_tripartite')->name('lks_tripartite');
    Route::get('/bisnis-industri', 'ArtikelController@bisnis_industri')->name('bisnis_industri');
    Route::get('/serikat-pekerja', 'ArtikelController@serikat_pekerja')->name('serikat_pekerja');
    Route::post('/hubungi-kami', 'ArtikelController@hubungi_kami_post')->name('hubungi_kami_post');
    Route::get('/struktur-pengurus', 'ArtikelController@struktur_pengurus')->name('struktur_pengurus');
    Route::get('/informasi-kegiatan', 'ArtikelController@informasi_kegiatan')->name('informasi_kegiatan');
    Route::get('/hukum-dan-ketenagakerjaan', 'ArtikelController@hukum_ketenagakerjaan')->name('hukum_ketenagakerjaan');
    
    // KETENAGAKERJAAN
    Route::get('/permen', 'KetenagakerjaanController@permen')->name('permen');
    Route::get('/kepmen', 'KetenagakerjaanController@kepmen')->name('kepmen');
    Route::get('/perda-dki', 'KetenagakerjaanController@perda_dki')->name('perda_dki');
    Route::get('/undang-undang', 'KetenagakerjaanController@undang_undang')->name('undang_undang');
    Route::get('/surat-edaran-mentri', 'KetenagakerjaanController@surat_edaran')->name('surat_edaran');
    Route::get('/peraturan-pemerintah', 'KetenagakerjaanController@peraturan_pemerintah')->name('peraturan_pemerintah');

    // LAYANAN ANGGOTA
    Route::get('/pelatihan-seminar', 'userController@pelatihan_seminar')->name('pelatihan_seminar');
    Route::get('/informasi-anggota', 'userController@informasi_anggota')->name('informasi_anggota');
});


// ----------ADMIN----------
Route::group(['middleware' => 'admin'], function () {

    // VIEW-------
    route::get('/user', 'adminController@user')->name('user');
    route::get('/permen-view', 'adminController@permen')->name('permen_view');
    route::get('/kepmen-view', 'adminController@kepmen')->name('kepmen_view');
    route::get('/gallery-view', 'adminController@gallery')->name('gallery_view');
    route::get('/artikel-view', 'adminController@artikel')->name('artikel_view');
    route::get('/perda-dki-view', 'adminController@perda_dki')->name('perda_dki_view');
    route::get('/logo-anggota-view', 'adminController@logo_anggota')->name('logo_anggota_view');
    route::get('/struktur-pengurus-view', 'adminController@struktur_pengurus')->name('struktur_pengurus_view');
    route::get('/undang-undang-view', 'adminController@undang_undang')->name('undang_undang_view');
    route::get('/pelatihan-seminar-view', 'adminController@pelatihan_seminar')->name('pelatihan_seminar_view');
    route::get('/keanggotaan-apindo-view', 'adminController@keanggotaan_apindo')->name('keanggotaan_apindo_view');
    route::get('/peraturan-pemerintah-view', 'adminController@peraturan_pemerintah')->name('peraturan_pemerintah_view');
    route::get('/surat-edaran-menteri-view', 'adminController@surat_edaran_menteri')->name('surat_edaran_menteri_view');

    // Halaman Tambahh-----
    route::get('/admin', 'adminController@index')->name('admin');
    route::get('/user-add', 'adminController@user_add')->name('user_add');
    route::get('/permen-add', 'adminController@permen_add')->name('permen_add');
    route::get('/kepmen-add', 'adminController@kepmen_add')->name('kepmen_add');
    route::get('/artikel-add', 'adminController@artikel_add')->name('artikel_add');
    route::get('/sejarah-add', 'adminController@sejarah_add')->name('sejarah_add');
    route::get('/hubungi-kami-teks-add', 'adminController@hubungi_kami_teks_add')->name('hubungi_kami_teks_add');
    route::get('/kantor-sekretariat-add', 'adminController@kantor_sekretariat_add')->name('kantor_sekretariat_add');
    route::get('/kontak-person-add', 'adminController@kontak_person_add')->name('kontak_person_add');
    route::get('/teks_berjalan-add', 'adminController@teks_berjalan_add')->name('teks_berjalan_add');
    route::get('/footer-add', 'adminController@footer_add')->name('footer_add');
    route::get('/hubungan-industrial-add', 'adminController@hubungan_industrial_add')->name('hubungan_industrial_add');
    route::get('/pelatihan-add', 'adminController@pelatihan_add')->name('pelatihan_add');
    route::get('/hubungan-masyarakat-add', 'adminController@hubungan_masyarakat_add')->name('hubungan_masyarakat_add');
    route::get('/bidang-umkm-add', 'adminController@bidang_umkm_add')->name('bidang_umkm_add');
    route::get('/visi-misi-add', 'adminController@visi_misi_add')->name('visi_misi_add');
    route::get('/gallery-add', 'adminController@gallery_add')->name('gallery_add');
    route::get('/admin-setting', 'adminController@admin_setting')->name('admin_setting');
    route::get('/perda-dki-add', 'adminController@perda_dki_add')->name('perda_dki_add');
    route::get('/logo-anggota-add', 'adminController@logo_anggota_add')->name('logo_anggota_add');
    route::get('/struktur-pengurus-add', 'adminController@struktur_pengurus_add')->name('struktur_pengurus_add');
    route::get('/undang-undang_add', 'adminController@undang_undang_add')->name('undang_undang_add');
    route::get('/pesan-hubungi-kami', 'adminController@pesan_hubungi_kami')->name('pesan_hubungi_kami');
    route::get('/pelatihan-seminar-add', 'adminController@pelatihan_seminar_add')->name('pelatihan_seminar_add');
    route::get('/keanggotaan-apindo-add', 'adminController@keanggotaan_apindo_add')->name('keanggotaan_apindo_add');
    route::get('/peraturan-pemerintah_add', 'adminController@peraturan_pemerintah_add')->name('peraturan_pemerintah_add');
    route::get('/surat-edaran-menteri-add', 'adminController@surat_edaran_menteri_add')->name('surat_edaran_menteri_add');

    //  STORE Data -----------
    route::post('/user-store', 'adminController@user_store')->name('user_store');
    route::post('/admin_store', 'adminController@admin_store')->name('admin_store');
    route::post('/permen_store', 'adminController@permen_store')->name('permen_store');
    route::post('/kepmen_store', 'adminController@kepmen_store')->name('kepmen_store');
    route::post('/gallery_store', 'adminController@gallery_store')->name('gallery_store');
    route::post('/sejarah_store', 'adminController@sejarah_store')->name('sejarah_store');
    route::post('/hubungi_kami_teks_store', 'adminController@hubungi_kami_teks_store')->name('hubungi_kami_teks_store');
    route::post('/kantor_sekretariat_store', 'adminController@kantor_sekretariat_store')->name('kantor_sekretariat_store');
    route::post('/kontak_person_store', 'adminController@kontak_person_store')->name('kontak_person_store');
    route::post('/teks_berjalan_store', 'adminController@teks_berjalan_store')->name('teks_berjalan_store');
    route::post('/footer_store', 'adminController@footer_store')->name('footer_store');
    route::post('/hubungan_industrial_store', 'adminController@hubungan_industrial_store')->name('hubungan_industrial_store');
    route::post('/pelatihan_store', 'adminController@pelatihan_store')->name('pelatihan_store');
    route::post('/hubungan_masyarakat_store', 'adminController@hubungan_masyarakat_store')->name('hubungan_masyarakat_store');
    route::post('/bidang_umkm_store', 'adminController@bidang_umkm_store')->name('bidang_umkm_store');
    route::post('/artikel_store', 'adminController@artikel_store')->name('artikel_store');
    route::post('/perda_dki_store', 'adminController@perda_dki_store')->name('perda_dki_store');
    route::post('/logo_anggota_store', 'adminController@logo_anggota_store')->name('logo_anggota_store');
    route::post('/struktur_pengurus_store', 'adminController@struktur_pengurus_store')->name('struktur_pengurus_store');
    route::post('/undang_undang_store', 'adminController@undang_undang_store')->name('undang_undang_store');
    route::post('/pelatihan-seminar-store', 'adminController@pelatihan_seminar_store')->name('pelatihan_seminar_store');
    route::post('/keanggotaan-apindo-store', 'adminController@keanggotaan_apindo_store')->name('keanggotaan_apindo_store');
    route::post('/peraturan_pemerintah_store', 'adminController@peraturan_pemerintah_store')->name('peraturan_pemerintah_store');
    route::post('/surat_edaran_menteri_store', 'adminController@surat_edaran_menteri_store')->name('surat_edaran_menteri_store');

    // Halaman Edit Data------
    route::get('/user-edit/{id}', 'adminController@user_edit')->name('user_edit');
    route::get('/artikel-edit/{id}', 'adminController@artikel_edit')->name('artikel_edit');
    route::get('/pelatihan-seminar-edit/{id}', 'adminController@pelatihan_seminar_edit')->name( 'pelatihan_seminar_edit');
    route::get('/struktur-pengurus-edit/{id}', 'adminController@struktur_pengurus_edit')->name( 'struktur_pengurus_edit');
    route::get('/keanggotaan-apindo-edit/{id}', 'adminController@keanggotaan_apindo_edit')->name('keanggotaan_apindo_edit');
    
    // Update Data------
    route::put('/user_update/{id}', 'adminController@user_update')->name('user_update');
    route::put('/admin_update/{id}', 'adminController@admin_update')->name('admin_update');
    route::put('/artikel_update/{id}', 'adminController@artikel_update')->name('artikel_update');
    route::put('/sejarah_update/{id}', 'adminController@sejarah_update')->name('sejarah_update');
    route::put('/hubungi_kami_teks_update/{id}', 'adminController@hubungi_kami_teks_update')->name('hubungi_kami_teks_update');
    route::put('/kantor_sekretariat_update/{id}', 'adminController@kantor_sekretariat_update')->name('kantor_sekretariat_update');
    route::put('/kontak_person_update/{id}', 'adminController@kontak_person_update')->name('kontak_person_update');
    route::put('/teks_berjalan_update/{id}', 'adminController@teks_berjalan_update')->name('teks_berjalan_update');
    route::put('/footer_update/{id}', 'adminController@footer_update')->name('footer_update');
    route::put('/hubungan_industrial_update/{id}', 'adminController@hubungan_industrial_update')->name('hubungan_industrial_update');
    route::put('/pelatihan_update/{id}', 'adminController@pelatihan_update')->name('pelatihan_update');
    route::put('/hubungan_masyarakat_update/{id}', 'adminController@hubungan_masyarakat_update')->name('hubungan_masyarakat_update');
    route::put('/bidang_umkm_update/{id}', 'adminController@bidang_umkm_update')->name('bidang_umkm_update');
    route::put('/visi_misi_update/{id}', 'adminController@visi_misi_update')->name('visi_misi_update');
    route::put('/pelatihan-seminar-update/{id}', 'adminController@pelatihan_seminar_update')->name('pelatihan_seminar_update');
    route::put('/struktur-pengurus-update/{id}', 'adminController@struktur_pengurus_update')->name('struktur_pengurus_update');
    route::put('/keanggotaan-apindo/{id}', 'adminController@keanggotaan_apindo_update')->name('keanggotaan_apindo_update');
    route::put('/admin-setting-avatar/{id}', 'adminController@admin_setting_avatar_update')->name('admin_setting_avatar_update');
    
    // Delete Data--------
    route::get('/delete/{table}/{id}', 'adminController@destroy')->name('delete');

});

Route::get('/home', 'userController@index')->name('home');
