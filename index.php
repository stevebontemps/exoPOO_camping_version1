<?php
/**
 * Created by PhpStorm.
 * User: bontemps
 * Date: 14/11/18
 * Time: 11:37
 */
include('Camping.php');
include('Tente.php');
include('Mobilhome.php');

$mon_camping = new Camping("les flots bleus", "rd216", "vias");

// echo("steve du tete");
// echo "\r\n";
// print_r("steve du bontemps");
// echo "\r\n";

$mon_camping->toString();
echo "\r\n";

echo $mon_camping->getNom();
echo "\r\n";

// echo $mon_camping->nom;
// echo "\r\n";

$ma_tente = new Tente();
echo "\r\n";
$ma_tente->toString();

$Mobilhome = new Mobilhome();
echo "\r\n";
$Mobilhome->toString();

