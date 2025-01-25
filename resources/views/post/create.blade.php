@extends('layouts.main')
@section('content')
    <div>
        <form action="{{  route('post.store') }}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="form-group mb-3">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" placeholder="content"></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="image">Image</label>
                <input type="text" class="form-control" id="image" placeholder="Image">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
