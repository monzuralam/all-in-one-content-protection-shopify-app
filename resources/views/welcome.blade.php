<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body>
    @extends('shopify-app::layouts.default')

    @section('content')
        <!-- You are: (shop domain name) -->
        <p class="text-xl">You are: {{ $shopDomain ?? Auth::user()->name }}</p>
    @endsection
</body>

</html>
