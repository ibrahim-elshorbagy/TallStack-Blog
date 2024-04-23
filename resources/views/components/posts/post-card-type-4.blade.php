@props(['post'])


<section {{ $attributes }} class="lg:py-28  ">



    <div class="shadow bg-white rounded-md">
        <div class="relative">
            <div class="absolute top-0 start-0 p-2">
                <span class="inline-flex items-center justify-center gap-2 bg-white/20 backdrop-blur-xl text-[13px] font-medium rounded-full text-white py-1 px-2"><span class="w-1.5 h-1.5 inline-block bg-white rounded-full"></span> {{ $post->published_at->format('d M Y') }}</span>
            </div>
            <img src="{{ $post->getThumbnailUrl() }}" class="rounded-md" alt="">
            <div class="absolute inset-x-0 top-auto bottom-0 p-2">
                <div class="bg-white/50 backdrop-blur-xl p-4 rounded-md">
                    <div class="text-black text-center">
                        <h4 class="text-2xl font-semibold">{{ $post->title }}</h4>
                        <p class="text-base font-medium mt-3">{{ $post->getExcerpt(50) }}<a wire:navigate href="{{route('posts.show',$post->slug)}}" class="underline">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>


