@extends('../../master')

@section('contenct')

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('categorie.store') }}" method="post">

        @include('dashboard.fragment._form_categorie')
    </form>
@endsection