<?php
require_once('../functions.php');
if(!file_exists('../config.php')){
  include('../tpl/notConfigured.htm');
  die;
}else{
  include ('../config.php');
}
if(!isset($_SESSION['isConnected'])){
        echo login_page();
        die;
}
