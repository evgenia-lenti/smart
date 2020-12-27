@extends('layouts.app')

@section('content')

    <p class="message">{{session('mssg')}}</p>

    <homepage-component-section-1></homepage-component-section-1>

    <homepage-component-section-2></homepage-component-section-2>

    <homepage-component-section-3></homepage-component-section-3>

@endsection
