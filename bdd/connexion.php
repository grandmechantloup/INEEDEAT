<?php 
$bdd=NULL;
try
{
	$bdd = new PDO("mysql:host=localhost;dbname=i_need_eat;charset=utf8",'root','');
}
catch (Exception $e)
{
	die('erreur : '.$e->getmessage());
}
?>