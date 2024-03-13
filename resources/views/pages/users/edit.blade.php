@extends('layouts.app')

@section('title', 'Edit User')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Edit User</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Form Edit User</h2>


                        <div class="card">
                            <form action="{{route('users.update', $user)}}" method="POST">
                                @csrf
                                @method('PUT')
                            <div class="card-header">
                                <h4>Edit User</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        </div>
                                        <input type="text" class="form-control @error('name')
                                    is-invalid
                                    @enderror" name="name" value="{{$user->name}}" style="max-width:400px;" placeholder="Please Enter Your Name">
                                    </div>

                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                        </div>
                                        <input type="email" class="form-control @error('email')
                                    is-invalid
                                    @enderror"
                                    name="email" value="{{$user->email}}" style="max-width:400px;" placeholder="Please Enter Your Email">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-key"></i>
                                            </div>
                                        </div>
                                        <input type="password"
                                            class="form-control @error('password')
                                            is-invalid
                                            @enderror"
                                            name="password" style="max-width:400px;" placeholder="Please Enter Your Password">
                                    </div>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                        </div>
                                        <input type="number" class="form-control" name="phone" value="{{$user->phone}}" style="max-width:400px;" placeholder="Please Enter Your Number Phone">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="role" class="form-label">Role</label>
                                    <select class="form-control" id="role" name="role" style="max-width:120px;">
                                        <option value="admin" @if ($user->role == 'admin') selected @endif>Admin</option>
                                        <option value="doctor" @if ($user->role == 'doctor') selected @endif>Doctor</option>
                                        <option value="user" @if ($user->role == 'user') selected @endif>User</option>
                                    </select>
                                </div>

                                <div class="card-footer text-left" style="display: flex; justify-content: flex-start;">
                                    <form id="updateForm" action="{{ route('users.update', $user) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div style="margin-right: 10px;">
                                            <button type="submit" class="btn btn-primary" onclick="return confirmUpdate()">Update</button>
                                        </div>
                                    </form>
                                    <div>
                                        <a href="{{ route('users.index') }}" class="btn" style="background-color: #6895D2; color: #fff;">Cancel</a>
                                    </div>
                                </div>
                                <script>
                                    function confirmUpdate() {
                                        return confirm('Are you sure you want to update this user?');
                                    }
                                </script>


                        </form>

                        </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush
