@extends('template.main')
@section('blog')

<H1 class="font-semibold text-4xl flex justify-center my-4">CATEGORY POST</H1>
<div class="container">

    @foreach($category as $categories)
    <div class="my-4 md:flex items-center justify-center">
        <div class="max-w-lg md:max-w-xl shadow-xl shadow-black mx-4 relative bg-transparent overflow-hidden rounded-tl-lg rounded-br-lg">
            <div>
                <img src="https://source.unsplash.com/500x450?{{$categories->name}}" alt="category" class="w-full   ">
            </div>
            <div class="absolute top-0 bg-black w-full h-full opacity-80 hover:bg-transparent hover:transition hover:delay-200">
                <a href="/blog?category={{$categories->slug}}">
                    <h1 class="text-slate-200 font-semibold text-xl flex justify-center my-[50%] p-2 bg-blue-600">{{$categories->name}}</h1>
                </a>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection