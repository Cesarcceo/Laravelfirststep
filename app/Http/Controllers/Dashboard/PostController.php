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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

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
