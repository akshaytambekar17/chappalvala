ALTER TABLE `category` CHANGE `update_at` `updated_at` DATETIME NOT NULL;

ALTER TABLE `category` ADD `parent_id` INT(11) NOT NULL AFTER `meta_keywords`;

ALTER TABLE `product_has_category` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `product_has_image` CHANGE `product_id` `productId` INT(11) NOT NULL;