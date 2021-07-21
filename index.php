<?php


require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/


//Carrega um usuário (ID)
/*
$root = new Usuario();

$root->loadById(5);

echo $root;
*/

//Carrega uma lista de usuários
/*
$lista = Usuario::getList();

echo json_encode($lista);
*/

//Carrega uma lista de usuários buscando com "LIKE"
/*
$search = Usuario::search("jo");

echo json_encode($search);
*/

//carrega um usuario usando li=ogin e senha
	$usuario = new Usuario();
	$usuario->login("Jose","123456");

	echo $usuario;



?>