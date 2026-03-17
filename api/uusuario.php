<?php
require '../app/conexao.php';
$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$json = filter_input(INPUT_GET, 'jsn');
$data = json_decode($json, true);
$id = $data['id']; 
$nome = $data['nome'];  
$login = $data['login'];
//$senha = $data['senha'];
if (!empty($data['senha'])){
    $senha = $data['senha'];
    $sql = "update usuarios  set usunome = ?, usulogin = ?, ususenha = MD5(?)  where usuid = ?;";
    $prp = $pdo->prepare($sql);
    $prp->execute(array($nome, $login, $senha, $id));
} else {
    $sql = "update usuarios  set usunome = ?, usulogin = ?  where usuid = ?;";
    $prp = $pdo->prepare($sql);
    $prp->execute(array($nome, $login, $id));
}
Conexao::desconectar();
?>