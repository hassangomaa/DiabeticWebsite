@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <span class="nav-link">Dashboard</span>
                            </li>
                            <li class="nav-item dropdown">
                            <span class="nav-link dropdown-toggle" id="patientsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Patients
                            </span>
                                <div class="dropdown-menu" aria-labelledby="patientsDropdown">
                                    <span class="dropdown-item">View Patients</span>
                                    <span class="dropdown-item">Add Patient</span>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                            <span class="nav-link dropdown-toggle" id="doctorsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Doctors
                            </span>
                                <div class="dropdown-menu" aria-labelledby="doctorsDropdown">
                                    <span class="dropdown-item">View Doctors</span>
                                    <span class="dropdown-item">Add Doctor</span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <span class="nav-link">Doctor Notes</span>
                            </li>
                            <li class="nav-item">
                                <span class="nav-link">Feedback</span>
                            </li>
                            <li class="nav-item">
                                <span class="nav-link">Scan History</span>
                            </li>
                            <li class="nav-item">
                                <span class="nav-link">Profile</span>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST" class="nav-link">
                                    @csrf
                                    <button type="submit" class="btn btn-link">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Sidebar -->

            <!-- Content -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Hello Admin!
                    </div>
                </div>
            </div>
            <!-- End Content -->
        </div>
    </div>
@endsection
