-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2015 at 08:59 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a5316511_PHPDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_Flowers`
--

CREATE TABLE `t_Flowers` (
  `FlowerID` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Family` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Color` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Description` text COLLATE latin1_general_ci,
  `Picture` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `CreatedDateTime` timestamp NULL DEFAULT NULL,
  `CreatedBy` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT 'Stefano',
  `LastModifiedDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `LastModifiedBy` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT 'Stefano',
  PRIMARY KEY (`FlowerID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `t_Flowers`
--

INSERT INTO `t_Flowers` VALUES(1, 'Amber Flush Rose', 'Rosaceae', 'Orange', 'Rosa ''Amber Flush'' is a cultivar flower of the Rosa genus. It has orange-yellow or amber-colored petals.', 'images/amber_flush_rose.jpg', '2015-05-29 16:04:11', 'Stefano', '2015-05-29 16:04:11', 'Stefano');
INSERT INTO `t_Flowers` VALUES(2, 'Emily Rose', 'Rosaceae', 'Pink', 'Rather like an old Tea in form, ''Emily'' has a full leafy bush decorated with very large (5 to 6 inches), very double (40 petals) high centered roses of a soft pastel pink. Fragrant and lovely.', 'images/emily_rose.jpg', '2015-05-29 16:04:11', 'Stefano', '2015-05-29 16:04:11', 'Stefano');
INSERT INTO `t_Flowers` VALUES(3, 'Bush lily (Clivia miniata)', 'Amaryllidaceae', 'Orange', 'Clivia miniata is a species of clivia, from South Africa. It grows to a height of about 45cm in the shade of trees and shrubs, and flowers are red or orange, with a faint, but very sweet perfume.', 'images/bush_lily.jpg', '2015-05-29 16:04:11', 'Stefano', '2015-05-29 16:04:11', 'Stefano');
INSERT INTO `t_Flowers` VALUES(11, 'Calla Lily (Zantedeschia aethiopica)', 'Araceae', 'White', 'Calla lily is native to southern Africa. The flower is a showy white, yellow or pink spathe shaped like a funnel with a yellow, central, finger-like spadix.', 'images/calla_lily.jpg', '2015-05-29 16:04:11', 'Stefano', '2015-05-29 16:04:11', 'Stefano');
INSERT INTO `t_Flowers` VALUES(4, 'Common Hyacinth (Hyacinthus orientalis)', 'Asparagaceae', 'Purple', 'Hyacinthus orientalis is a perennial flowering plant native to southwestern Asia. Over 2,000 cultivars have been selected and named, with flower color varying from blue, white, pale yellow, pink, red or purple.', 'images/hyacinth.jpg', '2015-05-29 16:04:11', 'Stefano', '2015-05-29 16:04:11', 'Stefano');
INSERT INTO `t_Flowers` VALUES(5, 'Balsamroot (Balsamorhiza sagittata)', 'Asteraceae', 'Yellow', 'Balsamorhiza is a genus of plants in the sunflower family known commonly as balsamroots. These are perennials with fleshy taproots and caudices bearing erect stems and large, basal leaves. Atop the tall stems are showy yellow sunflower-like blooms. Balsamroots are native to western North America (United States and Canada).', 'images/balsamroot.jpg', '2015-05-29 16:51:12', 'Stefano', '2015-05-29 16:51:12', 'Stefano');
INSERT INTO `t_Flowers` VALUES(6, 'English daisy (Bellis perennis)', 'Asteraceae', 'White', 'Bellis perennis is a common European species of Daisy. It is native to western, central and northern Europe. The flowerheads are 2–3 cm in diameter, with white ray florets (often tipped red) and yellow disc florets.', 'images/daisy.jpg', '2015-05-29 16:04:11', 'Stefano', '2015-05-29 16:04:11', 'Stefano');
INSERT INTO `t_Flowers` VALUES(10, 'Frangipani (Plumeria)', 'Apocynaceae', 'White', 'Plumeria (common name Frangipani) is a genus of flowering plants in the dogbane family, Apocynaceae. It contains primarily deciduous shrubs and small trees. They are native to Central America, Mexico, the Caribbean, and South America as far south as Brazil but can be grown in tropical and sub-tropical regions.', 'images/frangipani.jpg', '2015-05-29 16:04:11', 'Stefano', '2015-05-29 16:04:11', 'Stefano');
INSERT INTO `t_Flowers` VALUES(7, 'Forget-me-not (Myosotis alpestris)', 'Boraginaceae', 'Blue', 'Forget-me-not is a herbaceous perennial plant hardy to USDA zone 4. The flowers are hermaphrodite (have both male and female organs) and are pollinated by bees, flies, lepidoptera.', 'images/forget_me_not.jpg', '2015-05-29 16:04:11', 'Stefano', '2015-05-29 16:04:11', 'Stefano');
INSERT INTO `t_Flowers` VALUES(8, 'Indian Paintbrush (Castilleja  miniata)', 'Orobanchaceae', 'Red', 'Forget-me-not is a herbaceous perennial plant hardy to USDA zone 4. The flowers are hermaphrodite (have both male and female organs) and are pollinated by bees, flies, lepidoptera.', 'images/indian_paintbrush.jpg', '2015-05-29 16:04:11', 'Stefano', '2015-05-29 16:04:11', 'Stefano');
INSERT INTO `t_Flowers` VALUES(9, 'Wild Lupine (Lupinus perennis)', 'Fabaceae', 'Purple', 'Wild Lupine (Lupinus perennis) is a medicinal plant in the Fabaceae family. It is widespread in the eastern part of the USA (from Texas and Florida to Maine) and Minnesota, Canada (southern Ontario, Labrador and Newfoundland), and on the coasts of the Arctic Ocean, where it grows on sand hills and roadsides..', 'images/wild_lupine.jpg', '2015-05-29 16:04:11', 'Stefano', '2015-05-29 16:04:11', 'Stefano');
