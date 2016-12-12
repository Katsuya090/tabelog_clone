use tabelog_clone

CREATE TABLE `houses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB;
ALTER TABLE `houses` ADD PRIMARY KEY (`id`);
ALTER TABLE `houses` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;