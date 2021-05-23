@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Edit Post</h2>

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(session('Success'))
            <div class="alert alert-success">
                Success!
            </div>
            @endif
            <form method="POST" action="{{ route('posts.update',[$post->id])}}">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control">{{$post->content}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

            <hr>

            <form action="{{route('posts.destroy',[$post->id])}}" method="POST"
                onsubmit="return confirm('Are you sure?')">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection