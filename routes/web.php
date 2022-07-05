<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();

$routes->add('home', new Route('/', array('controller' => 'HomeController', 'method'=>'Index')));


$routes->add('product', new Route('/Products/{id}', array('controller' => 'ProductController', 'method'=>'FindByID'), array('id' => '[0-9]+')));

