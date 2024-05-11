<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $contact    =   new ContactUs;
        $contact->name    =   $request->name;
        $contact->email    =   $request->email;
        $contact->phone    =   $request->phone;
        $contact->comment      =   $request->comment;
        $contact->save();
        $success = true;
        return response()->json(['success' => $success]);
    }
}
