<?php

namespace App\Http\Controllers;
use App\Models\categoria;
use App\Models\plataforma;
use App\Models\filme;
use Illuminate\support\Facades\Auth;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $filmes = Filme::all();
        return view('Filmes.list',compact("filmes"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categorias = Categoria::all();
        $plataformas= plataforma::all();
        return view('Filmes.create',compact("categorias","plataformas"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         request()->validate([
            'titulo'=>'required',
            'categoria'=>'required',
            'plataforma'=>'required',
            'resumo'=>'required',
            'datalancamento'=>'required',
            'duracao'=>'required',
            'realizador'=>'required',
            'elenco'=>'required',
            'avaliacao'=>'required',
        ]);

        $filme= new filme();
        $filme->titulo= request('titulo');
        $filme->categoria_id= request('categoria');
        $filme->plataforma_id= request('plataforma');
        $filme->descricao= request('resumo');
        $filme->ano_lancamento= request('datalancamento');
        $filme->duracao= request('duracao');
        $filme->realizador= request('realizador');
        $filme->elenco= request('elenco');
        if ($request->hasFile('imagem')) {
            $file = $request->file('imagem');
            $originalName = $file->getClientOriginalName();
            $extension = pathinfo($originalName, PATHINFO_EXTENSION);
            $designacao = preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $filme->titulo);
            $designacao = str_replace(' ', '', $designacao);
            $name = $designacao . "." . $extension;
            $filme->imagem = $name;
        }
        $filme->trailer= request('triler');
        $filme->avaliacao= request('avaliacao');
        $filme->destaque=  $request->has('destaque');
        $filme->user_id = Auth::user()->id;
        $file->storeAs('/images/articles', $name);
        $filme->save();
        return redirect('/Filmes/list')->with('messege','Filme inserido com sucesso!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(filme $filme)
    {
        //
        return view('Filmes.show',compact('filme'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(filme $filme)
    {
        //
        $categorias = Categoria::all();
        $plataformas = plataforma::all();
        return view('Filmes.edit',compact("filme","categorias","plataformas"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, filme $filme)
    {
        //
        request()->validate([
            'titulo'=>'required',
            'categoria'=>'required',
            'plataforma'=>'required',
            'resumo'=>'required',
            'datalancamento'=>'required',
            'duracao'=>'required',
            'realizador'=>'required',
            'elenco'=>'required',
            'avaliacao'=>'required',
            'destaque'=>'required',
        ]);

        $filme->titulo= request('titulo');
        $filme->categoria_id= request('categoria');
        $filme->plataforma_id= request('plataforma');
        $filme->descricao= request('resumo');
        $filme->ano_lancamento= request('datalancamento');
        $filme->duracao= request('duracao');
        $filme->realizador= request('realizador');
        $filme->elenco= request('elenco');
        if ($request->hasFile('imagem')) {
            $file = $request->file('imagem');
            $originalName = $file->getClientOriginalName();
            $extension = pathinfo($originalName, PATHINFO_EXTENSION);
            $designacao = preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $filme->titulo);
            $designacao = str_replace(' ', '', $designacao);
            $name = $designacao . "." . $extension;
            $filme->imagem = $name;
        }
        $filme->trailer= request('triler');
        $filme->avaliacao= request('avaliacao');
        $filme->destaque = $request->has('destaque');
        $file->storeAs('/images/articles', $name);
        $filme->save();
        return redirect('/Filmes/list')->with('messege','Filme inserido com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(filme $filme)
    {
        //
        $filme->delete();
        return redirect('/Filmes/list')->with('message','Filme eliminado com sucesso!!');
    }
}
