<nav x-data="{ open: false }" class="fixed top-0 bg-flag-blue w-full">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center w-12">
                    <a href="{{ route('home') }}">
                        <x-jet-application-mark class="block h-8 w-auto"/>
                    </a>
                </div>
            </div>

            <div class="flex items-center text-white text-center">
                <a href="{{ route('pages.help-info') }}">
                    @if(session('applocale') == 'uk')
                        Інформація для шукачі допомоги
                    @elseif(session('applocale') == 'en')
                        Information for persons seeking help
                    @else
                        Informationen für Hilfesuchende
                    @endif
                </a>
            </div>


            <div class="flex items-center space-x-5">
                <a href="/lang/de">
                    <img src="{{ asset('images/at.svg') }}" class="w-12 h-auto"/>
                </a>
                <a href="/lang/uk">
                    <img src="{{ asset('images/uk.svg') }}" class="w-12 h-auto"/>
                </a>
                <a href="/lang/en">
                    <img src="{{ asset('images/en.svg') }}" class="w-12 h-auto"/>
                </a>
            </div>


{{--            <!-- Hamburger -->--}}
{{--            <div class="-mr-2 flex items-center sm:hidden">--}}
{{--                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">--}}
{{--                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">--}}
{{--                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>--}}
{{--                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--            </div>--}}
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
    </div>
</nav>
