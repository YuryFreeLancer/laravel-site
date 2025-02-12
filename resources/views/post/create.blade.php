@extends('layouts.main')
@section('content')
    <div>
        <form action="{{  route('post.store') }}" method="post" class=" mb-3">
            @csrf
            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="title" placeholder="Title">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" id="content" placeholder="content">{{ old('content') }}</textarea>
                @error('content')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="image">Image</label>
                <input type="text" name="image" value="{{ old('image') }}" class="form-control" id="image" placeholder="Image">
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category_id">
                    @foreach($categories as $category)
                        <option
                            {{ 'category_id' === $category->id  ? ' selected' : ''}}

                            value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <select multiple class="form-control" id="tags" name="tags[]" value="{{ old('tags') }}" >
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
                @error('tags')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
        <a href="{{ route('post.index') }}" class="btn btn-primary mb-3">Back</a>
    </div>
@endsection

