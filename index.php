<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'mysqli.php';


$db=new DB;
$query='Select * FROM '.DB::$_prefix.'teams LIMIT  1';

$queryResult=$db->rawQuery($query);

/*Fetch rs by specific columns*/
$columns=array('t_name');
$limitFrom=1;
$limitTo=5;
$tableName='teams';
echo DB::$_prefix;
$db->selectQuery($tableName, $columns,$limitFrom,$limitTo);

//echo "Num Rows: ".$db->numrows;
//$db->getResults();