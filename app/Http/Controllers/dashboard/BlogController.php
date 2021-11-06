<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /*private $blog;

    public function __construct(Blog $blog){
        $this->blog = $blog;
    }*/

    public function index()
    {
        $user = ["name" => "DennyLson", "apelido" => "Sebastian", "email" => "admin@admin.com"];
        $blogs = DB::table('blogs')
            ->orderBy('id', 'desc')
            ->get();

        return view("dashboard.blog", compact('user', 'blogs'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request, Blog $blog)
    {
        $formBlog = $request->all();

        /*if ($request->file('foto')->isValid()) {

            $foto = $request->file('foto')->store('noticia');
            $formNoticia['foto'] = $foto;
        }*/

        $blog = $blog->create($formBlog);
        if ($blog) {
            return redirect()->route('blog.index')->withErrors(['Noticia Cadastrada com sucesso!']);
        }
        return "Falha ao cadastrar!";
    }

    
    public function show(Blog $blog)
    {
        $user = ["name" => "DennyLson", "apelido" => "Sebastian", "email" => "admin@admin.com"];
        return view("dashboard.blogShow", compact('user', 'blog'));
    }

    
    public function edit(Blog $blog)
    {
        //$user = Auth::user()->getOriginal();
        $user = ["name" => "DennyLson", "apelido" => "Sebastian", "email" => "admin@admin.com"];
        return view("dashboard.blogEdit", compact('user', 'blog'));
    }

    
    public function update(Request $request, Blog $blog)
    {
        $newBlog = $request->all();
        
        if (isset($newBlog['foto'])) {
            //"Recebi tambm junto a uma foto"
            if ($request->file('foto')->isValid()) {

                $picture = $request->file('foto')->store('blog');

                if ($newBlog['foto'] = $picture) {

                    $update = $blog->update($newBlog);
                    if ($update) {
                        return redirect()->route('blog.index')->withErrors(['Noticia atualizada com sucesso!']);
                    }else{
                        return redirect()->back()->withInput()->withErrors(['Opss falha na atualizacao tenta novamente mais tarde!!!']);
                    }
                }else{
                    return redirect()->back()->withInput()->withErrors(['Falha ao carregar a imagem!']);
                }
            }else{
                return redirect()->back()->withInput()->withErrors(['Imagem invalida ou corrompida!!!']);
                
            }
            
        }else{
            $newBlog['foto'] = $blog->foto;
            $update = $blog->update($newBlog);
            if ($update) {
                return redirect()->route('blog.index')->withErrors(['Noticia atualizada com sucesso!']);
            }else{
                return redirect()->back()->withInput()->withErrors(['Opss falha na atualizacao tenta novamente mais tarde!!!']);
            }
            
        }
    }

    
    public function destroy(Blog $blog)
    {
        $delete = $blog->destroy([
            $blog['id']
        ]);

        if ($delete) {
            return redirect()->route('blog.index')->withErrors(['Noticia eliminada com sucesso!!!']);
        }else{
            return redirect()->back()->withErrors(['Falha ao deletar noticia tenta novamente mais tarde!!!']);
        }
    }
}
