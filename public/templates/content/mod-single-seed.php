<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php require_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php require_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Mods - <?= $mod->getName() ?></title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Mod, Arbres, Pousses, Graines">
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
                <p>En vanilla, un arbre abbatu par n'importe quel arme ou outil <b>fournit 2 graines</b> au joueur. <br><br>Avec ce Mod, vous n'obtiendrez qu'<b>une seule graine</b> ce qui fait que le nombre d'arbres présent sur le serveur sera toujours constant empêchant ainsi que le serveur devienne innondé d'arbres et que les performances de ce dernier n'en prennent un coup.</p>
                <img src="/images/mods/mod-thumbnail-single-tree-min-1920x1080.webp" width="1920" hieght="1080" alt="Quelques arbres dans une forêt enneigée.">
            </div>
        </section>
    </main>
<?php require_once HTML_DIR . "/footer.php"; ?>

</body>
</html>