@extends('../../master')

@section('contenct')

    <a href="{{ route('post.create') }}" target="blank">Create</a>

    <table>
        <thead>
            <tr>
                <td>
                    Title
                </td>
                <td>
                    Posted
                </td>
                <td>
                    Categorie
                </td>
                <td>
                    Options
                </td>
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
                    <td>
                        <a href="{{ route('post.edit', $post->id) }}">Edit</a>
                        <a href="{{ route('post.show', $post->id) }}">Show</a>
                        <a href="{{ route('post.destroy', $post->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
@endsection