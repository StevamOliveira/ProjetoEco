<?php

namespace App\Http\Controllers; 

class GrassController {
    
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAllEspecies() {
        $query = "SELECT * FROM plantas";
        $result = mysqli_query($this->connection, $query);
        
        if ($result) {
            $especies = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $especies[] = $row;
            }
            return $especies;
        } else {
            echo "Erro ao buscar espécies: " . mysqli_error($this->connection);
            return [];
        }
    }

    public function getEspecieById($id) {
        $query = "SELECT * FROM plantas WHERE id = ?";
        $stmt = mysqli_prepare($this->connection, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        return mysqli_fetch_assoc($result);
    }

    public function createEspecie($nomeCientifico, $nomeComum, $familia, $descricao) {
        $query = "INSERT INTO plantas (nome_cientifico, nome_comum, familia, descricao) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($this->connection, $query);
        mysqli_stmt_bind_param($stmt, 'ssss', $nomeCientifico, $nomeComum, $familia, $descricao);
        return mysqli_stmt_execute($stmt);
    }

    public function deleteEspecie($id) {
        $query = "DELETE FROM plantas WHERE id = ?";
        $stmt = mysqli_prepare($this->connection, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        return mysqli_stmt_execute($stmt);
    }
}
