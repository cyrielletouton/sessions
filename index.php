<?php
// Les sessions

// Une session PHP est une instance unique d'accès au serveur à un instant donné

// Ouvrir / Créer / Démarrer une session
// Sera nécessaire sur TOUTES les pages qui dervont communiquer entre elles
session_start();

var_dump($_COOKIE);

// Ecrire dans la session
// Superglobale $_SESSION
$_SESSION['message'] = "L'article a été créé avec succès";

$_SESSION['user'] = ['id' => 1, 'email' => 'contact@demo.fr', 'prenom' => 'Cyrielle'];

var_dump($_SESSION);

echo $_SESSION['user']['prenom'];