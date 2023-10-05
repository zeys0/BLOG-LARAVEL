@extends('template.main')
@section('blog')

@foreach($comic as $comics)
<div class="bg-slate-800 flex flex-col">
    <a href="#" class="group w-60 relative bg-black flex">
        <div class="">
            <img alt="Developer" src="https://images.unsplash.com/photo-1603871165848-0aa92c869fa1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=772&q=80" class="absolute h-full w-60 bg-cover opacity-75 transition-opacity group-hover:opacity-50" />
        </div>
        <div class="relative p-4 sm:p-6 lg:p-8">
            <p class="text-sm font-medium uppercase tracking-widest text-pink-500">
                {{ $comics->judul }}
            </p>
            <p class="text-xl font-bold text-white sm:text-2xl">{{$comics->category}}</p>
            <div class="mt-32 sm:mt-48 lg:mt-64">
                <div class="translate-y-4 translate-x-12 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                    <button class="bg-pink-700 rounded-xl p-2 text-sm text-white">
                        View Detail
                    </button>
                </div>
            </div>
        </div>
    </a>
</div>

@endforeach
@endsection