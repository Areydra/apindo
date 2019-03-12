@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
  <div class="content-wrapper">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="card-title">Data Logo Anggota</h3>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('logo_anggota_add') }}" class="btn btn-success">Tambah Logo Anggota</a>
                </div>
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Gambar</th>
                  <th>Link</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach ($data as $logo_anggota)
                <tr>
                  <td class="py-1">
                    {{ $no++ }}
                  </td>
                  <td>
                    <img src="{{ asset('storage/images/'.$logo_anggota->gambar) }}" alt="..." width="40px">                        
                  </td>
                  <td>
                    {{ $logo_anggota->link }}
                  </td>
                  <td>
                    <a href="{{ asset('storage/images/'.$logo_anggota->gambar) }}" class="btn btn-info" target="_blank">{{__('View')}}</a>
                    <a href="{{ route('delete', ['logo_anggota', $logo_anggota->id]) }}" class="btn btn-danger">{{__('Delete')}}</a>
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