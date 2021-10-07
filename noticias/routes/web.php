<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;
use App\Models\Noticias;


// painel do adm
Route::get('/adm' ,function () {
    return view('admindex');
});

//login
Route::get('/', function () {
    return view('login');
});

//inserir noticia
Route::get('/inicio' ,function () {
    return view('cadastro-noticia');
});

Route::get('/edit-news' ,function () {
    return view('noticias');
});

//criando a noticia no banco
Route::post('/cad-new' ,function (Request $request) {
    Noticias::create(['titulo'=>$request->titulo,'descricao'=>$request->descricao,'autor'=>$request->autor,]);
    return view('end');
});


//ver a rota da leitura
Route::get('/ver-noticia/{id}' ,function ($id) {
    $noticias = Noticias::all();
    return view('verNoticia',['noticias'=> $noticias]);
});

//update
Route::get('/edit-noticia/{id}' ,function ($id) {
    $noticias = Noticias::find($id);
    return view('edit',['noticias' =>$noticias]);
});

//eviar os dados alterados
Route::post('/editar-noticia/{id}' ,function (Request $request, $id) {
    $noticias = Noticias::find($id);
    $noticias->update([
        'titulo' =>$request->titulo,
        'descricao' =>$request->descricao,
        'autor' =>$request->autor
    ]);
    return view('end');
});

//deletar Noticias
Route::get('/excluir-noticia/{id}' ,function ($id) {
    $noticias = Noticias::find($id);
    $noticias->delete();
    return view('end');
});

Route::get('/perfil' ,function () {
    return view('perfil');
});
