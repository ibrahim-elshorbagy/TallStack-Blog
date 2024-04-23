<x-app-layout title="Home Page">

    <!-- Start Section 1 -->

    <div class="w-full flex justify-center" style="background-image: url('{{ asset('images/blog-bg-1.png') }}');">
        <div class="container px-5 py-10">

                <div class="mb-10">
                    <h2 class="text-center mt-5 mb-5 text-3xl font-bold text-blue-500">Section 1</h2>
                    <p class="text-center font-medium text-gray-500 mt-4">Lorem Ipsum is simply dummy text of the printing and
                </div>

                <div class="w-full mb-5 ">
                    <div class="grid w-full grid-cols-3 gap-10">
                        @foreach ($featuredPosts as $post)
                            <x-posts.post-card-type-1 :post="$post" class="col-span-3 md:col-span-1"/>
                        @endforeach
                    </div>
                </div>

            <a class="block mt-10 text-lg font-semibold text-center text-blue-500" wire:navigate href="{{route('posts.index')}}">Moren Posts</a>
        </div>
    </div>
    <!-- end sectionn 1 -->

    <hr>
    <!-- Strat sectionn 2 -->

    <div class="w-full  flex justify-center" >
        <div class="container px-5 py-10">

                <div class="mb-10">
                    <h2 class="text-center mt-5 mb-5 text-3xl font-bold text-blue-500">Section 2</h2>
                    <p class="text-center font-medium text-gray-500 mt-4">Lorem Ipsum is simply dummy text of the printing and
                </div>

                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 mt-14">

                        @foreach ($FourFeaturedPosts as $post)
                            <x-posts.post-card-type-2 :post="$post" class="col-span-3 md:col-span-1"/>
                        @endforeach
                </div>

            <a class="block mt-10 text-lg font-semibold text-center text-blue-500" wire:navigate href="{{route('posts.index')}}">Moren Posts</a>
        </div>
    </div>

    <!-- end sectionn 2 -->

    <hr>

    <!-- Strat sectionn 3 -->

    <div class="w-full  flex justify-center  " style="background-image: url('{{ asset('images/blog-bg-1.png') }}');">

                <div class="container px-5 py-10">

                        <div class="mb-10 ">

                            <h2 class="text-center mt-5 mb-5 text-3xl font-bold text-blue-500">Section 3</h2>
                            <p class="text-center font-medium text-gray-500 mt-4">Lorem Ipsum is simply dummy text of the printing and

                        </div>

                        <x-posts.post-card-type-3 :featuredPosts="$featuredPosts" class="col-span-3 md:col-span-1"/>

                </div>

    </div>


    <!-- end sectionn 3 -->

    <hr>

    <!-- Strat sectionn 4 -->

    <div class="w-full  flex justify-center" >
        <div class="container px-5 py-10">

                <div class="mb-10">
                    <h2 class="text-center mt-5 mb-5 text-3xl font-bold text-blue-500">Section 4</h2>
                    <p class="text-center font-medium text-gray-500 mt-4">Lorem Ipsum is simply dummy text of the printing and
                </div>

                <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 mt-14 relative">

                        @foreach ($featuredPosts as $post)
                            <x-posts.post-card-type-4 :post="$post" class="col-span-3 md:col-span-1"/>
                        @endforeach
                </div>

            <a class="block mt-10 text-lg font-semibold text-center text-blue-500" wire:navigate href="{{route('posts.index')}}">Moren Posts</a>
        </div>
    </div>

    <!-- end sectionn 4 -->
    <hr>

        <!-- Start Section 5 -->

        <div class="w-full flex justify-center" style="background-image: url('{{ asset('images/blog-bg-1.png') }}');">
            <div class="container px-5 py-10">

                    <div class="mb-10">
                        <h2 class="text-center mt-5 mb-5 text-3xl font-bold text-blue-500">Section 5</h2>
                        <p class="text-center font-medium text-gray-500 mt-4">Lorem Ipsum is simply dummy text of the printing and
                    </div>

                    <div class="w-full mb-5 ">
                        <div class="grid w-full grid-cols-3 gap-10">
                            @foreach ($latestPosts as $post)
                                <x-posts.post-card-type-5 :post="$post" class="col-span-3 md:col-span-1"/>
                            @endforeach
                        </div>
                    </div>

                <a class="block mt-10 text-lg font-semibold text-center text-blue-500" wire:navigate href="{{route('posts.index')}}">Moren Posts</a>
            </div>
        </div>
        <!-- end sectionn 5 -->

</x-app-layout>
