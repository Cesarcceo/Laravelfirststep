@extends('../../master')

@section('contenct')

    @include('dashboard.fragment._errors-form')

    <h1>{{ $categorie->title }}</h1>
    <h2>{{ $categorie->slug }}</h2>
@endsection