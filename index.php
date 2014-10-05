<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'mysqli.php';


$db=DB::getConnection();
$query='Select * FROM teams';

$queryResult=DB::sqlQuery($query);