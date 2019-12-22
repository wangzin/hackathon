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

/*Table structure for table `application_assign_tbl` */

DROP TABLE IF EXISTS `application_assign_tbl`;

CREATE TABLE `application_assign_tbl` (
  `Id` int(5) NOT NULL auto_increment,
  `Application_Number` varchar(100) default NULL,
  `Remarks` varchar(255) default NULL,
  `Action_Date` date default NULL,
  `User_Id` int(5) default NULL,
  `Status_Id` int(5) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `application_assign_tbl` */

insert  into `application_assign_tbl`(`Id`,`Application_Number`,`Remarks`,`Action_Date`,`User_Id`,`Status_Id`) values (1,'COM/DEP/2019/9',NULL,NULL,3,4);
insert  into `application_assign_tbl`(`Id`,`Application_Number`,`Remarks`,`Action_Date`,`User_Id`,`Status_Id`) values (2,'COM/DEP/2019/9',NULL,NULL,5,1);
insert  into `application_assign_tbl`(`Id`,`Application_Number`,`Remarks`,`Action_Date`,`User_Id`,`Status_Id`) values (5,'COM/DEP/2019/10','Sending for final approval','2019-12-22',5,4);
insert  into `application_assign_tbl`(`Id`,`Application_Number`,`Remarks`,`Action_Date`,`User_Id`,`Status_Id`) values (8,'COM/DEP/2019/23','','2019-12-22',5,4);

/*Table structure for table `application_sequence` */

DROP TABLE IF EXISTS `application_sequence`;

CREATE TABLE `application_sequence` (
  `Id` int(4) NOT NULL auto_increment,
  `Sequence_Type` varchar(100) default NULL,
  `Last_Sequence` int(4) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `application_sequence` */

insert  into `application_sequence`(`Id`,`Sequence_Type`,`Last_Sequence`) values (1,'COM/DEP',60);

/*Table structure for table `application_tbl` */

DROP TABLE IF EXISTS `application_tbl`;

CREATE TABLE `application_tbl` (
  `Id` int(5) NOT NULL auto_increment,
  `Application_Number` varchar(100) default NULL,
  `Subject` varchar(100) default NULL,
  `Message` text,
  `Application_Date` date default NULL,
  `Status_Id` int(3) default NULL,
  `Submitted_Id` int(5) default NULL,
  `Last_Action_By` varchar(5) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `application_tbl` */

insert  into `application_tbl`(`Id`,`Application_Number`,`Subject`,`Message`,`Application_Date`,`Status_Id`,`Submitted_Id`,`Last_Action_By`) values (3,'COM/DEP/2019/9','Subjeg','<p>sidfhasjdlkf asdhfasdf ahsd</p><p>asdfhas dfhai sudfh</p><p>asdfhasd fhasdfh lajsdfhasdufhoausdgfasuidfh</p>','2019-12-21',1,2,NULL);
insert  into `application_tbl`(`Id`,`Application_Number`,`Subject`,`Message`,`Application_Date`,`Status_Id`,`Submitted_Id`,`Last_Action_By`) values (4,'COM/DEP/2019/10',';sgkdjfg added','<p>skdfjgndlksjfg sdfhg dsfkjgnsdkjf gnsdkjfg</p><p>dsfgnsdfgdfgsdfgnsdf</p><p>sdfnkgsdfg</p><p>sdfgnskdjfgsdjflkgnsdfkg</p><p>sdfgsjdkfgnsdfkjgbsdnfkj ngsdkfjgsdf hgsiupfg sndfgnsdf</p>','2019-12-21',6,2,'5');
insert  into `application_tbl`(`Id`,`Application_Number`,`Subject`,`Message`,`Application_Date`,`Status_Id`,`Submitted_Id`,`Last_Action_By`) values (5,'COM/DEP/2019/23','asdfasdfasdf','<p>sjergbsdfg</p><p>agnljsdfgbdjfl gafkdg</p><p>adgfnajkd gfaldjfgadf</p>','2019-12-22',6,3,'5');

/*Table structure for table `approved_application_tbl` */

DROP TABLE IF EXISTS `approved_application_tbl`;

CREATE TABLE `approved_application_tbl` (
  `Id` int(5) NOT NULL auto_increment,
  `Application_Number` varchar(100) default NULL,
  `Subject` varchar(100) default NULL,
  `Message` text,
  `Application_Date` date default NULL,
  `Status_Id` int(3) default NULL,
  `Submitted_Id` int(5) default NULL,
  `Amount_Approved` varchar(5) default NULL,
  `Last_Action_By` varchar(5) default NULL,
  `Approved_Date` date default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `approved_application_tbl` */

insert  into `approved_application_tbl`(`Id`,`Application_Number`,`Subject`,`Message`,`Application_Date`,`Status_Id`,`Submitted_Id`,`Amount_Approved`,`Last_Action_By`,`Approved_Date`) values (1,'COM/DEP/2019/10','sgkdjfg added','<p>skdfjgndlksjfg sdfhg dsfkjgnsdkjf gnsdkjfg</p><p>dsfgnsdfgdfgsdfgnsdf</p><p>sdfnkgsdfg</p><p>sdfgnskdjfgsdjflkgnsdfkg</p><p>sdfgsjdkfgnsdfkjgbsdnfkj ngsdkfjgsdf hgsiupfg sndfgnsdf</p>','2019-12-21',6,2,NULL,'5','2019-12-22');
insert  into `approved_application_tbl`(`Id`,`Application_Number`,`Subject`,`Message`,`Application_Date`,`Status_Id`,`Submitted_Id`,`Amount_Approved`,`Last_Action_By`,`Approved_Date`) values (2,'COM/DEP/2019/23','asdfasdfasdf','<p>sjergbsdfg</p><p>agnljsdfgbdjfl gafkdg</p><p>adgfnajkd gfaldjfgadf</p>','2019-12-22',6,3,NULL,'5','2019-12-22');

/*Table structure for table `company_tbl` */

DROP TABLE IF EXISTS `company_tbl`;

CREATE TABLE `company_tbl` (
  `Id` int(5) NOT NULL auto_increment,
  `Company_Name` varchar(200) default NULL,
  `Company_Shortname` varchar(100) default NULL,
  `Status` char(1) default 'Y',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `company_tbl` */

insert  into `company_tbl`(`Id`,`Company_Name`,`Company_Shortname`,`Status`) values (1,'Compnay1','COM','Y');

/*Table structure for table `department_tbl` */

DROP TABLE IF EXISTS `department_tbl`;

CREATE TABLE `department_tbl` (
  `Id` int(5) NOT NULL auto_increment,
  `Department` varchar(200) default NULL,
  `Department_short` varchar(100) default NULL,
  `Status` char(1) default 'Y',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `department_tbl` */

insert  into `department_tbl`(`Id`,`Department`,`Department_short`,`Status`) values (1,'ICT','DEP','Y');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `staff_tbl` */

insert  into `staff_tbl`(`Id`,`Full_Name`,`Email_Id`,`Contact_No`,`Password`,`Company_Id`,`Department_Id`,`Designation_Id`,`Action_Date`,`Role_Id`) values (2,'Younten Tshering','yountentshering@gmail.com',12345678,'123',1,1,1,'2019-12-21',1);
insert  into `staff_tbl`(`Id`,`Full_Name`,`Email_Id`,`Contact_No`,`Password`,`Company_Id`,`Department_Id`,`Designation_Id`,`Action_Date`,`Role_Id`) values (3,'Tshewang Tenzin','wangzin53@gmail.com',12312312,'321',1,1,2,'2019-12-21',0);
insert  into `staff_tbl`(`Id`,`Full_Name`,`Email_Id`,`Contact_No`,`Password`,`Company_Id`,`Department_Id`,`Designation_Id`,`Action_Date`,`Role_Id`) values (5,'skdfgnka','aaaa',1231231,'222',1,1,2,'2019-12-21',2);

/*Table structure for table `status_tbl` */

DROP TABLE IF EXISTS `status_tbl`;

CREATE TABLE `status_tbl` (
  `Id` int(2) NOT NULL auto_increment,
  `Status` varchar(20) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `status_tbl` */

insert  into `status_tbl`(`Id`,`Status`) values (1,'Submitted');
insert  into `status_tbl`(`Id`,`Status`) values (2,'Verified');
insert  into `status_tbl`(`Id`,`Status`) values (3,'Aproved');
insert  into `status_tbl`(`Id`,`Status`) values (4,'Claimed');
insert  into `status_tbl`(`Id`,`Status`) values (5,'Rejected');
insert  into `status_tbl`(`Id`,`Status`) values (6,'Complete');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
