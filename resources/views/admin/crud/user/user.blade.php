@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
  <div class="content">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="card-title">Data User</h3>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('user_add') }}" class="btn btn-success">Tambah User</a>
                </div>
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Level</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach ($data as $user)
                <tr>
                  <td class="py-1">
                    {{ $no++ }}
                  </td>
                  <td>
                    {{ $user->username }}
                  </td>
                  <td>
                    {{ $user->name }}
                  </td>
                  <td>
                    {{ $user->email }}
                  </td>
                  <td>
                    {{ $user->role }}
                  </td>
                  <td>
                    <a href="{{ route('user_edit', $user->id) }}" class="btn btn-success">Update</a>
                    <a href="{{ route('delete', ['user', $user->id]) }}" class="btn btn-danger">{{__('Delete')}}</a>
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