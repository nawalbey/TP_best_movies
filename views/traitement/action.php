<?php
session_start();
// faire apl a notre fichier userModel
require_once $_SERVER["DOCUMENT_ROOT"] . "/TP_best_movies/models/actorModel.php";
require_once "../../models/filmModel.php";


if (isset($_POST['actor_submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    Actor::addActor($name, $email);
}

if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['title']);
    $email = htmlspecialchars($_POST['number_main_actor']);
    $password = htmlspecialchars($_POST['number_total_actor']);

    Film::addFilm($title, $number_main_actor, $number_total_actor);
}