@extends('layouts.main')
@section('content')
    <div>
        <form action="{{  route('post.update', $post->id) }}" method="post" class=" mb-3">
            @csrf
            @method('patch')
            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}">
            </div>
            <div class="form-group mb-3">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" id="content" placeholder="content">{{ $post->content }}</textarea>
            </div>
            <div class="form-group mb-3">
                <label for="image">Image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Image" value="{{ $post->image }}">
            </div>
            <button type="submit" class="btn btn-primary">update</button>
        </form>
        <a href="{{ route('post.index') }}" class="btn btn-primary mb-3">Back</a>
    </div>
@endsection
