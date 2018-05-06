<?php

class AdminDB extends Admin {

    private $_db;
    private $_array = array();

    public function __construct($db) {
        $this->_db = $db;
    }

    public function getAdmin($admin, $password) {


        try {
            $query = "select * from admin where admin = :admin and password=:password";
            $resultset = $this->_db->prepare($query);
           
            $resultset->bindValue(':admin', $admin);
            $resultset->bindValue(':password', $password);
            $resultset->execute();
       
            while ($data = $resultset->fetch()) {
                $_array[] = new Admin($data);
             
            }
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        if (!empty($_array)) {
            return $_array;
        } else {
            return null;
        }
    }

}
