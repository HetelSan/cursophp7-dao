<?php

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);

// Carrega um usuário
// $root = new Usuario();
// $root->loadById(3);
// echo $root;

// Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("jo");
// echo json_encode($search);

// Carrega um usuário usando o login e a senha 
// $usuario = new Usuario();
// $usuario->login("root", "!@#$");
// echo $usuario;

// Cria um novo usuário (sem o método mágico __constructor na classe Usuarios)
// $aluno = new Usuario();
// $aluno->setDeslogin("aluno");
// $aluno->setDessenha("$#@!");
// $aluno->insert();
// echo $aluno;

/*
// Cria um novo usuário (com o método mágico __construct na classe Usuarios)
// necessário alterar a instanciação da classe Usuarios já passando o login e password
$aluno = new Usuario("aluno", "@1un0");
$aluno->insert();
echo $aluno;
*/

// Alterando um usuário
$usuario = new Usuario();
$usuario->loadById(12);
$usuario->update("professor", "!@#$%¨&*");
echo $usuario;
?>
