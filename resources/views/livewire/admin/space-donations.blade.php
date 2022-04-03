<div>
    <div class="content">
        <div class="flex justify-between">
            <h1>Wohnraum ( {{ $spaces->count() }} )</h1>
            @if(!$file)
                <span wire:click="export" class="cursor-pointer">CSV erzeugen</span>
            @else
                <a href="{{ $file }}" target="_blank">Download</a>
            @endif
        </div>

        <table class="text-sm w-full">
            <thead>
            <tr>
                <th class="text-left">Erstellt<br>Update</th>
                <th class="text-left">Name<br>Email</th>
                <th class="text-left">Firma</th>
                <th class="text-left">Adresse</th>
                <th class="text-left">Fläche<br>Zimmer</th>
                <th class="text-left">Details</th>
                <th class="text-left">Verfügbar ab<br>bis</th>
                <th class="text-left w-60">Beschreibung</th>
                <th class="text-left">Validiert</th>
                <th>senden</th>
            </tr>
            </thead>
            @foreach($spaces as $item)
                <tr class="border-b">
                    <td>
                        {{ $item->created_at->format('d.m.y') }}<br>
                        {{ $item->updated_at->format('d.m.y') }}
                    </td>
                    <td>
                        {{ $item->name }}
                        <br>
                        <a href="mailto:{{ $item->mail }}">{{ $item->email }}</a>
                        <br>
                        <a href="tel:{{ $item->mail }}">{{ $item->phone }}</a>

                    </td>
                    <td>{{ $item->company }}</td>
                    <td>
                        {{ $item->address }}
                        <br>
                        {{ $item->zip }} {{ $item->city }}
                        <br>
                        {{ $item->country }}
                    </td>
                    <td>
                        {{ $item->square_meter }} &#13217;
                        <br>
                        {{ $item->rooms }}
                    </td>
                    <td>
                        <div class="flex space-x-5 items-center">
                            @if($item->furnitured)
                                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            @else
                                <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            @endif
                            Möbliert
                        </div>
                        <div class="flex space-x-5 items-center">
                            @if($item->freerent)
                                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            @else
                                <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            @endif
                            kostnelos
                        </div>
                        <div class="flex space-x-5 items-center">
                            @if($item->exclusiv)
                                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            @else
                                <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            @endif
                            nur auf immo-hilft
                        </div>
                    </td>
                    <td>
                        {{ $item->available_from }}
                        <br>
                        {{ $item->available_to }}
                    </td>
                    <td class="line-clamp-1 hover:line-clamp-none px-2" width="100" style="max-width: 200px; overflow: hidden">
                        {{ $item->description }}
                    </td>
                    <td>
                        @if($item->email_verified_at)
                            {{ \Carbon\Carbon::parse($item->email_verified_at)->format('d.m. H:i') }}
                        @else
                            <span class="text-red-600">Nein</span>
                        @endif
                    </td>
                    <td>
                        <div x-data="{ show : true, item : {{ $item->id }} }" x-init="

                        $wire.on('sent', (data) => {

                             if(data.id == item ){
                                  show = false
                             }

                         })">
                            <a x-show="show" href="#" wire:click.prevent="sendUpdateNotification({{ $item->id }})">Update Anfrage senden</a><br>
                        </div>

                    </td>
                </tr>
            @endforeach
        </table>

        <h3 class="my-10">Gelöschte</h3>

        <table class="text-sm w-full">
            <thead>
            <tr>
                <th class="text-left">Name<br>Email</th>
                <th class="text-left">Firma</th>
                <th class="text-left">Adresse</th>
                <th class="text-left">Fläche<br>Zimmer</th>
                <th class="text-left">Verfügbar ab<br>bis</th>
                <th class="text-left w-60">Beschreibung</th>
            </tr>
            </thead>
            @foreach($spaces as $item)
                <tr class="border-b">
                    <td>
                        {{ $item->name }}
                        <br>
                        <a href="mailto:{{ $item->mail }}">{{ $item->email }}</a>
                        <br>
                        <a href="tel:{{ $item->mail }}">{{ $item->phone }}</a>

                    </td>
                    <td>{{ $item->company }}</td>
                    <td>
                        {{ $item->address }}
                        <br>
                        {{ $item->zip }} {{ $item->city }}
                        <br>
                        {{ $item->country }}
                    </td>
                    <td>
                        {{ $item->square_meter }} &#13217;
                        <br>
                        {{ $item->rooms }}
                    </td>
                    <td>
                        {{ $item->available_from }}
                        <br>
                        {{ $item->available_to }}
                    </td>
                    <td class="w-60">
                        {{ $item->description }}
                    </td>
                </tr>
            @endforeach
        </table>


    </div>
</div>

