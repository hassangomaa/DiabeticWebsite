@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 style="font-size: 60px; margin-top: 50px; font-weight: bold;"><b>Welcome</b></h1>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-4 text-center">
                                <h3 style="font-weight: bold; font-size: 24px;">Admin</h3>
                                <div>
                                    <a href="{{ route('admin.login') }}" class="btn btn-primary btn-lg" style="background-color: #004DFF; width: 100%;">Login</a>
                                </div>
                                <div class="mt-2">
                                    <a href="{{ route('admin.register') }}" class="btn btn-primary btn-lg" style="background-color: #004DFF; width: 100%;">Register</a>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <h3 style="font-weight: bold; font-size: 24px;">Doctor</h3>
                                <div>
                                    <a href="{{ route('doctor.login') }}" class="btn btn-primary btn-lg" style="background-color: #004DFF; width: 100%;">Login</a>
                                </div>
                                <div class="mt-2">
                                    <a href="{{ route('doctor.register') }}" class="btn btn-primary btn-lg" style="background-color: #004DFF; width: 100%;">Register</a>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <h3 style="font-weight: bold; font-size: 24px;">Patient</h3>
                                <div>
                                    <a href="{{ route('patient.login') }}" class="btn btn-primary btn-lg" style="background-color: #004DFF; width: 100%;">Login</a>
                                </div>
                                <div class="mt-2">
                                    <a href="{{ route('patient.register') }}" class="btn btn-primary btn-lg" style="background-color: #004DFF; width: 100%;">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
