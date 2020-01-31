<?php

namespace App\Http\Controllers;

use App\VolunteerEvent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bookedEvents = VolunteerEvent::orderBy('date_time', 'Asc')->whereDate('date_time', '>=', Carbon::now())->get()->where('user_id', '=', Auth::user()->id);
        $pastEvents = VolunteerEvent::orderBy('date_time', 'Asc')->whereDate('date_time', '<', Carbon::now())->get()->where('user_id', '=', Auth::user()->id);
        return view('home', compact('bookedEvents', 'pastEvents'));
    }
}
