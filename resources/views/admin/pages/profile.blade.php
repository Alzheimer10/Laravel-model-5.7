@extends('admin.layout.master')

@section('content')
  @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <i class="fa fa-check mx-2"></i>
      <strong>{{ session('status') }}!</strong> Your profile has been updated!
    </div>
  @endif
  <div class="main-content-container container-fluid px-4">
    <!-- / .main-navbar -->
    <div class="main-content-container container-fluid px-4">
      <!-- Page Header -->
      <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
          <span class="text-uppercase page-subtitle">Overview</span>
          <h3 class="page-title">User Profile</h3>
        </div>
      </div>
      <!-- End Page Header -->
      <!-- Default Light Table -->
      <div class="row">
        <div class="col-lg-4">
          <div class="card card-small mb-4 pt-3">
            <div class="card-header border-bottom text-center">
              <div class="mb-3 mx-auto">
                <img class="rounded-circle" src="{{ asset('images/avatars/0.jpg') }}" alt="User Avatar" width="110"> </div>
              <h4 class="mb-0"> {{ Auth::user()->name }} {{ Auth::user()->lastname }}  </h4>
              <span class="text-muted d-block mb-2">{{ Auth::user()->getRoleNames()[0] }}</span>
              {{-- <button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2"> --}}
                {{-- <i class="material-icons mr-1">person_add</i>Follow</button> --}}
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item px-4">
                <div class="progress-wrapper">
                  <strong class="text-muted d-block mb-2">Workload</strong>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%;">
                      <span class="progress-value">74%</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item p-4">
                <strong class="text-muted d-block mb-2">Description</strong>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card card-small mb-4">
            <div class="card-header border-bottom">
              <h6 class="m-0">Account Details</h6>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item p-3">
                <div class="row">
                  <div class="col">
                    <form class="form-horizontal" role="form" method="POST">
                      {{ csrf_field() }}
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="name">First Name</label>
                          <input type="text" class="form-control" id="name" value="{{ is_null(old('name'))? Auth::user()->name : old('name') }}" placeholder="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="lastname">Last Name</label>
                          <input type="text" class="form-control" id="lastname" value="{{ is_null(old('lastname'))? Auth::user()->lastname : old('lastname') }}" placeholder="{{ Auth::user()->lastname }}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" value="{{ is_null(old('email'))? Auth::user()->email : old('email') }}" placeholder="{{ Auth::user()->email }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="feInputAddress">Address</label>
                        <input type="text" class="form-control" id="feInputAddress" placeholder="1234 Main St"> </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="feInputCity">City</label>
                          <input type="text" class="form-control" id="feInputCity"> </div>
                        <div class="form-group col-md-4">
                          <label for="feInputState">State</label>
                          <select id="feInputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                          </select>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="inputZip">Zip</label>
                          <input type="text" class="form-control" id="inputZip"> </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="feDescription">Description</label>
                          <textarea class="form-control" name="feDescription" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</textarea>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-accent">Update Account</button>
                    </form>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Default Light Table -->
    </div>
  </div>
@endsection

@section('scripts')
@endsection