@extends('layouts.app')

@section('content')
<div class="container">
    <!-- The purpose of this view is to display the post -->
    <div class="row">
        <!-- Image -->
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>

        <!-- Username and Caption -->
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <!-- User profile image -->
                    <div class="pr-3">
                        <img src="/storage/{{ $post->user->profile->image }}" class="rounded-circle w-100" style="max-width: 40px;">
                    </div>

                    <!-- User Username -->
                    <div>
                        <div class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                            <a href="#" class="pl-3">Follow</a>
                        </div>
                    </div>
                </div>

                <hr>
                
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
</div>
@endsection
