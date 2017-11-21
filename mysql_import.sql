
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) AUTO_INCREMENT=1 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `price`) VALUES
(1, 'PD1001', 'Ant Man T-shirt', 'ONly for die hard fans of Ant Man', 'images/antman.jpg', 499.99),
(2, 'PD1002', 'Aqua Man T-shirt', 'ONly for die hard fans of Aqua Man', 'images/aquaman.jpg', 499.99),
(3, 'PD1003', 'Bat Man T-shirt', 'ONly for die hard fans of Bat Man', 'images/batman.jpg', 499.99),
(4, 'PD1004', 'Captain America T-shirt', 'ONly for die hard fans of Captain America', 'images/captain.jpg', 499.99),
(5, 'PD1005', 'Flash T-shirt', 'ONly for die hard fans of Flash Man', 'images/flash.jpg', 499.99),
(6, 'PD1006', 'Green Lantern T-shirt', 'ONly for die hard fans of Green Lantern', 'images/greenlantern.jpg', 499.99),
(7, 'PD1007', 'Hulk T-shirt', 'ONly for die hard fans of Hulk', 'images/hulk.jpg', 499.99),
(8, 'PD1008', 'Iron Man T-shirt', 'ONly for die hard fans of Iron Man', 'images/ironman.jpg', 499.99),
(9, 'PD1009', 'Spider Man T-shirt', 'ONly for die hard fans of Spider Man', 'images/spiderman.jpg', 499.99),
(10, 'PD1010', 'Super Man T-shirt', 'ONly for die hard fans of Super Man', 'images/superman.jpg', 499.99),
(11, 'PD1011', 'Black Widow T-shirt', 'ONly for die hard fans of Black Widow', 'images/blackwidow.jpg', 499.99),
(12, 'PD1012', 'Thor T-shirt', 'ONly for die hard fans of Thor', 'images/thor.jpg', 499.99),
(13, 'PD1012', 'Wolverine T-shirt', 'ONly for die hard fans of Wolverine', 'images/wolverine.jpg', 499.99),
(14, 'PD1014', 'Wonder Woman T-shirt', 'ONly for die hard fans of Wonder Woman', 'images/wonderwoman.jpg', 499.99),;
