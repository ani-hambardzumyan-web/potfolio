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
            <div class="out_of_town ">
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
                        <div class="form-group1">
                            <label for="city">CITY:</label>
                            <input type="text" class="form-control1" id="barangay" name="pickup_city">
                        </div>
                        <div class="form-group1">
                            <label for="time">TIME:</label>
                            <input type="text"   class="form-control1" id="time" name="pickup_time">
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
                        <div class="form-group1">
                            <label for="city2">CITY:</label>
                            <input type="text" class="form-control1" id="barangay" name="dropoff_city">
                        </div>
                        <div class="form-group1 select">
                            <label for="province2">PROVINCCE:</label>
                            <select class="form-control1" id="province" name="dropoff_province">
                                <option value="Antipolo">Antipolo
                                </option>
                                <option value="Bacoor">Bacoor
                                </option>
                                <option value="Batangas">Batangas
                                </option>
                                <option value="Binan">Binan
                                </option>
                                <option value="Cabuyao">Cabuyao
                                </option>
                                <option value="Calamba">Calamba
                                </option>
                                <option value="Cavita">Cavita
                                </option>
                                <option value="Dasmarinas">Dasmarinas
                                </option>
                                <option value="General Trias">General Trias
                                </option>
                                <option value="Imus">Imus
                                </option>
                                <option value="Lipa">Lipa
                                </option>
                                <option value="Lucena">Lucena
                                </option>
                                <option value="San Pablo">San Pablo
                                </option>
                                <option value="San Pedro">San Pedro
                                </option>
                                <option value="Santa Rosa">Santa Rosa
                                </option>
                                <option value="Sto tomas">Sto tomas
                                </option>
                                <option value="Tagaytay">Tagaytay
                                </option>
                                <option value="Tanauan">Tanauan
                                </option>
                                <option value="Trece Martires">Trece Martires
                                </option>
                                <option value="Candelaria">Candelaria
                                </option>
                                <option value="Tiaong">Tiaong
                                </option>
                                <option value="Lucena">Lucena
                                </option>
                                <option value="Tayabas">Lucena
                                </option>
                                <option value="Lopez">Lopez
                                </option>



                                <option value="Bulacan">Bulacan
                                </option>
                                <option value="Meycuayan">Meycuayan
                                </option>
                                <option value="Malolos">Malolos
                                </option>
                                <option value="Gulacan">Gulacan
                                </option>
                                <option value="San Rafael">San Rafael
                                </option>
                                <option value="San Idelfonso">San Idelfonso
                                </option>
                                <option value="San Miguel">San Miguel
                                </option>
                                <option value="Nueva Ecija">Nueva Ecija
                                </option>
                                <option value="Nueva Viscaya">Nueva Viscaya
                                </option>
                                <option value="Isabela">Isabela
                                </option>
                                <option value="San Femando">San Femando
                                </option>
                                <option value="Porac">Porac
                                </option>
                                <option value="Dinalupihan">Dinalupihan
                                </option>
                                <option value="Angeles">Angeles
                                </option>
                                <option value="Clark">Clark
                                </option>
                                <option value="Dau">Dau
                                </option>
                                <option value="Tarlac">Tarlac
                                </option>
                                <option value="Pangasinan">Pangasinan
                                </option>
                            </select>
                        </div>
                        <div class="form-group1">
                            <label for="no_of_days">NO. OF DAYS:</label>
                            <input type="number" class="form-control1" id="no_of_days" name="dropoff_days" min="1">
                        </div>
                        <div class="form-group1">
                            <label for="time2">TIME:</label>
                            <input type="text" class="form-control1" id="time2" name="dropoff_time" >
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
                        <button  class="btn2" type="submit" >book now</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection