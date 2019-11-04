@extends('layouts.app')

@section('title', 'SGS')

@section('content')
    <div class="wrapper out_of_town_page">

        <div class="header d_flex j_c_between a_i_start">
            <a href="{{url('/about')}}">home</a>
            <img src="../img/logo_with_header_tab2.png" alt="logo_with">
            <a href="{{url('/contact')}}">contact us</a>
        </div>

        <div class="content">
            <div class="out_of_town d_flex j_c_between">
                <form action="/booking/details" class="d_flex j_c_between" method="POST">
                    @method('POST')
                    @csrf
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
                            <label for="purpose">PURPOSE:</label>
                            <textarea class="form-control1" rows="3" id="purpose" name="purpose"></textarea>
                        </div>
                        <h4>pick up details</h4>
                        <div class="form-group1">
                            <label for="no_street">no. & street:</label>
                            <input type="text" class="form-control1" id="no_street" name="pickup_street">
                        </div>
                        <div class="form-group1">
                            <label for="barangay">BARANGAY:</label>
                            <input type="text" class="form-control1" id="barangay" name="pickup_barangay">
                        </div>
                        <div class="form-group1 select">
                            <label for="city">CITY:</label>
                            <select class="form-control1" id="city" name="pickup_city">
                                <option value="Caloocan">Caloocan
                                </option>
                                <option value="Las Pinas">Las Pinas
                                </option>
                                <option value="Makati">Makati
                                </option>
                                <option value="Malabon">Malabon
                                </option>
                                <option value="Mandaluyong">Mandaluyong
                                </option>
                                <option value="Manila">Manila
                                </option>
                                <option value="Marikina">Marikina
                                </option>
                                <option value="Muntinlupa">Muntinlupa
                                </option>
                                <option value="Navotas">Navotas
                                </option>
                                <option value="Paranaque">Paranaque
                                </option>
                                <option value="Pasay">Pasay
                                </option>
                                <option value="Pasig">Pasig
                                </option>
                                <option value="Pateros">Pateros
                                </option>
                                <option value="Quezon City">Quezon City
                                </option>
                                <option value="San Juan">San Juan
                                </option>
                                <option value="Taguig">Taguig
                                </option>
                                <option value="Valenzuela">Valenzuela
                                </option>
                                <option value="AIRPORT">AIRPORT
                                </option>
                            </select>
                        </div>
                        <div class="form-group1">
                            <label for="time">TIME:</label>
                            <input type="text" class="form-control1" id="time" name="pickup_time">
                        </div>
                    </div>

                    <div class="col2">
                        <h4>DROP OFF DETAILS</h4>
                        <div class="form-group1">
                            <label for="no_street2">no. & street:</label>
                            <input type="text" class="form-control1" id="no_street2" name="dropoff_street">
                        </div>
                        <div class="form-group1">
                            <label for="barangay2">BARANGAY:</label>
                            <input type="text" class="form-control1" id="no_street2" name="dropoff_barangay">
                        </div>
                        <div class="form-group1 select">
                            <label for="city2">CITY:</label>
                            <select class="form-control1" id="city2" name="dropoff_city">
                                <option value="Caloocan">Caloocan
                                </option>
                                <option value="Las Pinas">Las Pinas
                                </option>
                                <option value="Makati">Makati
                                </option>
                                <option value="Malabon">Malabon
                                </option>
                                <option value="Mandaluyong">Mandaluyong
                                </option>
                                <option value="Manila">Manila
                                </option>
                                <option value="Marikina">Marikina
                                </option>
                                <option value="Muntinlupa">Muntinlupa
                                </option>
                                <option value="Navotas">Navotas
                                </option>
                                <option value="Paranaque">Paranaque
                                </option>
                                <option value="Pasay">Pasay
                                </option>
                                <option value="Pasig">Pasig
                                </option>
                                <option value="Pateros">Pateros
                                </option>
                                <option value="Quezon City">Quezon City
                                </option>
                                <option value="San Juan">San Juan
                                </option>
                                <option value="Taguig">Taguig
                                </option>
                                <option value="Valenzuela">Valenzuela
                                </option>
                                <option value="AIRPORT">AIRPORT
                                </option>
                            </select>
                        </div>
                        <div class="form-group1">
                            <label for="no_of_days">NO. OF DAYS:</label>
                            <input type="number" class="form-control1" id="no_of_days" name="dropoff_days" min="1" value="1">
                        </div>
                        <div class="form-group1">
                            <label for="time2">TIME:</label>
                            <input type="text" class="form-control1" id="time2" name="dropoff_time">
                        </div>
                        <div class="form_group1 comment">
                            <label for="itinerary">ITINERARY:</label>
                            <textarea class="form-control1" rows="7" id="itinerary" name="dropoff_itinerary"></textarea>
                        </div>
                    </div>
                <div class="book_now">
                    <div>
                        <h6>TOTAL BILLING RATE:</h6>
                        <p>PHP <span id="price">000</span></p>
                        <div id="calc" class="btn2">Calculate</div>
                    </div>

                    <input type="hidden" id="vehicle" name="vehicle" value="{{$booking->vehicle}}"/>
                    <input type="hidden" id="within_metro_manila" name="within_metro_manila" value="{{$booking->within_metro_manila}}"/>
                    <input type="hidden" id="priceValue" name="price" value="{{$booking->price}}" />
                    <button type="submit"  class="" >book now</button>
                </div>
            </form>
                </div>
        </div>

    </div>
@endsection