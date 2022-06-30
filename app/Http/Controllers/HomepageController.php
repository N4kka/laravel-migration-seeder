<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
use Carbon\Carbon;

class HomepageController extends Controller
{
    public function index()
    {

        $train = Train::all();

        $today_train = Train::where('departure_date', Carbon::today())->get();

        return view('Homepage', compact('train', 'today_train'));
    }
}
