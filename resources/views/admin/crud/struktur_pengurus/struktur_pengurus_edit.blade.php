@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
  <div class="content-wrapper">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Struktur Pengurus</h4><hr>
            @if(session('status'))
              <div class="alert alert-success" style="background-color: #1bcfb4">
                <p style="color: white">{{ session('status') }}</p>
              </div>
            @endif
            <form class="forms-sample" method="POST" action="{{ route('struktur_pengurus_update', $data->id) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    @if ($errors->has('nama'))
                          <strong style="color: red">{{ $errors->first('nama') }}</strong>
                    @endif         <br>     
                    <label>nama</label>
                    <input type="text" name="nama" placeholder="nama" class="form-control" value="{{ $data->nama }}">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    @if ($errors->has('jabatan'))
                          <strong style="color: red">{{ $errors->first('jabatan') }}</strong>
                    @endif         <br>     
                    <label>jabatan</label>
                    <input type="text" name="jabatan" placeholder="jabatan" class="form-control" value="{{ $data->jabatan }}">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <img src="{{ asset('storage/images/'.$data->gambar)}}" width="200px">
                @if ($errors->has('gambar'))
                      <strong style="color: red">{{ $errors->first('gambar') }}</strong>
                @endif         <br>     

                <label>Image upload</label>
                <input type="file" name="gambar" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload jika ingin mengubah gambar">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                  </span>
                </div>
              </div>
              <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
              <a href="{{ route('struktur_pengurus_view') }}" class="btn btn-light">Halaman Data Struktur Pengurus</a>
            </form>
          </div>
        </div>
      </div>
  </div>
@include('layouts.admin.footer')