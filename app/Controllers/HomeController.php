<?php 

namespace App\Controllers;


use Symfony\Component\Routing\RouteCollection;

class HomeController
{
    public function Index(RouteCollection $routes)
    {
        require_once APP_ROOT . '/views/home.php';
    }


}