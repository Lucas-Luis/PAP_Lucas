<?php

namespace App\Http\Controllers;

use App\Models\plataforma;
use Illuminate\Http\Request;

class PlataformaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $plataformas = Plataforma::all();
        return view('plataformas.list',compact("plataformas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('plataformas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'plataforma'  => 'required',
          ]);

          $plataforma = new plataforma();
          $plataforma->nome = request('plataforma');
          $plataforma->save();
          return redirect('/plataformas/list')->with('message','Plataforma inserida com sucesso!!');

    }

    /**
     * Display the specified resource.
     */
    public function show(plataforma $plataforma)
    {
        //
        return view('plataformas',compact('plataforma'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(plataforma $plataforma)
    {
        //
        return view('show.edit',compact("plataforma"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, plataforma $plataforma)
    {
        //
         request()->validate([
            'plataforma'  => 'required',
          ]);


          $plataforma->nome = request('plataforma');
          $plataforma->save();
          return redirect('/plataformas/list')->with('message','Plataforma editada com sucesso!!');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(plataforma $plataforma)
    {
        //
        $plataforma->delete();
        return redirect('/plataformas/list')->with('message','plataformas eliminada com sucesso!!');
    }
}
