<?php

// ** This router only needs routerSimple.php and changing .htacess file to link it

require_once ('libraries/Home.php');
require_once ('libraries/About.php');
require_once ('libraries/Login.php');

if($_GET['action'] == ''){
    //Default action
    showHome();
}
else{
    //Parsing URL ["about", "User", ...]
    $partesURL = explode ("/",$_GET['action']);
    
    //Methods by URL
    if($partesURL[0] === 'login') {
        showLogin();             //Parsing URL ["login"]
    } elseif($partesURL[0] === 'about') {   //Parsing URL ["about"]
        if(isset($partesURL[1]) && $partesURL[1]=='admin'){  //Parsing URL ["about", "admin"]
            showAboutAdmin();
        }else if(isset($partesURL[1])){ //Parsing URL ["about", "AnyUser"]
        showAboutUser($partesURL[1]);
        }
        else {          
            showAbout();      //Parsing URL ["about"]
        }
    }
}

?>
