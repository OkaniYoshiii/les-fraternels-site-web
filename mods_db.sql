-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 20 avr. 2024 à 14:26
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mods_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `authors`
--

INSERT INTO `authors` (`id`, `name`) VALUES
(1, 'OkaniYoshiii'),
(2, 'Arcueid-Gray Sage'),
(3, 'ShoudenKalferas'),
(4, 'KhainesGB'),
(5, 'Kanaverum'),
(6, 'Bodarn'),
(7, 'iSneakyPewPew'),
(8, 'Eihwaz');

-- --------------------------------------------------------

--
-- Structure de la table `mods`
--

DROP TABLE IF EXISTS `mods`;
CREATE TABLE IF NOT EXISTS `mods` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `uri` varchar(50) NOT NULL,
  `release_date` date NOT NULL,
  `is_used` tinyint(1) NOT NULL,
  `thumbnail_id` int DEFAULT NULL,
  `author_id` int NOT NULL,
  `is_main_mod` tinyint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `thumbnail_id` (`thumbnail_id`),
  KEY `author_id` (`author_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `mods`
--

INSERT INTO `mods` (`id`, `name`, `description`, `uri`, `release_date`, `is_used`, `thumbnail_id`, `author_id`, `is_main_mod`) VALUES
(1, 'Difficulté ajustable', 'La difficulté imposée par les réglages d\'un serveur peut parfois sembler frustrante. Elle nous empêche de profiter de l\'ambiance, du STAFF ou des évenements mis en place sur ce dernier tout simplement pour un simple problème de dégâts reçus et dégâts infligés. Nous avons alors essayé de vous proposer une alternative vous permettant de profiter du serveur malgré tout ! Vous aurez donc la possibilité de choisir votre propre difficulté afin de vous créer l\'expérience qui vous convient le mieux.', '/mods/difficulty', '2023-06-17', 1, 2, 1, 1),
(2, 'Compagnon', 'Qui n\'a jamais rêvé d\'arborer les Terres Désolées avec un mignon petit toutou à ses côtés ? Cette demande a été entendue et la solution proposée par Arcueid-Gray Sage est exactement ce que l\'on demandait ! Ce mod permet donc d\'obtenir un chien de compagnie à équiper comme un mod sur vos jambières. Meilleur ami de l\'Homme, ce dernier peut sentir les ennemis et vous avertir de leur présence tout en vous procurant des bonus passifs afin de vous aider à surmonter les dangerosités des Terres Désolées.', '/mods/compagnon', '2023-03-31', 1, 3, 2, 1),
(3, '60 Slots Inventory', 'L\'inventaire Vanilla de 7 Days To Die est relativement petit comparé à tout ce que le jeu nous balance à la figure. Entre les différentes ressources, les armes, les munitions, soins, nourriture et j\'en passe, l\'inventaire se remplit vite. Les poches aident beaucoup mais cela n\'est pas suffisant, notamment en début de partie ou les bidouilles s\'amassent très rapidement !', '/mods/inventory', '2023-01-07', 1, NULL, 3, 0),
(4, 'Lockable Inventory Slots', '7 Days To Die possède de nombreux items, objets et armes que l\'on doit souvent transporter avec nous et transférer dans nos lieux de stockage. Cette étape de tri et de rangement peut sembler parfois fastidieuse mais nécessaire, nous souhaitons donc y passer le moins de temps possible. Pour cela, KhainesGB a développé un Mod permettant de faciliter le rangement de notre inventaire en permettant de vider tout notre inventaire tout en conservant les items que l\'on juge nécessaire de garder tout le temps avec nous.', '/mods/lockable-inventory', '2023-02-24', 0, NULL, 4, 0),
(5, 'Trader Lobby', 'Avec l\'arrivée du Lobby créé par majoritairement par Bodarn et aidé par quelques membres de la communauté, est arrivé un nouveau problème : avec 3 Marchands présents dans le Lobby, il était alors possible de faire des quêtes de manière infinie en variant les différents Marchands ce qui permettait une montée en expérience accrue qui ne convient pas à la vision que nous avons du jeu. Les joueurs avaient aussi tendance a se regrouper tout autour du Lobby crééant des problèmes avec le spawn de zombies et rendant une bonne partie de la carte innexploitée. Il a donc été décidé de réguler ça en modifiant les Marchands du Lobby pour que ces derniers ne puissent plus fournir de Quêtes.', '/mods/trader-lobby', '2023-06-30', 0, NULL, 1, 0),
(6, 'Lootbag Delay', 'Les sacs du butin sont extrêmement rares et contiennent généralement de très bons items. La plupart de ces sacs sont obtenus lors des Hordes car le nombre de zombies est important ce qui permet de grandement augmenter les quantités de sacs à looter. Ceci dit, il arrive parfois que vous tuiez un zombie en début de Horde mais que le sac qu\'il a laissé tomber disparaisse avant la fin de cette dernière. Frustrant n\'est-il pas ? Suite à des suggestions de la part de la communauté, nous avons alors mis en place ce Mod afin de contrer ce problème, vous permettant ainsi de looter vos précieux sacs de butins sans la pression du temps.', '/mods/lootbag-delay', '2023-07-18', 0, 4, 1, 0),
(7, 'Nos chers bannis', 'En tant qu\'administrateur ou modérateur d\'un serveur, on peut se retrouver face à de nombreux \"phénomènes\" aux intentions souvent malicieuses voire toxiques. Traquer et expulser ces individus est un travail de tout les jours et peut parfois mener à des \"mini-investigations\" très demandeuses en temps et en énergie. Alors, pourquoi ne pas utiliser cela pour se moquer de ces personnes et décompresser ? Après tout, elles ont été intentionnellement mauvaises avec nous, donc est ce qu\'il ne serait pas le temps de \"se venger\" de façon amusante ? Ils ont pourris notre serveur, alors pourquoi pas les \"pourrir\" nous aussi ?', '/mods/nos-chers-bannis', '2023-07-29', 1, 5, 1, 1),
(8, 'Single Seed', 'Sur les serveurs multijoueurs de 7 Days To Die, les arbres peuvent être une vraie plaie à gérer. Ils peuvent causer des lags sur certaines configurations et peuvent impacter les performances du serveur entier. C\'est pour cela que vous retrouverez souvent des règles du style \"Pas plus de X arbres dans un rayon de Y blocs\" sur certains serveurs, dont le notre. Afin de vous empêcher de violer cette règle, nous avons alors décider de tout simplement réduire la quantité de graines founies par chaque arbre une fois abattu.', '/mods/single-seed', '2023-07-20', 0, 6, 1, 0),
(9, 'Vote Reward', 'Au vu de tout les moyens investis pour maintenir le serveur à flot, il est important pour nous que nous ayons toujours une bonne base de joueurs. Il faut donc pour cela rendre le serveur attrayant et unique afin de fidéliser la communauté mais aussi tenter de ramener de nouvelles personnes constamment afin de remplacer les anciens joueurs ayant quitté le serveur. Pour cela, le meilleur moyen est le vote, système très simple permettant aux joueurs de voter pour le serveur sur des sites internet dédié et améliorant le référencement de notre serveur. Sauf que ce n\'est pas nous qui votons, c\'est vous ! Et pour vous remercier, en plus d\'essayer d\'améliorer la qualité du serveur de manière régulière, nous avons décidé de vous récompenser pour votre investissement en fonction de vos votes.', '/mods/reward-vote', '2023-09-01', 1, NULL, 6, 0),
(10, 'TransZ', 'Suite à la création du Lobby et son implémentation dans le serveur, nous avons été exposé à un problème majeur : comment les joueurs peuvent-ils se regrouper au Lobby si ces derniers se trouvent à des bouts opposés de la carte ? Certains serveurs proposent des systèmes de téléportation grâce à des commandes mais cela n\'était pas de notre goût, notamment car ceci casse complétement l\'immersion. Il a donc fallu trouver un moyen de transporter les joueurs  rapidement vers le Lobby tout en rendant le tout cohérent. Un système de bus était alors la solution toute trouvée !', '/mods/transz', '2023-09-26', 1, NULL, 6, 0),
(11, 'Réduction Bruit Foreuse', 'Pour les mineurs, pas besoin de détailler à quel point ce Mod peut vous sauver d\'une future perte d\'audition. Pour les autres, sachez que le minage dans 7 Days To Die est presque une étape obligatoire dans la progression du jeu. Cela peut être très long et fastidieux en début de partie mais le meilleur moment pour miner est celui où l\'on débloque la Foreuse. Cette dernière nous facilite grandement la vie mais a tendance a très vite devenir une source de douleur auditive à force de l\'utiliser au point où certains joueurs préfèrent la Pioche. Suite aux nombreuses plaintes de la part de la communauté concernant cette dernières, il a donc été décidé de faire quelque chose ...', '/mods/son-foreuse', '2023-09-26', 1, 7, 1, 0),
(12, 'Changement Stack Munitions', 'Le fonctionnement du système de dégâts dans 7 Days To Die est assez particulier. Ce n\'est pas tant votre arme qui détermine vos dégâts mais plutôt les balles que vous utilisez. En sachant cela, cela veut dire que pour équilibrer le tout, les balles ayant le plus de puissance devraient aussi avoir un inconvénient pour contrebalancer et inversement. Et c\'est tout le but du Mod : réequilibrer les différentes balles en ajustant le nombre de ces dernières que l\'on peut transporter avec nous', '/mods/stack-munitions', '2023-09-26', 0, 8, 1, 0),
(13, 'Refonte Mines Terrestres', 'Les mines terrestres ont toujours été considérées comme étant l\'un des pièges les moins efficaces de 7 Days To Die. Elles sont à usage unique, sont couteuses et tuent généralement peu de zombie à chaque explosion. Or, elles ont une propriété qui n\'est pas suffisament exploitée par le jeu de base : pouvoir être explosées à distance par des tirs ou des coup en mêlée. Et c\'est là toute la philosphie de ce Mod : transformer les Mines terrestres en petites charges explosives activables à distance. Cela encouragera des nouvelles manières d\'appréhender les Hordes tout en offrant de nouvelles possibilités pour se défendre.', '/mods/refonte-mines', '2023-09-29', 1, 1, 1, 0),
(14, 'Gyrocopter Plus', 'La plupart de véhicules sur 7 Dasy To Die permettent aux joueurs se déplacer en groupe en rajoutant des sièges passagers sur ces derniers. Cela créé des situations conviviales où les joueurs partent ensemble faire leurs missions, explorer ou miner et certains joueurs en profitent meêm pour devenir des \"taxis itinérants\" pour les autres joueurs n\'ayant pas encore accès aux véhicules. Or, le gyrocoptère, avec la bicyclette, sont les deux exceptions qui ne possèdent pas de place passagers. iSneakyPewPew a alors décidé de mettre la main à la pâte afin de corriger ce problème !', '/mods/gyrocoptere', '2023-09-10', 0, NULL, 7, 0),
(15, 'Elevateur quantique', 'En fin de partie, il est possible que vous ayez construit une réelle villa dans laquelle se balader est un plaisir visuellement parlant mais cela peut parfois être aussi un déplaisir de devoir constamment osciller entre les différents étages pour aller chercher ce Fer que vous aviez oublié pour votre Forge ! Quand on a pas de tête, il vaut mieux avoir des jambes ! Et bien Kanaverum en a eu marre de se balader à pied, et a décidé de nous créer un Mod pour faciliter la navigation dans nos base en crééant un ascenseur, rien que ça !', '/mods/elevateur', '2023-09-12', 1, NULL, 5, 0),
(16, 'ElecFRT', 'Notre volonté pour le jeu est de créer une expérience immersive et donc, par extension, un peu difficile comme pourrait l\'être une vraie survie dans une période post-apocalyptique. Pour cela, nous voulons aussi que tout ne soit pas facilement accessible et que parfois, vous soyez obligé de jouer avec une forme de contrainte incitant à faire des choix. Pour les hordes, nous avons décidé de changer le fonctionnement des générateurs afin de rendre le tout plus gourmand tout en offrant des possibilités d\'amélioration de ces derniers.', '/mods/elecfrt', '2023-02-13', 0, 10, 6, 1),
(17, 'InfoPanel', 'Malgré tout nos efforts pour mettre en avant les règlements du serveur, les informations et différentes fonctionnalités de ce dernier, un certain nombre de joueurs peuvent passer à côté de l\'information. Il est donc important de pouvoir afficher toutes ces précieuses informations directement en jeu. Heureusement, ce mod propose de pouvoir afficher un ensemble de zones de texte directement accessible depuis le menu de jeu vous permettant ainsi d\'accéder à l\'information, à tout moment.', '/mods/info-panel', '2024-03-31', 1, NULL, 8, 0),
(18, 'KHA21 Food and Water Bar', 'Le Heads Up Display (ou HUD) joue un grand rôle dans la compréhension du jeu, de ses mécaniques et permet facilement de voir ses statistiques les plus imoprtantes. Ce dernier doit donc être clair et facile à lire. KHA21 Food and Water Bar permet d\'améliorer la visibilité des barres de faim et de soif afin de rendre votre expérience de survie un peu plus agréable. Plus besoin de passer dans le menu de personnage pour voir la valeur précise de votre faim.', '/mods/kha21-food-and-water-bar', '2023-03-31', 1, NULL, 4, 0),
(19, 'AGF-A21HUDPlus1.8.0', 'Lors de vos nombreuses explorations, vous est-il déjà arrivé de fouiller un conteneur avant de vous rendre compte que ce dernier était vide ? Ou alors, avez-vous déjà oublié de vérouiller un coffre ou une porte ? AGF-A21HUDPlus a pour vocation de résoudre ce problème est permettant d\'afficher l\'état du conteneur (vérouillé, vide, rempli) lorsque vous le ciblez avec votre souris ou votre manette.', '/mods/agf-hud', '2023-06-26', 1, NULL, 2, 0),
(20, 'Picasso', '7 Days To Die est par essence, un jeu qui manque de vie, vous voyez ce que je veut dire ? Et si l\'on ramenait un peu de couleurs à ce monde rempli de mort-vivants ? Ce mod rajoute de nombreuses teintures pour vêtements, armures et armes ! Laissez libre cours à votre créativité et devenez le plus coquet des survivants ! Vous mourrez tout de même, mais avec style !', '/mods/picasso', '2023-12-13', 1, NULL, 6, 0),
(21, 'More Eggs', 'Vous venez de trouver assez de magazine pour vous faire des oeufs aux bacons, quel chef ! Il ne vous manque plus que ... des oeufs. Mais fouiller des nids d\'oiseaux ... quelle plaie ! Ca ne serait pas mal si l\'on pouvait obtenir ces derniers d\'une autre manière, ou de plusieurs autres manières ... Mmmh, si seulement un mod pouvait corriger ça ! Je pense que vous voyez où je veut en venir ...', '/mods/more-eggs', '2023-08-05', 0, NULL, 1, 0),
(22, 'Trader no Quests', 'Ce mod est principalement pensé pour équilibrer l\'utilisation du lobby par les joueurs. L\'un des problèmes que l\'on a eu avec ce dernier est que les joueurs profitaient du fait d\'avoir plusieurs Marchands au même endroit pour réaliser des quêtes sans fin. Le mod permet alors de placer des Marchands ne pouvant pas proposer de quêtes dans les Lobby.', '/mods/trader-no-quests', '2023-03-26', 0, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `mods_tags`
--

DROP TABLE IF EXISTS `mods_tags`;
CREATE TABLE IF NOT EXISTS `mods_tags` (
  `mod_id` int NOT NULL,
  `tag_id` int NOT NULL,
  PRIMARY KEY (`mod_id`,`tag_id`),
  KEY `tag_id` (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `mods_tags`
--

INSERT INTO `mods_tags` (`mod_id`, `tag_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(3, 1),
(4, 1),
(5, 5),
(5, 6),
(6, 1),
(7, 7),
(8, 4),
(9, 8),
(10, 1),
(11, 1),
(12, 5),
(13, 9),
(13, 10),
(14, 1),
(15, 1),
(16, 5),
(17, 1),
(18, 1),
(19, 1),
(20, 11),
(21, 5);

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(1, 'Quality Of Life'),
(2, 'Accessibilité'),
(3, 'Unique'),
(4, 'Général'),
(5, 'Equilibrage'),
(6, 'Marchands'),
(7, 'Délire'),
(8, 'Récompenses'),
(9, 'Ajout de contenu'),
(10, 'Pièges'),
(11, 'Cosmétique');

-- --------------------------------------------------------

--
-- Structure de la table `thumbnails`
--

DROP TABLE IF EXISTS `thumbnails`;
CREATE TABLE IF NOT EXISTS `thumbnails` (
  `id` int NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `thumbnails`
--

INSERT INTO `thumbnails` (`id`, `filename`) VALUES
(2, 'mod-thumbnail-difficulty-min-960x540.webp'),
(3, 'mod-thumbnail-compagnon-min-730x673.webp'),
(4, 'mod-thumbnail-lootbagdelay-min-960x540.webp'),
(5, 'mod-thumbnail-banrewind-min-960x540.webp'),
(6, 'mod-thumbnail-single-tree-min-960x540.webp'),
(7, 'mod-thumbnail-auger-sound-min-960x540.webp'),
(8, 'mod-thumbnail-stack-changes-min-960x540.webp'),
(1, 'mod-thumbnail-sticky-landmine-min-960x540.webp'),
(10, 'mod-thumbnail-elecfrt-min-1920x1080.webp');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
