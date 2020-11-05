<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutoresController extends Controller
{
    //
    public function index(){
        $autores = Autor::paginate(4);
        return view ('autores.index', [
            'autores'=>$autores
        ]);
    }
    
    public function show(Request $r){
        $idAutor = $r->id;
        $autor = Autor::where('id_autor',$idAutor)->first();
        
        
        return view ('autores.show', [
            'autor'=>$autor
        ]);
    }
}
