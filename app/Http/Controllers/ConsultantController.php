<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultantController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*adding the consultant guard so users cant access consultation page without authorisation*/
        $this->middleware('auth:consultant');
        $this->middleware('auth:bookings');
        $this->middleware('auth:reports');
        $this->middleware('auth:animalrecords');
        $this->middleware('auth:editcancelbookings');        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('consultant');
    }
    public function bookings()
    {
        return view('bookings');
    }
    public function reports()
    {
        return view('reports');
    }
    public function animalrecords()
    {
        return view('animalrecords');
    }
    public function editcancel()
    {
        return view('editcancelbookings');
    }
}
