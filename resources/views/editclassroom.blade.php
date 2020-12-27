@extends('layouts.app')

@section('content')
    <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ]
  }
  ```
-->
    <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Δημιουργία Τάξης</h3>
                <p class="mt-1 text-sm text-gray-500">
                    Δημιουργήστε την τάξη.
                </p>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form class="space-y-6" action="/updateclassroom/{{$classroom->id}}"} method="POST">
                    @csrf
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Όνομα Τάξης</label>
                        <input type="text" name="name" id="name" autocomplete="given-name" value="{{$classroom->name}}"
                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>


                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">
                            Περιγραφή Τάξης
                        </label>
                        <div class="mt-1">
                            <textarea id="description" name="description" rows="3"
                                      class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">{{$classroom->description}}</textarea>
                        </div>
                    </div>

                    <div class="mt-5 md:mt-0 md:col-span-2">

                        <fieldset>

                            <div class="mt-4 space-y-4">

                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="active" name="active" value="1" type="checkbox"
                                               class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$active}}>
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="active" class="font-medium text-gray-700">Active</label>
                                        <p class="text-gray-500">Επέλεξε εάν η τάξη είναι ενεργή.</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="visible" name="visible" value="1" type="checkbox"
                                               class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$visible}}>
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="visible" class="font-medium text-gray-700">Visible</label>
                                        <p class="text-gray-500">Επέλεξε εάν η τάξη είναι όρατη.</p>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                    </div>


                    <div class="mt-5 md:mt-0 md:col-span-2">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Μαθήματα Τάξης</h3>
                    @foreach($selectedcourses as $course)

                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="{{ $course->slug }}" name="courses[]" value="{{ $course->id }}" type="checkbox"
                                       class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" checked disabled>
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="active" class="font-medium text-gray-700">{{ $course->name }}</label>
                                <p class="text-gray-500">{{ $course->description }}</p>
                            </div>
                        </div>

                    @endforeach
                    </div>

                    <div class="mt-5 md:mt-0 md:col-span-2">

                        <h3 class="text-lg font-medium leading-6 text-gray-900">Προσθήκη Νέων Μαθημάτων στην Τάξη.</h3>
                        <fieldset>

                            <div class="mt-4 space-y-4">

                                @foreach($courses as $course)

                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="{{ $course->slug }}" name="courses[]" value="{{ $course->id }}" type="checkbox"
                                                   class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="active" class="font-medium text-gray-700">{{ $course->name }}</label>
                                            <p class="text-gray-500">{{ $course->description }}</p>
                                        </div>
                                    </div>

                                @endforeach

                            </div>


                        </fieldset>

                    </div>

                    <div class="flex justify-end">
                        <button type="button"
                                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Cancel
                        </button>
                        <button type="submit"
                                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
