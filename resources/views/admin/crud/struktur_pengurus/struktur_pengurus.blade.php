@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
  <div class="content-wrapper">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="card-title">Data Struktur Pengurus</h3>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('struktur_pengurus_add') }}" class="btn btn-success">Tambah Struktur Pengurus</a>
                </div>
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Gambar</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach ($data as $struktur_pengurus)
                <tr>
                  <td class="py-1">
                    {{ $no++ }}
                  </td>
                  <td>
                    <img src="{{ asset('storage/images/'.$struktur_pengurus->gambar) }}" alt="..." width="40px">                        
                  </td>
                  <td>
                    {{ $struktur_pengurus->nama }}
                  </td>
                  <td>
                    {{ $struktur_pengurus->jabatan }}
                  </td>
                  <td>
                    <a href="{{ route('struktur_pengurus_edit', $struktur_pengurus->id) }}" class="btn btn-success">Update</a><br><br>
                    <a href="{{ route('delete', ['struktur_pengurus', $struktur_pengurus->id]) }}" class="btn btn-danger">{{__('Delete')}}</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      {{ $data->links() }}
  </div>
@include('layouts.admin.footer')