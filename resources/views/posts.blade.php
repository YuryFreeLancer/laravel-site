@extends('layouts.main')
@section('content')
	<div>
        <div>This is posts page</div>
        @foreach($posts as $post)
            <div>{{$post->title}}</div>
        @endforeach
    </div>
@endsection
