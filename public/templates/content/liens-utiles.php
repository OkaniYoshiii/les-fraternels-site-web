<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php require_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php require_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Liens Utiles</title>
    <meta name="description" content="Retrouvez ici tout les liens vers nos différentes plateformes comme Discord, TopServeurs, 7DaysToDieServer ou encore les liens vers nos livempas.">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Livemap, Site de vote, Discord">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/liens-utiles.css">
</head>
<body data-javascript-enabled="false">
    
<?php require_once HTML_DIR . "/header.php"; ?>
    <main>
        <section>
            <div class="narrow">
                <h1>Liens utiles</h1>
                <section>
                    <h2>Discord</h2>
                    <p>C'est tout le coeur du serveur, c'est à la fois ici où l'on fait les différentes annonces, où l'on discute et où les joueurs peuvent nous contacter en cas de problèmes. C'est aussi l'endroit permettant de faire des suggestions pour le serveur, discuter des changement mis en place et être informés des changements qui sont réalisés tout le long de votre partie.</p>
                    <img src="<?= SITE_URL . IMG_OTHERS_DIR ?>/discord-1920x1035.webp" width="1920" height="1035" alt="">
                    <p>Vous pourrez nous retrouver sur Discord à grâce au lien d'invitation suivant : <a href="https://discord.gg/pyMeqh728M" target="_blank">https://discord.gg/pyMeqh728M</a></p>
                </section>
                <section>
                    <h2>Livemap</h2>
                    <p>Les livemaps sont des représentations en temps réel de la carte d'un serveur. Elles peuvent permettre de vous localiser, de déterminer les emplacements des villes et bâtiments proches, permettent de retrouver vos véhicules en cas de problèmes et permettent d'identifier les emplacements des "Reset Zone", zones qui régénèrent les blocs détruits au bout d'un certain interval de temps ou lors d'une manipulation manuelle effectuée par l'administrateur du serveur.</p>
                    <p>Nous disposons de 2 livemaps actuellement et chacune d'elles ont des rôles différents :</p>
                    <h3>Live map N°1</h3>
                    <img src="<?= SITE_URL . IMG_OTHERS_DIR ?>/livemap-1-1878x932.webp" width="1878" height="932" alt="">
                    <p>Cette carte permet de vous localiser en temps réel, de voir l'heure et le jour du serveur, afficher le nombre de joueurs actuellement connectés et permet de voir l'emplacement de vos zones de revendication.</p>
                    <p>Vous pourrez la retrouver à l'adresse suivante : <a href="http://176.57.168.125:8142/" target="_blank" rel="noopener">http://176.57.168.125:8142/</a></p>
                    <h3>Live map N°2</h3>
                    <img src="<?= SITE_URL . IMG_OTHERS_DIR ?>/livemap-2-1880x933.webp" width="1880" height="933" alt="">
                    <p>Cette deuxième carte quant à elle permet principalement de déterminer l'emplacement de vos véhicules lorsque ces derniers sont victimes d'un bug ou que vous les avez perdus pour n'importe quelle raison que ce soit.</p>
                    <p>Vous pourrez la retrouver à l'adresse suivante : <a href="http://176.57.168.125:8143/" target="_blank" rel="noopener">http://176.57.168.125:8143/</a></p>
                </section>
                <section>
                    <h2>Sites de Votes</h2>
                    <p>Les sites de votes permettent aux différents serveurs, que cela soit sur 7 Days To Die ou non, d’acquérir une sorte de notoriété auxprès d’autres joueurs. Cela permet donc, sur le long terme, de ramener une plus grande masse de joueur sur son serveur et éviter qu’il ne se vide de ses joueurs sans en recevoir de nouveaux en retour. C’est donc un invesstissement demandé par les administrateurs aux joueurs afin de maitenir le serveur à flot.</p>
                    <p>Sur 7 Days To Die, il existe principalement 2 sites de vote qui sont TopServeurs et 7DaysToDieServers. Les sites de votes ont généralement une limite quotidienne au nombre de votes pouvant être effectués par chaque joueurs ceci afin d’éviter les abus de personnes qui pourraient voter en boucle pour leur propre serveur. Les limites des deux sites mentionnés plus haut sont complétement différentes ...</p>
                    <p>Voici donc le détail concernant les deux méthodes de votes mises à votre disposition pour soutenir notre serveur : </p>
                    <h3>TopServeurs</h3>
                    <img src="<?= SITE_URL . IMG_BRANDS_DIR ?>/brand-topservers-900x442.webp" width="900" height="442" alt="">
                    <p>Top serveur est LE site de vote le plus utilisé par les joueurs. Il regroupe énormément de jeux multijoueurs et est aussi le site de vote où il est le plus simple de voter : pas de compte à créer ou à relier, vous cliquez sur voter, un pseudo facultatif est demandé et voila.</p>
                    <p>C’est aussi le site qui permet de voter le plus fréquemment (1 fois toutes les deux heures). Vous avez aussi la possibilité de laisser un avis avec un message ou alors vous pourrez aussi “réagir” en attribuant un emoji au serveur en fonction de ce que vous en avez pensé.</p>
                    <p>Lien vers notre page TopServeurs : <a href="https://top-serveurs.net/7-days-to-die/fraternels" target="_blank" rel="noopener">https://top-serveurs.net/7-days-to-die/fraternels</a></p>
                    <h3>7DaysToDieServers</h3>
                    <img src="<?= SITE_URL . IMG_BRANDS_DIR ?>/brand-7daystodie-servers-896x443.webp" width="896" height="443" alt="">
                    <p>7DaysToDieServers est un site de vote uniquement concentré sur 7 Days To Die. Il permet de voter une fois toutes les 24h et force les utilisateurs à se connecter à leurs comptes Steam afin de pouvoir voter. La manipulation pour voter est donc plus longue, mais demande d’être réalisée moins souvent. Il est donc assez facile de soutenir un serveur sur ce site car vous ne devrez voter qu’une fois par jour pour faire une différence avec d’autres serveurs.</p>
                    <p>Lien vers notre page 7DaysToDieServers : <a href="https://7daystodie-servers.com/server/116469/" target="_blank" rel="noopener">https://7daystodie-servers.com/server/116469/</a></p>
                </section>
            </div>
        </section>
    </main>
    
    <?php require_once HTML_DIR . "/footer.php"; ?>
</body>
</html>