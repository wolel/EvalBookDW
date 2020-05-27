-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 19 mai 2020 à 15:52
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date`, `type`, `description`, `name`) VALUES
(1, '', '', '0000-00-00 00:00:00', 'Percussion electronique', 'Elle est composée d\'un fût qui peut être en bois, en aluminium, en acier ou en divers alliages à base de cuivre, de deux peaux (de frappe et de résonance), de parties métalliques fixes ou mobiles comme le timbre qui la différencie du tambour. Les peaux peuvent être d\'origine animale ou synthétique. Elle partage plusieurs caractéristiques des autres éléments d\'une batterie, à savoir la grosse caisse et les toms (aiguë, médium et grave). Elle est souvent fixée sur un trépied mais peut aussi être fixée à une sangle notamment pour la Samba.', 'La caisse claire'),
(2, '', '', '0000-00-00 00:00:00', 'Percussion africaine', 'La caixa comprend un fût de métal de 12 à 14 pouces de diamètre et 5 à 20 centimètres de hauteur, classiquement en acier. Certains fabricants proposent des fûts en aluminium pour plus de légèreté. Les caisses les plus profondes et les plus larges sont surnommées caixa de guerra (littéralement : caisses de guerre), en référence à leur origine militaire. Les caixas plus petites et plus fines, proches de caisses claires piccolo, sont appelées tarols.\r\n\r\nLe timbre est constitué d\'un simple fil d\'acier ou de cordes de guitare tendues en travers de la membrane, contrairement à la caisse claire classique où le timbre est placé sous la peau. Cela leur confère un son particulièrement sec.\r\n\r\nLes membranes sont toujours en matériaux synthétiques, et il n\'existe pas de différence notable dans l\'épaisseur de la peau de frappe et l\'épaisseur de la peau inférieure.', 'La caixa'),
(3, '', '', '0000-00-00 00:00:00', 'Instrument à cordes', 'La kora est un instrument de musique à cordes originaire du Mali que l\'on trouve dans toute l\'Afrique de l\'Ouest. Selon la légende, la première kora était l\'instrument personnel d\'une femme-génie qui vivait dans les grottes de Missirikoro au Mali.', 'La kora'),
(4, '', '', '0000-00-00 00:00:00', 'Instruments à vent', 'La flûte mandingue est jouée principalement par les malinkés et les kouranko.\r\n\r\nPlus courte que la flûte Peule (flûte du Fouta Djallon), la différence se fait au niveau du répertoire musical mais également dans les techniques de jeu et de solo, ainsi que dans la gamme utilisée et les instruments qui l’accompagnent.\r\n\r\nLa décoration de la flûte mandingue est généralement faite de cuir et de cauris.\r\n\r\nLa flûte guinéenne, qu’elle soit malinké ou peule, se caractérise par une technique de jeu spécifique : on joue parfois avec la gorge. Lorsqu’on souffle une note les cordes vocales vibrent afin d’obtenir la même note. Le son cumulé de la flûte et de la gorge donne un effet spectaculaire.\r\n\r\nCette technique permet aux flûtistes de véritablement parler dans leur flûte : les Malinkés peuvent parler en utilisant les mêmes intonations que les louanges des griots. Parfois des mots s’échappent sans que la note soit soufflée. On peut alors clairement comprendre la signification.\r\n\r\nCes flûtes sont fabriquées à partir d’un roseau généralement appelé \"tambin\", qui pousse au bord des marais.\r\n\r\nConçues dans la plus pure tradition par un flûtiste français qui va chercher et séléctionner ses roseaux sur place ces flûtes sont de très bonne qualité.\r\n\r\nUn verni est appliqué afin d\'accroître la résistance du roseau et chaque flûte dispose d\'un cordon pour une meilleure tenue.\r\n\r\n3 tonalités sont actuellement disponibles : LA - SOL - SOL#\r\n\r\n(choisir votre tonalité dans le menu déroulant)\r\n \r\nLongueur : entre 60 et 70 cm selon la tonalité.', 'Flûte Mandingue (Malinké)'),
(5, '', '', '0000-00-00 00:00:00', 'Histoire de la musique africaine', 'Musique traditionnelle\r\nCette section est vide, insuffisamment détaillée ou incomplète. Votre aide est la bienvenue ! Comment faire ?\r\nLa musique polyrythmique permet à l\'individu de trouver sa place dans le groupe, tout en donnant à ce dernier, une signature unique. La musique d\'Afrique est aussi liée aux griots, les conteurs traditionnels qui véhiculent la mémoire de leur peuple par des transmissions orales. Parmi les études au sujet de la musique africaine se trouve Littérature et musique populaire [i.e. traditionnelle] en Afrique noire, par Eno Belinga (Eno).\r\n\r\nL\'afropop est un terme parfois utilisé pour désigner la musique contemporaine de la pop africaine. Caractérisée par un mélange des danses et des sons entre la musique pop américaine et la musique africaine, l\'afropop ne se réfère pas à un style ou à un son musical spécifique, mais le mot est utilisé comme un terme général pour désigner la musique populaire africaine.\r\n\r\nMusique actuelle\r\nLa musique africaine actuelle est très variée. En restant très réducteur sur la richesse des musiques africaines, on peut décrire quelques tendances dans les musiques actuelles. Les styles world music, hip-hop, Afropop, jazz et reggae existent dans tous les pays d\'Afrique. Les musiques locales sont remises au goût du jour, en diverses versions jazz ou pop.\r\n\r\nBeaucoup de musiques arrivent difficilement à percer dans le reste du monde, mais quelques genres musicaux ont connu un réel succès mondial : Afrobeat, (Fela Kuti), la rumba, les Éthiopiques ou plus récemment le Coupé-décalé.\r\n\r\nCette musique africaine est marquée de nos jours par de nouveaux chanteur tels que les P-Square1, Davido, Timaya (en), etc. qui font des musiques plus dansantes.', '');

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(128) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `message`, `from`, `created`) VALUES
(1, 'hellow world', 'admin', '2020-04-30 19:11:35'),
(2, 'brazil', 'edde', '2020-04-30 19:11:56'),
(13, 'chante une chanson stp', 'edde', '2020-04-30 19:39:27'),
(14, 'une autre', 'edde', '2020-04-30 19:39:34'),
(15, 'feminist message', 'Anna', '2020-04-30 19:44:54'),
(16, 'message', 'ed', '2020-04-30 19:47:21'),
(17, 'sans un e', 'sany', '2020-04-30 19:51:31'),
(18, 'load me pls', 'edd', '2020-04-30 19:53:06'),
(19, 'fait des isites', 'edinaa', '2020-04-30 19:59:20'),
(20, 'edr', 'edd', '2020-04-30 20:25:19'),
(21, 'message1', 'edd', '2020-05-02 09:16:10'),
(22, 'message1', 'edd', '2020-05-02 09:16:12'),
(23, 'message', 'edd', '2020-05-02 09:17:34'),
(24, 'message', 'edd', '2020-05-02 09:17:36');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `articleid` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  `content` varchar(255) NOT NULL,
  `title` varchar(200) NOT NULL,
  `user_id` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `articleid`, `author`, `comment`, `date`, `content`, `title`, `user_id`) VALUES
(1, 0, '', '', '0000-00-00 00:00:00', 'un commentraire', 'un titre', 2),
(2, 0, '', '', '0000-00-00 00:00:00', 'un commentraire', 'un titre', 2),
(3, 0, '', '', '0000-00-00 00:00:00', 'commm', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `image` varchar(255) NOT NULL,
  `img_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`image`, `img_product`) VALUES
('upload/58105masque_1.jpg', 7);

-- --------------------------------------------------------

--
-- Structure de la table `image_article`
--

CREATE TABLE `image_article` (
  `id` bigint(20) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `id_article` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `image_article`
--

INSERT INTO `image_article` (`id`, `image_name`, `image`, `id_article`) VALUES
(1, 'img_1', 'img/articles/article_img_01.jpg', 1),
(2, 'img_2', 'img/articles/article_img_02.jpg', 2),
(3, 'img_3', 'img/articles/article_img_03.jpg', 3),
(4, 'img_4', 'img/articles/article_img_04.jpg', 4);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `date`, `product_userID`) VALUES
(1, 'Masques colorés', '$2.01', 'ligula sit amet eleifend pede libero quis orci nullam molestie nibh in', '2020-05-18 03:00:12', 7),
(2, 'visières en plexi', '$9.16', 'pretium nisl ut volutpat sapien arcu sed augue aliquam erat volutpat in congue etiam', '2020-05-17 22:14:39', 7),
(3, 'protection faciale artisanale', '$0.05', 'sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at', '2020-05-19 10:01:43', 5),
(4, 'protection faciale artisanale colorée', '55 euro', 'protection faciale artisanale colorée', '2020-05-19 10:03:51', 5),
(5, 'hello', '2 euro', 'hello world', '2020-05-19 12:45:15', 7),
(6, 'TITRE', '25 euro/pièce', 'CONTENT', '2020-05-19 13:49:44', 7),
(7, 'TITLE', 'PRICE', 'DESCRIPTION', '2020-05-19 13:50:06', 7);

-- --------------------------------------------------------

--
-- Structure de la table `products1`
--

CREATE TABLE `products1` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` varchar(11) NOT NULL,
  `description` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `products1`
--

INSERT INTO `products1` (`id`, `title`, `price`, `description`, `date`, `product_userID`) VALUES
(1, 'Legends of the Fall', '0', 'seize 24/7 deliverables', '2020-05-16 12:50:51', 7),
(2, 'Treasure Island', '0', 'envisioneer vertical interfaces', '2020-05-16 12:50:55', 7),
(3, 'Needful Things', '0', 'envisioneer vertical e-markets', '2020-05-15 16:09:09', 0),
(4, 'Loose Change: Second Edition', '0', 'embrace granular methodologies', '2020-05-15 16:09:13', 0),
(5, 'Wild Heritage', '0', 'evolve user-centric relationships', '0000-00-00 00:00:00', 0),
(6, 'Twelve Angry Men', '0', 'e-enable impactful portals', '0000-00-00 00:00:00', 0),
(7, 'Incredibly True Adventure of Two Girls in Love, The', '0', 'incentivize out-of-the-box networks', '0000-00-00 00:00:00', 0),
(8, 'Moulin Rouge', '0', 'enhance frictionless models', '0000-00-00 00:00:00', 0),
(9, 'Weird Science', '0', 'synthesize magnetic applications', '0000-00-00 00:00:00', 0),
(10, 'The Hire: Powder Keg', '0', 'repurpose web-enabled e-services', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `selling_article`
--

CREATE TABLE `selling_article` (
  `id` bigint(20) NOT NULL,
  `selling_name` varchar(255) NOT NULL,
  `selling_price` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image_selling_article` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `selling_article`
--

INSERT INTO `selling_article` (`id`, `selling_name`, `selling_price`, `content`, `image_selling_article`) VALUES
(1, 'Kora', '1250$', 'Kora maliense à la main avec du bois et gourde. Sonores très agréable. Premier travail de qualité. Dimensions: 135 x 45 cm', 'img/articles/article_img_01.jpg'),
(2, 'Malinké flute', '1250$', 'Flûte Mandingue (Malinké)\r\n0.0 star rating\r\nRéférence : FLUT76\r\n\r\nEtat : Neuf\r\n\r\nLa flûte mandingue est jouée principalement par les malinkés et les kouranko.\r\n\r\nPlus courte que la flûte Peule (flûte du Fouta Djallon), la différence se fait au niveau du répertoire musical...', 'img/articles/malinke_flute.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `uploading`
--

CREATE TABLE `uploading` (
  `file_name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `upload_userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `uploading`
--

INSERT INTO `uploading` (`file_name`, `title`, `price`, `description`, `upload_userID`) VALUES
('photo masque 1', 'masques', '25', '', 7),
('upload/381169masque-de-protection-faciale-black.jpg', 'masques faciales 2', '12,50 euro/piÃ¨ce', '', 7),
('upload/542410masque-de-protection-faciale-black.jpg', 'masques faciales 3', '17,50 euro/pièce', 'Masques tissus colorées fait main', 7),
('upload/176570masque_3.jpg', 'masques faciales 5', '10 euro/pièce', 'Masques tissus colorées fait main', 7),
('upload/315531visiã¨re_1.jpg', 'visiÃ¨res plexi_1', '25,75 euro/piÃ¨ce', 'VisiÃ¨res trÃ¨s rÃ©sistantes faites main', 7),
('moto.png', 'Moto', '1200 euro', 'Moto neuve', 7),
('upload_img/871109visiã¨re_1.jpg', 'visiÃ¨res plexi_2', '25 euro/piÃ¨ce', 'VisiÃ¨res trÃ¨s rÃ©sistantes faites main', 7),
('upload_img/16312moto.png', 'moto 1', '1200 euro', 'moto neuve', 7),
('upload/865496moto.png', 'moto enfants', '1200 euro', 'Moto enfant neuve', 7),
('upload/557574masque_1.jpg', 'masques faciales 1', '12,50 euro/piÃ¨ce', 'masques faciales 1', 7),
('upload/787876masque_1.jpg', 'un titre', '100 euro', 'une description brÃ¨ve', 7),
('upload/931292masque_4.jpg', 'titre essai 1', '100 euro', 'description 1', 7),
('photo masque 1', 'masques', '25', '', 7),
('upload/381169masque-de-protection-faciale-black.jpg', 'masques faciales 2', '12,50 euro/piÃ¨ce', '', 7),
('upload/542410masque-de-protection-faciale-black.jpg', 'masques faciales 3', '17,50 euro/pièce', 'Masques tissus colorées fait main', 7),
('upload/176570masque_3.jpg', 'masques faciales 5', '10 euro/pièce', 'Masques tissus colorées fait main', 7),
('upload/315531visiã¨re_1.jpg', 'visiÃ¨res plexi_1', '25,75 euro/piÃ¨ce', 'VisiÃ¨res trÃ¨s rÃ©sistantes faites main', 7),
('moto.png', 'Moto', '1200 euro', 'Moto neuve', 7),
('upload_img/871109visiã¨re_1.jpg', 'visiÃ¨res plexi_2', '25 euro/piÃ¨ce', 'VisiÃ¨res trÃ¨s rÃ©sistantes faites main', 7),
('upload_img/16312moto.png', 'moto 1', '1200 euro', 'moto neuve', 7),
('upload/865496moto.png', 'moto enfants', '1200 euro', 'Moto enfant neuve', 7),
('upload/557574masque_1.jpg', 'masques faciales 1', '12,50 euro/piÃ¨ce', 'masques faciales 1', 7),
('upload/787876masque_1.jpg', 'un titre', '100 euro', 'une description brÃ¨ve', 7),
('upload/931292masque_4.jpg', 'titre essai 1', '100 euro', 'description 1', 7),
('photo masque 1', 'masques', '25', '', 7),
('upload/381169masque-de-protection-faciale-black.jpg', 'masques faciales 2', '12,50 euro/piÃ¨ce', '', 7),
('upload/542410masque-de-protection-faciale-black.jpg', 'masques faciales 3', '17,50 euro/pièce', 'Masques tissus colorées fait main', 7),
('upload/176570masque_3.jpg', 'masques faciales 5', '10 euro/pièce', 'Masques tissus colorées fait main', 7),
('upload/315531visiã¨re_1.jpg', 'visiÃ¨res plexi_1', '25,75 euro/piÃ¨ce', 'VisiÃ¨res trÃ¨s rÃ©sistantes faites main', 7),
('moto.png', 'Moto', '1200 euro', 'Moto neuve', 7),
('upload_img/871109visiã¨re_1.jpg', 'visiÃ¨res plexi_2', '25 euro/piÃ¨ce', 'VisiÃ¨res trÃ¨s rÃ©sistantes faites main', 7),
('upload_img/16312moto.png', 'moto 1', '1200 euro', 'moto neuve', 7),
('upload/865496moto.png', 'moto enfants', '1200 euro', 'Moto enfant neuve', 7),
('upload/557574masque_1.jpg', 'masques faciales 1', '12,50 euro/piÃ¨ce', 'masques faciales 1', 7),
('upload/787876masque_1.jpg', 'un titre', '100 euro', 'une description brÃ¨ve', 7),
('upload/931292masque_4.jpg', 'titre essai 1', '100 euro', 'description 1', 7);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pswUsers` longtext NOT NULL,
  `dateUsers` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pswUsers`, `dateUsers`, `role`) VALUES
(1, 'felix', 'wola.elena@yahoo.com', '123', '0000-00-00 00:00:00', ''),
(5, 'test', 'test@gmail.com', '$2y$10$KAxKm.uHU0VtCyH0KAKuse400wQJvBS1mbVSAeSiAULdSjbyhLqA.', '2020-05-13 08:36:48', 'seller'),
(7, 'joe', 'joe@gmail.com', '$2y$10$KAxKm.uHU0VtCyH0KAKuse400wQJvBS1mbVSAeSiAULdSjbyhLqA.', '2020-05-13 08:36:40', 'seller'),
(14, 'wassim', 'wassim@yahoo.com', '$2y$10$jhdGL3WSq87ME2JnT//A0OnFZGAvKuHW4Tnx44IHarPTP/lwjD0jy', '2020-05-13 08:35:46', 'visitor');

-- --------------------------------------------------------

--
-- Structure de la table `users_comments`
--

CREATE TABLE `users_comments` (
  `idCom` int(11) NOT NULL,
  `usersComTitle` varchar(255) NOT NULL,
  `usersCom` longtext NOT NULL,
  `usersDateCom` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `users_comments`
--

INSERT INTO `users_comments` (`idCom`, `usersComTitle`, `usersCom`, `usersDateCom`) VALUES
(1, 'potager', 'Débuter un potager est une étape fascinante dans la vie d\'un jardinier. Choisir la méthode d\'exploitation, classique, en lasagnes, en carrés, cultiver en bio, pratiquer la rotation des cultures sont autant de possibilités à explorer. Savoir travailler le sol, choisir les légumes qui y pousseront, les semer, les planter, les soigner, les multiplier et les récolter, mais aussi les conserver et les cuisiner... Vous allez tout savoir sur le potager !\r\n', '2020-04-24 09:31:43'),
(10, 'circuit hot weels', 'circuit courts enfants..', '2020-04-24 20:12:47'),
(19, 'La culture des champignons', 'err', '2020-04-24 20:49:32');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`articleid`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD KEY `img_product` (`img_product`),
  ADD KEY `images_ibfk_1` (`img_product`);

--
-- Index pour la table `image_article`
--
ALTER TABLE `image_article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_userID` (`product_userID`);

--
-- Index pour la table `products1`
--
ALTER TABLE `products1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `selling_article`
--
ALTER TABLE `selling_article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `uploading`
--
ALTER TABLE `uploading`
  ADD KEY `upload_userID` (`upload_userID`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- Index pour la table `users_comments`
--
ALTER TABLE `users_comments`
  ADD PRIMARY KEY (`idCom`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `image_article`
--
ALTER TABLE `image_article`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `products1`
--
ALTER TABLE `products1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `selling_article`
--
ALTER TABLE `selling_article`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `users_comments`
--
ALTER TABLE `users_comments`
  MODIFY `idCom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`img_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_userID`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `uploading`
--
ALTER TABLE `uploading`
  ADD CONSTRAINT `uploading_ibfk_1` FOREIGN KEY (`upload_userID`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
