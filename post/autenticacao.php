<?php
session_start();
include("../conexao.php");
if (isset($_POST["signin"])){ 
	if( ($passwd === $_POST["email"])&&($passwd === $_POST["passwd"])) {
		$_SESSION["autenticado"]==TRUE;
		$_SESSION["usuario"]=$_POST["email"];
	}
}else if (isset($_POST["signout"])){ 
	session_destroy();
}
header('location:../index.php');