<x-layout>
    <x-slot name="titre">
        <h1 class="text-6xl font-bold text-center text-gray-800">{{ __('courriels.titre') }}</h1>
    </x-slot>
    <div class="flex justify-center m-7">
        <div class="max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-white"><span class="font-bold">Sujet: </span>{{ $courriel->titre }}</h5>
            <h6 class="mb-2 text-lg text-gray-900 dark:text-white"><span class="font-bold">De: </span>{{ $courriel->envoyeur }}</h6>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $courriel->contenu }}</p>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-500">
                <span class="font-bold">Date: </span>{{ $courriel->created_at->isoFormat('LLLL') }}
            </p>
                <form method="post" action="{{ route('courriels.update', $courriel->id) }}" class="flex items-center mt-6 space-y-6">
                    @csrf
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Mettre lu</button>
                </form>
            <a href="{{ URL::previous() }}" class="text-gray-300 hover:text-gray-400">Retour</a>
        </div>
    </div>
</x-layout>
