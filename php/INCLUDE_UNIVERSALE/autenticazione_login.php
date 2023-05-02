<?php
function autenticazione(){
    if(!$_SESSION){
        header("Location: index.php"); //redirect
    }
}