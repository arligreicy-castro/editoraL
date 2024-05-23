<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livro;
class livroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados =  livro::all();
        return view('listar_livros', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form_livros');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $livro = livro::create($dados);
        return redirect("/");
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
        $livro = livro::find($id);
	    return view('edit_livros', compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = $request->all();
	    $livro = livro::find($id);
	    $livro->update($dados);
	    return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $livro = livro::find($id);
		$livro->delete();
		return redirect('/');
    }
}
