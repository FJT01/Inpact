
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- investors
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `investors`;

CREATE TABLE `investors`
(
    `fname` VARCHAR(20) NOT NULL,
    `lname` VARCHAR(20) NOT NULL,
    `url` VARCHAR(255) NOT NULL,
    `id` INTEGER(8) NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
