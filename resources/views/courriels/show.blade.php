<x-layout>
    <x-slot name="titre">
        <h1 class="text-6xl font-bold text-center text-gray-800">{{ __('courriels.titre') }}</h1>
    </x-slot>
    <div class="flex justify-center m-7">
        <div class="max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-white"><span class="font-bold">{{ __('courriels.sujet') }}: </span>{{ $courriel->titre }}</h5>
            <h6 class="mb-2 text-lg text-gray-900 dark:text-white"><span class="font-bold">{{ __('courriels.de') }}: </span>{{ $courriel->envoyeur }}</h6>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $courriel->contenu }}</p>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-500">
                <span class="font-bold">{{ __('courriels.date') }} : </span>{{ $courriel->created_at->isoFormat('LLLL') }}
            </p>
            <div class="flex items-center">
                <input @if($courriel->lu) checked @endif id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('courriels.lu') }}</label>
            </div>
            <a href="{{ URL::previous() }}" class="text-gray-300">{{ __('components.retour') }}</a>
        </div>
    </div>
</x-layout>
