--
-- Database: `muhostin_acm`
--
CREATE DATABASE IF NOT EXISTS `muhostin_acm`;
USE muhostin_acm;

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(16) AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `username` varchar(32) NOT NULL,
  `full_name` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login_date` datetime DEFAULT NULL,
  `role` varchar(64) NOT NULL
);

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventid` int(16) AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `title` varchar(128) NOT NULL,
  `type` varchar(128) NOT NULL,
  `description` varchar(4096) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `creation_date` datetime NULL DEFAULT NOW(),
  `publish_date` datetime NULL DEFAULT NOW()
);

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mid` int(16) AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `fname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `gender` varchar(16) NOT NULL,
  `class` int(4) DEFAULT NULL,
  `email` varchar(48) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `vcode` varchar(64) DEFAULT NULL,
  `password` varchar(32) NOT NULL
);

--
-- Table structure for table `member_degree`
--

CREATE TABLE `member_degree` (
  `mid` int(16) NOT NULL,
  `type` varchar(8) NOT NULL,
  `value` varchar(16) NOT NULL,
  FOREIGN KEY (`mid`)
  REFERENCES `members`(`mid`) 
    ON DELETE CASCADE 
    ON UPDATE CASCADE
);

--
-- Database: `muhostin_registration`
--
CREATE DATABASE IF NOT EXISTS `muhostin_registration`;
USE muhostin_registration;

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `schoolid` int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `sname` varchar(80) DEFAULT NULL,
  `saddl1` varchar(80) DEFAULT NULL,
  `saddl2` varchar(80) DEFAULT NULL,
  `scity` varchar(80) DEFAULT NULL,
  `sstate` varchar(16) DEFAULT NULL,
  `szip` varchar(16) DEFAULT NULL,
  `ip` int(40) UNSIGNED DEFAULT NULL,
  `rdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
);

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `cname` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(80) DEFAULT NULL,
  `schoolid` int(11) DEFAULT NULL,
  `small` int(10) NOT NULL DEFAULT '0',
  `medium` int(10) NOT NULL DEFAULT '0',
  `large` int(10) NOT NULL DEFAULT '0',
  `xlarge` int(10) NOT NULL DEFAULT '0',
  `xxlarge` int(10) NOT NULL DEFAULT '0',
  FOREIGN KEY (`schoolid`)
  REFERENCES `school`(`schoolid`)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `eagle` tinyint(1) DEFAULT '0',
  `eagle_devices` int(11) DEFAULT '0',
  `eagle_platform` varchar(255) DEFAULT NULL,
  `gold` tinyint(1) DEFAULT '0',
  `gold_devices` int(11) DEFAULT '0',
  `blue` tinyint(1) DEFAULT '0',
  `java_eclipse` tinyint(1) DEFAULT '0',
  `java_netbeans` tinyint(1) DEFAULT '0',
  `java_bluej` tinyint(1) DEFAULT '0',
  `java_jgrasp` tinyint(1) DEFAULT '0',
  `java_notepad` tinyint(1) DEFAULT '0',
  `java_other` varchar(30) NOT NULL,
  `python_idle` tinyint(1) DEFAULT '0',
  `python_pycharm` tinyint(1) DEFAULT '0',
  `python_notepad` tinyint(1) DEFAULT '0',
  `python_other` varchar(30) NOT NULL,
  `accommodations` varchar(400) DEFAULT NULL,
  `concerns` varchar(400) DEFAULT NULL,
  `schoolid` int(11) NOT NULL,
  FOREIGN KEY (`schoolid`)
  REFERENCES `school`(`schoolid`) 
    ON DELETE CASCADE 
    ON UPDATE CASCADE
);

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `schoolid` int(15) DEFAULT NULL,
  `datesent` timestamp NULL DEFAULT NULL,
  `datepaid` timestamp NULL DEFAULT NULL,
  FOREIGN KEY (`schoolid`)
  REFERENCES `school`(`schoolid`) 
    ON DELETE CASCADE 
    ON UPDATE CASCADE
);

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `tname` varchar(100) DEFAULT NULL,
  `division` varchar(40) DEFAULT NULL,
  `schoolid` int(11) DEFAULT NULL,
  `small` int(11) DEFAULT '0',
  `medium` int(11) DEFAULT '0',
  `large` int(11) DEFAULT '0',
  `xlarge` int(11) DEFAULT '0',
  `xxlarge` int(11) DEFAULT '0',
  FOREIGN KEY (`schoolid`)
  REFERENCES `school`(`schoolid`) 
    ON DELETE CASCADE 
    ON UPDATE CASCADE
);

--
-- Table structure for table `competition_settings`
--

CREATE TABLE `competition_settings` (
  `setting` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL
);

USE muhostin_acm;
INSERT INTO `users` (`uid`, `username`, `full_name`, `password`, `last_login_date`, `role`) VALUES (1, "admin", "Administrator", "$2y$10$u2hsYJSKtmklGaMceBXdD.UFepJBc3HMeYPUcLfNtzbml74LAG4Sa" , NULL, "Admin");

USE muhostin_registration;
INSERT INTO `competition_settings` (`setting`, `value`) VALUES ("COMPETITION_DATE", "1970-01-01 0:00:00");
INSERT INTO `competition_settings` (`setting`, `value`) VALUES ("REGISTRATION_START", "1970-01-01 0:00:00");
INSERT INTO `competition_settings` (`setting`, `value`) VALUES ("REGISTRATION_END", "1970-01-01 0:00:00");