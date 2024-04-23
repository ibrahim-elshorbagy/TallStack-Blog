<div class="container  px-3 py-6 lg:px-7">
    <div class="flex items-center flex-wrap justify-between border-b border-gray-100">
        <div class="flex text-gray-600">

            @if ($this->activeCategory || $search)
    <button class="text-xs text-red-500" wire:click="ClearFilters()">
        <!-- Heroicon SVG -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block align-middle" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
@endif
            @if ($this->activeCategory)
                <x-badge wire:navigate href="{{ route('posts.index', ['category' => $this->activeCategory->slug]) }}"
                    :textColor="$this->activeCategory->text_color" :bgColor="$this->activeCategory->bg_color">
                    {{ $this->activeCategory->title }}
                </x-badge>
            @endif
            @if ($search)
                <span class="ml-2">
                    Searching : <strong>{{ $search }}</strong>
                </span>
            @endif

        </div>
        <div class="flex items-center space-x-4 font-light ">
            <x-checkbox wire:model.live='popular'/>
            <x-label>Popular</x-label>
            <button class="{{ $sort === 'desc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500' }} py-4"
                wire:click="setSort('desc')">Latest</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500' }} py-4 "
                wire:click="setSort('asc')">Oldest</button>
        </div>
    </div>
    <div class=" py-4">
        @foreach ($this->posts as $post)
            <x-posts.post-item wire:key="{{$post->id}}" :post="$post" />
        @endforeach
    </div>

    <div class="my-3">
        {{ $this->posts->onEachSide(1)->links() }}
    </div>
</div>
