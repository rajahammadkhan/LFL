<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DreamCar;

class DreamCarController extends Controller
{
    public function index()
    {
        return view('win-car');
    }

    public function store(Request $request)
    {
        $dream    =   new DreamCar;
        $dream->name    =   $request->name;
        $dream->email    =   $request->email;
        $dream->phone    =   $request->phone;
        $dream->comment      =   $request->comment;
        $dream->save();
        // $success = true;
        return redirect('https://events.q-tickets.com/uae/eventdetails/4004309302/legends-football-league');
        // return response()->json(['success' => $success]);
    }
}
