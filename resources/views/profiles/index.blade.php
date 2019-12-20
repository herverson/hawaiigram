@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.ffor18-1.fna.fbcdn.net/v/t51.2885-19/s150x150/59002775_1125207077666255_3391284624775708672_n.jpg?_nc_ht=instagram.ffor18-1.fna.fbcdn.net&_nc_ohc=979n4PxEpXQAX9wwtv6&oh=91120566df55938ad41f88b8ca10fe91&oe=5EB17435" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> seguidores</div>
                <div class="pr-5"><strong>6 </strong> seguindo</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->name }}</div>
            <div>{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="">www.github.com/herverson</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>
        @endforeach
    </div>
</div>
@endsection
