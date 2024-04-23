<x-app-layout title="Blog">
    <div class="container px-5 mx-auto grid w-full grid-cols-4 ">

        <div id="side-bar"
            class=" top-0 col-span-4 py-6 space-y-3 sm:order-last sm:col-span-1 pt-md:10 md:px-3 md:h-screen md:border-t md:border-gray-100 md:border-t-gray-100 md:md:border-t-none md:col-span-1  md:border-l">

            @include('posts.partials.search-box')
            @include('posts.partials.categories-box')
        </div>

        <div class="col-span-4 md:col-span-3 sm:order-first">
            @livewire('post-list')
        </div>

    </div>
</x-app-layout>
