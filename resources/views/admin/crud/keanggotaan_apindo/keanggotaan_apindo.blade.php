@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h3 class="card-title">Data Keanggotaan DPK Apindo Jaktim</h3>
            </div>
            <div class="col-sm-5 text-right">
                <a href="{{ route('keanggotaan_apindo_add') }}" class="btn btn-success">Tambah Anggota</a>
            </div>
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama PT</th>
              <th>Contact Person</th>
              <th>Alamat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php
              $no = 1;
            @endphp
            @foreach ($data as $keanggotaan)
            <tr>
              <td class="py-1">
                {{ $no++ }}
              </td>
              <td>
                {{ $keanggotaan->nama_pt }}
              </td>
              <td>
                {{ $keanggotaan->contact_person }}
              </td>
              <td>
                {!! $keanggotaan->alamat !!}
              </td>
              <td>
                <a href="{{ route('keanggotaan_apindo_edit', $keanggotaan->id) }}" class="btn btn-success">Update</a>
                <a href="{{ route('delete', ['keanggotaan', $keanggotaan->id]) }}" class="btn btn-danger">{{__('Delete')}}</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $data->links() }}
      </div>
    </div>
  </div>

  @include('layouts.admin.footer')