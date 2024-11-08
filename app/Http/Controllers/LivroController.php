<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function index(Request $request){
    $Livros = Livro::all();
        return view('livro.index', compact('livros'));
}
public function create(){
    return view('livros.create');
}

public function store (Request $request){
    $request->validade([
'titulo' => 'required|max:100',
'autor' => 'required|max:50',
'ano_publicacao' => 'required|integer',
'resumo' => 'nullable|string',
    ]);
    
    Livro::create($request->all());

    return redirect ()->route('livro.index')->with('sucess','Registro criado com sucesso');
}
}
