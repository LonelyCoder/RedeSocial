<?php
if(!$_SESSION['id_user'])
	echo "<meta http-equiv=refresh content='0; url=../index.php'>";

if(isset($_GET['pg_m']))
$pg_m=$_GET['pg_m'];
else
$pg_m='';
switch($pg_m){
case 'informacoes': include "informacoes.php"; break;
case 'amigos': include "amigos.php"; break;
case 'albuns': include "albuns.php"; break;
case 'interesses': include "interesses.php"; break;
case 'mostrar': include "mostrar.php"; break;
case 'notificacoes': include "notificacoes.php"; break;

default: include "noticias.php";break;
}
?>