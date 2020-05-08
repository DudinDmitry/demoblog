<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function getAll($param = 'date', $sort = 'desc')
    {

        $posts = Post::orderBy($param, $sort)->get();

        return view('test.test', [
            'posts' => $posts,
        ]);
    }

    public function getOne($id)
    {
        $error = Post::findOrFail($id);

        $post = Post::find($id);
        return view('post.showOne', [
            'post' => $post
        ]);
    }

    public function newPost(Request $request)
    {
        if ($request->has('text')) {
            $post = new Post;
            $post->name = $request->text;
            $post->save();
            echo 'Успешно добавлено';
        } else
            return view('post.newPost');
    }

    public function editPost(Request $request, $id)
    {
        $post = Post::find($id);
        if ($request->has('submit')) {
            $post->title = $request->title;
            $post->description = $request->description;
            $post->date = $request->date;
            $post->text = $request->text;

            $post->save();
            Session::flash('status', 'Обновление статьи "' . $request->title . '" с ID:' .
                $request->id . ' прошло успешно');
            return redirect('/post/all');
        }
        return view('post.editPost', [
            'post' => $post
        ]);
    }

    public function editMass(Request $request)
    {
        $posts = Post::find([5, 6]);
        if ($request->has('submit5')) {
            Post::firstOneCreate(['title'=>$request->title5]);
            echo $request->title5;
        }
        return view('post.editMass', [
            'posts' => $posts
        ]);
    }
    public function delPost($id)
    {
        $post=Post::find($id);
        $post->delete();
        Session::flash('status', 'Статья "' . $post->title . '" с ID:' .
            $post->id . ' удалена');
        return redirect('/post/all');
    }
}