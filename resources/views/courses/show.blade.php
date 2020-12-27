@extends('layouts.app')

@section('content')
    <div class="container">
        <hi>{{ $course->id }} - {{ $course->name }} - {{ $course->description }} - {{ $course->slug }} - {{ $course->visible }} - {{ $course->active }}</hi>
        <a href="/editcourse/{{ $course->id }}" type="button">Επεξεργασία Μαθήματος</a>
    </div>
@endsection
