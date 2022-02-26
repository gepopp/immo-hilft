<div>
    <div class="p-5 mt-10 border border-gray-700 max-w-lg">
        <div
            x-data="{ show: false }"
            x-init="setTimeout(() => show = false, 3000)"

            @saved.window="show = true"
        >
            <div x-show="show" x-cloak class="bg-green-300 bg-opacity-25 text-gray-900 p-5 text-center mg-4">
                <p>{{__('Thank you. We have sent you an Email. Please check your Inbox and use the Link in that Email to confirm your subscription.')}}</p>
            </div>
        </div>
        <form wire:submit.prevent="submit">
            <p class="">{{ __('Subscribe to our Email updates, we will send you a message as soon as we started.') }}</p>
            <div class="mt-4">
                <x-jet-label for="name">{{ __('Name') }}</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model="name"/>
                <x-jet-input-error for="name"/>
            </div>
            <div class="mt-4">
                <x-jet-label for="email">{{ __('Email') }}</x-jet-label>
                <x-jet-input type="email" class="w-full" wire:model="email" required/>
                <x-jet-input-error for="email"/>
            </div>
            <div class="mt-4">
                <x-jet-label for="agb">
                    <x-jet-input type="checkbox" wire:model="agb" required/>
                    {!!  __("I accept the :terms_of_service", [
                    'terms_of_service' => '<a href="' . route('terms') . '" target="_blank" class="underline">Datenschutzerklärung</a>'
                    ]) !!}
                </x-jet-label>
                <x-jet-input-error for="agb"/>
            </div>
            <div class="mt-4">
                <x-jet-button>{{ __('Subscribe') }}</x-jet-button>
            </div>
        </form>
    </div>
</div>
