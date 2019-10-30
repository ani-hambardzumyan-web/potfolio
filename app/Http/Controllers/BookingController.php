<?php

namespace App\Http\Controllers;

use App\Exports\BookingExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
 * Show the step 1 Form for creating the booking.
 *
 * @return \Illuminate\Http\Response
 */
    public function selectVehicle(Request $request)
    {
        if(empty($request->session()->get('booking'))){
            $booking = new Booking();
        }else{
            $booking = $request->session()->get('booking');
        }
        return view('booking.select_vehicle',compact('booking', $booking));
    }

    /* Post Request to store step1 info in session
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function postVehicle(Request $request)
    {
        $data = $request->except(['_method', '_token' ]);
        if(empty($request->session()->get('booking'))){
            $booking =  new Booking();
        }else{
            $booking = $request->session()->get('booking');

//            $booking->vehicle = $data['vehicle'];
        }
//        $request->flash();
        $booking->fill($data);
        $request->session()->put('booking', $booking);

        return redirect('/booking/select_area');
    }



    /**
     * Show the step 1 Form for creating the booking.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectArea(Request $request)
    {
        $booking = $request->session()->get('booking');
        return view('booking.select_area',compact('booking', $booking));
    }

    /* Post Request to store step1 info in session
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function postArea(Request $request)
    {
        $data = $request->except(['_method', '_token' ]);

        if(empty($request->session()->get('booking'))){
            $booking = new Booking();
        }else{
            $booking = $request->session()->get('booking');
//            $booking->within_metro_manila = $data['within_metro_manila'];
        }
        $booking->fill($data);
        $request->session()->put('booking', $booking);

        return redirect('/booking/details');

    }


    /**
     * Show the step 1 Form for creating the booking.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectDetails(Request $request)
    {
        $booking = $request->session()->get('booking');
        if($booking->within_metro_manila){
            return view('booking.within_form',compact('booking', $booking));
        }else{
            return view('booking.outside_form',compact('booking', $booking));
        }
    }

    /* Post Request to store step1 info in session
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function postDetails(Request $request)
    {
        $data = $request->except(['_method', '_token' ]);

        if(empty($request->session()->get('booking'))){
            $booking = new Booking();
        }else{
            $booking = $request->session()->get('booking');
        }
        //time to add to DB and clear session
        $booking->fill($data);
        $booking->save();
        $request->session()->put('booking', new Booking());
        return redirect('/booking/thanks');
    }


    public function admin()
    {
        return view('export');
    }

    public function export()
    {
        return Excel::download(new BookingExport, 'bookings.xlsx');
    }
}