<?php

namespace App\Http\Controllers;

use App\Mail\EventBooked;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookEventController extends Controller
{
    //
    public function book(Event $event,Request $request){

        if (!auth()->user()) {
            return abort('401','Unathorized action!');
        }
        

        Mail::to(auth()->user())->send(new EventBooked(auth()->user(),$event));

        $event->bookings()->create([
            'user_id'=>$request->user()->id,
        ]);

        return back();
    }
}
