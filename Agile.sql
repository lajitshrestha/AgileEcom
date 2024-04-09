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