<?php

function login_page(){
  return (preg_replace( '/\{\{title\}\}/', SITE_TITLE, file_get_contents('../tpl/connexion.htm'))); 
}
function connect($user,$password){
  GLOBAL $db;
  
  $query=preg_replace(
	    array('/\\\\P/','/\\\\L/'),
	    array($db -> qstr($password),$db -> qstr($user)),
	    QUERY_AUTHENTIFICATE_ADMIN
	  );
  $results= $db -> Execute($query);
  if(! $results -> fields[0]){
    unset($_SESSION['isConnected']);
   
    return false;
  }
  $_SESSION['isConnected']=true;
  return $results -> fields[0];  
}