<pre>
<?php

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo Json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo Json_encode($search);

//carrega um usuário usando o logine a senha

//$usuario = new Usuario();
//$usuario->login("root", "!@#$");

//echo $usuario;

/*
//Criando um novo usuario
$aluno = new Usuario("aluno", "@luno0");

$aluno->insert();

echo $aluno;
*/

$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "!@#$%¨&*");

echo $usuario;
?>
<pre>