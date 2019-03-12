@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
<div class="content" style="width: 100%">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Pesan Hubungi Kami</h4>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th width="200px">Nama Lengkap</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Isi</th>
                        <th width="150px">Diterima</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                        $no = 1;
                      @endphp
                      @foreach ($data as $pesan)
                      <tr>
                        <td class="py-1">
                          {{ $no++ }}
                        </td>
                        <td>
                          {{ $pesan->nama_lengkap }}
                        </td>
                        <td>
                          {{ $pesan->email }}
                        </td>
                        <td>
                          {{ $pesan->subject }}
                        </td>
                        <td>
                          {{ str_limit($pesan->isi,100) }}
                        </td>
                        <td>
                          {{ date('d M Y', strtotime($pesan->created_at)) }}
                        </td>
                        <td>
                          <a href="{{ route('delete', ['hubungi_kami', $pesan->id]) }}" class="btn btn-danger">Delete</a>
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
