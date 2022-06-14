<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;

class HolidayController extends Controller
{
    public function index(){
        $holidaysdb = Holiday::all();
        return view('holidays', compact('holidaysdb'));
    }
    public function show($id){
        $trip = Holiday::findOrFail($id);
        return view('details', compact('trip'));
    }
}
