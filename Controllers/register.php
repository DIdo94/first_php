<?php
namespace Controllers;
use Controllers\Master_Controller;

class Register_Controller extends Master_Controller {

    public function __construct(){
        parent::__construct("\\Controllers\\Register_Controller","master","\\register.php");
    }


}