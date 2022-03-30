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
                <th class="text-left">Name<br>Email</th>
                <th class="text-left">Firma</th>
                <th class="text-left">Adresse</th>
                <th class="text-left">Fläche<br>Zimmer</th>
                <th class="text-left">Verfügbar ab<br>bis</th>
                <th class="text-left w-60">Beschreibung</th>
                <th class="text-left">Validiert</th>
                <th>senden</th>
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

