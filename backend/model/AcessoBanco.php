<?php

namespace Droids\backend\model;

class AcessoBanco
{
    //Parametros de conexao com o Banco
    private $hostname;
    private $usuarioDb;
    private $senhaDb;
    private $nomeDb;

    private $mysqli;

    public function __construct()
    {
        $this->hostname = "localhost";
        $this->usuarioDb = "root";
        $this->senhaDb = "";
        $this->nomeDb = "alocacao_droid";

        $this->GetConexao();
    }

    private function GetConexao()
    {
        //acessando o banco ou encerrando aplicação se nao conseguir conectar
        $this->mysqli = mysqli_connect($this->hostname, $this->usuarioDb, $this->senhaDb);
        if (!$this->mysqli) {
            echo "Erro ao conectar com o banco. verifique os parametros de conexão";
            die;
        }

        //Setando o schema padrao das consultas
        mysqli_select_db($this->mysqli, $this->nomeDb);
    }

    public function Executa($query)
    {
        return mysqli_query($this->mysqli, $query);
    }

    public function GetErro()
    {
        return mysqli_error($this->mysqli);
    }
}
