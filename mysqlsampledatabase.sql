CREATE DATABASE /*!32312 IF NOT EXISTS*/`bank`;
USE `bank`;

CREATE TABLE `bank`.`customers`(
  `username` VARCHAR(255) NOT NULL ,
  `email` VARCHAR(255)  ,
  `phone` VARCHAR(30) NOT NULL ,
  `accountno` INT(255)  ,
  `aadharno` INT(255)  ,
  `panno` INT(255)  ,
  `blackpoints` INT(255),
  `password` VARCHAR(255) 
  );

CREATE TABLE `bank`.`admins`(
  `username` VARCHAR(255) NOT NULL ,
  `email` VARCHAR(255)  ,
  `phone` VARCHAR(30) NOT NULL ,
  `employid`INT(255)  ,
  `password` VARCHAR(255) 
  );

CREATE TABLE `bank`.`jobs` (
  `job_name` VARCHAR(255) NOT NULL ,
  `availablecounters` INT(11) NOT NULL , 
  `startendtime` VARCHAR(30) NOT NULL , 
  `employid` VARCHAR(30) NOT NULL ,
  `timespentforone` INT(11) NOT NULL 
  );
  
CREATE TABLE `bank`.`slots` (
  `job_name` VARCHAR(255) NOT NULL ,
  `accountno` INT(255) NOT NULL ,
  `counterno` INT(11) NOT NULL , 
  `slottime` VARCHAR(30) NOT NULL
  );