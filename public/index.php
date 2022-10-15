<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$link1 = 'Accueil';

echo $twig->render('home.html.twig', ['link1' => $link1]);
