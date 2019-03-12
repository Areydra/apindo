@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
  <div class="content-wrapper">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="card-title">Data Kepmen</h3>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('kepmen_add') }}" class="btn btn-success">Tambah Kepmen</a>
                </div>
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Gambar</th>
                  <th>Nama</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach ($data as $kepmen)
                @php
                    $ext = explode('.', $kepmen->gambar);
                    $ext = $ext[1];
                @endphp
                <tr>
                  <td class="py-1">
                    {{ $no++ }}
                  </td>
                  @if ($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'gif')
                    <td>
                        <img src="{{ asset('storage/images/'.$kepmen->gambar) }}" alt="..." width="40px">                        
                    </td>
                  @else
                    <td></td>
                  @endif
                  <td>
                      <p>{{ $kepmen->nama }}</p>
                  </td>
                  <td>
                    <a href="{{ asset('storage/images/'.$kepmen->gambar) }}" class="btn btn-info" target="_blank">{{__('View')}}</a>
                    <a href="{{ route('delete', ['ketenagakerjaan', $kepmen->id]) }}" class="btn btn-danger">{{__('Delete')}}</a>
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