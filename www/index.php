<?php
session_start();

require_once('../functions.php');
if(!file_exists('../config.php')){
  include('../tpl/notConfigured.htm');
  die;
}else{
  include ('../config.php');
}
//connexion Database
include('../ADOdb/adodb.inc.php');
$db = ADONewConnection(DB_DRIVER); 
$db->Connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$db){
  include('../tpl/dbError.htm');
  die();
}

if((isset($_POST['act'])) && ($_POST['act']=="connect")){
  //the only thing we can do without being connected is to try to connect
  connect($_POST['userid'],$_POST['pwd']);
}
if(!isset($_SESSION['isConnected'])){
        echo login_page();
        die;
}
if(isset($_GET['menu']))
  $menu=$_GET['menu'];
else
  $menu="";

switch($menu){
  case "session":
  
    break;
  default:
    break;
}
<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Gnieark"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PostfixMailAdmin</title>
</head>
<body>
  <nav>
  <p>
    <a href="index.php?menu=admins">Administrateurs</a>
    <a href="index.php?menu=domains">Domaines</a>
    <a href="index.php?menu=users">Utilisateurs</a>
    <a href="index.php?menu=aliases">Alias</a>
    <a href="index.php?menu=security">Sécurité</a>
    </p>
  </nav>
</body>
</html>