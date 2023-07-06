<?php

namespace App\Http\Controllers;
use App\Models\categoria;
use App\Models\plataforma;
use App\Models\serie;
use Illuminate\support\Facades\Auth;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $series = Serie::all();
        return view('series.list',compact("series"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categorias = Categoria::all();
        $plataformas = plataforma::all();
        return view('series.create',compact("categorias","plataformas"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'titulo'=>'required',
            'temporadas'=>'required',
            'categoria'=>'required',
            'plataforma'=>'required',
            'resumo'=>'required',
            'datalancamento'=>'required',
            'realizador'=>'required',
            'elenco'=>'required',
            'avaliacao'=>'required',
        ]);

        $serie= new serie();
        $serie->titulo= request('titulo');
        $serie->temporadas= request('temporadas');
        $serie->categoria_id= request('categoria');
        $serie->plataforma_id= request('plataforma');
        $serie->descricao= request('resumo');
        $serie->ano_lancamento= request('datalancamento');
        $serie->realizador= request('realizador');
        $serie->elenco= request('elenco');
        if ($request->hasFile('imagem')) {
            $file = $request->file('imagem');
            $originalName = $file->getClientOriginalName();
            $extension = pathinfo($originalName, PATHINFO_EXTENSION);
            $designacao = preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $serie->titulo);
            $designacao = str_replace(' ', '', $designacao);
            $name = $designacao . "." . $extension;
            $serie->imagem = $name;
        }
        $serie->trailer= request('triler');
        $serie->avaliacao= request('avaliacao');
        $serie->user_id = Auth::user()->id;
        $file->storeAs('/public/images/articles',$name);
        $serie->save();
        return redirect('/series/list')->with('messege','Serie inserida com sucesso!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(serie $serie)
    {
        //
        return view('series.show',compact('serie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(serie $serie)
    {
        //
        $categorias = Categoria::all();
        $plataformas = plataforma::all();
        return view('series.edit',compact("categorias","plataformas","serie"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, serie $serie)
    {
        //
        request()->validate([
            'titulo'=>'required',
            'temporadas'=>'required',
            'categoria'=>'required',
            'plataforma'=>'required',
            'resumo'=>'required',
            'datalancamento'=>'required',
            'realizador'=>'required',
            'elenco'=>'required',
            'avaliacao'=>'required',
        ]);

        $serie->titulo= request('titulo');
        $serie->temporadas= request('temporadas');
        $serie->categoria_id= request('categoria');
        $serie->plataforma_id= request('plataforma');
        $serie->descricao= request('resumo');
        $serie->ano_lancamento= request('datalancamento');
        $serie->realizador= request('realizador');
        $serie->elenco= request('elenco');
        if ($request->hasFile('imagem')) {
            $file = $request->file('imagem');
            $originalName = $file->getClientOriginalName();
            $extension = pathinfo($originalName, PATHINFO_EXTENSION);
            $designacao = preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $serie->titulo);
            $designacao = str_replace(' ', '', $designacao);
            $name = $designacao . "." . $extension;
            $serie->imagem = $name;
        }

        $serie->trailer= request('triler');
        $serie->avaliacao= request('avaliacao');
        $serie->user_id = Auth::user()->id;
        $file->storeAs('/public/images/articles',$name);
        $serie->save();

        return redirect('/series/list')->with('messege','Serie atualizada com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(serie $serie)
    {
        //
        $serie->delete();
        return redirect('/series/list')->with('message','Serie eliminada com sucesso!!');
    }
}