@extends('layouts.app')

@section('title', 'SGS')

@section('content')
    <div class="wrapper select_vehicle_type_page">

        <div class="header d_flex j_c_between a_i_start">
            <a href="{{url('/about')}}">home</a>
            <img src="img/logo_with_header_tab2.png" alt="logo_with">
            <a href="{{url('/contact')}}">contact us</a>
        </div>

        <div class="content">
            <div class="select_vehicle">
                <h2>SELECT VEHICLE TYPE</h2>
                <div class="select_vehicle_wrapper d_flex j_c_center">

                    <div class="select_vehicle_each">
                        <div class="img">
                            <img src="img/sedan_icon.png" alt="sedan_icon">
                        </div>
                        <div class="discription">
                            <div class="car_type">SEDAN</div>
                            <p>Good up to 4 - 5 people for
                                business meetings / airport
                                pick-ups.
                            </p>
                            <a class= 'select_button' href="{{url('/area')}}">select</a>
                        </div>
                    </div>
                    <div class="select_vehicle_each">
                        <div class="img">
                            <img src="img/SUV_icon.png" alt="SUV_icon">
                        </div>
                        <div class="discription">
                            <div class="car_type">SUV</div>
                            <p>Good up to 6 - 7 people for
                                business meetings / airport
                                pick-ups.
                            </p>
                            <a class= 'select_button' href="{{url('/area')}}">select</a>
                        </div>
                    </div>
                    <div class="select_vehicle_each">
                        <div class="img">
                            <img src="img/pickup_icon.png" alt="pickup_icon">
                        </div>
                        <div class="discription">
                            <div class="car_type">PICK-UP</div>
                            <p>Good up to 3 - 4 with extra cabin
                                at the back.
                            </p>
                            <a class= 'select_button' href="{{url('/area')}}">select</a>
                        </div>
                    </div>
                    <div class="select_vehicle_each">
                        <div class="img">
                            <img src="img/VAN_icon.png" alt="VAN_icon">
                        </div>
                        <div class="discription">
                            <div class="car_type">VAN</div>
                            <p>Good up to 10 - 12 people for
                                group meeting and out of areas.
                            </p>
                            <a class= 'select_button' href="{{url('/area')}}">select</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer></footer>

    </div>
@endsection