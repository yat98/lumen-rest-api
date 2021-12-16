<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function index()
	{
		return Post::all();
	}

	public function store(Request $request)
	{
		try {
			$post = Post::create($request->all());

			return response()->json(['status' => 'success', 'message' => 'Post ' . $post->title . ' created successfully']);
		} catch (Exception $e) {
			return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
		}
	}

	public function update(Request $request, $id)
	{
		try {
			$post = Post::findOrfail($id);
			$post->update($request->all());

			return response()->json(['status' => 'success', 'message' => 'Post ' . $post->title . ' updated successfully']);
		} catch (Exception $e) {
			return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
		}
	}
}
