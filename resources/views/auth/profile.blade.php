@extends('layouts.app')

@section('content')

    <div class="mt-10 px-8 mb-20">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-6 mt-5">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Προφίλ</h3>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">

                @if (session('error'))
                    <div class="text-red-700">
                        <strong>Δυστυχώς προέκυψε ένα σφάλμα. Παρακαλώ δοκιμάστε αργότερα.</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li></li>
                            @endforeach
                        </ul>
                    </div>
                @elseif (session('success'))
                    <div class="text-green-700">
                        <strong>Το προφίλ ενημερώθηκε με επιτυχία!</strong>
                    </div>
                @endif

                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700">Όνομα</label>
                                    <input type="text" name="first_name" id="first_name" autocomplete="given-name" value="{{$user->first_name}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
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
                                    <input type="text" name="last_name" id="last_name" autocomplete="family-name" value="{{$user->last_name}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
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
                                    <input type="text" name="telephone" id="telephone" autocomplete="telephone" value="{{$user->telephone}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
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
                                    <label for="address" class="block text-sm font-medium text-gray-700">Ταχυδρομική διεύθυνση</label>
                                    <input type="text" name="address" id="address" autocomplete="address" value="{{$user->address}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                                    block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('address') is-invalid @enderror">

                                    @error('address')
                                    @if($errors->has('address'))
                                        <small class="text-red-500 text-sm">
                                            {{ $message }}
                                        </small>
                                    @endif
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="avatar" class="block text-sm font-medium text-gray-700">Φωτογραφία (avatar)</label>
                                    <input type="file" name="avatar" id="avatar" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full
                                    shadow-sm sm:text-sm border-gray-300 rounded-md @error('avatar') is-invalid @enderror">

                                    @error('avatar')
                                    @if($errors->has('avatar'))
                                        <small class="text-red-500 text-sm">
                                            {{ $message }}
                                        </small>
                                    @endif
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="text" name="email" id="email" autocomplete="email" value="{{$user->email}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full
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
                                    <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                                    <input type="password" name="password" id="password" autocomplete="new-password" class="mt-1 focus:ring-indigo-500
                                focus:border-indigo-500 block w-full
                                    shadow-sm sm:text-sm border-gray-300 rounded-md @error('password') is-invalid @enderror">

                                    @error('password')
                                    @if($errors->has('password'))
                                        <small class="text-red-500 text-sm">
                                            {{ $message }}
                                        </small>
                                    @endif
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="password-confirm" class="block text-sm font-medium text-gray-700">Επιβεβαίωση password</label>
                                    <input type="password" name="password_confirmation" id="password-confirm" autocomplete="new-password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full
                                    shadow-sm sm:text-sm border-gray-300 rounded-md @error('password-confirm') is-invalid @enderror">
                                </div>

                            </div>
                        </div>
                        <div class="px-4 py-3 sm:px-6">
                            <button type="submit" class="inline-flex bg-primary-500 justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                Ενημέρωση προφίλ
                            </button>
                        </div>
                    </div>
                </form>

                <form class="px-4 sm:px-6 mt-6 space-y-6 inline text-right" action="{{ route('user.destroy', ['user' => $user]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="">
                        <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-500 hover:text-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Απενεργοποίηση Λογαριασμού
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
