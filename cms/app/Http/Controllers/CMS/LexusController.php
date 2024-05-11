<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DreamCar;
use DataTables;
use Illuminate\Support\Facades\Storage;

class LexusController extends Controller
{

//First Camp Data
    public function firstindex()
    {
        $data = [
        ];
        return view('cms.camp_1.index', $data);
    }

    public function firstdatatable()
    {
        $lexus = DreamCar::orderBy("id","DESC")->get();
        return DataTables::collection($lexus)->toJson();
    }

    public function firstdestroy(Request $request)
    {
        $lexus = DreamCar::where('id', $request->deleteId)->first();
        $lexus->delete();
        return response()->json($lexus, 200);
    }
}