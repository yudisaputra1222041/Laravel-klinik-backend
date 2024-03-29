@extends('layouts.app')

@section('title', 'Doctor Schedule')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="section-header-button">
                    <a href="{{ route('doctor_schedules.create') }}" class="btn btn-primary">Add New Doctor Schedule</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Doctors Schedule</a></div>
                    <div class="breadcrumb-item">All Doctors Schedule</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <h2 class="section-title">Information</h2>
                <p class="section-lead">
                    You can manage all Doctors, such as editing, deleting, and more.
                </p>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Doctors</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{ route('doctor_schedules.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Day</th>
                                                <th>Time</th>
                                                <th>Status</th>
                                                <th>Note</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($doctorSchedules as $schedule)
                                                <tr>
                                                    {{-- <td>
                                                        @if ($schedule->photo)
                                                            <img src="{{ asset('storage/doctor/' . $doctor->photo) }}" alt="" width="100px" height="100px" class="img-thumbnail">

                                                        @else
                                                            <span class="badge badge-danger">No Image</span>
                                                        @endif
                                                    </td> --}}
                                                    <td>{{ $schedule->doctor->doctor_name }}</td>
                                                    <td>{{ $schedule->day }}</td>
                                                    <td>{{ $schedule->time }}</td>
                                                    <td>{{ $schedule->status }}</td>
                                                    <td>{{ $schedule->note }}</td>
                                                    <td>{{ $schedule->created_at }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <a href='{{ route('doctor_schedules.edit', $schedule->id) }}'
                                                                class="btn btn-sm btn-info btn-icon">
                                                                <i class="fas fa-edit"></i> Edit
                                                            </a>

                                                            <form action="{{ route('doctor_schedules.destroy', $schedule->id) }}"
                                                                method="POST" class="ml-2"
                                                                onsubmit="return confirm('Are You Want to Delete This Doctor ?')">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                    <i class="fas fa-trash"></i> Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $doctorSchedules->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
