@extends('layouts.app')

@section('content')

<!--    <p class="message">{{session('mssg')}}</p>-->

    <reservations-component :previous="{{ $previous_tickets }}" :current="{{ $current_tickets }}" :next="{{ $next_tickets }}"></reservations-component>

@endsection
