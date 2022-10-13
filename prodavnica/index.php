<?php

$proizvodi = array(
    array(
        'id' => 1,
        'naziv' => 'Laptop',
        'cena' => 900
    ),
    array(
        'id' => 2,
        'naziv' => 'Korpa',
        'cena' => 500
    ),
    array(
        'id' => 3,
        'naziv' => 'Mis',
        'cena' => 1200
    )
    );

session_start();
if(!isset($_SESSION['korpa'])) {
    $_SESSION['korpa'] = array();
}

if(isset($_POST['submit']) && $_POST['submit']=='Kupi') {
    $_SESSION['korpa'][] = $_POST['id'];
    header('Location: .');
    exit();
}


if(isset($_GET['vidi_korpu'])) {
    include "korpa.php";
    exit();
}

include "katalog.php";



?>