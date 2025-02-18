@extends('layouts.main')
@section('content')
    <div>
        <div>{{ $category->id }}.  {{ $category->title }}</div>
        <div class="mb-2">{{ $category->parent_id }}</div>
    </div>
{{--    <div>--}}
{{--        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary mb-3">Edit</a>--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        <form action="{{ route('category.delete', $category->id) }}" method="post">--}}
{{--            @csrf--}}
{{--            @method('delete')--}}
{{--            <input type="submit" value="Delete" class="btn btn-danger mb-3">--}}
{{--        </form>--}}
{{--    </div>--}}
    <div>
        <a href="{{ route('category.index') }}" class="btn btn-primary mb-3">Back</a>
    </div>
@endsection
