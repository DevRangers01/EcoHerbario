<?php

namespace App\Http\Controllers;

use App\Models\Planta;
use Illuminate\Http\Request;

class GrassController extends Controller
{
  
    // Retorna todas as espécies
    public function getAllEspecies()
    {
       return response()->json(Planta::all());
    }

    // Retorna uma espécie específica pelo ID
    public function getEspecieById($id)
    {
        // Busca a espécie pelo índice (ID)
        $especie = Planta::find($id);

        return $especie 
            ? response()->json($especie) 
            : response()->json(['error' => 'Espécie não encontrada'], 404);
    }
}
