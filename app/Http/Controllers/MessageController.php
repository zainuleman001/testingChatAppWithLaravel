<?php

namespace App\Http\Controllers;

use App\Events\NotificationTestEvent;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    function messagesPage()
    {
        return view('messages', get_defined_vars());
    }

    // components
    function userListComponent()
    {
        $users = User::whereNot('id', Auth::user()->id)->get();
        $view = view('messageComponents.usersList', get_defined_vars())->render();
        return response()->json(['data' => $view], 200);
    }

    function userMessages(Request $request)
    {
        $userId = $request->id;

        $messages = Message::where(function ($query) use ($userId) {
            $query->where('sender_id', $userId)
                ->where('receiver_id', Auth::user()->id);
        })
            ->orWhere(function ($query) use ($userId) {
                $query->where('receiver_id', $userId)
                    ->where('sender_id', Auth::user()->id);
            })
            ->get();
            
        $user = User::find($userId);
        $view = view('messageComponents.userMessages', get_defined_vars())->render();
        return response()->json(['data' => $view], 200);
    }

    function sendMessage(Request $request) {
        $message = new Message();
        $message->sender_id = Auth::user()->id;
        $message->receiver_id = $request->receiver_id;
        $message->message = $request->message;
        $message->save();
        event(new NotificationTestEvent(Message::with('sender')->with('receiver')->where('id', $message->id)->first()));
        return response()->json(['message'=>'succeed'], 200);

        // dd($request->all());
        // dd($request->receiver_id);

    }
}