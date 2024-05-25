<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once TEMPLATE_PARTS_DIR . '/metadata.php'; ?>
    <?php require_once TEMPLATE_PARTS_DIR . '/default-scripts.php'; ?>
    <?php require_once TEMPLATE_PARTS_DIR . '/favicon.php'; ?>
    <title>Mods - <?= $mod->getName() ?></title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Stack, Munitions, Quantité de munitions">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/default-mod.css">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/mod-stack-munitions.css">
</head>
<body class="no-js">
    
<?php require_once TEMPLATE_DIR . "/header.php"; ?>
    <main>
        <?php require_once TEMPLATE_PARTS_DIR . '/single-mod-banner.php'; ?>
        <section>
            <div class="narrow">
                <h2>Description</h2>
                <p class="mod-description"><?= $mod->getDescription(); ?></p>
                <h3>Fonctionnalités :</h3>
                <p>Les stacks sont donc réglés par puissance désormais.</p>
                <img src="<?= SITE_URL . IMG_MODS_DIR ?>/mod-stack-changes-inventory-537x343.webp" width="537" height="343" alt="Un inventaire contenant chaque type de balles du jeu ett où l'on peut voir les nouvelles valeurs pour chaque pile de munition.">
                <p>Je vous met une comparatif des stack en dessous :</p>
            </div>
            <div class="medium tables">
                <table>
                    <caption>Stacks Vanilla</caption>
                    <thead>
                        <tr>
                            <th>Munition</th>
                            <th>Taille du stack</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Munition 9mm</th>
                            <td>300</td>
                        </tr>
                        <tr>
                            <th>Munition 7.62mm</th>
                            <td>150</td>
                        </tr>
                        <tr>
                            <th>Munition .44 Magnum</th>
                            <td>300</td>
                        </tr>
                        <tr>
                            <th>Cartouche Fusil à Pompe</th>
                            <td>150</td>
                        </tr>
                        <tr>
                            <th>Flèches et carreaux</th>
                            <td>150</td>
                        </tr>
                        <tr>
                            <th>Muntition de tourelle</th>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <th>Muntition de Lance Roquettes</th>
                            <td>20</td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <caption>Stacks Modifiés</caption>
                    <thead>
                        <tr>
                            <th>Munition</th>
                            <th>Taille du stack</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Munition 9mm</th>
                            <td><b>250</b></td>
                        </tr>
                        <tr>
                            <th>Munition 7.62mm</th>
                            <td><b>200</b></td>
                        </tr>
                        <tr>
                            <th>Munition .44 Magnum</th>
                            <td><b>150</b></td>
                        </tr>
                        <tr>
                            <th>Cartouche Fusil à Pompe</th>
                            <td>150</td>
                        </tr>
                        <tr>
                            <th>Flèches et carreaux</th>
                            <td>150</td>
                        </tr>
                        <tr>
                            <th>Muntition de tourelle</th>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <th>Muntition de Lance Roquettes</th>
                            <td>20</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main> 
<?php require_once TEMPLATE_DIR . "/footer.php"; ?>

</body>
</html>