<?php

function login_page(){
  return (preg_replace( '/\{\{title\}\}/', SITE_TITLE, file_get_contents('../tpl/connexion.htm'))); 
}
function connect($user,$password){
  GLOBAL $db;

  $results= $db -> Execute("SELECT username FROM admin WHERE password=MD5(".$db -> qstr($password).") AND username=".$db -> qstr($user)." AND ACTIVE='1'");
  if(! $results -> fields[0]){
    unset($_SESSION['isConnected']);
   
    return false;
  }
  $_SESSION['isConnected']=true;
  return $results -> fields[0];  
}