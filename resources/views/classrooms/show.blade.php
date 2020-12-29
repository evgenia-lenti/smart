@extends('layouts.app')

@section('content')
<!--    <div class="container">
        <h1>{{ $classroom->id }} - {{ $classroom->name }} - {{ $classroom->description }} - {{ $classroom->slug }}
            - {{ $classroom->visible }} - {{ $classroom->active }}</h1>
        <br/>
        <a href="/editclassroom/{{ $classroom->id }}" type="button">Επεξεργασία Τάξης</a>
        <h2>Μαθήματα</h2>
        <ul>
            @foreach($classroom->courses as $course)
                <li><a href="/course/{{ $course->id }}">{{ $course->name }}</a></li>
            @endforeach
        </ul>
    </div>-->

    <classrooms-page-list-item :classroom="{{$classroom}}" :classrooms="{{$classrooms}}"></classrooms-page-list-item>

@endsection
