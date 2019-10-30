@extends('layouts.app')

@section('title', 'SGS')

@section('content')
    <div class="wrapper safe_page">

        <div class="header d_flex j_c_between a_i_start">
            <a href="{{url('/about')}}">home</a>
            <img src="img/logo_with_header_tab2.png" alt="logo_with">
            <a href="{{url('/contact')}}">contact us</a>
        </div>

        <div class="content">

            <div class="safe_shuttle d_flex j_c_between">
                    <div style="margin: 0 auto"><a href="{{url('/booking/export')}}"><img src="../img/excel.png" alt="excel" height="150px" /></a></div>
                <div class="right_img">
                    <img src="img/Bitmap.jpg" alt="Bitmap">
                </div>

                <div class="safe_shuttle_desc">
                    <p>
                        1ST OF MAY SHUTTLE SERVICE is a company duly registered under
                        Philippines Laws with the Securities and Exchange
                    </p>
                    <p>Commission and has been in the Car Leasing and Employee Shuttle</p>
                    <p>Service Business since 2000.</p>
                </div>
            </div>

        </div>

    </div>
@endsection