<?php

namespace Droids\backend\control;

use Droids\backend\control\classes\Usuario;
use Droids\backend\model\UsuarioBanco;

class UsuarioControl
{
    private $usuario;
    private $usuarioBanco;

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->usuarioBanco = new UsuarioBanco();
    }

    private function PostUsuario()
    {
        $this->usuario->SetNome($this->post('nome'));
        $this->usuario->SetUsuario($this->post('usuario'));
        $this->usuario->SetSenha($this->post('senha'));
    }

    private function post($parametro)
    {
        //tenta obter um parametro por post se nao existir retorna string vazia
        return isset($_POST[$parametro]) ? $_POST[$parametro] : '';
    }

    public function CriarUsuario()
    {
        $this->PostUsuario();
        $salvo = $this->usuarioBanco->Salvar($this->usuario);

        if ($salvo) {
            echo "
            <h4>Usuario '{$this->usuario->GetNome()}' Adicionado com sucesso!</h4>
            <br/>
            <a href='../?r=login'>Ir Para Login</a>
            ";
        } else {
            echo "Erro ao salvar usuario <br/> <a href='../?r=cadastro_usuario'>Voltar</a>";
        }
    }
}
