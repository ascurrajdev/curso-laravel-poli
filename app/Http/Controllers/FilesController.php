<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{

    public function index(){
        $collection = collect([]);
        for($cont = 0;$cont<5; $cont++){
            $collection->push([
                "id" => $cont,
                "name" => "Jose {$cont}",
            ]);
        }
        return view("files.index",array(
            "ruta" => "Ruta de archivos index",
            "registros" => $collection,
            "bandera" => 2
        ));
    }

    public function store(Request $request){
        return $request->archivos->path();
    }
}
