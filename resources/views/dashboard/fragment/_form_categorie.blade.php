@csrf

        <label for="">Title</label>
        <input type="text" name="title" value="{{ old('title',$categorie->title) }}">

        <label for="">Slug</label>
        <input type="text" name="slug" value="{{ old('slug',$categorie->slug) }}">

        <button type=submit >send</button>