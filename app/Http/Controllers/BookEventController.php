<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class BookEventController extends Controller
{
    //
    public function book(Event $event,Request $request){

       
        $event->bookings()->create([
            'user_id'=>$request->user()->id,
        ]);

        return back();
    }
}
