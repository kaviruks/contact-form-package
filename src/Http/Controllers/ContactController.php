<?php

namespace Kavinda\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Kavinda\Contact\Models\Contact;

class ContactController extends Controller

{
    public function index()
    
    {

        return view('contact::form');


    }

    public function store(Request $request)
    
    {

        Contact::create($request->all());

        session()->flash('successmsg', 'Operation Done');

        return redirect('/contact')->with('successmsg', 'Operation done successfully!');


    }



}
