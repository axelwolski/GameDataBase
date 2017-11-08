-- -----------------------------------------------------
-- Table `awolski`.`Game`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `awolski`.`Game` (
  `idGame` INT NOT NULL,
  `GameName` VARCHAR(100) NOT NULL,
  `Rating` FLOAT NOT NULL,
  `ReleaseDate` DATE NOT NULL,
  PRIMARY KEY (`idGame`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `awolski`.`Genre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `awolski`.`Genre` (
  `idGenre` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `GenreName` VARCHAR(100))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `idGenre_UNIQUE` ON `awolski`.`Genre` (`idGenre` ASC);


-- -----------------------------------------------------
-- Table `awolski`.`Theme`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `awolski`.`Theme` (
  `idTheme` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `ThemeName` VARCHAR(100) NOT NULL)
ENGINE = InnoDB;

CREATE UNIQUE INDEX `idTheme_UNIQUE` ON `awolski`.`Theme` (`idTheme` ASC);

-- -----------------------------------------------------
-- Table `awolski`.`Plateform`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `awolski`.`Plateform` (
  `idPlateform` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `PlateformName` VARCHAR(100) NOT NULL)
ENGINE = InnoDB;

CREATE UNIQUE INDEX `idPlateform_UNIQUE` ON `awolski`.`Plateform` (`idPlateform` ASC);

-- -----------------------------------------------------
-- Table `awolski`.`Developer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `awolski`.`Developer` (
  `idDeveloper` INT NOT NULL,
  `DeveloperName` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idDeveloper`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `awolski`.`Publisher`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `awolski`.`Publisher` (
  `idPublisher` INT NOT NULL,
  `PublisherName` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idPublisher`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `awolski`.`Game_has_Genre`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `awolski`.`Game_has_Genre` (
  `Game_idGame` INT NOT NULL,
  `Genre_idGenre` INT NOT NULL,
  PRIMARY KEY (`Game_idGame`, `Genre_idGenre`),
  CONSTRAINT `fk_Game_has_Genre_Game`
    FOREIGN KEY (`Game_idGame`)
    REFERENCES `awolski`.`Game` (`idGame`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Game_has_Genre_Genre1`
    FOREIGN KEY (`Genre_idGenre`)
    REFERENCES `awolski`.`Genre` (`idGenre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Game_has_Genre_Genre1_idx` ON `awolski`.`Game_has_Genre` (`Genre_idGenre` ASC);

CREATE INDEX `fk_Game_has_Genre_Game_idx` ON `awolski`.`Game_has_Genre` (`Game_idGame` ASC);

-- -----------------------------------------------------
-- Table `awolski`.`Game_has_Theme`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `awolski`.`Game_has_Theme` (
  `Game_idGame` INT NOT NULL,
  `Theme_idTheme` INT NOT NULL,
  PRIMARY KEY (`Game_idGame`, `Theme_idTheme`),
  CONSTRAINT `fk_Game_has_Theme_Game1`
    FOREIGN KEY (`Game_idGame`)
    REFERENCES `awolski`.`Game` (`idGame`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Game_has_Theme_Theme1`
    FOREIGN KEY (`Theme_idTheme`)
    REFERENCES `awolski`.`Theme` (`idTheme`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Game_has_Theme_Theme1_idx` ON `awolski`.`Game_has_Theme` (`Theme_idTheme` ASC);

CREATE INDEX `fk_Game_has_Theme_Game1_idx` ON `awolski`.`Game_has_Theme` (`Game_idGame` ASC);


-- -----------------------------------------------------
-- Table `awolski`.`Game_has_Plateform`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `awolski`.`Game_has_Plateform` (
  `Game_idGame` INT NOT NULL,
  `Plateform_idPlateform` INT NOT NULL,
  PRIMARY KEY (`Game_idGame`, `Plateform_idPlateform`),
  CONSTRAINT `fk_Game_has_Plateform_Game1`
    FOREIGN KEY (`Game_idGame`)
    REFERENCES `awolski`.`Game` (`idGame`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Game_has_Plateform_Plateform1`
    FOREIGN KEY (`Plateform_idPlateform`)
    REFERENCES `awolski`.`Plateform` (`idPlateform`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Game_has_Plateform_Plateform1_idx` ON `awolski`.`Game_has_Plateform` (`Plateform_idPlateform` ASC);

CREATE INDEX `fk_Game_has_Plateform_Game1_idx` ON `awolski`.`Game_has_Plateform` (`Game_idGame` ASC);


-- -----------------------------------------------------
-- Table `awolski`.`Game_has_Developer`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `awolski`.`Game_has_Developer` (
  `Game_idGame` INT NOT NULL,
  `Developer_idDeveloper` INT NOT NULL,
  PRIMARY KEY (`Game_idGame`, `Developer_idDeveloper`),
  CONSTRAINT `fk_Game_has_Developer_Game1`
    FOREIGN KEY (`Game_idGame`)
    REFERENCES `awolski`.`Game` (`idGame`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Game_has_Developer_Developer1`
    FOREIGN KEY (`Developer_idDeveloper`)
    REFERENCES `awolski`.`Developer` (`idDeveloper`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Game_has_Developer_Developer1_idx` ON `awolski`.`Game_has_Developer` (`Developer_idDeveloper` ASC);

CREATE INDEX `fk_Game_has_Developer_Game1_idx` ON `awolski`.`Game_has_Developer` (`Game_idGame` ASC);


-- -----------------------------------------------------
-- Table `awolski`.`Game_has_Publisher`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `awolski`.`Game_has_Publisher` (
  `Game_idGame` INT NOT NULL,
  `Publisher_idPublisher` INT NOT NULL,
  PRIMARY KEY (`Game_idGame`, `Publisher_idPublisher`),
  CONSTRAINT `fk_Game_has_Publisher_Game1`
    FOREIGN KEY (`Game_idGame`)
    REFERENCES `awolski`.`Game` (`idGame`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Game_has_Publisher_Publisher1`
    FOREIGN KEY (`Publisher_idPublisher`)
    REFERENCES `awolski`.`Publisher` (`idPublisher`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Game_has_Publisher_Publisher1_idx` ON `awolski`.`Game_has_Publisher` (`Publisher_idPublisher` ASC);

CREATE INDEX `fk_Game_has_Publisher_Game1_idx` ON `awolski`.`Game_has_Publisher` (`Game_idGame` ASC);


-- -----------------------------------------------------
-- Table `awolski`.`FirstGame`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `awolski`.`FirstGame` (
  `idGame` INT NOT NULL,
  `GameName` VARCHAR(100) NOT NULL,
  `GameGenre` VARCHAR(100) NOT NULL,
  `GameTheme` VARCHAR(100) NOT NULL,
  `Rating` FLOAT NOT NULL,
  `ReleaseDate` DATE NOT NULL,
  `GamePlateform` VARCHAR(100) NOT NULL,
  `GameDeveloper` VARCHAR(100) NOT NULL,
  `GamePublisher` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idGame`) )
ENGINE = InnoDB;
