<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contacts.contact');
    }

    public function store(ContactRequest $request)
    {
      new ContactMessageCreated(
          $request->name,
          $request->email,
          $request->message
      );
    }
}
