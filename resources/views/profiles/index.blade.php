@extends('layouts.app')

@section('content')
<div class="container">

    <!-- User profile info--> 
    <div class="row">
        <!-- Profile pic-->
        <div class="col-3 p-5">
        <img src="https://media-exp1.licdn.com/dms/image/C4D03AQGYCYK6L_MgXw/profile-displayphoto-shrink_200_200/0?e=1593648000&v=beta&t=oRbXTza4haDLzJpBLwbkMl2wN1YzAuTl3kJrt0kXHxY" class="rounded-circle">
        </div>
        
        <!-- user/profile info-->
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username}}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>12</strong> posts</div>
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
            <div class="col-4">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>
        @endforeach
    </div>

</div>
@endsection
