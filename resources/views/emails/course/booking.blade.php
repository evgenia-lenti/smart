{{--@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent--}}

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }}</title>
</head>

<body>
    <div class="bg-white px-4 py-6 shadow sm:rounded-lg sm:px-6">
        <div class="sm:flex sm:justify-between sm:items-baseline">
            <h3 class="text-base font-medium">
                <span class="text-gray-900">Monica White</span>
                <span class="text-gray-600">wrote</span>
            </h3>
            <p class="mt-1 text-sm text-gray-600 whitespace-nowrap sm:mt-0 sm:ml-3">
                <time datetime="2021-01-27T16:35">Wednesday at 4:35pm</time>
            </p>
        </div>
        <div class="mt-4 space-y-6 text-sm text-gray-800">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada at ultricies tincidunt elit et, enim. Habitant nunc,
                adipiscing non fermentum, sed est a, aliquet. Lorem in vel libero vel augue aliquet dui commodo.
            </p>
            <p>
                Nec malesuada sed sit ut aliquet. Cras ac pharetra, sapien purus vitae vestibulum auctor faucibus ullamcorper. Leo
                quam tincidunt porttitor neque, velit sed. Tortor mauris ornare ut tellus sed aliquet amet venenatis condimentum. Convallis accumsan et nunc eleifend.
            </p>
            <p>
                <strong style="font-weight: 600;">Monica White</strong><br>
                Customer Service
            </p>
        </div>
    </div>
</body>

</html>-->

@component('mail::message', ['ticket' => $ticket])
Σ' ευχαριστούμε για την κράτηση!

Η κράτησή σου με αριθμό {{ $ticket->id }} πραγματοποιήθηκε με επιτυχία.

@component('mail::panel', ['ticket' => $ticket])
<h2>Στοιχεία κράτησης</h2>
<dl>
<dd>
<div>
<span>ΟΝΟΜΑ:</span>
<span>{{ $ticket->first_name }}</span>
<span>{{ $ticket->last_name }}</span>
</div>
<div>
<span>ΤΗΛΕΦΩΝΟ:</span>
<span>{{ $ticket->telephone }}</span>
</div>
</dd>
</dl>
@endcomponent

@component('mail::button', ['url' => $url])
Σύνδεση στο μάθημα
@endcomponent

Ευχαριστούμε,<br>
{{ config('app.name') }}
@endcomponent


