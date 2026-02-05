@extends('../../master')

@section('contenct')

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.update', $post->id) }}" method="post">

        @method('PUT')

        @include('dashboard.fragment._form')
    </form>
@endsection