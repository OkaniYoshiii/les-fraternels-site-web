<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once TEMPLATE_PARTS_DIR . '/metadata.php'; ?>
    <?php require_once TEMPLATE_PARTS_DIR . '/default-scripts.php'; ?>
    <?php require_once TEMPLATE_PARTS_DIR . '/favicon.php'; ?>
    <title>Mods - <?= $mod->getName() ?></title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Mod, Compagnon, Mod chien">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/default-mod.css">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/mod-compagnon.css">
</head>

<body data-javascript-enabled="false">
<?php require_once TEMPLATE_DIR . "/header.php"; ?>
    <main>
        <?php require_once TEMPLATE_PARTS_DIR . '/single-mod-banner.php'; ?>
        <section class="narrow">
            <h2 id="description">Description</h2>
            <p><?= $mod->getDescription() ?></p>
            <h2>Comment obtenir le précieux toutou :</h2>
            <p>Afin d'obtenir votre compagnon, vous devrez d'abord trouver un petit chiot caché dans les différentes <b>niches pour chien</b> présentes dans le monde. En fouillant ces dernières, vous aurez une chance de trouver :</p>
            <ul>
                <li>De la Viande crue (35% de chance)</li>
                <li>Des Os (50% de chance)</li>
                <li>Un Chiot (15% de chance)</li>
            </ul>
            <div class="gallery gallery--with-caption">
                <div class="gallery__item">
                    <img class="gallery__item-img"src="<?= SITE_URL . IMG_DIR ?>/mod-compagnon-doghouse-1920x1080.webp" width="1920" height="1080" alt="Un bloc Niche de chien dans le jeu 7 Days To Die.">
                    <p class="gallery__item-caption">Niches de chien à fouiller</p>
                </div>
                <div class="gallery__item">
                    <img class="gallery__item-img"src="<?= SITE_URL . IMG_DIR ?>/mod-thumbnail-compagnon-1-1920x1080.webp" width="1920" height="1080" alt="L'inventaire du joueur montrant la description et l'icone du chien">
                    <p class="gallery__item-caption">Chiot une fois looté</p>
                </div>
            </div>
            <h2>Elevage :</h2>
            <p>Une fois recueilli, il vous faudra le nourrir. Cependant, il est possible d'avoir plusieurs espèces de chien avec, pour chacun, ses bonus spécifiques :</p>
            <ul class="dogs-list">
                <li class="dogs-list__item">
                    <h3 class="dogs-list__item-title">Stanley</h3>
                    <ul>
                        <li>Détecte les zombies proches</li>
                        <li>Armure : +5</li>
                        <li>Vitesse de course : +10%</li>
                        <li>Consommation d'endurance (course) : -10%</li>
                    </ul>
                </li>
                <li class="dogs-list__item">
                    <h3 class="dogs-list__item-title">Lucky</h3>
                    <ul>
                        <li>Détecte les zombies proches</li>
                        <li>Armure : +5</li>
                        <li>Bonus de butin : +15</li>
                        <li>Récupération de ressource (mécanique) : +20%</li>
                    </ul>
                </li>
                <li class="dogs-list__item">
                    <h3 class="dogs-list__item-title">Maurice</h3>
                    <ul>
                        <li>Détecte les zombies proches</li>
                        <li>Armure : +5</li>
                        <li>Récupération de ressource (bois) : +30%</li>
                        <li>Récupération de ressource (minage) : +30%</li>
                    </ul>
                </li>
                <li class="dogs-list__item">
                    <h3 class="dogs-list__item-title">Tanguy</h3>
                    <ul>
                        <li>Détecte les zombies proches</li>
                        <li>Armure : +5</li>
                        <li>Dégâts reçus : -20%</li>
                    </ul>
                </li>
                <li class="dogs-list__item">
                    <h3 class="dogs-list__item-title">Krock</h3>
                    <ul>
                        <li>Détecte les zombies proches</li>
                        <li>Dégâts infligés : +20%</li>
                    </ul>
                </li>
            </ul>
            <img src="<?= SITE_URL . IMG_DIR ?>/mod-thumbnail-compagnon-2-1920x1080.webp" width="1920" height="1080" alt="La recette permettant de fabriquer l'un des chiens présent dans le mod.">
            <h2>Et le chien "Fraternels" dans tout ça ?</h2>
            <p>Permettant de regrouper les pouvoirs de 5 chiens précédents, le chien "Fraternels" est le plus puissant de tous les chiens :</p>
            <ul>
                <li>Possède tous les bonus des autres chiens</li>
                <li>Bonus d'expérience (élimination) : +10%</li>
                <li>Bonus de marchandage (vente/achat) : +30%</li>
                <li>Point de vie supplémentaire : +50</li>
            </ul>
            <h2>Une fois élévé :</h2>
            <p>Une fois l'un des toutous crafté, vous pourrez l'équiper sur vos Jambières afin de pouvoir bénéficier de ses bonus.</p>
            <p>Le mod permet d'ailleurs de voir réellement le chien à vos côtés ! Montez dans un véhicule et vous verrez votre magnifique toutou vous suivre dans vos aventures.</p>
            <p>A vos pâtées 🐶</p>
            <h2>Où retrouver ce Mod ?</h2>
            <p>Vous pourrez retrouver le Mod sur le Site "7 Days To Die Mods" à l'adresse suivante : <br><br><a href="https://7daystodiemods.com/blewbarry-pup/" target="_blank">https://7daystodiemods.com/blewbarry-pup/</a></p>
        </section>
    </main>
<?php require_once TEMPLATE_DIR . "/footer.php"; ?>
</body>

</html>