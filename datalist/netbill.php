<?php
require_once('../db/functions.php');
$from = $_POST['from'];
$to = $_POST['to'];
$netbill=netbill($from,$to);
$netbill = json_encode($netbill);
echo $netbill;
?>