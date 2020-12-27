@extends('layouts.app')

@section('content')
    <div class="container">
        <hi>{{ $classroom->id }} - {{ $classroom->name }} - {{ $classroom->description }} - {{ $classroom->slug }} - {{ $classroom->visible }} - {{ $classroom->active }}</hi>
        <br/>
        <a href="/editclassroom/{{ $classroom->id }}" type="button">Επεξεργασία Τάξης</a>
        <h2>Μαθήματα</h2>
        <ul>
            @foreach($classroom->courses as $course)
                <li><a href="/course/{{ $course->id }}">{{ $course->name }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
