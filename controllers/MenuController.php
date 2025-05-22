<?php

namespace Controllers;

use Config\Config;
use League\Plates\Engine;

class MenuController
{
    //
    //  Variables d'instance
    //
    private Engine $template;

    //
    //  Constructor
    //
    public function __construct()
    {
        $this->template = new Engine("views");
    }

    //
    //  Methods
    //

    public function displayConnectionPage(string $message = ""): void
    {
        echo $this->template->render("menuView", ["msg" => $message]);
    }
}
