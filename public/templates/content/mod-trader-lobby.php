
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Mods - Trader Lobby</title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Traders, Marchands, Lobby">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/default-mod.css">
</head>
<body class="no-js">
    
<?php require_once HTML_DIR . "/header.php"; ?>
    <main>
        <?php require_once TEMPLATE_PARTS_DIR . '/single-mod-banner.php'; ?>
        <section class="narrow">
            <h2>Description</h2>
            <p class="mod-description"><?= $mod->getDescription(); ?></p>
            <h3>Fonctionnalité :</h3>
            <p>Empêche les Marchands de proposer des Quêtes afin d'éviter des montées en expérience trop élevées et éviter un regroupement trop important de joueur autour du Lobby.</p>
        </section>
    </main>
<?php require_once HTML_DIR . "/footer.php"; ?>

</body>
</html>