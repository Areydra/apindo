@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
  <div class="content-wrapper">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Surat Edaran Menteri</h4><hr>
            @if(session('status'))
              <div class="alert alert-success" style="background-color: #1bcfb4">
                <p style="color: white">{{ session('status') }}</p>
              </div>
            @endif
            <form class="forms-sample" method="POST" action="{{ route('surat_edaran_menteri_store') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Nama File</label>
                  <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" placeholder="isi jika tipe file bukan gambar">
                @if ($errors->has('nama'))
                      <strong style="color: red">{{ $errors->first('nama') }}</strong>
                @endif              
              </div>                    
              <div class="form-group">
                <label>Image upload</label>
                <input type="file" name="gambar" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                  </span>
                </div>
                @if ($errors->has('gambar'))
                      <strong style="color: red">{{ $errors->first('gambar') }}</strong>
                @endif              
              </div>
              <button type="submit" class="btn btn-gradient-primary mr-2">Create</button>
              <a href="{{ route('surat_edaran_menteri') }}" class="btn btn-light">Halaman Data Surat Edaran Menteri</a>
            </form>
          </div>
        </div>
      </div>
  </div>
@include('layouts.admin.footer')