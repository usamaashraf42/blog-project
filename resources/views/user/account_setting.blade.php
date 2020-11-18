@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="list-group">
                        <a href="#" class="list-group-item">Profile</a>
                        <a href="#" class="list-group-item active">Account Settings</a>
                        <a href="#" class="list-group-item">Notifications</a>
                        <a href="#" class="list-group-item">Subscription</a>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header bg-light">
                            Account Settings
                        </div>
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{session('message')}}
                            </div>

                        @endif
                        <div class="card-body">
                            <form action="{{route('post_profile')}}" method="post">
                                @csrf
                            <div class="row mb-5">
                                <div class="col-md-4 mb-4">
                                    <div>Profile Information</div>
                                    <div class="text-muted small">These information are visible to the public.</div>
                                </div>


                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Name</label>
                                                <input class="form-control" value="{{Auth::user()->name}}" name="name">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Email Address</label>
                                                <input class="form-control" value="{{Auth::user()->email}}" name="email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                            <hr>
                            @if(session()->has('error'))
                                <div class="alert alert-danger">
                                    {{session('error')}}
                                </div>

                            @endif

                            <div class="row mt-5">

                                <div class="col-md-4 mb-4">
                                    <div>Access Credentials</div>
                                    <div class="text-muted small">Leave credentials fields empty if you don't wish to change the password.</div>
                                </div>

                                <div class="col-md-8">
                                   <form action="{{route('password')}}" method="post">
                                       @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Current Password</label>
                                                <input type="password" class="form-control" name="current_pass">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">New Password</label>
                                                <input type="password" class="form-control" name="new_pass">
                                            </div>
                                        </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Password Confirmation</label>
                                                <input type="password" class="form-control" name="confirm_pass">
                                            </div>
                                            @error('confirm_pass')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                       <div class="card-footer text-right">
                                           <button type="submit" class="btn btn-primary">Save Changes</button>
                                       </div>
                                   </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
