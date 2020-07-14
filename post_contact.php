<?php
require 'fonctions/_inc.php';
date_default_timezone_set('Indian/Antananarivo');
$heure = (int)($_GET['heure'] ?? date('H:i'));
$jour = (int)($_GET['jour'] ?? date('N') - 1);
$errors = [];

$emails = [
        1 => 'techdev-mada.dev@techdev.dev', 
        2 => 'techdev-mada.uxdesign@techdev.dev',
        3 => 'techdev-mada.tech@techdev.dev', 
        4 => 'techdev-mada.prod@techdev.dev'
];

$validator = new Validator($_POST);
$validator -> check('nom', 'required');
$validator -> check('prenoms', 'required');
$validator -> check('email', 'required');
$validator -> check('email', 'email');
$validator -> check('service', 'in', array_keys($emails));
$validator -> check('objet', 'required');
$validator -> check('message', 'required');
$errors = $validator -> errors();



$nom = $_POST['nom'];
$prenoms = $_POST['prenoms'];
$email = $_POST['email'];
$service = $emails[$_POST['service']];
$objet = $_POST['objet'];
$message = $_POST['message'];

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: index.php?page=accueil#contact');
}else{
    $_SESSION['success'] = 1;
    $name = $_POST['nom'];
    $lastname = $_POST['prenoms'];
    $message = $_POST['message'];
    $emailExp = $_POST['email'];
    $object = $_POST['objet'];
    $emailDest = $emails[$_POST['service']];
    $headers = 'FROM:'.$name.' '.$lastname.' ('.$emailExp.')';
    mail($emailDest, $object, $message, $headers);
    contacts($nom, $prenoms, $email, $service, $objet, $message);
    header('Location: index.php?page=accueil#contact');
}