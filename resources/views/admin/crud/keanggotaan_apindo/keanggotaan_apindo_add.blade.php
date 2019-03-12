@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
    <div class="card" style="width: 100%">
      <div class="card-body">
        <h4 class="card-title text-center">Tambah Anggota Apindo DPK Jaktim</h4><hr>
          @if(session('status'))
            <div class="alert alert-success" style="background-color: #1bcfb4">
              <p style="color: white">{{ session('status') }}</p>
            </div>
          @endif
        <form class="forms-sample" method="POST" action="{{ route('keanggotaan_apindo_store') }}">
          @csrf
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                  @if ($errors->has('nama_pt'))
                          <strong style="color:red">{{ $errors->first('nama_pt') }}</strong><br>
                  @endif
                <label for="exampleInputName1">Nama PT</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="nama_pt" value="{{ old('nama_pt') }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                  @if ($errors->has('contact_person'))
                          <strong style="color:red">{{ $errors->first('contact_person') }}</strong><br>
                  @endif
                <label for="exampleInputName1">Contact Person</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="contact_person" value="{{ old('contact_person') }}">
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
          <button type="submit" class="btn btn-gradient-primary mr-2">Create</button>
          <a href="{{ route('keanggotaan_apindo_view') }}" class="btn btn-light">Halaman Data Anggota</a>
        </form>
      </div>
    </div>
@include('layouts.admin.footer')