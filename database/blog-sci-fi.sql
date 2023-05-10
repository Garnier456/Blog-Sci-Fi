-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2023 at 01:31 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog-sci-fi`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `idArticle` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `summary` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `userId` int NOT NULL,
  `categoryId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`idArticle`, `title`, `summary`, `content`, `image`, `createdAt`, `userId`, `categoryId`) VALUES
(40, '« Dune » : où sont les fans de l’œuvre de Frank Herbert ?', 'Depuis sa publication en 1965, le livre a connu un phénoménal succès en librairie. Pourtant, la communauté de ses fans est peu visible et son impact sur la culture populaire encore minime. Le film de Denis Villeneuve changera-t-il la donne ?', 'Vous pouvez partager un article en cliquant sur les icônes de partage en haut à droite de celui-ci. \r\nLa reproduction totale ou partielle d’un article, sans l’autorisation écrite et préalable du Monde, est strictement interdite. \r\nPour plus d’informations, consultez nos conditions générales de vente. \r\nPour toute demande d’autorisation, contactez syndication@lemonde.fr. \r\nEn tant qu’abonné, vous pouvez offrir jusqu’à cinq articles par mois à l’un de vos proches grâce à la fonctionnalité « Offrir un article ». \r\n\r\nhttps://www.lemonde.fr/pixels/article/2021/09/18/dune-ou-sont-les-fans-de-l-uvre-de-frank-herbert_6095142_4408996.html\r\n\r\nLes fans de Dune existent-ils ? Ont-ils disparu, comme l’eau a disparu d’Arrakis, la planète désertique imaginée par l’écrivain américain Frank Herbert ? Ou vivent-ils repliés dans de métaphoriques sietchs, ces abris souterrains dans lesquels le peuple des Fremen attend son heure avant de déferler sur le monde ?\r\n\r\nDune, c’est un colossal succès littéraire né en 1965, confirmé par ses cinq suites « officielles » jusqu’en 1985 et entretenu depuis la fin des années 1990 par Brian Herbert, le prolixe fils de l’auteur. Des dizaines de millions d’exemplaires vendus, plusieurs tentatives d’adaptations plus ou moins heureuses et, depuis le 15 septembre, un nouveau blockbuster hollywoodien, réalisé par le Canadien Denis Villeneuve.\r\n\r\nPour autant, n’en déplaise aux passionnés du « duniverse », il faut reconnaître que si Dune a eu dans les librairies un impact comparable à celui du Seigneur des anneaux ou de Harry Potter, son influence sur la culture populaire reste discrète.\r\n\r\nEt on ne parle pas simplement ici des experts de la geste dunienne : on imagine mal croiser un amateur du dimanche vêtu d’un tee-shirt à l’effigie de Paul Atréides, le héros de la saga, ou avec une peluche de ver de sable sous le bras. « C’est le grand paradoxe de Dune : le fait d’avoir une communauté immense mais invisible », nous explique Usul, vidéaste et chroniqueur pour Mediapart, dont les spectateurs, bien que fidèles, doivent être peu nombreux à réaliser que son pseudonyme est tiré de l’œuvre d’Herbert.', '../public/images/35ef824f43a55c2e9831080a1fa1db0a.jpg', '2023-04-26 00:00:00', 11, 1),
(41, 'Le Cycle de Fondation ', 'En ce début de treizième millénaire, l\'Empire n\'a jamais été aussi puissant, aussi étendu à travers toute la Galaxie.', 'En ce début de treizième millénaire, l\'Empire n\'a jamais été aussi puissant, aussi étendu à travers toute la Galaxie. C\'est dans sa capitale, Trantor, que l\'éminent savant Hari Seldon invente la psychohistoire, une science nouvelle permettant de prédire l\'avenir. Grâce à elle, Seldon prévoit l\'effondrement de l\'Empire d\'ici cinq siècles, suivi d\'une ère de ténèbres de trente mille ans. Réduire cette période à mille ans est peut-être possible, à condition de mener à terme son projet : la Fondation, chargée de rassembler toutes les connaissances humaines. Une entreprise visionnaire qui rencontre de nombreux et puissants détracteurs…\r\nRécompensé par le prix Hugo de la \"meilleure série de science-fiction de tous les temps\", Le Cycle de Fondation est l’œuvre socle de la SF moderne, celle que tous les amateurs du genre ont lue ou liront un jour.', '../public/images/fondation-isaac-asimov.jpg', '2023-04-26 00:00:00', 11, 3),
(42, 'Ubisoft, un fleuron français du jeu vidéo qui vacille', 'Créé dans les années 1980 par la famille Guillemot, le français Ubisoft est devenu un des géants de l’industrie vidéoludique. Dans un contexte post-pandémie compliqué, l’éditeur semble rencontrer plus de difficultés que ses concurrents', 'Après deux ans de croissance pendant la pandémie, l’industrie vidéoludique doit faire face à un ralentissement du marché. Les joueurs ne sont plus confinés chez eux et la sortie de la nouvelle génération des consoles de Microsoft (Xbox Series) et de Sony (PS5) a été perturbée par les pénuries de composants électroniques. En 2022, le marché mondial des jeux a généré 184,4 milliards de dollars (171,5 milliards de francs) de revenus selon le cabinet spécialisé Newzoo, soit une baisse de 4,3% par rapport à l’année précédente.\r\n\r\n', '../public/images/6b22316_1668623514170-35443006275-26ced56faf-h.jpeg', '2023-04-26 00:00:00', 11, 5),
(43, 'La horde du Contrevent', 'Ils sont la 34e Horde du Contrevent. Golgoth ouvre la marche ; derrière lui, Sov, le scribe, sur les épaules duquel l’avenir de la Horde tout entière va bientôt reposer…', 'Le vent souffle toujours autant. Les marcheurs étaient conscients de la difficulté de la nouvelle entreprise, mais entre savoir et vivre… En effet, le passage aquatique se révèle encore pire qu\'escompté : les tensions montent au fur et à mesure et l\'intransigeance légendaire de Golgoth fait que le groupe ne tarde pas à se séparer. La lutte se fait sur tous les fronts : contre les éléments naturels et surtout, contre eux-mêmes. Cette relecture du roman d’Alain', '../public/images/Couv_311051.jpg', '2023-05-02 00:00:00', 11, 4),
(44, 'The Expanse', 'Au xxive siècle, le Système solaire est entièrement colonisé. Trois grandes puissances se trouvent impliquées dans une guerre froide : la Terre,', 'Au xxive siècle, le Système solaire est entièrement colonisé. Trois grandes puissances se trouvent impliquées dans une guerre froide : la Terre, appauvrie en ressources et dirigée par les Nations unies ; Mars, colonie devenue indépendante sous l\'égide de la République du Congrès martien et disposant de la flotte la plus avancée technologiquement ; enfin, les colonies de la ceinture d\'astéroïdes, dont les colons sont surexploités par la Terre et Mars et qui suivent plus ou moins le mouvement indépendantiste de l\'Alliance des Planètes Extérieures (APE).\r\n\r\nC\'est dans ce contexte de tensions que le cargo Canterbury est détruit par un vaisseau inconnu, ne laissant que quelques survivants dirigés par James Holden, second du cargo. Cet incident menace de faire exploser les tensions entre la Terre, Mars et l\'APE, et Holden et son groupe partent à la recherche des responsables de cet attentat. Dans le même temps, le détective Josephus Miller, né sur la station Cérès dans la ceinture d\'astéroïdes, a pour mission de retrouver une jeune femme, Julie Mao, fille de Jules-Pierre Mao, un des plus riches industriels du système solaire. Lorsque leurs enquêtes se rejoignent, Holden et Miller découvrent que la disparition de la jeune femme et la destruction du Canterbury sont liées à une vaste conspiration qui menace la paix dans le Système solaire et la survie de l\'humanité.', '../public/images/wp3067715.jpg', '2023-05-02 00:00:00', 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `articles_saves`
--

CREATE TABLE `articles_saves` (
  `id_articles_saves` int NOT NULL,
  `id_user` int NOT NULL,
  `id_article` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles_saves`
--

INSERT INTO `articles_saves` (`id_articles_saves`, `id_user`, `id_article`) VALUES
(1, 11, 44),
(5, 11, 44);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idCategory` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idCategory`, `name`, `icon`) VALUES
(1, 'Film', 'images/camera.png'),
(2, 'Série', 'images/tv.png'),
(3, 'Livre', 'images/books.png'),
(4, 'Comics', 'images/comic.png'),
(5, 'Jeux Vidéo', 'images/game-controller.png');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idComment` int NOT NULL,
  `nickname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `articleId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`idComment`, `nickname`, `content`, `createdAt`, `articleId`) VALUES
(14, 'slùd,gùsdl,g', 'ùsdvms;m;smmqms;sqm', '2023-05-10 13:28:11', 43),
(15, 'kfpzkfpzkpzf', 'ùfùzf;ùzfsfsfs', '2023-05-10 13:31:25', 43);

-- --------------------------------------------------------

--
-- Table structure for table `fact`
--

CREATE TABLE `fact` (
  `idFact` int NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fact`
--

INSERT INTO `fact` (`idFact`, `content`) VALUES
(1, 'The phrase ‘parallel universe’ was first used in H. G. Wells’ 1923 novel Men like Gods.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `email`, `password`, `isAdmin`) VALUES
(11, 'Olivier', 'saturn-solar@outlook.com', '$2y$10$ahEEJRhTyuLa61y7cBXHiukShsyJysmDeGwao.4CVZ68cQ9JPK13S', 1),
(12, 'toto', 'mr.ogarnier@gmail.com', '$2y$10$V4xHO3fxUZ.7aVDvweo/ce9OwlhrLrBKSkU19qJAlRnr.lZestRBK', 0),
(13, 'Clément', 'kanzan@gmail.com', '$2y$10$mZIP3ltvnGDm8u90WiMvPe9/GwOTZlJf/ZcdnSTK9q3CZwYbbTuau', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idArticle`),
  ADD KEY `fk_user` (`userId`),
  ADD KEY `fk_category` (`categoryId`);

--
-- Indexes for table `articles_saves`
--
ALTER TABLE `articles_saves`
  ADD PRIMARY KEY (`id_articles_saves`),
  ADD KEY `fk_user_save` (`id_user`),
  ADD KEY `fk_article_save` (`id_article`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idComment`),
  ADD KEY `fk_comment` (`articleId`);

--
-- Indexes for table `fact`
--
ALTER TABLE `fact`
  ADD PRIMARY KEY (`idFact`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `idArticle` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `articles_saves`
--
ALTER TABLE `articles_saves`
  MODIFY `id_articles_saves` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idComment` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `fact`
--
ALTER TABLE `fact`
  MODIFY `idFact` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`categoryId`) REFERENCES `category` (`idCategory`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`userId`) REFERENCES `user` (`idUser`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `articles_saves`
--
ALTER TABLE `articles_saves`
  ADD CONSTRAINT `fk_article_save` FOREIGN KEY (`id_article`) REFERENCES `article` (`idArticle`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_user_save` FOREIGN KEY (`id_user`) REFERENCES `user` (`idUser`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment` FOREIGN KEY (`articleId`) REFERENCES `article` (`idArticle`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
