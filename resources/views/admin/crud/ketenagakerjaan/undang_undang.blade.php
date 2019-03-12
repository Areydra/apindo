@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
  <div class="content-wrapper">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="card-title">Data Undang Undang</h3>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('undang_undang_add') }}" class="btn btn-success">Tambah Undang Undang</a>
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
                @foreach ($data as $undang_undang)
                @php
                    $ext = explode('.', $undang_undang->gambar);
                    $ext = $ext[1];
                @endphp
                <tr>
                  <td class="py-1">
                    {{ $no++ }}
                  </td>
                  @if ($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'gif')
                    <td>
                        <img src="{{ asset('storage/images/'.$undang_undang->gambar) }}" alt="..." width="40px">                        
                    </td>
                  @else
                    <td></td>
                  @endif
                  <td>
                      <p>{{ $undang_undang->nama }}</p>
                  </td>
                  <td>
                    <a href="{{ asset('storage/images/'.$undang_undang->gambar) }}" class="btn btn-info" target="_blank">{{__('View')}}</a>
                    <a href="{{ route('delete', ['ketenagakerjaan', $undang_undang->id]) }}" class="btn btn-danger">{{__('Delete')}}</a>
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