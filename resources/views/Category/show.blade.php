@extends('layouts.main')
@section('content')
    <div>
        <div>ID: {{ $category->id }}.<br> TITLE: {{ $category->title }}.<br> PARENT ID: {{ $category->parent_id }}.</div>
    </div>
{{--    <div>--}}
{{--        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary mb-3">Edit</a>--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        <form action="{{ route('post.delete', $post->id) }}" method="post">--}}
{{--            @csrf--}}
{{--            @method('delete')--}}
{{--            <input type="submit" value="Delete" class="btn btn-danger mb-3">--}}
{{--        </form>--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        <a href="{{ route('post.index') }}" class="btn btn-primary mb-3">Back</a>--}}
{{--    </div>--}}
@endsection
