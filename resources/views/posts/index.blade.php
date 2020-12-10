@extends('layouts.app')
@section('content')
    @if (count($posts))
        @foreach ($posts as $index => $post)
        <div>
            {{ $post['id'] }}: {{ $post['title'] }} ({{ $index }})
        </div>
        @endforeach
    @else
        There are no posts
    @endif
@endsection
