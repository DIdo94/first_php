<?php
namespace Controllers;
use Controllers\Master_Controller;

class Login_Controller extends Master_Controller {

    public function __construct(){
        parent::__construct("\\Controllers\\Login_Controller","master","\\login.php");

    }
}