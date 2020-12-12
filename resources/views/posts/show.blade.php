@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        {{-- Image --}}
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>

        {{-- Caption --}}
        <div class="col-4">
            <div>
                <h3>{{ $post->user->username }}</h3>
                <p>{{ $post->caption }}</p>
            </div>
        </div>

    </div>
</div>
@endsection
