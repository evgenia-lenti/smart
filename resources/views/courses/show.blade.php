@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $course->id }} - {{ $course->name }} - {{ $course->description }} - {{ $course->slug }} - {{ $course->visible }} - {{ $course->active }}</h1>
        <a href="/editcourse/{{ $course->id }}" type="button">Επεξεργασία Μαθήματος</a>
    </div>
@endsection
