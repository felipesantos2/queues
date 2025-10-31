
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>{{ config('app.name') ?? 'Queue System' }}</title>

<!-- favicon -->
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">

<!-- font awesome -->
<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">

@vite(['resources/css/app.css', 'resources/js/app.js'])
