@extends('layouts.main')
@section('content')
    <div>
        <div>
            <a href="{{ route('post.create') }}" class="btn btn-primary mb-3">Add one</a>
        </div>
        @foreach($categories as $category)
            <div><a href="{{ route('category.show', $category->id) }}">{{ $category->id }}.  {{ $category->title }}. <br> {{ $category->parent_id }}</a></div>
        @endforeach

{{--        <div>--}}
{{--            {{ $categories->withQueryString()->links() }}--}}
{{--        </div>--}}
    </div>
@endsection
