<?php

namespace Controllers\Router\Route;

use Controllers\MenuController;
use Router\Route;

use Exception;

class RouteMenu extends Route {
    //
    //  Instance varaibles
    //
    private MenuController $menuController;

    //
    //  Constructor
    //
    public function __construct(MenuController $menuController) {
        $this->menuController = $menuController;
    }

    //
    //  Method
    //

    public function get(array $param = [])  : void{
        $this->menuController->displayConnectionPage();
    }

    public function post(array $param = [])  : void{
        
    }
}
