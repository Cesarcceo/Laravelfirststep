@extends('../../master')

@section('contenct')
    <form action="" method="post">

        <label for="">Title</label>
        <input type="text" name="title">

        <label for="">Slug</label>
        <input type="text" name="slug">

        <label for="">Content</label>
        <textarea name="content" id=""></textarea>
        
        <label for="">Categorie</label>
        <select name="categorie_id" id="">
            @foreach($categories as $title => $id)
                <option value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>
        
        <label for="">Description</label>
        <textarea name="description" id=""></textarea>

        <label for="">Posted</label>
        <select name="posted" id="">
            <option value="not">Not</option>
            <option value="yes">Yes</option>
        </select>
        
        <button type=submit >send</button>
    </form>
@endsection