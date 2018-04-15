<?php
    if($_GET["functionCall"] != null){
        switch($_GET["functionCall"]){
            case 'createUser' :
                return createUser();
            default:
                return 'null';
        }
    }

    function createUser(){
        //$pseudo, $password, $cp, $mail => POST
        $hash = getHash($mail, $pseudo);
        return "coucou";
    }

    function getHash($mail, $pseudo){

    }
?>