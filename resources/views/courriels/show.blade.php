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
                <form method="post" action="{{ route('courriels.update', $courriel->id) }}" class="flex items-center">
                    @csrf
                    <button type="submit" class="text-white bg-gray-900 hover:bg-gray-700
                        font-medium rounded-lg text-sm px-5 py-2.5">
                        @if($courriel->lu)
                            {{__('courriels.mettre_non_lu')}}
                        @else
                            {{__('courriels.mettre_lu')}}
                        @endif
                    </button>
                </form>
            <a href="{{ url('/courriels') }}" type="button" class="text-white bg-purple-900 hover:bg-purple-700
                        font-medium rounded-lg text-sm px-4 py-2 mt-4">
                {{__('courriels.retour')}}
            </a>
        </div>
    </div>
</x-layout>
