<?php
require '../app/conexao.php';

$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$json = filter_input(INPUT_GET, 'jsn');
//echo $json;
$data = json_decode($json, true);
$nome = $data['nome'];
$login = $data['login'];
$senha = $data['senha'];
$sql = "insert into usuarios (usunome, usulogin, ususenha) values (?,?,MD5(?));";
$prp = $pdo->prepare($sql);
$prp->execute(array($nome,$login,$senha));
Conexao::desconectar();

?>