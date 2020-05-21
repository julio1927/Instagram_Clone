@extends('layouts.app')

@section('content')
<div class="container">

    <!-- User profile info--> 
    <div class="row">
        <!-- Profile pic-->
        <div class="col-3 p-5">
        <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>
        
        <!-- user/profile info-->
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username}}</h1>
        
                @can('update', $user->profile)
                    <!-- Add New Post --> 
                    <a href="/p/create">Add New Post</a> 
                @endcan
            </div>

            @can('update', $user->profile)
                <!-- Edit Profile --> 
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
            <!-- User Profile Stats -->
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>400</strong> follwers</div>
                <div class="pr-5"><strong>300</strong> following</div>
            </div>
            <!-- user/profile title-->
            <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div>
            
            <!-- user/profile description-->
            <div>{{$user->profile->description }}</div>

            <!-- user/profile url-->
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <!-- User profile posts -->
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-5">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>

</div>
@endsection
