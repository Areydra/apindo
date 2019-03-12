@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Keanggotaan DPK Apindo Jaktim</h4><hr>
        @if(session('status'))
          <div class="alert alert-success" style="background-color: #1bcfb4">
            <p style="color: white">{{ session('status') }}</p>
          </div>
        @endif
        <form class="forms-sample" method="POST" action="{{ route('keanggotaan_apindo_update', $data->id) }}">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-lg-6">
              @if ($errors->has('nama_pt'))
                      <strong style="color:red">{{ $errors->first('nama_pt') }}</strong><br>
              @endif
              <div class="form-group">
                <label for="exampleInputName1">Nama PT</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="nama_pt" value="{{ $data->nama_pt }}">
              </div>
            </div>
            <div class="col-lg-6">
              @if ($errors->has('contact_person'))
                      <strong style="color:red">{{ $errors->first('contact_person') }}</strong><br>
              @endif
              <div class="form-group">
                <label for="exampleInputName1">Contact Person</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="contact_person" value="{{ $data->contact_person }}">
              </div>
            </div>
          </div>
          <div class="form-group">
              @if ($errors->has('alamat'))
                      <strong style="color:red">{{ $errors->first('alamat') }}</strong><br>
              @endif
            <label for="exampleInputName1">Alamat</label>
            <textarea name="alamat" id="mytextarea" style="height: 250px" class="form-control">{{ old('alamat') }}</textarea>
          </div>
          <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
          <a href="{{ route('keanggotaan_apindo') }}" class="btn btn-light">Halaman Data Anggota</a>
        </form>
      </div>
    </div>
  </div>
@include('layouts.admin.footer')