@props(['post'])

<!-- -->
<div class="my-10">
    
    <h2 class="text-xl font-semibold mt-1">{{ $post->title }}</h2>
    <p class="text-base font-medium text-gray-500 mt-2">{{ $post->getExcerpt() }}</p>

    <div class="flex items-center justify-between mt-5">

        <p>{{ $post->author->name }} | {{$post->published_at->toDateString()}}</p>

        <a wire:navigate href="{{route('posts.show',$post->slug)}}" class="flex items-center gap-2 text-blue-500 border-b border-dashed border-blue-500">Read
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                </svg>
            </span>
        </a>
    </div>
    <hr class="mt-5">
</div>
