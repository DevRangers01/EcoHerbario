<?php

namespace App\Http\Controllers; 

class GrassController{
    
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

public function getAllEspecies() {
    $stmt = $this->pdo->query("SELECT * FROM plantas");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }

public function getEspecieById($id) {
    $stmt = $this->pdo->prepare("SELECT * FROM plantas WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
 }

public function createEspecie($nomeCientifico, $nomeComum, $familia, $descricao) {
    $stmt = $this->pdo->prepare("INSERT INTO plantas (nome_cientifico, nome_comum, familia, genero, especie, descricao, habitat, distribuicao_geografica, estado_de_conservacao, observacoes) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$nomeCientifico, $nomeComum, $familia, $genero, $especie, $descricao, $habitat, $distribuicao_geografica, $estado_de_conservacao, $observacoes]);
 }

public function deleteEspecie($id) {
    $stmt = $this->pdo->prepare("DELETE FROM plantas WHERE id = ?");
    return $stmt->execute([$id]);
 }
}