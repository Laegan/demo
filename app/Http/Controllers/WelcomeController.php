<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePostRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Post;
use Illuminate\Support\Facades\Input;

class WelcomeController extends Controller
{
    public function create(UpdatePostRequest $request)
    {
        Post::create(['title' => $request->title, 'body' => $request->body, 'start_at' => (new \DateTime($request->date))]);
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }

    public function destroy($id) {
        $post = Post::find($id);
        $post->delete();
        return redirect('/');
    }

    public function editPage($id){
        $post = Post::find($id);
        return view('pages.edit', compact('post'));
//        return redirect('/'.$id);
    }

    public function update(Request $request){
        $newPost = Post::find($request->id);
        if (empty($newPost)) {
            Flash::error('Courses City not found');
            return redirect('/');;
        }
        $newPost->start_at = Carbon::parse($request->start_at);
        $newPost->body = $request->body;
        $newPost->title = $request->title;
        $newPost->save();
        return redirect('/');;
    }

    public function post(){

    }
}
