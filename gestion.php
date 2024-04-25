<?php
// controllers/GestionEvenementsController.php

$gestionEvenements = new GestionEvenements();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["creer_evenement"])) {
        $nom = $_POST["nom"];
        $date = $_POST["date"];
        $lieu = $_POST["lieu"];
        $gestionEvenements->creerEvenement($nom, $date, $lieu);
    } elseif (isset($_POST["supprimer_evenement"])) {
        $index = $_POST["supprimer_evenement"];
        $gestionEvenements->supprimerEvenement($index);
    } elseif (isset($_POST["acheter_billets"])) {
        $index = $_POST["evenement"];
        $type = $_POST["type"];
        $gestionEvenements->acheterBillet($index, $type);
    } elseif (isset($_POST["echanger_billets"])) {
        // Logique pour échanger des billets
        // À implémenter
    }
}
?>
