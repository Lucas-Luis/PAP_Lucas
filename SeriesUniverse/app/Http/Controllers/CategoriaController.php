<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categorias = Categoria::all();
        return view('categorias.list',compact("categorias"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         request()->validate([
           'categoria'  => 'required',
         ]);

         $categoria = new categoria();
         $categoria->genero = request('categoria');
         $categoria->save();
         return redirect('/categorias/list')->with('message','Categoria inserida com sucesso!!');

    }

    /**
     * Display the specified resource.
     */
    public function show(categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categoria $categoria)
    {
        //
        return view('categorias.edit',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categoria $categoria)
    {
        //
        request()->validate([
            'categoria'  => 'required',
          ]);


          $categoria->genero = request('categoria');
          $categoria->save();
          return redirect('/categorias/list')->with('message','Categoria editada com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categoria $categoria)
    {
        //
        $categoria->delete();
        return redirect('/categorias/list')->with('message','Categoria eliminada com sucesso!!');
    }
}
