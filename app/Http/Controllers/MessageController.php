<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $messages = \App\Message::paginate(4);
        return view('messages', [
            'messages' => $messages
        ]);
    }

    public function showCreateMessageView(){
        return view('create_message');
    }
    public function create(Request $request)
    {
        $message = new \App\Message;

            $message->text = $request->message;
            $message->user_name =Auth::user()->name;

            $message->save();

        //  return view('create_message');
        return redirect('messages');
    }
}
