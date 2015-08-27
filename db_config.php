<?php

// We werken ook hier met sessies
session_start();

// Controleren of de bezoeker ingelogd is
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false)
{
    header('Location: index.php');
    exit();
}

$db = new mysqli('localhost', 'root', '', 'apollo_punten');

if($db->connect_errno > 0) {
    die( 'Unable to connect to database [' . $db->connect_error . ']' );
}

?>