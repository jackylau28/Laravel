@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach (App\Models\Post::orderBy('created_at','DESC')->get() as $post)
            <div class="card">
                <div class="card-header">
                    {{$post->title}}

                    @auth
                    <a href="{{ route('posts.edit',[$post->id])}}">(edit)</a>
                    @endauth
                </div>
                <div class="card-body">
                    {!! $post->content !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection