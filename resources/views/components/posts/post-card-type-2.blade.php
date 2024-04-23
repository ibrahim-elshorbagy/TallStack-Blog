@props(['post'])


<section {{ $attributes }} class="  flex items-center justify-center">
    <div class="container relative">

            <div class="bg-slate-100 p-3 rounded-md">
                <div class="flex flex-wrap sm:flex-nowrap items-center gap-5">
                    <div class="w-40 h-40">
                        <img src="{{ $post->getThumbnailUrl() }}" class="h-full w-full rounded-md" alt="">
                    </div>
                    <div class="flex flex-col items-start">
                        <div class="grow">
                            <p class="flex items-center gap-1 mb-2">

                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="blue" class="w-4 h-4">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />

                                </svg>







                            <span class="font-medium">{{ $post->published_at->format('d M Y') }}</span>
                        </p>
                        <h2 class="text-xl font-bold mb-6 hover:text-blue-500 transition-all duration-500 cursor-pointer">Importance of Keyword Resarch in a Blog</h2>
                        </div>
                        <a wire:navigate href="{{route('posts.show',$post->slug)}}" class="shrink inline-flex items-center justify-center py-1.5 px-5 rounded-full text-white bg-blue-500/90 hover:bg-blue-500 transition-all duration-500">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ms-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

    </div>
</section>


