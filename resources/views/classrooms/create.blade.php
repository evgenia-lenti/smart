@extends('layouts.app')

@section('content')
    <div class="bg-white mt-10 px-8 mb-20">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1 mt-5">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Δημιουργία Τάξης</h3>
                <p class="mt-1 text-sm text-gray-500">
                    Δημιουργήστε την τάξη
                </p>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">

                @if (session('error'))
                    <div class="text-red-700">
                        <strong>Δυστυχώς προέκυψε ένα σφάλμα κατά τη δημιουργία της τάξης. Παρακαλώ δοκιμάστε αργότερα.</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li></li>
                            @endforeach
                        </ul>
                    </div>
                @elseif (session('success'))
                    <div class="text-green-700">
                        <strong>Η τάξη δημιουργήθηκε με επιτυχία!</strong>
                    </div>
                @endif

                <form class="space-y-6" action="{{ route('classrooms.store') }}" method="POST">
                    @csrf
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Όνομα</label>
                        <input type="text" name="name" id="name" autocomplete="given-name" value="{{old('name')}}"
                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                        @error('name') is-invalid @enderror">

                        @error('name')
                        @if($errors->has('name'))
                            <small class="text-red-500 text-sm">
                                {{ $message }}
                            </small>
                        @endif
                        @enderror
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">
                            Περιγραφή
                        </label>
                        <div class="mt-1">
                            <textarea id="description" name="description" rows="3" value="{{old('description')}}"
                                      class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md
                                            @error('description') is-invalid @enderror"></textarea>

                            @error('description')
                            @if($errors->has('description'))
                                <small class="text-red-500 text-sm">
                                    {{ $message }}
                                </small>
                            @endif
                            @enderror
                        </div>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                        <input type="text" name="slug" id="slug" autocomplete="slug" value="{{old('slug')}}"
                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                        @error('slug') is-invalid @enderror">

                            @error('slug')
                            @if($errors->has('slug'))
                                <small class="text-red-500 text-sm">
                                    {{ $message }}
                                </small>
                            @endif
                            @enderror
                    </div>

                    <div class="flex justify-end pt-10">
                        <button type="button"
                                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Ακύρωση
                        </button>
                        <button type="submit"
                                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-500 hover:text-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Αποθήκευση
                        </button>
                    </div>
                </form>

                <div class="mt-5 md:col-span-2">
                    <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4 mt-16">Προσθήκη Μαθημάτων</h3>
                <!--                        <fieldset>
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
                </fieldset>-->

                    <div class="">
                        @foreach($courses as $course)
                            <course-toggle :course="{{$course}}"></course-toggle>
                        @endforeach
                    </div>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2">
                <!--                        <fieldset>
                        <div class="flex mt-4 justify-between md:justify-evenly">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="active" name="active" value="1" type="checkbox"
                                           class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded @error('active') is-invalid @enderror">

                                    @error('active')
                @if($errors->has('active'))
                    <small class="text-red-500 text-sm">
{{ $message }}
                        </small>
@endif
                @enderror
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="active" class="font-medium text-gray-700">Active</label>
                        <p class="text-gray-500">Επιλέξτε εάν η τάξη είναι ενεργή</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="visible" name="visible" value="1" type="checkbox"
                               class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded @error('visible') is-invalid @enderror">

                                    @error('visible')
                @if($errors->has('visible'))
                    <small class="text-red-500 text-sm">
{{ $message }}
                        </small>
@endif
                @enderror
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="visible" class="font-medium text-gray-700">Visible</label>
                        <p class="text-gray-500">Επιλέξτε εάν η τάξη είναι όρατη</p>
                    </div>
                </div>
            </div>
        </fieldset>-->
                    <active-visible-toggle></active-visible-toggle>

                </div>


            </div>
        </div>
    </div>

@endsection
