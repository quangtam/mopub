CREATE  TABLE `mopub`.`line_items` (

  `id` INT NOT NULL AUTO_INCREMENT ,

  `order_id` INT NOT NULL ,

  `name` VARCHAR(45) NOT NULL ,
 
  `type` ENUM('guaranteed', 'promotional', 'marketplace', 'non-guaranteed', 'backfill') NULL ,

  `priority` ENUM('1', '2', '3', '4', '5', '6', '7', '8', '9', '10') NULL ,
  
  `start_time` DATETIME NOT NULL ,

  `stop_time` DATETIME NOT NULL ,

  `budget` INT NULL ,

  `rate` DECIMAL(4,2) NOT NULL ,

  `rate_measure` ENUM('CPM', 'CPC') NULL ,

  `delivery_speed` ENUM('spread evenly', 'all at once') NOT NULL DEFAULT 'All at once' ,

  `targeting_days` SET('', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun') NULL ,

  `budget_type` ENUM('daily impressions', 'total impressions') NULL ,

  `targeting_start_time` TIME NULL ,

  `targeting_end_time` TIME NULL ,

  PRIMARY KEY (`id`) ,

  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,

  INDEX `order_id` (`order_id` ASC) )

COMMENT = 'each line item belong to exactly 1 order';