<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Document sans titre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="refresh" content="0; URL=formulaire.html">
</head>
<?php
$prenom = $_POST['Prenom'];
$nom = $_POST['Nom'];
 
$message = "$prenom $nom";
 
$to = 'gairaut.arnaud@laposte.net';
$objet = "Test" //Met l'objet que tu veux
 
/* En-têtes de l'e-mail */
$headers = "From: $nom \r\n\r\n";
  
/* Envoi de l'e-mail */
mail($to, $objet, $message, $headers)
 
?>
