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
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{ $user->username}}</div>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

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
                <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> follwers</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
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
