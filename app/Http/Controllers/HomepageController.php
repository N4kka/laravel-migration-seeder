<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class HomepageController extends Controller
{
    public function index() {

        $train = Train::all();

        $today_train = Train::where('departure_date', '2022/06/29')->get();

        return view('Homepage', compact('train', 'today_train'));
    }
}
