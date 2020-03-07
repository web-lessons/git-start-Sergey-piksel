CREATE DATABASE `shop`;

USE `shop`;



CREATE TABLE IF NOT EXISTS `products` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(50) NOT NULL,
    `slug` varchar(50) NOT NULL,
    `img` varchar(255) DEFAULT NULL, 
    `description` text DEFAULT NULL,
    `price` int(11) DEFAULT NULL,
    PRIMARY KEY (`id`)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `name`, `slug`, `img`, `description`,`price`) VALUES 
    (1, 'Твар 1', 'product1', 'https://fdlx.com/wp-content/uploads/armiya-chechni-yavlyaetsya-samoj-boesposobnoj-gruppirovkoj-v-rf-yashin.jpg', 'Хороший товр', 2500),
    (2, 'Твар 2', 'product1', 'https://fdlx.com/wp-content/uploads/armiya-chechni-yavlyaetsya-samoj-boesposobnoj-gruppirovkoj-v-rf-yashin.jpg', 'Хороший товр', 2500),
    (3, 'Твар 3', 'product1', '/img//product1.jpg', 'Хороший товр', 2500),
    (4, 'Твар 4', 'product1', '/img//product1.jpg', 'Хороший товр', 2500);