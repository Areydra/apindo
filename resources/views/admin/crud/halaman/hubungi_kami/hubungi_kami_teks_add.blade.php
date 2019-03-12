@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
<div class="content" style="width: 100%">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Teks Hubungi Kami</h4>
        @if ($data)
        <form class="forms-sample" method="POST" action="{{ route('hubungi_kami_teks_update', $data->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <textarea class="form-control" id="mytextarea" style="height: 450px" name="hubungi_kami_teks">{!! $data->teks !!}</textarea>
          </div>
          <div class="row">
              <div class="col-lg-6">
                <img src="{{ asset('storage/images/'. $data->gambar) }}" width="150px" height="100px">
                @if ($errors->has('gambar'))
                      <strong style="color: red">{{ $errors->first('gambar') }}</strong>
                @endif              
                <div class="form-group">
                  <label>Image upload</label>
                  <input type="file" name="gambar" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload jikan ingin mengubah gambar" name="gambar">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <img src="{{ asset('storage/images/'. $data->gambar2) }}" width="150px" height="100px">
                @if ($errors->has('gambar2'))
                      <strong style="color: red">{{ $errors->first('gambar2') }}</strong>
                @endif              
                <div class="form-group">
                  <label>Image upload</label>
                  <input type="file" name="gambar2" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload jikan ingin mengubah gambar" name="gambar2">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div>
              </div>
          </div>
          <button type="submit" class="btn btn-gradient-primary mr-2" name="update">Update</button>
        </form>
        @else
        <form class="forms-sample" method="POST" action="{{ route('hubungi_kami_teks_store') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <textarea class="form-control" id="mytextarea" style="height: 450px" name="hubungi_kami_teks"></textarea>
          </div>
          <div class="row">
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
              <div class="col-lg-6">
                @if ($errors->has('gambar2'))
                      <strong style="color: red">{{ $errors->first('gambar2') }}</strong>
                @endif              
                <div class="form-group">
                  <label>Image upload</label>
                  <input type="file" name="gambar2" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" name="gambar2">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div>
              </div>
          </div>
          <button type="submit" class="btn btn-gradient-primary mr-2" name="tambah">Tambah</button>
        </form>
        @endif
      </div>
    </div>
  </div>
</div>
@include('layouts.admin.footer')