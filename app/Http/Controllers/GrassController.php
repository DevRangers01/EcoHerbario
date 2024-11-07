<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class GrassController extends Controller
{
    // Definindo as espécies como uma propriedade da classe
    private $especies = [
        ['id' => 1, 'nome' => 'Abacate', 'descricao' => 'Descrição da Abacate'],
        ['id' => 2, 'nome' => 'Amacuca', 'descricao' => 'Descrição da Amacuca'],
        ['id' => 3, 'nome' => 'Amora', 'descricao' => 'Descrição da Amora'],
        ['id' => 4, 'nome' => 'Árvore de Ferro', 'descricao' => 'Descrição da Árvore de Ferro'],
        ['id' => 5, 'nome' => 'Bambuzinho', 'descricao' => 'Descrição do Bambuzinho'],
        ['id' => 6, 'nome' => 'Banana de Macaco', 'descricao' => 'Descrição da Banana de Macaco'],
        ['id' => 7, 'nome' => 'Buchinho', 'descricao' => 'Descrição do Buchinho'],
        ['id' => 8, 'nome' => 'Costela de Adão', 'descricao' => 'Descrição da Costela de Adão'],
        ['id' => 9, 'nome' => 'Dente de Tigre', 'descricao' => 'Descrição do Dente de Tigre'],
        ['id' => 10, 'nome' => 'Dracena Malaia', 'descricao' => 'Descrição da Dracena Malaia'],
        ['id' => 11, 'nome' => 'Girassol', 'descricao' => 'Descrição do Girassol'],
        ['id' => 12, 'nome' => 'Goiaba', 'descricao' => 'Descrição da Goiaba'],
        ['id' => 13, 'nome' => 'Laranja Pocam', 'descricao' => 'Descrição da Laranja Pocam'],
        ['id' => 14, 'nome' => 'Limão Taiti', 'descricao' => 'Descrição do Limão Taiti'],
        ['id' => 15, 'nome' => 'Lirío da Paz', 'descricao' => 'Descrição do Lirío da Paz'],
        ['id' => 16, 'nome' => 'Mangueira', 'descricao' => 'Descrição da Mangueira'],
        ['id' => 17, 'nome' => 'Maricá', 'descricao' => 'Descrição da Maricá'],
        ['id' => 18, 'nome' => 'Metasequoia', 'descricao' => 'Descrição da Metasequoia'],
        ['id' => 19, 'nome' => 'Milindeira', 'descricao' => 'Descrição da Milindeira'],
        ['id' => 20, 'nome' => 'Olho de Boneca', 'descricao' => 'Descrição do Olho de Boneca'],
        ['id' => 21, 'nome' => 'Palmeira Rabo de Peixe', 'descricao' => 'Descrição da Palmeira Rabo de Peixe'],
        ['id' => 22, 'nome' => 'Pinheiro', 'descricao' => 'Descrição do Pinheiro'],
        ['id' => 23, 'nome' => 'Pitanga', 'descricao' => 'Descrição da Pitanga'],
        ['id' => 24, 'nome' => 'Podocarpo', 'descricao' => 'Descrição do Podocarpo'],
        ['id' => 25, 'nome' => 'Roseira', 'descricao' => 'Descrição da Roseira'],
        ['id' => 26, 'nome' => 'Tibouchina', 'descricao' => 'Descrição da Tibouchina'],
        ['id' => 27, 'nome' => 'Uva Japonesa', 'descricao' => 'Descrição da Uva Japonesa']  
    ];

    // Retorna todas as espécies
    public function getAllEspecies()
    {
        return response()->json($this->especies);
    }

    // Retorna uma espécie específica pelo ID
    public function getEspecieById($id)
    {
        // Busca a espécie pelo índice (ID)
        $especie = collect($this->especies)->firstWhere('id', $id);

        return $especie 
            ? response()->json($especie) 
            : response()->json(['error' => 'Espécie não encontrada'], 404);
    }
}
