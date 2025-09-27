<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class MainController extends Controller
{
    public function index(){
        $posts = Post::with('user')->get();
        return view('dashboard' , ['posts' => $posts]);
    }

    public function createPost(){
        //gate for post create
        if(Gate::denies('post.create')){
            abort(403,'Você nao tem permissao para criar post');
        } 

        return view('create-post');
        }

    
    public function postStore(Request $request){
        //gate for post create
        if(Gate::denies('post.create')){
            abort(403,' Você nao tem permissao para criar post');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ],
        [
            'title.required' => 'O campo título é obrigatório.',
            'title.string' => 'O campo título deve ser uma string.',
            'title.max' => 'O campo título não pode exceder 255 caracteres.',
            'content.required' => 'O campo conteúdo é obrigatório.',
        ]);

        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content'); 

        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect()->route('dashboard');
    
    }
        
        public function deletePost($id){
        //gate for post delete
        $post = Post::find($id);
        if(Gate::denies('post.delete', $post)){
            abort(403,'Você nao tem permissao para deletar post');
        }
        $post->delete();

        return redirect()->route('dashboard');
            
    }
}
