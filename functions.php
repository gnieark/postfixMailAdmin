<?php

function login_page(){
  return (preg_replace( '/\{\{title\}\}/', SITE_TITLE, file_get_contents('../tpl/connexion.htm'))); 
}