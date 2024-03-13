<x-layout>
    <x-slot name="titre" class="text-center">
        <h1 class="text-6xl font-bold text-center text-gray-800">{{ __('courriels.titre') }}</h1>
        <div class="flex justify-center p-5">
            <div class="w-2/3 w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between mb-4">
                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">{{ __('courriels.titre') }}</h5>
                </div>
                <div class="flow-root">
                    <a href="{{ url('/courriels') }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">{{__('courriels.afficher')}}</a>
                    <a href="{{ url('/courriels?status=0') }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">{{__('courriels.afficher_lus')}}</a>
                    <a href="{{ url('/courriels?status=1') }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">{{__('courriels.afficher_non_lus')}}</a>

                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($courriels as $courriel)
                            <a href="{{ route('courriels.show', $courriel->id) }}">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex items-center text-gray-300 w-32">
                                        @if($courriel->lu)
                                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> {{__('courriels.lu')}}
                                        @else
                                            <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> {{__('courriels.non_lu')}}
                                        @endif
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            {{ $courriel->titre }}
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            {{ substr($courriel->contenu, 0, 30) . '...'}}
                                        </p>
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            {{ $courriel->envoyeur }}
                                        </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        {{ $courriel->created_at->diffForHumans() }}
                                    </div>
                                </div>
                            </li>
                            </a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>
