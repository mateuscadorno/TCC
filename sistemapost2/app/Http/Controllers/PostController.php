<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Posts;
use Redirect;
use App\Http\Requests;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use File;

class PostController extends Controller
{

    public function show(Request $id)
    {
        $post = Posts::find($id);
        return view('post.show-post')->with('post', $post);
    }
            

    public function index(Request $request)
    {
        $posts = Posts::all();
        return view('post.index-post')->with('posts', $posts);
    }

    public function create(Request $request)
    {
        if (Input::file('imagem')) {
            $imagem = Input::file('imagem');
            $extensao = $imagem->getClientOriginalExtension();

            if ($extensao != 'jpg'&& $extensao != 'png') {
                return back()->with('erro', 'Erro: Este Arquivo Não É uma Imagem');
            }
        }

        $post = new Posts;
        $post->titulo = Input::get('titulo');
        $post->conteudo = Input::get('conteudo');
        $path = Storage::disk('public')->putFile('imagem-post', $request->imagem);
        $post->imagem = ( URL::to('/storage') . "/" . $path);
        $post->save();
        
    
        return redirect ('/lista-post');
    }
}
