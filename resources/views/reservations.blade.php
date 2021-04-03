@extends('layouts.app')

@section('content')

<!--    <p class="message">{{session('mssg')}}</p>-->

    <reservations-component :previous="{{ $previous }}" :current="{{ $current }}" :next="{{ $next }}"></reservations-component>

@endsection
