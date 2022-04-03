<?php
require_once 'database.php';

$test = new database();

//$ins = $test->insert(['name'=>'ait si abou']);

$res = $test->selectAll("test");

//echo '<br>';
echo '<pre>';
echo print_r($res);
echo '</pre>';



//echo $ins;
