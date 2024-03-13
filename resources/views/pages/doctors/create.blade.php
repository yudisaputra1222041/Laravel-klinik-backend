@extends('layouts.app')

@section('title', 'Create Doctor')

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
                <h1>Add New Doctor</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Advanced Forms</div>
                </div>
            </div>

            <div class="section-body">
                {{-- <h2 class="section-title">Add New User</h2> --}}


                        <div class="card">
                            <form action="{{route('doctors.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="card-header">
                                <h4>Please Add New Doctor This Bellow</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name Doctor</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-box"></i>
                                        </div>
                                        </div>
                                        <input type="text" class="form-control @error('doctor_name')
                                    is-invalid
                                    @enderror" name="doctor_name" style="max-width:400px;" placeholder="Please Enter Your Doctor Name">
                                    </div>

                                    @error('doctor_name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>SIP</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-box"></i>
                                        </div>
                                        </div>
                                        <input type="text" class="form-control @error('sip')
                                    is-invalid
                                    @enderror" name="sip" style="max-width:400px;" placeholder="Please Write Your Description Doctor">
                                    </div>

                                    @error('sip')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-box"></i>
                                        </div>
                                        </div>
                                        <input type="text" class="form-control @error('description')
                                    is-invalid
                                    @enderror" name="description" style="max-width:400px;" placeholder="Please Write Your Description Doctor">
                                    </div>

                                    @error('description')
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
                                            <i class="fas fa-hand-holding-dollar"></i>
                                        </div>
                                        </div>
                                        <input type="number" class="form-control @error('doctor_phone')
                                    is-invalid
                                    @enderror" name="doctor_phone" style="max-width:400px;" placeholder="Please Enter Your Price">
                                    </div>

                                    @error('doctor_phone')
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
                                            <i class="fas fa-box-archive"></i>
                                        </div>
                                        </div>
                                        <input type="email" class="form-control @error('doctor_email')
                                    is-invalid
                                    @enderror" name="doctor_email" style="max-width:400px;" placeholder="Please Enter Your Stock">
                                    </div>

                                    @error('doctor_email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="doctor_category" class="form-label">Category</label>
                                    <select class="form-control" id="doctor_category" name="doctor_category" style="max-width:120px;">
                                        <option value="spesialis"> Dokter Spesialis</option>
                                        <option value="umum">Dokter Umum</option>
                                        <option value="gigi">Dokter Gigi</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Photo</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-image"></i>
                                        </div>
                                        </div>
                                        <input type="file" class="form-control @error('photo')
                                    is-invalid
                                    @enderror" name="photo" style="max-width:400px;" placeholder="Please Enter Your Image">
                                    </div>

                                    @error('photo')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="card-footer text-left" style="display: flex; justify-content: flex-start;">
                                    <div style="margin-right: 10px;">
                                        <button class="btn btn-primary">Add</button>
                                    </div>
                                    <div>
                                        <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </div>
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
