<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/TP_best_movies/models/database.php";
class Film
{
    public static function addFilm($title, $number_main_actor, $number_total_actor)
    {
        //se connecter a la database
        $db = Database::dbConnect();
        //preparer la requete
        $request = $db->prepare("INSERT INTO film (title, number_main_actor, number_total_actor ) VALUES (?,?)");
        //execution de la requete 
        try {
            $request->execute(array($title, $number_main_actor, $number_total_actor ));
            header("location: http://localhost/TP_best_movie/views/list_actor.php");

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    //methode pour recuperer la liste des livres
    public static function listfilm()
    {
        //se connecter a la database
        $db = Database::dbConnect();
        //preparer la requete
        $request = $db->prepare("SELECT * FROM film");
        //executer la requete
        try {
            $request->execute();
            //recuperer le resultat de la requete dabns un tableau listfilm
            $listfilm = $request->fetchAll();
            return $listfilm;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}