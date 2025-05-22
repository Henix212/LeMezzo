<?php

namespace Router;

use Controllers\MenuController;

use Controllers\Router\Route\RouteMenu;

use Route\RouteMap;
use Route\RouteMonster;

class Router {
    private array $routeList = [];
    private array $ctrlList = [];
    private string $actionKey;

    public function __construct(string $nameOfActionKey = "action") {
        $this->actionKey = $nameOfActionKey;
        $this->createControllerList();
        $this->createRouteList();
    }

    /**
     * Summary of createControllerList
     * Crée plein de controlleur pour chaque route
     * Cette fonction sert à créer une liste de controlleurs
     */
    private function createControllerList() {
        $this->ctrlList = [
            "menu" => new MenuController(),
        ];
    }

    /**
     * Summary of createRouteList
     * Crée plein de route pour chaque controlleur
     * Cette fonction sert à créer une liste de routes
     */
    private function createRouteList() {
        $this->routeList = [
            "menu" => new RouteMenu($this->ctrlList["menu"]),
        ];
    }

    /**
     * Summary of routing
     * Cette fonction sert à router les requêtes. Elle récupére les données GET 
     * et POST et nous envoye ver la route correspondante à l'action de notre
     * URL
     * @param array $get
     * @param array $post
     * @return mixed
     */
    public function routing(array $get =[], array $post = []) {
        $action = $get[$this->actionKey] ?? "menu"; /* Récupère l'action de l'URL */
        $method = !empty($post) ? "POST" : "GET"; /* Détermine la méthode de la requête */
        $param = $method === "GET" ? $get : $post; /* Détermine les paramètres de la requête à transmettre*/

        // Error handling
        // if (!array_key_exists($action, $this->routeList)) {
        //     $action = "err";
        //     $param = ["err_type" => "404"];
        // }
        // elseif ($action != "auth" && $action != "map" && !(isset($_SESSION["connected"]) ?? false)) {
        //     $action = "err";
        //     $param = ["err_type" => "401"];
        // }

        return $this->routeList[$action]->action($param, $method);
    }
}
