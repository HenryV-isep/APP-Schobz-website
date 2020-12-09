-- MySQL Script generated by MySQL Workbench
-- Wed Dec  9 14:32:11 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Schobz_data
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Schobz_data
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Schobz_data` DEFAULT CHARACTER SET utf8 ;
USE `Schobz_data` ;

-- -----------------------------------------------------
-- Table `Schobz_data`.`Auto_ecole`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Schobz_data`.`Auto_ecole` (
  `id_startup` INT NOT NULL,
  `nom` VARCHAR(100) NOT NULL,
  `logo` BLOB NULL,
  `adresse_postale` VARCHAR(200) NOT NULL,
  `adresse_mail` VARCHAR(100) NOT NULL,
  `numero_de_telephone` INT NOT NULL,
  `Presentation` VARCHAR(300) NULL,
  PRIMARY KEY (`id_startup`),
  UNIQUE INDEX `nom_UNIQUE` (`id_startup` ASC),
  UNIQUE INDEX `numero_de_telephone_UNIQUE` (`numero_de_telephone` ASC),
  UNIQUE INDEX `mail_UNIQUE` (`adresse_mail` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Schobz_data`.`Personne`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Schobz_data`.`Personne` (
  `id_Personne` INT NOT NULL,
  `role` VARCHAR(100) NOT NULL,
  `nom` VARCHAR(50) NOT NULL,
  `prenom` VARCHAR(50) NOT NULL,
  `date_de_naissance` DATE NOT NULL,
  `adresse_mail` VARCHAR(100) NOT NULL,
  `mot_de_passe` VARCHAR(100) NOT NULL,
  `image` BLOB NULL,
  `cle_etrangere_auto_ecole` INT NOT NULL,
  PRIMARY KEY (`id_Personne`, `cle_etrangere_auto_ecole`),
  UNIQUE INDEX `id_Personne_UNIQUE` (`id_Personne` ASC),
  UNIQUE INDEX `adresse_mail_UNIQUE` (`adresse_mail` ASC),
  INDEX `fk_Personne_Autoecole_idx` (`cle_etrangere_auto_ecole` ASC),
  CONSTRAINT `fk_Personne_Auto école1`
    FOREIGN KEY (`cle_etrangere_auto_ecole`)
    REFERENCES `Schobz_data`.`Auto_ecole` (`id_startup`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Schobz_data`.`Test`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Schobz_data`.`Test` (
  `id_test` INT NOT NULL,
  `nom_du_test` VARCHAR(100) NOT NULL,
  `periode` TIMESTAMP(6) NOT NULL,
  `cle_etrangere_personne` INT NOT NULL,
  PRIMARY KEY (`id_test`, `cle_etrangere_personne`),
  UNIQUE INDEX `numero_du_Test_UNIQUE` (`id_test` ASC),
  UNIQUE INDEX `nom_du_test_UNIQUE` (`nom_du_test` ASC),
  INDEX `fk_Test_Personne_idx` (`cle_etrangere_personne` ASC),
  CONSTRAINT `fk_Test_Personne1`
    FOREIGN KEY (`cle_etrangere_personne`)
    REFERENCES `Schobz_data`.`Personne` (`id_Personne`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Schobz_data`.`Capteurs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Schobz_data`.`Capteurs` (
  `id_Capteur` INT NOT NULL,
  `nom_du_capteur` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_Capteur`),
  UNIQUE INDEX `numero_du_Capteur_UNIQUE` (`id_Capteur` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Schobz_data`.`Reponse`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Schobz_data`.`Reponse` (
  `id_reponse` INT NOT NULL,
  `reponse` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id_reponse`),
  UNIQUE INDEX `reponse_UNIQUE` (`id_reponse` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Schobz_data`.`Question`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Schobz_data`.`Question` (
  `id_question` INT NOT NULL,
  `type_question` VARCHAR(100) NOT NULL,
  `Question` VARCHAR(200) NOT NULL,
  `cle_etrangere_faq_reponse` INT NOT NULL,
  PRIMARY KEY (`id_question`, `cle_etrangere_faq_reponse`),
  UNIQUE INDEX `question_UNIQUE` (`id_question` ASC),
  INDEX `fk_FAQQuestion_FAQReponse_idx` (`cle_etrangere_faq_reponse` ASC),
  CONSTRAINT `fk_FAQ Question_FAQ Réponse1`
    FOREIGN KEY (`cle_etrangere_faq_reponse`)
    REFERENCES `Schobz_data`.`Reponse` (`id_reponse`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Schobz_data`.`Resultats`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Schobz_data`.`Resultats` (
  `id_résultats` INT NOT NULL,
  `type` VARCHAR(100) NOT NULL,
  `mesure_de_donnee` DECIMAL(10) ZEROFILL NULL,
  `cle_etrangere_capteur` INT NOT NULL,
  `cle_etrangere_Test` INT NOT NULL,
  PRIMARY KEY (`id_résultats`, `cle_etrangere_capteur`, `cle_etrangere_Test`),
  UNIQUE INDEX `id_résultats_UNIQUE` (`id_résultats` ASC),
  UNIQUE INDEX `nom_du_test_UNIQUE` (`type` ASC),
  INDEX `fk_Résultats_Capteurs_idx` (`cle_etrangere_capteur` ASC),
  INDEX `fk_Résultats_Test_idx` (`cle_etrangere_Test` ASC),
  CONSTRAINT `fk_Résultats_Capteurs`
    FOREIGN KEY (`cle_etrangere_capteur`)
    REFERENCES `Schobz_data`.`Capteurs` (`id_Capteur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Résultats_Test1`
    FOREIGN KEY (`cle_etrangere_Test`)
    REFERENCES `Schobz_data`.`Test` (`id_test`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
