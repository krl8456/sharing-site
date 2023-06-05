<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    protected $connection = 'mongodb';

    public function index()
    {
        return Post::all();
    }
    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required',
            'body' => 'required',
            'category' => 'required'
        ]);
        return Post::create($request->all());
    }
    public function show(string $id)
    {
        return Post::find($id);
    }
    public function update(Request $request, string $id)
    {

        $product = Post::find($id);
        $product->update($request->all());
        return $product;
    }
    public function destroy(string $id)
    {
        return Post::destroy($id);
    }
}
