<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Train;
use Carbon\Carbon;

class HomeController extends Controller {

    public function index() {
        // $trains = Train::all();
        $currentTime = Carbon::now()->toDateTimeString();
        $currentTimeToArr = explode(' ', $currentTime);
        $today = $currentTimeToArr[0]; // stringa
        $todayToTime = strtotime($today);

        $trainsToday = Train::where('data', $today)->get();
        return view('home', compact('trainsToday'));
    }
}


