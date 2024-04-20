<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Mods - <?= $mod->getName() ?></title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Mod, Récompenses, Votes, Cadeaux">
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
                <p>Le système de récompenses pour les votes est divisé en deux parties :</p>
                <ul>
                    <li>Les votes individuels</li>
                    <li>Les votes collectifs</li>
                </ul>
                <h4>Votes individuels :</h4>
                <p>Concernant les votes individuels, les récompenses seront attribuées à chaque joueur ayant effectué <b>10 votes sur TopServeur</b> ou <b>tout les votes sur 7 Days To Die Server List</b></p>
                <p>Les récompenses pourront être réclamées toutes les semaines et vous serons directement envoyées en jeu.</p>
                <p>En guise de récompenses, vous recevrez une boite contenant de nombreux items de manières aléatoire (munitions, objets de décoration, nourriture ...); Ces boites n'ont pas pour but de vous booster de manière extrême et sont juste sensées vous aider un petit peu. Notre but est de vous récompenser et non de rendre le jeu facile.</p>
                <h4>Votes collectifs :</h4>
                <p> Chaque mois le total de votes accumulés débloquera un palier sur les 3 que nous avons créé :</p>
                <ul>
                    <li>Palier 1 : 450 votes</li>
                    <li>Palier 2 : 800 votes</li>
                    <li>Palier 3 : 1500 votes</li>
                </ul>
                <p>A la fin du mois, des récompenses seront décernées à tout les joueurs ayant voté <b>au minimum 30 fois sur le mois</b>. Les récompenses varieront en fonction du palier atteint évidemment et elles seront différentes des récompenses individuelles.</p>
                <h4>Comment voter ?</h4>
                <p> Pour effectuer vos votes vous avez les sites suivants : </p>
                <dl>
                    <dt><a href="https://top-serveurs.net/7-days-to-die/fraternels" target="_blank">Top Serveur</a></dt>
                    <dd>Possibilité si vous le souhaitez de voter toutes les 2 heures IRL. Merci de mettre votre pseudo IG afin qu'on puisse vous identifier et vous récompenser 😉 Seulement deux comptes seront comptabilisés. Exemple : Bodarn et Bodarn1</dd>
                    <dt><a href="https://7daystodie-servers.com/server/116469/" target="_blank">7 Days To Die Server List</a></dt>
                    <dd>Possibilité de voter qu'une fois par 24 heures demande d'être loggé à Steam.</dd>
                </dl>
                <p> Voilà merci d'avoir lu ce pavé 😉</p>
            </div>
        </section>
    </main>
<?php require_once HTML_DIR . "/footer.php"; ?>

</body>

</html>