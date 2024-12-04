<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    //validate post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'post' => 'required|string',
        ]);
        //create post
        Posts::Create([
            'title' => $request->title,
            'date' => $request->date,
            'post' => $request->post,
        ]);
        return redirect()->back()->with('Success', 'post created successfully');
    }

    public function index()
    {
        $posts = Posts::all();
        return view('posts', compact('posts'));
    }

    public function delete($id)
    {
        $posts = Posts::findorFail($id);
        $posts->delete();

        return redirect()->back()->with('success', 'post deleted');
    }

    public function updatePost(Request $request, $id)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'date' => 'required|date',
        'post' => 'required|string',
    ]);

    $post = Posts::findOrFail($id);
    $post->update($validatedData);

    return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
}

}
