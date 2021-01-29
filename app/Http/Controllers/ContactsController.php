<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contacts.contact');
    }

    public function store(ContactRequest $request)
    {
/*        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();*/

    $message = Message::create($request->only('name', 'email', 'message'));

        Mail::to(config('laracarte.admin_support_email'))
            ->send(new ContactMessageCreated($message));

        flashy()->success('Nous vous repondrons dans les plus brefs delai !');

        return redirect()->route('root_path');
    }
}
