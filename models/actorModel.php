<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/TP_best_movies/models/database.php";
class Actor
{
    public static function addActor($name, $email)
    {
        //se connecter a la database
        $db = Database::dbConnect();
        //preparer la requete
        $request = $db->prepare("INSERT INTO actor (name, email) VALUES (?, ?)");
        //execution de la requete 
        try {
            $request->execute(array($name, $email));
            header("location: http://localhost/TP_best_movies/views/list_actor.php");

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    //methode pour recuperer la liste des actor
    public static function listactor()
    {
        //se connecter a la database
        $db = Database::dbConnect();
        //preparer la requete
        $request = $db->prepare("SELECT * FROM actor");
        //executer la requete
        try {
            $request->execute();
            //recuperer le resultat de la requete dabns un tableau listactor
            $listactor = $request->fetchAll();
            return $listactor;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}