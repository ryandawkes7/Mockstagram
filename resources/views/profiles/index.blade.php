@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-3 p-5">
            <img src="https://scontent-lhr8-1.cdninstagram.com/v/t51.2885-19/s320x320/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=scontent-lhr8-1.cdninstagram.com&_nc_ohc=dzidqACw0CkAX9UADxn&tp=1&oh=c37873434cbbb0f26d79d7315edcbbc5&oe=5FFDB61F" class="rounded-circle" style="height: 100px; background: green;"/>
        </div>

        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div><h1>{{ $user->username }}</h1></div>
                <a href="/p/create">New Post</a>
            </div>

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>

            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#" class="text-black-50">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <img src="/storage/{{ $post->image }}" class="w-100"/>
        </div>
        @endforeach
    </div>
</div>
@endsection
