<?php




$bdd = new PDO('mysql:host=localhost;dbname=testDev;charset=utf8', 'root', 'root');
if ($bdd->connect_error) {
  die("Connection failed: " . $bdd->connect_error);
}


$reponse = $bdd->query('SELECT * FROM realisations');
$reponse1 = $bdd->query('SELECT * FROM valeurs');
$reponse2 = $bdd->query('SELECT * FROM groupe');


$banniere = $reponse2->fetch();
