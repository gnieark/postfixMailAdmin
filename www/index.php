<?php

@session_start();

if(!isset($_SESSION['user']) || $_SESSION['user']->connected === false){
    echo "page de connexion";


}