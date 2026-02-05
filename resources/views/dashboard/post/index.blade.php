@extends('../../master')

@section('contenct')

    <table>
        <thead>
            <tr>
                Title
            </tr>
            <tr>
                Posted
            </tr>
            <tr>
                Categorie
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        {{ $post->posted }}
                    </td>
                    <td>
                        {{ $post->categorie->title }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection