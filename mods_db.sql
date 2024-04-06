-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 06 avr. 2024 à 18:45
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(7, 'iSneakyPewPew');

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
  PRIMARY KEY (`id`),
  KEY `thumbnail_id` (`thumbnail_id`),
  KEY `author_id` (`author_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `mods`
--

INSERT INTO `mods` (`id`, `name`, `description`, `uri`, `release_date`, `is_used`, `thumbnail_id`, `author_id`) VALUES
(1, 'Difficulté ajustable', 'La difficulté imposée par les réglages d\'un serveur peut parfois sembler frustrante. Elle nous empêche de profiter de l\'ambiance, du STAFF ou des évenements mis en place sur ce dernier tout simplement pour un simple problème de dégâts reçus et dégâts infligés. Nous avons alors essayé de vous proposer une alternative vous permettant de profiter du serveur malgré tout ! Vous aurez donc la possibilité de choisir votre propre difficulté afin de vous créer l\'expérience qui vous convient le mieux.', '/mod-difficulty', '2023-06-17', 1, 2, 1),
(2, 'Compagnon', 'Qui n\'a jamais rêvé d\'arborer les Terres Désolées avec un mignon petit toutou à ses côtés ? Cette demande a été entendue et la solution proposée par Arcueid-Gray Sage est exactement ce que l\'on demandait ! Ce mod permet donc d\'obtenir un chien de compagnie à équiper comme un mod sur vos jambières. Meilleur ami de l\'Homme, ce dernier peut sentir les ennemis et vous avertir de leur présence tout en vous procurant des bonus passifs afin de vous aider à surmonter les dangerosités des Terres Désolées.', '/mod-compagnon', '2023-03-31', 0, 3, 2),
(3, '60 Slots Inventory', 'L\'inventaire Vanilla de 7 Days To Die est relativement petit comparé à tout ce que le jeu nous balance à la figure. Entre les différentes ressources, les armes, les munitions, soins, nourriture et j\'en passe, l\'inventaire se remplit vite. Les poches aident beaucoup mais cela n\'est pas suffisant, notamment en début de partie ou les bidouilles s\'amassent très rapidement !', '/mod-inventory', '2023-01-07', 0, NULL, 3),
(4, 'Lockable Inventory Slots', '7 Days To Die possède de nombreux items, objets et armes que l\'on doit souvent transporter avec nous et transférer dans nos lieux de stockage. Cette étape de tri et de rangement peut sembler parfois fastidieuse mais nécessaire, nous souhaitons donc y passer le moins de temps possible. Pour cela, KhainesGB a développé un Mod permettant de faciliter le rangement de notre inventaire en permettant de vider tout notre inventaire tout en conservant les items que l\'on juge nécessaire de garder tout le temps avec nous.', '/mod-lockable-inventory', '2023-02-24', 0, NULL, 4),
(5, 'Trader Lobby', 'Avec l\'arrivée du Lobby créé par majoritairement par Bodarn et aidé par quelques membres de la communauté, est arrivé un nouveau problème : avec 3 Marchands présents dans le Lobby, il était alors possible de faire des quêtes de manière infinie en variant les différents Marchands ce qui permettait une montée en expérience accrue qui ne convient pas à la vision que nous avons du jeu. Les joueurs avaient aussi tendance a se regrouper tout autour du Lobby crééant des problèmes avec le spawn de zombies et rendant une bonne partie de la carte innexploitée. Il a donc été décidé de réguler ça en modifiant les Marchands du Lobby pour que ces derniers ne puissent plus fournir de Quêtes.', '/mod-trader-lobby', '2023-06-30', 0, NULL, 1),
(6, 'Lootbag Delay', 'Les sacs du butin sont extrêmement rares et contiennent généralement de très bons items. La plupart de ces sacs sont obtenus lors des Hordes car le nombre de zombies est important ce qui permet de grandement augmenter les quantités de sacs à looter. Ceci dit, il arrive parfois que vous tuiez un zombie en début de Horde mais que le sac qu\'il a laissé tomber disparaisse avant la fin de cette dernière. Frustrant n\'est-il pas ? Suite à des suggestions de la part de la communauté, nous avons alors mis en place ce Mod afin de contrer ce problème, vous permettant ainsi de looter vos précieux sacs de butins sans la pression du temps.', '/mod-lootbag-delay', '2023-07-18', 0, 4, 1),
(7, 'Nos chers bannis', 'En tant qu\'administrateur ou modérateur d\'un serveur, on peut se retrouver face à de nombreux \"phénomènes\" aux intentions souvent malicieuses voire toxiques. Traquer et expulser ces individus est un travail de tout les jours et peut parfois mener à des \"mini-investigations\" très demandeuses en temps et en énergie. Alors, pourquoi ne pas utiliser cela pour se moquer de ces personnes et décompresser ? Après tout, elles ont été intentionnellement mauvaises avec nous, donc est ce qu\'il ne serait pas le temps de \"se venger\" de façon amusante ? Ils ont pourris notre serveur, alors pourquoi pas les \"pourrir\" nous aussi ?', '/mod-nos-chers-bannis', '2023-07-29', 0, 5, 1),
(8, 'Single Seed', 'Sur les serveurs multijoueurs de 7 Days To Die, les arbres peuvent être une vraie plaie à gérer. Ils peuvent causer des lags sur certaines configurations et peuvent impacter les performances du serveur entier. C\'est pour cela que vous retrouverez souvent des règles du style \"Pas plus de X arbres dans un rayon de Y blocs\" sur certains serveurs, dont le notre. Afin de vous empêcher de violer cette règle, nous avons alors décider de tout simplement réduire la quantité de graines founies par chaque arbre une fois abattu.', '/mod-single-seed', '2023-07-20', 0, 6, 1),
(9, 'Vote Reward', 'Au vu de tout les moyens investis pour maintenir le serveur à flot, il est important pour nous que nous ayons toujours une bonne base de joueurs. Il faut donc pour cela rendre le serveur attrayant et unique afin de fidéliser la communauté mais aussi tenter de ramener de nouvelles personnes constamment afin de remplacer les anciens joueurs ayant quitté le serveur. Pour cela, le meilleur moyen est le vote, système très simple permettant aux joueurs de voter pour le serveur sur des sites internet dédié et améliorant le référencement de notre serveur. Sauf que ce n\'est pas nous qui votons, c\'est vous ! Et pour vous remercier, en plus d\'essayer d\'améliorer la qualité du serveur de manière régulière, nous avons décidé de vous récompenser pour votre investissement en fonction de vos votes.', '/mod-reward-vote', '2023-09-01', 0, NULL, 6),
(10, 'TransZ', 'Suite à la création du Lobby et son implémentation dans le serveur, nous avons été exposé à un problème majeur : comment les joueurs peuvent-ils se regrouper au Lobby si ces derniers se trouvent à des bouts opposés de la carte ? Certains serveurs proposent des systèmes de téléportation grâce à des commandes mais cela n\'était pas de notre goût, notamment car ceci casse complétement l\'immersion. Il a donc fallu trouver un moyen de transporter les joueurs  rapidement vers le Lobby tout en rendant le tout cohérent. Un système de bus était alors la solution toute trouvée !', '/mod-transz', '2023-09-26', 0, NULL, 6),
(11, 'Réduction Bruit Foreuse', 'Pour les mineurs, pas besoin de détailler à quel point ce Mod peut vous sauver d\'une future perte d\'audition. Pour les autres, sachez que le minage dans 7 Days To Die est presque une étape obligatoire dans la progression du jeu. Cela peut être très long et fastidieux en début de partie mais le meilleur moment pour miner est celui où l\'on débloque la Foreuse. Cette dernière nous facilite grandement la vie mais a tendance a très vite devenir une source de douleur auditive à force de l\'utiliser au point où certains joueurs préfèrent la Pioche. Suite aux nombreuses plaintes de la part de la communauté concernant cette dernières, il a donc été décidé de faire quelque chose ...', '/mod-son-foreuse', '2023-09-26', 0, 7, 1),
(12, 'Changement Stack Munitions', 'Le fonctionnement du système de dégâts dans 7 Days To Die est assez particulier. Ce n\'est pas tant votre arme qui détermine vos dégâts mais plutôt les balles que vous utilisez. En sachant cela, cela veut dire que pour équilibrer le tout, les balles ayant le plus de puissance devraient aussi avoir un inconvénient pour contrebalancer et inversement. Et c\'est tout le but du Mod : réequilibrer les différentes balles en ajustant le nombre de ces dernières que l\'on peut transporter avec nous', '/mod-stack-munitions', '2023-09-26', 0, 8, 1),
(13, 'Refonte Mines Terrestres', 'Les mines terrestres ont toujours été considérées comme étant l\'un des pièges les moins efficaces de 7 Days To Die. Elles sont à usage unique, sont couteuses et tuent généralement peu de zombie à chaque explosion. Or, elles ont une propriété qui n\'est pas suffisament exploitée par le jeu de base : pouvoir être explosées à distance par des tirs ou des coup en mêlée. Et c\'est là toute la philosphie de ce Mod : transformer les Mines terrestres en petites charges explosives activables à distance. Cela encouragera des nouvelles manières d\'appréhender les Hordes tout en offrant de nouvelles possibilités pour se défendre.', '/mod-refonte-mines', '2023-09-29', 0, 1, 1),
(14, 'Gyrocopter Plus', 'La plupart de véhicules sur 7 Dasy To Die permettent aux joueurs se déplacer en groupe en rajoutant des sièges passagers sur ces derniers. Cela créé des situations conviviales où les joueurs partent ensemble faire leurs missions, explorer ou miner et certains joueurs en profitent meêm pour devenir des \"taxis itinérants\" pour les autres joueurs n\'ayant pas encore accès aux véhicules. Or, le gyrocoptère, avec la bicyclette, sont les deux exceptions qui ne possèdent pas de place passagers. iSneakyPewPew a alors décidé de mettre la main à la pâte afin de corriger ce problème !', '/mod-gyrocoptere', '2023-09-10', 0, NULL, 7),
(15, 'Elevateur quantique', 'En fin de partie, il est possible que vous ayez construit une réelle villa dans laquelle se balader est un plaisir visuellement parlant mais cela peut parfois être aussi un déplaisir de devoir constamment osciller entre les différents étages pour aller chercher ce Fer que vous aviez oublié pour votre Forge ! Quand on a pas de tête, il vaut mieux avoir des jambes ! Et bien Kanaverum en a eu marre de se balader à pied, et a décidé de nous créer un Mod pour faciliter la navigation dans nos base en crééant un ascenseur, rien que ça !', '/mod-elevateur', '2023-09-12', 0, NULL, 5),
(16, 'ElecFRT', 'Notre volonté pour le jeu est de créer une expérience immersive et donc, par extension, un peu difficile comme pourrait l\'être une vraie survie dans une période post-apocalyptique. Pour cela, nous voulons aussi que tout ne soit pas facilement accessible et que parfois, vous soyez obligé de jouer avec une forme de contrainte incitant à faire des choix. Pour les hordes, nous avons décidé de changer le fonctionnement des générateurs afin de rendre le tout plus gourmand tout en offrant des possibilités d\'amélioration de ces derniers.', '/mod-elecfrt', '2023-02-13', 0, 10, 6);

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
(16, 5);

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(10, 'Pièges');

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
