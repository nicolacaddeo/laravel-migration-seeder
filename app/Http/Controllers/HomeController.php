<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Train;

class HomeController extends Controller {
    //
    public function index() {
        $trains = Train::all();
        $currentTime = Carbon::now()->toDateTimeString();
        $onlyDate = explode(' ', $currentTime);
        $today = $onlyDate[0];
        $todayToTime = strtotime($today);

        // variabile da inserire nel database
        $newFormat = date('Y-m-d', $todayToTime);
        return view('home', compact('trains', 'currentTime', 'onlyDate', 'today', 'todayToTime', 'newFormat')); // 'onlyDate'
    }
}

// $onlyDate = Carbon::createFromFormat('Y-m-d', '');
