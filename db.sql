/*
SQLyog Ultimate v8.82 
MySQL - 5.0.86-community-nt : Database - notesheet_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`notesheet_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `notesheet_db`;

/*Table structure for table `company_tbl` */

DROP TABLE IF EXISTS `company_tbl`;

CREATE TABLE `company_tbl` (
  `Id` int(5) NOT NULL auto_increment,
  `Company_Name` varchar(200) default NULL,
  `Status` char(1) default 'Y',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `company_tbl` */

insert  into `company_tbl`(`Id`,`Company_Name`,`Status`) values (1,'Compnay1','Y');

/*Table structure for table `department_tbl` */

DROP TABLE IF EXISTS `department_tbl`;

CREATE TABLE `department_tbl` (
  `Id` int(5) NOT NULL auto_increment,
  `Department` varchar(200) default NULL,
  `Status` char(1) default 'Y',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `department_tbl` */

insert  into `department_tbl`(`Id`,`Department`,`Status`) values (1,'ICT','Y');

/*Table structure for table `designation_tbl` */

DROP TABLE IF EXISTS `designation_tbl`;

CREATE TABLE `designation_tbl` (
  `Id` int(4) NOT NULL auto_increment,
  `Designaiton` varchar(200) default NULL,
  `Status` char(1) default 'Y',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `designation_tbl` */

insert  into `designation_tbl`(`Id`,`Designaiton`,`Status`) values (1,'ICT Officer','Y');
insert  into `designation_tbl`(`Id`,`Designaiton`,`Status`) values (2,'Manager','Y');

/*Table structure for table `role_tbl` */

DROP TABLE IF EXISTS `role_tbl`;

CREATE TABLE `role_tbl` (
  `Id` int(5) NOT NULL auto_increment,
  `Role_Name` varchar(200) default NULL,
  `Status` char(1) default 'Y',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `role_tbl` */

insert  into `role_tbl`(`Id`,`Role_Name`,`Status`) values (1,'Admin','Y');
insert  into `role_tbl`(`Id`,`Role_Name`,`Status`) values (2,'Approver','Y');

/*Table structure for table `staff_tbl` */

DROP TABLE IF EXISTS `staff_tbl`;

CREATE TABLE `staff_tbl` (
  `Id` int(5) NOT NULL auto_increment,
  `Full_Name` varchar(200) default NULL,
  `Email_Id` varchar(200) default NULL,
  `Contact_No` int(8) default NULL,
  `Password` varchar(200) default NULL,
  `Company_Id` int(5) default NULL,
  `Department_Id` int(5) default NULL,
  `Designation_Id` int(5) default NULL,
  `Action_Date` date default NULL,
  `Role_Id` int(5) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `staff_tbl` */

insert  into `staff_tbl`(`Id`,`Full_Name`,`Email_Id`,`Contact_No`,`Password`,`Company_Id`,`Department_Id`,`Designation_Id`,`Action_Date`,`Role_Id`) values (2,'Younten Tshering','yountentshering@gmail.com',12345678,'123',1,0,1,'2019-12-21',1);
insert  into `staff_tbl`(`Id`,`Full_Name`,`Email_Id`,`Contact_No`,`Password`,`Company_Id`,`Department_Id`,`Designation_Id`,`Action_Date`,`Role_Id`) values (3,'Tshewang Tenzin','wangzin53@gmail.com',12312312,'321',1,1,2,'2019-12-21',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
