<?php

namespace App\Http\Controllers\meeting;

use App\Http\Controllers\Controller;
use App\Models\meeting;
use Illuminate\Http\Request;

class meetingController extends Controller
{
        function store(Request $request){

            $validate = $request->validate([
                'agenda' => 'required',
                'time' => 'required',
                'location' => 'required',
                'date' => 'required',
                'context' => 'required',
                'locationLink' => 'required',

            ]);

            $meeting = new meeting();

            $meeting->agenda = $validate['agenda'];
            $meeting->time = $validate['time'];
            $meeting->location = $validate['location'];
            $meeting->date = $validate['date'];
            $meeting->context = $validate['context'];
            $meeting->locationLink = $validate['locationLink'];

            $meeting->save();

        }
}
