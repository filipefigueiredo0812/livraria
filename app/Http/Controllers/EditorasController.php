<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editora;

class EditorasController extends Controller
{
    //
    public function index(){
        $editoras = Editora::paginate(4);
        return view ('editoras.index', [
            'editoras'=>$editoras
        ]);
    }
    
    public function show(Request $r){
        $idEditora = $r->id;
        $editora = Editora::where('id_editora',$idEditora)->first();
        
        
        return view ('editoras.show', [
            'editora'=>$editora
        ]);
    }
}
