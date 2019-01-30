@extends('customer.layout.auth')

@section('content')
    <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-1 offset-md-3">
        <div class="main-content-container container-fluid px-4 my-auto h-100">
            <div class="row no-gutters h-100">
                <div class="col-lg-4 col-md-5 auth-form mx-auto my-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="auth-form__title text-center mb-4 text-uppercase">Register</h5>
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('customer.register') }}" autocomplete="off">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-12 control-label">Name</label>

                                    <div class="col-12">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="name" autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-12 control-label">E-Mail Address</label>

                                    <div class="col-12">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-12 control-label">Password</label>

                                    <div class="col-12">
                                        <input id="password" type="password" class="form-control" name="password" placeholder="passwords">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="password-confirm" class="col-12 control-label">Confirm Password</label>

                                    <div class="col-12">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="password confirmation">

                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary">
                                            REGISTER
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="auth-form__meta d-flex mt-4">
                        <a href="{{ route('customer.login') }}">Access Your Account</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
