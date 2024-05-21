-- Create table for categories
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` INT(11) NOT NULL AUTO_INCREMENT,
  `category_name` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert data into categories table
INSERT INTO `category` (`category_name`) VALUES
('Sneakers'),
('Boots'),
('Loafers'),
('Sports');

-- Create table for products
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` INT(11) NOT NULL AUTO_INCREMENT,
  `product_name` VARCHAR(200) NOT NULL,
  `product_desc` TEXT NOT NULL,
  `product_image` VARCHAR(255) NOT NULL,
  `price` INT(11) NOT NULL,
  `category_id` INT(11) NOT NULL,
  `uploaded_date` DATE NOT NULL,
  PRIMARY KEY (`product_id`),
  FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert data into products table
INSERT INTO `product` (`product_name`, `product_desc`, `product_image`, `price`, `category_id`) VALUES
('Nike Air Max 270', 'Inspired by Air Max icons like the Air Max 180 and Air Max 93, the Nike Air Max 270 features the largest heel Air unit for a soft yet supportive ride.', 'nike_air_max_270.jpg', 120, 1),
('Adidas UltraBoost', 'Designed for high performance, the Adidas UltraBoost offers unparalleled comfort and energy return, making it ideal for long-distance running.', 'adidas_ultraboost.jpg', 150, 1),
('Timberland 6-Inch Waterproof Boots', 'Iconic for their durability, Timberland 6-Inch Waterproof Boots feature premium waterproof leather and a padded collar for a comfortable fit.', 'timberland_boots.jpg', 180, 2),
('Dr. Martens 1460 Leather Boots', 'Known for their iconic style and durability, Dr. Martens 1460 Leather Boots feature a smooth leather upper, air-cushioned sole, and signature yellow stitching.', 'dr_martens_boots.jpg', 160, 2),
('Cole Haan Grand Crosscourt Sneakers', 'Crafted with leather uppers and a cushioned footbed, Cole Haan Grand Crosscourt Sneakers offer all-day comfort and a sleek, versatile design.', 'cole_haan_sneakers.jpg', 100, 1),
('Vans Old Skool Skate Shoes', 'A classic skateboarding shoe, Vans Old Skool Skate Shoes feature a low-top silhouette, padded collars, and the iconic Vans side stripe.', 'vans_old_skool.jpg', 65, 1),
('Gucci Horsebit Leather Loafers', 'Crafted from smooth leather, Gucci Horsebit Leather Loafers feature the brands iconic horsebit detail, making them a timeless addition to any wardrobe.', 'gucci_loafers.jpg', 690, 3),
('Cole Haan OriginalGrand Wingtip Oxford', 'A modern take on the classic wingtip design, Cole Haan OriginalGrand Wingtip Oxford features a lightweight Grand.ØS sole and a sleek leather upper.', 'cole_haan_oxford.jpg', 200, 3),
('Nike LeBron Witness V Basketball Shoes', 'Designed for speed and power on the court, Nike LeBron Witness V Basketball Shoes feature a lightweight upper and responsive cushioning.', 'nike_lebron_witness.jpg', 110, 4),
('Under Armour HOVR Havoc 3 Basketball Shoes', 'Featuring UA HOVR™ technology for energy return and midfoot TPU shank for stability, Under Armour HOVR Havoc 3 Basketball Shoes are ideal for the basketball court.', 'under_armour_hovr.jpg', 120, 4);

-- Create table for product size variations
CREATE TABLE IF NOT EXISTS `product_size_variation` (
  `variation_id` INT(11) NOT NULL AUTO_INCREMENT,
  `product_id` INT(11) NOT NULL,
  `size_id` INT(11) NOT NULL,
  `quantity_in_stock` INT(11) NOT NULL,
  PRIMARY KEY (`variation_id`),
  FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert data into product size variations table
INSERT INTO `product_size_variation` (`product_id`, `size_id`, `quantity_in_stock`) VALUES
(1, 4, 5),
(2, 3, 9),
(2, 2, 3),
(3, 3, 6),
(4, 2, 8),
(5, 4, 8),
(6, 2, 10),
(7, 2, 10);

-- Create table for sizes
CREATE TABLE IF NOT EXISTS `sizes` (
  `size_id` INT(11) NOT NULL AUTO_INCREMENT,
  `size_name` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert data into sizes table with shoe size format
INSERT INTO `sizes` (`size_name`) VALUES
('6'), ('6.5'), ('7'), ('7.5'), ('8'), ('8.5'), ('9'), ('9.5'), ('10');

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `delivered_to` varchar(150) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `deliver_address` varchar(255) NOT NULL,
  `pay_method` varchar(50) NOT NULL,
  `pay_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0,
  `order_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- -- Add indexes for better query performance
-- ALTER TABLE `category` ADD PRIMARY KEY (`category_id`);
-- ALTER TABLE `product` ADD PRIMARY KEY (`product_id`), ADD KEY `category_id` (`category_id`);
-- ALTER TABLE `product_size_variation` ADD PRIMARY KEY (`variation_id`), ADD UNIQUE KEY `uc_ps` (`product_id`,`size_id`);
-- ALTER TABLE `sizes` ADD PRIMARY KEY (`size_id`);

-- -- Set auto-increment values for tables
-- ALTER TABLE `category` MODIFY `category_id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
-- ALTER TABLE `product` MODIFY `product_id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
-- ALTER TABLE `product_size_variation` MODIFY `variation_id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
-- ALTER TABLE `sizes` MODIFY `size_id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

-- -- Add foreign key constraints
-- ALTER TABLE `product` ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
-- ALTER TABLE `product_size_variation` ADD CONSTRAINT `fk_variation_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

