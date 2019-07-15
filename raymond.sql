-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 07:16 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raymond`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `password`, `id`) VALUES
('riasanghavi6@gmail.com', '092385', 1),
('', 'abc@gmail.com', 123),
('abc@gmail.com', '123', 124);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `discount` int(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pid`, `pname`, `price`, `discount`, `size`, `quantity`, `image`) VALUES
(22, '6', 17, 'COMFORT DENIM JACKET', 2790, 0, '', 5, 'COMFORT DENIM JACKET.jpg'),
(24, '6', 14, 'ISLAND PRINT SHIRT', 2590, 0, 'L', 1, 'ISLAND PRINT SHIRT.jpg'),
(29, '6', 10, 'OVERSIZED FRAYED EDGE JACKET', 2790, 0, 'S', 1, 'OVERSIZED FRAYED EDGE JACKET.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Men'),
(2, 'Women'),
(3, 'Special Collection');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `p_category` varchar(255) NOT NULL,
  `p_subcategory` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `discount` int(255) NOT NULL,
  `size` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `p_category`, `p_subcategory`, `quantity`, `price`, `discount`, `size`, `status`, `image`, `description`) VALUES
(5, 'KNITTED TOP', 'Women', 'Topwear', 50, 1790, 20, 'S,M,L,XL', 'yes', 'KNITTED TOP.jpg', 'Knit halter top with ribbed trim. '),
(6, 'FRINGED KNIT SWEATER', 'Women', 'Topwear', 50, 2590, 0, 'S,M,L,XL', 'yes', 'FRINGED KNIT SWEATER.jpg', 'Knit sweater with a round neckline and short sleeves. Featuring matching fringe trims'),
(7, 'LINEN TOP WITH ELASTIC NECKLINE', 'Women', 'Topwear', 50, 2790, 0, 'S,M,L,XL', 'yes', 'LINEN TOP WITH ELASTIC NECKLINE.jpg', 'Off-the-shoulder top with an elastic neckline. Featuring short sleeves with ruffled elastic cuffs and a button-up front with tie fastening.'),
(8, 'SHINY GEOMETRIC EARRINGS', 'Women', 'Accessories', 50, 1590, 0, 'S,M,L,XL', 'yes', 'SHINY GEOMETRIC EARRINGS.jpg', 'Dangle earrings with shiny rhinestones. Push-back and clip closure.'),
(9, 'METALLIC LEAF EARRINGS', 'Women', 'Accessories', 50, 1290, 0, 'S,M,L,XL', 'yes', 'METALLIC LEAF EARRINGS.jpg', 'Small hoop earrings with dangling metallic leaves. Push-back closure'),
(10, 'OVERSIZED FRAYED EDGE JACKET', 'Women', 'Jackets', 50, 2790, 0, 'S,M,L,XL', 'yes', 'OVERSIZED FRAYED EDGE JACKET.jpg', 'Long sleeve denim jacket with a regular collar. Featuring front welt pockets, chest patch pockets with flaps, frayed trims and metal button front fastening.'),
(11, 'FAUX LEATHER BIKER JACKET', 'Women', 'Jackets', 50, 2790, 0, 'S,M,L,XL', 'yes', 'FAUX LEATHER BIKER JACKET.jpg', 'Long sleeve jacket with a lapel collar. Featuring front pockets with metal zip, shoulder tabs, belt in matching fabric with buckle and metal zip fastening in the front. '),
(12, 'PREMIUM SKINNY FLARE JEANS', 'Women', 'Bottomwear', 50, 2790, 0, 'S,M,L,XL', 'yes', 'PREMIUM SKINNY FLARE JEANS.jpg', 'Faded high waist jeans with a five-pocket design. Featuring flared hems with frayed detailing and zip fly and metal top button fastening.'),
(13, 'ANIMAL PRINT LEATHER FLAT SANDALS', 'Women', 'Footwear', 50, 2990, 0, 'S,M,L,XL', 'yes', 'ANIMAL PRINT LEATHER FLAT SANDALS.jpg', 'Two-tone flat leather sandals. Animal print on the upper. Two crossed straps on the front. Strap around the back of the ankle. Tie fastening around the ankle.'),
(14, 'ISLAND PRINT SHIRT', 'Men', 'Topwear', 50, 2590, 0, 'S,M,L,XL', 'yes', 'ISLAND PRINT SHIRT.jpg', 'Flowing, relaxed fit bowling shirt with short sleeves. Featuring side vents at the hem and a button-up front.'),
(15, 'CONTRAST SHIRT', 'Men', 'Topwear', 50, 2590, 0, 'S,M,L,XL', 'yes', 'CONTRAST SHIRT.jpg', 'Plain, relaxed fit shirt made of a cotton and linen blend. Featuring a stand-up collar, sleeve tabs, buttoned cuffs and a button-up front'),
(16, 'SHORT SLEEVE SWEATER', 'Men', 'Topwear', 50, 1790, 0, 'S,M,L,XL', 'yes', 'SHORT SLEEVE SWEATER.jpg', 'Flowing knit sweater with a round neckline, short sleeves and ribbed trims.'),
(17, 'COMFORT DENIM JACKET', 'Men', 'Jackets', 50, 2790, 0, 'S,M,L,XL', 'yes', 'COMFORT DENIM JACKET.jpg', 'Straight, long sleeve denim jacket with a shirt collar and buttoned cuffs. Featuring a light fade effect, chest flap pockets, welt pockets at the hip and metal button fastening in the front. '),
(18, 'TEXTURED RUSTIC OVERSHIRT', 'Men', 'Jackets', 50, 4990, 0, 'S,M,L,XL', 'yes', 'TEXTURED RUSTIC OVERSHIRT.jpg', 'Oversized overshirt in a linen blend. Featuring a lapel collar, long sleeves with buttoned cuffs, chest flap pockets and a button-up front.'),
(19, 'COMFORT KNIT 4-WAY TROUSERS', 'Men', 'Bottomwear', 50, 2790, 0, 'S,M,L,XL', 'yes', 'COMFORT KNIT 4-WAY TROUSERS.jpg', 'Slim fit trousers featuring front pockets, buttoned back pockets and zip fly and top button fastening.\r\n'),
(20, 'TEXTURED TROUSERS', 'Men', 'Bottomwear', 50, 2790, 0, 'S,M,L,XL', 'yes', 'TEXTURED TROUSERS.jpg', 'Slim fit chino trousers with a removable accessory at the waist. Featuring front pockets, a coin pocket, back welt pockets and zip fly and top button fastening.\r\n'),
(21, 'LINEN TROUSERS', 'Men', 'Bottomwear', 50, 3490, 0, 'S,M,L,XL', 'yes', 'LINEN TROUSERS.jpg', 'Carrot fit trousers featuring an adjustable waist with inner drawstrings, front pockets, buttoned welt pockets at the back and hidden front zip and metal hook fastening.'),
(22, 'MULTICOLOURED SNEAKERS', 'Men', 'Footwear', 50, 4950, 0, 'S,M,L,XL', 'yes', 'MULTICOLOURED SNEAKERS.jpg', 'Lace-up sneakers with six eyelets. Made of synthetic rubber and combined materials and an overlaid piece of technical fabric. A combination of colours on the upper, sole, laces and overlaid piece. Trekking-style. Chunky sole with a split effect. Pull tabs'),
(24, 'WHITE RETRO SNEAKERS', 'Men', 'Footwear', 50, 3090, 0, 'S,M,L,XL', 'yes', 'WHITE RETRO SNEAKERS.jpg', 'White lace-up sneakers. Six-eyelet facing. Combination of materials on the upper, including perforated detailing on the toe and mesh. White sole with contrast caramel-coloured outsole. Retro-inspired design. Back pull tab detail.'),
(25, 'CONTRASTING PLIMSOLLS', 'Men', 'Footwear', 50, 2890, 0, 'S,M,L,XL', 'yes', 'CONTRASTING PLIMSOLLS.jpg', 'Lace-up plimsolls with a facing with seven eyelets. Pull tab at the back and heel cap and tongue in a contrasting colour with white soles.'),
(26, 'GEOMETRIC POINTED BOW TIE', 'Men', 'Accessories', 50, 1790, 0, 'S,M,L,XL', 'yes', 'GEOMETRIC POINTED BOW TIE.jpg', 'Jacquard bow tie with a geometric design and adjustable metal hook fastening.'),
(27, 'PAISLEY JACQUARD WIDE TIE', 'Men', 'Accessories', 50, 1890, 0, 'S,M,L,XL', 'yes', 'PAISLEY JACQUARD WIDE TIE.jpg', 'Silk jacquard wide tie featuring a paisley design.'),
(28, 'BASIC TEXTURED WEAVE HAT', 'Men', 'Accessories', 50, 1290, 0, 'S,M,L,XL', 'yes', 'BASIC TEXTURED WEAVE HAT.jpg', 'Basic textured weave hat made of cotton'),
(29, 'BLUE COLLECTION LEATHER METALLIC HIGH HEEL SHOES', 'Special Collection', 'Aqua', 50, 6990, 0, 'S,M,L,XL', 'yes', 'BLUE COLLECTION LEATHER METALLIC HIGH HEEL SHOES.jpg', 'Leather high heel shoes available in different colours: fuchsia and blue. Leather metallic upper. Stiletto heels. Pointed toes.\r\n\r\nBlue Collection. Premium leather trims, Aegean blue soles, metal emblem and special packaging.'),
(30, 'RUFFLED DRESS', 'Special Collection', 'Aqua', 50, 2890, 0, 'S,M,L,XL', 'yes', 'RUFFLED DRESS.jpg', 'Dress in a linen blend. Featuring a wide elasticated neckline, sleeves falling below the elbow and ruffle trims. '),
(31, 'WOOL HERRINGBONE TEXTURED BLAZER', 'Special Collection', 'Aqua', 50, 9990, 0, 'S,M,L,XL', 'yes', 'WOOL HERRINGBONE TEXTURED BLAZER.jpg', 'Wool blazer with a peak lapel and pin detail. Featuring a chest pocket with a contrast pocket square, front flap pockets at the hip, an inside pocket, back vents and front button fastening.\r\n'),
(32, 'NEON MASCULINE COAT', 'Special Collection', 'Flora Neon', 50, 9990, 0, 'S,M,L,XL', 'yes', 'NEON MASCULINE COAT.jpg', 'Long sleeve coat with a lapel collar. Featuring front flap pockets. Double-breasted front with contrasting buttons.'),
(33, 'BELTED FLORAL PRINT DRESS', 'Special Collection', 'Flora Neon', 50, 3490, 0, 'S,M,L,XL', 'yes', 'BELTED FLORAL PRINT DRESS.jpg', 'A-line midi dress with a johnny collar. Featuring short ruffled sleeves, an elastic inner waistband, a contrast belt and gathered and ruffled details on the hem. \r\n'),
(34, 'NEON ANIMAL PRINT CROSSBODY BAG', 'Special Collection', 'Flora Neon', 50, 1290, 0, 'S,M,L,XL', 'yes', 'NEON ANIMAL PRINT CROSSBODY BAG.jpg', 'Neon yellow crossbody bag. Animal print on the exterior. Made of two parts: one with zip fastening and lined interior, the other with foldover flap, lined interior and snap button fastening. The two parts are joined with snap buttons. Adjustable and remov'),
(35, 'SOFT NEON SNEAKERS', 'Special Collection', 'Flora Neon', 50, 3490, 0, 'S,M,L,XL', 'yes', 'SOFT NEON SNEAKERS.jpg', 'Neon lime green monochrome lace-up sneakers. Eight-eyelet facing. Technical piece on the back. The upper is cut from a single piece with different textures on the fabric');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category`, `subcategory`) VALUES
(1, 'Men', 'Topwear'),
(2, 'Men', 'Bottomwear'),
(8, 'Men', 'Jackets'),
(9, 'Men', 'Footwear'),
(10, 'Women', 'Topwear'),
(11, 'Women', 'Bottomwear'),
(12, 'Women', 'Jackets'),
(13, 'Women', 'Footwear'),
(15, 'Special Collection', 'Aqua'),
(19, 'Men', 'Accessories'),
(20, 'Special Collection', 'Flora Neon'),
(21, 'Women', 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `password`, `name`, `contact`) VALUES
(6, 'riasanghavi6@gmail.com', '123455', 'Ria Sanghavi', 7666425192),
(8, 'eshitayadav@gmail.com', '9089', 'Eshita Yadav', 9324708525),
(13, 'riasanghavi6@gmail.com', '2345', 'Ria Sanghavi', 7666425192),
(14, 'riasanghavi6@gmail.com', '2345', 'Ria Sanghavi', 7666425192),
(19, 'sagar@gmail.com', '123', 'sagar', 8080506474);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
