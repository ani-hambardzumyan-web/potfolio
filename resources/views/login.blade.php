@extends('layouts.app')

@section('title', 'SGS')

@section('content')
    <div class="wrapper home_page d_flex a_i_center j_c_end">
        <div class="content">
            <div class="entry_form">
                <div class="logo">
                    <img src="img/logo1.png" alt="logo1">
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group1">
                        <label for="username">Username:</label>
                        <input id="username" type="email" class="form-control1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group1">
                        <label for="password">Password:</label>
                        <input id="password" type="password" class="form-control1 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    {{--<div class="form-group1">--}}
                        {{--<label for="adm_pwd">Admin Password:</label>--}}
                        {{--<input type="password" class="form-control1" id="adm_pwd" name="adm_pwd">--}}
                    {{--</div>--}}
                    <button type="submit" class="btn1 btn-default">Login</button>
                </form>

            </div>
        </div>
    </div>
@endsection