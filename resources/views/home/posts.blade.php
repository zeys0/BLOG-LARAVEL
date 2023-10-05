@extends('template.main')
@section('container')

<article class="max-w-lg px-6 py-4 my-4 mx-auto space-y-4 shadow-md shadow-black rounded-lg">
    <div class="w-full mx-auto space-y-4">
        <div class="w-full rounded-md">
            <img src="https://source.unsplash.com/500x300?{{$blog->category->name}}" alt="category">
        </div>
        <h1 class="text-5xl font-bold leadi">{{$blog->title}}</h1>
        <div class="flex flex-wrap space-x-2 text-sm ">
            <a rel="noopener noreferrer" href="/blog?category={{$blog->category->slug}}" class=" hover:hover:text-blue-600 hover:transition-all">{{$blog->category->name}}</a>

        </div>
        <p class="text-sm ">by
            <a href="/blog?category={{$blog->user->name}}" target="_blank" rel="noopener noreferrer" class="hover:hover:text-blue-600 hover:transition-all ">
                <span>{{$blog->user->name}}</span>
            </a>on
            <time datetime="">{{$blog->created_at->diffForHumans()}}</time>
        </p>
    </div>
    <div class=" text-justify">
        <p>{{$blog->body}}</p>
    </div>
    <div class="bg-green-600 text-center text-slate-900 font-semibold w-20 p-2  rounded-md hover:opacity-80">
        <a href="/blog">Back</a>
    </div>
</article>


@endsection