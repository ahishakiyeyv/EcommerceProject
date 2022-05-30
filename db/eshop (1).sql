-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 03:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id_admin`, `username`, `email_admin`, `password_admin`) VALUES
(1, 'Ahishakiye', 'ahig@biu', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `nomprod` varchar(255) NOT NULL,
  `prixprod` int(255) NOT NULL,
  `photoprod` varchar(255) NOT NULL,
  `Quantite` int(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `nomprod`, `prixprod`, `photoprod`, `Quantite`, `user`) VALUES
(10, 'Jeans', 30000, '11.jpeg', 5, 'Bimenyimana'),
(13, 'new T-shirt ', 12000, '6.jpg', 1, 'Bimenyimana');

-- --------------------------------------------------------

--
-- Table structure for table `cartloss`
--

CREATE TABLE `cartloss` (
  `id_cart` int(11) NOT NULL,
  `nomprod` varchar(255) NOT NULL,
  `prixprod` varchar(255) NOT NULL,
  `photoprod` varchar(255) NOT NULL,
  `Quantite` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartloss`
--

INSERT INTO `cartloss` (`id_cart`, `nomprod`, `prixprod`, `photoprod`, `Quantite`, `user`) VALUES
(3, 'new T-shirt ', '12000', '6.jpg', '1', 'Ahishakiye');

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(11) NOT NULL,
  `nom_cat` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `nom_cat`) VALUES
(1, 'Suit'),
(2, 'Jacket'),
(3, 'Trousers'),
(4, 'T-Shirt'),
(5, 'Bags'),
(6, 'Shoes'),
(9, 'Jersey');

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_com` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  `id_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`id_com`, `auteur`, `commentaire`, `id_prod`) VALUES
(1, 'Bimenyimana', 'can i ahve a xl size for this jeans please!', 1),
(2, 'Bimenyimana', 'can i ahve a xl size for this jeans please!', 1),
(3, 'Ahishakiye', 'I really like this trousers', 1),
(4, 'Ahishakiye', 'i really need this one????❤', 5);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_con` int(11) NOT NULL,
  `nom_co` varchar(255) NOT NULL,
  `prenom_co` varchar(255) NOT NULL,
  `email_co` varchar(255) NOT NULL,
  `contenu_co` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `name_order` varchar(255) NOT NULL,
  `email_order` varchar(255) NOT NULL,
  `phone_order` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `commune` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `total_product` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `name_order`, `email_order`, `phone_order`, `city`, `commune`, `street`, `total_product`, `total_price`) VALUES
(1, 'ahishakiye yvan igor', 'ahig@biu.bi', '79340728', 'cankuzo', 'cankuzo', '4e', 'Jeans (1 )', '30'),
(2, 'ahishakiye yvan igor', 'ahig@biu.bi', '68756757', 'Bujumbura mairie', 'Ntahangwa', '3', 'Jeans (1 )', '30'),
(3, 'ahishakiye yvan igor', 'ahishakiye@gmail.com', '123456', 'cibitoke', 'mabayi', '12', 'Jeans (1 )', '30'),
(4, 'ahishakiye yvan igor', 'ahig@biu.bi', '123333', 'kirundo', 'kirundo', '112', 'Jeans (1 )', '30'),
(5, 'ahishakiye yvan igor', 'ahig@biu.bi', '1234567890', 'cankuzo', 'cankuzo', '4e', 'Jeans (1 )', '30000'),
(6, 'tony', 'tonyb@biu.bi', '11111666', 'Bujumbura mairie', 'Ntahangwa', '7', 'Jeans (1 )', '30000'),
(7, 'Gladdy', 'gajo@biu.bi', '7836623273', 'Bujumbura rural', 'Ntahangwa', '2', 'Jeans (1 ), new T-shirt  (3 ), Trouser (1 ), Suit (1 )', '196000');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id_pro` int(11) NOT NULL,
  `nom_pro` varchar(255) NOT NULL,
  `prix` int(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `id_Cat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id_pro`, `nom_pro`, `prix`, `photo`, `id_Cat`) VALUES
(1, 'Jeans', 25000, '11.jpeg', 3),
(2, 'new T-shirt ', 12000, '6.jpg', 4),
(3, 'Trouser', 25000, '8.jpg', 3),
(4, 'Suit', 105000, '5.png', 1),
(5, 'Nike Jersey', 55000, '14.jpg', 9),
(6, 'Jacket L50V', 45000, '06.jpg', 2),
(7, 'Jabba Jacket', 35000, '02.png', 2),
(8, 'ML2 Bag', 45000, '20.jpg', 5),
(9, 'Suit Nice', 210000, '4.jpg', 1),
(10, 'New jersey', 25000, '13.jpg', 9),
(11, 'Jeans 443', 20000, '10.jpg', 3),
(12, 'supra shoes', 70000, '30.jpeg', 6),
(13, 'San Safari', 80000, '27.jpg', 6),
(14, 'Potescho', 15000, '9.jpg', 3),
(15, 'Lacoste K23', 12000, '17.jpg', 4),
(16, 'Asus Bag', 35000, '08.png', 5),
(17, 'Coat Jacket', 30000, '07.jpg', 2),
(18, 'Cuil JS', 40000, '22.jpg', 5),
(19, 'Simple Shoes', 90000, '29.jpg', 6),
(20, 'luis Vuiton Suit', 165000, '2.jpg', 1),
(21, 'Burundian Away Kit ', 30000, 'j2.jpg', 9),
(22, 'Bdi Jersey', 65000, 'j1.jpg', 9),
(24, 'converse L1', 15000, 'sh1.jpg', 6),
(25, '3 Bandes', 25000, '3bd.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id_stock` int(11) NOT NULL,
  `quantite` varchar(255) NOT NULL,
  `disponiblite` varchar(255) NOT NULL,
  `Id_Pro` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id_sub` int(11) NOT NULL,
  `mail_sub` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id_sub`, `mail_sub`) VALUES
(1, 'yvanahishakiye6@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(255) NOT NULL,
  `prenom_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `prenom_user`, `email_user`, `password`) VALUES
(1, 'Ahishakiye', 'yvan igor', 'ahig@biu.bi', 'd41d8cd98f00b204e9800998ecf8427e'),
(2, 'Ahishakiye', 'yvan igor', 'ahig@biu.bi', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Ahishakiye', 'yvan igor', 'ahig@biu.bi', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Bimenyimana', 'Tony Blaise', 'tonybim@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Ahindoreye', 'Prudence', 'pruah@biu.bi', '96e79218965eb72c92a549dd5a330112');

-- --------------------------------------------------------

--
-- Table structure for table `vente`
--

CREATE TABLE `vente` (
  `id_vente` int(11) NOT NULL,
  `quantite_vente` varchar(255) NOT NULL,
  `id_User` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `cartloss`
--
ALTER TABLE `cartloss`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_com`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_con`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `id_Cat` (`id_Cat`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_stock`),
  ADD KEY `Id_Pro` (`Id_Pro`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `vente`
--
ALTER TABLE `vente`
  ADD KEY `id_User` (`id_User`),
  ADD KEY `id_prod` (`id_prod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cartloss`
--
ALTER TABLE `cartloss`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_con` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
