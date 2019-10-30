@extends('layouts.app')

@section('title', 'SGS')

@section('content')
    <div class="wrapper select_area_page">

        <div class="header d_flex j_c_between a_i_start">
            <a href="{{url('/about')}}">home</a>
            <img src="../img/logo_with_header_tab2.png" alt="logo_with">
            <a href="{{url('/contact')}}">contact us</a>
        </div>

        <div class="content">
            <div class="select_area">
                <h2>SELECT AREA</h2>
                <div class="select_wrapper d_flex j_c_center">
                    <div class="select_each d_flex a_i_center j_c_between">
                        <div class="img"><img src="../img/within_metro_manila_icon.png" alt="within_metro"></div>
                        <h3>WITHIN METRO MANILA</h3>
                        <p>Good up to 6 - 7 peaple for business meetings / airport pick-ups</p>
                        <form action="/booking/select_area" method="POST">
                            @method('POST')
                            @csrf
                            <input type="hidden" name="within_metro_manila" value="Yes">
                            <button type="submit" class= 'select_button'>select</button>
                        </form>
                    </div>
                    <div class="select_each d_flex a_i_center j_c_between">
                        <div class="img"><img src="../img/out_of_town_icon.png" alt="out_of_town"></div>
                        <h3>out of town</h3>
                        <p>Good up to 3 - 4 with extra cabin at the back</p>
                        <form action="/booking/select_area" method="POST">
                            @method('POST')
                            @csrf
                            <input type="hidden" name="within_metro_manila" value="No">
                            <button type="submit" class= 'select_button'>select</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <footer></footer>

    </div>
@endsection