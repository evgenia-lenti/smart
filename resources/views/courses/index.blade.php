@extends('layouts.app')

@section('content')

    <header>
        <div class="max-w-7xl mx-auto px-8 my-10">
            <h1 class="text-3xl font-bold leading-tight text-gray-900">
                Κατάλογος Μαθημάτων
            </h1>
        </div>
    </header>

    <courses-list :courses="{{ $courses }}"></courses-list>

@endsection
