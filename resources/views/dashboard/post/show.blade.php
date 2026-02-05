@extends('../../master')

@section('contenct')

    @include('dashboard.fragment._errors-form')

    <h1>{{ $post->title }}</h1>
    <h2>{{ $post->slug }}</h2>
    <p>{{ $post->content }}</p>
    <h2>{{ $post->categorie->title }}</h2>
    <p>{{ $post->description }}</p>
    <h4>{{ $post->posted }}</h4>
    <img src="/uploads/posts/{{$post->image}}" style="width:250px" alt="{{$post->title}}">
    {{$post->image}}
@endsection