@extends('layouts.app')

@section('content')

    <p class="message">{{session('mssg')}}</p>

    <homepage-component-section-1></homepage-component-section-1>

    <homepage-component-section-2></homepage-component-section-2>


    {{-- <educator-profile-page></educator-profile-page> --}}


@endsection

