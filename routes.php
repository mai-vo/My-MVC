<?php 

$router->get('','controllers/index.php');
$router->get('about','controllers/about.php');
$router->get('about/culture','controllers/about-culture.php');
$router->get('names','controllers/add-name.php');
$router->post('names','controllers/add-name.php');


echo $_SERVER['REQUEST_METHOD'];
?>