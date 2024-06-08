<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PROJECTKIT | {{ $title }}</title>

    <link rel="stylesheet" href="https://afeld.github.io/emoji-css/emoji.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    @stack('page_style')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans leading-normal tracking-normal">
    <livewire:layout.navigation />
    <div class="flex flex-col md:flex-row">
        {{-- <livewire:layout.sidebar /> --}}
        @include('livewire.layout.sidebar')
        {{ $slot }}
    </div>

    @livewireScripts

    @stack('scripts')
</body>

</html>
