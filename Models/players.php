<?php
namespace Models;

class Players_Model extends Master_Model{
    public function __construct($args) {
        parent::__construct($args);
        $query="select NAME,Age,Height from {$this->table} LIMIT 10";
        $resultCondition=$this->db->query($query);
        $_SESSION['players']=array();
        while( $result=$resultCondition->fetch_assoc()) {
            $_SESSION['players'][]=$result;
        }
    }

    public function add($name,$age,$height) {
        $query=$this->db->prepare("Insert INTO players(NAME,AGE,HEIGHT) VALUES (?,?,?)");
        $query->bind_param('sii',$name,$age,$height);
        $isOK=$query->execute();
    }

    public function delete($name) {
        $query=$this->db->prepare("Delete  FROM players WHERE Name = ?");
        $query->bind_param('s',$name);
        $query->execute();
        $affected=$this->db->affected_rows;
        return $affected;
    }
}