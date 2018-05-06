<?php

class ProduitsDB extends Produits {

    private $_db;
    private $_array = array();

    public function __construct($db) {
        $this->_db = $db;
    }

    public function getListeJeux() {
        try {
            $query = "select * from produits order by prix asc";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();

            while ($data = $resultset->fetch()) {
                $_array[] = $data;
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

    public function getListeProduitsfoot() {
        try {
            $query = "select * from produits where nom = 'football'";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();

            while ($data = $resultset->fetch()) {
                $_array[] = $data;
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

    public function getListeProduitscycli() {
        try {
            $query = "select * from produits where nom = 'cycliste'";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();

            while ($data = $resultset->fetch()) {
                $_array[] = $data;
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

    public function getListeProduitstennis() {
        try {
            $query = "select * from produits where nom = 'tennis'";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();

            while ($data = $resultset->fetch()) {
                $_array[] = $data;
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

     function getProduits($id) {
        try {
            $query = "SELECT * FROM Produits where Idproduit=:idproduit";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':idproduit', $id);
            $resultset->execute();
            $data = $resultset->fetchAll();
//var_dump($data);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_array[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_array;
    }


}
