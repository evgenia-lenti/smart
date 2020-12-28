@extends('layouts.app', ['navbar' => false], ['footer' => false])

@section('content')
<!--    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Όλες οι Τάξεις</h1>
                @foreach($classrooms as $classroom)
                    <div>
                        <a href="classroom/{{ $classroom->id }}">{{ $classroom->id }} - {{ $classroom->name }} - {{ $classroom->description }} - {{ $classroom->slug }} - {{ $classroom->visible }} - {{ $classroom->active }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>-->

    <classroom-component></classroom-component>
@endsection
