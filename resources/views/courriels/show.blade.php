<x-layout>
    <x-slot name="titre">
        <h1 class="text-6xl font-bold text-center text-gray-800">{{ __('courriels.titre') }}</h1>
    </x-slot>
    <p>{{ $courriel->titre }}</p>
</x-layout>
