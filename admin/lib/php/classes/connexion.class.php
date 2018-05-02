<?php

class connexion {
private static $_instance = null;

    public static function getInstance($dsn, $user, $pass) {
//static pour pas d'instanciation
        if (!self::$_instance) {
            try {
                //self obligé car static
                self::$_instance = new PDO($dsn, $user, $pass);
                self::$_instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // print "Connecté à la base de données";
                
            } catch (PDOException $e) {
                print "Erreur de connexion : ".$e->getMessage()." ".$e->getLine();
                //print "pass : ".$pass. " user = ".$user;
                //en cas de problème de connexion à la bdd
            }
        }
        return self::$_instance;
    }
}
