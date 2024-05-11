<?php

namespace App\Http\Controllers;

use App\Models\Gala_Night;
use Illuminate\Http\Request;

class GalaNightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('aaa');
        // return view('gala-dinner');
    }

    public function store(Request $request)
    {
        dd('bbb');
        $gala_night    =   new Gala_Night;
        $gala_night->name    =   $request->name;
        $gala_night->email    =   $request->email;
        $gala_night->phone    =   $request->phone;
        $gala_night->apply      =   $request->apply;
        $gala_night->save();
        return view('gala-dinner');
        // $success = true;
        // return response()->json(['success' => $success]);
    }
}
