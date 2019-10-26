@extends('layouts.app')

@section('title', 'SGS')

@section('content')
    <div class="wrapper contact_page">

        <div class="header d_flex j_c_between a_i_start">
            <a href="{{url('/about')}}">home</a>
            <img src="img/logo_with_header_tab2.png" alt="logo_with">
            <a href="{{url('/contact')}}">contact us</a>
        </div>

        <div class="content">
            <div class="contact">
                <h3>CONTACT US:</h3>
                <div class="inquiries d_flex j_c_between">
                    <span>INQUIRIES:</span>
                    <div>
                        <p><a href="mailto:inquiries@1stofmay.com">inquiries@1stofmay.com</a></p>
                        <p>0917-248-0149</p>
                        <p>(02) 899-41-06</p>
                    </div>
                </div>
                <div class="complaints d_flex j_c_between">
                    <span>COMPLAINTS:</span>
                    <div>
                        <p>0966-378-0506</p>
                        <p>(02) 899-41-06</p>
                    </div>

                </div>
                <div class="email_us d_flex j_c_between">
                    <span>EMAIL US:</span>
                    <div>
                        <p><a href="mailto:lilianchua77@yahoomail.com">lilianchua77@yahoomail.com</a></p>
                        <p><a href="mailto:1stofmayshuttle@gmail.com">1stofmayshuttle@gmail.com</a></p>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection