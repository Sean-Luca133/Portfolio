<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <x-favicon/>
    <title>{{isset($title)? "Portfolio - $title":"Portfolio" }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-dusty-olive-50 relative">
<x-navbar/>
<h1 class="text-6xl text-center font-header my-8">{{$title?? ''}}</h1>
<div class="mx-5">
{{$slot}}
</div>
<x-footer/>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
