
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Mods - Trader Lobby</title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Traders, Marchands, Lobby">
    <link rel="stylesheet" href="<?= CSS_DIR ?>/default-mod.css">
</head>
<body class="no-js">
    
<?php require_once HTML_DIR . "/header.php"; ?>
    <main>
        <?php require_once TEMPLATE_PARTS_DIR . '/single-mod-banner.php'; ?>
        <section class="narrow">
            <h2>Description</h2>
            <p>Avec l'arrivée du Lobby créé par majoritairement par Bodarn et aidé par quelques membres de la communauté, est arrivé un nouveau problème : avec 3 Marchands présents dans le Lobby, il était alors possible de faire des quêtes de manière infinie en variant les différents Marchands ce qui permettait une montée en expérience accrue qui ne convient pas à la vision que nous avons du jeu. Les joueurs avaient aussi tendance a se regrouper tout autour du Lobby crééant des problèmes avec le spawn de zombies et rendant une bonne partie de la carte innexploitée. Il a donc été décidé de réguler ça en modifiant les Marchands du Lobby pour que ces derniers ne puissent plus fournir de Quêtes.</p>
            <h3>Fonctionnalité :</h3>
            <p>Empêche les Marchands de proposer des Quêtes afin d'éviter des montées en expérience trop élevées et éviter un regroupement trop important de joueur autour du Lobby.</p>
        </section>
    </main>
<?php require_once HTML_DIR . "/footer.php"; ?>

</body>
</html>