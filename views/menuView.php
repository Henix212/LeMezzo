<?php

namespace Views;

use Config\Config;

?>

<?php $this->layout('templates', ["title" => Config::get("title")])?>

<link rel="stylesheet" href="public/css/menuView.css">
<script src="public/js/menuView.js"></script>

<div id="splash">
    <img src="public/images/LeMezzo.png" id="temp-fullscreen-img" alt="" class="temp-fullscreen-img">
</div>
<div id="main-content" style="display:none;">
    <!-- Ton vrai contenu ici -->
</div>


