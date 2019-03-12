@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
  <div class="content" style="width: 100%">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Tambah Artikel</h4><hr>
          @if(session('status'))
            <div class="alert alert-success" style="background-color: #1bcfb4">
              <p style="color: white">{{ session('status') }}</p>
            </div>
          @endif
          <form class="forms-sample" method="POST" action="{{ route('artikel_store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                @if ($errors->has('judul'))
                      <strong style="color: red">{{ $errors->first('judul') }}</strong>
                @endif         <br>     
              <label for="exampleInputName1">Judul</label>
              <input type="text" class="form-control" id="exampleInputName1" placeholder="judul" name="judul" value="{{ old('judul') }}">
            </div>
            <div class="row">
              <div class="col-lg-6">
                @if ($errors->has('kategori'))
                      <strong style="color: red">{{ $errors->first('kategori') }}</strong>
                @endif              
                <div class="form-group">
                  <label for="exampleSelectGender">Kategori</label>
                  <select class="form-control" id="exampleSelectGender" name="kategori">
                    <option selected disabled>Pilih Kategori</option>
                    <option value="Bisnis dan Industri">Bisnis dan Industri</option>
                    <option value="Hukum dan Ketenagakerjaan">Hukum dan Ketenagakerjaan</option>
                    <option value="Pengembangan SDM">Pengembangan SDM</option>
                    <option value="Serikat Pekerja/Buruh">Serikat Pekerja/Buruh</option>
                    <option value="LKS Tripartite">LKS Tripartite</option>
                    <option value="Informasi Kegiatan Anggota">Informasi Kegiatan Anggota</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                @if ($errors->has('gambar'))
                      <strong style="color: red">{{ $errors->first('gambar') }}</strong>
                @endif              
                <div class="form-group">
                  <label>Image upload</label>
                  <input type="file" name="gambar" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" name="gambar">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
                @if ($errors->has('artikel  '))
                      <strong style="color: red">{{ $errors->first('artikel ') }}</strong>
                @endif            <br>  
              <label for="exampleTextarea1">Artikel</label>
              <textarea class="form-control" id="mytextarea" name="artikel" style="height: 450px">{{ old('artikel') }}</textarea>
            </div>
            <button type="submit" class="btn btn-gradient-primary mr-2">Create</button>
            <a href="{{ route('artikel_view') }}" class="btn btn-light">Halaman Data Artikel</a>
          </form>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div>


@include('layouts.admin.footer')