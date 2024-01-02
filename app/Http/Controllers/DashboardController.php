<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function show(Request $request) {
        
        $id = Auth::id();
        $bookings = DB::table('bookings')
            ->join('offerings', 'bookings.offering_id', '=', 'offerings.id')
            ->join('stars', 'bookings.star', '=', 'stars.id')
            ->select('offerings.name as offering_name','bookings.name as booked_name','bookings.completed', 'bookings.created_at', 'bookings.star', 'stars.name as star_name', 'price')
            ->where(['bookings.user_id' => Auth::id()])
            ->whereDate('bookings.created_at', Carbon::today())
            ->orderBy('created_at', 'DESC')
            ->get();
        //$bookings = Booking::where(['user_id' => $id])->whereDate('created_at', Carbon::today())->get();
        return view('dashboard', ['bookings' => $bookings]);
    }

    public function recent() {
        $bookings = DB::table('bookings')
            ->join('offerings', 'bookings.offering_id', '=', 'offerings.id')
            ->join('stars', 'bookings.star', '=', 'stars.id')
            ->select('offerings.name as offering_name','bookings.name as booked_name','bookings.completed', 'bookings.created_at', 'bookings.star', 'stars.name as star_name', 'price')
            ->where(['bookings.user_id' => Auth::id()])
            ->orderBy('created_at', 'DESC')
            ->get();
        //$bookings = Booking::where(['user_id' => $id])->whereDate('created_at', Carbon::today())->get();
        return view('recent', ['bookings' => $bookings]);
    }

}
