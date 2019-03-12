@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
  <div class="content" style="width: 100%">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="card-title">Pelatihan Seminar DPK Apindo Jaktim</h3>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('pelatihan_seminar_add') }}" class="btn btn-success">Tambah Pelatihan</a>
            </div>
        </div>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Topik</th>
                <th>Waktu</th>
                <th>Peserta</th>
                <th>Registrasi</th>
                <th>Tempat</th>
                <th>Narasumber</th>
                <th>Investasi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php
                $no = 1;
              @endphp
              @foreach ($data as $pelatihan_seminar)
              <tr>
                <td class="py-1">
                  {{ $no++ }}
                </td>
                <td>
                  {{ $pelatihan_seminar->topik }}
                </td>
                <td>
                  {{ $pelatihan_seminar->waktu }}
                </td>
                <td>
                  {{ $pelatihan_seminar->peserta }}
                </td>
                <td>
                  {{ $pelatihan_seminar->registrasi }}
                </td>
                <td>
                  {{ $pelatihan_seminar->tempat }}
                </td>
                <td>
                  {{ $pelatihan_seminar->narasumber }}
                </td>
                <td>
                  {{ $pelatihan_seminar->investasi }}
                </td>
                <td>
                  <a href="{{ route('pelatihan_seminar_edit', $pelatihan_seminar->id) }}" class="btn btn-success">Update</a><br><br>
                  <a href="{{ route('delete', ['pelatihan_seminar', $pelatihan_seminar->id]) }}" class="btn btn-danger">{{__('Delete')}}</a>
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