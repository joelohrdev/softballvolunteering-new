<?php

namespace App\Http\Controllers;

use App\Player;
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
        $players = Player::get()->where('user_id', '=', Auth::user()->id);

        $parentEvents = VolunteerEvent::orderBy('date_time', 'Asc')->whereDate('date_time', '>=', Carbon::now())->get()->where('volunteereventable_id', '=', Auth::user()->id);
        $playerEvents = VolunteerEvent::orderBy('date_time', 'Asc')->whereDate('date_time', '>=', Carbon::now())->get()->where('volunteereventable_id', '=', $players);
        $parentPastEvents = VolunteerEvent::orderBy('date_time', 'Asc')->whereDate('date_time', '<', Carbon::now())->get()->where('volunteereventable_id', '=', Auth::user()->id);
        $playerPastEvents = VolunteerEvent::orderBy('date_time', 'Asc')->whereDate('date_time', '<', Carbon::now())->get()->where('volunteereventable_id', '=', $players);

        $merged = $parentEvents->merge($playerEvents);
        $pastMerged = $parentPastEvents->merge($playerPastEvents);

        return view('home', compact('merged', 'pastMerged'));
    }
}
