<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\BookingOngoing;
use App\Models\Offerings;
use App\Models\Star;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\StripeClient;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class OfferingsPanelController extends Controller
{

    public function get(Request $request) {
        $offerings = Offerings::all();
        $mode = $request->get('mode');
        return view('admin.offerings', ['offerings' => $offerings, 'user' => Auth::guard('admin')->user(), 'mode' => $mode]);
    }

    public function add(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric'
        ]);
        dd($request->all());
    }    
    
}
