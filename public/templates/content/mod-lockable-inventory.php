
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Mods - Lockable Inventory Slots</title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Mod, Inventaire, Vérouillage d'inventaire">
    <link rel="stylesheet" href="<?= CSS_DIR ?>/default-mod.css">
</head>

<body class="no-js">
    
<?php require_once HTML_DIR . "/header.php"; ?>
    <main>
        <?php require_once TEMPLATE_PARTS_DIR . '/single-mod-banner.php'; ?>
        <section>
            <div class="narrow">
                <h2 id="description">Description</h2>
                <p>7 Days To Die possède de nombreux items, objets et armes que l'on doit souvent transporter avec nous et transférer dans nos lieux de stockage. Cette étape de tri et de rangement peut sembler parfois fastidieuse mais nécessaire, nous souhaitons donc y passer le moins de temps possible. Pour cela, KhainesGB a développé un Mod permettant de faciliter le rangement de notre inventaire en permettant de vider tout notre inventaire tout en conservant les items que l'on juge nécessaire de garder tout le temps avec nous.</p>
                <h3>Fonctionnlités :</h3>
                <p>Ce mod vous permet de verrouiler des emplacements d'inventaire, que cela soit pour votre personnage ou bien pour vos véhicules. Vérouiller des emplacements d'inventaire permet de les protéger du tri automatique et de les empêcher de pouvoir être transferrés lorsque l'on utilise le bouton "Vider tout l'inventaire".</p>
                <h3>Fonctionnement :</h3>
                <p>Afin vérouiller un emplacement, il suffit de sélectionner un chiffre indiquant le nombre de slots voulant être bloqués. Le vérouillage des emplacements d'inventaire part du premier emplacement en haut à gauche pour ensuite aller vers la droite.</p>
                
                <p>Vous pourrez retrouver ce Mod sur le site "7 Days To Die Mods" à l'adresse suivante : <br><br><a href="https://7daystodiemods.com/lockable-inventory-slots/" target="_blank">https://7daystodiemods.com/lockable-inventory-slots/</a></p>
            </div>
        </section>
    </main>
<?php require_once HTML_DIR . "/footer.php"; ?>

</body>

</html>