<?php

class ClientDB extends Client {

    private $_db;
    private $_client = array();

    public function __construct($cnx) {
        $this->_db = $cnx;
    }

    public function addClient(array $data) {

        $query = "insert into clients (nom,prenom,login,motdepasse,adresse,codepostal,localite,gsm,email) values (:nom,:prenom,:login,:motdepasse,:adresse,:codepostal,:localite,:gsm,:email)";

        try {
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':nom', $data['nom'], PDO::PARAM_STR);
            $resultset->bindValue(':prenom', $data['prenom'], PDO::PARAM_STR);
            $resultset->bindValue(':login', $data['login'], PDO::PARAM_STR);
            $resultset->bindValue(':motdepasse', $data['motdepasse'], PDO::PARAM_STR);
            $resultset->bindValue(':adresse', $data['adresse'], PDO::PARAM_STR);
            $resultset->bindValue(':codepostal', $data['codepostal'], PDO::PARAM_STR);
            $resultset->bindValue(':localite', $data['localite'], PDO::PARAM_STR);
            $resultset->bindValue(':gsm', $data['gsm'], PDO::PARAM_STR);
            $resultset->bindValue(':email', $data['email'], PDO::PARAM_STR);
            $resultset->execute();
        } catch (PDOException $e) {
            print "Données non encodées";
            print $e->getMessage();
        }
    }

    function isClient($login,$motdepasse) {
        try {
            $query = "select * from clients where motdepasse = :motdepasse and login = :login";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':motdepasse', $motdepasse);
            $resultset->bindValue(':login', $login);
            $resultset->execute();
            $data = $resultset->fetch();
            if (!empty($data)) {
                try {
                    $_client[] = new Client($data);
                    if ($_client[0]->motdepasse == $motdepasse && $_client[0]->login == $login) {
                        return $_client;
                    } else {
                        return null;
                    }
                } catch (PDOException $e) {
                    print $e->getMessage();
                }
            }
        } catch (PDOException $e) {
            print "Requete échouée" . $e->getMessage();
        }
    }

    function getClient($id_client) {
        try {
            $query = "select * from clients where idclient = :idclient";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':idclient', $id_client);
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

}
