<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class HomepageController extends Controller
{
    public function index() {

        $train = Train::all();

        return view('Homepage', compact('train'));
    }
}
