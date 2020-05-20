<?php
require_once('ConnectionbdSwiss.php');


$db = ConnectionbdSwiss::connect();
$sql="SELECT PRA_NUM, PRA_NOM, PRA_PRENOM, PRA_ADRESSE, PRA_VILLE, PRA_CP from praticien;";

$st = $db->prepare($sql);
$st->execute(array());
$rowset = $st->fetchAll();

$vide = count($rowset)==0;

print(json_encode($rowset));
?>
