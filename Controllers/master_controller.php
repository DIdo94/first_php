<?php

namespace Controllers;

class Master_Controller {
    protected $layout='';
    protected $model=null;
    protected $class=null;
    protected $user=array();

   public function __construct($class="\\Controllers\\Master_Controller",$model="master",$view="home.php",$table='users') {
       // $this->class=$class;
        $this->model=$model;
        $this->layout.=$view;
       include_once FILE_PATH."\\Models\\{$model}.php";
       $this->model='Models\\'.ucfirst($model).'_Model';
        $this->class=new $this->model(array('table'=>$table));
       $partial= FILE_PATH.'\\Views\\'.$view;
       $_SESSION['partial']=$partial;
       include_once FILE_PATH."\\Views\\master.php";
    }
}