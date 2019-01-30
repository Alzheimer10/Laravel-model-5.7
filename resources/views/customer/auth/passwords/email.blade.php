@extends('customer.layout.auth')

<!-- Main Content -->
@section('content')
    <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-1 offset-md-3">
        <!-- / .main-navbar -->
        <div class="main-content-container container-fluid px-4 my-auto h-100">
            <div class="row no-gutters h-100">
              <div class="col-lg-4 col-md-5 auth-form mx-auto my-auto">
                <div class="card">
                  <div class="card-body">
                    <h5 class="auth-form__title text-center mb-4 text-uppercase">Reset Password</h5>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('customer.password.request.post') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                                <div class="col-12">
                                    <input id="email" type="email" class="form-control" name="email" placeholder="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="auth-form__meta d-flex mt-4">
                  <a href="{{ route('customer.login') }}">Access Your Account</a>
                  <a class="ml-auto" href="{{ route('customer.register') }}">Create new account?</a>
                </div>
            </div>
        </div>
    </main>
@endsection
