@extends('layouts.app')

@section('content')

    <div class="mt-10 sm:mt-0 px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-6 mt-5">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Φόρμα επικοινωνίας</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Επικοινωνήστε μαζί μας συμπληρώνοντας τη φόρμα επικοινωνίας.
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Error!</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li></li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/contacts" method="POST">
                    @csrf
                    <div class="overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700">Όνομα</label>
                                    <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Επώνυμο</label>
                                    <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="text" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="telephone" class="block text-sm font-medium text-gray-700">Τηλέφωνο</label>
                                    <input type="text" name="telephone" id="telephone" autocomplete="telephone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="message" class="block text-sm font-medium text-gray-700">Μήνυμα</label>
                                    <textarea id="message" name="message" rows="6" class="mt-1 shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="px-4 py-3 sm:px-6">
                            <button type="submit" class="inline-flex bg-primary-500 justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-#f6ad55 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Αποστολή
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

