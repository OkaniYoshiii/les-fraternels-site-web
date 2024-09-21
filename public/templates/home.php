<!DOCTYPE html>
<html lang="fr">

<head class="no-js">
    <?php require_once TEMPLATE_PARTS_DIR . '/metadata.php'; ?>
    <?php require_once TEMPLATE_PARTS_DIR . '/default-scripts.php'; ?>
    <?php require_once TEMPLATE_PARTS_DIR . '/favicon.php'; ?>

    <title>Les Fraternels</title>
    <meta name="description" content="Serveur francophone du jeu 7 Days To Die. Retrouvez ici nos projets, mods, informations sur le serveur ainsi que des liens vers notre Discord.">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, serveur mulitjoueur, francophone, jeux vidéos, gaming">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR; ?>/index.css" media="screen">
</head>

<body data-loaded="false">  

    <?php require_once TEMPLATE_DIR . '/header.php'; ?>

    <main>
        <section class="hero-banner">
            <h1 class="hero-banner__title">Le Serveur fait par<br>des joueurs, pour des<br>joueurs</h1>
            <img class="hero-banner__img" src="<?= SITE_URL . IMG_DIR ?>/screenshot-lobby-2-1920x1080.webp" alt="" width="1920" height="1080" srcset="
            <?= SITE_URL . IMG_DIR ?>/screenshot-lobby-2-1920x1080.webp 1920w,
            <?= SITE_URL . IMG_DIR ?>/screenshot-lobby-2-960x540.webp 960w" sizes="100vw">
        </section>
        <section>
            <div class="medium mods-intro">
                <div>
                    <h2>Des Mods soignés, réfléchis, construits pour et avec vous</h2>
                    <p>Nous essayons de vous proposer une expérience originale et unique tout en respectant une direction que nous aimerions donner au jeu. Les mods sont toujours au centre de nos reflexions et nécessitent une réflexion constante afin de créer la meilleure expérience possible. Une grande partie de leur évolution se fait grâce aux retours des joueurs, que cela soit directement en jeu ou pendant nos sessions de test.</p>
                </div>
                <div>
                    <img src="<?= SITE_URL . IMG_DIR; ?>/7daystodie-wallpaper-town-1440x810.webp" alt="" height="1440" width="810" srcset="
                    <?= SITE_URL . IMG_DIR; ?>/7daystodie-wallpaper-town-978x550.webp 978w,
                    <?= SITE_URL . IMG_DIR; ?>/7daystodie-wallpaper-town-756x425.webp 756w,
                    <?= SITE_URL . IMG_DIR; ?>/7daystodie-wallpaper-town-444x250.webp 444w" sizes="100vw">
                </div>
            </div>
            <div class="wide mods-preview">
                <p class="highlighted">Retrouvez ici certains de nos Mods principaux :</p>
                <div class="wide mods-images">
                <?php foreach($mods as $mod) { ?>
                    <div>
                        <a href="<?= $mod->getUri() ?>" class="legend">
                            <img class="mod-image" src="<?= SITE_URL . $mod->getThumbnail()->getSource() ?>" width="<?= $mod->getThumbnail()->getWidth() ?>" height="<?= $mod->getThumbnail()->getHeight() ?>" alt="" loading="lazy">
                            <p><?= $mod->getName()?> - par <?= $mod->getAuthor(); ?></p>
                        </a>
                    </div>
                <?php } ?>
                </div>
            </div>
        </section>
        <section class="server-infos">
            <h2 class="medium">Notre Serveur</h2>
            <div class="medium infos">
                <div>
                    <p class="infos-title">Serveur Multijoueur</p>
                    <ul>
                        <li>Une orientation <span>"Difficulté"</span> et qui met l'emphase sur <span>l'entraide</span> et <span>l'échange</span></li>
                        <li><span>20</span> slots</li>
                        <li>Un <span>lobby</span> avec des machines de vente ainsi que ces marchands</li>
                        <li>Un <span>serveur de test</span> dédié aux expérimentations sur les Mods à venir</li>
                        <li><span>Livemap</span></li>
                        <li>Serveur hébergé en <span>Allemagne</span> par <span>Gportal</span></li>
                        <li><span>Outils d'administration</span> (CSMM, CPM et ServerTools)</li>
                    </ul>
                </div>
                <hr>
                <div>
                    <p class="infos-title">Serveur Discord</p>
                    <ul>
                        <li><span>Discord</span> avec option <span>"Communauté"</span> activé</li>
                        <li>Salons dédiés aux <span>retours de bugs</span> et <span>soucis</span> rencontrés</li>
                        <li><span>Suggestions réalisables</span> concernant le contenu à venir sur le serveur</li>
                        <li>Canal dédié à <span>la vente</span> et <span>l'échange</span> entre joueurs</li>
                        <li>Salon dédié <span>aux questions</span> pour les nouveaux et anciens joueurs</li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <h2 class="medium staff-title">Une Equipe à votre écoute</h2>
            <div class="wide staff-members">
                <div>
                    <img src="<?= SITE_URL . IMG_DIR; ?>/staff-okaniyoshiii-331x331.webp" width="331" height="331" alt="Tête du zombie nommé Arlene." loading="lazy" srcset="
                        <?= SITE_URL . IMG_DIR; ?>/staff-okaniyoshiii-331x331.webp 331w,
                        <?= SITE_URL . IMG_DIR; ?>/staff-okaniyoshiii-300x300.webp 300w" sizes="(max-width: 340px) 300px, 400px">
                    <p><a href="#">OkaniYoshiii</a><br>Moddeur et gérant du site internet</p>
                </div>
                <div>
                    <img src="<?= SITE_URL . IMG_DIR; ?>/staff-bodarn-432x432.webp" width="432" height="432" alt="Tête du zombie nommé Skateboarder." loading="lazy" srcset="
                        <?= SITE_URL . IMG_DIR; ?>/staff-bodarn-432x432.webp 432w,
                        <?= SITE_URL . IMG_DIR; ?>/staff-bodarn-300x300.webp 300w" sizes="(max-width: 340px) 300px, 400px">
                    <p><a href="#">Bodarn</a><br>Administrateur des différents serveurs</p>
                </div>
                <div>
                    <img src="<?= SITE_URL . IMG_DIR; ?>/staff-anarchique-475x470.webp" width="475" height="470" alt="Un personnage de Saint's Seya (les Chevaliers du Zodiaque)." loading="lazy" srcset="
                        <?= SITE_URL . IMG_DIR; ?>/staff-anarchique-475x470.webp 475w,
                        <?= SITE_URL . IMG_DIR; ?>/staff-anarchique-300x300.webp 300w" sizes="(max-width: 340px) 300px, 400px">
                    <p><a href="#">Anarchique</a><br>Modérateur</p>
                </div>
                <div>
                    <img src="<?= SITE_URL . IMG_DIR; ?>/staff-lonemash-450x450.webp" width="" height="" alt="" loading="lazy">
                    <p><a href="#">Lonemash</a><br>Organisateur d'évenements</p>
                </div>
                <div>
                    <img src="<?= SITE_URL . IMG_DIR; ?>/staff-nantais.webp" width="" height="" alt="" loading="lazy">
                    <p><a href="#">LeNantais</a><br>Builder/Ingénieur</p>
                </div>
            </div>
            <div class="wide staff-responses">
                <div>
                    <h3>En cas de problèmes :</h3>
                    <p>Que cela soit sur Discord ou in-game, il existe de nombreuses manières de nous contacter :</p>
                    <ul>
                        <li>créer un Ticket sur Discord en nous exposant votre problème</li>
                        <li>utiliser le Forum "bugs-souçis" en créant un Post nous exposant votre problèmes</li>
                        <li>vous pouvez aussi nous en parler directement lorsque nous passons dans les salons vocaux
                        </li>
                    </ul>
                    <h3>Des suggestions ? </h3>
                    <p>Nous sommes aussi ouverts à tout type de suggestions que cela soit concernant les Mods, le
                        serveur in-game ou le serveur Discord. Cependant, notre vision de jeu et la direction que nous
                        souhaitons donner au serveur prime sur le reste. Des suggestions de modifications qui faciliter
                        le jeu directement ou indirectement alors que nous cherchons à augmenter la difficulté ne sont
                        donc pas pertinentes pour nous.</p>
                </div>
                <div>
                    <img src="<?= SITE_URL . IMG_DIR; ?>/screenshot-discord-956x622.webp" width="956" height="622" alt="Une capture d'écran du serveur Discord des Fraternels." loading="lazy" srcset="
                    <?= SITE_URL . IMG_DIR; ?>/screenshot-discord-956x622.webp 956w,
                    <?= SITE_URL . IMG_DIR; ?>/screenshot-discord-450x293.webp 450w">
                </div>
            </div>
        </section>
    </main>

    <?php require_once TEMPLATE_DIR . '/footer.php' ?>

</body>

</html>