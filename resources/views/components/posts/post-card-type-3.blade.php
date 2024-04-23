@props(['featuredPosts'])


<section {{ $attributes }} class="lg:py-28 relative">




        <div class="px-3 py-3 bg-white shadow relative rounded-lg overflow-hidden">
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">

                <div class="relative group transition-all duration-700">
                    <img src="{{ $featuredPosts[0]->getThumbnailUrl() }}" class="h-full w-full" alt="">

                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/30"></div>
                    <div class="absolute inset-x-0 top-auto bottom-0 p-4 transition-all duration-1000">
                        <div class="bg-black/40 backdrop-blur-xl p-6 rounded-md">
                            <h2 class="text-xl font-bold text-white mt-1">{{$featuredPosts[0]->title}}</h2>
                            <p class="text-base font-semibold text-gray-100 mt-2">{{$featuredPosts[0]->getExcerpt()}}</p>

                            <div class="flex items-center justify-between mt-5">
                                <p class="text-gray-200">{{ $featuredPosts[0]->author->name }} | {{$featuredPosts[0]->published_at->toDateString()}}</p>
                                <a href="#" class="flex items-center gap-2 text-blue-500 border-b border-dashed border-blue-500">Read
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div >
                @foreach ($featuredPosts as $post)
                <x-posts.post-card-type-3-sub :post="$post" class="col-span-3 md:col-span-1"/>
                @endforeach


                    <!-- Button -->

                    <div class="flex justify-center">
                        <a wire:navigate href="{{route('posts.index')}}" class="inline-flex items-center gap-2 py-2 px-5 rounded font-semibold bg-blue-500/5 border border-dashed border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white transition-all duration-500">View All Post
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                </div>
            </div>
        </div>

</section>


