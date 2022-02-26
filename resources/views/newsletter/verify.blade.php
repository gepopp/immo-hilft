<x-app-layout>
    <div class="flex flex-col w-full min-h-screen justify-center items-center">
        <img src="{{ asset('images/IMMohilft_Logo_black.png') }}" class="w-48 h-auto"/>

        @if(session()->has('error'))
            <div class="bg-red-300 bg-opacity-25 text-gray-900 p-5 text-center mg-4">
                <p>{{ session('error')  }}</p>
            </div>
        @endif

    </div>
</x-app-layout>
