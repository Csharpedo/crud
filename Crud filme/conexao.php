<?php
//conexão do xhamp 
$host = 'localhost';
$user = 'root';
$passwoard = '';
$bd_name = 'filmes';

$connx = mysqli_connect($host, $user, $passwoard, $bd_name);

if($connx){
    echo 'Conexão bem sucedida'
}else{
    echo 'Conexão mal sucedida'
}

?>