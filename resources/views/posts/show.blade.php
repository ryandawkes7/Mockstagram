@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        {{-- Post Image --}}
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>

        {{-- Caption --}}
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">

                    {{-- Profile Image --}}
                    <div class="pr-3">
                        <a href="/profile/{{ $post->user->id }}">
                            <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 40px;">
                        </a>
                    </div>

                    {{-- Username --}}
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

                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span>
                    {{ $post->caption }}
                </p>
            </div>
        </div>

    </div>
</div>
@endsection
