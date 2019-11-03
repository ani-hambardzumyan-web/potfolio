@extends('layouts.app')

@section('title', 'SGS')

@section('content')
    <div class="wrapper home_page d_flex a_i_center j_c_end">
        <div class="content">
            <div class="entry_form">
                <div class="logo">
                    <img src="img/logo1.png" alt="logo1">
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group1">
                        <label for="name">Name:</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="form-group1">
                        <label for="email">E-Mail:</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group1">
                        <label for="password">Password:</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group1">
                        <label for="password-confirm">Confirm Password:</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <button type="submit" class="btn1 btn-default">Register</button>

                </form>

            </div>
        </div>
    </div>


@endsection
