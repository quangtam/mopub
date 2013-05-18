CREATE  TABLE `mopub`.`orders` (

  `id` INT NOT NULL AUTO_INCREMENT ,

  `user` VARCHAR(45) NOT NULL ,

  `name` VARCHAR(45) NOT NULL ,

  `advertiser` VARCHAR(45) NOT NULL ,

  `description` VARCHAR(140) NOT NULL ,

  PRIMARY KEY (`id`)
  );