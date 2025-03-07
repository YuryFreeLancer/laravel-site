@extends('layouts.main')
@section('content')
    <div>
        <form action="{{  route('category.store') }}" method="post" class=" mb-3">
            @csrf
            <div class="form-group mb-3">
                <label for="title">Наименование категории</label>
                <input type="text" name="title" value="{{ $category->title ?? '' }}" class="form-control" id="title" placeholder="Наименование категории">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="category">Родительская категория</label>
                <select class="form-control" id="category" name="parent_id">
                    <option value="0">-- без родительской категории</option>
                    @include('category._categories')
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Cохранить</button>
        </form>
        <a href="{{ route('post.index') }}" class="btn btn-primary mb-3">Back</a>
    </div>
@endsection

