@extends('../../master')

@section('contenct')

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('categorie.update', $categorie->id) }}" method="post">

        @method('PUT')

        @include('dashboard.fragment._form_categorie')
    </form>
@endsection