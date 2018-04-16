<?php
    if(isset($_GET["functionCall"])){
        if($_GET["functionCall"] == "checkUser")
            checkUser();
        if($_GET["functionCall"] == "createUser")
            createUser();
    }

    function createUser(){
        $cp = $_POST["cp"];
        $mail = $_POST["mail"];
        $pseudo = $_POST["pseudo"];
        $pwd = $_POST["pwd"];
        $hash = setHash($mail, $pseudo);
        
        $return = false;
        //enregistrment en base
        if($return)
            setcookie("sortiepartieuser", $hash, time()+2592000);

        return "coucou";
    }

    
    function checkUser(){
        return json_encode("truc");
        // $hashcookie = getHash();
        // if($hashcookie != null){
        //     //recuperation hash en bdd
        //     if($user != null)
        //         return true;
        // }
        // return false;
    }
           
    function setHash($mail, $pseudo){
        return md5(crypt($mail, $pseudo));
    }

    function getHash(){
        return $_COOKIE["sortiepartieuser"];
    }
?>