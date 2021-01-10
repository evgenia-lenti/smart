@extends('layouts.app')

@section('content')
    <div class="bg-white mt-10 px-8 mb-20">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1 mt-5">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Δημιουργία θεωρίας</h3>
                <p class="mt-1 text-sm text-gray-500">
                    Δημιουργήστε υλικό θεωρίας
                </p>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">

                @if (session('error'))
                    <div class="text-red-700">
                        <strong>Δυστυχώς προέκυψε ένα σφάλμα κατά τη δημιουργία της θεωρίας. Παρακαλώ δοκιμάστε αργότερα.</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li></li>
                            @endforeach
                        </ul>
                    </div>
                @elseif (session('success'))
                    <div class="text-green-700">
                        <strong>Η θεωρία δημιουργήθηκε με επιτυχία!</strong>
                    </div>
                @endif

                <form class="space-y-6" action="{{ route('upload.pdf') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Όνομα</label>
                        <input type="text" name="name" id="name" autocomplete="given-name" value="{{old('name')}}"
                               class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
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
                                      class="shadow-sm focus:ring-gray-500 focus:border-gray-500 block w-full sm:text-sm border-gray-300 rounded-md
                                            @error('description') is-invalid @enderror">{{ old('description') }}</textarea>

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
                               class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                        @error('slug') is-invalid @enderror">

                        @error('slug')
                        @if($errors->has('slug'))
                            <small class="text-red-500 text-sm">
                                {{ $message }}
                            </small>
                        @endif
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="course_id" class="block text-sm font-medium text-gray-700">ID Μαθήματος</label>
                        <input type="text" name="course_id" id="course_id" autocomplete="course_id" value="{{old('course_id')}}"
                               class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                        @error('course_id') is-invalid @enderror">

                        @error('course_id')
                        @if($errors->has('course_id'))
                            <small class="text-red-500 text-sm">
                                {{ $message }}
                            </small>
                        @endif
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="material_type_id" class="block text-sm font-medium text-gray-700">Τύπος υλικού (video = 1, pdf = 2)</label>
                        <input type="text" name="material_type_id" id="material_type_id" value="{{old('material_type_id')}}"
                               class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                        @error('material_type_id') is-invalid @enderror">

                        @error('material_type_id')
                        @if($errors->has('material_type_id'))
                            <small class="text-red-500 text-sm">
                                {{ $message }}
                            </small>
                        @endif
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="file" class="block text-sm font-medium text-gray-700">Επιλέξτε αρχείο</label>
                        <input type="file" name="file" class="form-control" id="file"
                               class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                        @error('file') is-invalid @enderror">

                        @error('file')
                        @if($errors->has('file'))
                            <small class="text-red-500 text-sm">
                                {{ $message }}
                            </small>
                        @endif
                        @enderror
                    </div>

                    <div class="flex justify-end pt-10">
                        <a href="{{route('courses.index')}}"
                           class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
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
    </div>

@endsection

