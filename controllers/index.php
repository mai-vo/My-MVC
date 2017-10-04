<?php 
$result=$app['database']->selectAll('MatHang');
// echo "<pre>";
// print_r($result);
// echo "</pre>";
require 'views/index.view.php';
?>