<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class CrudController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')-> except(['index']);
    }
// =============================== CMS CRUD ==========================
    public function index()
    {
        $content = Content::get();
        return view('index')->with('content', $content);;
    }

    public function view_all()
    {
        $content = Content::get();
        return view('/view_all')->with('content', $content);
    }

    public function view_content($id)
    {
        $content = Content::where('id', $id)->get();
        return view('view_content')->with('content', $content);
    }
    public function edit_content($id)
    {
        $content = Content::where('id', $id)->get();
        return view('edit_content', compact('content'));
    }
    public function save_content($id){
        $content = $_POST['content1'];
        $dw = $_POST['dw'];
        $dh = $_POST['dh'];
        //if $content is not empty update DB

        if($content){
            //Update Post
            $post = Content::find($id);
            $post->user_id = auth()->user()->id;
            $post->content = $content;
            $post->divsize = $dw;
            $post->divheight = $dh;
            $post->updated_at = time();
            $post->save();
        }
    }
    public function content_create()
    {
        return view('content_create');
    }
    public function create_content(){

            //Update Post
            $post = New Content;
            $post->user_id = auth()->user()->id;
            $post->content = 'This is example content - Choose edit to change it';
            $post->divsize = '12';
            $post->divheight = '200';
            $post->created_at = time();
            $post->updated_at = time();
            $post->save();

            return redirect('/view_all');
    }

}
