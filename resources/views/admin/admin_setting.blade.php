@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
  <div class="content-wrapper">
      @if(session('status'))
        <div class="alert alert-success" style="background-color: #2196f3">
          <p style="color: white">{{ session('status') }}</p>
        </div>
      @endif
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Admin setting</h4>
            @if ($data->gambar)
            <form class="forms-sample" method="POST" action="{{ route('admin_setting_avatar_update', $data->id) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label>Avatar upload</label>
                <input type="file" name="gambar" class="file-upload-default">
                <div>
                  <img src="{{ asset('storage/images/'.Auth::user()->gambar) }}" alt="profile" width="150">
                </div>
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label>Ganti Password</label>
                <input type="password" name="password" class="form-control" placeholder="isi jika ingin mengganti password">
              </div>
              <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
              <button class="btn btn-light">Cancel</button>
            </form>
            @else
            <form class="forms-sample" method="POST" action="{{ route('admin_setting_avatar_update', $data->id)}}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label>Image upload</label>
                <input type="file" name="gambar" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                  </span>
                </div>
              </div>
              <button type="submit" class="btn btn-gradient-primary mr-2">Create</button>
              <a href="{{ route('admin') }}" class="btn btn-light">Cancel</a>
            </form>
            @endif
          </div>
        </div>
      </div>
  </div>
@include('layouts.admin.footer')