@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
  <div class="content" style="width: 100%">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Pelatihan Seminar Apindo DPK Jaktim</h4><hr>
          @if(session('status'))
            <div class="alert alert-success" style="background-color: #1bcfb4">
              <p style="color: white">{{ session('status') }}</p>
            </div>
          @endif
          <form class="forms-sample" method="POST" action="{{ route('pelatihan_seminar_update', $data->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-lg-6">
                @if ($errors->has('topik'))
                        <strong style="color:red">{{ $errors->first('topik') }}</strong><br>
                @endif
                <div class="form-group">
                  <label for="exampleInputName1">Topik</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="topik" value="{{ $data->topik }}">
                </div>
              </div>
              <div class="col-lg-6">
                @if ($errors->has('waktu'))
                        <strong style="color:red">{{ $errors->first('waktu') }}</strong><br>
                @endif
                <div class="form-group">
                  <label for="exampleInputName1">Waktu</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="waktu" value="{{ $data->waktu }}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                @if ($errors->has('peserta'))
                        <strong style="color:red">{{ $errors->first('peserta') }}</strong><br>
                @endif
                <div class="form-group">
                  <label for="exampleInputName1">Peserta</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="peserta" value="{{ $data->peserta }}">
                </div>
              </div>
              <div class="col-lg-6">
                @if ($errors->has('registrasi'))
                        <strong style="color:red">{{ $errors->first('registrasi') }}</strong><br>
                @endif
                <div class="form-group">
                  <label for="exampleInputName1">Registrasi</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="registrasi" value="{{ $data->registrasi }}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                @if ($errors->has('narasumber'))
                        <strong style="color:red">{{ $errors->first('narasumber') }}</strong><br>
                @endif
                <div class="form-group">
                  <label for="exampleInputName1">Narasumber</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="narasumber" value="{{ $data->narasumber }}">
                </div>
              </div>
              <div class="col-lg-6">
                @if ($errors->has('investasi'))
                        <strong style="color:red">{{ $errors->first('investasi') }}</strong><br>
                @endif
                <div class="form-group">
                  <label for="exampleInputName1">Investasi</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="investasi" value="{{ $data->investasi }}">
                </div>
              </div>
            </div>
            <div class="form-group">
                @if ($errors->has('tempat'))
                        <strong style="color:red">{{ $errors->first('tempat') }}</strong><br>
                @endif <br>
              <label for="exampleInputName1">Tempat</label>
              <textarea name="tempat" id="" cols="30" rows="10" class="form-control">{{ $data->tempat }}</textarea>
            </div>
            <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
            <a href="{{ route('pelatihan_seminar') }}" class="btn btn-light">Halaman Data Pelatihan Seminar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
@include('layouts.admin.footer')