-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 11:15 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_a_heaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `pro_name` text NOT NULL,
  `pro_price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `subtotal` int(255) NOT NULL,
  `cdate` date NOT NULL DEFAULT current_timestamp(),
  `ctime` time NOT NULL DEFAULT current_timestamp(),
  `status` text NOT NULL DEFAULT 'disable',
  `order_id` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `user_id`, `pro_name`, `pro_price`, `quantity`, `subtotal`, `cdate`, `ctime`, `status`, `order_id`, `total`) VALUES
(303, 15, 6, 'Plates base design', 35000, 1, 35000, '2021-04-19', '12:27:01', 'disable', 3022, 79000),
(304, 2, 6, 'Red Base TV Launch', 22000, 2, 44000, '2021-04-19', '12:27:01', 'disable', 3022, 79000);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(255) NOT NULL,
  `cat_name` text NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `cat_link` text NOT NULL,
  `cat_links_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_image`, `cat_link`, `cat_links_2`) VALUES
(1, 'Living Room', 'living3.jpg', 'index_nav_collection.php?collection=Living Room', 'home_nav_collection.php?collection=Living Room'),
(2, 'Décor', 'g0.jpg', 'index_nav_collection.php?collection=Décor', 'home_nav_collection.php?collection=Décor'),
(3, 'Shelves', 'g2.jpg', 'index_nav_collection.php?collection=Shelves', 'home_nav_collection.php?collection=Shelves'),
(4, 'Leather Art', 'art2.jpg', 'index_nav_collection.php?collection=Leather Art', 'home_nav_collection.php?collection=Leather Art'),
(5, 'Engraving Art', 'decor0.jpg', 'index_nav_collection.php?collection=Engraving Art', 'home_nav_collection.php?collection=Engraving Art'),
(6, 'Wall Clocks', 'time.jpg', 'index_nav_collection.php?collection=Wall Clocks', 'home_nav_collection.php?collection=Wall Clocks');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `o_id` int(255) NOT NULL,
  `user_email` text NOT NULL,
  `order_pass` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `postal_code` text NOT NULL,
  `country` text NOT NULL,
  `cash_method` text NOT NULL,
  `billing_address` text NOT NULL,
  `diff_first_name` text NOT NULL DEFAULT '0',
  `diff_last_name` text NOT NULL DEFAULT '0',
  `diff_address` text NOT NULL DEFAULT '0',
  `diff_city` text NOT NULL DEFAULT '0',
  `diff_country` text NOT NULL DEFAULT '0',
  `diff_postal` text NOT NULL DEFAULT '0',
  `diff_phone` text NOT NULL DEFAULT '0',
  `discount_code` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `O_status` text NOT NULL DEFAULT 'pending',
  `ctime` time NOT NULL DEFAULT current_timestamp(),
  `cdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`o_id`, `user_email`, `order_pass`, `address`, `city`, `postal_code`, `country`, `cash_method`, `billing_address`, `diff_first_name`, `diff_last_name`, `diff_address`, `diff_city`, `diff_country`, `diff_postal`, `diff_phone`, `discount_code`, `total`, `order_id`, `user_id`, `O_status`, `ctime`, `cdate`) VALUES
(30, 'heelo@gmail.com', '373', 'abs', 'lake city', '564455', 'Pakistan', 'Cash on Delivery (COD)', 'same_shipping_method', '', '', '', '', '', '', '', 0, 79000, 3022, 6, 'pending', '12:27:01', '2021-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `prev_price` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` text NOT NULL,
  `sub_cat` text NOT NULL,
  `status` int(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `title`, `description`, `prev_price`, `price`, `image`, `category`, `sub_cat`, `status`) VALUES
(1, 'White Base Table', 'lorem text will', 15000, 13000, 'living0.jpg', 'Living Room', 'Table', 1),
(2, 'Red Base TV Launch', 'text deatil', 25000, 22000, 'living1.jpg', 'Living Room', 'TV Consoles', 1),
(3, 'Gray Base Chair', 'text deatil', 33000, 32000, 'living2.jpg', 'Living Room', 'Chair', 1),
(4, 'Golden Base Chair', 'text deatil', 34000, 33000, 'living3.jpg', 'Living Room', 'Chair', 1),
(5, 'Yellowish Base', 'text deatil', 36000, 33000, 'shelf0.jpg', 'Shelves', '', 1),
(6, 'heelo', '', 15000, 1235, 'shelf1.jpg', 'Shelves', '', 1),
(7, 'heelo', 'tet here', 15000, 10000, 'shelf2.jpg', 'Shelves', '', 1),
(8, 'TV lounch Base', 'text deatil', 36000, 35000, 'shelf3.jpg', 'Shelves', '', 1),
(9, 'Pink Base', 'text deatil', 34000, 33000, 'art0.jpg', 'Leather Art', '', 1),
(10, 'Gray Base', 'text deatil', 0, 41000, 'art1.jpg', 'Leather Art', '', 1),
(11, 'dark gray Base', 'text deatil', 0, 50000, 'art2.jpg', 'Leather Art', '', 1),
(12, 'brown base', 'text deatil', 38000, 35000, 'art3.jpg', 'Leather Art', '', 1),
(13, 'Birds', 'text deatil', 40000, 35000, 'decor0.jpg', 'Engraving Art', '', 1),
(14, 'Eagle', 'text deatil', 400000, 38000, 'decor1.jpg', 'Engraving Art', '', 1),
(15, 'Plates base design', 'text deatil', 36000, 35000, 'g0.jpg', 'Decor', 'Shelf', 1),
(16, 'room base', 'text deatil', 0, 39000, 'g2.jpg', 'Decor', '', 1),
(17, 'keyboard base', 'text deatil', 0, 30000, 'g4.jpg', 'Decor', '', 1),
(18, 'Table base', 'text deatil', 0, 45000, 'g5.jpg', 'Decor', '', 1),
(20, 'Brown Shoes', 'tet here', 41365, 1200, 'g3.jpg', 'Leather Art', '', 1),
(21, 'Brown Shoes', 'tet here', 41365, 1200, 'art3.jpg', 'Leather Art', '', 1),
(22, 'Blue Hand Carry', 'tet here', 41365, 12000, 'art0.jpg', 'Leather Art', '', 1),
(23, 'Alexendra Clock', 'tet here', 41365, 40000, 'gems-2729113_1920.png', 'Wall Clocks', '', 1),
(24, 'Moray Clock', 'tet here', 15000, 10000, 'clock-2634551_1920.png', 'Wall Clocks', '', 1),
(25, 'Sadusa Clock', 'tet here', 6000, 5000, 'clock-1866137_1920.jpg', 'Wall Clocks', '', 1),
(26, 'Wooden clock', 'tet here', 12000, 8000, 'clock-2143830_1920.jpg', 'Wall Clocks', '', 1),
(27, 'Viara Clock ', 'tet here', 20000, 150000, 'clock-157400_1280.png', 'Wall Clocks', '', 1),
(28, 'Tesla Clock', 'tet here', 16000, 8000, 'old-houses-4433982_1920.jpg', 'Wall Clocks', '', 1),
(29, 'House Station Clock', 'tet here', 3500, 3000, 'clock-163580_1280.jpg', 'Wall Clocks', '', 1),
(30, 'Casio Clock White', 'tet here', 9000, 2000, 'clock-3597460_1920.jpg', 'Wall Clocks', '', 1),
(31, 'House Station Clock', 'tet here', 6000, 2000, 'wall-clock-3622_1280.jpg', 'Wall Clocks', '', 1),
(32, 'Black Jacket', 'tet here', 15000, 12000, 'profile-img.jpg', 'Leather Art', '', 1),
(33, 'Black Jacket', 'tet here', 15000, 12000, 'profile-img.jpg', 'Leather Art', '', 1),
(34, 'Side Shelf', 'tet here', 15000, 12000, 'albus_wall.jpg', 'Living Room', 'Shelf', 1),
(35, 'Table Decor', 'tet here', 15000, 12000, 'wall-416060_1280.jpg', 'Décor', 'Table', 1),
(36, 'Dining Room Base Set', 'tet here', 40000, 38000, 'couch-1835923_1920.jpg', 'Living Room', 'Table', 1),
(37, 'Dining Room Base Set', 'tet here', 50000, 48000, 'furniture-998265_1920.jpg', 'Living Room', 'Table', 1),
(38, 'Dining Room Base Set', 'tet here', 60000, 55000, 'dining-room-3108037_1280.jpg', 'Living Room', 'Table', 1),
(39, 'Dining Room Base Set', 'tet here', 70000, 60000, 'j1.jpg', 'Living Room', 'Table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_cat_id` int(255) NOT NULL,
  `sub_cat` text NOT NULL,
  `cat_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_cat_id`, `sub_cat`, `cat_id`) VALUES
(1, 'Shelf', 'Living Room'),
(2, 'TV Consoles', 'Living Room'),
(3, 'Table', 'Living Room'),
(4, 'Chair', 'Living Room'),
(5, 'Rugs', 'Living Room'),
(6, 'Lamps', 'Living Room'),
(7, 'Bar Stool', 'Living Room'),
(8, 'Shoe Rack', 'Living Room'),
(9, 'Iron Stone', 'Living Room'),
(11, 'Candel Stands', 'Décor'),
(12, 'Wall Clocks', 'Décor'),
(13, 'Lamps', 'Décor'),
(14, 'Key Hangers', 'Décor'),
(15, 'Planters', 'Décor'),
(16, 'Antique Telephones', 'Décor'),
(17, 'Vases', 'Décor'),
(18, 'Table Decor', 'Décor'),
(19, 'Stickers', 'Décor'),
(20, 'Newspaper Stands', 'Décor'),
(21, 'Wrist Watches', 'Décor'),
(22, 'Other Decor', 'Décor'),
(23, 'Wall shelf', 'Shelves'),
(24, 'Floor', 'Shelves');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_contact` text NOT NULL,
  `address` text NOT NULL,
  `user_type` text NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `user_email`, `user_password`, `user_contact`, `address`, `user_type`) VALUES
(1, 'admin', '0', 'admin@admin.com', 'pass', '123654', 'abc', 'admin'),
(4, 'ahmad', '0', 'harry@den.com', 'pass', '123654', 'abc', 'user'),
(6, 'heelo', 'dskjd', 'heelo@gmail.com', '123', '', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `o_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
