<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'mysqli.php';


$db=new DB;
$query='Select * qFROM teams LIMIT 0,  1';

$queryResult=$db->sqlQuery($query);
echo "Num Rows: ".$db->numrows;
$db->getResults();