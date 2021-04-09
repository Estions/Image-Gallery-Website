-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 03:38 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) UNSIGNED NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `img_author` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img_name`, `img_author`, `img_path`) VALUES
(1, 'Antique Teapot', 'cromagnon130', 'https://cdn.pixabay.com/photo/2021/03/25/17/42/teapot-6123746_1280.jpg'),
(2, 'Tea', 'Leon_Ting', 'https://cdn.pixabay.com/photo/2015/01/14/15/47/tea-599227_1280.jpg'),
(3, 'Night View', 'jcx516', 'https://cdn.pixabay.com/photo/2021/03/02/01/07/night-view-6061251_1280.jpg'),
(4, 'Seaside View', 'jcx516', 'https://cdn.pixabay.com/photo/2021/02/23/08/40/sea-6042684_1280.jpg'),
(5, 'Sharpened Pencils', 'sweetlouise', 'https://cdn.pixabay.com/photo/2021/03/16/11/31/pencils-6099511_1280.jpg'),
(6, 'Fish Mosaic', 'GLady', 'https://cdn.pixabay.com/photo/2013/10/25/20/46/mosaic-200864_1280.jpg'),
(7, 'Old Corridor', 'leducchinh61900', 'https://cdn.pixabay.com/photo/2021/02/17/08/02/woman-6023441_960_720.jpg'),
(8, 'Sakura', 'leducchinh61900', 'https://cdn.pixabay.com/photo/2021/02/17/08/05/flowers-6023459_1280.jpg'),
(9, 'Thunderstorm', 'Unwetter-Freaks', 'https://cdn.pixabay.com/photo/2021/03/24/10/00/thunderstorm-6119738_1280.jpg'),
(10, 'Cyclist in a City', 'Vintagelee', 'https://cdn.pixabay.com/photo/2020/12/15/01/43/cyclist-5832393_960_720.jpg'),
(11, 'Anchor and Magnifying Glass', 'Vintagelee', 'https://cdn.pixabay.com/photo/2020/05/11/05/11/magnifying-5156501_1280.jpg'),
(12, 'Mountain and Clouds', 'RickJbrown', 'https://cdn.pixabay.com/photo/2021/01/24/20/47/mountains-5946500_1280.jpg'),
(13, 'Angeles National Forest', 'RickJbrown', 'https://cdn.pixabay.com/photo/2021/01/24/20/46/angeles-national-forest-5946493_1280.jpg'),
(14, 'Waves on a stormy beach', 'Sabrina Einkhoff', 'https://cdn.pixabay.com/photo/2021/01/25/18/38/storm-5949243_1280.jpg'),
(15, 'Cedar Leaves', 'Sabrina Einkhoff', 'https://cdn.pixabay.com/photo/2021/02/21/06/21/cedar-6035400_1280.jpg'),
(16, 'Neon Sun', 'BrianSarubbi97', 'https://cdn.pixabay.com/photo/2021/01/24/20/21/cloud-5946381_960_720.jpg'),
(17, 'Crumpled Paper', 'suicazuki', 'https://cdn.pixabay.com/photo/2021/02/05/18/05/paper-5985445_1280.jpg'),
(18, 'Austrian View', 'liggraphy', 'https://cdn.pixabay.com/photo/2021/02/06/14/24/lavanttal-5988332_1280.jpg'),
(19, 'Snowy Forest', 'shogun', 'https://cdn.pixabay.com/photo/2021/02/02/17/12/forest-5974610_1280.jpg'),
(20, 'Godrays', 'ArtTower', 'https://cdn.pixabay.com/photo/2012/09/15/02/22/forest-56930_960_720.jpg'),
(21, 'Blue Jay', 'AlainAudet', 'https://cdn.pixabay.com/photo/2021/04/05/18/42/blue-jay-6154340_1280.jpg'),
(22, 'Elephant', 'sasint', 'https://cdn.pixabay.com/photo/2016/11/14/04/45/elephant-1822636_1280.jpg'),
(23, 'Village On a Hill', 'pasja1000', 'https://cdn.pixabay.com/photo/2021/03/29/18/32/village-6134907_1280.jpg'),
(24, 'Sparkler', 'Free-Photos', 'https://cdn.pixabay.com/photo/2015/03/17/14/05/sparkler-677774_1280.jpg'),
(25, 'Grapes', 'Free-Photos', 'https://cdn.pixabay.com/photo/2015/03/26/09/45/grapes-690230_1280.jpg'),
(26, 'Blueberries', 'elizadean', 'https://cdn.pixabay.com/photo/2016/04/13/07/18/blueberries-1326154_1280.jpg'),
(27, 'Roses', 'congerdesign', 'https://cdn.pixabay.com/photo/2016/06/17/16/42/roses-1463562_1280.jpg'),
(28, 'Rural Views', 'SyauqiFillah', 'https://cdn.pixabay.com/photo/2020/12/14/17/42/students-5831655_1280.jpg'),
(29, 'Morning Fog', 'morgan472', 'https://cdn.pixabay.com/photo/2021/03/26/16/39/fog-6126432_1280.jpg'),
(30, 'Bridge', 'wal_172619', 'https://cdn.pixabay.com/photo/2020/10/03/17/30/bridge-5624104_1280.jpg'),
(31, 'Big Ben', 'derwiki', 'https://cdn.pixabay.com/photo/2014/11/13/23/34/palace-530055_1280.jpg'),
(32, 'Castle', 'jh146', 'https://cdn.pixabay.com/photo/2014/09/30/11/55/castle-467116_1280.jpg'),
(33, 'Water on a Petal', 'Dreamy Art', 'https://cdn.pixabay.com/photo/2014/12/17/21/35/fantasy-571956_1280.jpg'),
(34, 'Coloured Paper', 'DreamyArt', 'https://cdn.pixabay.com/photo/2014/12/17/21/29/fantasy-571938_1280.jpg'),
(35, 'Strawberry and Snail', 'Dreamy Art', 'https://cdn.pixabay.com/photo/2014/12/28/18/18/fantasy-582194_1280.jpg'),
(36, 'Kangaroo', 'pen_ash', 'https://cdn.pixabay.com/photo/2021/04/02/04/00/wallaby-6143714_1280.jpg'),
(37, 'Cochem Castle', 'DarkmoonArt_de', 'https://cdn.pixabay.com/photo/2021/04/06/06/11/cochem-castle-6155376_1280.png'),
(38, 'Red Sun', 'papazachariasa', 'https://cdn.pixabay.com/photo/2021/03/29/17/51/sunset-6134829_1280.jpg'),
(39, 'Cloudscape', 'Free-Photos', 'https://cdn.pixabay.com/photo/2015/03/26/09/47/sky-690293_1280.jpg'),
(40, 'Mountain Sunset', 'enriquelopezgarre', 'https://cdn.pixabay.com/photo/2021/01/31/11/33/mountains-5966604_1280.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
