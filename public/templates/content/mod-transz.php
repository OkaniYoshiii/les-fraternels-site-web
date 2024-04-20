<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php require_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php require_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Mods - <?= $mod->getName() ?></title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Mod, Bus, Téléportation, Transport">
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
                <p>Disseminés sur différents points de la carte, des arrêts de bus permettent de vous transporter d'un Biome spécifique jusqu'au Lobby instantanément.</p>
                <p>Pour cela, il vous suffit de vous placer sur le <b>banc de gauche d'un arrêt de bus</b> et vous serez téléportés directement vers le Lobby.</p>
                <h3>Emplacement des arrêts de bus :</h3>
                <p>Concernant les différents arrêts de bus, sur la partie qui se déroule à l'heure où j'écrit ces lignes (<time datetime="2023-10-18">18/10/2023</time>), les arrêts de bus se trouvent aux emplacements suivants</p>
                <ul>
                    <li>🚏  Les arrêts <b>Lobby </b>se trouvent sur le coté gauche de celui-ci</li>
                    <li>🚏  L'arrêt <b>Forêt</b> se trouve en : 2475 ouest, 3643 sud</li>
                    <li>🚏  L'arrêt <b>Désert</b> se trouve en : 1087 ouest, 669 nord</li>
                    <li>🚏  L'arrêt <b>Wasteland </b>se trouve en : 1874 Est , 2703 nord</li>
                </ul>
                <h3>Précautions d'emploi :</h3>
                <p>Cette nouvelle technologie arrive aussi avec son lot de restrictions pour le bien de tout les passagers :</p>
                <ul>
                    <li>On ne prend pas le bus à bord de son véhicule personnel</li>
                    <li>On ne tente pas de resquillé les entrées. Le bus étant gratuit celle-là n'est pas nécessaire ! En d'autres termes on n'y viens pas accompagné des poivrots du coin 🧟</li>
                    <li>Par respect des lieux et du personnel, on ne tente pas de détruire ou démonter quoi que ce soit appartenant à la société TransZ</li>
                    <li>On sourit au chauffeur et on lui dis merci</li>
                    <li>Les pourboires ne sont pas acceptés 😉</li>
                </ul>
                <p>TransZ 🚌  vous souhaite un agréable voyage sur ses lignes.</p>
            </div>
        </section>
    </main>
<?php require_once HTML_DIR . "/footer.php"; ?>

</body>
</html>