@extends('layouts.app')

@section('title', 'SGS')

@section('content')
    <div class="wrapper thanks_page">

        <div class="header d_flex j_c_between a_i_start">
            <a href="{{url('/about')}}">home</a>
            <img src="img/logo_with_header_tab2.png" alt="logo_with">
            <a href="{{url('/contact')}}">contact us</a>
        </div>

        <div class="content">
            <div class="thanks">
                <div class="img">
                    <img src="img/check_for_success_booking.png" alt="check_for_success">
                </div>
                <p>
                    Thank you for booking with us! Kindly wait for your
                    booking approvaland vehicle details in 15 to 30 minutes!
                </p>
            </div>


        </div>

    </div>

    <footer></footer>
@endsection