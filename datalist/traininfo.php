<?php
require_once('../db/functions.php');
$traininfo = gettraininfo();
$traininfo = json_encode($traininfo);
echo $traininfo;
?>