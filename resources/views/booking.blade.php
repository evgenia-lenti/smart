@extends('layouts.app')

@section('content')

    <p class="message">{{session('mssg')}}</p>

    <booking-form-component></booking-form-component>

@endsection

