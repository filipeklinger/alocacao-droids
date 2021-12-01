<?php

namespace Droids\backend\control\classes;

class Usuario
{
    private $id;
    private $nome;
    private $usuario;
    private $senha;

    public function __construct()
    {
    }

    //Gettes e setters do Usuario
    public function SetId($id)
    {
        $this->id = $id;
    }
    public function GetId()
    {
        return $this->id;
    }

    public function SetNome($nome)
    {
        $this->nome = $nome;
    }
    public function GetNome()
    {
        return $this->nome;
    }

    public function SetUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
    public function GetUsuario()
    {
        return $this->usuario;
    }

    public function SetSenha($senha)
    {
        $this->senha = $senha;
    }

    public function GetSenha()
    {
        return $this->senha;
    }
}
