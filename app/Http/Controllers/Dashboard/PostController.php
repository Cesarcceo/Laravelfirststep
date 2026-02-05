<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Http\Request;

use function Pest\Laravel\delete;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorie = Categorie::find(1);
        // $post = Post::find(1);

        // dd($post->categorie->title);
        dd($categorie->post);

        // return response()->json([
        //     'name' => 'my name',
        //     'state' => 'Cesario'
        //     ]);
    }

    //TODO For delete
        // $post->delete();
    //TODO For update
        // $post->update([
        //     'title' => 'test title updated',
        //     'slug' => 'test slug updated',
        //     'content' => 'test content updated',
        //     'image' => 'test image updated',
        // ]);
    //TODO For create
        // Post::create([
        //     'title' => 'test title',
        //     'slug' => 'test slug',
        //     'content' => 'test content',
        //     'categorie_id' => 1,
        //     'description' => 'test description',
        //     'posted' => 'not',
        //     'image' => 'test image',
        // ]);
        
        /**
         * Show the form for creating a new resource.
        */
    public function create()
    {
        $categories = Categorie::pluck('id', 'title');
        // dd($categories);
        return view('dashboard.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|min:5|max:500',
            'slug' => 'required|min:5|max:500',
            'content' => 'required|min:7',
            'categorie_id' => 'required|interger',
            'description' => 'required|min:7',
            'posted' => 'required',
        ]);

        echo 'not';

        //is the same thing
        Post::create($request->all());

        // Post::create([
        //     'title' => $request->all()['title'],
        //     'slug' => $request->all()['slug'],
        //     'content' => $request->all()['content'],
        //     'categorie_id' => $request->all()['categorie_id'],
        //     'description' => $request->all()['description'],
        //     'posted' => $request->all()['posted'],
        //     // 'image' => $request->all()['image'],
        // ]);

        // dd($request->all());

        return to_route('post.index');
    }
        
        // dd(request()->get('title'));
        // dd($request->all()['title']);
    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
