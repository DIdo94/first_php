<?php
namespace Models;
use DB\DBConnect;

class Master_Model {
    protected $table;
    protected $column;
    protected $query;
    protected $db;


    public function __construct($args) {
        $args=array_merge(array('column'=>'*','query'=>''),$args);

        if(!isset($args['table'])){
            echo 'Table not found';
            die();
        }
      //  extract($args);
        $this->column=$args['column'];
        $this->table=$args['table'];
        $connect=new DBConnect();
        $this->db=$connect::$db;
    }


}