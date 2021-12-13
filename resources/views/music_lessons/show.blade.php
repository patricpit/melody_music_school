@extends('layouts.app1')

@section('content')
<br><br><br>
<div check="pt-15 w-4/5 m-auto">
        <a 
            href="/music_lessons"
            class="bg-blue-500 uppercase bg-transparent text-gray-100
            text-xs font-extrabold py-3 px-5 rounded-3xl">
            Go Back
        </a>
</div>
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-4xl">
            {{ $post->title }}
        </h1>
        <br>
        <img src="{{ asset('images/' . $post->image_path) }}" alt="">
       
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{
            $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
</div>

@endsection