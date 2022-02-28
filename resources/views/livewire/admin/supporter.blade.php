<div>
    <div class="content">
        <h1>Unterstützer</h1>

        <form wire:submit.prevent="submit" class="grid grid-cols-4 gap-5">
            <div x-data="{photoName: null, photoPreview: null}">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                       wire:model="photo"
                       x-ref="photo"
                       x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
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
            <x-jet-button type="submit">speichern</x-jet-button>
        </form>

        <ul>
            @foreach($supporter as $item)
                <li :wire:key="{{ $item['id']}}" class="flex justify-between py-3 py-2">
                    <span><img src="{{ \Illuminate\Support\Facades\Storage::url($item['profile_photo_path']) }}" class="w-36 h-auto"/></span>
                    <span>{{ $item['name'] }}</span>
                    <span>{{ $item['link'] }}</span>
                    <span class="cursor-pointer" wire:click="delete({{ $item['id']}})">löschen</span>
                </li>
            @endforeach
        </ul>


    </div>
</div>
