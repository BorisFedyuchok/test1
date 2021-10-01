<?php

class Sess{

    public function set_sess($name,$value){

        $_SESSION[$name]=$value;

    }

    public function get_sess($name){
        return $_SESSION[$name];
    }

    public function clear_sses($name){
        unset($_SESSION[$name]);
    }

    public function logout(){



        $_SESSION=[];

        setcookie("PHPSESSID","",time()-10000,'/');

        session_destroy();

        return header("Refresh: 0; URL=http://localhost:8888/test1/index.php");

    }

}

?>