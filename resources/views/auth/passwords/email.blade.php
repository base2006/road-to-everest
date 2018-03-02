@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100 reset-password">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Reset Password</h2>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-12 col-form-label">E-Mail Address</label>

                                <div class="col-12">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-outline-dark btn-block">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <a href="{{ route('login') }}" class="btn btn-link"><span class="oi oi-chevron-left"></span> Back to login</a>
                </div>
            </div>
        </div>
    </div>
@endsection
