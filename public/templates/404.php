<!DOCTYPE html>
<html lang="fr">

<head class="no-js">
    <?php require_once TEMPLATE_PARTS_DIR . '/metadata.php'; ?>
    <?php require_once TEMPLATE_PARTS_DIR . '/default-scripts.php'; ?>
    <?php require_once TEMPLATE_PARTS_DIR . '/favicon.php'; ?>

    <title>Erreur 404 - Page introuvable</title>
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/404.css">
</head>

<body>  

    <?php require_once TEMPLATE_DIR . '/header.php'; ?>

    <main>
        <section class="medium">
            <div class="hero">
                <h1 class="hero__title">Erreur 404 - Page introuvable</h1>
                <p class="hero__subtitle"><span>Rebrouse chemin étranger !</span><br>Je crois que tu t'es trompé d'adresse. Recule, et on ne te fera aucun mal.</p>
            </div>
            <img src="<?= SITE_URL . IMG_DIR ?>/screenshot-7daystodie-hordenight-1600x900.webp" width="1600" height="900" alt="Une capture d'écran du jeu 7 Days To Die où des joueurs pointent leurs armes vers un autre joueur lors d'une nuit de horde.">
            <p>Il semblerait que la page que vous recherchez est introuvable sur notre site ... Désolé pour vous, mais peut-être que l'on la créera dans le futur qui sais ? N'hésitez pas à nous faire vos propositions sur Discord !</p>
            <p>En attendant, pourquoi pas aller voir des pages qui existent ? Peut être que vous cherchiez :</p>
            <ul>
                <li>
                    <a href="/">Notre page d'accueil</a>
                    <p>Vous y retrouverez toutes les informations principales concernant notre serveur, son fonctionnement, nos Mods principaux et notre philosophie.</p>
                </li>
                <li>
                    <a href="/mods">Nos mods</a>
                    <p>Intéressé par nos Mods ? Ces derniers sont tous server-side, ce qui signifie que vous n'avez pas à les télécharger avant de rejoindre notre serveur ! Vous retrouverez un listing intégral de nos Mods ainsi que leur fonctionnement sur cette page/</p>
                </li>
                <li>
                    <a href="/liens-utiles">Nos liens utiles</a>
                    <p>Livemap, sites de votes, Discord et autres liens en relation avec notre serveur se retrouvent là-bas ! Pourquoi pas allez y jeter un coup d'oeil ?</p>
                </li>
                <li>
                    <a class="icon-link" href="https://discord.gg/TQZj3J8FEa" target="_blank">Notre Discord</a>
                    <p>Besoin d'un peu de convivialité n'est ce pas ? Venez siroter un petit chocolat chaud avec nous ! Promis, on ne mord pas ! Et puis, pour les introvertis, sachez que c'est aussi ici que l'on regroupe toutes nos informations principales sur le serveur et où l'on fait nos annonces concernant les changements à venir ! Que de bonnes raisons de venir !</p>
                </li>
                <li>
                    <a href="<?= SITE_URL . ASSETS_DIR ?>/CGU.odt" download>Nos mentions Légales</a>
                    <p>Hum ... Je doute que vous souhaitiez vraiment vous embêtez avec ça mais chacun est libre de faire ce qu'il veut de son temps ... Après tout, qui suis-je pour juger ? J'écris du texte pour dire que mon texte est inutile ! Mais bon, si vous cherchez les CGU, vous savez où elles sont !</p>
                </li>
                
            </ul>
        </section>
    </main>

    <?php require_once TEMPLATE_DIR . '/footer.php' ?>

</body>

</html>