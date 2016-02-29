<?php
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
  connect();
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

