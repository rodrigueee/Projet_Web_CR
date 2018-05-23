<?php

class CommandeDB extends Commande {

    private $_db;
    private $_commande = array();

    public function __construct($cnx) {
        $this->_db = $cnx;
    }

    public function addCommande(array $data) {

        try {
            $query = "insert into commande (idclient,idproduit,prix) values (:idclient,:idproduit,:prix)";

            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':idclient', $data['idclient'], PDO::PARAM_STR);
            $resultset->bindValue(':idproduit', $data['idproduit'], PDO::PARAM_STR);
            $resultset->bindValue(':prix', $data['prix'], PDO::PARAM_STR);
            $resultset->execute();

        } catch (PDOException $e) {
            print "<br/>Echec de l'insertion";
            print $e->getMessage();
        }
    }

    function getCommandeClient($id) {
        try {
            $query = "SELECT * FROM COMMANDE where IDCLIENT=:idclient";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':idclient', $id);
            $resultset->execute();
            $data = $resultset->fetchAll();

            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_infoArray[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }

    public function delCommande($id) {

        try {
            $query = "delete from commande where idproduit = :idproduit";

            var_dump($query);
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':idproduit',$id);
            $resultset->execute();

        } catch (PDOException $e) {
            print "<br/>Echec de la suppression";
            print $e->getMessage();
        }
    }

}
