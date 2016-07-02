<?php
namespace Controllers;

 class Players_Controller extends Master_Controller {
    public function __construct() {
        parent::__construct("\\Controllers\\Players_Controller",'players','players.php','players');
    }
     public function add(){

        if(isset($_POST["player-name"]) && isset($_POST["player-height"]) && isset($_POST["player-age"])
            && ($_POST["player-name"]!=='') && $_POST["player-height"]!=='' && $_POST["player-age"]!=='') {
            $this->class->add($_POST["player-name"],intval($_POST["player-age"]),intval($_POST["player-height"]));

            $_SESSION['message']= '<p class="alert alert-success">Player added!!! </p>';
            unset($_POST["player-name"]);
            unset($_POST["player-age"]);
            unset($_POST["player-height"]);
        }

        else {
            $_SESSION['message']= '<p class="alert alert-danger">Player not added, please fill in all fields!!! </p>';
            unset($_POST["player-name"]);
            unset($_POST["player-age"]);
            unset($_POST["player-height"]);

        }
     }


     public function delete(){
         if(isset($_POST["player-name"]) && $_POST["player-name"]!=='' ) {
         $affected=$this->class->delete($_POST["player-name"]);

             $_SESSION['message']= $affected;
             if($affected===0){
                 $_SESSION['message']= '<p class="alert alert-warning">Player not found!!! </p>';
             } else {
                 $_SESSION['message']= '<p class="alert alert-success">Player deleted!!! </p>';
            }
             unset($_POST["player-name"]);
         }

         else  {
             $_SESSION['message']= '<p class="alert alert-danger">Player not deleted, please fill the name!!! </p>';
             unset($_POST["player-name"]);
         }
     }

}