@extends('layouts.app')

@section('content')

    <div class="mt-10 px-8 mb-20">
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

                @if (session('error'))
                    <div class="text-red-700">
                        <strong>Δυστυχώς προέκυψε ένα σφάλμα κατά την υποβολή της φόρμας. Παρακαλώ δοκιμάστε αργότερα.</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li></li>
                            @endforeach
                        </ul>
                    </div>
                @elseif (session('success'))
                    <div class="text-green-700">
                        <strong>Η φόρμα υποβλήθηκε με επιτυχία. Θα επικοινωνήσουμε μαζί σας το συντομότερο δυνατό.</strong>
                    </div>
                @endif

                <form action="/contacts" method="POST">
                    @csrf
                    <div class="overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700">Όνομα</label>
                                    <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                                    block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('first_name') is-invalid @enderror">

                                    @error('first_name')
                                        @if($errors->has('first_name'))
                                            <small class="text-red-500 text-sm">
                                                {{ $message }}
                                            </small>
                                        @endif
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Επώνυμο</label>
                                    <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                                    block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('last_name') is-invalid @enderror">

                                    @error('last_name')
                                        @if($errors->has('last_name'))
                                            <small class="text-red-500 text-sm">
                                                {{ $message }}
                                            </small>
                                        @endif
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="telephone" class="block text-sm font-medium text-gray-700">Τηλέφωνο</label>
                                    <input type="text" name="telephone" id="telephone" autocomplete="telephone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                                    block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('telephone') is-invalid @enderror">

                                    @error('telephone')
                                        @if($errors->has('telephone'))
                                            <small class="text-red-500 text-sm">
                                                {{ $message }}
                                            </small>
                                        @endif
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="text" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full
                                    shadow-sm sm:text-sm border-gray-300 rounded-md @error('email') is-invalid @enderror">

                                    @error('email')
                                        @if($errors->has('email'))
                                            <small class="text-red-500 text-sm">
                                                {{ $message }}
                                            </small>
                                        @endif
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="message" class="block text-sm font-medium text-gray-700">Μήνυμα</label>
                                    <textarea id="message" name="message" rows="6" class="mt-1 shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500
                                    sm:text-sm border-gray-300 rounded-md @error('message') is-invalid @enderror"></textarea>

                                    @error('message')
                                        @if($errors->has('message'))
                                            <small class="text-red-500 text-sm">
                                                {{ $message }}
                                            </small>
                                        @endif
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="px-4 py-3 sm:px-6">
                            <button type="submit" class="inline-flex bg-primary-500 justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                Αποστολή
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

