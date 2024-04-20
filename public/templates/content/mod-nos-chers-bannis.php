
<!DOCTYPE html>
<html lang="fr">
<head>
<?php include_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Mods - Nos chers bannis</title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Nos chers bannis, Bannis, Ban, Exclusion">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/default-mod.css">
</head>
<body class="no-js">
    
<?php require_once HTML_DIR . "/header.php"; ?>
    <main>
        <?php require_once TEMPLATE_PARTS_DIR . '/single-mod-banner.php'; ?>
        <section>
            <div class="narrow">
                <h2>Description</h2>
                <p class="mod-description"><?= $mod->getDescription(); ?></p>
                <h3>Fonctionnalités :</h3>
                <p>Les zombies ont désormais un nom affiché lorsque vous les visez. Ces noms correspondent aux différentes personnes ayant tenté d'aller à l'encontre des règles du serveur. Plus la faute est grave, plus le zombie est dégueu, puant et immonde !</p>
                <img src="<?= SITE_URL . IMG_MODS_DIR ?>/mod-thumbnail-banrewind-min-1920x1080.webp" width="1920" height="1080" alt="Un groupe de 3 zombies attaquant un joueur. Les zombies ont un nom de joueur ayant été banni affiché au dessus de leur tête.">
            </div>
        </section>
    </main>
<?php require_once HTML_DIR . "/footer.php"; ?>

</body>
</html>