<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once TEMPLATE_PARTS_DIR . '/metadata.php'; ?>
    <?php require_once TEMPLATE_PARTS_DIR . '/default-scripts.php'; ?>
    <?php require_once TEMPLATE_PARTS_DIR . '/favicon.php'; ?>
    <title>Mods - <?= $mod->getName() ?></title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Mod, Difficulté, Choix de la difficulté">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/default-mod.css">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/mod-difficulty.css">
</head>

<body class="no-js">
    <?php require_once TEMPLATE_DIR . "/header.php"; ?>
    <main>
        <?php require_once TEMPLATE_PARTS_DIR . '/single-mod-banner.php'; ?>
        <section>
            <div class="narrow">
                <h2 class="text-centered" id="description">Description</h2>
                <p class="mod-description"><?= $mod->getDescription(); ?></p>
                <h3 id="choisir-une-difficulté-de-départ">Choisir une Difficulté</h3>
                <p>En début de partie, vous aurez un objet dans votre inventaire appelé <b>Ticket du Marchand</b>. Ce dernier peut être utilisé afin de lancer une quête vous demandant de rejoindre n'importe quel marchand.</p>
                <div class="gallery">
                    <div class="gallery__item">
                        <img src="<?= SITE_URL . IMG_DIR ?>/mod-difficulty-1-1920x1080.webp" alt="Une capture d'écran de la barre d'objets d'un joueur en début de partie. On peut voir qu'il possède un ticket du marchand.">
                    </div>
                    <div class="gallery__item">
                        <img src="<?= SITE_URL . IMG_DIR ?>/mod-difficulty-3-1920x1080.webp" alt="Une capture d'écran de l'indicateur du début d'une quête lorsque le ticket est utilisé.">
                    </div>
                </div>
                <p>Une fois le marchand atteint, celui vous proposera un lot de pilules de différentes couleurs permettant de modifier certaines statistiques de votre personnage :</p>
                <ul class="pills-list">
                    <li>Les <b>pilules vertes</b> sont destinées à rendre le jeu <b>plus facile</b> (diminution des dégâts reçus, et augmentation des dégâts infligés) mais <b>réduisent la quantité d'expérience reçue</b> en contrepartie.</li>
                    <li>Les <b>pilules rouges</b> sont destinées à rendre le jeu <b>plus difficile</b> (augmentation des dégâts reçus, et réduction des dégâts infligés) mais <b>augmentent la quantité d'expérience reçue</b> en contrepartie.</li>
                    <li>La <b>pilule restante</b> a pour but de <b>réinitialiser vos bonus/malus</b> si vous aviez déjà pris une autre pilule.</li>
                </ul>
                <img src="<?= SITE_URL . IMG_DIR ?>/mod-difficulty-2-1920x1080.webp" alt="Une capture d'écran de l'inventaire du personnage. Ce dernier contient l'ensemble des pilules utilisables pour changer de difficulté.">
                <p><b>NOTE :</b> une fois votre choix fait, le marchand vous redonnera un Ticket du Marchand vous permettant de choisir à nouveau une difficulté. Vous pouvez faire cela indéfiniment <b>jusqu'au niveau 15</b></p>
            </div>
        </section>
    </main>
    <?php require_once TEMPLATE_DIR . "/footer.php"; ?>
</body>

</html>