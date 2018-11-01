ALTER TABLE `category` CHANGE `update_at` `updated_at` DATETIME NOT NULL;

ALTER TABLE `category` ADD `parent_id` INT(11) NOT NULL AFTER `meta_keywords`;