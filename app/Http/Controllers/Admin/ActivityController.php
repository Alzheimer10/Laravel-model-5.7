<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;
use Auth;
class ActivityController extends Controller
{
    
    function index()
    {
    	return Activity::all();
    }

    function test()
    {
    	$user = Auth::user();
    	
    	$user->name = 'super'.date('s');
    	
    	$user->save();

    	return Activity::all()->last();
    }

    function evento()
    {

    	$user = Auth::user();


		activity()
    		->causedBy($user)
    		->withProperties(['propiedad' => 'bla bla bla°'])
    		->log('Aquí acaba de ocurrir algo!');
    	return Activity::all()->last();
    }
}
