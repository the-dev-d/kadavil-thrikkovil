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
        $edit_id = $request->get('edit_id');
        return view('admin.offerings', ['offerings' => $offerings, 'user' => Auth::guard('admin')->user(), 'mode' => $mode, 'edit_id' => $edit_id]);
    }

    public function add(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required'
        ]);
        $name = $request->get('name');
        $price = $request->get('price');
        $offerings = new Offerings;
        $offerings->name = $name;
        $offerings->price = $price;
        $offerings->save();

        return redirect()->route('console.offerings');
    }    

    public function put(Request $request) {
        
        $name = $request->get('name');
        $price = $request->get('price');
        $id = $request->get('id');
        $offerings = Offerings::find($id);
        $offerings->name = $name;
        $offerings->price = $price;
        $offerings->save(); 
        return redirect()->route('console.offerings');
    }    

    public function delete(Request $request) {
        $request->validate([
            'id' => 'required'
        ]); 
        $id = $request->get('id');
        $offerings = Offerings::find($id);
        $offerings->delete(); 
        return redirect()->route('console.offerings');
    }    
    
}
