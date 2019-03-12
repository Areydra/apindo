@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
<div class="content" style="width: 100%">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Teks Berjalan</h4>
        @if ($data)
        <form class="forms-sample" method="POST" action="{{ route('teks_berjalan_update', $data->id) }}">
          @csrf
          @method('PUT')
          <div class="form-group">
            <input type="text" class="form-control" name="teks_berjalan" value="{!! $data->teks !!}">
          </div>
          <button type="submit" class="btn btn-gradient-primary mr-2" name="update">Update</button>
        </form>
        @else
        <form class="forms-sample" method="POST" action="{{ route('teks_berjalan_store') }}">
          @csrf
          <div class="form-group">
            <input type="text" class="form-control" name="teks_berjalan">
          </div>
          <button type="submit" class="btn btn-gradient-primary mr-2" name="tambah">Tambah</button>
        </form>
        @endif
      </div>
    </div>
  </div>
</div>
@include('layouts.admin.footer')