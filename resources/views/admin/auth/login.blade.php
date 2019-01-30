@extends('admin.layout.auth')

@section('content')
    <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-1 offset-md-3">
        <!-- / .main-navbar -->
        <div class="main-content-container container-fluid px-4 my-auto h-100">
            <div class="row no-gutters h-100">
              <div class="col-lg-4 col-md-5 auth-form mx-auto my-auto">
                <div class="card">
                  <div class="card-body">
                    <h5 class="auth-form__title text-center mb-4">Access Your Account</h5>
                    <form _lpchecked="1" role="form" method="POST" action="{{ url('/admin/login') }}">
                        {{ csrf_field() }}
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="off" value="{{ old('email') }}" autofocus name="email">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" autocomplete="off" name="password">
                      </div>
                      <div class="form-group mb-3 d-table mx-auto">
                        <div class="custom-control custom-checkbox mb-1">
                          <input type="checkbox" class="custom-control-input" id="customCheck2">
                          <label class="custom-control-label" for="customCheck2">Remember me for 30 days.</label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-pill btn-accent d-table mx-auto">Access Account</button>
                    </form>
                  </div>
                </div>
                <div class="auth-form__meta d-flex mt-4">
                  <a href="forgot-password.html">Forgot your password?</a>
                  {{-- <a class="ml-auto" href="register.html">Create new account?</a> --}}
                </div>
              </div>
            </div>
        </div>
    </main>
@endsection
