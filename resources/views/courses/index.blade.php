@extends('layouts.app')

@section('content')
{{--    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Όλα τα Μαθήματα</h1>
                @foreach($courses as $course)
                    <div>
                        <a href="course/{{ $course->id }}">{{ $course->id }} - {{ $course->name }} - {{ $course->description }} - {{ $course->slug }} - {{ $course->visible }} - {{ $course->active }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>--}}
    Course index


@endsection
