<div>
    <div class="content">
        <h1>Spender</h1>

        <form wire:submit.prevent="submit" class="grid grid-cols-4 gap-5">
            <div>
                <x-jet-label for="name">Name</x-jet-label>
                <x-jet-input type="text" wire:model="name" id="name" name="name" class="w-full"/>
                <x-jet-input-error for="name"/>
            </div>
            <div>
                <x-jet-label for="link">link</x-jet-label>
                <x-jet-input type="text" wire:model="link" id="link" name="link" class="w-full"/>
                <x-jet-input-error for="link"/>
            </div>
            <div>
                <x-jet-label for="donation">Spende</x-jet-label>
                <x-jet-input type="number" wire:model="donation" id="donation" name="donation" class="w-full"/>
                <x-jet-input-error for="donation"/>
            </div>
            <x-jet-button type="submit">speichern</x-jet-button>
        </form>

        <ul>
            @foreach($donators as $item)
                <li :wire:key="{{ $item['id']}}" class="flex justify-between py-3 py-2">
                    <span>{{ $item['name'] }}</span>
                    <span>{{ $item['link'] }}</span>
                    <span class="cursor-pointer" wire:click="delete({{ $item['id']}})">löschen</span>
                </li>
            @endforeach
        </ul>


    </div>
</div>
