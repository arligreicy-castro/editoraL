<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genero;
class generoController extends Controller
{
		
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados =  genero::all(); 
		//dd($dados);
		return view('listar_generos', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('edit_generos');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
	    //dd($request);
	    $dados = $request->all();
	    $genero = genero::create($dados);
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
	    $genero = genero::find($id);
	    return view('edit_genero', compact('genero'));
	//dd($genero); tipo var_dump
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
	    $dados = $request->all();
	    $genero = genero::find($id);
	    $genero->update($dados);
	    return redirect("/");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genero = genero::find($id);
		$genero->delete();
		return redirect('/');
    }
}

