<?php
namespace App\Http\Controllers;

use App\Post; // use post method from post.php
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function getDashboard()
	{
		$posts  = Post::all(); //Fetch all post | built queries
		return view('admin/dashboard', ['posts' => $posts]); //specify variable in the array to pass
	}
	public function postCreatePost(Request $request)
	{
			//Validation
			$this->validate($request, [
				'body' => 'required|max:1000'
			]);
			//Create post
			$post = new Post();
			$post->body = $request['body'];
			$message = 'There was an error';
			if($request->user()->posts()->save($post)){
				$message = 'Post success created';
			};
			return redirect()->route('dashboard')->with(['message' => $message]);
	}
	public function getDeletePost($post_id)
	{
			$post = Post::where('id', $post_id)->first();
			$post->delete();
			return redirect()->route('dashboard')->with(['message' => 'Successfully deleted']);
	}
}
