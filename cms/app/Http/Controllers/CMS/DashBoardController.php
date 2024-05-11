<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact_Form;
use App\Models\WebMenu;
use App\Models\DreamCar;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashBoardController extends Controller
{
    public function index()
    {
        $data['contact'] = Contact_Form::get()->count();
        $data['booking'] = DreamCar::get()->count();
        $data['menu'] = WebMenu::get()->count();
        return view('cms.dashboards.dashboard',$data);
    }

}
