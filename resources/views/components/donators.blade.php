<div>
    @if(count($donators))
        <hr class="my-10 py-10 text-gray-900">


        <div class="content">

            <h5>Spenderliste:</h5>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
                @foreach($donators as $key => $donator)
                    <div class="p-3 border-b border-gray-400">{{ $donator->name }}</div>
                @endforeach
            </div>
        </div>
    @endif
</div>
