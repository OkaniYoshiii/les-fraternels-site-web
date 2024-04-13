
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Mods - Lootbag Delay</title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Sac de butin, Drops, Butin">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/default-mod.css">
</head>

<body class="no-js">
    
<?php require_once HTML_DIR . "/header.php"; ?>
    <main>
        <?php require_once TEMPLATE_PARTS_DIR . '/single-mod-banner.php'; ?>
        <section>
            <div class="narrow">
                <h2 id="description">Description</h2>
                <p>Les sacs du butin sont extrêmement rares et contiennent généralement de très bons items. La plupart de ces sacs sont obtenus lors des Hordes car le nombre de zombies est important ce qui permet de grandement augmenter les quantités de sacs à looter. Ceci dit, il arrive parfois que vous tuiez un zombie en début de Horde mais que le sac qu'il a laissé tomber disparaisse avant la fin de cette dernière. Frustrant n'est-il pas ? Suite à des suggestions de la part de la communauté, nous avons alors mis en place ce Mod afin de contrer ce problème, vous permettant ainsi de looter vos précieux sacs de butins sans la pression du temps.</p>
                <h3>Fonctionnalités :</h3>
                <p>Ce mod permet de rallonger la durée de vie des sacs de butin. Cette dernière passe de <b>20 minutes</b> à <b>30 minutes</b>.</p>
            </div>
        </section>
    </main>
<?php require_once HTML_DIR . "/footer.php"; ?>

</body>
</html>