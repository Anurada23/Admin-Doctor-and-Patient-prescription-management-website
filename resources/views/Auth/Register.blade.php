@extends('Layout.app')

@section('register')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-lg-4 col-lg-8 mx-auto mt-3">
                <div class="card">
                    <div class="card-header text-center">
                    <div class="d-flex justify-content-end">
                        <h1 class="text-uppercase display-4 font-weight-bold">REGISTER</h1>
                    </div>

                        
                    </div>

                    <div class="card-body">
                        <form action="{{ url('store') }}" method="POST">
                            @csrf

                            <div class="form-row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Full Name <span class="text-danger d2">*</span></label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                             name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="">Email <span class="text-danger d2">*</span></label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                             name='email' value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="">Date of Birth <span class="text-danger d2">*</span></label>
                                        <input type="date" class="form-control @error('dob') is-invalid @enderror"
                                            name='dob' value="{{ old('dob') }}">
                                        @error('dob')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="">Mobile no</label>
                                        <input type="text" class="form-control"  name="mobile"
                                            value="{{ old('mobile') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="">Password <span class="text-danger d2">*</span></label>
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            >
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="">Confirm Password <span class="text-danger d2">*</span></label>
                                        <input type="password" class="form-control" 
                                            name="password_confirmation">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Address">Address</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" id="Address"  rows="1" name="address"></textarea>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="text-center">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">I agree terms and
                                            conditions</label>
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-start">
                                    <button type="submit" class="btn btn-success" style="background-color: #1B233F;"><i class="fa fa-external-link mr-1" aria-hidden="true"></i> Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection