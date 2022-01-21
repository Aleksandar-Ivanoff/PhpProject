<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $events = Event::paginate(3);
        return view('index.index',[
            "events"=>$events
        ]);
    }

   
}
