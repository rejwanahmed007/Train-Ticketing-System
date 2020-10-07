<?php
require_once('../db/functions.php');

$trainno = $_POST['trainno'];
$name = $_POST['name'];
$offday = $_POST['offday'];
$departurestation = $_POST['departurestation'];
$departuretime = $_POST['departuretime'];
$arrivalstation = $_POST['arrivalstation'];
$arrivaltime = $_POST['arrivaltime'];
$routetype = $_POST['routetype'];
$capacity = $_POST['capacity'];
$standard = $_POST['standard'];
$priceperstandard = $_POST['priceperstandard'];
$economy = $_POST['economy'];
$pricepereconomy = $_POST['pricepereconomy'];
$firstclass = $_POST['firstclass'];
$priceperfirstclass = $_POST['priceperfirstclass'];

$traininfo = addtrain($trainno,$name,$offday,$departurestation,$departuretime,$arrivalstation,$arrivaltime,$routetype,$capacity,$standard,$priceperstandard,$economy,$pricepereconomy,$firstclass,$priceperfirstclass);

$traininfo = json_encode($traininfo);
echo $traininfo;

?>