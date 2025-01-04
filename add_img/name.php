<?php

session_start()  ; 
header("Access-Control-Allow-Origin: *");

$_SESSION["name"] = time() ; 

?>