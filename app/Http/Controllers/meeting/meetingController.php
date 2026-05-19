<?php

namespace App\Http\Controllers\meeting;

use App\Http\Controllers\Controller;
use App\Models\meeting;
use Illuminate\Http\Request;

class meetingController extends Controller
{
        function store(Request $request){

            $validate = request()->validate([
                'agenda' => 'required',
                'time' => 'required',
                'location' => 'required',
                'date' => 'required',
                'context' => 'required',
                'locationLink' => 'required',

            ]);

            $meeting = new meeting();

            $meeting->agenda = $request->agenda;
            $meeting->time = $request->time;
            $meeting->location = $request->location;
            $meeting->context = $request->context;
            $meeting->locationLink = $request->locationLink;

            $meeting->save();

        }
}
