@extends('layouts.app')

@section('title', 'SGS')

@section('content')
    <div class="wrapper out_of_town_page">

        <div class="header d_flex j_c_between a_i_start">
            <a href="{{url('/about')}}">home</a>
            <img src="img/logo_with_header_tab2.png" alt="logo_with">
            <a href="{{url('/contact')}}">contact us</a>
        </div>

        <div class="content">
            <div class="out_of_town d_flex j_c_between">
                <form action="#" class="d_flex j_c_between">
                    <div class="col1">
                        <div class="form-group1">
                            <label for="name">name:</label>
                            <input type="text" class="form-control1" id="name" name="name">
                        </div>
                        <div class="form-group1">
                            <label for="group">group:</label>
                            <input type="text" class="form-control1" id="group" name="group">
                        </div>
                        <div class="form_group1 comment">
                            <label for="purpose">purpose:</label>
                            <textarea class="form-control1" rows="3" id="purpose"></textarea>
                        </div>
                        <h4>pick up details</h4>
                        <div class="form-group1">
                            <label for="no_street">no. & street:</label>
                            <input type="text" class="form-control1" id="no_street" name="no_street">
                        </div>
                        <div class="form-group1 select">
                            <label for="barangay">BARANGAY:</label>
                            <select class="form-control1" id="barangay">
                                <option></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="form-group1 select">
                            <label for="city">CITY:</label>
                            <select class="form-control1" id="city">
                                <option></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>

                        <!-- STRRT if whitin Manila Town remove this  -->
                        <div class="form-group1 select">
                            <label for="province">PROVINCE:</label>
                            <select class="form-control1" id="province">
                                <option></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <!--  END if whitin Manila Town remove this  -->

                        <div class="form-group1">
                            <label for="time">TIME:</label>
                            <input type="text" class="form-control1" id="time" name="time">
                        </div>
                    </div>

                    <div class="col2">
                        <h4>DROP OFF DETAILS</h4>
                        <div class="form-group1">
                            <label for="no_street2">no. & street:</label>
                            <input type="text" class="form-control1" id="no_street2" name="no_street2">
                        </div>
                        <div class="form-group1 select">
                            <label for="barangay2">BARANGAY:</label>
                            <select class="form-control1" id="barangay2">
                                <option></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="form-group1 select">
                            <label for="city2">CITY:</label>
                            <select class="form-control1" id="city2">
                                <option></option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>

                        <!-- STRRT if whitin Manila Town remove this  -->

                        <div class="form-group1 select">
                            <label for="province2">PROVINCE:</label>
                            <select class="form-control1" id="province2">
                                <option></option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>

                        <!-- STRRT if whitin Manila Town remove this  -->

                        <div class="form-group1">
                            <label for="no_of_days">NO. OF DAYS:</label>
                            <input type="text" class="form-control1" id="no_of_days" name="no_of_days">
                        </div>
                        <div class="form-group1">
                            <label for="time2">TIME:</label>
                            <input type="text" class="form-control1" id="time2" name="time2">
                        </div>
                        <div class="form_group1 comment">
                            <label for="itinerary">ITINERARY:</label>
                            <textarea class="form-control1" rows="7" id="itinerary"></textarea>
                        </div>
                    </div>
                </form>
                <div class="book_now">
                    <div>
                        <h6>TOTAL BILLING RATE:</h6>
                        <button type="submit" class="btn2">PHP 0000</button>
                    </div>

                    <!-- STRRT if whitin Manila Town add this  -->
                    <a href="{{url('/thanks')}}">book now</a>

                    <!-- END if whitin Manila Town add this  -->
                </div>

            </div>
        </div>

    </div>
@endsection