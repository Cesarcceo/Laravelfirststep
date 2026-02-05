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
                        <form action="{{ route('post.destroy', $post) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
@endsection