<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Auth::user()->can('editor.post.index'));
        dd(Auth::user()->hasRole('Editor'));
        $posts = Post::paginate(2);
        // dd($posts);
        return view('dashboard/post/index', compact('posts'));

        // $post = Post::find(1);

        // dd($post->categorie->title);
        // dd($categorie->post);

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
        $post = new Post();
        // dd($categories);
        return view('dashboard.post.create', compact('categories', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        Post::create($request->validated());

        return to_route('post.index');

        //TODO the second method for the validations
        // $validation = Validator::make($request->all(),[
        //     'title' => 'required|min:5|max:500',
        //     'slug' => 'required|min:5|max:500',
        //     'content' => 'required|min:7',
        //     'categorie_id' => 'required|interger',
        //     'description' => 'required|min:7',
        //     'posted' => 'required',
        // ]);

        // dd($validation->fails());

        //TODO the best method whit Request
        // $request->validate([
        //     'title' => 'required|min:5|max:500',
        //     'slug' => 'required|min:5|max:500',
        //     'content' => 'required|min:7',
        //     'categorie_id' => 'required|interger',
        //     'description' => 'required|min:7',
        //     'posted' => 'required',
        // ]);
        // echo 'not';


 
        //is the same thing
        // Post::create($request->all());
        
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
    }
        
        // dd(request()->get('title'));
        // dd($request->all()['title']);
    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $categories = Categorie::pluck('id', 'title');
        return view('dashboard.post.show', compact('categories', 'post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Categorie::pluck('id', 'title');
        return view('dashboard.post.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
        $data = $request->validated();

        if (isset($data['image'])){
            $data['image'] = $filename = time().'.'.$data['image']->extension();
            $request->image->move(public_path('uploads/posts'),$filename);
        }

        $post->update($data);
        return to_route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index');
    }
}
