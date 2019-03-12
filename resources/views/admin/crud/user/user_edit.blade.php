@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
  <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit User</h4><hr>
                  @if(session('status'))
                    <div class="alert alert-success" style="background-color: #1bcfb4">
                      <p style="color: white">{{ session('status') }}</p>
                    </div>
                  @endif
                  <form class="forms-sample" method="POST" action="{{ route('user_update', $data->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="col-lg-6">
                        @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                        <div class="form-group">
                          <label for="exampleInputName1">Username</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="judul" name="username" value="{{ $data->username }}">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                        <div class="form-group">
                          <label for="exampleInputName1">Name</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="judul" name="name" value="{{ $data->name }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <div class="form-group">
                          <label for="exampleInputName1">Email</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="judul" name="email" value="{{ $data->email }}">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        @if ($errors->has('role'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                        @endif
                        <div class="form-group">
                          <label for="exampleSelectGender">Level</label>
                            <select class="form-control" id="exampleSelectGender" name="role">
                              @if($data->role == 'user')
                                <option value="user" selected>User</option>
                                <option value="admin">admin</option>
                              @else
                                <option value="admin" selected>admin</option>
                                <option value="user">User</option>
                              @endif
                            </select>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                      <label for="exampleInputName1">Password</label>
                      <input type="password" class="form-control" id="exampleInputName1" name="password" placeholder="isi jika ingin mengganti password">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
                    <a href="{{ route('user') }}" class="btn btn-light">Halaman Data User</a>
                  </form>
                </div>
              </div>
            </div>

    <!-- /.row -->
  </div>


@include('layouts.admin.footer')