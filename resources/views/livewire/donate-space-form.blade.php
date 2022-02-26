<div class="pl-20 md:pl-0 text-white">
    <h2 class="text-white text-2xl md:text-4xl font-bold">
        @if(session('applocale') == 'uk')
            Ви можете запропонувати житло біженцям з України? Тоді зареєструйте його тут – ми зв’яжемося з вами:
        @else
            Sie können einen Wohnraum für geflüchtete Menschen aus der Ukraine anbieten? Dann registrieren Sie diesen bitte hier – wir melden uns bei Ihnen:
        @endif
    </h2>
    <form wire:submit.prevent="submit">
        <div class="mt-4">
            <x-jet-label for="name" class="text-white">{{ __('Name') }}</x-jet-label>
            <x-jet-input type="text" class="w-full text-gray-900" wire:model="name" required/>
            <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="name"/>
        </div>
        <div class="mt-4">
            <x-jet-label for="company" class="text-white">{{ __('Company') }}</x-jet-label>
            <x-jet-input type="text" class="w-full text-gray-900" wire:model="company"/>
            <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="company"/>
        </div>
        <div class="mt-4">
            <x-jet-label for="phone" class="text-white">{{ __('Phone') }}</x-jet-label>
            <x-jet-input type="text" class="w-full text-gray-900" wire:model="phone"/>
            <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="phone"/>
        </div>
        <div class="mt-4">
            <x-jet-label for="email" class="text-white">{{ __('Email') }}</x-jet-label>
            <x-jet-input type="email" class="w-full text-gray-900" wire:model="email" required/>
            <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="email"/>
        </div>
        <div class="mt-4">
            <x-jet-label for="address" class="text-white">{{ __('Address of the living space') }}</x-jet-label>
            <x-jet-input type="text" class="w-full text-gray-900" wire:model="address" required/>
            <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="address"/>
        </div>
        <div class="grid grid-cols-6 gap-3">
            <div class="col-span-2 mt-4">
                <x-jet-label for="zip" class="text-white">{{ __('Zip') }}</x-jet-label>
                <x-jet-input type="text" class="w-full text-gray-900" wire:model="zip" required/>
                <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="zip"/>
            </div>
            <div class="col-span-4 mt-4">
                <x-jet-label for="city" class="text-white">{{ __('City') }}</x-jet-label>
                <x-jet-input type="text" class="w-full text-gray-900" wire:model="city" required/>
                <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="city"/>
            </div>
        </div>
        <div class="mt-4">
            <x-jet-label for="country" class="text-white">{{ __('State') }}</x-jet-label>
            <x-jet-input type="text" class="w-full text-gray-900" wire:model="country" required/>
            <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="country"/>
        </div>
        <div class="grid grid-cols-6 gap-3">
            <div class="col-span-6 md:col-span-3 mt-4">
                <x-jet-label for="square_meter" class="text-white">{{ __('Square meter') }}</x-jet-label>
                <x-jet-input type="text" class="w-full text-gray-900" wire:model="square_meter" required/>
                <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="square_meter"/>
            </div>
            <div class="col-span-6 md:col-span-3 mt-4">
                <x-jet-label for="rooms" class="text-white">{{ __('Rooms') }}</x-jet-label>
                <x-jet-input type="text" class="w-full text-gray-900" wire:model="rooms" required/>
                <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="rooms"/>
            </div>
        </div>
        <div class="grid grid-cols-6 gap-3">
            <div class="col-span-3 mt-4">
                <x-jet-label for="available_from" class="text-white">{{ __('Available from') }}</x-jet-label>
                <x-jet-input type="date" class="w-full text-gray-900" wire:model="available_from" required/>
                <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="available_from"/>
            </div>
            <div class="col-span-3 mt-4">
                <x-jet-label for="available_to" class="text-white">{{ __('Available to') }}</x-jet-label>
                <x-jet-input type="date" class="w-full text-gray-900" wire:model="available_to"/>
                <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="available_to"/>
            </div>
        </div>
        <div class="mt-4">
            <x-jet-label for="description" class="text-white">{{ __('Description of linivng space') }}</x-jet-label>
            <textarea wire:model="description" class="w-full text-gray-900 p-3" rows="8" required></textarea>
            <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="description"/>
        </div>
        <div class="mt-4">
            <x-jet-label for="agb" class="text-white">
                <x-jet-input type="checkbox" wire:model="agb"/>
                {!!  __("I accept the :terms_of_service", [
                   'terms_of_service' => '<a href="' . route('terms') . '" target="_blank" class="underline">Datenschutzerklärung</a>'
                   ]) !!}
            </x-jet-label>
            <x-jet-input-error class="bg-white bg-opacity-25 px-2" for="agb"/>
        </div>
        <div class="mt-4">
            <x-jet-label for="newsletter" class="text-white">
                <x-jet-input type="checkbox" wire:model="newsletter"/>
                {!!  __("Yes, keep me informed about IMMO HILFT via email.") !!}
            </x-jet-label>
        </div>

        <div
            x-data="{ show:false }"
            @saved.window="show = true"
            x-init=" $watch('show', (show) => setTimeout(show = false, 2000))"
        >
            <div x-show="show" x-cloak class="bg-green-300 bg-opacity-25 text-white p-5 text-center mg-4">
                <p>{{__('Thank you. We have sent you an Email. Please check your Inbox and use the Link in that Email to confirm your subscription.')}}</p>
            </div>
        </div>


        <button type="submit" class="mt-10 shadow-xl hover:shadow-lg focus:shadow-lg flex w-full justify-center bg-flag-yellow text-white font-bold text-xl py-3 flex items-center space-x-3">
        <span wire:loading wire:target="submit">
            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </span>
            <span>{{ __('submit') }}</span>
        </button>
    </form>
</div>
