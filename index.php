<?php
    define("FILE_PATH", dirname(__FILE__));
    define("FILE_FOLDER",basename(dirname(__FILE__)));

    $request=$_SERVER['REQUEST_URI'];
    $parts=array();
    $controller='';

    include_once FILE_PATH."\\Controllers\\master_controller.php";
    include_once FILE_PATH."\\Controllers\\players.php";
    include_once FILE_PATH."\\Controllers\\register.php";
    include_once FILE_PATH."\\Controllers\\login.php";
    include_once FILE_PATH.'\\Models\\master.php';
    include_once FILE_PATH."\\config\\dbConfig.php";
    include_once FILE_PATH."\\DB\\database.php";
    include_once FILE_PATH."\\config\\Auth.php";


    $connection=new DB\DBConnect();
    $connection=$connection::$db;
    session_start();
    if(isset($_SESSION['logout'])) {
        session_destroy();
        unset($_SESSION['logout']);
        unset($_SESSION['fname']);
    }

    $request=substr($_SERVER['REQUEST_URI'],strlen("/IDK/"));
    $parts=explode("/",$request);
   // var_dump($parts);
        if($parts[0]==="") {
            $controller=new \Controllers\Master_Controller();
        }

        else{
            $class="Controllers\\".ucfirst($parts[0])."_Controller";
            $controller = new $class();
            if(isset($parts[1])){
                $controller = new $class();
                $controller->$parts[1]();
            }

            if(isset($_SESSION['function'])){
                if(method_exists($controller,$_SESSION['function']))
                     $controller->$_SESSION['function']();
                unset($_SESSION['function']);
            }

        }

// homepage carousel, popup, deploy
?>


