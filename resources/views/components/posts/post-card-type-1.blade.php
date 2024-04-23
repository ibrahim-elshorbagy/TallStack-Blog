@props(['post'])


<section  {{ $attributes }} class="relative py-28 bg-cover bg-no-repeat" >

        <div class="p-4 rounded-lg bg-white">
            <a wire:navigate href="{{route('posts.show',$post->slug)}}">
            <img src="{{ $post->getThumbnailUrl() }}" class="rounded-lg" alt="">
            <h2 class="text-xl font-bold mt-5">{{ $post->title }}</h2>
            </a>
            <div class="flex items-center py-1 text-sm article-meta">


            </div>

            <div class=" items-center gap-3 mt-4">
                <div >
                     <x-posts.author :author="$post->author" size="md" />
                     <span class="mt-2 text-xs block text-gray-500"> {{ $post->published_at->format('d M Y') }}</span>
                </div>
                
            </div>
            <p class="text-base font-semibold text-gray-500 mt-5">{{ $post->getExcerpt(100) }}</p>
            <div class="inline-block mt-6">
                <a wire:navigate href="{{route('posts.show',$post->slug)}}" class="py-2 px-6 rounded-full flex items-center gap-2 font-medium text-white bg-blue-500/90 hover:bg-blue-500 transition-all duration-500">
                    Read more
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>

</section>

