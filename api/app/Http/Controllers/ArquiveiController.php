<?php

namespace App\Http\Controllers;

use App\Arquivei;
use Illuminate\Http\Request;

class ArquiveiController extends Controller
{
    //GET listar datos
    public function index(Request $request)
    {
        if ($request->has('busca')) {
            $nfe = Arquivei::where('chave', 'like', '%' . $request->busca)->get();
        } else
            $nfe = Arquivei::all();

        return $nfe;
    }


}
