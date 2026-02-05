@extends('../../master')

@section('contenct')

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.store') }}" method="post">

        @include('dashboard.fragment._form')
    </form>
@endsection