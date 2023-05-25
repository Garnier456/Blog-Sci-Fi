-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 25 mai 2023 à 11:18
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idArticle` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `userId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idArticle`, `title`, `summary`, `content`, `image`, `createdAt`, `userId`, `categoryId`) VALUES
(40, '« Dune » : où sont les fans de l’œuvre de Frank Herbert ?', 'Depuis sa publication en 1965, le livre a connu un phénoménal succès en librairie. Pourtant, la communauté de ses fans est peu visible et son impact sur la culture populaire encore minime. Le film de Denis Villeneuve changera-t-il la donne ?', 'Vous pouvez partager un article en cliquant sur les icônes de partage en haut à droite de celui-ci. \r\nLa reproduction totale ou partielle d’un article, sans l’autorisation écrite et préalable du Monde, est strictement interdite. \r\nPour plus d’informations, consultez nos conditions générales de vente. \r\nPour toute demande d’autorisation, contactez syndication@lemonde.fr. \r\nEn tant qu’abonné, vous pouvez offrir jusqu’à cinq articles par mois à l’un de vos proches grâce à la fonctionnalité « Offrir un article ». \r\n\r\nhttps://www.lemonde.fr/pixels/article/2021/09/18/dune-ou-sont-les-fans-de-l-uvre-de-frank-herbert_6095142_4408996.html\r\n\r\nLes fans de Dune existent-ils ? Ont-ils disparu, comme l’eau a disparu d’Arrakis, la planète désertique imaginée par l’écrivain américain Frank Herbert ? Ou vivent-ils repliés dans de métaphoriques sietchs, ces abris souterrains dans lesquels le peuple des Fremen attend son heure avant de déferler sur le monde ?\r\n\r\nDune, c’est un colossal succès littéraire né en 1965, confirmé par ses cinq suites « officielles » jusqu’en 1985 et entretenu depuis la fin des années 1990 par Brian Herbert, le prolixe fils de l’auteur. Des dizaines de millions d’exemplaires vendus, plusieurs tentatives d’adaptations plus ou moins heureuses et, depuis le 15 septembre, un nouveau blockbuster hollywoodien, réalisé par le Canadien Denis Villeneuve.\r\n\r\nPour autant, n’en déplaise aux passionnés du « duniverse », il faut reconnaître que si Dune a eu dans les librairies un impact comparable à celui du Seigneur des anneaux ou de Harry Potter, son influence sur la culture populaire reste discrète.\r\n\r\nEt on ne parle pas simplement ici des experts de la geste dunienne : on imagine mal croiser un amateur du dimanche vêtu d’un tee-shirt à l’effigie de Paul Atréides, le héros de la saga, ou avec une peluche de ver de sable sous le bras. « C’est le grand paradoxe de Dune : le fait d’avoir une communauté immense mais invisible », nous explique Usul, vidéaste et chroniqueur pour Mediapart, dont les spectateurs, bien que fidèles, doivent être peu nombreux à réaliser que son pseudonyme est tiré de l’œuvre d’Herbert.', '35ef824f43a55c2e9831080a1fa1db0a.jpg', '2023-04-26 00:00:00', 11, 1),
(41, 'Le Cycle de Fondation ', 'En ce début de treizième millénaire, l\'Empire n\'a jamais été aussi puissant, aussi étendu à travers toute la Galaxie.', 'En ce début de treizième millénaire, l\'Empire n\'a jamais été aussi puissant, aussi étendu à travers toute la Galaxie. C\'est dans sa capitale, Trantor, que l\'éminent savant Hari Seldon invente la psychohistoire, une science nouvelle permettant de prédire l\'avenir. Grâce à elle, Seldon prévoit l\'effondrement de l\'Empire d\'ici cinq siècles, suivi d\'une ère de ténèbres de trente mille ans. Réduire cette période à mille ans est peut-être possible, à condition de mener à terme son projet : la Fondation, chargée de rassembler toutes les connaissances humaines. Une entreprise visionnaire qui rencontre de nombreux et puissants détracteurs…\r\nRécompensé par le prix Hugo de la \"meilleure série de science-fiction de tous les temps\", Le Cycle de Fondation est l’œuvre socle de la SF moderne, celle que tous les amateurs du genre ont lue ou liront un jour.', 'fondation-isaac-asimov.jpg', '2023-04-26 00:00:00', 11, 3),
(42, 'Ubisoft, un fleuron français du jeu vidéo qui vacille', 'Créé dans les années 1980 par la famille Guillemot, le français Ubisoft est devenu un des géants de l’industrie vidéoludique. Dans un contexte post-pandémie compliqué, l’éditeur semble rencontrer plus de difficultés que ses concurrents', 'Après deux ans de croissance pendant la pandémie, l’industrie vidéoludique doit faire face à un ralentissement du marché. Les joueurs ne sont plus confinés chez eux et la sortie de la nouvelle génération des consoles de Microsoft (Xbox Series) et de Sony (PS5) a été perturbée par les pénuries de composants électroniques. En 2022, le marché mondial des jeux a généré 184,4 milliards de dollars (171,5 milliards de francs) de revenus selon le cabinet spécialisé Newzoo, soit une baisse de 4,3% par rapport à l’année précédente.\r\n\r\n', '6b22316_1668623514170-35443006275-26ced56faf-h.jpeg', '2023-04-26 00:00:00', 11, 5),
(43, 'La horde du Contrevent', 'Ils sont la 34e Horde du Contrevent. Golgoth ouvre la marche ; derrière lui, Sov, le scribe, sur les épaules duquel l’avenir de la Horde tout entière va bientôt reposer…', 'Le vent souffle toujours autant. Les marcheurs étaient conscients de la difficulté de la nouvelle entreprise, mais entre savoir et vivre… En effet, le passage aquatique se révèle encore pire qu\'escompté : les tensions montent au fur et à mesure et l\'intransigeance légendaire de Golgoth fait que le groupe ne tarde pas à se séparer. La lutte se fait sur tous les fronts : contre les éléments naturels et surtout, contre eux-mêmes. Cette relecture du roman d’Alain', 'Couv_311051.jpg', '2023-05-02 00:00:00', 11, 4),
(44, 'The Expanse', 'Au xxive siècle, le Système solaire est entièrement colonisé. Trois grandes puissances se trouvent impliquées dans une guerre froide : la Terre,', 'Au xxive siècle, le Système solaire est entièrement colonisé. Trois grandes puissances se trouvent impliquées dans une guerre froide : la Terre, appauvrie en ressources et dirigée par les Nations unies ; Mars, colonie devenue indépendante sous l\'égide de la République du Congrès martien et disposant de la flotte la plus avancée technologiquement ; enfin, les colonies de la ceinture d\'astéroïdes, dont les colons sont surexploités par la Terre et Mars et qui suivent plus ou moins le mouvement indépendantiste de l\'Alliance des Planètes Extérieures (APE).\r\n\r\nC\'est dans ce contexte de tensions que le cargo Canterbury est détruit par un vaisseau inconnu, ne laissant que quelques survivants dirigés par James Holden, second du cargo. Cet incident menace de faire exploser les tensions entre la Terre, Mars et l\'APE, et Holden et son groupe partent à la recherche des responsables de cet attentat. Dans le même temps, le détective Josephus Miller, né sur la station Cérès dans la ceinture d\'astéroïdes, a pour mission de retrouver une jeune femme, Julie Mao, fille de Jules-Pierre Mao, un des plus riches industriels du système solaire. Lorsque leurs enquêtes se rejoignent, Holden et Miller découvrent que la disparition de la jeune femme et la destruction du Canterbury sont liées à une vaste conspiration qui menace la paix dans le Système solaire et la survie de l\'humanité.', 'wp3067715.jpg', '2023-05-02 00:00:00', 11, 2),
(49, 'On a testé… « The Legend of Zelda: Tears of the Kingdom », l’histoire sans fin selon Nintendo', 'Au cours des premières heures de Tears of the Kingdom – l’un des jeux vidéo les plus attendus de l’année, qui paraît vendredi 12 mai sur Switch –, le valeureux chevalier Link est invité par la vénérable Impa à s’installer', 'Vous pouvez partager un article en cliquant sur les icônes de partage en haut à droite de celui-ci. \r\nLa reproduction totale ou partielle d’un article, sans l’autorisation écrite et préalable du Monde, est strictement interdite. \r\nPour plus d’informations, consultez nos conditions générales de vente. \r\nPour toute demande d’autorisation, contactez syndication@lemonde.fr. \r\nEn tant qu’abonné, vous pouvez offrir jusqu’à cinq articles par mois à l’un de vos proches grâce à la fonctionnalité « Offrir un article ». \r\n\r\nhttps://www.lemonde.fr/pixels/article/2023/05/11/on-a-teste-the-legend-of-zelda-tears-of-the-kingdom-l-histoire-sans-fin-selon-nintendo_6172946_4408996.html\r\n\r\nAu cours des premières heures de Tears of the Kingdom – l’un des jeux vidéo les plus attendus de l’année, qui paraît vendredi 12 mai sur Switch –, le valeureux chevalier Link est invité par la vénérable Impa à s’installer à bord d’une montgolfière de fortune. Tandis que le duo s’élève dans les airs, le joueur découvre un motif géant, surgissant à la manière d’un agroglyphe parmi les herbes. « Dans cette image, lui dit Impa, tu dois identifier le détail qui résout son énigme. »\r\n\r\nAinsi en est-il dans Tears of the Kingdom comme il en a toujours été dans The Legend of Zelda : le monde est une énigme et celui-ci nous invite à prendre de la hauteur pour mieux le scruter. Au joueur d’en percer le code secret, qui, pareil aux traces trahissant depuis le ciel la présence de sites enfouis, en régit l’histoire immémoriale. En convoquant les mythes du temps cyclique, du cataclysme et de l’éternel retour, la trame de Tears of the Kingdom perpétue la portée tragique de la série, en plus d’offrir un très beau rôle à sa princesse éponyme.\r\n\r\nMais, comme dans Breath of the Wild, l’essentiel se situe dans les fugues bucoliques du joueur au cœur d’un territoire démesuré, où l’appel de la découverte le dispute à une succession sans fin de trouvailles. Le phénomène de 2017 avait été perçu comme le renouveau du jeu vidéo en monde ouvert, cristallisant l’association entre une liberté d’exploration et une science des épiphanies ludiques. Toutes les découvertes que nous y faisions, bien que guidées par la main discrète des concepteurs de Nintendo, nous paraissaient si limpides qu’elles donnaient l’impression de surgir de notre seule inspiration.\r\n\r\nLire aussi : On a joué à… « The Legend of Zelda : Tears of the Kingdom », en ascension vers le sommet des dieux\r\n\r\nAjouter à vos sélections\r\nC’est cette expérience ambitieuse et délicate que Nintendo tente aujourd’hui de réitérer en creusant le sillon du succès record de Breath of the Wild (plus de 30 millions d’exemplaires écoulés à ce jour) dont Tears of the Kingdom constitue une suite presque à l’identique : même royaume d’Hyrule, mêmes graphismes, mêmes systèmes d’armes cassables, de collecte de ressources et de cuisine au coin du feu, mêmes bruitages mélodieux sur des ritournelles fuyantes. Lorsqu’au terme d’une superbe introduction située dans les airs le joueur plonge vers la surface d’Hyrule, c’est un peu chez lui qu’il atterrit.\r\n\r\nVous pouvez partager un article en cliquant sur les icônes de partage en haut à droite de celui-ci. \r\nLa reproduction totale ou partielle d’un article, sans l’autorisation écrite et préalable du Monde, est strictement interdite. \r\nPour plus d’informations, consultez nos conditions générales de vente. \r\nPour toute demande d’autorisation, contactez syndication@lemonde.fr. \r\nEn tant qu’abonné, vous pouvez offrir jusqu’à cinq articles par mois à l’un de vos proches grâce à la fonctionnalité « Offrir un article ». \r\n\r\nhttps://www.lemonde.fr/pixels/article/2023/05/11/on-a-teste-the-legend-of-zelda-tears-of-the-kingdom-l-histoire-sans-fin-selon-nintendo_6172946_4408996.html\r\n\r\nAu cours des premières heures de Tears of the Kingdom – l’un des jeux vidéo les plus attendus de l’année, qui paraît vendredi 12 mai sur Switch –, le valeureux chevalier Link est invité par la vénérable Impa à s’installer à bord d’une montgolfière de fortune. Tandis que le duo s’élève dans les airs, le joueur découvre un motif géant, surgissant à la manière d’un agroglyphe parmi les herbes. « Dans cette image, lui dit Impa, tu dois identifier le détail qui résout son énigme. »\r\n\r\nAinsi en est-il dans Tears of the Kingdom comme il en a toujours été dans The Legend of Zelda : le monde est une énigme et celui-ci nous invite à prendre de la hauteur pour mieux le scruter. Au joueur d’en percer le code secret, qui, pareil aux traces trahissant depuis le ciel la présence de sites enfouis, en régit l’histoire immémoriale. En convoquant les mythes du temps cyclique, du cataclysme et de l’éternel retour, la trame de Tears of the Kingdom perpétue la portée tragique de la série, en plus d’offrir un très beau rôle à sa princesse éponyme.\r\n\r\nMais, comme dans Breath of the Wild, l’essentiel se situe dans les fugues bucoliques du joueur au cœur d’un territoire démesuré, où l’appel de la découverte le dispute à une succession sans fin de trouvailles. Le phénomène de 2017 avait été perçu comme le renouveau du jeu vidéo en monde ouvert, cristallisant l’association entre une liberté d’exploration et une science des épiphanies ludiques. Toutes les découvertes que nous y faisions, bien que guidées par la main discrète des concepteurs de Nintendo, nous paraissaient si limpides qu’elles donnaient l’impression de surgir de notre seule inspiration.\r\n\r\nLire aussi : On a joué à… « The Legend of Zelda : Tears of the Kingdom », en ascension vers le sommet des dieux\r\n\r\nAjouter à vos sélections\r\nC’est cette expérience ambitieuse et délicate que Nintendo tente aujourd’hui de réitérer en creusant le sillon du succès record de Breath of the Wild (plus de 30 millions d’exemplaires écoulés à ce jour) dont Tears of the Kingdom constitue une suite presque à l’identique : même royaume d’Hyrule, mêmes graphismes, mêmes systèmes d’armes cassables, de collecte de ressources et de cuisine au coin du feu, mêmes bruitages mélodieux sur des ritournelles fuyantes. Lorsqu’au terme d’une superbe introduction située dans les airs le joueur plonge vers la surface d’Hyrule, c’est un peu chez lui qu’il atterrit.\r\n\r\nVous pouvez partager un article en cliquant sur les icônes de partage en haut à droite de celui-ci. \r\nLa reproduction totale ou partielle d’un article, sans l’autorisation écrite et préalable du Monde, est strictement interdite. \r\nPour plus d’informations, consultez nos conditions générales de vente. \r\nPour toute demande d’autorisation, contactez syndication@lemonde.fr. \r\nEn tant qu’abonné, vous pouvez offrir jusqu’à cinq articles par mois à l’un de vos proches grâce à la fonctionnalité « Offrir un article ». \r\n\r\nhttps://www.lemonde.fr/pixels/article/2023/05/11/on-a-teste-the-legend-of-zelda-tears-of-the-kingdom-l-histoire-sans-fin-selon-nintendo_6172946_4408996.html\r\n\r\nAu cours des premières heures de Tears of the Kingdom – l’un des jeux vidéo les plus attendus de l’année, qui paraît vendredi 12 mai sur Switch –, le valeureux chevalier Link est invité par la vénérable Impa à s’installer à bord d’une montgolfière de fortune. Tandis que le duo s’élève dans les airs, le joueur découvre un motif géant, surgissant à la manière d’un agroglyphe parmi les herbes. « Dans cette image, lui dit Impa, tu dois identifier le détail qui résout son énigme. »\r\n\r\nAinsi en est-il dans Tears of the Kingdom comme il en a toujours été dans The Legend of Zelda : le monde est une énigme et celui-ci nous invite à prendre de la hauteur pour mieux le scruter. Au joueur d’en percer le code secret, qui, pareil aux traces trahissant depuis le ciel la présence de sites enfouis, en régit l’histoire immémoriale. En convoquant les mythes du temps cyclique, du cataclysme et de l’éternel retour, la trame de Tears of the Kingdom perpétue la portée tragique de la série, en plus d’offrir un très beau rôle à sa princesse éponyme.\r\n\r\nMais, comme dans Breath of the Wild, l’essentiel se situe dans les fugues bucoliques du joueur au cœur d’un territoire démesuré, où l’appel de la découverte le dispute à une succession sans fin de trouvailles. Le phénomène de 2017 avait été perçu comme le renouveau du jeu vidéo en monde ouvert, cristallisant l’association entre une liberté d’exploration et une science des épiphanies ludiques. Toutes les découvertes que nous y faisions, bien que guidées par la main discrète des concepteurs de Nintendo, nous paraissaient si limpides qu’elles donnaient l’impression de surgir de notre seule inspiration.\r\n\r\nLire aussi : On a joué à… « The Legend of Zelda : Tears of the Kingdom », en ascension vers le sommet des dieux\r\n\r\nAjouter à vos sélections\r\nC’est cette expérience ambitieuse et délicate que Nintendo tente aujourd’hui de réitérer en creusant le sillon du succès record de Breath of the Wild (plus de 30 millions d’exemplaires écoulés à ce jour) dont Tears of the Kingdom constitue une suite presque à l’identique : même royaume d’Hyrule, mêmes graphismes, mêmes systèmes d’armes cassables, de collecte de ressources et de cuisine au coin du feu, mêmes bruitages mélodieux sur des ritournelles fuyantes. Lorsqu’au terme d’une superbe introduction située dans les airs le joueur plonge vers la surface d’Hyrule, c’est un peu chez lui qu’il atterrit.', 'zelda2c1f4c536c93654a0080e52300664b51a1c4e5f7.jpg', '2023-05-16 10:49:18', 11, 5);

-- --------------------------------------------------------

--
-- Structure de la table `articles_saves`
--

CREATE TABLE `articles_saves` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `articles_saves`
--

INSERT INTO `articles_saves` (`id`, `id_user`, `id_article`) VALUES
(1, 11, 44),
(5, 11, 44),
(6, 11, 49);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `idCategory` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`idCategory`, `name`, `icon`) VALUES
(1, 'Film', 'camera.png'),
(2, 'Série', 'tv.png'),
(3, 'Livre', 'books.png'),
(4, 'Comics', 'comic.png'),
(5, 'Jeux Vidéo', 'game-controller.png');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `createdAt` datetime NOT NULL,
  `articleId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `nickname`, `email`, `content`, `createdAt`, `articleId`) VALUES
(14, 'zlf$^fz', NULL, 'lsfz,fùpaz,', '2023-05-17 09:31:00', 49);

-- --------------------------------------------------------

--
-- Structure de la table `fact`
--

CREATE TABLE `fact` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `fact`
--

INSERT INTO `fact` (`id`, `content`) VALUES
(1, 'The phrase ‘parallel universe’ was first used in H. G. Wells’ 1923 novel Men like Gods.\r\n\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('USER','ADMIN') NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `username`, `email`, `password`, `role`) VALUES
(11, 'Olivier', 'saturn-solar@outlook.com', '$2y$10$ahEEJRhTyuLa61y7cBXHiukShsyJysmDeGwao.4CVZ68cQ9JPK13S', 'ADMIN'),
(12, 'toto', 'mr.ogarnier@gmail.com', '$2y$10$V4xHO3fxUZ.7aVDvweo/ce9OwlhrLrBKSkU19qJAlRnr.lZestRBK', 'USER'),
(13, 'Clément', 'kanzan@gmail.com', '$2y$10$mZIP3ltvnGDm8u90WiMvPe9/GwOTZlJf/ZcdnSTK9q3CZwYbbTuau', 'USER'),
(14, 'solange', 'soso@gmail.get', '$2y$10$3SA2P6wYpxSC2Z0688BMGegpeKcn4ui8dOALMqWGsb7nahCPtBZmu', 'USER');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idArticle`),
  ADD KEY `fk_user` (`userId`),
  ADD KEY `fk_category` (`categoryId`);

--
-- Index pour la table `articles_saves`
--
ALTER TABLE `articles_saves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_save` (`id_user`),
  ADD KEY `fk_article_save` (`id_article`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment` (`articleId`);

--
-- Index pour la table `fact`
--
ALTER TABLE `fact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `articles_saves`
--
ALTER TABLE `articles_saves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `fact`
--
ALTER TABLE `fact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`categoryId`) REFERENCES `category` (`idCategory`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`userId`) REFERENCES `user` (`idUser`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `articles_saves`
--
ALTER TABLE `articles_saves`
  ADD CONSTRAINT `fk_article_save` FOREIGN KEY (`id_article`) REFERENCES `article` (`idArticle`),
  ADD CONSTRAINT `fk_user_save` FOREIGN KEY (`id_user`) REFERENCES `user` (`idUser`);

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment` FOREIGN KEY (`articleId`) REFERENCES `article` (`idArticle`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
