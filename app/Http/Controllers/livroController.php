<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livro;
use App\Models\genero;

use Illuminate\Support\facades\DB;
class livroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros =  DB::table('livros')->join('generos', 'livros.genero_id', '=', 'generos.id')->select('livros.*', 'generos.descritivo')->get();
        return view('listar_livros', compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $generos = genero::all(['id','descritivo']);
        return view('form_livros', compact('generos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $genero = genero::find($dados["genero_id"]);
        $genero->livros()->create($dados); // esta fazendo migração com o model genero
        return redirect("/listar_livros");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $generos = genero::all(['id', 'descritivo']);
        $livro = livro::find($id);
	    return view('edit_livros', compact('generos','livro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = $request->all();
	    $livro = livro::find($id);
	    $livro->update($dados);
	    return redirect("/listar_livros");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $livro = livro::find($id);
		$livro->delete();
		return redirect('/listar_livros');
    }
}
