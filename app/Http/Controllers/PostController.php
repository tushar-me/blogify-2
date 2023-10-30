<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show the form to create a new blog post.
    public function create ()
    {
        return view('pages.post.create');
    }
    public function edit ($id)
    {
        $post = Post::where('id', $id)->first();
        return view('pages.post.edit', ['post' => $post]);
    }
    public function allPost ()
    {
        $posts = Post::where('status', 1)->orderBy("created_at","desc")->get();
        return view('pages.post.all-post', compact('posts'));
    }
    public function singlePost ($id)
    {
        $comments = Comment::get();
        $post = Post::where('id', $id)->first();
        return view('pages.post.single-post', ['post' => $post, 'comments' => $comments]);
    }



    // Store a new blog post.
    public function store (Request $request)
    {
        $request->validate([
            'post_title' => 'required',
            'post_desc' => 'required',
            'post_thumbnail' => 'required|mimes:png,jpg,jpeg'
        ]);

        $imageName = time() . '.' . $request->file('post_thumbnail')->extension();
        $request->file('post_thumbnail')->move(public_path('uploads'), $imageName);

        $post = new Post;
        $post->post_thumbnail = $imageName;
        $post->post_title = $request->post_title;
        $post->post_desc  = $request->post_desc;
        $post->post_tags  = $request->post_tags;

        $post->save();

        return response()->json(['message' => 'A new post has been added to your profile']);
    }

    // Update blog post
    public function update(Request $request, $id)
    {
        $request->validate([
            'post_title' => 'required',
            'post_desc' => 'required',
            'post_thumbnail' => 'required|mimes:png,jpg,jpeg'
        ]);

        $post = Post::where('id', $id)->first();

        $imageName = time() . '.' . $request->file('post_thumbnail')->extension();
        $request->file('post_thumbnail')->move(public_path('uploads'), $imageName);

        $post->post_thumbnail = $imageName;
        $post->post_title = $request->post_title;
        $post->post_desc  = $request->post_desc;
        $post->post_tags  = $request->post_tags;

        $post->save();

        return response()->json(['message' => 'Post Updated !!!']);
    }

    // Delete
    public function destroy($id){
        $post = Post::where('id',$id)->first();
        $post->delete();
        return redirect()->route('user.profile');
    }



    public function like(Request $request)
    {
        $postId = $request->input('post_id');
        $isLiked = $request->input('is_liked');
        $userId = Auth::user()->id;

        $like = Like::where('post_id', $postId)
                    ->where('user_id', $userId)
                    ->first();

        if ($isLiked) {
            if (!$like) {
                Like::create([
                    'user_id' => $userId,
                    'post_id' => $postId,
                ]);
            }
        } else {
            if ($like) {
                $like->delete();
            }
        }

        return response()->json(['message' => 'Like status updated successfully']);
    }

    // Comment Store
    public function commentStore (Request $request)
    {
        $comment = new Comment;

        $comment->comment_text = $request->comment_text;
        $comment->save();
    }
}