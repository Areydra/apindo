@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
  <div class="content" style="width:100%">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah User</h4>
            @if(session('status'))
              <div class="alert alert-success" style="background-color: #1bcfb4">
                <p style="color: white">{{ session('status') }}</p>
              </div>
            @endif
            <form class="forms-sample" method="POST" action="{{ route('user_store') }}">
              @csrf
              <div class="row">
                <div class="col-lg-6">
                  @if ($errors->has('username'))
                          <strong style="color:red">{{ $errors->first('username') }}</strong><br>
                  @endif
                  <div class="form-group">
                    <label for="exampleInputName1">Username</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="username" value="{{ old('username') }}">
                  </div>
                </div>
                <div class="col-lg-6">
                  @if ($errors->has('name'))
                          <strong style="color:red">{{ $errors->first('name') }}</strong><br>
                  @endif
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="name" value="{{ old('name') }}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  @if ($errors->has('email'))
                          <strong style="color:red">{{ $errors->first('email') }}</strong><br>
                  @endif
                  <div class="form-group">
                    <label for="exampleInputName1">Email</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="email" value="{{ old('email') }}">
                  </div>
                </div>
                <div class="col-lg-6">
                  @if ($errors->has('role'))
                          <strong style="color:red">{{ $errors->first('role') }}</strong><br>
                  @endif
                  <div class="form-group">
                  <label for="exampleSelectGender">Level</label>
                    <select class="form-control" id="exampleSelectGender" name="role">
                      <option value="user" selected>User</option>
                      <option value="admin">admin</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                    @if ($errors->has('password'))
                            <strong style="color:red">{{ $errors->first('password') }}</strong><br>
                    @endif
                  <div class="form-group">
                    <label for="exampleInputName1">Password</label>
                    <input type="password" class="form-control" id="exampleInputName1" placeholder="" name="password">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputName1">Re-password</label>
                    <input type="password" class="form-control" id="exampleInputName1" placeholder="" name="password_confirmation">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-gradient-primary mr-2">Create</button>
              <a href="{{ route('user') }}" class="btn btn-light">Halaman Data User</a>
            </form>
          </div>
        </div>
      </div>
  </div>


@include('layouts.admin.footer')