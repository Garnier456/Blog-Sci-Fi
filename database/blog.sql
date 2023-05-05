-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2023 at 07:33 AM
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
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `intro` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` date NOT NULL,
  `user_id` int NOT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `intro`, `content`, `image`, `created_at`, `user_id`, `category_id`) VALUES
(40, '« Dune » : où sont les fans de l’œuvre de Frank Herbert ?', 'Depuis sa publication en 1965, le livre a connu un phénoménal succès en librairie. Pourtant, la communauté de ses fans est peu visible et son impact sur la culture populaire encore minime. Le film de Denis Villeneuve changera-t-il la donne ?', 'Vous pouvez partager un article en cliquant sur les icônes de partage en haut à droite de celui-ci. \r\nLa reproduction totale ou partielle d’un article, sans l’autorisation écrite et préalable du Monde, est strictement interdite. \r\nPour plus d’informations, consultez nos conditions générales de vente. \r\nPour toute demande d’autorisation, contactez syndication@lemonde.fr. \r\nEn tant qu’abonné, vous pouvez offrir jusqu’à cinq articles par mois à l’un de vos proches grâce à la fonctionnalité « Offrir un article ». \r\n\r\nhttps://www.lemonde.fr/pixels/article/2021/09/18/dune-ou-sont-les-fans-de-l-uvre-de-frank-herbert_6095142_4408996.html\r\n\r\nLes fans de Dune existent-ils ? Ont-ils disparu, comme l’eau a disparu d’Arrakis, la planète désertique imaginée par l’écrivain américain Frank Herbert ? Ou vivent-ils repliés dans de métaphoriques sietchs, ces abris souterrains dans lesquels le peuple des Fremen attend son heure avant de déferler sur le monde ?\r\n\r\nDune, c’est un colossal succès littéraire né en 1965, confirmé par ses cinq suites « officielles » jusqu’en 1985 et entretenu depuis la fin des années 1990 par Brian Herbert, le prolixe fils de l’auteur. Des dizaines de millions d’exemplaires vendus, plusieurs tentatives d’adaptations plus ou moins heureuses et, depuis le 15 septembre, un nouveau blockbuster hollywoodien, réalisé par le Canadien Denis Villeneuve.\r\n\r\nPour autant, n’en déplaise aux passionnés du « duniverse », il faut reconnaître que si Dune a eu dans les librairies un impact comparable à celui du Seigneur des anneaux ou de Harry Potter, son influence sur la culture populaire reste discrète.\r\n\r\nEt on ne parle pas simplement ici des experts de la geste dunienne : on imagine mal croiser un amateur du dimanche vêtu d’un tee-shirt à l’effigie de Paul Atréides, le héros de la saga, ou avec une peluche de ver de sable sous le bras. « C’est le grand paradoxe de Dune : le fait d’avoir une communauté immense mais invisible », nous explique Usul, vidéaste et chroniqueur pour Mediapart, dont les spectateurs, bien que fidèles, doivent être peu nombreux à réaliser que son pseudonyme est tiré de l’œuvre d’Herbert.', 'images/35ef824f43a55c2e9831080a1fa1db0a.jpg', '2023-04-26', 11, 1),
(41, 'Le Cycle de Fondation ', 'En ce début de treizième millénaire, l\'Empire n\'a jamais été aussi puissant, aussi étendu à travers toute la Galaxie.', 'En ce début de treizième millénaire, l\'Empire n\'a jamais été aussi puissant, aussi étendu à travers toute la Galaxie. C\'est dans sa capitale, Trantor, que l\'éminent savant Hari Seldon invente la psychohistoire, une science nouvelle permettant de prédire l\'avenir. Grâce à elle, Seldon prévoit l\'effondrement de l\'Empire d\'ici cinq siècles, suivi d\'une ère de ténèbres de trente mille ans. Réduire cette période à mille ans est peut-être possible, à condition de mener à terme son projet : la Fondation, chargée de rassembler toutes les connaissances humaines. Une entreprise visionnaire qui rencontre de nombreux et puissants détracteurs…\r\nRécompensé par le prix Hugo de la \"meilleure série de science-fiction de tous les temps\", Le Cycle de Fondation est l’œuvre socle de la SF moderne, celle que tous les amateurs du genre ont lue ou liront un jour.', 'images/fondation-isaac-asimov.jpg', '2023-04-26', 11, 3),
(42, 'Ubisoft, un fleuron français du jeu vidéo qui vacille', 'Créé dans les années 1980 par la famille Guillemot, le français Ubisoft est devenu un des géants de l’industrie vidéoludique. Dans un contexte post-pandémie compliqué, l’éditeur semble rencontrer plus de difficultés que ses concurrents', 'Après deux ans de croissance pendant la pandémie, l’industrie vidéoludique doit faire face à un ralentissement du marché. Les joueurs ne sont plus confinés chez eux et la sortie de la nouvelle génération des consoles de Microsoft (Xbox Series) et de Sony (PS5) a été perturbée par les pénuries de composants électroniques. En 2022, le marché mondial des jeux a généré 184,4 milliards de dollars (171,5 milliards de francs) de revenus selon le cabinet spécialisé Newzoo, soit une baisse de 4,3% par rapport à l’année précédente.\r\n\r\n', 'images/6b22316_1668623514170-35443006275-26ced56faf-h.jpeg', '2023-04-26', 11, 5),
(43, 'La horde du Contrevent', 'Ils sont la 34e Horde du Contrevent. Golgoth ouvre la marche ; derrière lui, Sov, le scribe, sur les épaules duquel l’avenir de la Horde tout entière va bientôt reposer…', 'Le vent souffle toujours autant. Les marcheurs étaient conscients de la difficulté de la nouvelle entreprise, mais entre savoir et vivre… En effet, le passage aquatique se révèle encore pire qu\'escompté : les tensions montent au fur et à mesure et l\'intransigeance légendaire de Golgoth fait que le groupe ne tarde pas à se séparer. La lutte se fait sur tous les fronts : contre les éléments naturels et surtout, contre eux-mêmes. Cette relecture du roman d’Alain', 'images/Couv_311051.jpg', '2023-05-02', 11, 4),
(44, 'The Expanse', 'Au xxive siècle, le Système solaire est entièrement colonisé. Trois grandes puissances se trouvent impliquées dans une guerre froide : la Terre,', 'Au xxive siècle, le Système solaire est entièrement colonisé. Trois grandes puissances se trouvent impliquées dans une guerre froide : la Terre, appauvrie en ressources et dirigée par les Nations unies ; Mars, colonie devenue indépendante sous l\'égide de la République du Congrès martien et disposant de la flotte la plus avancée technologiquement ; enfin, les colonies de la ceinture d\'astéroïdes, dont les colons sont surexploités par la Terre et Mars et qui suivent plus ou moins le mouvement indépendantiste de l\'Alliance des Planètes Extérieures (APE).\r\n\r\nC\'est dans ce contexte de tensions que le cargo Canterbury est détruit par un vaisseau inconnu, ne laissant que quelques survivants dirigés par James Holden, second du cargo. Cet incident menace de faire exploser les tensions entre la Terre, Mars et l\'APE, et Holden et son groupe partent à la recherche des responsables de cet attentat. Dans le même temps, le détective Josephus Miller, né sur la station Cérès dans la ceinture d\'astéroïdes, a pour mission de retrouver une jeune femme, Julie Mao, fille de Jules-Pierre Mao, un des plus riches industriels du système solaire. Lorsque leurs enquêtes se rejoignent, Holden et Miller découvrent que la disparition de la jeune femme et la destruction du Canterbury sont liées à une vaste conspiration qui menace la paix dans le Système solaire et la survie de l\'humanité.', 'images/wp3067715.jpg', '2023-05-02', 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `articles_saves`
--

CREATE TABLE `articles_saves` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_article` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles_saves`
--

INSERT INTO `articles_saves` (`id`, `id_user`, `id_article`) VALUES
(1, 11, 44),
(5, 11, 44);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `icons` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icons`) VALUES
(1, 'Film', 'images/camera.png'),
(2, 'Série', 'images/tv.png'),
(3, 'Livre', 'images/books.png'),
(4, 'Comics', 'images/comic.png'),
(5, 'Jeux Vidéo', 'images/game-controller.png');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `article_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

CREATE TABLE `facts` (
  `id` int NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `content`) VALUES
(1, 'The phrase ‘parallel universe’ was first used in H. G. Wells’ 1923 novel Men like Gods.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `is_admin`) VALUES
(11, 'Olivier', 'saturn-solar@outlook.com', '$2y$10$ahEEJRhTyuLa61y7cBXHiukShsyJysmDeGwao.4CVZ68cQ9JPK13S', 1),
(12, 'toto', 'mr.ogarnier@gmail.com', '$2y$10$V4xHO3fxUZ.7aVDvweo/ce9OwlhrLrBKSkU19qJAlRnr.lZestRBK', 0),
(13, 'Clément', 'kanzan@gmail.com', '$2y$10$mZIP3ltvnGDm8u90WiMvPe9/GwOTZlJf/ZcdnSTK9q3CZwYbbTuau', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`user_id`),
  ADD KEY `fk_category` (`category_id`);

--
-- Indexes for table `articles_saves`
--
ALTER TABLE `articles_saves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_save` (`id_user`),
  ADD KEY `fk_article_save` (`id_article`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment` (`article_id`);

--
-- Indexes for table `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `articles_saves`
--
ALTER TABLE `articles_saves`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `facts`
--
ALTER TABLE `facts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `articles_saves`
--
ALTER TABLE `articles_saves`
  ADD CONSTRAINT `fk_article_save` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_user_save` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comment` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
