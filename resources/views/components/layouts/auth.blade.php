<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="antialiased font-sans text-gray-900">

    <div class="w-4/6 max-w-full mx-auto">
        {{ $slot }}
    </div>

</body>

</html>
