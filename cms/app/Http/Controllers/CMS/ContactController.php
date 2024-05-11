<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact_Form;
use DataTables;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'contact' =>  Contact_Form::get(),
        ];
        return view('cms.contact.index', $data);
    }

    public function datatable()
    {
        $contact = Contact_Form::orderByDesc('id')->get();
        return DataTables::collection($contact)->toJson();
    }

    public function destroy(Request $request)
    {
        $contact = Contact_Form::where('id', $request->deleteId)->first();
        $contact->delete();
        return response()->json($contact, 200);
    }
}
