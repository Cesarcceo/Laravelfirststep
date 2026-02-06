@extends('../../master')

@section('contenct')

    <a href="{{ route('categorie.create') }}" target="blank">Create</a>

    <table>
        <thead>
            <tr>
                <td>
                    Title
                </td>
                <td>
                    Options
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $categorie)
                <tr>
                    <td>
                        {{ $categorie->title }}
                    </td>
                    <td>
                        <a href="{{ route('categorie.edit', $categorie->id) }}">Edit</a>
                        <a href="{{ route('categorie.show', $categorie->id) }}">Show</a>
                        <form action="{{ route('categorie.destroy', $categorie) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}
@endsection