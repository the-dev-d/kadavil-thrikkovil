<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function temple() {

        return view("temple");
    }

    public function about() {

        return view("melshanthi");
    }
}
