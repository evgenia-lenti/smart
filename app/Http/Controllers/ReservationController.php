<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class ReservationController extends Controller
{
	public function index(){

		$previous_tickets=Ticket::getPrevTickets();
		$current_tickets=Ticket::getCurrentTickets();
		$next_tickets=Ticket::getNextTickets();

		return view('reservations',compact([
			'previous_tickets',
			'current_tickets',
			'next_tickets'
		]));

	}

	public function show($reservation){

		dd($reservation);
	}
}
