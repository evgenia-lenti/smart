@extends('layouts.app')

@section('content')
    <div class="bg-white mt-10 px-8 mb-20">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1 mt-5">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Επεξεργασία Τάξης</h3>
                <p class="mt-1 text-sm text-gray-500">
                    Επεξεργαστείτε την τάξη
                </p>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">

                @if (session('error'))
                    <div class="text-red-700">
                        <strong>Δυστυχώς προέκυψε ένα σφάλμα κατά την επεξεργασία της τάξης. Παρακαλώ δοκιμάστε αργότερα.</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li></li>
                            @endforeach
                        </ul>
                    </div>
                @elseif (session('success'))
                    <div class="text-green-700">
                        <strong>Η τάξη ενημερώθηκε με επιτυχία!</strong>
                    </div>
                @endif

                <form class="space-y-6" action="{{ route('classrooms.update', ['classroom' => $classroom]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Όνομα</label>
                        <input type="text" name="name" id="name" autocomplete="given-name" value="{{$classroom->name}}"
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
                            <textarea id="description" name="description" rows="3"
                                      class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md
                                            @error('description') is-invalid @enderror">{{ old('description', $classroom->description) }}</textarea>

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
                        <input type="text" name="slug" id="slug" autocomplete="slug" value="{{$classroom->slug}}"
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

                    <active-toggle-component></active-toggle-component>

                    <visible-toggle-component></visible-toggle-component>


                    <div class="flex justify-end pt-10">
                        <a href="{{route('classrooms.index')}}"
                                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Ακύρωση
                        </a>
                        <button type="submit"
                                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-500 hover:text-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Αποθήκευση
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <form class="text-right mt-6 space-y-6" action="{{ route('classrooms.destroy', ['classroom' => $classroom]) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="">
                <button type="submit"
                        class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-500 hover:text-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Διαγραφή
                </button>
            </div>
        </form>

        <courses-attach-component :classroom="{{ $classroom }}" :courses="{{ $courses }}"></courses-attach-component>
    </div>

@endsection

