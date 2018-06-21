<?php

try
{
//variable pour la bdd locale
//$bdd = new PDO('mysql:host=localhost;dbname=ecosemences', 'root', '');

//variable pour la bdd de prod
$bdd = new PDO('mysql:host=ecosemenclroot31.mysql.db;dbname=ecosemenclroot31' , 'ecosemenclroot31', 'RootAdmin82');

} catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>