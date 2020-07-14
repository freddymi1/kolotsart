<?php
date_default_timezone_set('Indian/Antananarivo');
$heure = (int)($_GET['heure'] ?? date('H:i'));
$jour = (int)($_GET['jour'] ?? date('N') - 1);

require 'connexion_db.php';
require 'fonctions.php';
//require 'contact.fonc.php';
