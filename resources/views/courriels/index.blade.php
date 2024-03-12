<x-layout>
    <x-slot name="titre" class="text-center">
        <div class="flex flex-col">
            <h1 class="text-6xl font-bold text-center text-gray-800">{{ __('courriels.titre') }}</h1>
            @foreach ($courriels as $courriel)
                <li>
                    <a href="{{ route('courriels.show', $courriel->id) }}"
                       class="underline decoration-sky-600 hover:decoration-blue-400">
                        {{ $courriel->titre }}
                    </a>
                </li>
            @endforeach
        </div>
    </x-slot>
</x-layout>
