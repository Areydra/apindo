@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
<div class="content" style="width: 100%">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Kantor Sekretariat</h4>
        @if ($data)
        <form class="forms-sample" method="POST" action="{{ route('kantor_sekretariat_update', $data->id) }}">
          @csrf
          @method('PUT')
          <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                    <label for="">No Telepon</label>
                    <input type="text" class="form-control" name="no_telepon" value="{{ $data->no_telepon }}">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $data->email }}">
                </div>
              </div>
          </div>
          <div class="form-group">
              <label for="">Kode Pos</label>
              <input type="text" class="form-control" name="kode_pos" value="{{ $data->kode_pos }}">
          </div>          
          <div class="form-group">
            <label for="">Alamat</label>
            <textarea class="form-control" id="mytextarea" style="height: 450px" name="alamat">{!! $data->alamat !!}</textarea>
          </div>
          <button type="submit" class="btn btn-gradient-primary mr-2" name="update">Update</button>
        </form>
        @else
        <form class="forms-sample" method="POST" action="{{ route('kantor_sekretariat_store') }}">
          @csrf
          <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                    <label for="">No Telepon</label>
                    <input type="text" class="form-control" name="no_telepon">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
              </div>
          </div>
          <div class="form-group">
              <label for="">Kode Pos</label>
              <input type="text" class="form-control" name="kode_pos">
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <textarea class="form-control" id="mytextarea" style="height: 450px" name="alamat"></textarea>
          </div>
          <button type="submit" class="btn btn-gradient-primary mr-2" name="tambah">Tambah</button>
        </form>
        @endif
      </div>
    </div>
  </div>
</div>
@include('layouts.admin.footer')