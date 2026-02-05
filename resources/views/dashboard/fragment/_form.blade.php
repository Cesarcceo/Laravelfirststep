@csrf

        <label for="">Title</label>
        <input type="text" name="title" value="{{ $post->title }}">

        <label for="">Slug</label>
        <input type="text" name="slug" value="{{ $post->slug }}">

        <label for="">Content</label>
        <textarea name="content">{{ $post->content }}</textarea>
        
        <label for="">Categorie</label>
        <select name="categorie_id" id="">
            @foreach($categories as $title => $id)
                <option {{ $post->categorie_id == $id ? 'selected' : '' }} value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>
        
        <label for="">Description</label>
        <textarea name="description">{{ $post->description }}</textarea>

        <label for="">Posted</label>
        <select name="posted" id="">
            <option {{ $post->posted == 'not' ? 'selected' : '' }} value="not">Not</option>
            <option {{ $post->posted == 'yes' ? 'selected' : '' }} value="yes">Yes</option>
        </select>
        
        <button type=submit >send</button>