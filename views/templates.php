<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./public/css/teamplate.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->e($title)?></title>
</head>
<body>
    <header>
        <div class="header-flex">
            <nav class="navbar">
                <!-- Créaion des lien/ boutton clicable qui modifierons l'URL avec une action pour le routeur-->
                <a class = "le_mezzo_name" href="index.php?action=LeMezzo">Le Mezzo</a>
                <a class="reserver_table" href="index.php?action=reserver">Réserver</a>
                <button class = toggle_menu>Menu</button>
            </nav>
        </div>
    </header>
    <main id="contenu">
    <?= $this->section('content')?>
    </main>
</body>
</html>