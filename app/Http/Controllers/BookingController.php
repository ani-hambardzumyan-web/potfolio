<?php

namespace App\Http\Controllers;

use App\Exports\BookingExport;
use Maatwebsite\Excel\Facades\Excel;

class BookingController extends Controller
{
    public function export()
    {
        return Excel::download(new BookingExport, 'bookings.xlsx');
    }
}