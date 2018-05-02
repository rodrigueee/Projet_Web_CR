<?php

class InfoClientDB extends InfoClient {
    
    private $_db;
    private $_infoArray = array();
    
    public function __construct($cnx) {
        $this->_db = $cnx;
    }


    public function getInfoClient($page) {
        try {
            $query = "SELECT * FROM gt_texte where page=:page";
            $resultset = $this->_db->prepare($query);           
            //$resultset->bindValue(1,$page); 
            $resultset->bindValue(':page', $page, PDO::PARAM_STR);
            $resultset->execute();
            $data = $resultset->fetchAll(); 
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_infoArray[] = new InfoClient($data);
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }
}

