<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="text-gray-300 font-bold">
                <span>{{__('layout.titre')}}</span>
            </div>
            <div class="flex items-center">
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">{{__('components.accueil')}}</a>
                        <a href="/courriels" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">{{__('courriels.titre')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-sm font-medium">{{__('components.accueil')}}</a>
            <a href="/courriels" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-sm font-medium">{{__('courriels.titre')}}</a>
        </div>
    </div>
</nav>
