<?php
// We gaan sessies gebruiken
session_start();

// Gebruikersnaam en wachtwoord instellen
// COMMENT: huiswerk: password_hash (php.net)
$sGebruikerControle = 'apollo';
$sWachtwoordControle = 'kampioenen';

// Controle of het formulier verzonden is 
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Controle of benodigde velden wel ingevuld zijn 
    if(isset($_POST['user'], $_POST['pass']))
    {
        // Overbodige spaties verwijderen 
        $sGebruiker = trim($_POST['user']);
        $sWachtwoord = trim($_POST['pass']);

        // Gebruikersnaam en wachtwoord controleren 
        if($sGebruiker == $sGebruikerControle && $sWachtwoord == $sWachtwoordControle)
        {
            // Juiste gebruikersnaam en wachtwoord: inloggen! 
            $_SESSION['logged_in'] = true;
            $_SESSION['gebruiker'] = $sGebruiker;

            // Doorsturen en melding geven 
            header('Location: logged.php');
            $msg = 'Je bent succesvol ingelogd. Je wordt doorgestuurd.';
        }
        else
        {
            // Terugsturen en foutmelding geven 
            header('Location: index.php');
            $msg = 'Deze combinatie van gebruikersnaam en wachtwoord is niet juist!';
        }
    }
    else
    {
        header('Location: index.php');
        $msg = 'Een vereist veld bestaat niet!';
    }
}
else
{
    // Terug naar het formulier 
    header('Location: index.php');
    exit();
}
?>