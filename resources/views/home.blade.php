@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.ffor18-1.fna.fbcdn.net/v/t51.2885-19/s150x150/59002775_1125207077666255_3391284624775708672_n.jpg?_nc_ht=instagram.ffor18-1.fna.fbcdn.net&_nc_ohc=979n4PxEpXQAX9wwtv6&oh=91120566df55938ad41f88b8ca10fe91&oe=5EB17435" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> seguidores</div>
                <div class="pr-5"><strong>6 </strong> seguindo</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->name }}</div>
            <div>Full-Stack and Mobile Developer</div>
            <div><a href="">www.github.com/herverson</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.ffor18-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/42860002_151361119146046_4810223024873668608_n.jpg?_nc_ht=instagram.ffor18-1.fna.fbcdn.net&_nc_cat=110&oh=2ffdcbedafe157475f3dc1f83c108983&oe=5EAD524D" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.ffor18-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/42860002_151361119146046_4810223024873668608_n.jpg?_nc_ht=instagram.ffor18-1.fna.fbcdn.net&_nc_cat=110&oh=2ffdcbedafe157475f3dc1f83c108983&oe=5EAD524D" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.ffor18-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/42860002_151361119146046_4810223024873668608_n.jpg?_nc_ht=instagram.ffor18-1.fna.fbcdn.net&_nc_cat=110&oh=2ffdcbedafe157475f3dc1f83c108983&oe=5EAD524D" class="w-100">
        </div>
    </div>
</div>
@endsection
