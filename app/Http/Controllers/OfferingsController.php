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

class OfferingsController extends Controller
{

    public function index() {

        $offerings = Offerings::all();

        return view('offerings', ['offerings' => $offerings, 'user' => Auth::user()]);
    }

    public function booking_form($id) {

        $offering = Offerings::find($id);
        $stars = Star::all();
        return view('offerings_form', ["name" => $offering->name, "price" => $offering->price , "id" => $offering->id, 'stars' => $stars]);
    }

    public function booking_success(Request $request) {
        
        $session_id = $request->query('session_id');
        $booking_record = BookingOngoing::where('stripe_session_id', $session_id)->first();
        if(!$booking_record) {
            throw new HttpException(400);
        }
        Booking::create(["user_id" => Auth::id(), "offering_id" => $booking_record->offering_id, "name" => $booking_record->name, "star" => $booking_record->star]);

        BookingOngoing::destroy($booking_record->id);
        return redirect('/dashboard');
    }

    public function booking_failed(Request $request) {
        
        $session_id = $request->query('session_id');
        BookingOngoing::where('stripe_session_id', $session_id)->delete();

        redirect('dashboard');
    }

    public function book(Request $request) {

        $id = $request->post('offering');
        $booking  = Offerings::where('id', $id)->first();
        $name = $request->post('name');
        $star = $request->post('star');

        $strip = new StripeClient(config('stripe.keys.secret'));

        $session = $strip->checkout->sessions->create([
            'line_items' => [[
                'price_data' => [
                  'currency' => 'inr',
                  'product_data' => [
                    'name' => $booking->name,
                  ],
                  'unit_amount' => round($booking->price*100/97,2) * 100,
                ],
                'quantity' => 1,
              ]],
              'mode' => 'payment',
              'success_url' => route('booking_success')."?session_id={CHECKOUT_SESSION_ID}",
              'cancel_url' => route('booking_failed')."session_id={CHECKOUT_SESSION_ID}",
            ]);

        //return redirect($session->url);

        BookingOngoing::create(["stripe_session_id" => $session->id, "name" => $name, 'star' => $star, "user_id"=> Auth::id(), 'offering_id' => $booking->id]);

        return redirect($session->url);
    }   
}
