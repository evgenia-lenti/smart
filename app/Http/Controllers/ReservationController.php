<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;

class ReservationController extends Controller
{
	public function index(){

	   	$tickets=Ticket::where('user_id',Auth::user()->id)->get();

	   	dd($tickets);

	}
}
