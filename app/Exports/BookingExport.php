<?php

namespace App\Exports;

use App\Booking;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class BookingExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Booking::all();
    }
    public function headings(): array
    {
        return [
            '#',
            'Name',
            'Vehicle',
            'Is Within Metro Manila',
            'Group',
            'Purpose',
            'Pickup Street',
            'Pickup Barangay',
            'Pickup City',
            'Pickup Province',
            'Pickup Time',

            'Dropoff Street',
            'Dropoff Days',
            'Dropoff Barangay',
            'Dropoff City',
            'Dropoff Time',
            'Dropoff Province',
            'Dropoff Itinerary',
            'Price',

            "Created At",
            "Updated At"
        ];
    }
}
