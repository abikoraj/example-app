@extends('layouts.app')
@section('content')
    <div>
    <form action="{{ route('posts.store')}}" method="POST">
            @csrf
            <div>
            <input type="text" name="title" id="title" autocomplete="off" value="{{ old('title') }}">
            @error('title')
            <div>{{$message}}</div>
            @enderror
            </div>
            <div>
                <textarea name="body" id="body" autocomplete="off">{{ old('body') }}</textarea>
                @error('body')
                <div>{{$message}}</div>
                @enderror
                </div>
            <button type="submit">Post</button>
        </form>
    </div>
@endsection
