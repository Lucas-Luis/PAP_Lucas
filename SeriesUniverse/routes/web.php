<?php

use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/ ', function () {
    $plataformas = DB::table('plataformas')
      ->select('plataformas.*')
      ->get();

    $categorias = DB::table('categorias')
      ->select('categorias.*')
      ->get();

    $filmes = DB::table('filmes')
      ->select('filmes.*')
      ->leftJoin('plataformas','plataforma_id','=','plataformas.id')
      ->leftJoin('categorias','categoria_id','=','categorias.id')
      ->get();

    $featuredMovies = DB::table('filmes')
      ->select('filmes.*')
      ->where('destaque','=',1)
      ->get();

    $series = DB::table('series')
      ->select('series.*')
      ->leftJoin('plataformas','plataforma_id','=','plataformas.id')
      ->leftJoin('categorias','categoria_id','=','categorias.id')
      ->get();

    return view('welcome', compact('plataformas','categorias','filmes','series','featuredMovies'));
});

Route::get('plataformas', function () {
    $plataformas = DB::table('plataformas')
      ->select('plataformas.*')
      ->get();

    $categorias = DB::table('categorias')
      ->select('categorias.*')
      ->get();

    $filmes = DB::table('filmes')
      ->select('filmes.*')
      ->leftJoin('plataformas','plataforma_id','=','plataformas.id')
      ->leftJoin('categorias','categoria_id','=','categorias.id')
      ->get();

    $series = DB::table('series')
      ->select('series.*')
      ->leftJoin('plataformas','plataforma_id','=','plataformas.id')
      ->leftJoin('categorias','categoria_id','=','categorias.id')
      ->get();

    return view('plataformas', compact('plataformas','categorias','filmes','series'));
});

Route::get('nomeFilme ', function () {
    $plataformas = DB::table('plataformas')
      ->select('plataformas.*')
      ->get();

    $categorias = DB::table('categorias')
      ->select('categorias.*')
      ->get();

    $filmes = DB::table('filmes')
      ->select('filmes.*')
      ->leftJoin('plataformas','plataforma_id','=','plataformas.id')
      ->leftJoin('categorias','categoria_id','=','categorias.id')
      ->orderBy('titulo','asc')
      ->get();

    $series = DB::table('series')
      ->select('series.*')
      ->leftJoin('plataformas','plataforma_id','=','plataformas.id')
      ->leftJoin('categorias','categoria_id','=','categorias.id')
      ->get();

    return view('nomeFilme', compact('plataformas','categorias','filmes','series'));
});

Route::get('dataFilme ', function () {
    $plataformas = DB::table('plataformas')
      ->select('plataformas.*')
      ->get();

    $categorias = DB::table('categorias')
      ->select('categorias.*')
      ->get();

    $filmes = DB::table('filmes')
      ->select('filmes.*')
      ->leftJoin('plataformas','plataforma_id','=','plataformas.id')
      ->leftJoin('categorias','categoria_id','=','categorias.id')
      ->orderBy('ano_lancamento','asc')
      ->get();

    $series = DB::table('series')
      ->select('series.*')
      ->leftJoin('plataformas','plataforma_id','=','plataformas.id')
      ->leftJoin('categorias','categoria_id','=','categorias.id')
      ->get();

    return view('dataFilme', compact('plataformas','categorias','filmes','series'));
});

Route::get('avaliacaoFilme', function () {
    $plataformas = DB::table('plataformas')
      ->select('plataformas.*')
      ->get();

    $categorias = DB::table('categorias')
      ->select('categorias.*')
      ->get();

    $filmes = DB::table('filmes')
      ->select('filmes.*')
      ->leftJoin('plataformas','plataforma_id','=','plataformas.id')
      ->leftJoin('categorias','categoria_id','=','categorias.id')
      ->orderBy('avaliacao','desc')
      ->get();

    $series = DB::table('series')
      ->select('series.*')
      ->leftJoin('plataformas','plataforma_id','=','plataformas.id')
      ->leftJoin('categorias','categoria_id','=','categorias.id')
      ->get();

    return view('avaliacaoFilme', compact('plataformas','categorias','filmes','series'));
});

Route::get('nomeSerie ', function () {
    $plataformas = DB::table('plataformas')
      ->select('plataformas.*')
      ->get();

    $categorias = DB::table('categorias')
      ->select('categorias.*')
      ->get();

    $filmes = DB::table('filmes')
      ->select('filmes.*')
      ->leftJoin('plataformas','plataforma_id','=','plataformas.id')
      ->leftJoin('categorias','categoria_id','=','categorias.id')

      ->get();

    $series = DB::table('series')
      ->select('series.*')
      ->leftJoin('plataformas','plataforma_id','=','plataformas.id')
      ->leftJoin('categorias','categoria_id','=','categorias.id')
      ->orderBy('titulo','asc')
      ->get();

    return view('nomeSerie', compact('plataformas','categorias','filmes','series'));
});

Route::get('dataSerie ', function () {
    $plataformas = DB::table('plataformas')
      ->select('plataformas.*')
      ->get();

    $categorias = DB::table('categorias')
      ->select('categorias.*')
      ->get();

    $filmes = DB::table('filmes')
      ->select('filmes.*')
      ->leftJoin('plataformas','plataforma_id','=','plataformas.id')
      ->leftJoin('categorias','categoria_id','=','categorias.id')
      ->get();

    $series = DB::table('series')
      ->select('series.*')
      ->leftJoin('plataformas','plataforma_id','=','plataformas.id')
      ->leftJoin('categorias','categoria_id','=','categorias.id')
      ->orderBy('ano_lancamento','asc')
      ->get();

    return view('dataSerie', compact('plataformas','categorias','filmes','series'));
});

Route::get('avaliacaoSerie', function () {
    $plataformas = DB::table('plataformas')
      ->select('plataformas.*')
      ->get();

    $categorias = DB::table('categorias')
      ->select('categorias.*')
      ->get();

    $filmes = DB::table('filmes')
      ->select('filmes.*')
      ->leftJoin('plataformas','plataforma_id','=','plataformas.id')
      ->leftJoin('categorias','categoria_id','=','categorias.id')
      ->get();

    $series = DB::table('series')
      ->select('series.*')
      ->leftJoin('plataformas','plataforma_id','=','plataformas.id')
      ->leftJoin('categorias','categoria_id','=','categorias.id')
       ->orderBy('avaliacao','desc')
      ->get();

    return view('avaliacaoSerie', compact('plataformas','categorias','filmes','series'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/series/create', [App\Http\Controllers\SerieController::class, 'create'])->name('series.create');
Route::get('/series/list', [App\Http\Controllers\SerieController::class, 'index'])->name('series.list');
Route::get('/series/{serie}/edit', [App\Http\Controllers\SerieController::class, 'edit'])->name('series.edit');
Route::post('/series',[App\Http\Controllers\SerieController::class, 'store']);
Route::put('/series/{serie}', [App\Http\Controllers\SerieController::class, 'update']);
Route::delete('/series/{serie}', [App\Http\Controllers\SerieController::class, 'destroy']);
Route::get('/series/{serie}/show',[App\Http\Controllers\SerieController::class, 'show']);

Route::get('/Filmes/create', [App\Http\Controllers\FilmeController::class, 'create'])->name('Filmes.create')->middleware('auth');
Route::get('/Filmes/list', [App\Http\Controllers\FilmeController::class, 'index'])->name('Filmes.list');
Route::get('/Filmes/{filme}/edit', [App\Http\Controllers\FilmeController::class, 'edit'])->name('Filmes.edit');
Route::post('/Filmes',[App\Http\Controllers\FilmeController::class, 'store']);
Route::put('/Filmes/{filme}', [App\Http\Controllers\FilmeController::class, 'update']);
Route::delete('/Filmes/{filme}', [App\Http\Controllers\FilmeController::class, 'destroy']);
Route::get('/Filmes/{filme}/show',[App\Http\Controllers\FilmeController::class, 'show']);

Route::get('/categorias/create', [App\Http\Controllers\CategoriaController::class, 'create'])->name('categorias.create');
Route::get('/categorias/list', [App\Http\Controllers\CategoriaController::class, 'index'])->name('categorias.list');
Route::get('/categorias/{categoria}/edit', [App\Http\Controllers\CategoriaController::class, 'edit']);
Route::post('/categorias',[App\Http\Controllers\CategoriaController::class, 'store']);
Route::put('/categorias/{categoria}', [App\Http\Controllers\CategoriaController::class, 'update']);
Route::delete('/categorias/{categoria}', [App\Http\Controllers\CategoriaController::class, 'destroy']);

Route::get('/plataformas/create', [App\Http\Controllers\PlataformaController::class, 'create'])->name('plataformas.create');
Route::get('/plataformas/list', [App\Http\Controllers\PlataformaController::class, 'index'])->name('plataformas.list');
Route::get('/plataformas/{plataforma}/edit', [App\Http\Controllers\PlataformaController::class, 'edit'])->name('plataformas.edit');
Route::post('/plataformas',[App\Http\Controllers\PlataformaController::class, 'store']);
Route::put('/plataformas/{plataforma}', [App\Http\Controllers\PlataformaController::class, 'update']);
Route::delete('/plataformas/{plataforma}', [App\Http\Controllers\PlataformaController::class, 'destroy']);
