<x-app-layout>
    <div class="bg-flag-yellow min-h-screen bg-right section-bg" style="background-image: url( {{ asset('images/wohnraum-bg.svg') }}); background-size: 33.33%; background-repeat: repeat-y;">
        <div class="container py-24">
            <div class="flex">
                <div class="w-full md:w-1/2 flex justify-start md:justify-center items-center">
                    <div class="max-w-xl">
                        <div class="content">
                            <h1 class="font-bold my-10 text-3xl md:text-5xl">{{ session('message') }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
