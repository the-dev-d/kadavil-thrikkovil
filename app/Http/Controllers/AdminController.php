<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Booking;
use App\Notifications\AdminLogin;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //
    public function show() {

        return view('admin.console', ['user' => Auth::guard('admin')->user()]);
    }

    public function login() {

        return view('admin.login');
    }

    public function sendToken(Request $request) {

        $creds = $request->validate(['email' => 'email|required', 'password' => 'required|max:16|min:8']);
        $admin = Admin::where(['email' => $creds['email'], 'password' => $creds['password']])->first();
        if($admin == null)
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        $url = URL::temporarySignedRoute('login.signed', now()->addMinutes(20), ['admin' => $admin->id ]);
        $admin->notify(new AdminLogin($url));

        return  view('admin.loginsuccess');
    }

    public function handle(Admin $admin) {
        
        Auth::guard('admin')->login($admin, true);
        return redirect('admin/console');
    }

    public function today(Request $request) {

        $bookings = DB::table('bookings')
            ->join('users','bookings.user_id','=','users.id')
            ->join('offerings','bookings.offering_id', '=', 'offerings.id')
            ->join('stars', 'stars.id', '=', 'bookings.star')
            ->whereDate('bookings.created_at', '=', Carbon::today());

            if($request->post('search') && $request->post('value')) {
                switch($request->post('search')) {

                    case "name":
                        $bookings = $bookings->where('bookings.name', 'like', $request->post('value')."%");
                        break;

                    case "star":
                        $bookings = $bookings->where('stars.name', 'like', $request->post('value')."%");
                        break;

                    case "email":
                        $bookings = $bookings->where('users.email', 'like', $request->post('value')."%");
                        break;
                }
            }
  
            $bookings = $bookings
            ->select(['stars.name as star_name', 'bookings.completed as completed', 'bookings.id as booking_id', 'users.name as user_name', 'offerings.name as offering_name', 'bookings.name as booking_name', 'users.email as email', 'bookings.created_at as booking_date'])
            ->paginate(20);

            return view('admin.today',  ['user' => Auth::guard('admin')->user(), 'bookings' => $bookings, 'searched' => $request->post('search'), 'value' => $request->post('value')]);
        }

    public function recent(Request $request) {

        $bookings = DB::table('bookings')
            ->join('users','bookings.user_id','=','users.id')
            ->join('offerings','bookings.offering_id', '=', 'offerings.id')
            ->join('stars', 'stars.id', '=', 'bookings.star');

            if($request->post('search') && $request->post('value')) {
                switch($request->post('search')) {

                    case "name":
                        $bookings = $bookings->where('bookings.name', 'like', $request->post('value')."%");
                        break;

                    case "star":
                        $bookings = $bookings->where('stars.name', 'like', $request->post('value')."%");
                        break;

                    case "email":
                        $bookings = $bookings->where('users.email', 'like', $request->post('value')."%");
                        break;
                }
            }
            $bookings = $bookings
            ->select(['stars.name as star_name',  'bookings.completed as completed', 'bookings.id as booking_id', 'users.name as user_name', 'offerings.name as offering_name', 'bookings.name as booking_name', 'users.email as email', 'bookings.created_at as booking_date'])
            ->paginate(20);

        return view('admin.recent',  ['user' => Auth::guard('admin')->user(), 'bookings' => $bookings, 'searched' => $request->post('search'), 'value' => $request->post('value')]);
    }

    public function complete(Request $request) {

        $data = $request->validate(["id" => "required"]);
        if($data) {
            Booking::whereId($data["id"])->update(["completed" => true]);
            return json_encode(["status" => true]);
        }
        return json_encode(["status" => false]);
    }

}
