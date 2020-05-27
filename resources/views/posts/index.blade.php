@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <!-- The purpose of this view is to display the post -->
        <div class="row">
            <!-- Image -->
            <div class="col-6 offset-3">
                <a href="/profile/{{ $post->user->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        </div>    
        
        <div class="row pt-2 pb-4">
            <!-- Username and Caption -->
            <div class="col-6 offset-3">
                <div>
                    <!-- Username + caption -->
                    <p>
                        <span class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                        </span> {{ $post->caption }}
                    </p>
                </div>
            </div>
        </div>
    @endforeach 
</div>
@endsection
