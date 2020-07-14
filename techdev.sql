-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 02 juil. 2020 à 14:25
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `techdev`
--

-- --------------------------------------------------------

--
-- Structure de la table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenue` text NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'post.png',
  `date` datetime NOT NULL,
  `posted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `abouts`
--

INSERT INTO `abouts` (`id`, `titre`, `contenue`, `auteur`, `image`, `date`, `posted`) VALUES
(1, 'Développeur web & mobile', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, tempore? Laborum dolor veritatis laudantium necessitatibus atque quae dolorum est beatae fugiat nemo sequi, aliquam cupiditate expedita! Inventore nam sint aperiam itaque. Inventore, qui molestias est numquam incidunt nam? Veritatis hic sunt possimus error aspernatur quibusdam atque. Excepturi atque minus quam, blanditiis veniam nobis rerum exercitationem cupiditate, omnis, adipisci natus inventore voluptates pariatur debitis! Sit cupiditate ipsum itaque numquam deserunt vitae, praesentium, at, eius aliquid non tenetur consequatur sint laudantium earum facilis optio. Autem repudiandae laudantium obcaecati? Doloremque maiores, doloribus, aliquid hic architecto harum repellat eveniet voluptas odit dolorum dolores praesentium.', 'sitrakaandriam@gmail.com', 'fa fa-laptop', '2020-04-21 13:13:24', 1),
(2, 'Etudiants & Professionnelle', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil libero hic consectetur vitae. Ab voluptates labore explicabo culpa, earum blanditiis iste possimus temporibus recusandae expedita rem odit ratione cum dolore consequuntur dignissimos suscipit a dicta ipsum eum voluptatum dolorum cupiditate. Sapiente blanditiis est eveniet ipsa distinctio, obcaecati adipisci? Corporis quas adipisci distinctio dicta earum voluptatibus explicabo? Similique blanditiis, aperiam laborum eius temporibus nam! Aperiam, tenetur numquam. Incidunt, velit vel! Cupiditate hic, repellat dolorum culpa vel asperiores dicta reiciendis deserunt eligendi fugiat saepe. Voluptate molestias necessitatibus ipsam, accusantium neque impedit nihil explicabo voluptatum minus sit deleniti nemo, illum atque rem aliquid.', 'michelfreddy1992@gmail.com', 'fa fa-graduation-cap', '2020-04-21 13:13:36', 1),
(3, 'Téchnicien & admin réseaux', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil libero hic consectetur vitae. Ab voluptates labore explicabo culpa, earum blanditiis iste possimus temporibus recusandae expedita rem odit ratione cum dolore consequuntur dignissimos suscipit a dicta ipsum eum voluptatum dolorum cupiditate. Sapiente blanditiis est eveniet ipsa distinctio, obcaecati adipisci? Corporis quas adipisci distinctio dicta earum voluptatibus explicabo? Similique blanditiis, aperiam laborum eius temporibus nam! Aperiam, tenetur numquam. Incidunt, velit vel! Cupiditate hic, repellat dolorum culpa vel asperiores dicta reiciendis deserunt eligendi fugiat saepe. Voluptate molestias necessitatibus ipsam, accusantium neque impedit nihil explicabo voluptatum minus sit deleniti nemo, illum atque rem aliquid.', 'jessicaramaroson@gmail.com', 'fa fa-server', '2020-04-21 13:13:51', 1);

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passw` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `nom`, `email`, `passw`, `token`, `role`) VALUES
(1, 'Freddy Michel', 'michelfreddy1992@gmail.com', 'd1acfdb6670030e602c2d7f7844cb2897e669b29', 'jkgfgdfgdfgdfgdfgfdsgsg', 'admin'),
(2, 'Jessica Ram', 'jessicaramaroson@gmail.com', '098cde739367af1b5c6928f08be6280001d29f39', 'jjdkgfgfgdfgdgdg', 'admin'),
(3, 'Sitraka', 'sitrakaandriam@gmail.com', '4373b76b03b9d806fa355c796b68b7044f2d568f', 'gfgdfgdgdgdgg', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenoms` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `prenoms`, `email`, `service`, `objet`, `message`, `date`, `seen`) VALUES
(29, 'NARISOA HARILALA', 'Freddy Michel', 'freddymichel1992@gmail.com', 'techdev-mada.uxdesign@techdev.dev', 'Test du formulaire de contact', 'dsdsdd', '2020-05-16 10:05:04', 1),
(30, 'SITRAKA', 'Andriamalala', 'sitrakaandriam@gmail.com', 'techdev-mada.tech@techdev.dev', 'Test du formulaire de contact', 'Message de Sitraka', '2020-05-16 10:09:36', 0),
(31, 'JESSICA', 'Ramaroson', 'jessicaramaroson@gmail.com', 'techdev-mada.prod@techdev.dev', 'Test du formulaire de contact numero 1', 'Message 2', '2020-05-16 10:11:04', 0),
(32, 'NARISOA HARILALA', 'Freddy Michel', 'michelfreddy1992@gmail.com', 'techdev-mada.dev@techdev.dev', 'Test du formulaire de contact numero 2', 'Message 3', '2020-05-16 10:11:45', 0),
(33, 'TONYA', 'Sylvanie', 'tonyasy@gmail.cim', 'techdev-mada.tech@techdev.dev', 'Test du formulaire de contact numero 4', 'Message 5', '2020-05-16 10:19:08', 0),
(34, 'KANG', 'So Ra', 'kangsora@gmail.com', 'techdev-mada.uxdesign@techdev.dev', 'Test du formulaire de contact', 'Message 4', '2020-05-16 12:12:34', 0),
(35, 'USER', 'User1', 'user1@yahoo.fr', 'techdev-mada.tech@techdev.dev', 'Test email', 'Message 6', '2020-05-16 13:56:40', 1),
(36, 'NARISOA HARILALA', 'Freddy Michel', 'michelfreddy1992@gmail.com', 'techdev-mada.tech@techdev.dev', 'Message 1', 'C\'est un message test', '2020-05-18 13:01:56', 0),
(37, 'MIANGOLA', 'Fitia', 'miangolafitia@gmail.com', 'techdev-mada.prod@techdev.dev', 'Test email', 'Email de contct de Miangola', '2020-05-22 11:06:18', 0),
(38, 'NARISOA HARILALA', 'Freddy Michel', 'michelfreddy1992@gmail.com', 'techdev-mada.dev@techdev.dev', 'Test du formulaire de contact', 'Message 1', '2020-06-20 19:35:42', 0),
(39, 'SITRAKA', 'Andriamalala', 'sitrakaandriam@gmail.com', 'techdev-mada.uxdesign@techdev.dev', 'Test du formulaire de contact numero 2', 'Message 2', '2020-06-20 19:36:31', 0),
(40, 'JESSICA', 'Ramaroson', 'jessicaramaroson@gmail.com', 'techdev-mada.prod@techdev.dev', 'Test du formulaire de contact numero 3', 'Message 3', '2020-06-20 19:37:21', 0),
(41, 'KANG', 'So Ra', 'kangsora@gmail.com', 'techdev-mada.tech@techdev.dev', 'Test du formulaire de contact numero 4', 'Message 4', '2020-06-20 19:38:04', 0),
(42, 'ANJAMALALA', 'Erica', 'erica@gmail.com', 'techdev-mada.uxdesign@techdev.dev', 'Test du formulaire de contact numero 5', 'Message 5', '2020-06-20 19:45:14', 0),
(43, 'Freddy Michel', 'Andriamalala', 'freddymichel1992@gmail.com', 'techdev-mada.dev@techdev.dev', 'Test du formulaire de contact', 'nn', '2020-06-23 20:55:11', 0);

-- --------------------------------------------------------

--
-- Structure de la table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenue` text NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'post.png',
  `auteur` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `posted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gallery`
--

INSERT INTO `gallery` (`id`, `titre`, `contenue`, `image`, `auteur`, `date`, `posted`) VALUES
(1, 'Membre 1', 'J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, tempore? Laborum dolor veritatis laudantium necessitatibus atque quae dolorum est beatae fugiat nemo sequi, aliquam cupiditate expedita! Inventore nam sint aperiam itaque. Inventore, qui molestias est numquam incidunt nam? Veritatis hic sunt possimus error aspernatur quibusdam atque. Excepturi atque minus quam, blanditiis veniam nobis rerum exercitationem cupiditate, omnis, adipisci natus inventore voluptates pariatur debitis! Sit cupiditate ipsum itaque numquam deserunt vitae, praesentium, at, eius aliquid non tenetur consequatur sint laudantium earum facilis optio. Autem repudiandae laudantium obcaecati? Doloremque maiores, doloribus, aliquid hic architecto harum repellat eveniet voluptas odit dolorum dolores praesentium.', '1.jpg', 'michelfreddy1992@gmail.com', '2020-04-20 22:52:58', 1),
(2, 'Membre 2', 'J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, tempore? Laborum dolor veritatis laudantium necessitatibus atque quae dolorum est beatae fugiat nemo sequi, aliquam cupiditate expedita! Inventore nam sint aperiam itaque. Inventore, qui molestias est numquam incidunt nam? Veritatis hic sunt possimus error aspernatur quibusdam atque. Excepturi atque minus quam, blanditiis veniam nobis rerum exercitationem cupiditate, omnis, adipisci natus inventore voluptates pariatur debitis! Sit cupiditate ipsum itaque numquam deserunt vitae, praesentium, at, eius aliquid non tenetur consequatur sint laudantium earum facilis optio. Autem repudiandae laudantium obcaecati? Doloremque maiores, doloribus, aliquid hic architecto harum repellat eveniet voluptas odit dolorum dolores praesentium', '2.jpg', 'michelfreddy1992@gmail.com', '2020-04-20 22:53:40', 1),
(3, 'Membre 3', 'J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, tempore? Laborum dolor veritatis laudantium necessitatibus atque quae dolorum est beatae fugiat nemo sequi, aliquam cupiditate expedita! Inventore nam sint aperiam itaque. Inventore, qui molestias est numquam incidunt nam? Veritatis hic sunt possimus error aspernatur quibusdam atque. Excepturi atque minus quam, blanditiis veniam nobis rerum exercitationem cupiditate, omnis, adipisci natus inventore voluptates pariatur debitis! Sit cupiditate ipsum itaque numquam deserunt vitae, praesentium, at, eius aliquid non tenetur consequatur sint laudantium earum facilis optio. Autem repudiandae laudantium obcaecati? Doloremque maiores, doloribus, aliquid hic architecto harum repellat eveniet voluptas odit dolorum dolores praesentium', '3.jpg', 'sitrakaandriam@gmail.com', '2020-04-20 22:54:01', 1),
(4, 'Membre 4', 'J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, tempore? Laborum dolor veritatis laudantium necessitatibus atque quae dolorum est beatae fugiat nemo sequi, aliquam cupiditate expedita! Inventore nam sint aperiam itaque. Inventore, qui molestias est numquam incidunt nam? Veritatis hic sunt possimus error aspernatur quibusdam atque. Excepturi atque minus quam, blanditiis veniam nobis rerum exercitationem cupiditate, omnis, adipisci natus inventore voluptates pariatur debitis! Sit cupiditate ipsum itaque numquam deserunt vitae, praesentium, at, eius aliquid non tenetur consequatur sint laudantium earum facilis optio. Autem repudiandae laudantium obcaecati? Doloremque maiores, doloribus, aliquid hic architecto harum repellat eveniet voluptas odit dolorum dolores praesentium', '4.jpg', 'jessicaramaroson@gmail.com', '2020-04-20 22:54:23', 1),
(5, 'Membre 5', 'J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, tempore? Laborum dolor veritatis laudantium necessitatibus atque quae dolorum est beatae fugiat nemo sequi, aliquam cupiditate expedita! Inventore nam sint aperiam itaque. Inventore, qui molestias est numquam incidunt nam? Veritatis hic sunt possimus error aspernatur quibusdam atque. Excepturi atque minus quam, blanditiis veniam nobis rerum exercitationem cupiditate, omnis, adipisci natus inventore voluptates pariatur debitis! Sit cupiditate ipsum itaque numquam deserunt vitae, praesentium, at, eius aliquid non tenetur consequatur sint laudantium earum facilis optio. Autem repudiandae laudantium obcaecati? Doloremque maiores, doloribus, aliquid hic architecto harum repellat eveniet voluptas odit dolorum dolores praesentium', '5.jpg', 'michelfreddy1992@gmail.com', '2020-04-20 22:54:38', 1),
(6, 'Membre 6', 'J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, tempore? Laborum dolor veritatis laudantium necessitatibus atque quae dolorum est beatae fugiat nemo sequi, aliquam cupiditate expedita! Inventore nam sint aperiam itaque. Inventore, qui molestias est numquam incidunt nam? Veritatis hic sunt possimus error aspernatur quibusdam atque. Excepturi atque minus quam, blanditiis veniam nobis rerum exercitationem cupiditate, omnis, adipisci natus inventore voluptates pariatur debitis! Sit cupiditate ipsum itaque numquam deserunt vitae, praesentium, at, eius aliquid non tenetur consequatur sint laudantium earum facilis optio. Autem repudiandae laudantium obcaecati? Doloremque maiores, doloribus, aliquid hic architecto harum repellat eveniet voluptas odit dolorum dolores praesentium', '6.jpg', 'sitrakaandriam@gmail.com', '2020-04-20 22:54:53', 1),
(7, 'Membre 7', 'J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, tempore? Laborum dolor veritatis laudantium necessitatibus atque quae dolorum est beatae fugiat nemo sequi, aliquam cupiditate expedita! Inventore nam sint aperiam itaque. Inventore, qui molestias est numquam incidunt nam? Veritatis hic sunt possimus error aspernatur quibusdam atque. Excepturi atque minus quam, blanditiis veniam nobis rerum exercitationem cupiditate, omnis, adipisci natus inventore voluptates pariatur debitis! Sit cupiditate ipsum itaque numquam deserunt vitae, praesentium, at, eius aliquid non tenetur consequatur sint laudantium earum facilis optio. Autem repudiandae laudantium obcaecati? Doloremque maiores, doloribus, aliquid hic architecto harum repellat eveniet voluptas odit dolorum dolores praesentium', '7.jpg', 'michelfreddy1992@gmail.com', '2020-04-20 22:55:43', 1),
(8, 'Membre 8', 'J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, tempore? Laborum dolor veritatis laudantium necessitatibus atque quae dolorum est beatae fugiat nemo sequi, aliquam cupiditate expedita! Inventore nam sint aperiam itaque. Inventore, qui molestias est numquam incidunt nam? Veritatis hic sunt possimus error aspernatur quibusdam atque. Excepturi atque minus quam, blanditiis veniam nobis rerum exercitationem cupiditate, omnis, adipisci natus inventore voluptates pariatur debitis! Sit cupiditate ipsum itaque numquam deserunt vitae, praesentium, at, eius aliquid non tenetur consequatur sint laudantium earum facilis optio. Autem repudiandae laudantium obcaecati? Doloremque maiores, doloribus, aliquid hic architecto harum repellat eveniet voluptas odit dolorum dolores praesentium', '8.jpg', 'michelfreddy1992@gmail.com', '2020-04-20 22:56:17', 1),
(9, 'Membre 9', 'J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, tempore? Laborum dolor veritatis laudantium necessitatibus atque quae dolorum est beatae fugiat nemo sequi, aliquam cupiditate expedita! Inventore nam sint aperiam itaque. Inventore, qui molestias est numquam incidunt nam? Veritatis hic sunt possimus error aspernatur quibusdam atque. Excepturi atque minus quam, blanditiis veniam nobis rerum exercitationem cupiditate, omnis, adipisci natus inventore voluptates pariatur debitis! Sit cupiditate ipsum itaque numquam deserunt vitae, praesentium, at, eius aliquid non tenetur consequatur sint laudantium earum facilis optio. Autem repudiandae laudantium obcaecati? Doloremque maiores, doloribus, aliquid hic architecto harum repellat eveniet voluptas odit dolorum dolores praesentium', '9.jpg', 'jessicaramaroson@gmail.com', '2020-04-20 22:56:33', 1),
(10, 'Membre 10', 'J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, tempore? Laborum dolor veritatis laudantium necessitatibus atque quae dolorum est beatae fugiat nemo sequi, aliquam cupiditate expedita! Inventore nam sint aperiam itaque. Inventore, qui molestias est numquam incidunt nam? Veritatis hic sunt possimus error aspernatur quibusdam atque. Excepturi atque minus quam, blanditiis veniam nobis rerum exercitationem cupiditate, omnis, adipisci natus inventore voluptates pariatur debitis! Sit cupiditate ipsum itaque numquam deserunt vitae, praesentium, at, eius aliquid non tenetur consequatur sint laudantium earum facilis optio. Autem repudiandae laudantium obcaecati? Doloremque maiores, doloribus, aliquid hic architecto harum repellat eveniet voluptas odit dolorum dolores praesentium', '10.jpg', 'sitrakaandriam@gmail.com', '2020-04-20 22:56:51', 1),
(11, 'Membre 11', 'J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, tempore? Laborum dolor veritatis laudantium necessitatibus atque quae dolorum est beatae fugiat nemo sequi, aliquam cupiditate expedita! Inventore nam sint aperiam itaque. Inventore, qui molestias est numquam incidunt nam? Veritatis hic sunt possimus error aspernatur quibusdam atque. Excepturi atque minus quam, blanditiis veniam nobis rerum exercitationem cupiditate, omnis, adipisci natus inventore voluptates pariatur debitis! Sit cupiditate ipsum itaque numquam deserunt vitae, praesentium, at, eius aliquid non tenetur consequatur sint laudantium earum facilis optio. Autem repudiandae laudantium obcaecati? Doloremque maiores, doloribus, aliquid hic architecto harum repellat eveniet voluptas odit dolorum dolores praesentium', '11.jpg', 'michelfreddy1992@gmail.com', '2020-04-20 22:57:09', 1),
(12, 'Membre 12', 'J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, tempore? Laborum dolor veritatis laudantium necessitatibus atque quae dolorum est beatae fugiat nemo sequi, aliquam cupiditate expedita! Inventore nam sint aperiam itaque. Inventore, qui molestias est numquam incidunt nam? Veritatis hic sunt possimus error aspernatur quibusdam atque. Excepturi atque minus quam, blanditiis veniam nobis rerum exercitationem cupiditate, omnis, adipisci natus inventore voluptates pariatur debitis! Sit cupiditate ipsum itaque numquam deserunt vitae, praesentium, at, eius aliquid non tenetur consequatur sint laudantium earum facilis optio. Autem repudiandae laudantium obcaecati? Doloremque maiores, doloribus, aliquid hic architecto harum repellat eveniet voluptas odit dolorum dolores praesentium', '12.jpg', 'sitrakaandriam@gmail.com', '2020-04-20 22:57:59', 1),
(13, 'Membre 13', 'J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, tempore? Laborum dolor veritatis laudantium necessitatibus atque quae dolorum est beatae fugiat nemo sequi, aliquam cupiditate expedita! Inventore nam sint aperiam itaque. Inventore, qui molestias est numquam incidunt nam? Veritatis hic sunt possimus error aspernatur quibusdam atque. Excepturi atque minus quam, blanditiis veniam nobis rerum exercitationem cupiditate, omnis, adipisci natus inventore voluptates pariatur debitis! Sit cupiditate ipsum itaque numquam deserunt vitae, praesentium, at, eius aliquid non tenetur consequatur sint laudantium earum facilis optio. Autem repudiandae laudantium obcaecati? Doloremque maiores, doloribus, aliquid hic architecto harum repellat eveniet voluptas odit dolorum dolores praesentium', '13.jpg', 'michelfreddy1992@gmail.com', '2020-04-20 22:58:14', 1),
(14, 'Membre 14', 'J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, tempore? Laborum dolor veritatis laudantium necessitatibus atque quae dolorum est beatae fugiat nemo sequi, aliquam cupiditate expedita! Inventore nam sint aperiam itaque. Inventore, qui molestias est numquam incidunt nam? Veritatis hic sunt possimus error aspernatur quibusdam atque. Excepturi atque minus quam, blanditiis veniam nobis rerum exercitationem cupiditate, omnis, adipisci natus inventore voluptates pariatur debitis! Sit cupiditate ipsum itaque numquam deserunt vitae, praesentium, at, eius aliquid non tenetur consequatur sint laudantium earum facilis optio. Autem repudiandae laudantium obcaecati? Doloremque maiores, doloribus, aliquid hic architecto harum repellat eveniet voluptas odit dolorum dolores praesentium', '14.jpg', 'jessicaramaroson@gmail.com', '2020-04-20 22:58:29', 1),
(15, 'Membre 15', 'J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, tempore? Laborum dolor veritatis laudantium necessitatibus atque quae dolorum est beatae fugiat nemo sequi, aliquam cupiditate expedita! Inventore nam sint aperiam itaque. Inventore, qui molestias est numquam incidunt nam? Veritatis hic sunt possimus error aspernatur quibusdam atque. Excepturi atque minus quam, blanditiis veniam nobis rerum exercitationem cupiditate, omnis, adipisci natus inventore voluptates pariatur debitis! Sit cupiditate ipsum itaque numquam deserunt vitae, praesentium, at, eius aliquid non tenetur consequatur sint laudantium earum facilis optio. Autem repudiandae laudantium obcaecati? Doloremque maiores, doloribus, aliquid hic architecto harum repellat eveniet voluptas odit dolorum dolores praesentium', '15.jpg', 'sitrakaandriam@gmail.com', '2020-04-20 22:58:43', 1),
(16, 'Membre 16', 'J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à J’ai vu votre annonce pour le recrutement de Développeur Wordpress sur la page Facebook d’Offre et Demande d’emplois à Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, tempore? Laborum dolor veritatis laudantium necessitatibus atque quae dolorum est beatae fugiat nemo sequi, aliquam cupiditate expedita! Inventore nam sint aperiam itaque. Inventore, qui molestias est numquam incidunt nam? Veritatis hic sunt possimus error aspernatur quibusdam atque. Excepturi atque minus quam, blanditiis veniam nobis rerum exercitationem cupiditate, omnis, adipisci natus inventore voluptates pariatur debitis! Sit cupiditate ipsum itaque numquam deserunt vitae, praesentium, at, eius aliquid non tenetur consequatur sint laudantium earum facilis optio. Autem repudiandae laudantium obcaecati? Doloremque maiores, doloribus, aliquid hic architecto harum repellat eveniet voluptas odit dolorum dolores praesentium', '16.jpg', 'jessicaramaroson@gmail.com', '2020-04-20 22:59:36', 1);

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenue` text NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'post.png',
  `auteur` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `posted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio` (`id`, `titre`, `contenue`, `image`, `auteur`, `date`, `posted`) VALUES
(1, 'CREATION MAQUETTE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quae facilis ab vel ipsum debitis neque nostrum molestiae nihil nemo unde vero, voluptate reiciendis consectetur dolores quia praesentium velit maiores beatae perferendis, eaque suscipit ex eligendi earum? Saepe commodi reiciendis aliquid a ratione laborum adipisci praesentium voluptatem ea. Assumenda, neque!', 'slider-1.jpg', 'michelfreddy1992@gmail.com', '2020-05-11 12:23:58', 1),
(2, 'APPLICATION WEB GESTION RIATA', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quae facilis ab vel ipsum debitis neque nostrum molestiae nihil nemo unde vero, voluptate reiciendis consectetur dolores quia praesentium velit maiores beatae perferendis, eaque suscipit ex eligendi earum? Saepe commodi reiciendis aliquid a ratione laborum adipisci praesentium voluptatem ea. Assumenda, neque!', 'slider-2.jpg', 'michelfreddy1992@gmail.com', '2020-05-11 12:24:54', 1),
(3, 'Web et app design', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quae facilis ab vel ipsum debitis neque nostrum molestiae nihil nemo unde vero, voluptate reiciendis consectetur dolores quia praesentium velit maiores beatae perferendis, eaque suscipit ex eligendi earum? Saepe commodi reiciendis aliquid a ratione laborum adipisci praesentium voluptatem ea. Assumenda, neque!', 'slider-3.jpg', 'michelfreddy1992@gmail.com', '2020-05-11 12:26:22', 1),
(4, 'Creation de maquette web', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quae facilis ab vel ipsum debitis neque nostrum molestiae nihil nemo unde vero, voluptate reiciendis consectetur dolores quia praesentium velit maiores beatae perferendis, eaque suscipit ex eligendi earum? Saepe commodi reiciendis aliquid a ratione laborum adipisci praesentium voluptatem ea. Assumenda, neque!', 'slider-4.jpg', 'michelfreddy1992@gmail.com', '2020-05-11 12:27:59', 1),
(5, 'Web et app development', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quae facilis ab vel ipsum debitis neque nostrum molestiae nihil nemo unde vero, voluptate reiciendis consectetur dolores quia praesentium velit maiores beatae perferendis, eaque suscipit ex eligendi earum? Saepe commodi reiciendis aliquid a ratione laborum adipisci praesentium voluptatem ea. Assumenda, neque!', 'slider-5.jpg', 'michelfreddy1992@gmail.com', '2020-05-11 12:27:59', 1),
(6, 'Maintenance et reseaux', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quae facilis ab vel ipsum debitis neque nostrum molestiae nihil nemo unde vero, voluptate reiciendis consectetur dolores quia praesentium velit maiores beatae perferendis, eaque suscipit ex eligendi earum? Saepe commodi reiciendis aliquid a ratione laborum adipisci praesentium voluptatem ea. Assumenda, neque!', 'slider-6.jpg', 'michelfreddy1992@gmail.com', '2020-05-11 12:28:52', 1);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenue` text NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'post.png',
  `auteur` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `posted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `titre`, `contenue`, `image`, `auteur`, `date`, `posted`) VALUES
(1, 'Développement', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia, voluptas.', 'post.png', 'michelfreddy1992@gmail.com', '2020-05-14 16:20:47', 1),
(2, 'Web & App designer', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia, voluptas.', 'post.png', 'michelfreddy1992@gmail.com', '2020-05-14 16:21:27', 1),
(3, 'Maintenance & Réseaux Informatique', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia, voluptas.', 'post.png', 'michelfreddy1992@gmail.com', '2020-05-14 16:21:53', 1),
(4, 'Production', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia, voluptas.', 'post.png', 'michelfreddy1992@gmail.com', '2020-05-14 16:22:15', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
