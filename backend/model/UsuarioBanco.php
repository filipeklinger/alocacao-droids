<?php

namespace Droids\backend\model;

use Droids\backend\control\classes\Usuario;

class UsuarioBanco
{
    private $banco;

    public function __construct()
    {
        $this->banco = new AcessoBanco();
    }

    public function Salvar($usuario)
    {
        //criando query de insercao no banco
        $insert = "INSERT INTO `usuario`
        (nome, usuario, senha) VALUES
        ('{$usuario->GetNome()}', '{$usuario->GetUsuario()}', '{$usuario->GetSenha()}')";

        $resultado = $this->banco->Executa($insert);

        if ($resultado == false) {
            echo "Erro em: " . $insert . "<br>" . $this->banco->GetErro() . "<br><br>";
        }

        return $resultado;
    }
}
