<div>
   <div class="content">
       <h1>Initatoren</h1>

       <form wire:submit.prevent="submit" class="grid grid-cols-3 gap-5">
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
           @foreach($initiators as $initiator)
               <li :wire:key="{{ $initiator['id']}}" class="flex justify-between py-3 py-2">
                   <span>{{ $initiator['name'] }}</span>
                   <span>{{ $initiator['link'] }}</span>
                   <span class="cursor-pointer" wire:click="delete({{ $initiator['id']}})">löschen</span>
               </li>
           @endforeach
       </ul>


   </div>
</div>
