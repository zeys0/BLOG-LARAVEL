@extends('template.main')
@section('blog')


<section class="w-full ">


    <h1 class="text-5xl font-bold flex justify-center pt-4">{{$title}}</h1>

    <div class="flex justify-center w-full mt-2">



        <form action="/blog" class="flex">
            @if(request('category'))
            <input type="hidden" name="category" id="category" value="{{request('category')}}">
            @endif
            @if(request('user'))
            <input type="hidden" name="user" id="user" value="{{request('user')}}">
            @endif


            <input type="text" class="form-control w-96 px-3 py-1.5 text-base font-normal text-gray-700
            bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 
                focus:outline-none" placeholder="Search" name="search" value="{{request('search')}}">
            <button class="px-6 py-2 bg-blue-600 text-white font-medium text-xs  
                       uppercaserounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700
                       focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg 
                       transition duration-150 ease-in-out" type="submit" id="search">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 
                           208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 
                           9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                </svg>
            </button>
        </form>




    </div>

    @if($blog->count())
    <div class="container ">
        <div class=" max-w-xl md:max-w-full flex flex-col shadow-2xl shadow-black mx-auto px-6 my-4">

            <div class="mx-4 my-2">
                <div class="relative">
                    <img src="https://source.unsplash.com/1000x350?{{$blog[0]->category->name}}" alt="" class=" w-full self-center">
                    <h1 class="text-slate-200 absolute top-0 flex justify-center bg-black opacity-80 w-full h-full items-center text-xl font-semibold tracking-wide">{{$blog[0]->category->name}}</h1>
                </div>

                <h1 class="text-3xl font-semibold mt-2 ">{{$blog[0]->title}}</h1>
                <p class="text-lg font-medium my-2">{{$blog[0]->excerpt}}</p>
                <small>By <a class="hover:text-blue-700 delay-200" href="/blog?user={{$blog[0]->user->name}}">{{$blog[0]->user->name}}</a> in
                    <a class="hover:text-blue-700 delay-200" href="/blog?category={{$blog[0]->category->slug}}">{{$blog[0]->category->name}}</a>
                    <span class="block ">Post {{$blog[0]->created_at->diffForHumans()}}</span></small>

                <div class="my-4">
                    <a href="/post/{{ $blog[0]->slug }}" class=" text-md font-semibold bg-blue-500 p-2 rounded-lg hover:opacity-80">Read more</a>
                </div>
            </div>




        </div>

    </div>






    <div class="container">
        <div class="w-full mx-auto">
            <div class="grid grid-rows-1 md:grid-cols-3 gap-4">
                @foreach($blog->skip(1) as $blogs)
                <div class="max-w-xs md:max-w-xl shadow-2xl shadow-black mx-auto">

                    <div class="relative">
                        <img src="https://source.unsplash.com/400x350?{{$blogs->category->name}}" alt="" class="h-[300px] w-full self-center">
                        <h1 class="text-slate-200 absolute top-0 flex justify-center  bg-black opacity-80 w-full h-full
                         items-center text-xl font-semibold tracking-wide hover:bg-transparent hover:transition delay-200 ease-in-out ">
                            <a href="/blog?category={{$blogs->category->slug}}" class="">{{$blogs->category->name}}</a>
                        </h1>
                    </div>
                    <div class="mx-4">

                        <h1 class="text-3xl font-semibold mt-2  ">{{$blogs->title}}</h1>
                        <p class="text-lg font-medium my-2">{{$blogs->excerpt}}</p>
                        <small>By
                            <a class="hover:text-blue-700 delay-200" href="/blog?user={{$blogs->user->name}}">{{$blogs->user->name}}</a> in <a class="hover:text-blue-700 delay-200" href="/blog?category={{$blogs->category->slug}}">{{$blogs->category->name}}</a><span class="block ">Post {{$blogs->created_at->diffForHumans()}}</span></small>

                        <div class="my-4">
                            <a href="/post/{{ $blogs->slug }}" class=" text-md font-semibold bg-blue-500 p-2 rounded-lg hover:opacity-80">Read more</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="my-2">
                {{ $blog->links() }}
            </div>

        </div>

    </div>

    @else
    <p class="flex justify-center mt-4 text-2xl font-semibold tracking-wider">POST NOT FOUND</p>
    @endif
</section>

@endsection