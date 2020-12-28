@extends('layouts.app')

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">Όνομα</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">Επώνυμο</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">Τηλέφωνο</label>

                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>

                                @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Διεύθυνση</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="mt-10 px-8 mb-20">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-6 mt-5">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Εγγραφή</h3>
<!--                <p class="mt-1 text-sm text-gray-600">
                    Επικοινωνήστε μαζί μας συμπληρώνοντας τη φόρμα επικοινωνίας.
                </p>-->
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">

            {{--@if (session('error'))
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
            @endif--}}

            <form action="{{ route('register') }}" method="POST">
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
                                <label for="address" class="block text-sm font-medium text-gray-700">Ταχυδρομική διεύθυνση</label>
                                <input type="text" name="address" id="address" autocomplete="address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
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
                                <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                                <input type="password" name="password" id="password" required autocomplete="new-password" class="mt-1 focus:ring-indigo-500
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
                                <input type="password" name="password_confirmation" id="password-confirm" required autocomplete="new-password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full
                                    shadow-sm sm:text-sm border-gray-300 rounded-md @error('password-confirm') is-invalid @enderror">
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
