<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head class="px-10">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{__('layout.titre')}}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<x-header>
</x-header>
@isset($titre)
    <h1>{{ $titre }}</h1>
@endisset
{{ $slot }}
</body>
</html>
