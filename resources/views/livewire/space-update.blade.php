<div>
    <h2 class="text-white text-2xl md:text-4xl font-bold">
        Update Ihrer Einreichnung
    </h2>
    <form
        id="space-form"
        x-data="{
          setCaptcha(){
           grecaptcha.ready(function () {
                    grecaptcha.execute('{{env('GOOGLE_RECAPTCHA_SITE_KEY')}}', {action: 'submit'})
                        .then(function (token) {
                            $wire.submit(token)
                        });
                });
            }
          }"
        @submit.prevent="setCaptcha()">
        <div class="mt-4">
            <x-jet-label for="address">{{ __('Address of the living space') }}</x-jet-label>
            <x-jet-input type="text" class="w-full text-gray-900" wire:model="address" required/>
            <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="address"/>
        </div>
        <div class="grid grid-cols-6 gap-3">
            <div class="col-span-2 mt-4">
                <x-jet-label for="zip">{{ __('Zip') }}</x-jet-label>
                <x-jet-input type="text" class="w-full text-gray-900" wire:model="zip" required/>
                <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="zip"/>
            </div>
            <div class="col-span-4 mt-4">
                <x-jet-label for="city">{{ __('City') }}</x-jet-label>
                <x-jet-input type="text" class="w-full text-gray-900" wire:model="city" required/>
                <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="city"/>
            </div>
        </div>
        <div>
            <div class="col-span-6 md:col-span-3 mt-4">
                <x-jet-label for="furnitured" class="">
                    <x-jet-input type="checkbox" class="text-flag-blue" wire:model="furnitured" />
                    {{ __('The available space is furnitured.') }}
                </x-jet-label>
                <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="furnitured"/>
            </div>
            <div class="col-span-6 md:col-span-3 mt-4">
                <x-jet-label for="freerent" class="">
                    <x-jet-input type="checkbox" class="text-flag-blue" wire:model="freerent" />
                    {{ __('The rent of the space is freeexclusiv.') }}
                </x-jet-label>
                <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="freerent"/>
            </div>
            <div class="col-span-6 md:col-span-3 mt-4">
                <x-jet-label for="exclusive" class="">
                    <x-jet-input type="checkbox" class="text-gflag-blue" wire:model="exclusive" />
                    {{ __('The space is exclusively registered on immo-hilft.') }}
                </x-jet-label>
                <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="exclusive"/>
            </div>
        </div>
        <div class="grid grid-cols-6 gap-3">
            <div class="col-span-3 mt-4">
                <x-jet-label for="available_from">{{ __('Available from') }}</x-jet-label>
                <x-jet-input type="date" class="w-full text-gray-900" wire:model="available_from" required/>
                <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="available_from"/>
            </div>
            <div class="col-span-3 mt-4">
                <x-jet-label for="available_to">{{ __('Available to') }}</x-jet-label>
                <x-jet-input type="date" class="w-full text-gray-900" wire:model="available_to"/>
                <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="available_to"/>
            </div>
        </div>
        <div class="mt-4">
            <x-jet-label for="agb">
                <x-jet-input type="checkbox" wire:model="agb"/>
                {!!  __("I accept the :terms_of_service", [
                   'terms_of_service' => '<a href="' . route('terms') . '" target="_blank" class="underline">' . __('privacy policy') .'</a>'
                   ]) !!}
            </x-jet-label>
            <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="agb"/>
        </div>
        <div
            x-data="{ show:false }"
            @saved.window="show = true"
            x-init=" $watch('show', (show) => setTimeout(show = false, 2000))"
        >
            <div x-show="show" x-cloak class="bg-green-300 bg-opacity-25 text-white p-5 text-center mg-4">
                <p>{{__('Vielen Dank. Wir haben Ihre Daten aktualisert.')}}</p>
            </div>
        </div>


        <div
            x-data="{ show:false }"
            @spamprotect.window="show = true"
            x-init=" $watch('show', (show) => setTimeout(show = false, 2000))"
        >
            <div x-show="show" x-cloak class="bg-red-300 bg-opacity-25 text-white p-5 text-center mg-4">
                <p>{{__('Due to spam protection we could not process your request. Please reload the page and try again.')}}</p>
            </div>
        </div>


        <button
            type="submit"
            class="g-recaptcha mt-10 shadow-xl hover:shadow-lg focus:shadow-lg flex w-full justify-center bg-flag-yellow text-white font-bold text-xl py-3 flex items-center space-x-3 bg-flag-blue"
        >
        <span wire:loading wire:target="submit">
            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </span>
            <span>{{ __('submit') }}</span>
        </button>
    </form>

    <hr class="my-10">

    <div x-data="{ confirm: false }">

        <button
            type="button"
            class="mt-10 shadow-xl hover:shadow-lg focus:shadow-lg flex w-full justify-center bg-flag-yellow text-white font-bold text-xl py-3 flex items-center space-x-3 bg-red-500"
            x-show="!confirm"
            @click.prevent="setTimeout(() => confirm = true, 500)"
        >
            <span>{{ __('Diesen Eintrag löschen') }}</span>
        </button>

        <button
            type="button"
            class="mt-10 shadow-xl hover:shadow-lg focus:shadow-lg flex w-full justify-center bg-flag-yellow text-white font-bold text-xl py-3 flex items-center space-x-3 bg-red-900"
            x-show="confirm"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            wire:click.prevent="delete()">
            <span>{{ __('Löschen bestätigen') }}</span>
        </button>

    </div>
</div>
