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
            <x-jet-input type="text" class="w-full" wire:model="name" required/>
            <x-jet-input-error for="name"/>
        </div>
        <div class="mt-4">
            <x-jet-label for="company" class="text-white">{{ __('Company') }}</x-jet-label>
            <x-jet-input type="text" class="w-full" wire:model="company"/>
            <x-jet-input-error for="company"/>
        </div>
        <div class="mt-4">
            <x-jet-label for="phone" class="text-white">{{ __('Phone') }}</x-jet-label>
            <x-jet-input type="text" class="w-full" wire:model="phone"/>
            <x-jet-input-error for="phone"/>
        </div>
        <div class="mt-4">
            <x-jet-label for="email" class="text-white">{{ __('Email') }}</x-jet-label>
            <x-jet-input type="email" class="w-full" wire:model="email" required/>
            <x-jet-input-error for="email"/>
        </div>
        <div class="mt-4">
            <x-jet-label for="address" class="text-white">{{ __('Address of the living space') }}</x-jet-label>
            <x-jet-input type="text" class="w-full" wire:model="address" required/>
            <x-jet-input-error for="address"/>
        </div>
        <div class="grid grid-cols-6 gap-3">
            <div class="col-span-2 mt-4">
                <x-jet-label for="zip" class="text-white">{{ __('Zip') }}</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model="zip" required/>
                <x-jet-input-error for="zip"/>
            </div>
            <div class="col-span-4 mt-4">
                <x-jet-label for="city" class="text-white">{{ __('City') }}</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model="city" required/>
                <x-jet-input-error for="city"/>
            </div>
        </div>
        <div class="mt-4">
            <x-jet-label for="country" class="text-white">{{ __('State') }}</x-jet-label>
            <x-jet-input type="text" class="w-full" wire:model="country" required/>
            <x-jet-input-error for="country"/>
        </div>
        <div class="grid grid-cols-6 gap-3">
            <div class="col-span-6 md:col-span-3 mt-4">
                <x-jet-label for="square_meter" class="text-white">{{ __('Square meter') }}</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model="square_meter" required/>
                <x-jet-input-error for="square_meter"/>
            </div>
            <div class="col-span-6 md:col-span-3 mt-4">
                <x-jet-label for="rooms" class="text-white">{{ __('Rooms') }}</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model="rooms" required/>
                <x-jet-input-error for="rooms"/>
            </div>
        </div>
        <div class="grid grid-cols-6 gap-3">
            <div class="col-span-3 mt-4">
                <x-jet-label for="available_from" class="text-white">{{ __('Available from') }}</x-jet-label>
                <x-jet-input type="date" class="w-full" wire:model="available_from" required/>
                <x-jet-input-error for="available_from"/>
            </div>
            <div class="col-span-3 mt-4">
                <x-jet-label for="available_to" class="text-white">{{ __('Available to') }}</x-jet-label>
                <x-jet-input type="date" class="w-full" wire:model="available_to" />
                <x-jet-input-error for="available_to"/>
            </div>
        </div>
        <div class="mt-4">
            <x-jet-label for="description" class="text-white">{{ __('Description of linivng space') }}</x-jet-label>
            <textarea wire:model="description" class="w-full text-gray-900 p-3" rows="8" required></textarea>
        </div>
        <div class="mt-4">
            <x-jet-label for="agb" class="text-white">
                <x-jet-input type="checkbox" wire:model="agb" />
                {!!  __("I accept the :terms_of_service", [
                   'terms_of_service' => '<a href="' . route('terms') . '" target="_blank" class="underline">Datenschutzerklärung</a>'
                   ]) !!}
            </x-jet-label>
        </div>
        <div class="mt-4">
            <x-jet-label for="newsletter" class="text-white">
                <x-jet-input type="checkbox" wire:model="newsletter" />
                {!!  __("Yes, keep me informed about IMMO HILFT via email.") !!}
            </x-jet-label>
        </div>
        <button type="submit" class="mt-10 shadow-xl hover:shadow-lg focus:shadow-lg flex w-full justify-center bg-flag-yellow text-white font-bold text-xl py-3">{{ __('submit') }}</button>
    </form>
</div>
