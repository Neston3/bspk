<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Laravel\Appointment;
use Laravel\Subscribe;

class AppointmentController extends Controller
{
    public function index(){

    }

    public function store(Request $request){
        $appointment=new Appointment();
        $appointment->name=$request->input('name');
        $appointment->email=$request->input('email');
        $appointment->message=$request->input('message');
        $appointment->save();
        return Redirect::back()->with('message','Successful !');
    }

    public function subscribe(Request $request){
        $subscribe=new Subscribe();
        $subscribe->email=$request->input('email');
        $subscribe->save();

        return Redirect::back();

    }

}
