

CREATE TABLE `accaudio` (
  `Accession` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Author` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Publisher` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `Call_Number` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Ye_ar` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `ISSN` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Status` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Location` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Coun_ter` double DEFAULT '0',
  `AccID` double DEFAULT '0',
  `ID` float NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `ACCSM_PK` (`ID`),
  UNIQUE KEY `ACCSM_ACCESSION_UNQ` (`Accession`),
  KEY `ACCSM_DUP_IDX` (`AccID`)
) ENGINE=MyISAM AUTO_INCREMENT=2441 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO accaudio VALUES("SR000001","Serial title","","publisehr","SER SER 123456 2017","","issn","On-shelf","location","0","0","2440");



CREATE TABLE `accessioning` (
  `Date_Received` datetime DEFAULT NULL,
  `Acc_number` varchar(35) CHARACTER SET latin1 DEFAULT NULL,
  `Title` varchar(400) CHARACTER SET latin1 DEFAULT NULL,
  `Creator` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Donor` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Donor_Address` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Restrictions` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Location` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Total_size` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `GDCM` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `SDM` varchar(600) CHARACTER SET latin1 DEFAULT NULL,
  `Arrangement` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `App_inc_dates` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Accessioned_by` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Da_te` datetime DEFAULT NULL,
  `Add_remarks` varchar(245) CHARACTER SET latin1 DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO accessioning VALUES("2014-06-12 00:00:00","xxx","xxx","xxx","xxx","xx","xxx","xxx","xxx","xx","xx","Chronologic","xxxx","xxx","2014-06-25 00:00:00","xxxxx","4");
INSERT INTO accessioning VALUES("2009-11-12 00:00:00","cccccc","The quick brown fox jump over the young lazy dog.","Sebastian, Romy","Allan Isaac","UP Campus","exclusive rights","Archives of Isaac","10 boxes","No defects of any kind","10 boxes","Chronologic","1962-2009","gally","2009-11-25 00:00:00","The quick brown fox jump over the young lazy dog.  The quick brown fox jump ove the young lazy dog.","2");
INSERT INTO accessioning VALUES("2010-10-27 00:00:00","12345","Sebastian family archives","Sebastian, Romeo","Sebastian, Felisa","UP Diliman Quezon City","no restriction","UP Archives","34 boxes","good condition","no defect of any kind","Chronologic","1962-2010","Gally Arambulo","2010-10-28 00:00:00","okay lang","3");
INSERT INTO accessioning VALUES("1991-01-28 00:00:00","1991 2","Cannery production and fishing boat photographs [graphic]. -- 1990.","Bill Irwin","Irwin, Bill","1931 West 74th Avenue, Vancouver, B.C., V6P 7P4, 272-8844","Exclusive","7 4 3 4","38 photographs.","Accession consists of images of cannery production line technology, fishing vessels and other cannery industry images.","38 photographs.","None","1960-1980","ras","2014-06-24 00:00:00","In good condition","5");
INSERT INTO accessioning VALUES("2014-06-13 00:00:00","xxx","xxxxxxxxx","xxx","xxx","xx","xx","xx","xxx","xx","xx","Numeric","xxx","xxxx","2014-06-25 00:00:00","xxxx","6");



CREATE TABLE `accfilm` (
  `Accession` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Author` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Publisher` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `Call_Number` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Ye_ar` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Type` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Status` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Location` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Coun_ter` smallint(6) DEFAULT '0',
  `AccID` int(11) DEFAULT '0',
  `ID` float NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `ACCSM_PK` (`ID`),
  UNIQUE KEY `ACCSM_ACCESSION_UNQ` (`Accession`),
  KEY `ACCSM_DUP_IDX` (`AccID`)
) ENGINE=MyISAM AUTO_INCREMENT=2423 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO accfilm VALUES("F1421","Voyage to the bottom of the sea","Keren Marie","TriStar","F 1234 2005","4/14/2007","Film","In","ESI","0","0","2422");



CREATE TABLE `accsm` (
  `Accession` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Author` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Publisher` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `Call_Number` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Ye_ar` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Type` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Status` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Location` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Coun_ter` double DEFAULT '0',
  `AccID` double DEFAULT '0',
  `id` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ACCSM_ACCESSION_UNQ` (`Accession`),
  KEY `ACCSM_DUP_IDX` (`AccID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO accsm VALUES("SV000053","Bakauan","creator","ESI","DVD VC 053 BAK","2010","videocassette","On-shelf","ESI","0","0","8");
INSERT INTO accsm VALUES("AR123456","Audio recording titlte","","Publisher","","Date","audio","On-shelf","Main Library","0","0","9");
INSERT INTO accsm VALUES("VR-123456","Video recording title","creator","publisher","VR VR 123456 2016","date","Video","On-shelf","HS Library","0","0","10");



CREATE TABLE `acctd` (
  `Accession` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Author` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Publisher` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `Call_Number` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Ye_ar` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Type` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Status` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Location` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Coun_ter` double DEFAULT '0',
  `AccID` double DEFAULT '0',
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ACCSM_ACCESSION_UNQ` (`Accession`),
  KEY `ACCSM_DUP_IDX` (`AccID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO acctd VALUES("TD000001","Thesaurus on Philippine literature","Sebastian, Romeo A.","University of the Philippines.  Institute of the Library Science","TD 123 S43 1991","1991","Special problem","On-shelf","College Library","0","0","1");
INSERT INTO acctd VALUES("TD110100","Thesaurus on Philippine environment","","","Z 695.1 E62 T43 2005 (COL)","Makati City: |b Bookmark, |c 2005.","","On-shelf","","0","0","2");



CREATE TABLE `accvideo` (
  `Accession` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Author` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Publisher` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `Call_Number` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Ye_ar` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Type` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Status` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Location` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Coun_ter` double DEFAULT '0',
  `AccID` double DEFAULT '0',
  `ID` float NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `ACCSM_PK` (`ID`),
  UNIQUE KEY `ACCSM_ACCESSION_UNQ` (`Accession`),
  KEY `ACCSM_DUP_IDX` (`AccID`)
) ENGINE=MyISAM AUTO_INCREMENT=2423 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO accvideo VALUES("V1412414","Adventure of Lam-Ang","Rono, Lito","Viva Films","ARC LAM ANG","2003","Video","In","Archive Center","0","0","2422");



CREATE TABLE `aclist` (
  `Accession` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Author` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Publisher` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `Call_Number` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ISBN` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Ye_ar` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Status` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Location` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Coun_ter` double DEFAULT '0',
  `AccID` double DEFAULT '0',
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ACLIST_UNQ_IDX` (`Accession`)
) ENGINE=MyISAM AUTO_INCREMENT=126 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO aclist VALUES("1104035291","Thesaurus on Philippine literature : an indexing language","Buena, Emiliana D.","FMS Press","REF 323 S45 2012","0711234560","2012","On-shelf","College Library","0","0","111");
INSERT INTO aclist VALUES("COL006011","Thesaurus on Philippine abaca : an indexing language","Rillo, Rowena A..","FMS Press","FIL GE 123 S45 2012","0711234560","2012","On-shelf","Main Library","0","0","112");
INSERT INTO aclist VALUES("COL006012","Thesaurus on Philippine abaca : an indexing language","Rillo, Rowena A..","FMS Press","FIL GE 123 S45 2012","0711234560","2012","On-shelf","Main Library","0","0","113");
INSERT INTO aclist VALUES("COL006013","Thesaurus on Philippine abaca : an indexing language","Rillo, Rowena A..","FMS Press","FIL GE 123 S45 2012","0711234560","2012","On-shelf","Main Library","0","0","114");
INSERT INTO aclist VALUES("GS 006014","Thesaurus on Philippine rice","Sebastian, Romeo A..","FMS Press","SCHL GE 123 S45 2012","0711234560","2012","On-shelf","KMCS LIBRARY","0","0","115");
INSERT INTO aclist VALUES("GS 006015","Thesaurus on Philippine rice","Sebastian, Romeo A..","FMS Press","SCHL GE 123 S45 2012","0711234560","2012","On-shelf","KMCS LIBRARY","0","0","116");
INSERT INTO aclist VALUES("GS 006016","Thesaurus on Philippine rice","Sebastian, Romeo A..","FMS Press","SCHL GE 123 S45 2012","0711234560","2012","On-shelf","KMCS LIBRARY","0","0","117");
INSERT INTO aclist VALUES("HS-006011","Thesaurus on Philippine culinary arts","Buenaluz, Emylene","KMCS Press","TRF GE 123 T12 S45 2017","0711234560","2017","On-shelf","KMCS LIBRARY","0","0","118");
INSERT INTO aclist VALUES("HS-006012","Thesaurus on Philippine culinary arts","Buenaluz, Emylene","KMCS Press","TRF GE 123 T12 S45 2017","0711234560","2017","On-shelf","KMCS LIBRARY","0","0","119");
INSERT INTO aclist VALUES("HS-006013","Thesaurus on Philippine culinary arts","Buenaluz, Emylene","KMCS Press","TRF GE 123 T12 S45 2017","0711234560","2017","On-shelf","KMCS LIBRARY","0","0","120");
INSERT INTO aclist VALUES("CL-006011","Thesaurus on Banking and Finance   :  an indexing language","","FMS Press","FIC 323 S45 2012","0711234560","2012","On-shelf","SSA LIBRARY","0","0","121");
INSERT INTO aclist VALUES("CL-006012","Thesaurus on Banking and Finance   :  an indexing language","","FMS Press","FIC 323 S45 2012","0711234560","2012","On-shelf","SSA LIBRARY","0","0","122");
INSERT INTO aclist VALUES("CL-006013","Thesaurus on Banking and Finance   :  an indexing language","","FMS Press","FIC 323 S45 2012","0711234560","2012","On-shelf","SSA LIBRARY","0","0","123");
INSERT INTO aclist VALUES("COL123456","Thesaurus on Philippine environment","Sebastian, Romeo A..","Bookmark","FIL GE 321 S45 2016","0711234560","2005","On-shelf","ESI Library - Filifiniana section","0","0","124");
INSERT INTO aclist VALUES("COLC123457","Thesaurus on Philippine environment","Sebastian, Romeo A..","Bookmark","FIL GE 321 S45 2016","0711234560","2005","On-shelf","ESI Library - Filifiniana section","0","0","125");



CREATE TABLE `acquisition` (
  `Title` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `Author` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Publisher` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Ye_ar` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `ISBN` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Quantity` smallint(6) DEFAULT NULL,
  `Unit_Price` double(10,2) DEFAULT '0.00',
  `Total_Price` double(10,2) DEFAULT '0.00',
  `Discount` double(2,2) DEFAULT '0.00',
  `Discount_amount` double(10,2) DEFAULT '0.00',
  `Net_Price` double(10,2) DEFAULT '0.00',
  `Recommended` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Dept` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `MType` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Mode` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Status` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Dealer` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `WhereIs` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Da_te` datetime DEFAULT NULL,
  `Remarks` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Edition` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Tagg` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO acquisition VALUES("Thesaurus on Banking and Finance : an indexing language"," ","FMS Press","2012","0711234560","1","0.00","0.00","0.10","0.00","1.50","Prof. Tan","Library","Book","Purchase","Acquired","Forefront","Bookfair","2014-08-30 00:00:00"," ","1st","Accounting; Finance","1");
INSERT INTO acquisition VALUES("Title","xxx","xx","xxx","xxx","1","0.00","0.00","0.00","0.00","0.00","xxx","Psychology (CAS)","Book","Purchase","acquired","xxx","ABAP","2015-09-19 00:00:00","xxx","xxx","","2");
INSERT INTO acquisition VALUES("xxx","xxx","xx","xxx","xxx","1","0.00","0.00","0.00","0.00","0.00","xxx","Psychology (CAS)","Book","Purchase","acquired","xxx","ABAP","2015-09-19 00:00:00","xxx","xxx","","3");
INSERT INTO acquisition VALUES("title","author","publisher","year","isbn","1","1.00","0.00","0.10","0.00","0.00","rec","Child Development and Education (CED)","Book","Purchase","acquired","source","MIBF","2015-10-17 00:00:00","remarks","edition","","4");
INSERT INTO acquisition VALUES("Thesaurus on Banking and Finance","Sebastian, Romeo","UP Press","2015","971-1424-444","1","100.00","0.00","0.00","0.10","0.00","Buena","Business Administration (CBEA)","Book","Purchase","acquired","Lina","Singapore","2015-10-31 00:00:00","No defect of any kind","1st edition","","6");
INSERT INTO acquisition VALUES("Title","author","publisher","taon","isbn","3","100.00","300.00","0.10","30.00","270.00","rec","Entrepreneurship (CBEA)","Book","Purchase","acquired","source","Singapore","2015-10-31 00:00:00","remarks","edition","","7");



CREATE TABLE `acquisition_request` (
  `Title` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `Author` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Publisher` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Ye_ar` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Edition` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Quantity` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `Unit_Price` varchar(25) CHARACTER SET latin1 DEFAULT '0',
  `Dealer` varchar(80) CHARACTER SET latin1 DEFAULT '0',
  `Recommended` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Dept` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Dept_head` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Mtype` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Date_requested` datetime DEFAULT NULL,
  `Date_ordered` datetime DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

INSERT INTO acquisition_request VALUES("Thesaurus on Philippine environment","Sebastian, Romeo A.","Bookmark","","1st","","","ESI","Buenaluz, Emy","Science (CAS)","Wood, Rosario","Book","2009-02-19 11:19:45","","43");
INSERT INTO acquisition_request VALUES("Biology Demystified","Layman, Dale","McGrawHill","","","","","","Brenda Lee","Science (CAS)","Rosario Wood","Book","2009-08-14 15:04:12","","44");
INSERT INTO acquisition_request VALUES("Business Plans Kit for Dummies","Steven Peterson, Peter Jaret, Barbara Schenck","Wiley Publishing","","","","","Fully Book","Leah Mendoza","Entrepreneurship (CBEA)","Mona Lee","Book","2009-08-27 10:33:56","","45");
INSERT INTO acquisition_request VALUES("E,ployee Research","Peter Goudge","Kogan Page Lt.","","","","","FullyBook","Leah Mendoza","Business Administration (CBEA)","Danilo Reyes","Book","2009-08-27 10:40:51","","46");
INSERT INTO acquisition_request VALUES("Thesaurus on Philippine Literature","Sebastian, Romeo A.","UP Press","2012","2nd","1","1000","CD Books","Emylene Buenaluz","Humanities/Forieng language (CAS)","galileo","book","2012-07-04 08:35:29","","47");
INSERT INTO acquisition_request VALUES("xxx","xxx","xxx","xxx","xx","xx","xx","xx","xx","Accountancy (CBEA)","xxx","xx","2012-07-04 10:12:37","","48");
INSERT INTO acquisition_request VALUES("Computer Arts","","Future Publishing Limited","","by subscription per year","13","£89.99","","Desiree Jeska M. Carrillo","Humanities/Forieng language (CAS)","Ms. Lynda Garcia","magazine","2012-07-20 11:38:40","","49");
INSERT INTO acquisition_request VALUES("title","author","publisher","publication","edition","1","100","dealer","Sebastian, Romeo A.","NSTP (CAS)","chair","book","2012-10-22 15:42:11","","50");
INSERT INTO acquisition_request VALUES("xxx","xxx","xxx","xx","xxx","1","100","xxx","xxxx","Accountancy (CBEA)","xxxx","book","2013-03-01 15:33:59","","51");



CREATE TABLE `aftv` (
  `Audio` int(11) DEFAULT '0',
  `Filmography` int(11) DEFAULT '0',
  `Thesis` int(11) DEFAULT '0',
  `Video` int(11) DEFAULT '0',
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO aftv VALUES("0","0","13","0","1");



CREATE TABLE `aftv_save` (
  `Audio` int(11) DEFAULT '0',
  `Filmography` int(11) DEFAULT '0',
  `Thesis` int(11) DEFAULT '0',
  `Video` int(11) DEFAULT '0',
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO aftv_save VALUES("0","0","7","0","1");



CREATE TABLE `archive_room_schedule` (
  `Room` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Date_reservation` datetime DEFAULT NULL,
  `Time_reservation` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ID_number` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Department` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `College` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Subject` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Professor` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Purpose` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Date_submitted` datetime DEFAULT NULL,
  `Remarks` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

INSERT INTO archive_room_schedule VALUES("AV Room A","2011-03-23 00:00:00","07:30-09:00","Sebastian, ROMEO A","700628","","","AC-102 PRINCIPLES OF ACCOUNTING II","Sebastian, ROMEO A","Conference","2011-03-23 00:00:00","","1");
INSERT INTO archive_room_schedule VALUES("AVR A","2013-02-27 00:00:00","09:00AM-10:30AM","seeee","","","","Civic welfare training service","Mr. Buensuceso","Conference","2013-02-27 21:10:40","","16");



CREATE TABLE `archives_books` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` varchar(16000) CHARACTER SET latin1 DEFAULT NULL,
  `Library` varchar(50) CHARACTER SET latin1 DEFAULT '0',
  `Author` varchar(150) CHARACTER SET latin1 DEFAULT '0',
  `Publisher` varchar(160) CHARACTER SET latin1 DEFAULT '0',
  `Ye_ar` varchar(50) CHARACTER SET latin1 DEFAULT '0',
  `Res` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Date_deleted` datetime DEFAULT NULL,
  `call_number` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `accession` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `bkID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`bkID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `archives_sm` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` varchar(16000) CHARACTER SET latin1 DEFAULT NULL,
  `Library` varchar(50) CHARACTER SET latin1 DEFAULT '0',
  `Author` varchar(150) CHARACTER SET latin1 DEFAULT '0',
  `Res` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Date_deleted` datetime DEFAULT NULL,
  `Publisher` varchar(180) CHARACTER SET latin1 DEFAULT NULL,
  `Ye_ar` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `call_number` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `accession` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `Type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`smID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `article_type` (
  `article_type` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO article_type VALUES("article","1");



CREATE TABLE `attendance` (
  `Name` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `ID_number` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Type` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Unit` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Date_Time_In` datetime DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO attendance VALUES("Sebastian, ROMEO","700628","Faculty & Personnel | Normal Setting (COL)","College","2009-08-12 16:53:30","4");
INSERT INTO attendance VALUES("Sebastian, ROMEO","700628","Faculty & Personnel | Normal Setting (COL)","College","2009-08-12 15:07:53","2");
INSERT INTO attendance VALUES("Galang, ANGELINA","700011","Faculty & Personnel | Normal Setting (COL)","College","2009-08-12 15:07:58","3");
INSERT INTO attendance VALUES("Saberola, JOY","700629","Faculty & Personnel | Normal Setting (CSC)","Child Study Center","2009-08-12 16:53:35","5");
INSERT INTO attendance VALUES("Sebastian, ROMEO","700628","Faculty & Personnel | Normal Setting (COL)","College","2009-08-13 08:10:49","6");
INSERT INTO attendance VALUES("Galang, ANGELINA","700011","Faculty & Personnel | Normal Setting (COL)","College","2009-08-13 08:11:00","7");



CREATE TABLE `attendance_save_stat` (
  `Seven` double DEFAULT '0',
  `Eight` double DEFAULT '0',
  `Nine` double DEFAULT '0',
  `Ten` double DEFAULT '0',
  `Eleven` double DEFAULT '0',
  `Twelve` double DEFAULT '0',
  `One` double DEFAULT '0',
  `Two` double DEFAULT '0',
  `Three` double DEFAULT '0',
  `Four` double DEFAULT '0',
  `Five` double DEFAULT '0',
  `Six` double DEFAULT '0',
  `Sevenpm` double DEFAULT '0',
  `Eightpm` double DEFAULT '0',
  `Ninepm` double DEFAULT '0',
  `Total` double DEFAULT '0',
  `Da_te` datetime DEFAULT NULL,
  `sixam` double DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO attendance_save_stat VALUES("72","141","152","180","210","195","217","128","96","27","2","0","0","0","0","1419","2014-05-12 14:40:27","0","1");
INSERT INTO attendance_save_stat VALUES("72","141","152","180","226","195","217","128","96","27","2","0","0","0","1","1437","2014-07-14 11:44:34","0","2");
INSERT INTO attendance_save_stat VALUES("0","0","0","1","1","0","0","0","0","0","0","0","3","4","1","10","2014-10-31 21:54:22","0","3");
INSERT INTO attendance_save_stat VALUES("0","0","0","1","1","0","0","0","0","0","0","0","3","4","1","10","2014-10-31 21:54:37","0","4");
INSERT INTO attendance_save_stat VALUES("0","0","0","1","1","0","0","0","0","0","0","0","3","4","1","10","2014-11-03 22:28:56","0","6");
INSERT INTO attendance_save_stat VALUES("0","0","0","1","1","0","0","0","0","0","0","0","3","4","1","10","2014-11-03 22:29:57","0","7");
INSERT INTO attendance_save_stat VALUES("0","0","0","1","1","1","1","0","0","0","0","1","6","8","1","20","2015-11-17 20:14:23","0","8");
INSERT INTO attendance_save_stat VALUES("0","0","1","1","1","1","1","0","0","0","0","1","6","5","1","18","2015-11-20 09:01:06","0","9");
INSERT INTO attendance_save_stat VALUES("0","0","0","31","0","0","0","0","0","0","0","0","0","0","0","31","2015-11-20 11:01:49","0","10");
INSERT INTO attendance_save_stat VALUES("0","0","0","0","0","0","0","0","0","8","8","13","5","1","9","44","2016-11-30 07:43:37","0","11");



CREATE TABLE `audio_inventory` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Author` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Call_Number` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Accession` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `IDate` datetime DEFAULT NULL,
  `Status` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Location` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO audio_inventory VALUES("Serial title","","SER SER 123456 2017","SR000001","2018-07-04 00:00:00","I-Loan","location","43");



CREATE TABLE `audioarchive` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` varchar(8000) CHARACTER SET latin1 DEFAULT NULL,
  `Copy` smallint(5) DEFAULT '1',
  `Avail` smallint(5) DEFAULT '1',
  `Out` smallint(5) DEFAULT '0',
  `audioID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`audioID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO audioarchive VALUES("Kundiman","<001>Kundiman<002>Tagalog folksong<003><004>Manrique, Rick<005>Ryan Cayabyab<006>Reyes, Donna Paz T.<007>Smokey Mountain<008>Philippine Philharmonic Orchestra<009>Orchestra<0010>DZMM<0011>Noli De Castro<0012>Karen Davila<0013>Filipino<0014><0015>AUDIO KUN 2007<0016><0017>1 hr 30 min<0018>ok<0019>Quezon City<0020>7/2/2007<0021>7/2/2007<0022>Star Records<0023>2007<0024><0025>Contract<0026>Love songs<0027>3rd floor<0028>UP Conservatory of Music<0029>A000001<0030>RAS<0031>Quick brown fox jump<0032><0033>xxx<0034>4/19/2008<0035>gally<0036>1<0037>1<0038>0","1","1","0","1");
INSERT INTO audioarchive VALUES("Harana 2005","<001>Harana 2005<002>Tagalog folksong<003><004>Maturan, Diomedes<005>Ryan Cayabyab<006>Reyes, Donna Paz T.<007>Smokey Mountain<008>Philippine Philharmonic Orchestra<009>Orchestra<0010>DZMM<0011>Noli De Castro<0012>Karen Davila<0013>Filipino<0014><0015>CD HAR 2005<0016><0017>1 hr 30 min<0018>ok<0019>Quezon City<0020>7/2/2007<0021>7/2/2007<0022>Star Records<0023>2007<0024><0025>Contract<0026>Love songs<0027>3rd floor<0028>UP Conservatory of Music<0029>A000002<0030>RAS<0031>Quick brown fox jump<0032>quick brown fox jump over the young lazy dog.<0033>xxx<0034>4/30/2008<0035>emy<0036>1<0037>1<0038>0","1","1","0","2");



CREATE TABLE `authorfile` (
  `Author` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  KEY `AUTHORFILE_DUP_IDX` (`Author`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO authorfile VALUES("Sebastian, Romeo A. / author","1");
INSERT INTO authorfile VALUES("Tan, Andrew F. /co-author","2");
INSERT INTO authorfile VALUES("Ang, Francis / co-author","3");
INSERT INTO authorfile VALUES("Knowledge Master Consultancy Services","4");
INSERT INTO authorfile VALUES("Porter, Kalan","5");
INSERT INTO authorfile VALUES("singer; Sokyrka, Theresa","7");
INSERT INTO authorfile VALUES("singer","8");
INSERT INTO authorfile VALUES("Morgan, Glen","9");
INSERT INTO authorfile VALUES("screenwriter","10");
INSERT INTO authorfile VALUES("Cassidy, Katie","11");
INSERT INTO authorfile VALUES("Sebastian, Romeo A..","15");
INSERT INTO authorfile VALUES("Marcos, Michelle Y.","16");
INSERT INTO authorfile VALUES("Tan, Andrew F.","17");
INSERT INTO authorfile VALUES("Ang, Francis","18");
INSERT INTO authorfile VALUES("Serrana, Milagros (ed.)","19");
INSERT INTO authorfile VALUES("Wood, Inday (ed.)","20");
INSERT INTO authorfile VALUES("Facilities Management College","21");
INSERT INTO authorfile VALUES("Adanza, Estela G.","22");
INSERT INTO authorfile VALUES("Sebastian, Romeo A.","23");
INSERT INTO authorfile VALUES("Buenueluz, Emy","24");
INSERT INTO authorfile VALUES("Wood, Rosario","25");
INSERT INTO authorfile VALUES("Serrana, Milagros","26");
INSERT INTO authorfile VALUES("Environmental Studies Institute","27");
INSERT INTO authorfile VALUES("Romulo, B..","28");
INSERT INTO authorfile VALUES("Marcos, Michelle Y. / author","29");
INSERT INTO authorfile VALUES("Tan, Andrew F. / author","30");
INSERT INTO authorfile VALUES("Ang, Francis / author","31");
INSERT INTO authorfile VALUES("Omolou, C. J.","32");
INSERT INTO authorfile VALUES("other creator","37");
INSERT INTO authorfile VALUES("creator","38");
INSERT INTO authorfile VALUES("Buenaluz, Emylene","39");
INSERT INTO authorfile VALUES("Knowledge Management Consultancy Services","40");
INSERT INTO authorfile VALUES("Rillo, Rowena A..","41");
INSERT INTO authorfile VALUES("Buena, Emiliana D.","42");



CREATE TABLE `authority` (
  `Subject_heading` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `authority_unq_idx` (`Subject_heading`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO authority VALUES("Thesauri","1");
INSERT INTO authority VALUES("Environmental education -- Dictionary","2");
INSERT INTO authority VALUES("Philippines -- Environmental aspecs","3");
INSERT INTO authority VALUES("personal","5");
INSERT INTO authority VALUES("geographical","7");
INSERT INTO authority VALUES("audio recording","8");
INSERT INTO authority VALUES("Facilities Management College","13");
INSERT INTO authority VALUES("RESEARCH","15");
INSERT INTO authority VALUES("Environmetal education","16");
INSERT INTO authority VALUES("Environmental sciences","17");
INSERT INTO authority VALUES("Environmental Studies Institute","19");
INSERT INTO authority VALUES("Philippines -- Envornmental conditions","20");
INSERT INTO authority VALUES("Biography","21");
INSERT INTO authority VALUES("Mangroves","22");
INSERT INTO authority VALUES("Mangroves reforestation","23");
INSERT INTO authority VALUES("Secret -- Fiction","26");
INSERT INTO authority VALUES("Compulsive--Fiction","27");
INSERT INTO authority VALUES("Mothers and daughters--Fiction","28");
INSERT INTO authority VALUES("fiction","29");
INSERT INTO authority VALUES("science","30");
INSERT INTO authority VALUES("Environmental Science -- Dictionary","31");
INSERT INTO authority VALUES("Galang, Angelina P. -- Environmentalist","32");
INSERT INTO authority VALUES("Environmental Studies Insitute -- History","33");
INSERT INTO authority VALUES("Philippines -- Environmental conditions
","34");
INSERT INTO authority VALUES("","35");
INSERT INTO authority VALUES("Galang, Angelina P.","36");
INSERT INTO authority VALUES("Philippines -- Environmental aspecgs","37");
INSERT INTO authority VALUES("Culinary arts -- Dictionary","38");
INSERT INTO authority VALUES("KMCS","39");
INSERT INTO authority VALUES("Philippines -- Environmental conditions","40");
INSERT INTO authority VALUES("corporate","41");
INSERT INTO authority VALUES("topic","42");



CREATE TABLE `bookarticle` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` varchar(8000) CHARACTER SET latin1 DEFAULT NULL,
  `baid` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`baid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO bookarticle VALUES("China, India, and the new world order","<001>China, India, and the new world order<002>Flavin, Christopher; Gardner, Gary<003>State of the World 2006<004>Starke, Linda<005>New York<006>W.W. Norton and Company<007>2006<008>3-23<009>English<0010>HC 59 S73 2006<0011>ESI<0012><0013>China; Banglore (India); Economic development; Population; Human development; Oil imports -- China; Coals -- China; Carbon dioxide; Grain consumption; Land degradation; Carrying capacity; Ecological footprints<0014>","1");
INSERT INTO bookarticle VALUES("xxxx","<001>xxxx<002><003><004><005><006><007><008><009><0010><0011><0012><0013><0014>","2");



CREATE TABLE `books` (
  `title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `maintext` text CHARACTER SET latin1,
  `fil` smallint(5) NOT NULL DEFAULT '0',
  `ref` smallint(5) NOT NULL DEFAULT '0',
  `bio` smallint(5) NOT NULL DEFAULT '0',
  `fic` smallint(5) NOT NULL DEFAULT '0',
  `res` smallint(5) NOT NULL DEFAULT '0',
  `copy` smallint(5) NOT NULL DEFAULT '1',
  `inn` smallint(5) NOT NULL DEFAULT '1',
  `t_out` smallint(5) NOT NULL DEFAULT '0',
  `t_timesout` smallint(5) NOT NULL DEFAULT '0',
  `images` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tm` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gc` smallint(5) NOT NULL DEFAULT '0',
  `tr` smallint(5) NOT NULL DEFAULT '0',
  `easy` smallint(5) NOT NULL DEFAULT '0',
  `circ` smallint(5) NOT NULL DEFAULT '0',
  `fr` smallint(5) NOT NULL DEFAULT '0',
  `sm` smallint(5) NOT NULL DEFAULT '0',
  `entered_by` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `updated_by` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `schl` smallint(5) NOT NULL DEFAULT '0',
  FULLTEXT KEY `fulltext` (`maintext`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO books VALUES("Thesaurus on Philippine literature : an indexing language","<001>Thesaurus on Philippine literature : an indexing language<002>compiled by Romeo A. Sebastian ... [et al.]; edited by Milagros Serrana and Rosario Wood<003>tesoro para sa kalikasan<004>Buena, Emiliana D.<005><006>Marcos, Michelle Y. / author; Tan, Andrew F. / author; Ang, Francis / author<007>Serrana, Milagros / editor; Wood, Inday / editor<008>Knowledge Master Consultancy Services<009>Sucat, Munntinlupa City<0010>FMS Press<0011>2012<0012>First edition<0013>xii, 120 pages<0014>coloured illustrations<0015>23 cm.<0016>with DVD<0017>Thesauri series ; 2<0018>Includes bibliography<0019>0711234560; 006013<0020>Thesauri; Environmental education$xDictionary<0021><0022><0023>Philippines$xEnvironmental aspecs<0024>REF<0025>323 S45 2012<0026>1104035291<0027>English<0028>College Library<0029><0030>1<0031>2<0032>1<0033><0034><0035><0036>37<0037><0038><0039>text<0040>unmediated<0041>volume<0042>","0","1","0","0","0","1","2","1","37","","book","0","0","0","0","0","0","romeo","2014-08-13 22:55:49","rizal","2018-07-04 21:53:06","0");
INSERT INTO books VALUES("Title","<001>Title<002>Creator<003>Source<004>10/30/2014<005>reference code<006>description<007>Brochure<008>location<009>copy<0010>electronic access<0011>keywords<0012>abstract","0","0","0","0","0","1","1","0","0","","vf","0","0","0","0","0","0","rizal","2014-10-29 19:22:17","rizal","2014-11-02 20:01:30","0");
INSERT INTO books VALUES("Bakauan","<001>Bakauan<002>Sebastian, Romeo A.<003>parallel<004>creator<005><006>other creator<007>contributors<008>Environmental Studies Institute<009>Quezon City<0010>ESI<0011>2010<0012>edition<0013>tera<0014>23 min ; col ; VHS-NTSC<0015>supp<0016>series<0017>index; bibliogaphy; other notes<0018>isbn<0019>videocassette<0020>Mangroves; Mangroves reforestation<0021>personal<0022>corporate<0023>geographical<0024>DVD<0025>VC 053 BAK<0026>SV000053<0027>Filipino<0028>ESI<0029>electronic<0030>1<0031>0<0032>1<0033>content<0034>abstract<0035>review<0036>1<0037><0038>url<0039>three-dimensional moving image<0040>video<0041>","1","0","0","0","0","1","0","1","2","","av","0","0","0","0","0","0","rizal","2014-10-29 19:46:27","rizal","2017-08-03 21:22:11","0");
INSERT INTO books VALUES("Information empowers","<001>Information empowers<002>Sebastian, Romeo A.<003>Peoples Tonight<004>1<005>1<006>March 19, 2015<007>3-5<008>Article<009>English<0010>Periodical section<0011>electronic access<0012>subject<0013>abstract","0","0","0","0","0","1","1","0","0","","pr","0","0","0","0","0","0","","","rizal","2015-10-27 21:31:43","0");
INSERT INTO books VALUES("Serial title","<001>Serial title<002>place<003>publisehr<004>frequency<005>latest<006>Includes bibliographic references<007>holdings<008>topic<009>SER<0010>SER 123456 2017<0011>issn<0012>location<0013>Discipline<0014>SR000001<0015>extent<0016>corporate<0017>access","0","0","0","0","0","1","0","1","2","","se","0","0","0","0","0","0","rizal","2017-06-08 05:18:55","rizal","2017-09-03 22:20:23","0");
INSERT INTO books VALUES("xxxx","<001>xxxx<002>xxxx<003>xxx<004>x<005>xxx<006>xx<007>xxx<008>Short story<009>xxx<0010>xxxxxx<0011>xxxxx<0012>xx<0013>xx","0","0","0","0","0","1","1","0","0","","pr","0","0","0","0","0","0","","","","","0");
INSERT INTO books VALUES("xxxx","<001>xxxx<002>xxxx<003>xxx<004>x<005>xxx<006>xx<007>xxx<008>Short story<009>xxx<0010>xxxxxx<0011>xxxxx<0012>xx<0013>xx","0","0","0","0","0","1","1","0","0","","pr","0","0","0","0","0","0","","","","","0");
INSERT INTO books VALUES("Thesaurus on Philippine abaca : an indexing language","<001>Thesaurus on Philippine abaca : an indexing language<002>by Romeo A. Sebastian; edited by Milagros Serrana and Rosario Wood<003>tesoro para sa kalikasan, tesoro para sa kalikasan<004>Rillo, Rowena A..<005><006>Marcos, Michelle Y.; Tan, Andrew F.; Ang, Francis; Serrana, Milagros (ed.); Wood, Inday (ed.)<007>Serrana, Milagros / editor; Wood, Rosario /editor<008>Facilities Management College<009>Sucat, Munntinlupa City<0010>FMS Press<0011>2012<0012>1st<0013>xii, 120 p.:   ill, col,   23 cm; |d with DVD<0014><0015><0016><0017>Thesauri series ; 2<0018>Includes bibliography<0019>0711234560<0020>Thesauri; Environmental education -- Dictionary; Environmental Science -- Dictionary<0021>Galang, Angelina P. -- Environmentalist<0022>Environmental Studies Insitute -- History<0023>Philippines -- Environmental conditions<0024>FIL<0025>GE 123 S45 2012<0026>COL006011; COL006012; COL006013<0027>English<0028>Main Library<0029>D:/Library of the Future.wmv<0030>1<0031>1<0032>266<0033><0034><0035><0036>162<0037><0038>http://www.mastersknowledge.weebly.com<0039>text<0040>unmediated<0041>volume<0042>","1","0","0","0","0","1","0","267","167","","book","0","0","0","0","0","0","rizal","2014-10-29 19:54:33","rizal","2017-06-09 04:13:58","0");
INSERT INTO books VALUES("Thesaurus on Philippine literature","<001>Thesaurus on Philippine literature<002>Sebastian, Romeo A.<003>University of the Philippines.  Institute of the Library Science<004>Master of Library Science<005>1991<006>150 pages<007>TD 123 S43 1991<008>TD000001<009>English<0010>College Library<0011><0012>Thesauri; Philippine literature -- Dictionary<0013>The quick brown fox jump over the young lazy dog.<0014>1<0015>0<0016>1<0017>Special problem<0018>4<0019><0020><0021>","0","0","0","0","0","1","0","1","4","","td","0","0","0","0","0","0","rizal","2015-06-24 22:02:57","rizal","2017-09-07 21:35:01","0");
INSERT INTO books VALUES("Information empowers!","<001>Information empowers!<002>Sebastian, Romeo A.<003>Informationn seeking behavior and analysis<004>Buenaluz, Emylene / editor<005>Quezon City<006>UP Press<007>2017<008>15-19<009>Chinese<0010>Z 123 S24 2017<0011>Filipiniana section<0012>http://mastersknowledge.weebly.com<0013>Enformation seeking behavior; Information analysis<0014>The quick bronwo fox jump over the young lazy dog.","0","0","0","0","0","1","1","0","0","","ba","0","0","0","0","0","0","rizal","2017-03-03 00:11:46","rizal","2017-09-07 21:39:18","0");
INSERT INTO books VALUES("Thesaurus on Philippine rice","<001>Thesaurus on Philippine rice<002>Romeo A. Sebastian.<003>tesoro para sa kalikasan<004>Sebastian, Romeo A..<005><006><007><008>Facilities Management College<009>Sucat, Munntinlupa City<0010>FMS Press<0011>2012<0012>1st<0013>xii, 120 p.:   ill, col,   23 cm; |d with DVD<0014><0015><0016><0017>Thesauri series ; 2<0018>Includes bibliography<0019>0711234560<0020>Thesauri; Environmental education$xDictionary<0021>; Galang, Angelina P.<0022>; Facilities Management College<0023>Philippines$xEnvironmental aspecgs<0024>SCHL<0025>GE 123 S45 2012<0026>GS 006014; GS 006015; GS 006016<0027>English<0028>KMCS LIBRARY<0029><0030>3<0031>2<0032>1<0033><0034><0035><0036>4<0037><0038><0039><0040><0041><0042>","0","1","0","0","0","3","2","1","12","","book","0","0","0","0","0","0","rizal","2017-06-08 04:37:02","rizal","2017-09-03 22:11:55","1");
INSERT INTO books VALUES("Thesaurus on Philippine culinary arts","<001>Thesaurus on Philippine culinary arts<002>Emylene Buenaluz<003>tesoro para sa kalikasan<004>Buenaluz, Emylene<005><006><007><008>Knowledge Management Consultancy Services<009>Quezon City<0010>KMCS Press<0011>2017<0012>First edition<0013>150 pages<0014><0015><0016><0017>Thesauri series ; 2<0018>Includes bibliography<0019>0711234560<0020>Thesauri; Culinary arts -- Dictionary<0021><0022><0023>KMCS<0024>TRF<0025>GE 123 T12 S45 2017<0026>HS-006011; HS-006012; HS-006013<0027>English<0028>KMCS LIBRARY<0029><0030>3<0031>3<0032>0<0033><0034><0035><0036>0<0037><0038><0039>text<0040>unmediated<0041>volume<0042>","0","0","0","0","0","3","5","-2","8","","book","0","0","0","0","0","0","rizal","2017-06-08 04:44:55","rizal","2017-09-03 21:37:00","0");
INSERT INTO books VALUES("Video recording title","<001>Video recording title<002><003><004><005><006><007>place<008>publisher<009>date<0010><0011><0012><0013><0014><0015><0016><0017><0018><0019><0020><0021><0022><0023><0024><0025><0026><0027><0028><0029><0030><0031><0032><0033><0034><0035><0036><0037><0038><0039><0040><0041><0042>creator<0043><0044><0045><0046><0047><0048><0049><0050><0051><0052><0053><0054><0055><0056><0057><0058>VR<0059><0060>VR 123456 2016<0061>VR-123456<0062>HS Library<0063>Circulation<0064>1<0065>1<0066>0<0067>0","0","0","0","0","0","1","0","1","3","","video","0","0","0","0","0","0","rizal","2016-11-30 07:18:37","rizal","2017-09-03 22:22:26","0");
INSERT INTO books VALUES("xxxx","<001>xxxx<002><003><004><005><006><007><008><009><0010><0011><0012><0013><0014>","0","0","0","0","0","1","1","0","0","","","0","0","0","0","0","0","","","","","0");
INSERT INTO books VALUES("title","<001>title<002>creator<003>publisher<004>date<005>identifier<006>description<007>source<008>JPEG<009>language<0010>contributor<0011>electronic access<0012>relation<0013>rights<0014>coverage<0015>subjects","0","0","0","0","0","1","1","0","0","","er","0","0","0","0","0","0","","","","","0");
INSERT INTO books VALUES("title","<001>title<002>creator<003>publisher<004>date<005>identifier<006>description<007>source<008>JPEG<009>language<0010>contributor<0011>electronic access<0012>relation<0013>rights<0014>coverage<0015>subjects","0","0","0","0","0","1","1","0","0","","er","0","0","0","0","0","0","","","","","0");
INSERT INTO books VALUES("title","<001>title<002>creator<003>source<004>date<005>ref<006>description<007>Forms<008>locat<009>copy<0010>electronic<0011>keywords<0012>abstract","0","0","0","0","0","1","1","0","0","","vf","0","0","0","0","0","0","","","","","0");
INSERT INTO books VALUES("title","<001>title<002>other title information<003>parallel<004>variant title<005>statement<006>edition<007>place<008>publisher<009>date of pub<0010>place of dis<0011>distri name<0012>copyright date<0013>mode of issuance<0014>identifier<0015><0016><0017><0018><0019><0020><0021><0022><0023><0024><0025><0026><0027><0028><0029><0030><0031><0032><0033><0034><0035><0036><0037><0038><0039><0040><0041><0042><0043><0044><0045><0046><0047>,<0048><0049><0050><0051>1<0052>1<0053>0<0054>0","0","0","0","0","0","1","1","0","0","","audio","0","0","0","0","0","0","rizal","2015-09-27 21:14:51","rizal","2015-10-27 21:25:56","0");
INSERT INTO books VALUES("title","<001>title<002>other title information<003><004><005><006><007><008><009><0010><0011><0012><0013><0014><0015><0016><0017><0018><0019><0020><0021><0022><0023><0024><0025><0026><0027><0028><0029><0030><0031><0032><0033><0034><0035><0036><0037><0038><0039><0040><0041><0042><0043><0044><0045><0046><0047>,<0048><0049><0050><0051>1<0052>1<0053>0<0054>0","0","0","0","0","0","1","1","0","0","","audio","0","0","0","0","0","0","rizal","2015-09-27 21:57:14","rizal","2015-09-27 21:57:14","0");
INSERT INTO books VALUES("Audio recording titlte","<001>Audio recording titlte<002>other title information<003><004><005><006><007>Place<008>Publisher<009>Date<0010><0011><0012><0013><0014><0015>Unmediated<0016>Volume<0017><0018><0019><0020><0021><0022><0023><0024>Text<0025><0026>summary<0027><0028><0029><0030><0031><0032><0033><0034><0035><0036><0037><0038><0039><0040><0041><0042><0043><0044><0045>BIO<0046><0047>call number, call number<0048>AR123456<0049>Main Library<0050>Filipiniana<0051>1<0052>1<0053>0<0054>0","0","0","0","0","0","1","1","0","2","","audio","0","0","0","0","0","0","rizal","2015-09-27 22:15:01","rizal","2017-09-03 22:17:50","0");
INSERT INTO books VALUES("Recovery from the Indian Ocean tsunami","<001>Recovery from the Indian Ocean tsunami<002>a ten-year journey<003><004><005><006>Shaw, Rajib,|eeditor.<007><008>Ohio Library and Information Network.<009><0010><0011><0012><0013><0014>1 online resource (xv, 503 pages) : 143 illustrations (106 color).<0015><0016><0017><0018>9784431551164<0019>online resource cr|2rdacarrier., online resource cr|2rdacarrier.<0020>Indian Ocean Tsunami, 2004.; Tsunami relief.<0021><0022><0023><0024><0025>HV 636 2004 .A78<0026><0027><0028><0029>SpringerLink|uhttp://proxy.ohiolink.edu:9099/login?url=http://dx.doi.org/10.1007/978-4-431-55117-1|zConnect to resource (off-campus)<0030>1<0031>1<0032>0<0033>During the past 10 years following the 2004 Indian Ocean Tsunami, invaluable lessons have been learned and great changes have been observed. Immediately after the disaster, the second World Conference on Disaster Reduction was held in Kobe, Japan, and formulated the Hyogo Framework for Action (HFA: 2005?2015). HFA provided a platform and framework for changes and innovations, many of which were part of the recovery programs in the different countries affected by the 2004 disaster. This book is a modest attempt to review the lessons learned through the recovery process in the affected region. The book has 31 chapters, drawing lessons from four countries: India, Indonesia, Sri Lanka, and Thailand. There are five sections: Overview (10 chapters), Indonesia (8 chapters), India (6 chapters), Sri Lanka (5 chapters), and Thailand (2 chapters). The primary target groups for this book are students and researchers in the fields of disaster risk reduction, environment, and development. The book provides them with a good idea of the current research trends and lessons over the past decade of recovery initiatives. Another target group comprises practitioners and policy makers, who will be able to apply the knowledge collected here to establishing policy and making decisions.<0034><0035><0036>0<0037><0038><0039>text txt|2rdacontent.<0040>computer c|2rdamedia.<0041>","0","0","0","0","0","1","1","0","0","","av","0","0","0","0","0","0","rizal","2015-11-02 08:33:03","rizal","2017-02-28 21:36:03","0");
INSERT INTO books VALUES("Thesaurus on Philippine environment","<001>Thesaurus on Philippine environment<002>state<003>parallel<004>main crator<005>prefered<006>Sebastian, Romeo A.; Wood, Rosario; Serrana, Milagros<007>contributors<008>corporate<009>Makati City<0010>Bookmark<0011>2005<0012>edition<0013>tera<0014>163 p. ; 23 cm,<0015>supp<0016>series<0017>Includes bibliographic references<0018>971569490X<0019>, film cassette<0020>Environmental science$xPhilippines; Thesauri$xEnvironmental aspects<0021>personal<0022>corporate<0023>geographical<0024>DVD<0025>/ Z 695.1 E62 T43 2005 (COL)<0026>1101058968<0027>English<0028>Filipiniana Reference<0029>electronic<0030>1<0031>1<0032>0<0033>content<0034>abstract<0035>review<0036>0<0037><0038>url<0039>cartographic tactile three-dimensional form<0040>stereographic<0041>","0","0","0","0","0","1","1","0","0","","av","0","0","0","0","0","0","rizal","2015-10-31 10:58:23","rizal","2015-10-31 10:58:23","0");
INSERT INTO books VALUES("Recovery from the Indian Ocean tsunami","<001>Recovery from the Indian Ocean tsunami<002>a ten-year journey<003><004><005><006>Shaw, Rajib,|eeditor.<007><008>Ohio Library and Information Network.<009><0010><0011><0012><0013><0014>1 online resource (xv, 503 pages) : 143 illustrations (106 color).<0015><0016><0017><0018>9784431551164<0019>online resource cr|2rdacarrier., online resource<0020>Indian Ocean Tsunami, 2004.; Tsunami relief.<0021><0022><0023><0024><0025>HV636 2004.A78 / 363.34/94091824<0026><0027><0028><0029>SpringerLink|uhttp://proxy.ohiolink.edu:9099/login?url=http://dx.doi.org/10.1007/978-4-431-55117-1|zConnect to resource (off-campus)<0030>1<0031>1<0032>0<0033>During the past 10 years following the 2004 Indian Ocean Tsunami, invaluable lessons have been learned and great changes have been observed. Immediately after the disaster, the second World Conference on Disaster Reduction was held in Kobe, Japan, and formulated the Hyogo Framework for Action (HFA: 2005?2015). HFA provided a platform and framework for changes and innovations, many of which were part of the recovery programs in the different countries affected by the 2004 disaster. This book is a modest attempt to review the lessons learned through the recovery process in the affected region. The book has 31 chapters, drawing lessons from four countries: India, Indonesia, Sri Lanka, and Thailand. There are five sections: Overview (10 chapters), Indonesia (8 chapters), India (6 chapters), Sri Lanka (5 chapters), and Thailand (2 chapters). The primary target groups for this book are students and researchers in the fields of disaster risk reduction, environment, and development. The book provides them with a good idea of the current research trends and lessons over the past decade of recovery initiatives. Another target group comprises practitioners and policy makers, who will be able to apply the knowledge collected here to establishing policy and making decisions.<0034><0035><0036>0<0037><0038><0039>text<0040>computer<0041>","0","0","0","0","0","1","1","0","0","","av","0","0","0","0","0","0","rizal","2015-11-02 08:53:21","rizal","2015-11-02 08:53:21","0");
INSERT INTO books VALUES("Thesaurus on Philippine environment","<001>Thesaurus on Philippine environment<002><003><004><005><006>Makati City: |b Bookmark, |c 2005.<007>163 p. ; 23 cm,<008>Article<009>English<0010><0011><0012><0013>","0","0","0","0","0","1","1","0","0","","pr","0","0","0","0","0","0","","","","","0");
INSERT INTO books VALUES("Thesaurus on Philippine environment","<001>Thesaurus on Philippine environment<002><003><004><005>Makati City: |b Bookmark, |c 2005.<006>163 p. ; 23 cm,<007>Z 695.1 E62 T43 2005 (COL)<008>TD110100<009>English<0010><0011><0012>Environmental science$xPhilippines; Thesauri|xEnvironmental aspects<0013><0014>1<0015>1<0016>0<0017><0018>0<0019><0020><0021>","0","0","0","0","0","1","0","1","9","","td","0","0","0","0","0","0","","","rizal","2017-09-03 22:14:07","0");
INSERT INTO books VALUES("Thesaurus on Banking and Finance   :  an indexing language","<001>Thesaurus on Banking and Finance   :  an indexing language<002>compiled by Romeo A. Sebastian ... [et al.]; edited by Milagros Serrana and Rosario Wood<003>tesoro para sa kalikasan<004><005><006>Sebastian, Romeo A.; Marcos, Michelle Y.; Tan, Andrew F.; Ang, Francis; Serrana, Milagros (ed.); Wood, Inday (ed.)<007><008>Knowledge Master Consultancy Services<009>Sucat, Munntinlupa City<0010>FMS Press<0011>2012<0012>1st<0013>xii, 120 p.:   ill, col,   23 cm; |d with DVD<0014><0015><0016><0017>Thesauri series ; 2<0018>Includes bibliography<0019>0711234560<0020>Thesauri; Environmental education$xDictionary<0021><0022><0023>Philippines$xEnvironmental aspecs<0024>FIC<0025>323 S45 2012<0026>CL-006011; CL-006012; CL-006013<0027>English<0028>SSA LIBRARY<0029>D:AAA_USTInfoTechIvideoLibrary of the Future.wmv<0030>3<0031>3<0032>0<0033><0034><0035><0036>17<0037><0038><0039><0040><0041><0042>","0","0","0","1","0","3","3","0","21","","book","0","1","0","0","0","0","rizal","2016-01-28 20:06:43","rizal","2017-09-03 22:08:17","0");
INSERT INTO books VALUES("Thesaurus on Philippine environment","<001>Thesaurus on Philippine environment<002>an indexing language<003>tesoro para sa kalikasan<004>Sebastian, Romeo A..<005><006><007>Serana, Milagros / editor; Wood, Rosario / editior<008>Environmental Studies Institute<009>Sucat, Munntinlupa City<0010>Bookmark<0011>2005<0012>1st<0013>xii, 120 p.:   ill, col,   23 cm; |d with DVD<0014>colored illustrations<0015>23 cm.<0016>with DVD<0017>Thesauri series ; 2<0018>Includes bibliography; 006013<0019>0711234560<0020>Thesauri; Environmental education$xDictionary; Environmental Science$xDictionary<0021>Galang, Angelina P.$xEnvironmentalist<0022>Environmental Studies Insitute$xHistory<0023>Philippines$xEnvironmental conditions<0024>FIL<0025>GE 321 S45 2016<0026>COL123456; COLC123457<0027>English<0028>ESI Library - Filifiniana section<0029><0030>1<0031>1<0032>0<0033>Content notes<0034>abstract<0035>review<0036>0<0037><0038>http://www.mastersknowledge.weebly.com<0039>text<0040>unmediated<0041>volume<0042>","1","1","0","0","0","1","1","0","0","","book","1","0","0","0","0","0","rizal","2016-10-29 23:28:55","rizal","2017-09-03 21:44:09","0");
INSERT INTO books VALUES("literature index title","<001>literature index title<002>creator<003>title of book<004>contributors<005>place<006>publisher<007>date<008>pages<009>language<0010>call number<0011>location<0012>./bafiles/faceted.pdf<0013>status<0014>abstract","0","0","0","0","0","1","1","0","0","","ba","0","0","0","0","0","0","rizal","2017-02-20 22:13:14","rizal","2017-03-03 00:11:02","0");
INSERT INTO books VALUES("title","<001>title<002>creator<003>publisher<004>date<005>identifier<006>description<007>source<008>PDF<009>language<0010>contributor<0011>D:/edrom/erfiles/StMarysStoNino.pdf<0012>relation<0013>righs<0014>coverage<0015>subject","0","0","0","0","0","1","1","0","0","","el","0","0","0","0","0","0","rizal","2017-02-18 22:52:38","rizal","2017-02-18 23:17:52","0");
INSERT INTO books VALUES("article title","<001>article title<002>creator<003>periodical title<004>volume<005>issue<006>date<007>pages<008>Essay<009>language<0010>location<0011>./prfiles/29122010.jpg<0012>keyword<0013>abstract","0","0","0","0","0","1","1","0","0","","pr","0","0","0","0","0","0","RIZAL","2017-02-20 21:44:07","RIZAL","2017-02-20 21:49:43","0");
INSERT INTO books VALUES("article title","<001>article title<002>creator<003>periodical title<004>volume<005>issue<006>date<007>pages<008>Essay<009>language<0010>location<0011>./prfiles/29122010.jpg<0012>keyword<0013>abstract","0","0","0","0","0","1","1","0","0","","pr","0","0","0","0","0","0","RIZAL","2017-02-20 21:45:06","RIZAL","2017-02-20 21:45:06","0");
INSERT INTO books VALUES("literature index title","<001>literature index title<002>creator<003>title of book<004>contributors<005>place<006>publisher<007>date<008>pages<009>language<0010>call number<0011>location<0012>./bafiles/<0013>status<0014>abstract","0","0","0","0","0","1","1","0","0","","ba","0","0","0","0","0","0","rizal","2017-02-20 22:21:21","rizal","2017-02-20 22:21:21","0");
INSERT INTO books VALUES("xxxxx","<001>xxxxx<002><003><004><005><006><007><008><009><0010><0011><0012><0013><0014><0015><0016><0017><0018><0019><0020><0021><0022><0023><0024>REF<0025><0026><0027>in English<0028>Grade School Library<0029><0030>1<0031>1<0032>0<0033><0034><0035><0036>0<0037><0038><0039><0040><0041><0042>","0","0","0","0","0","1","1","0","0","","book","0","0","0","0","0","0","rizal","2018-07-05 23:04:36","rizal","2018-07-05 23:04:36","0");



CREATE TABLE `borrower` (
  `ID_Number` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Accession_number` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Date_borrowed` datetime DEFAULT NULL,
  `Due_date` datetime DEFAULT NULL,
  `Date_returned` datetime DEFAULT NULL,
  `Overdue` double DEFAULT '0',
  `Type` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Library` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Status` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `charger` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=381 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO borrower VALUES("1234567890","TD110100","Thesaurus on Philippine environment","2017-09-07 21:39:54","2017-09-08 18:00:00","","0","Thesis","","","rizal","374");
INSERT INTO borrower VALUES("1234567890","SV000053","Bakauan","2017-09-03 22:23:26","2017-09-14 18:00:00","","0","AV","ESI","","rizal","356");
INSERT INTO borrower VALUES("1234567890","TD000001","Thesaurus on Philippine literature","2017-09-03 22:15:03","2017-09-19 18:00:00","","0","Thesis","College Library","","rizal","347");
INSERT INTO borrower VALUES("1234567890","GS 006014","Thesaurus on Philippine rice","2018-06-30 21:26:35","2018-07-07 18:00:00","","0","Book (SCHL)","KMCS LIBRARY","","rizal","379");
INSERT INTO borrower VALUES("1234567890","SR000001","Serial title","2017-09-03 22:20:56","2017-09-07 18:00:00","","0","Serial (SER)","location","","rizal","353");
INSERT INTO borrower VALUES("1234567890","VR-123456","Video recording title","2018-08-27 22:04:46","2018-08-30 18:00:00","","0","Video","Circulation","Home-use","rizal","380");



CREATE TABLE `borrowing` (
  `Name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Client_ID` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Level` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `Barcode` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Computer` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Time_In` datetime DEFAULT NULL,
  `Time_Due` datetime DEFAULT NULL,
  `Time_Out` datetime DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  `Charger` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Status` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12508 DEFAULT CHARSET=utf8;

INSERT INTO borrowing VALUES("Sebastian, Romeo A., Faculty","1234567890","Faculty","C001","Computer 1","","2018-02-11 15:06:54","2018-02-11 14:06:54","12507","","");



CREATE TABLE `cases` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` varchar(8000) CHARACTER SET latin1 DEFAULT NULL,
  `caID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`caID`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO cases VALUES("Saquing, Jocelyn A.","<001>Saquing, Jocelyn A.<002>Buenaluz, Emylene<003>Mora, Noel A.<004>Galang, Joe John<005>Disbarment<006>Dred, Stallone<007>Republic of the Philippines. SUPREME COURT, Manila, FIRST DIVISION<008>Guilty beyond reasonable doubt<009>142144<0010>SCRA<0011>8/22/2007<0012>8/28/2007<0013>Promulgated<0014>Disbarment<0015>xxxxxx<0016>Complainant Jocelyn A. Saquing seeks the disbarment of respondent Atty. Noel A. Mora for grave misconduct for allegedly conspiring with spouses Paulino and Manuela Mora in inducing her to buy an unregistered parcel of land, and for performing a notarial act without a commission, he being a lawyer of the Public Attorney’s Office (PAO).     

Complainant alleged that in June 2004, she bought from the spouses Mora 7,828 square meter parcel of allegedly registered land located at Sitio Paquiel, Camasi, Peñablanca, Cagayan, for P782,800.00.[1]  On July 8, 2004, she paid the amount of P550,000.00 to the spouses Mora at the house of the respondent, who prepared a handwritten acknowledgment receipt, which reads:[2]chan robles virtual law library<0017>WHEREFORE, in view of the foregoing, Resolution No. XVII-2006-238, dated April 27, 2006, of the IBP Board of Governors which adopted and approved the report and recommendation of Investigating Commissioner Lolita A. Quisumbing, finding respondent Atty. Noel A. Mora GUILTY of violating Rule 1.01, Canon 1 of the Code of Professional Responsibility for notarizing an acknowledgment receipt without a notarial commission and recommending that he be REPRIMANDED with warning that repetition of the same act will be dealt with more severely, is AFFIRMED.<0018>[1] Rollo, p. 2.
[2] Id.
[3] Id. at 10.
[4] Id. at 11.
[5] Id. at 3.
[6] Id.
[7] Id. at 45-47.
[8] Id. at 86-91.
[9] Id. at 92.
[10] Id.  Notice of Resolution, IBP Commission on Bar Discipline, Board of Governors.
[11] Arienda v. Aguila, A.C. No. 5637, April 12, 2005, 455 SCRA 282, 287.
[12] Tabang v. Gacott, A.C. No. 6490, September 29, 2004, 439 SCRA 307, 312.
[13] Report of Investigating Commissioner Lolita A. Quisumbing, pp. 4-5.
[14] 366 Phil. 155, 161 (1999).
[15] Zoreta v. Simpliciano, A.C. No. 6492, November 18, 2004, 443 SCRA 1, 10.
[16] Suzuki v. Tiamson, A.C. No. 6542, September 30, 2005, 471 SCRA 129, 140.
[17] A.C. No. 575, February 14, 1991, 194 SCRA","13");
INSERT INTO cases VALUES("aaa","<001>aaa<002>bbb<003>ccc<004>ddd<005>eee<006>ffff<007>ggg<008>hhh<009>iii<0010>jjj<0011>kkk<0012>lll<0013>mmm<0014>nnnn<0015>ooo<0016>ppp<0017>qqq<0018>rrrr","14");
INSERT INTO cases VALUES("aaaa","<001>aaaa<002>bbbb<003>ccccc<004>dddd<005>eeee<006>ffff<007><008><009><0010><0011><0012><0013><0014><0015><0016><0017><0018>","15");
INSERT INTO cases VALUES("Petitioner","<001>Petitioner<002>P counsel<003>Respondent<004>R counsel<005>case<006>judge<007>court<008>decision<009>gr number<0010>source<0011>date filed<0012>date promulgated<0013>status<0014>keywords<0015>electronic access<0016>facts<0017>issues<0018>held","16");
INSERT INTO cases VALUES("Petitioner","<001>Petitioner<002>P counsel<003>Respondent<004>R counsel<005>case<006>judge<007>court<008>decision<009>gr number<0010>source<0011>date filed<0012>date promulgated<0013>status<0014>keywords<0015>electronic access<0016>facts<0017>issues<0018>held","17");



CREATE TABLE `cashier` (
  `Name` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `ID_number` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `DatePayment` datetime DEFAULT NULL,
  `Amount` double(8,2) DEFAULT NULL,
  `Payment_type` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO cashier VALUES("Arambulo, Marcus","visitor","2014-07-16 00:00:00","50.00","","1");



CREATE TABLE `catalog_output` (
  `Call_number` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Title` varchar(350) CHARACTER SET latin1 DEFAULT NULL,
  `Author` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `POP` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Publisher` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `YOP` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `Subject` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Barcode` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `BiblioRecord` varchar(1200) CHARACTER SET latin1 DEFAULT NULL,
  `Cataloguer` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Cat_date` datetime DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `catoutput` (
  `BiblioRecord` varchar(1200) CHARACTER SET latin1 DEFAULT NULL,
  `Cataloguer` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `Cataloguing_date` datetime DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `checkout` (
  `A` int(11) DEFAULT '0',
  `B` int(11) DEFAULT '0',
  `C` int(11) DEFAULT '0',
  `D` int(11) DEFAULT '0',
  `E` int(11) DEFAULT '0',
  `F` int(11) DEFAULT '0',
  `G` int(11) DEFAULT '0',
  `H` int(11) DEFAULT '0',
  `J` int(11) DEFAULT '0',
  `K` int(11) DEFAULT '0',
  `L` int(11) DEFAULT '0',
  `M` int(11) DEFAULT '0',
  `N` int(11) DEFAULT '0',
  `P` int(11) DEFAULT '0',
  `Q` int(11) DEFAULT '0',
  `R` int(11) DEFAULT '0',
  `S` int(11) DEFAULT '0',
  `T` int(11) DEFAULT '0',
  `U` int(11) DEFAULT '0',
  `V` int(11) DEFAULT '0',
  `Z` int(11) DEFAULT '0',
  `Fil` int(11) DEFAULT '0',
  `Ref` int(11) DEFAULT '0',
  `Total` int(11) DEFAULT '0',
  `da_te` datetime DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO checkout VALUES("0","0","0","0","0","1","55","0","0","0","0","0","1","6","3","0","0","0","0","0","0","0","0","66","2010-04-01 00:00:00","7");



CREATE TABLE `circ_type` (
  `circ_type` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO circ_type VALUES("filipiniana","1");
INSERT INTO circ_type VALUES("reference","2");
INSERT INTO circ_type VALUES("reserve","3");
INSERT INTO circ_type VALUES("special material","4");



CREATE TABLE `classification` (
  `LC` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `DDC` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Cutter` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `classification_pk` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `client` (
  `Name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Address` varchar(160) CHARACTER SET latin1 DEFAULT NULL,
  `Degree_Course` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `User_class` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT 'group',
  `Year_Level` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT 'description',
  `IDnum` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `DateApplied` datetime DEFAULT NULL,
  `DateExpired` datetime DEFAULT NULL,
  `Bkloan` smallint(6) DEFAULT '0',
  `telephone` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Overdue` double DEFAULT '0',
  `email` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `remarks` varchar(145) COLLATE utf8_unicode_ci DEFAULT NULL,
  `suspended` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tag` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'rfidtag',
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO client VALUES("Sebastian, Romeo A.","","","Faculty","LMC","1234567890","2014-07-03 00:00:00","2050-07-25 00:00:00","6","","0","","","2","0009743759","1");
INSERT INTO client VALUES("Santos, Ramon C.","","","High school","III-Ruby","2011000978","2014-07-06 00:00:00","2018-10-31 00:00:00","0","","2","","","2","1234567890","2");
INSERT INTO client VALUES("Buena, Emylene","","","Faculty","Inst of Law","0987654321","2018-02-11 00:00:00","2019-02-11 00:00:00","0","","0","","","","0987654321","4");



CREATE TABLE `clientlog` (
  `Name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `ID` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Level` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Petsa` datetime DEFAULT NULL,
  `Grp` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_record` bigint(20) NOT NULL AUTO_INCREMENT,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_record`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-07-06 21:57:54","Faculty","no data","38","Exit");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-07-06 21:57:57","Faculty","no data","39","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-07-07 20:09:40","Faculty","no data","40","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-07-07 20:11:59","Faculty","no data","41","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-07-07 20:14:24","Faculty","no data","42","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-07-08 20:17:29","Faculty","no data","43","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-07-09 16:52:00","Faculty","no data","44","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-07-12 20:07:25","Faculty","no data","45","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-07-16 17:31:10","Faculty","no data","46","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-07-23 09:28:01","Faculty","no data","47","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-07-23 09:50:15","Faculty","no data","48","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-08-03 21:11:59","Faculty","no data","49","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-08-06 01:45:52","Faculty","no data","50","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-08-14 21:19:28","Faculty","no data","51","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-08-14 21:20:50","Faculty","no data","52","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-08-24 10:50:50","Faculty","no data","53","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-08-24 11:05:16","Faculty","no data","54","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-09-06 20:42:20","Faculty","no data","55","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-09-10 04:30:11","Faculty","no data","56","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-10-01 16:00:10","Faculty","no data","57","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-10-01 16:04:22","Faculty","no data","58","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-11-22 20:16:26","Faculty","no data","59","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2017-11-22 20:16:30","Faculty","no data","60","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-01-05 00:26:26","Faculty","no data","61","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-01-19 04:54:45","Faculty","no data","62","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-02-11 08:13:58","Faculty","HS Library","63","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-02-11 12:21:10","Faculty","HS Library","64","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-02-11 12:22:36","Faculty","no data","65","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-02-11 12:22:44","Faculty","no data","66","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-02-11 12:22:53","Faculty","no data","67","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-02-11 12:22:57","Faculty","no data","68","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-02-11 12:23:02","Faculty","no data","69","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-02-11 12:23:09","Faculty","no data","70","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-02-11 12:28:26","Faculty","no data","71","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-02-11 12:28:34","Faculty","no data","72","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-02-11 12:28:47","Faculty","no data","73","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-02-11 12:28:56","Faculty","no data","74","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-02-11 18:50:02","Faculty","no data","75","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-02-11 18:55:12","Faculty","no data","76","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-02-11 18:58:58","Faculty","no data","77","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-02-14 22:52:26","Faculty","no data","78","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-02-15 22:31:42","Faculty","no data","79","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-02-25 04:54:42","Faculty","no data","80","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-05-07 21:47:20","Faculty","no data","81","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-05-09 22:07:03","Faculty","no data","82","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-05-24 19:42:14","Faculty","no data","83","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-05-24 21:18:08","Faculty","no data","84","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-05-24 21:53:27","Faculty","no data","85","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-05-28 20:19:34","Faculty","no data","86","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-05-29 23:47:36","Faculty","no data","87","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-06-30 21:32:26","Faculty","no data","88","Enter");
INSERT INTO clientlog VALUES("Sebastian, Romeo A.","1234567890","LMC","2018-07-25 23:37:35","Faculty","no data","89","Enter");



CREATE TABLE `collection_save_stat` (
  `one` double DEFAULT '0',
  `two` double DEFAULT '0',
  `three` double DEFAULT '0',
  `four` double DEFAULT '0',
  `five` double DEFAULT '0',
  `six` double DEFAULT '0',
  `seven` double DEFAULT '0',
  `eight` double DEFAULT '0',
  `nine` double DEFAULT '0',
  `ten` double DEFAULT '0',
  `zero` double DEFAULT '0',
  `Total` double DEFAULT '0',
  `Da_te` datetime DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO collection_save_stat VALUES("0","0","0","0","1","0","0","0","3","0","0","4","2010-08-17 00:00:00","4");
INSERT INTO collection_save_stat VALUES("0","0","0","0","1","0","0","0","0","0","0","1","2010-08-16 00:00:00","2");
INSERT INTO collection_save_stat VALUES("0","0","0","0","1","0","0","0","0","0","0","1","2010-08-16 00:00:00","3");
INSERT INTO collection_save_stat VALUES("0","2","0","2","2","0","0","0","3","0","0","9","2010-08-18 00:00:00","5");



CREATE TABLE `computer` (
  `Computer` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Barcode` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO computer VALUES("Computer 1","C001","1");
INSERT INTO computer VALUES("Computer 2","C002","2");
INSERT INTO computer VALUES("Computer 3","C003","5");



CREATE TABLE `courses` (
  `course` varchar(200) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO courses VALUES("Introduction to Philosophy","1");
INSERT INTO courses VALUES("Understanding Self","2");
INSERT INTO courses VALUES("Purposive Communication","3");



CREATE TABLE `ddc_distribution` (
  `d0` double DEFAULT NULL,
  `d1` double DEFAULT NULL,
  `d2` double DEFAULT NULL,
  `d3` double DEFAULT NULL,
  `d4` double DEFAULT NULL,
  `d5` double DEFAULT NULL,
  `d6` double DEFAULT NULL,
  `d7` double DEFAULT NULL,
  `d8` double DEFAULT NULL,
  `d9` double DEFAULT NULL,
  `Total` double DEFAULT NULL,
  `da_te` datetime DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO ddc_distribution VALUES("337","813","1584","1648","270","1903","1634","1537","1520","929","12175","2010-03-30 00:00:00","1");
INSERT INTO ddc_distribution VALUES("337","813","1584","1648","270","1903","1634","1537","1520","929","12175","2010-03-30 00:00:00","2");
INSERT INTO ddc_distribution VALUES("337","813","1584","1648","270","1903","1634","1537","1520","929","12175","2010-03-30 00:00:00","3");
INSERT INTO ddc_distribution VALUES("337","813","1584","1648","270","1903","1634","1537","1520","929","12175","2010-03-30 00:00:00","4");
INSERT INTO ddc_distribution VALUES("337","813","1584","1648","270","1903","1634","1537","1520","929","12175","2010-03-31 00:00:00","5");
INSERT INTO ddc_distribution VALUES("337","813","1584","1648","270","1903","1634","1537","1520","929","12175","2010-12-31 00:00:00","6");
INSERT INTO ddc_distribution VALUES("0","0","0","2","0","0","0","0","0","0","2","2015-10-17 00:00:00","7");
INSERT INTO ddc_distribution VALUES("0","0","0","2","0","0","0","0","0","0","2","2015-10-17 00:00:00","8");
INSERT INTO ddc_distribution VALUES("0","0","0","2","0","0","0","0","0","0","2","2015-10-17 00:00:00","9");
INSERT INTO ddc_distribution VALUES("0","0","0","2","0","0","0","0","0","0","2","2015-10-17 00:00:00","10");
INSERT INTO ddc_distribution VALUES("0","0","0","100","0","0","0","0","0","0","100","2015-10-17 00:00:00","11");



CREATE TABLE `ddc_distribution_save` (
  `d0` double DEFAULT NULL,
  `d1` double DEFAULT NULL,
  `d2` double DEFAULT NULL,
  `d3` double DEFAULT NULL,
  `d4` double DEFAULT NULL,
  `d5` double DEFAULT NULL,
  `d6` double DEFAULT NULL,
  `d7` double DEFAULT NULL,
  `d8` double DEFAULT NULL,
  `d9` double DEFAULT NULL,
  `Total` double DEFAULT NULL,
  `da_te` datetime DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO ddc_distribution_save VALUES("337","813","1584","1648","270","1903","1634","1537","1520","929","12175","2010-03-30 00:00:00","1");
INSERT INTO ddc_distribution_save VALUES("337","813","1584","1648","270","1903","1634","1537","1520","929","12175","2010-03-30 00:00:00","2");
INSERT INTO ddc_distribution_save VALUES("337","813","1584","1648","270","1903","1634","1537","1520","929","12175","2010-03-30 00:00:00","3");
INSERT INTO ddc_distribution_save VALUES("337","813","1584","1648","270","1903","1634","1537","1520","929","12175","2010-03-30 00:00:00","4");
INSERT INTO ddc_distribution_save VALUES("337","813","1584","1648","270","1903","1634","1537","1520","929","12175","2010-03-31 00:00:00","5");
INSERT INTO ddc_distribution_save VALUES("337","813","1584","1648","270","1903","1634","1537","1520","929","12175","2010-12-31 00:00:00","6");



CREATE TABLE `ddcloan` (
  `C000` double DEFAULT '0',
  `C100` double DEFAULT '0',
  `C200` double DEFAULT '0',
  `C300` double DEFAULT '0',
  `C400` double DEFAULT '0',
  `C500` double DEFAULT '0',
  `C600` double DEFAULT '0',
  `C700` double DEFAULT '0',
  `C800` double DEFAULT '0',
  `C900` double DEFAULT '0',
  `CFil` double DEFAULT '0',
  `CRef` double DEFAULT '0',
  `Total` double DEFAULT '0',
  `da_te` datetime DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO ddcloan VALUES("0","3","0","85","0","3","8","0","11","4","0","0","114","2010-03-31 00:00:00","3");
INSERT INTO ddcloan VALUES("0","0","0","0","0","0","1","0","0","1","0","0","2","2010-03-31 00:00:00","2");
INSERT INTO ddcloan VALUES("0","0","0","0","0","0","1","0","0","1","0","0","2","2010-04-01 00:00:00","4");



CREATE TABLE `ddcloan_save` (
  `C000` double DEFAULT '0',
  `C100` double DEFAULT '0',
  `C200` double DEFAULT '0',
  `C300` double DEFAULT '0',
  `C400` double DEFAULT '0',
  `C500` double DEFAULT '0',
  `C600` double DEFAULT '0',
  `C700` double DEFAULT '0',
  `C800` double DEFAULT '0',
  `C900` double DEFAULT '0',
  `CFil` double DEFAULT '0',
  `CRef` double DEFAULT '0',
  `Total` double DEFAULT '0',
  `da_te` datetime DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO ddcloan_save VALUES("0","0","0","6","0","3","4","0","11","4","0","0","28","2012-09-14 10:02:47","8");
INSERT INTO ddcloan_save VALUES("0","0","0","6","0","3","4","0","11","4","0","0","28","2012-09-13 22:28:54","5");
INSERT INTO ddcloan_save VALUES("0","0","0","6","0","3","4","0","11","4","0","0","28","2012-09-13 22:28:57","6");
INSERT INTO ddcloan_save VALUES("0","0","0","6","0","3","4","0","11","4","0","0","28","2012-09-13 22:29:00","7");
INSERT INTO ddcloan_save VALUES("0","0","0","6","0","3","4","0","11","4","0","0","28","2012-11-01 10:46:58","9");



CREATE TABLE `department` (
  `Department` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Budget` double(10,2) DEFAULT '0.00',
  `Balance` double(10,2) DEFAULT '0.00',
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `DEPARTMENT_PK` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO department VALUES("Library","100000.00","100000.00","1");



CREATE TABLE `discussion` (
  `Discussion` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Barcode` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO discussion VALUES("Discussion room 1","D-001","1");
INSERT INTO discussion VALUES("Discussion room 2","D-002","3");



CREATE TABLE `discussion_accountability` (
  `Name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Client_ID` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Barcode` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Discussion` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Time_borrowed` datetime DEFAULT NULL,
  `Time_due` datetime DEFAULT NULL,
  `Time_returned` datetime DEFAULT NULL,
  `Fine` double(6,2) DEFAULT NULL,
  `ID_record` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_record`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `discussion_backup_stat` (
  `Seven` double DEFAULT '0',
  `Eight` double DEFAULT '0',
  `Nine` double DEFAULT '0',
  `Ten` double DEFAULT '0',
  `Eleven` double DEFAULT '0',
  `Twelve` double DEFAULT '0',
  `One` double DEFAULT '0',
  `Two` double DEFAULT '0',
  `Three` double DEFAULT '0',
  `Four` double DEFAULT '0',
  `Five` double DEFAULT '0',
  `Six` double DEFAULT '0',
  `Sevenpm` double DEFAULT '0',
  `Eightpm` double DEFAULT '0',
  `Ninepm` double DEFAULT '0',
  `Total` double DEFAULT '0',
  `Da_te` datetime DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

INSERT INTO discussion_backup_stat VALUES("0","0","0","0","1","0","0","0","3","0","0","0","0","0","0","4","2010-08-17 00:00:00","4");
INSERT INTO discussion_backup_stat VALUES("0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","1","2010-08-16 00:00:00","2");
INSERT INTO discussion_backup_stat VALUES("0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","1","2010-08-16 00:00:00","3");
INSERT INTO discussion_backup_stat VALUES("0","2","0","2","2","0","0","0","3","0","0","0","0","0","0","9","2010-08-18 00:00:00","5");
INSERT INTO discussion_backup_stat VALUES("10","38","42","65","66","98","15","0","0","0","0","0","0","0","0","334","2010-09-07 00:00:00","6");
INSERT INTO discussion_backup_stat VALUES("10","28","81","73","61","110","60","0","0","0","0","0","0","0","0","423","2010-09-15 00:00:00","7");
INSERT INTO discussion_backup_stat VALUES("31","96","83","68","94","64","55","9","0","0","0","0","0","0","0","500","2010-10-06 00:00:00","8");
INSERT INTO discussion_backup_stat VALUES("0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","2010-11-09 00:00:00","9");
INSERT INTO discussion_backup_stat VALUES("14","49","48","49","78","91","20","0","0","0","0","0","0","0","0","349","2010-11-09 00:00:00","10");
INSERT INTO discussion_backup_stat VALUES("16","40","54","66","81","70","59","44","14","0","0","0","0","0","0","444","2010-11-25 00:00:00","11");
INSERT INTO discussion_backup_stat VALUES("16","40","54","66","81","70","59","44","14","0","0","0","0","0","0","444","2010-11-25 00:00:00","12");
INSERT INTO discussion_backup_stat VALUES("23","70","96","131","136","144","122","34","30","21","1","0","0","0","0","808","2010-11-30 00:00:00","13");
INSERT INTO discussion_backup_stat VALUES("0","4","12","7","4","2","5","2","1","0","0","0","0","0","0","37","2011-05-23 00:00:00","14");
INSERT INTO discussion_backup_stat VALUES("0","4","12","7","4","2","5","2","1","0","0","0","0","0","0","37","2011-05-23 00:00:00","15");
INSERT INTO discussion_backup_stat VALUES("0","4","8","10","4","10","8","4","1","1","0","0","0","0","0","50","2011-06-06 00:00:00","16");
INSERT INTO discussion_backup_stat VALUES("0","4","8","10","4","10","8","4","1","1","0","0","0","0","0","50","2011-06-06 00:00:00","17");
INSERT INTO discussion_backup_stat VALUES("0","37","67","78","108","0","0","0","0","0","0","0","0","0","0","290","2011-06-17 00:00:00","18");
INSERT INTO discussion_backup_stat VALUES("17","47","70","69","69","30","0","0","0","0","0","0","0","0","0","302","2011-06-22 00:00:00","19");
INSERT INTO discussion_backup_stat VALUES("38","88","72","83","82","77","97","42","22","20","0","0","0","0","0","621","2011-07-21 00:00:00","20");
INSERT INTO discussion_backup_stat VALUES("10","30","69","72","75","111","77","44","0","0","0","0","0","0","0","488","2011-09-14 00:00:00","21");
INSERT INTO discussion_backup_stat VALUES("15","14","61","75","56","83","33","0","0","0","0","0","0","0","0","337","2012-01-11 00:00:00","22");
INSERT INTO discussion_backup_stat VALUES("15","14","61","75","56","83","33","0","0","0","0","0","0","0","0","337","2012-01-11 00:00:00","23");
INSERT INTO discussion_backup_stat VALUES("0","5","2","0","0","0","0","0","0","0","0","0","0","0","0","7","2012-02-06 00:00:00","24");
INSERT INTO discussion_backup_stat VALUES("6","27","46","47","92","83","63","42","0","0","0","0","0","0","0","406","2012-03-01 00:00:00","25");
INSERT INTO discussion_backup_stat VALUES("6","27","46","47","92","83","63","42","0","0","0","0","0","0","0","406","2012-03-01 00:00:00","26");
INSERT INTO discussion_backup_stat VALUES("0","13","8","3","18","14","2","5","6","0","0","0","0","0","0","69","2012-06-18 00:00:00","27");
INSERT INTO discussion_backup_stat VALUES("22","45","79","90","86","90","78","59","49","0","0","0","0","0","0","598","2012-06-27 00:00:00","28");
INSERT INTO discussion_backup_stat VALUES("60","199","163","207","196","172","220","193","138","79","7","0","0","0","0","1634","2014-01-22 00:00:00","29");
INSERT INTO discussion_backup_stat VALUES("60","200","173","214","201","178","224","194","139","80","7","0","0","0","0","1670","2014-05-20 00:00:00","30");
INSERT INTO discussion_backup_stat VALUES("60","200","173","214","201","179","224","194","139","80","7","0","0","0","1","1672","2014-08-13 00:00:00","31");



CREATE TABLE `discussion_client` (
  `Name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Client_ID` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Level` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Barcode` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Discussion` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `time_borrowed` datetime DEFAULT NULL,
  `time_due` datetime DEFAULT NULL,
  `time_returned` datetime DEFAULT NULL,
  `ID_record` float NOT NULL AUTO_INCREMENT,
  `Charger` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Status` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`ID_record`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

INSERT INTO discussion_client VALUES("Sebastian, Romeo A., Faculty","1234567890","Faculty","D-001","Discussion room 1","2018-02-11 14:15:56","2018-02-11 16:15:56","","25","","");



CREATE TABLE `discussion_history` (
  `Name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Client_ID` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Level` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `Barcode` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Discussion` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Time_borrowed` datetime DEFAULT NULL,
  `Time_due` datetime DEFAULT NULL,
  `Time_returned` datetime DEFAULT NULL,
  `ID_record` bigint(20) NOT NULL AUTO_INCREMENT,
  `Charger` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`ID_record`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

INSERT INTO discussion_history VALUES("Sebatian, Romeo A., Faculty","700628"," ","D-003","Discussion room 3","2014-08-13 21:45:52","2014-08-13 23:45:52","2014-08-13 21:46:32","1","");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A., Faculty","700628","Faculty","D-001","Discussion room 1","2015-08-01 10:01:08","2015-08-01 12:01:08","2015-08-01 10:01:22","2","");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A., Faculty","700628","Faculty","D-001","Discussion room 1","2015-08-01 10:14:40","2015-08-01 12:14:40","2015-08-01 14:15:22","3","");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","","D-001","Discussion room 1","2015-11-22 00:00:00","2015-11-22 00:00:00","2015-11-22 08:37:42","4","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","","D-001","Discussion room 1","2015-11-22 00:00:00","2015-11-22 00:00:00","2015-11-22 08:39:49","5","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","","D-001","Discussion room 1","2015-11-22 00:00:00","2015-11-22 00:00:00","2015-11-22 08:42:01","6","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 00:00:00","2015-11-22 00:00:00","2015-11-22 21:05:31","7","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 21:00:00","2015-11-22 23:00:00","2015-11-22 21:29:07","8","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 21:00:00","2015-11-22 00:00:00","2015-11-22 21:34:41","9","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 21:00:00","2015-11-22 23:00:00","2015-11-22 21:35:48","10","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 21:00:00","2015-11-22 00:00:00","2015-11-22 21:36:15","11","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 21:00:00","2015-11-22 00:00:00","2015-11-22 21:36:40","12","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 21:00:00","2015-11-22 23:00:00","2015-11-22 21:36:58","13","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 21:00:00","2015-11-22 22:00:00","2015-11-22 21:37:52","14","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 21:00:00","2015-11-22 02:00:00","2015-11-22 21:38:22","15","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 21:00:00","2015-11-22 23:00:00","2015-11-22 21:49:50","16","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 21:00:00","2015-11-22 23:00:00","2015-11-22 21:56:56","17","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 21:00:00","2015-11-22 23:00:00","2015-11-22 21:59:38","18","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 21:00:00","2015-11-22 23:00:00","2015-11-22 22:00:43","19","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 22:00:00","2015-11-22 00:00:00","2015-11-22 22:01:04","20","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 22:00:00","2015-11-22 00:00:00","2015-11-22 22:01:36","21","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 22:01:42","2015-11-22 01:00:00","2015-11-22 22:15:32","22","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 22:15:41","2015-11-22 00:00:00","2015-11-22 22:15:53","23","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 22:16:05","2015-11-22 00:00:00","2015-11-22 22:16:11","24","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 22:16:18","2015-11-22 23:00:00","2015-11-22 22:22:15","25","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","Faculty","D-001","Discussion room 1","2015-11-22 22:46:50","2015-11-23 01:46:50","2015-11-22 22:47:20","26","rizal");
INSERT INTO discussion_history VALUES("Sebastian, Romeo A.","1234567890","LMC-","D-001","Discussion room 1","2015-11-22 22:47:27","2015-11-23 00:47:27","2018-02-11 14:15:46","27","");



CREATE TABLE `discussion_overdue` (
  `Name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Client_ID` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Overdue` double DEFAULT NULL,
  `Paid` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Date_payment` datetime DEFAULT NULL,
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO discussion_overdue VALUES("Sebastian, Romeo A., Faculty","700628","","No","","1");
INSERT INTO discussion_overdue VALUES("Sebastian, Romeo A.","1234567890","","No","","2");



CREATE TABLE `discussion_room` (
  `Room` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Ti_me` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Date_reservation` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Purpose` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Date_submitted` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ID_number` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Year_section` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Course` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO discussion_room VALUES("Room 1","7:30am-9:00am","2009-02-26","report","2009-2-26","Galang, Angelina","700011","xxx","xxx","1");
INSERT INTO discussion_room VALUES("Room 1","14-15PM","2/26/2009","xx","2/26/2009","xxxx","700628","xxxxx","MA International Studies (CIHDS)","2");
INSERT INTO discussion_room VALUES("Room 2","14-15PM","2/28/2009","xxx","2/26/2009","xxxx","700011","xxxx","MA Migration Studies (CIHDS)","3");



CREATE TABLE `discussion_temp_overdue` (
  `Name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Client_ID` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Overdue` double(6,2) DEFAULT NULL,
  `Paid` char(5) CHARACTER SET latin1 DEFAULT NULL,
  `Date_payment` datetime DEFAULT NULL,
  `ID_record` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_record`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `discussion_userstat` (
  `Seven` double DEFAULT '0',
  `Eight` double DEFAULT '0',
  `Nine` double DEFAULT '0',
  `Ten` double DEFAULT '0',
  `Eleven` double DEFAULT '0',
  `Twelve` double DEFAULT '0',
  `One` double DEFAULT '0',
  `Two` double DEFAULT '0',
  `Three` double DEFAULT '0',
  `Four` double DEFAULT '0',
  `Five` double DEFAULT '0',
  `Six` double DEFAULT '0',
  `Sevenpm` double DEFAULT '0',
  `Eightpm` double DEFAULT '0',
  `Ninepm` double DEFAULT '0',
  `Total` double DEFAULT '0',
  `ID` float NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `userstat_pk` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO discussion_userstat VALUES("0","0","0","2","0","0","0","1","0","0","0","0","0","0","0","3","2");



CREATE TABLE `electronic` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` varchar(8000) CHARACTER SET latin1 DEFAULT NULL,
  `eID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`eID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO electronic VALUES("Philippines environment monitor 2005 : coastal and marine resources management","<001>Philippines environment monitor 2005 : coastal and marine resources management<002>World Bank - Philippines<003>World Bank<004>2005<005>PEM05-complete.pdf<006>76 p.<007>http://siteresources.worldbank.org/INTPHILIPPINES/Resources/PEM05-complete.pdf<008>PDF<009>English<0010><0011>col_libws1myWebRizalDocPDFPEM05-complete.pdf<0012><0013>World Bank<0014>Philippines<0015>Coastal resources; Marine resources management; Philippines","1");
INSERT INTO electronic VALUES("title","<001>title<002>creator<003>publisher<004>date<005>identifier<006>description<007>source<008>JPEG<009>language<0010>contributor<0011>electronic access<0012>relation<0013>rights<0014>coverage<0015>subjects","2");



CREATE TABLE `eq_schedule` (
  `Equipment` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Date_reservation` datetime DEFAULT NULL,
  `Name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ID_number` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Course` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Year_section` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Subject` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Professor` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Purpose` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Date_submitted` datetime DEFAULT NULL,
  `Remarks` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `from_time` datetime DEFAULT NULL,
  `to_time` datetime DEFAULT NULL,
  `SN` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

INSERT INTO eq_schedule VALUES("Laptop computer","2011-01-07 00:00:00","xxxx","xxx","xxx","xxx","xxx","xxx","discussion","2010-12-31 00:00:00","xxx","1899-12-30 10:00:00","1899-12-30 12:00:00","B1140003111","20");
INSERT INTO eq_schedule VALUES("DVD Player","2010-12-31 00:00:00","romy sebastian","123456","CAL","III","ILS 3","buen","film showing","2010-12-31 00:00:00","xxxx","1899-12-30 09:00:00","1899-12-30 10:00:00","SN01404","19");



CREATE TABLE `equip_borrower` (
  `ID_Number` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `barcode` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `brand` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Date_Borrowed` datetime DEFAULT NULL,
  `Due_date` datetime DEFAULT NULL,
  `Date_returned` datetime DEFAULT NULL,
  `Overdue` int(11) DEFAULT '0',
  `description` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `charger` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `status` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  KEY `borrower_id_number_dup_idx` (`ID_Number`),
  KEY `borrower_accession_dup_idx` (`barcode`),
  KEY `borrower_title_dup_idx` (`brand`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `equip_borrower1` (
  `ID_Number` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `barcode` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `brand` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Date_Borrowed` datetime DEFAULT NULL,
  `Due_date` datetime DEFAULT NULL,
  `Date_returned` datetime DEFAULT NULL,
  `Overdue` int(11) DEFAULT '0',
  `description` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `charger` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  KEY `borrower_id_number_dup_idx` (`ID_Number`),
  KEY `borrower_accession_dup_idx` (`barcode`),
  KEY `borrower_title_dup_idx` (`brand`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `equip_borrowerold` (
  `ID_Number` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `Serial_number` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Equipment` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Date_borrowed` datetime DEFAULT NULL,
  `Due_date` datetime DEFAULT NULL,
  `Date_returned` datetime DEFAULT NULL,
  `Overdue` int(11) DEFAULT NULL,
  `Type` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Charger` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  KEY `borrower_id_number_dup_idx` (`ID_Number`),
  KEY `borrower_accession_dup_idx` (`Serial_number`),
  KEY `borrower_title_dup_idx` (`Equipment`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `equipment` (
  `Description` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `accessories` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `brand` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `model` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `location` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `date_acquisition` datetime DEFAULT NULL,
  `mode_acquisition` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `price` float(10,2) DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `SN` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Barcode` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ctl_number` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Accountable` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eqID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`eqID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;




CREATE TABLE `equipment_history` (
  `ID_Number` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `barcode` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Brand` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Date_loan` datetime DEFAULT NULL,
  `Due_date` datetime DEFAULT NULL,
  `Date_returned` datetime DEFAULT NULL,
  `Call_Number` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Description` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Degree_Course` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Library` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `charger` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  `Group` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Group_type` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO equipment_history VALUES("2010000440","Santos, Ramon C.","1111000990","","2013-09-24 00:00:00","2013-09-24 00:00:00","2014-08-13 00:00:00","","Mini-Display Port to VGA Adapter","","","rizal","1","","");
INSERT INTO equipment_history VALUES("2012000045","Santos, Ramon C.","1111001008","","2013-09-24 00:00:00","2013-09-24 00:00:00","2014-08-13 00:00:00","","I-Pad VGA Adapter 1","","","rizal","2","","");
INSERT INTO equipment_history VALUES("2012000345","Santos, Ramon C.","1111001009","","2013-09-24 00:00:00","2013-09-24 00:00:00","2014-08-13 00:00:00","","I-Pad VGA Adapter 2","","","rizal","3","","");
INSERT INTO equipment_history VALUES("2007300488","Santos, Ramon C.","1111001010","","2013-09-24 00:00:00","2013-09-24 00:00:00","2014-08-13 00:00:00","","Mini-Display Port to VGA Adapter","","","rizal","4","","");
INSERT INTO equipment_history VALUES("2011000978","Santos, Ramon C.","1111000991","","2013-09-24 00:00:00","2013-09-24 00:00:00","2014-08-13 00:00:00","","Mini-Display Port to VGA Adapter","","","rizal","5","","");
INSERT INTO equipment_history VALUES("700628","Sebastian, Romeo A.","1111000991","","2015-07-24 00:00:00","2015-07-24 00:00:00","2015-07-24 00:00:00","","LCD Projector","","","rizal","6","","");
INSERT INTO equipment_history VALUES("700628","Sebastian, Romeo A.","1111000991","","2015-07-14 00:00:00","2015-07-24 00:00:00","2015-07-14 00:00:00","","LCD Projector","","","rizal","7","","");
INSERT INTO equipment_history VALUES("700628","Sebastian, Romeo A.","1111000991","","2015-07-14 00:00:00","2015-07-14 00:00:00","2015-07-14 00:00:00","","LCD Projector","","","rizal","8","","");
INSERT INTO equipment_history VALUES("700628","Sebastian, Romeo A.","1111000991","","2015-07-14 00:00:00","2015-07-14 00:00:00","2015-07-14 00:00:00","","LCD Projector","","","rizal","9","","");
INSERT INTO equipment_history VALUES("700628","Sebastian, Romeo A.","1111000991","","2015-07-14 00:00:00","2015-07-14 00:00:00","2015-07-14 00:00:00","","LCD Projector","","","rizal","10","","");
INSERT INTO equipment_history VALUES("700628","Sebastian, Romeo A.","1111000991","","2015-07-14 00:00:00","2015-07-14 00:00:00","2015-07-14 00:00:00","","LCD Projector","","","rizal","11","","");
INSERT INTO equipment_history VALUES("700628","Sebastian, Romeo A.","1111000991","","2015-07-31 00:00:00","2015-07-31 00:00:00","2015-07-31 00:00:00","","LCD Projector","","","rizal","12","","");
INSERT INTO equipment_history VALUES("700628","Sebastian, Romeo A.","1111000991","","2015-07-31 00:00:00","2015-07-31 00:00:00","2015-07-31 00:00:00","","LCD Projector","","","rizal","13","","");
INSERT INTO equipment_history VALUES("700628","Sebastian, Romeo A.","1111000991","","2015-07-31 00:00:00","2015-07-31 00:00:00","2015-07-31 00:00:00","","LCD Projector","","","rizal","14","","");
INSERT INTO equipment_history VALUES("1234567890","Sebastian, Romeo A.","1111000991","","2018-02-11 00:00:00","2018-02-11 00:00:00","2018-02-11 00:00:00","","LCD Projector","","","rizal","15","","");
INSERT INTO equipment_history VALUES("1234567890","Sebastian, Romeo A.","1111000991","","2018-02-11 00:00:00","2018-02-11 00:00:00","2018-02-11 00:00:00","","LCD Projector","","","rizal","16","","");



CREATE TABLE `equipment_inventory` (
  `SN` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Equipment` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Department` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Location` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `IDate` datetime DEFAULT NULL,
  `Status` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `inventory_pk` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

INSERT INTO equipment_inventory VALUES("SN01404","DVD Player","ESI","AVR","2007-09-28 00:00:00","Out","23");
INSERT INTO equipment_inventory VALUES("SN0001","LCD","ESI","AVR","2007-09-28 00:00:00","In","22");
INSERT INTO equipment_inventory VALUES("B1140003111","Laptop computer","ESI","AVR","2007-09-28 00:00:00","Lost","24");



CREATE TABLE `equipment_schedule` (
  `Name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `ID_number` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Institution` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Reservation_date` datetime DEFAULT NULL,
  `From_time` datetime DEFAULT NULL,
  `To_time` datetime DEFAULT NULL,
  `Date_reserved` datetime DEFAULT NULL,
  `encoded_by` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `SN` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `equipment_schedule_pk` (`ID`),
  KEY `equiptment_sched_name_dup_idx` (`Name`),
  KEY `equipment_id_num_dup_idx` (`ID_number`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

INSERT INTO equipment_schedule VALUES("romeo","12345","college","2013-02-07 00:00:00","1899-12-30 08:00:00","1899-12-30 09:00:00","2013-02-07 00:00:00","ras","B1140003111","11");



CREATE TABLE `equipmentnew_schedule` (
  `Equipment` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Date_reservation` datetime DEFAULT NULL,
  `Time_reservation` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ID_number` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Course` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Year_section` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Subject` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Professor` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Purpose` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Date_submitted` datetime DEFAULT NULL,
  `Remarks` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `ID` smallint(6) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO equipmentnew_schedule VALUES("12 Channel Powered Mixer","2014-05-23 00:00:00","12:00PM-13:30PM","xxxx","","","","College algebra","Mr. De Castro","Debate","2014-05-21 13:44:20","","1");
INSERT INTO equipmentnew_schedule VALUES("14" TV","2014-07-30 00:00:00","09:00AM-10:30AM","ras","","","","Educational technology","Mr. Buensuceso","Film showing","2014-07-28 00:11:26","","2");
INSERT INTO equipmentnew_schedule VALUES("12 Channel Powered Mixer","2014-07-30 00:00:00","13:30PM-15:00PM","xxx","","","","Civic welfare training service","Mr. De Castro","Debate","2014-07-28 09:33:29","","3");
INSERT INTO equipmentnew_schedule VALUES("LCD Projector","2018-07-09 00:00:00","09:00AM-10:30AM","gally","","","","Civic welfare training service","Mr. Buensuceso","Conference","2018-07-08 06:55:05","","4");



CREATE TABLE `faculty_list` (
  `Name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Emp_IDN` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `College` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `Department` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `Status` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO faculty_list VALUES("Sebastian, Romeo","8446805","CAS","SOC","Permanent","4");
INSERT INTO faculty_list VALUES("Arrogante, Allan","700141","CBEA","ENT","Permanent","5");
INSERT INTO faculty_list VALUES("Galang, Angelina P.","700011","CAS","EPM","Permanent","3");
INSERT INTO faculty_list VALUES("Carvajal, Ray","701404","CIHDS","SOC","Part time","6");
INSERT INTO faculty_list VALUES("Apuan, Vicky","700101","CAS","SOC","Permanent","7");
INSERT INTO faculty_list VALUES("Buensuceso, Noel","700111","CBEA","ENT","Permanent","8");



CREATE TABLE `film_inventory` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Author` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Call_Number` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Accession` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `IDate` datetime DEFAULT NULL,
  `Status` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Type` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

INSERT INTO film_inventory VALUES("Voyage to the bottom of the sea","Keren Marie","F 1234 2005","F1421","2008-03-29 00:00:00","In","Film","11");



CREATE TABLE `filmography` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` varchar(8000) CHARACTER SET latin1 DEFAULT NULL,
  `Copy` smallint(5) DEFAULT '1',
  `Avail` smallint(5) DEFAULT '1',
  `Out` smallint(5) DEFAULT '0',
  `flID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`flID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO filmography VALUES("Voyage to the bottom of the sea","<001>Voyage to the bottom of the sea<002>Sebastian, Romeo A.<003>Buenaluz, Emylene DA.<004>Jemaima Romlene<005>Keren Marie<006>Keziah Andrei<007>TriStar<008>Cinematography: Julian Job<009>No defects of any kind<0010>Parental Guidance<0011>Philippines<0012>English<0013>F 1234 2005<0014>F1421<0015>ESI<0016>4/14/2007<0017>Environmental dictionary; Deep sea travel<0018>D:\myRizal\Pictures\FILECOPY.AVI<0019>1<0020>1<0021>0<0022>Quick bronw fox jump over the young lazy dog.","1","0","1","1");



CREATE TABLE `fines` (
  `Faculty` smallint(6) NOT NULL DEFAULT '0',
  `Graduate` smallint(6) NOT NULL DEFAULT '0',
  `College` smallint(6) NOT NULL DEFAULT '0',
  `HighSchool` smallint(6) NOT NULL DEFAULT '0',
  `GradeSchool` smallint(6) NOT NULL DEFAULT '0',
  `Staff` smallint(6) NOT NULL DEFAULT '0',
  `Linggo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Sabado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Lunes` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Martes` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Miyerkules` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Huwebes` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Biyernes` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `PixPath` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO fines VALUES("5","5","5","2","2","5","True","True","False","False","False","False","False","","1");



CREATE TABLE `group_type` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `member_type_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `loan_limit` int(11) NOT NULL DEFAULT '0',
  `loan_period` int(11) NOT NULL DEFAULT '0',
  `enable_reserve` int(1) NOT NULL DEFAULT '0',
  `reserve_limit` int(11) NOT NULL DEFAULT '0',
  `member_period` int(11) NOT NULL DEFAULT '0',
  `reborrow_limit` int(11) NOT NULL DEFAULT '0',
  `fine_each_day` int(11) NOT NULL DEFAULT '0',
  `grace_period` int(2) DEFAULT '0',
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `member_type_name` (`member_type_name`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO group_type VALUES("1","Faculty","10","7","1","10","365","1","5","0","2011-08-25","2011-08-25");
INSERT INTO group_type VALUES("2","Student","5","0","0","2","0","0","2","0","","");
INSERT INTO group_type VALUES("5","College","5","0","0","5","0","0","5","0","","");
INSERT INTO group_type VALUES("6","High school","5","0","0","2","0","0","2","0","","");
INSERT INTO group_type VALUES("7","Grade school","5","0","0","2","0","0","2","0","","");
INSERT INTO group_type VALUES("14","Administrator","5","0","0","5","0","0","5","0","","");



CREATE TABLE `history` (
  `Name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Client_ID` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Level` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `Barcode` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Computer` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Time_In` datetime DEFAULT NULL,
  `Time_Due` datetime DEFAULT NULL,
  `Time_Out` datetime DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  `Charger` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

INSERT INTO history VALUES("Sebastian, Romeo A.","1234567890","","C001","Computer 1","2015-11-22 07:42:12","2015-11-22 00:00:00","2015-11-22 00:00:00","12","rizal");
INSERT INTO history VALUES("Sebastian, Romeo A.","1234567890","","C002","Computer 2","2015-11-22 07:35:44","2015-11-22 00:00:00","2015-11-22 00:00:00","11","rizal");
INSERT INTO history VALUES("Sebastian, Romeo A.","1234567890","","C001","Computer 1","2015-11-22 07:28:52","2015-11-22 00:00:00","2015-11-22 00:00:00","10","rizal");
INSERT INTO history VALUES("Sebastian, Romeo A.","700628","","C002","Computer 2","2015-11-21 20:40:29","2015-11-21 00:00:00","2015-11-21 00:00:00","9","rizal");
INSERT INTO history VALUES("Sebastian, Romeo A.","700628","","C001","Computer 1","2015-11-21 20:38:19","2015-11-21 00:00:00","2015-11-21 00:00:00","8","rizal");
INSERT INTO history VALUES("Sebastian, Romeo A.","1234567890","","C001","Computer 1","2015-11-22 07:44:22","2015-11-22 00:00:00","2015-11-22 00:00:00","13","rizal");
INSERT INTO history VALUES("Sebastian, Romeo A.","1234567890","","C001","Computer 1","2015-11-22 08:44:38","2015-11-22 00:00:00","2015-11-22 00:00:00","14","rizal");
INSERT INTO history VALUES("Sebastian, Romeo A.","1234567890","Faculty","C002","Computer 2","2015-11-22 22:14:08","2015-11-22 10:00:00","2015-11-22 07:36:18","15","rizal");
INSERT INTO history VALUES("Sebastian, Romeo A.","1234567890","Faculty","C002","Computer 2","2015-11-22 22:14:33","2015-11-22 00:00:00","2015-11-22 22:14:17","16","rizal");
INSERT INTO history VALUES("Sebastian, Romeo A.","1234567890","LMC-/LMC","C002","Computer 2","2018-02-11 14:06:20","2015-11-22 01:00:00","2015-11-22 22:14:43","17","");
INSERT INTO history VALUES("Sebastian, Romeo A.","1234567890","LMC-/LMC","C001","Computer 1","2018-02-11 14:06:46","2015-11-22 10:00:00","2015-11-22 08:44:47","18","");



CREATE TABLE `holding` (
  `call_number` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `accession` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `library` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `location` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `status` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `circulation_type` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `vol_year` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `t_out` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `bkid` int(11) DEFAULT NULL,
  `prefix` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  KEY `FK_bkid` (`bkid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO holding VALUES("GE 142 S35 2005","HE123457","College","Filipiniana","on shelf","Circulation","12","1","9","FIL","1");
INSERT INTO holding VALUES("GV 943.25 B74 1990","HE123456","HE-LMC","Circulation","out","Circulation","","4","10","","2");
INSERT INTO holding VALUES("TD 14344 S25 2012","1234567890","High school","Circulation","on shelf","Circulation","","0","2","FIL","3");
INSERT INTO holding VALUES("call number","accession","library","location","status","circ type","volument","1","111","prefix","4");



CREATE TABLE `holiday` (
  `Holiday` datetime DEFAULT NULL,
  `ID` smallint(6) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO holiday VALUES("2010-12-25 00:00:00","9");
INSERT INTO holiday VALUES("2010-11-02 00:00:00","7");
INSERT INTO holiday VALUES("2010-11-30 00:00:00","8");
INSERT INTO holiday VALUES("2015-09-20 00:00:00","10");
INSERT INTO holiday VALUES("2016-11-02 00:00:00","11");
INSERT INTO holiday VALUES("2016-11-02 00:00:00","12");



CREATE TABLE `hyperforum` (
  `messageID` int(11) NOT NULL AUTO_INCREMENT,
  `forumID` double DEFAULT NULL,
  `levelID` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `author` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `authorEmail` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `subject` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `body` varchar(8000) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`messageID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO hyperforum VALUES("1","1","1","romy","rej2k2@gmail.com","2010-03-19 00:00:00","Library forum","Library forum");
INSERT INTO hyperforum VALUES("2","1","2","xx","xx","2010-08-14 04:07:15","xxx","xxxxx");
INSERT INTO hyperforum VALUES("3","1","3","kk","kk","2010-08-14 04:15:33","kk","kkkkkk");
INSERT INTO hyperforum VALUES("4","1","2,4","ddd","ddd","2010-08-17 04:57:32","dddd","ddddd");
INSERT INTO hyperforum VALUES("5","1","5","gally","gally@rockermail.com","2010-08-18 00:25:14","Re:xxx","wow");
INSERT INTO hyperforum VALUES("6","1","6","romy","rej2k2@gmail.com","2015-12-05 21:45:49","hello!","The quick brown fox jump over the young lazy dog.");
INSERT INTO hyperforum VALUES("7","1","7","romy","rej2k2@gmail.com","2015-12-05 21:46:35","hello!","The quick brown fox jump over the young lazy dog.");
INSERT INTO hyperforum VALUES("8","1","8","romy","rej2k2@gmail.com","2015-12-05 21:47:52","hello!","The quick brown fox jump over the young lazy dog.");
INSERT INTO hyperforum VALUES("9","1","9","romy","rej2k2@gmail.com","2015-12-05 21:58:46","hello!","The quick brown fox jump over the young lazy dog.");
INSERT INTO hyperforum VALUES("10","1","10","gally","rej2k2@gmail.com","2015-12-05 22:00:52","gally","Wow!");
INSERT INTO hyperforum VALUES("11","1","6,11","sss","sss","2015-12-05 22:03:03","sss","ssss");
INSERT INTO hyperforum VALUES("12","1","","xxx","xxx","2015-12-05 22:12:21","Re:hello!","xxxx");



CREATE TABLE `internet_userstat` (
  `Seven` double DEFAULT '0',
  `Eight` double DEFAULT '0',
  `Nine` double DEFAULT '0',
  `Ten` double DEFAULT '0',
  `Eleven` double DEFAULT '0',
  `Twelve` double DEFAULT '0',
  `One` double DEFAULT '0',
  `Two` double DEFAULT '0',
  `Three` double DEFAULT '0',
  `Four` double DEFAULT '0',
  `Five` double DEFAULT '0',
  `Six` double DEFAULT '0',
  `Sevenpm` double DEFAULT '0',
  `Eightpm` double DEFAULT '0',
  `Ninepm` double DEFAULT '0',
  `Total` double DEFAULT '0',
  `ID` float NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `userstat_pk` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO internet_userstat VALUES("26","35","33","41","29","31","12","7","3","3","0","0","0","0","1","221","2");



CREATE TABLE `inventory` (
  `Accession` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Author` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Call_Number` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `IDate` datetime DEFAULT NULL,
  `Status` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Location` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=127 DEFAULT CHARSET=utf8;

INSERT INTO inventory VALUES("1104035291","Thesaurus on Philippine literature : an indexing language","Buena, Emiliana D.","REF 323 S45 2012","2018-07-04 00:00:00","Missing","College Library","109");
INSERT INTO inventory VALUES("CL-006013","Thesaurus on Banking and Finance   :  an indexing language","","FIC 323 S45 2012","2018-07-04 00:00:00","Lost","SSA LIBRARY","110");
INSERT INTO inventory VALUES("COLC123457","Thesaurus on Philippine environment","Sebastian, Romeo A..","FIL GE 321 S45 2016","2018-07-04 00:00:00","Reprocessing","ESI Library - Filifiniana section","111");
INSERT INTO inventory VALUES("1104035291","Thesaurus on Philippine literature : an indexing language","Buena, Emiliana D.","REF 323 S45 2012","","","College Library","112");
INSERT INTO inventory VALUES("COL006011","Thesaurus on Philippine abaca : an indexing language","Rillo, Rowena A..","FIL GE 123 S45 2012","","","Main Library","113");
INSERT INTO inventory VALUES("COL006012","Thesaurus on Philippine abaca : an indexing language","Rillo, Rowena A..","FIL GE 123 S45 2012","","","Main Library","114");
INSERT INTO inventory VALUES("COL006013","Thesaurus on Philippine abaca : an indexing language","Rillo, Rowena A..","FIL GE 123 S45 2012","","","Main Library","115");
INSERT INTO inventory VALUES("GS 006014","Thesaurus on Philippine rice","Sebastian, Romeo A..","SCHL GE 123 S45 2012","","","KMCS LIBRARY","116");
INSERT INTO inventory VALUES("GS 006015","Thesaurus on Philippine rice","Sebastian, Romeo A..","SCHL GE 123 S45 2012","","","KMCS LIBRARY","117");
INSERT INTO inventory VALUES("GS 006016","Thesaurus on Philippine rice","Sebastian, Romeo A..","SCHL GE 123 S45 2012","","","KMCS LIBRARY","118");
INSERT INTO inventory VALUES("HS-006011","Thesaurus on Philippine culinary arts","Buenaluz, Emylene","TRF GE 123 T12 S45 2017","","","KMCS LIBRARY","119");
INSERT INTO inventory VALUES("HS-006012","Thesaurus on Philippine culinary arts","Buenaluz, Emylene","TRF GE 123 T12 S45 2017","","","KMCS LIBRARY","120");
INSERT INTO inventory VALUES("HS-006013","Thesaurus on Philippine culinary arts","Buenaluz, Emylene","TRF GE 123 T12 S45 2017","","","KMCS LIBRARY","121");
INSERT INTO inventory VALUES("CL-006011","Thesaurus on Banking and Finance   :  an indexing language","","FIC 323 S45 2012","","","SSA LIBRARY","122");
INSERT INTO inventory VALUES("CL-006012","Thesaurus on Banking and Finance   :  an indexing language","","FIC 323 S45 2012","","","SSA LIBRARY","123");
INSERT INTO inventory VALUES("CL-006013","Thesaurus on Banking and Finance   :  an indexing language","","FIC 323 S45 2012","","","SSA LIBRARY","124");
INSERT INTO inventory VALUES("COL123456","Thesaurus on Philippine environment","Sebastian, Romeo A..","FIL GE 321 S45 2016","","","ESI Library - Filifiniana section","125");
INSERT INTO inventory VALUES("COLC123457","Thesaurus on Philippine environment","Sebastian, Romeo A..","FIL GE 321 S45 2016","","","ESI Library - Filifiniana section","126");



CREATE TABLE `lang` (
  `lang` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO lang VALUES("English","1");
INSERT INTO lang VALUES("Filipino","2");
INSERT INTO lang VALUES("Spanish","3");
INSERT INTO lang VALUES("Italian","4");
INSERT INTO lang VALUES("Latin","5");
INSERT INTO lang VALUES("French","6");
INSERT INTO lang VALUES("Nihongo","7");
INSERT INTO lang VALUES("Korean","8");



CREATE TABLE `lc_distribution` (
  `a` double DEFAULT NULL,
  `b` double DEFAULT NULL,
  `c` double DEFAULT NULL,
  `d` double DEFAULT NULL,
  `e` double DEFAULT NULL,
  `f` double DEFAULT NULL,
  `g` double DEFAULT NULL,
  `h` double DEFAULT NULL,
  `j` double DEFAULT NULL,
  `k` double DEFAULT NULL,
  `l` double DEFAULT NULL,
  `m` double DEFAULT NULL,
  `n` double DEFAULT NULL,
  `p` double DEFAULT NULL,
  `q` double DEFAULT NULL,
  `r` double DEFAULT NULL,
  `s` double DEFAULT NULL,
  `t` double DEFAULT NULL,
  `u` double DEFAULT NULL,
  `v` double DEFAULT NULL,
  `z` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `da_te` datetime DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO lc_distribution VALUES("0","0","2","0","0","0","0","0","0","0","68","0","0","0","0","0","0","0","0","2","0","4","2015-10-17 00:00:00","1");
INSERT INTO lc_distribution VALUES("0","0","2","0","0","0","0","0","0","0","68","0","0","0","0","0","0","0","0","2","0","4","2015-10-17 00:00:00","2");
INSERT INTO lc_distribution VALUES("0","0","2","0","0","0","0","0","0","0","68","0","0","0","0","0","0","0","0","2","0","4","2015-10-17 00:00:00","3");
INSERT INTO lc_distribution VALUES("0","0","2","0","0","0","0","0","0","0","68","0","0","0","0","0","0","0","0","2","0","4","2015-10-17 00:00:00","4");
INSERT INTO lc_distribution VALUES("0","0","2","0","0","0","0","0","0","0","68","0","0","0","0","0","0","0","0","2","0","4","2015-10-18 00:00:00","5");
INSERT INTO lc_distribution VALUES("0","0","50","0","0","0","0","0","0","0","1700","0","0","0","0","0","0","0","0","50","0","100","2015-10-18 00:00:00","6");
INSERT INTO lc_distribution VALUES("0","0","2","0","0","0","0","0","0","0","68","0","0","0","0","0","0","0","0","2","0","4","2015-10-18 00:00:00","7");
INSERT INTO lc_distribution VALUES("0","0","2","0","0","0","0","0","0","0","55","0","0","0","0","0","0","0","0","2","0","4","2015-10-28 00:00:00","8");



CREATE TABLE `lc_distribution_save` (
  `a` double DEFAULT NULL,
  `b` double DEFAULT NULL,
  `c` double DEFAULT NULL,
  `d` double DEFAULT NULL,
  `e` double DEFAULT NULL,
  `f` double DEFAULT NULL,
  `g` double DEFAULT NULL,
  `h` double DEFAULT NULL,
  `j` double DEFAULT NULL,
  `k` double DEFAULT NULL,
  `l` double DEFAULT NULL,
  `m` double DEFAULT NULL,
  `n` double DEFAULT NULL,
  `p` double DEFAULT NULL,
  `q` double DEFAULT NULL,
  `r` double DEFAULT NULL,
  `s` double DEFAULT NULL,
  `t` double DEFAULT NULL,
  `u` double DEFAULT NULL,
  `v` double DEFAULT NULL,
  `z` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `da_te` datetime DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `lcloan_save` (
  `A` double DEFAULT '0',
  `B` double DEFAULT '0',
  `C` double DEFAULT '0',
  `D` double DEFAULT '0',
  `E` double DEFAULT '0',
  `F` double DEFAULT '0',
  `G` double DEFAULT '0',
  `H` double DEFAULT '0',
  `J` double DEFAULT '0',
  `K` double DEFAULT '0',
  `L` double DEFAULT '0',
  `M` double DEFAULT '0',
  `N` double DEFAULT '0',
  `P` double DEFAULT '0',
  `Q` double DEFAULT '0',
  `R` double DEFAULT '0',
  `S` double DEFAULT '0',
  `T` double DEFAULT '0',
  `U` double DEFAULT '0',
  `V` double DEFAULT '0',
  `Z` double DEFAULT '0',
  `Fil` double DEFAULT '0',
  `Ref` double DEFAULT '0',
  `Total` double DEFAULT '0',
  `da_te` datetime DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO lcloan_save VALUES("0","0","0","0","0","1","3","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","4","2012-09-14 10:02:51","11");
INSERT INTO lcloan_save VALUES("0","0","0","0","0","1","3","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","4","2012-09-14 10:04:50","12");
INSERT INTO lcloan_save VALUES("0","0","0","0","0","1","4","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","5","2012-10-22 05:29:58","13");
INSERT INTO lcloan_save VALUES("0","0","0","0","0","1","4","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","5","2012-11-01 10:46:50","14");



CREATE TABLE `library` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Library_name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Heading` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Photo_hour` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `Photo_fine` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `Ov_cutoff` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `Ov_fine_hour` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `Network` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_open` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_closing` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Photo_path` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ov_fine_whole` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO library VALUES("1","High School Library","FEU HIGH SCHOOL LIBRARY","2","2","9:00am","5","LAN","7:00am","18:00pm","D:\Pictures\","50");
INSERT INTO library VALUES("2","Grade School Library","FEU HIGH SCHOOL LIBRARY","3","5","10:00am","5","LAN","8:00am","18:00pm","D:\Pictures\","100");
INSERT INTO library VALUES("3","College Library","FEU HIGH SCHOOL LIBRARY","3","5","10:00am","5","LAN","8:00am","18:00pm","D:\Pictures\","100");
INSERT INTO library VALUES("4","Internet","None","0","0","9:00am","3","","","","","50");
INSERT INTO library VALUES("5","Equipment","None","0","0","9:00am","5","","","","","50");
INSERT INTO library VALUES("6","Locker","None","0","0","9:00am","5","","","","","50");
INSERT INTO library VALUES("7","All Libraries","FEU HIGH SCHOOL LIBRARY","0","0","9:00am","5","LAN","7:00","17:00","D:\Pictures\","5");
INSERT INTO library VALUES("8","Discussion","FEU HIGH SCHOOL LIBRARY","0","0","9:00am","5","LAN","","","D:\Pictures\","50");
INSERT INTO library VALUES("9","eresources","None","0","0","","0","","","","D:\efile\","0");



CREATE TABLE `loan_save_stat` (
  `Seven` double DEFAULT '0',
  `Eight` double DEFAULT '0',
  `Nine` double DEFAULT '0',
  `Ten` double DEFAULT '0',
  `Eleven` double DEFAULT '0',
  `Twelve` double DEFAULT '0',
  `One` double DEFAULT '0',
  `Two` double DEFAULT '0',
  `Three` double DEFAULT '0',
  `Four` double DEFAULT '0',
  `Five` double DEFAULT '0',
  `Six` double DEFAULT '0',
  `Sevenpm` double DEFAULT '0',
  `Eightpm` double DEFAULT '0',
  `Ninepm` double DEFAULT '0',
  `Total` double DEFAULT '0',
  `Da_te` datetime DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO loan_save_stat VALUES("0","0","0","0","1","0","0","0","3","0","0","0","0","0","0","4","2010-08-17 00:00:00","4");
INSERT INTO loan_save_stat VALUES("0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","1","2010-08-16 00:00:00","2");
INSERT INTO loan_save_stat VALUES("0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","1","2010-08-16 00:00:00","3");
INSERT INTO loan_save_stat VALUES("0","2","0","2","2","0","0","0","3","0","0","0","0","0","0","9","2010-08-18 00:00:00","5");



CREATE TABLE `location` (
  `location` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO location VALUES("College Library","1");
INSERT INTO location VALUES("Grade School Library","2");
INSERT INTO location VALUES("High School Library","3");
INSERT INTO location VALUES("Pre-School Library","4");
INSERT INTO location VALUES("Senior High School Library","5");
INSERT INTO location VALUES("Graduate School Library","6");
INSERT INTO location VALUES("Junior High School Library","10");
INSERT INTO location VALUES("All libraries","9");



CREATE TABLE `locker` (
  `Locker` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Barcode` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO locker VALUES("Locker 1","001","1");
INSERT INTO locker VALUES("Locker 2","002","4");



CREATE TABLE `locker_accountability` (
  `Name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Client_ID` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Barcode` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Locker` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Time_borrowed` datetime DEFAULT NULL,
  `Time_due` datetime DEFAULT NULL,
  `Time_returned` datetime DEFAULT NULL,
  `Fine` double(6,2) DEFAULT NULL,
  `ID_record` float NOT NULL AUTO_INCREMENT,
  `Charger` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`ID_record`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `locker_backup_stat` (
  `Seven` double DEFAULT '0',
  `Eight` double DEFAULT '0',
  `Nine` double DEFAULT '0',
  `Ten` double DEFAULT '0',
  `Eleven` double DEFAULT '0',
  `Twelve` double DEFAULT '0',
  `One` double DEFAULT '0',
  `Two` double DEFAULT '0',
  `Three` double DEFAULT '0',
  `Four` double DEFAULT '0',
  `Five` double DEFAULT '0',
  `Six` double DEFAULT '0',
  `Sevenpm` double DEFAULT '0',
  `Eightpm` double DEFAULT '0',
  `Ninepm` double DEFAULT '0',
  `Total` double DEFAULT '0',
  `Da_te` datetime DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `locker_client` (
  `Name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Client_ID` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Level` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Barcode` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Locker` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `time_borrowed` datetime DEFAULT NULL,
  `time_due` datetime DEFAULT NULL,
  `time_returned` datetime DEFAULT NULL,
  `ID_record` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Charger` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`ID_record`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO locker_client VALUES("Sebastian, Romeo A.","700628","LMC-","002","Locker 2","2015-11-17 11:13:47","2015-11-17 12:00:00","","3","","RIZAL");
INSERT INTO locker_client VALUES("Sebastian, Romeo A., Faculty","1234567890","Faculty","001","Locker 1","2018-02-11 14:05:55","2018-02-11 16:05:55","","8","","");



CREATE TABLE `locker_history` (
  `Name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Client_ID` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Level` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `Barcode` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Locker` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Time_borrowed` datetime DEFAULT NULL,
  `Time_due` datetime DEFAULT NULL,
  `Time_returned` datetime DEFAULT NULL,
  `ID_record` bigint(20) NOT NULL AUTO_INCREMENT,
  `Charger` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`ID_record`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

INSERT INTO locker_history VALUES("Sebastian, Romeo A., Faculty","700628","Faculty","001","Locker 001","2015-07-14 07:04:22","2015-07-14 09:04:22","2015-07-23 21:03:53","15","");
INSERT INTO locker_history VALUES("Sebastian, Romeo A., Faculty","700628","Faculty","001","Locker 001","2015-08-01 10:00:23","2015-08-01 12:00:23","2015-08-01 10:00:27","14","");
INSERT INTO locker_history VALUES("Sebastian, Romeo A., Faculty","700628","Faculty","001","Locker 001","2015-07-23 21:04:38","2015-07-23 23:04:38","2015-07-31 12:47:09","16","");
INSERT INTO locker_history VALUES("Sebastian, Romeo A.","1234567890","LMC-","001","Locker 1","2015-11-22 22:13:24","2015-11-22 02:00:00","2018-02-11 14:05:44","17","");



CREATE TABLE `locker_overdue` (
  `ID_record` bigint(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_id` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `overdue` double DEFAULT '0',
  `paid` varchar(25) COLLATE utf8_unicode_ci DEFAULT '0',
  `date_payment` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_record`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO locker_overdue VALUES("1","NATSUME, ELISHA LOUISE, 201320141ST - 3RD - BSCDE","2011000735","204","No","");
INSERT INTO locker_overdue VALUES("2","Sebastian, Romeo A., Faculty","700628","","No","");
INSERT INTO locker_overdue VALUES("3","Sebastian, Romeo A., Faculty","700628","","No","");
INSERT INTO locker_overdue VALUES("4","Sebastian, Romeo A., Faculty","700628","","No","");
INSERT INTO locker_overdue VALUES("5","Sebastian, Romeo A., Faculty","700628","","No","");
INSERT INTO locker_overdue VALUES("6","Sebastian, Romeo A., Faculty","700628","","No","");
INSERT INTO locker_overdue VALUES("7","Sebastian, Romeo A., Faculty","700628","","No","");
INSERT INTO locker_overdue VALUES("8","Sebastian, Romeo A., Faculty","700628","","No","");
INSERT INTO locker_overdue VALUES("9","Sebastian, Romeo A., Faculty","700628","","No","");
INSERT INTO locker_overdue VALUES("10","Sebastian, Romeo A.","1234567890","","No","");



CREATE TABLE `locker_temp_overdue` (
  `Name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Client_ID` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Overdue` double(6,2) DEFAULT NULL,
  `Paid` char(5) CHARACTER SET latin1 DEFAULT NULL,
  `Date_payment` datetime DEFAULT NULL,
  `ID_record` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_record`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `locker_userstat` (
  `Seven` double DEFAULT '0',
  `Eight` double DEFAULT '0',
  `Nine` double DEFAULT '0',
  `Ten` double DEFAULT '0',
  `Eleven` double DEFAULT '0',
  `Twelve` double DEFAULT '0',
  `One` double DEFAULT '0',
  `Two` double DEFAULT '0',
  `Three` double DEFAULT '0',
  `Four` double DEFAULT '0',
  `Five` double DEFAULT '0',
  `Six` double DEFAULT '0',
  `Sevenpm` double DEFAULT '0',
  `Eightpm` double DEFAULT '0',
  `Ninepm` double DEFAULT '0',
  `Total` double DEFAULT '0',
  `ID` float NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `userstat_pk` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO locker_userstat VALUES("1","0","0","1","0","0","1","1","2","5","0","0","0","1","1","13","1");



CREATE TABLE `logfile` (
  `Da_te` datetime DEFAULT NULL,
  `User_Name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `logfile_pk` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=766 DEFAULT CHARSET=utf8;

INSERT INTO logfile VALUES("2018-07-04 00:00:00","rizal","676");
INSERT INTO logfile VALUES("2018-07-04 00:00:00","rizal","677");
INSERT INTO logfile VALUES("2018-07-04 00:00:00","rizal","678");
INSERT INTO logfile VALUES("2018-07-04 00:00:00","rizal","679");
INSERT INTO logfile VALUES("2018-07-04 00:00:00","rizal","680");
INSERT INTO logfile VALUES("2018-07-04 00:00:00","rizal","681");
INSERT INTO logfile VALUES("2018-07-04 00:00:00","rizal","682");
INSERT INTO logfile VALUES("2018-07-04 00:00:00","rizal","683");
INSERT INTO logfile VALUES("2018-07-04 00:00:00","rizal","684");
INSERT INTO logfile VALUES("2018-07-04 00:00:00","rizal","685");
INSERT INTO logfile VALUES("2018-07-04 00:00:00","rizal","686");
INSERT INTO logfile VALUES("2018-07-04 00:00:00","rizal","687");
INSERT INTO logfile VALUES("2018-07-04 00:00:00","rizal","688");
INSERT INTO logfile VALUES("2018-07-04 00:00:00","rizal","689");
INSERT INTO logfile VALUES("2018-07-04 00:00:00","rizal","690");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","691");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","692");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","693");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","694");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","695");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","696");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","697");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","698");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","699");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","700");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","701");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","702");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","703");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","704");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","705");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","706");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","707");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","708");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","709");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","710");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","711");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","712");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","713");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","714");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","715");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","716");
INSERT INTO logfile VALUES("2018-07-05 00:00:00","rizal","717");
INSERT INTO logfile VALUES("2018-07-06 00:00:00","rizal","718");
INSERT INTO logfile VALUES("2018-07-06 00:00:00","rizal","719");
INSERT INTO logfile VALUES("2018-07-06 00:00:00","rizal","720");
INSERT INTO logfile VALUES("2018-07-07 00:00:00","rizal","721");
INSERT INTO logfile VALUES("2018-07-07 00:00:00","rizal","722");
INSERT INTO logfile VALUES("2018-07-07 00:00:00","rizal","723");
INSERT INTO logfile VALUES("2018-07-07 00:00:00","rizal","724");
INSERT INTO logfile VALUES("2018-07-07 00:00:00","rizal","725");
INSERT INTO logfile VALUES("2018-07-07 00:00:00","rizal","726");
INSERT INTO logfile VALUES("2018-07-07 00:00:00","rizal","727");
INSERT INTO logfile VALUES("2018-07-07 00:00:00","rizal","728");
INSERT INTO logfile VALUES("2018-07-07 00:00:00","rizal","729");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","730");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","731");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","732");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","733");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","734");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","735");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","736");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","737");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","738");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","739");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","740");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","741");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","742");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","743");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","744");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","745");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","746");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","747");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","748");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","749");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","750");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","751");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","752");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","753");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","754");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","755");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","756");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","757");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","758");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","759");
INSERT INTO logfile VALUES("2018-07-08 00:00:00","rizal","760");
INSERT INTO logfile VALUES("2018-07-25 00:00:00","rizal","761");
INSERT INTO logfile VALUES("2018-08-09 00:00:00","rizal","762");
INSERT INTO logfile VALUES("2018-08-27 00:00:00","rizal","763");
INSERT INTO logfile VALUES("2018-10-11 00:00:00","rizal","764");
INSERT INTO logfile VALUES("2019-03-28 00:00:00","rizal","765");



CREATE TABLE `lost_archive` (
  `ID_Number` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `Accession_number` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Date_Borrowed` datetime DEFAULT NULL,
  `Due_date` datetime DEFAULT NULL,
  `Date_returned` datetime DEFAULT NULL,
  `Overdue` double DEFAULT '0',
  `Type` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Date_settled` datetime DEFAULT NULL,
  `Remarks` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `charger` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `call_number` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `library` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  KEY `borrower_id_number_dup_idx` (`ID_Number`),
  KEY `borrower_accession_dup_idx` (`Accession_number`),
  KEY `borrower_title_dup_idx` (`Title`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO lost_archive VALUES("700391","1101058968","Thesaurus on Philippine environment","2009-12-23 00:00:00","2009-12-23 00:00:00","2009-12-23 00:00:00","0","Book","2009-12-23 00:00:00","settled","","","","1");
INSERT INTO lost_archive VALUES("700629","T00001","Adult teaching and learning in Miriam College : a validation through the introduction of the Air Care Program","2009-12-20 00:00:00","2009-12-28 00:00:00","2009-12-22 00:00:00","0","Thesis","2009-12-23 00:00:00","settled","","","","2");
INSERT INTO lost_archive VALUES("8446805","000007","Thesaurus on Philippineenvironment","2012-01-31 00:00:00","2012-02-04 00:00:00","2012-02-26 00:00:00","0","Book (FIL REF}","2012-02-26 00:00:00","","platonixz","800 S45 2011","Research","3");
INSERT INTO lost_archive VALUES("700628","VR100100","video title","2014-06-08 00:00:00","2014-06-09 00:00:00","2014-06-08 00:00:00","0","Video","2014-06-08 00:00:00","","rizal","encoding format","General reference","4");
INSERT INTO lost_archive VALUES("700628","VR100100","video title","2014-06-08 00:00:00","2014-06-09 00:00:00","2014-06-08 00:00:00","0","Video","2014-06-08 00:00:00","","rizal","encoding format","General reference","5");
INSERT INTO lost_archive VALUES("1234567890","HS000508","Dirty litte secret","2016-07-15 00:00:00","2016-07-15 00:00:00","2016-07-15 00:00:00","0","Book (FIC}","2016-07-15 00:00:00","","rizal","Om56 2010","High School Library","6");



CREATE TABLE `museum` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` varchar(8000) CHARACTER SET latin1 DEFAULT NULL,
  `museumID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`museumID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO museum VALUES("Las Meninas","<001>Las Meninas<002>artist`s title<003>The Maids in Waiting<004>Rattus rattus<005>taxonomic<006>Jones, RJ<007>A1234<008>Accession number<009>1970<0010>Leeds<0011>7/6/2007<0012>Grindley<0013>designer, manufacturer<0014>Nebraska<0015>c.1900<0016>Zulu<0017>User<0018>ceremonial<0019>Nebraska<0020>3/1/2007<0021>Smith, C.S.<0022>excavation<0023>Wright, DG<0024>Allen, A.<0025>4/19/2007<0026>E1324.1994<0027>loan<0028>Lopez Museum<0029>4/21/2007<0030>exhibit<0031>room 3/bay1/rack5<0032>Gift<0033>4/14/2007<0034>The Smith Corporation, New York<0035>Fair<0036>hairing cracks in bowl, repairs to base<0037>6/16/2007<0038>Smithsoniam Institution<0039>National Museum of American History<0040>12th Street at Constitution Avenue, Washing DC 20560<0041>United States of America<0042>1991.234<0043>conservation file<0044>1.25 cm in length; pale blue with small darker blue markings evenly spread<0045>type<0046>digital<0047>765123.23<0048>height<0049>23<0050>cm<0051>figure exclusing mount<0052>SI DEVS NOSBISCVM QVIS CONTRA NOS<0053>inscription<0054>Capital A in a circle with a line underneath<0055>engraved<0056>bowl, under rim<0057>Latin<0058>If  God be with us, who shall be against us<0059>cotton<0060>embroidered<0061>whole<0062>Restrictions apply to UK use only<0063>Wellcome Trust<0064>7/10/2007<0065>7/4/2007<0066>transfer<0067>The Henley Rowing Museum<0068>32<0069>8 panels, 16 feet, 8 hangings<0070>seascape<0071>beach and sea near a town with sailing boats on rough sea<0072>Legrand, M.<0073>7/25/2007<0074>Delahaye, F.<0075>D:myRizalPicturesLas_meninas.jpg<0076>","7");
INSERT INTO museum VALUES("xx","<001>xx<002>xx<003><004><005><006><007><008><009><0010><0011><0012><0013><0014><0015><0016><0017><0018><0019><0020><0021><0022><0023><0024><0025><0026><0027><0028><0029><0030><0031><0032><0033><0034><0035><0036><0037><0038><0039><0040><0041><0042><0043><0044><0045><0046><0047><0048><0049><0050><0051><0052><0053><0054><0055><0056><0057><0058><0059><0060><0061><0062><0063><0064><0065><0066><0067><0068><0069><0070><0071><0072><0073><0074><0075>","8");
INSERT INTO museum VALUES("","<001>title<002><003><004><005><006><007><008><009><0010><0011><0012><0013><0014><0015><0016><0017><0018><0019><0020><0021><0022><0023><0024><0025><0026><0027><0028><0029><0030><0031><0032><0033><0034><0035><0036><0037><0038><0039><0040><0041><0042><0043><0044><0045><0046><0047><0048><0049><0050><0051><0052><0053><0054><0055><0056><0057><0058><0059><0060><0061><0062><0063><0064><0065><0066><0067><0068><0069><0070><0071><0072><0073><0074><0075><0076>","9");
INSERT INTO museum VALUES("","<001>title<002><003><004><005><006><007><008><009><0010><0011><0012><0013><0014><0015><0016><0017><0018><0019><0020><0021><0022><0023><0024><0025><0026><0027><0028><0029><0030><0031><0032><0033><0034><0035><0036><0037><0038><0039><0040><0041><0042><0043><0044><0045><0046><0047><0048><0049><0050><0051><0052><0053><0054><0055><0056><0057><0058><0059><0060><0061><0062><0063><0064><0065><0066><0067><0068><0069><0070><0071><0072><0073><0074><0075><0076>","10");



CREATE TABLE `newequipment` (
  `Description` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `accessories` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `brand` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `model` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `location` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `date_acquisition` datetime DEFAULT NULL,
  `mode_acquisition` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `price` float(10,2) DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `SN` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Barcode` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ctl_number` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Accountable` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eqID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`eqID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

INSERT INTO newequipment VALUES("LCD Projector","accessories","brand name","model","location","On-shelf; last borrower: 0009743759","2014-07-30 00:00:00","Purchase","0.00","remarks; last inventory date: 8/13/2014 9:12:12 PM","1234567890","1111000991","it control number","person","1");



CREATE TABLE `other_materials` (
  `fil` double DEFAULT NULL,
  `ref` double DEFAULT NULL,
  `res` double DEFAULT NULL,
  `bio` double DEFAULT NULL,
  `easy` double DEFAULT NULL,
  `fic` double DEFAULT NULL,
  `gc` double DEFAULT NULL,
  `circ` double DEFAULT NULL,
  `tr` double DEFAULT NULL,
  `fr` double DEFAULT NULL,
  `sp` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `id` float NOT NULL AUTO_INCREMENT,
  `schl` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `other_materials_analysis` (
  `fil` double DEFAULT NULL,
  `ref` double DEFAULT NULL,
  `res` double DEFAULT NULL,
  `fic` double DEFAULT NULL,
  `bio` double DEFAULT NULL,
  `easy` double DEFAULT NULL,
  `circ` double DEFAULT NULL,
  `gc` double DEFAULT NULL,
  `tr` double DEFAULT NULL,
  `fr` double DEFAULT NULL,
  `sp` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `id` float NOT NULL AUTO_INCREMENT,
  `schl` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `other_materials_loan` (
  `Fil` double DEFAULT '0',
  `Ref` double DEFAULT '0',
  `Fic` double DEFAULT '0',
  `PB` double DEFAULT '0',
  `Txt` double DEFAULT '0',
  `Cur` double DEFAULT '0',
  `Bio` double DEFAULT '0',
  `CF` double DEFAULT '0',
  `CNF` double DEFAULT '0',
  `Easy` double DEFAULT '0',
  `Folio` double DEFAULT '0',
  `Pap` double DEFAULT '0',
  `RF` double DEFAULT '0',
  `TR` double DEFAULT '0',
  `FR` double DEFAULT '0',
  `Res` double DEFAULT '0',
  `Others` double DEFAULT '0',
  `Total` double DEFAULT '0',
  `GC` double DEFAULT '0',
  `Circ` double DEFAULT '0',
  `SP` double DEFAULT '0',
  `ID` float NOT NULL AUTO_INCREMENT,
  `Schl` double DEFAULT '0',
  `sm` double DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO other_materials_loan VALUES("7","19","30","0","0","0","0","0","0","0","0","0","0","10","0","0","169","279","0","0","9","1","20","0");



CREATE TABLE `other_materials_loan_save` (
  `FIL` double DEFAULT NULL,
  `REF` double DEFAULT NULL,
  `BIO` double DEFAULT NULL,
  `FIC` double DEFAULT NULL,
  `RES` double DEFAULT NULL,
  `CIRC` double DEFAULT NULL,
  `GC` double DEFAULT NULL,
  `TR` double DEFAULT NULL,
  `FR` double DEFAULT NULL,
  `SP` double DEFAULT NULL,
  `EASY` double DEFAULT NULL,
  `THESIS` double DEFAULT NULL,
  `TOTAL` double DEFAULT NULL,
  `Da_te` datetime DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  `SCHL` double DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO other_materials_loan_save VALUES("0","0","0","0","0","0","0","0","0","0","0","","0","2012-11-01 14:55:49","2","");
INSERT INTO other_materials_loan_save VALUES("0","0","0","0","0","0","0","0","0","0","0","","0","2012-11-01 20:32:05","3","");



CREATE TABLE `outside_user` (
  `Name` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `Institution` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Contact` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `Topic` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `Fee` smallint(6) DEFAULT NULL,
  `Date_of_visit` datetime DEFAULT NULL,
  `Remarks` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO outside_user VALUES("Arambulo, Marcus","UP","12445556","Information technolgy","50","2014-07-16 00:00:00","okay lang","1");



CREATE TABLE `overdue` (
  `Name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Client_ID` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Overdue` double(5,2) DEFAULT NULL,
  `Paid` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `Date_Payment` datetime DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO overdue VALUES("Sebastian, Romeo A., Faculty","700628","","No","","1");
INSERT INTO overdue VALUES("Sebastian, Romeo A.","1234567890","","No","","2");
INSERT INTO overdue VALUES("Sebastian, Romeo A.","1234567890","","No","","3");



CREATE TABLE `overduecharge` (
  `OvedueCharge` double DEFAULT NULL,
  `Overnight` double DEFAULT NULL,
  `Faculty` smallint(6) DEFAULT '0',
  `Admin` smallint(6) DEFAULT '0',
  `Student` smallint(6) DEFAULT '0',
  `Staff` smallint(6) DEFAULT '0',
  `Personnel` smallint(6) DEFAULT '0',
  `Grade_school` smallint(6) DEFAULT '0',
  `High_school` smallint(6) DEFAULT '0',
  `Supervisor` smallint(6) DEFAULT '0',
  `LocalHeading` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Classification` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `Heading` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Monday` char(5) CHARACTER SET latin1 DEFAULT NULL,
  `Saturday` char(5) CHARACTER SET latin1 DEFAULT NULL,
  `Sunday` char(5) CHARACTER SET latin1 DEFAULT NULL,
  `Friday` char(5) CHARACTER SET latin1 DEFAULT NULL,
  `ResDueTime` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `PerHour` double DEFAULT NULL,
  `MaxTime` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `HSFine` double DEFAULT NULL,
  `GSFine` double DEFAULT NULL,
  `FacFine` double DEFAULT NULL,
  `ColFine` double DEFAULT NULL,
  `Receipt` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO overduecharge VALUES("5","50","10","5","5","5","2","2","2","2","D:\Pictures\","2","SCHOOL OF SAINT SEBASTIAN LIBRARY","False","True","True","False","9:00am","2","18:00pm","2","1","10","5","","1");



CREATE TABLE `password` (
  `Password` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `password_pk` (`ID`),
  KEY `password_pwd_dup_idx` (`Password`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO password VALUES("edwin","1");



CREATE TABLE `payment` (
  `Name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `DateBorrowed` datetime DEFAULT NULL,
  `DateDue` datetime DEFAULT NULL,
  `DateReturned` datetime DEFAULT NULL,
  `Amount` float(10,2) DEFAULT '0.00',
  `charger` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `OR_number` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_number` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO payment VALUES("Sebastian, Romeo A.","","","2015-07-31 00:00:00","185.00","rizal","no data","700628","3");
INSERT INTO payment VALUES("Sebastian, Romeo A.","","","2015-09-19 00:00:00","10.00","rizal","","","5");
INSERT INTO payment VALUES("Santos, Ramon C.","","","2016-01-31 00:00:00","11865.00","rizal","1234","2011000978","6");
INSERT INTO payment VALUES("Sebastian, Romeo A.","","","2016-02-28 00:00:00","200.00","RIZAL","1234","1234567890","7");
INSERT INTO payment VALUES("Sebastian, Romeo A.","","","2017-02-28 00:00:00","2366.00","rizal","","","8");
INSERT INTO payment VALUES("Sebastian, Romeo A.","","","2017-06-28 00:00:00","725.00","rizal","1234455","1234567890","9");
INSERT INTO payment VALUES("Sebastian, Romeo A.","","","2017-07-12 00:00:00","1080.00","rizal","1414124","1234567890","10");
INSERT INTO payment VALUES("Sebastian, Romeo A.","","","2017-07-23 00:00:00","40.00","rizal","11313","1234567890","11");
INSERT INTO payment VALUES("Sebastian, Romeo A.","","","2017-08-03 00:00:00","1090.00","rizal","1111","1234567890","12");
INSERT INTO payment VALUES("Sebastian, Romeo A.","","","2018-02-06 00:00:00","2435.00","rizal","12344","1234567890","13");
INSERT INTO payment VALUES("Sebastian, Romeo A.","","","2018-02-11 00:00:00","480.00","RIZAL","123424","1234567890","14");
INSERT INTO payment VALUES("Sebastian, Romeo A.","","","2018-03-23 00:00:00","130.00","rizal","123","1234567890","15");
INSERT INTO payment VALUES("Sebastian, Romeo A.","","","2018-05-24 00:00:00","195.00","rizal","123456","1234567890","16");
INSERT INTO payment VALUES("Sebastian, Romeo A.","","","2018-08-27 00:00:00","1395.00","rizal","1234","1234567890","17");



CREATE TABLE `payment1` (
  `Name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DatePayment` datetime DEFAULT NULL,
  `Amount` float DEFAULT NULL,
  `Charger` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_number` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `OR_number` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO payment1 VALUES("Sebastian, ROMEO A","2013-02-07 00:00:00","5320","","1","2","");
INSERT INTO payment1 VALUES("Sebastian, ROMEO A","2013-03-12 00:00:00","190","romeo","","3","");
INSERT INTO payment1 VALUES("MABAGOS, FRANCIS JOSEPH GERARD ISIDRO","2013-04-15 00:00:00","5","kiko","","4","");
INSERT INTO payment1 VALUES("MABAGOS, FRANCIS JOSEPH GERARD ISIDRO","2013-04-15 00:00:00","5","kiko","","5","");
INSERT INTO payment1 VALUES("MABAGOS, FRANCIS JOSEPH GERARD ISIDRO","2013-07-04 00:00:00","5","romeo","","6","");
INSERT INTO payment1 VALUES("MABAGOS, FRANCIS JOSEPH GERARD ISIDRO","2013-07-09 00:00:00","200","romeo","701976","7","");
INSERT INTO payment1 VALUES("MABAGOS, FRANCIS JOSEPH GERARD ISIDRO","2013-07-09 00:00:00","150","romeo","701976","8","");
INSERT INTO payment1 VALUES("Sebastian, Romeo A.","2013-07-16 00:00:00","410","romeo","700628","9","");
INSERT INTO payment1 VALUES("PACTOR, JENNY BEE DELAS ARMAS","2013-07-17 00:00:00","100","romeo","700757","10","123456");
INSERT INTO payment1 VALUES("MABAGOS, FRANCIS JOSEPH GERARD","2013-07-19 00:00:00","100","jun1","701976","11","12345");
INSERT INTO payment1 VALUES("Sebastian, Romeo A.","2015-07-31 00:00:00","0","rizal","700628","12","na");



CREATE TABLE `periodical` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` varchar(16000) CHARACTER SET latin1 DEFAULT NULL,
  `prID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`prID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO periodical VALUES("Information empowers","<001>Information empowers<002>Sebastian, Romeo<003>Peoples Tonigh<004>1<005>1<006>Mr 19, 2012<007>2-3<008>Featured article<009>English<0010>Per section<0011><0012>Environmental degradation; Natural hazards<0013>","1");



CREATE TABLE `periodical5` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` text CHARACTER SET latin1,
  `prID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`prID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `periodical_bound` (
  `Title` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `Volume` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Number` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Month_Year` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `Color` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Description` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Status` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Remarks` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `periodicaluse` (
  `Student` smallint(6) DEFAULT '0',
  `Faculty` smallint(6) DEFAULT '0',
  `Others` smallint(6) DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO periodicaluse VALUES("149","57","1","1");



CREATE TABLE `prefix` (
  `prefix` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

INSERT INTO prefix VALUES("CIR","1");
INSERT INTO prefix VALUES("EASY","2");
INSERT INTO prefix VALUES("FIC","3");
INSERT INTO prefix VALUES("FIL","4");
INSERT INTO prefix VALUES("REF","5");
INSERT INTO prefix VALUES("RES","6");
INSERT INTO prefix VALUES("BIO","7");
INSERT INTO prefix VALUES("SP","8");
INSERT INTO prefix VALUES("FOLIO","9");
INSERT INTO prefix VALUES("PB","10");
INSERT INTO prefix VALUES("DVD","11");
INSERT INTO prefix VALUES("VCD","12");
INSERT INTO prefix VALUES("VHS","13");
INSERT INTO prefix VALUES("VYNIL RECORD","15");
INSERT INTO prefix VALUES("MICROFICHE","16");
INSERT INTO prefix VALUES("CD-ROM","17");
INSERT INTO prefix VALUES("MICROFILM","18");
INSERT INTO prefix VALUES("SCH","19");
INSERT INTO prefix VALUES("LASER DISC","20");
INSERT INTO prefix VALUES("MAP","23");
INSERT INTO prefix VALUES("TRANSPARENCY","24");
INSERT INTO prefix VALUES("SLIDE","25");
INSERT INTO prefix VALUES("GAME","27");
INSERT INTO prefix VALUES("KIT","28");
INSERT INTO prefix VALUES("TREF","29");



CREATE TABLE `printbook` (
  `Biblio` text CHARACTER SET latin1,
  `call` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Type` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `ID` int(11) DEFAULT '0',
  `MFN` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`MFN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `recordmanagement` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` varchar(8000) CHARACTER SET latin1 DEFAULT NULL,
  `rmID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`rmID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO recordmanagement VALUES("Archives and Records Section","<001>FL000001<002>Government of Canada Records Management Metadata Standard<003>Archives and Records Section<004>Metadata standard; Record management<005>The Government of Canada Records Management Metadata Standard (GC RMMS) declares and defines the semantics of a core set of metadata elements necessary to ensure the authenticity, reliability, integrity and usability of records as espoused by ISO International Standard 15489-1 and ISO Technical Specification<006>Agency registration<007>English<008>Classified<009>Jam Byy<0010>Senatong<0011>4/19/2007<0012>3/25/2008<0013>3/5/2008<0014>3/19/2008<0015>3/13/2008<0016>3/24/2008<0017>File<0018>Secretariat<0019>Document on bills<0020>Brochure<0021>3/25/2008<0022>3/29/2008<0023>PDF<0024>Recycle<0025>Record Center<0026>none<0027>not applicable<0028>Vital link<0029>3/25/2008<0030>no idea whatsoever<0031>Ministerial<0032>141443EE<0033>Biils<0034>Managers, supervisor<0035>Box<0036>Record center<0037>Senate<0038>2000-2005<0039>Locked for any changes.<0040>Lower Hosue<0041>2005<0042>Program closed<0043>3/27/2008<0044>Administrator<0045>Restricted<0046>Nothing<0047>Sargeant at Arms<0048>Senate of the Philippines<0049>No idea<0050>Ask for clearance<0051>C:\myRizal\Doc\PDF\StateWorldPop\notes.pdf<0052>ras<0053>3/31/2008<0054>3/13/2008","7");



CREATE TABLE `referral` (
  `DateIssued` datetime DEFAULT NULL,
  `Name` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `Research_topic` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `Address` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `Library` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO referral VALUES("2014-07-07 00:00:00","Emylene DA. Buenaluz","Intellectual Property Rights in the Philippines","MS. LOURDES DAVID; Director; Rizal Library; Ateneo De Manila University; Katipunan Avenue, Quezon City","Ateneo De Manila University Rizal Library","1");



CREATE TABLE `renewal` (
  `Code` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `Date_order` datetime DEFAULT NULL,
  `Period` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Amount` double DEFAULT NULL,
  `Source` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Remarks` varchar(245) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO renewal VALUES("1234-5678","2012-09-12 00:00:00","Jan-Dec 2012","1000","UMX","","1");
INSERT INTO renewal VALUES("0010-3519","2013-02-27 00:00:00","2013","4800","UMX","","2");
INSERT INTO renewal VALUES("0034-0383","2013-09-26 00:00:00","Oct. 2013-Sept 2014","1776","UMX","renewal covering Date Oct. 2013-Sept 2014","3");



CREATE TABLE `requisition` (
  `Author` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Title` varchar(245) CHARACTER SET latin1 DEFAULT NULL,
  `Publisher` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Copyright` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Edition` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Copy` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `Dealer` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Price` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Recommendee` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Department` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Dept_head` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Date_requested` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Date_ordered` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO requisition VALUES("Sebastian, Romeo","Thesaurus on Banking and Finance","Bookmark","2005","2nd","1","JNJ","100.00","Gally","Communicaton Arts (CAS)","chair","12/5/2015 9:30:32 PM","","1");
INSERT INTO requisition VALUES("Sebastian, Romeo","Thesaurus on Banking and Finance","Bookmark","2005","2nd","1","JNJ","100.00","Gally","Communicaton Arts (CAS)","chair","12/5/2015 9:31:13 PM","","2");



CREATE TABLE `reservation` (
  `IDnumber` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Accession` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Type` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `DateReserved` datetime DEFAULT NULL,
  `DateExpired` datetime DEFAULT NULL,
  `Claimed` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `Call_number` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `MFN` float NOT NULL AUTO_INCREMENT,
  `Charger` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MFN`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO reservation VALUES("1234567890","Sebastian, Romeo A.","006011","Thesaurus on Philippine environment : an indexing language   : compiled by Romeo A. Sebastian ... [et al.]; edited by Milagros Serrana and Rosario Wood","book","2016-09-12 22:24:57","2016-09-26 17:00:00","No","FIL GE 123 S45 2012","1","abram");
INSERT INTO reservation VALUES("1234567890","Sebastian, Romeo A.","006012","Thesaurus on Philippine environment : an indexing language   : compiled by Romeo A. Sebastian ... [et al.]; edited by Milagros Serrana and Rosario Wood","book","2016-09-21 22:18:13","2016-09-21 18:00:00","No","FIL GE 123 S45 2012","2","rizal");



CREATE TABLE `resource` (
  `Title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Maintext` varchar(1800) CHARACTER SET latin1 DEFAULT NULL,
  `Fil` smallint(5) NOT NULL DEFAULT '0',
  `Ref` smallint(5) NOT NULL DEFAULT '0',
  `Bio` smallint(5) NOT NULL DEFAULT '0',
  `Fic` smallint(5) NOT NULL DEFAULT '0',
  `Res` smallint(5) NOT NULL DEFAULT '0',
  `Copy` smallint(5) NOT NULL DEFAULT '1',
  `Inn` smallint(6) NOT NULL DEFAULT '1',
  `t_out` smallint(6) NOT NULL DEFAULT '0',
  `t_timesout` smallint(6) NOT NULL DEFAULT '0',
  `sm` smallint(6) NOT NULL DEFAULT '0',
  `entered_by` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `tm` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_by` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gc` smallint(6) NOT NULL DEFAULT '0',
  `tr` smallint(6) NOT NULL DEFAULT '0',
  `easy` smallint(6) NOT NULL DEFAULT '0',
  `circ` smallint(6) NOT NULL DEFAULT '0',
  `fr` smallint(6) NOT NULL DEFAULT '0',
  `image` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `volumeID` int(11) DEFAULT NULL,
  `schl` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO resource VALUES("Thesaurus on Philippine literature","<001>Thesaurus on Philippine literature<002>Sebastian, Romeo A.; Buenaluz, Emylene D.<003>University of the Philippines.  Institute of Library Science<004>Master of Library Science<005>2000<006>120 p.<007>PL THE SEB 1991<008>T000001<009>English<0010>High school library<0011>Electronic access<0012>Thesauri; Philippine literature -- Dictionary<0013>The quick brown fox jump over the young lazy dog.  The quick brown fox jump over the young lazy dog.<0014>1<0015>1<0016>0<0017>Special problem<0018>2","0","0","0","0","0","1","1","0","2","0","platonixz","2012-10-17 04:16:27","2012-12-04 02:35:11","td","rizale","0","0","0","0","0","","1","","0");
INSERT INTO resource VALUES("Beatles","<001>Beatles<002>Rarity<003>parallel<004>Lennon, John<005><006>Star, Ringo<007><008>Parlophone<009>place<0010>publisher<0011>year<0012>edition<0013>tera<0014>description<0015>supp<0016>series<0017>gen notes<0018>isban<0019>Audio recording<0020>topical<0021>personal<0022>corporate<0023>geographic<0024>CHART<0025>123 456 789<0026>accession<0027>language<0028>College library<0029>electr<0030>1<0031>1<0032>0<0033><0034><0035><0036>0<0037>uniform","0","0","0","0","0","1","1","0","0","0","platonixz","2012-10-14 11:50:45","2012-11-18 03:38:09","av","rizale","0","0","0","0","0","","3","","0");
INSERT INTO resource VALUES("Information empowers!","<001>Information empowers!<002>Sebastian, Romeo A.<003>People`s Tonight<004>03<005>19<006>1962<007>10<008>Article<009>English<0010>Periodical section<0011>E-access<0012>Natural disasters; Environmental degradation; Information dissimination<0013>Abstracts","0","0","0","0","0","1","1","0","0","0","platonixz","2012-10-15 05:35:25","2012-10-20 19:48:27","pr","platonixz","0","0","0","0","0","","4","","0");
INSERT INTO resource VALUES("State of the cybercrime law in the Philippines","<001>State of the cybercrime law in the Philippines<002>Buenaluz, Emylene D.A.<003>Philippine Law Books<004>Arambulo, Marcus<005>Quezon City<006>UP Press<007>2012<008>30-35<009>English<0010>KF 123 B143 2012<0011>Grade school library<0012>C:\Music\Christmas\YoureAllWantForChristmas.mp3<0013>Philippines -- Law and legislation; Cybercrime -- Law and legislation<0014>The quick bronw fox jump over the young lazy dog.","0","0","0","0","0","1","1","0","0","0","platonixz","2012-10-19 21:57:11","2012-10-27 22:34:55","ba","platonixz","0","0","0","0","0","","5","","0");
INSERT INTO resource VALUES("Environmenal education","<001>Environmenal education<002>author<003>source<004>date<005>ref code<006>description<007>Annual report<008>location<009>copy<0010>access<0011>keywords<0012>abstracts","0","0","0","0","0","1","1","0","0","0","platonixz","2012-10-19 22:50:51","2012-10-21 05:30:04","vf","platonixz","0","0","0","0","0","","6","","0");
INSERT INTO resource VALUES("Journal of Environmental education","<001>Journal of Environmental education<002>place<003>publisher<004>freq<005>latest<006>notes<007>holdings<008>topical<009>BIO<0010>call number<0011>issn<0012>Periodical<0013>location<0014>se123462<0015>desc<0016>corporate<0017>access","0","0","0","0","0","1","1","0","0","0","platonixz","2012-10-20 00:01:07","2012-12-04 11:43:07","se","rizale","0","0","0","0","0","","7","","0");
INSERT INTO resource VALUES("Thesaurus on Philippine literature","<001>Thesaurus on Philippine literature<002>otheer information<003>variant title<004>responsibility<005>designation of edition<006>responsibility to edition<007>New York / London / Victoria (AU)<008>publisher name<009>date of publication not identified<0010>mode<0011>copyright<0012>ISBN 978-0-7890-3026-9  /  ISBN 0-7890-3026-8 / ISBN 978-0-7890-3027-6 (paperback) / ISBN 0-7890-3027-6 (paperback)<0013>media type<0014>carrier type<0015>extent of text<0016>dimension<0017>contact<0018>content<0019>creator<0020>contributor<0021>related manifestation<0022>accession<0023>electronic access<0024>title preoof serive<0025>supplementary content<0026>work manifested<0027>related work<0028>language content<0029>Illustrations<0030>supplementary content","0","0","0","0","0","1","1","0","0","0","","","","er","","0","0","0","0","0","","31","","0");
INSERT INTO resource VALUES("The organization of information","<001>The organization of information<002>proceedings of the European Conference on Encoded Archival Description and Context (EAD and EAC), Paris, France, 7-8 October 2004<003>Proceedings of the European Conference on Encoded Archival Description and Context (EAD and EAC), Paris, France, 7-8 October 2004<004>Bill Stockting, Fabienne Queyroux, editors<005>designation of edition<006>responsibility to edition<007>New York / London / Victoria (AU)<008>The Haworth Information Press, an imprint of The Haworth Press, Inc.<009>date of publication not identified<0010>single unit<0011>©2005<0012>ISBN 978-0-7890-3026-9  /  ISBN 0-7890-3026-8 / ISBN 978-0-7890-3027-6 (paperback) / ISBN 0-7890-3027-6 (paperback)<0013>unmediated<0014>volume<0015>286 pages<0016>22 cm<0017>http://www.HaworthPress.com<0018>text<0019>European Conference on Encoded Archival Description and Context (EAD and EAC) (2004 : Paris, France)<0020>Stockting, Bill; editor of compilation / Queyroux, Fabienne; editor of compilation<0021>"Co-published simultaneously as Journal of archival organization, volume 3, numbers 2/3 2005."<0022>100100<0023>electronic access<0024>Library and information science text series<0025>supplementary content<0026>European Conference on Encoded Archival Description and Context (EAD and EAC) (2004 : Paris, France). Encoding across frontiers<0027>Library and information science text series; in series (work)<0028>In English<0029>Illustrations<0030>Includes bibliographical references and index","0","0","0","0","0","1","1","0","0","0","","","","book","","0","0","0","0","0","","30","","0");
INSERT INTO resource VALUES("Map of the Philippines [map] : regions in the North","<001>Map of the Philippines [map] : regions in the North<002>compiled by Romeo A. Sebastian ... [et al.]; edited by Milagros Serrana and Rosario Wood<003>mapa ng Pilipinas<004><005><006>Sebastian, Romeo A.; Marcos, Michelle Y.; Tan, Andrew F.; Ang, Francis<007>Buenaluz, Emylene D.; Arambulo, Marcus S.<008>Environmental Studies Institute<009>Sucat, Munntinlupa City<0010>FMS Press<0011>2012<0012>1st<0013>Scale 1:300<0014>xii, 120 p.:   ill, col,   23 cm.<0015><0016>Philippine map series ; 2<0017>Includes bibliography<0018>0711234560<0019>Map<0020>Thesauri; Environmental education$xDictionary<0021><0022><0023>Philippines$xEnvironmental aspecgs<0024><0025>GE 123 S45 2012<0026>AV006011; AV006012; AV006013<0027>English<0028>Grade school library<0029>D:AAA_USTInfoTechIvideoLibrary of the Future.wmv<0030>1<0031>0<0032>1<0033><0034><0035><0036>5<0037>","0","0","0","0","0","1","0","1","5","0","platonixz","2012-10-21 20:29:08","2012-11-18 03:38:20","av","rizale","0","0","0","0","0","","13","","0");
INSERT INTO resource VALUES("Thesaurus on Visul Design and Arts","<001>Thesaurus on Visul Design and Arts<002>by Romeo A. Sebastian; edited by Milagros Serrana and Rosario Wood<003><004>Sebastian, Romeo A.<005><006><007><008>Miriam College.  Department of Communication<009>Quezon City<0010>RPMO Press<0011>2012<0012>1st<0013><0014>xii, 120 p.:   ill, col,   23 cm; |d with DVD<0015><0016>Thesauri series ; 4<0017>Includes bibliography<0018>0711234560<0019>VHS<0020>Thesauri; Communiction$xDictionary<0021><0022><0023><0024><0025>PE 123 S45 2012<0026>VHS006011; VHS006012; VHS006013<0027>English<0028>High school library<0029><0030>1<0031>1<0032>0<0033><0034><0035><0036>0<0037>","0","0","0","0","0","1","1","0","0","0","platonixz","2012-10-21 20:57:37","2012-11-14 20:41:17","av","rizale","0","0","0","0","0","","14","","0");
INSERT INTO resource VALUES("Encoding across frontiers","<001>Encoding across frontiers<002>proceedings of the European Conference on Encoded Archival Description and Context (EAD and EAC), Paris, France, 7-8 October 2004<003>Proceedings of the European Conference on Encoded Archival Description and Context (EAD and EAC), Paris, France, 7-8 October 2004<004>Bill Stockting, Fabienne Queyroux, editors<005>designation of edition<006>responsibility to edition<007>New York / London / Victoria (AU)<008>The Haworth Information Press, an imprint of The Haworth Press, Inc.<009>date of publication not identified<0010>single unit<0011>©2005<0012>ISBN 978-0-7890-3026-9  /  ISBN 0-7890-3026-8 / ISBN 978-0-7890-3027-6 (paperback) / ISBN 0-7890-3027-6 (paperback)<0013>unmediated<0014>volume<0015>286 pages<0016>22 cm<0017>http://www.HaworthPress.com<0018>text<0019>European Conference on Encoded Archival Description and Context (EAD and EAC) (2004 : Paris, France)<0020>Stockting, Bill; editor of compilation / Queyroux, Fabienne; editor of compilation<0021>"Co-published simultaneously as Journal of archival organization, volume 3, numbers 2/3 2005."<0022>100100<0023>electronic access<0024>Library and information science text series<0025>supplementary content<0026>European Conference on Encoded Archival Description and Context (EAD and EAC) (2004 : Paris, France). Encoding across frontiers<0027>Library and information science text series; in series (work)<0028>In English<0029>Illustrations<0030>Includes bibliographical references and index","0","0","0","0","0","1","1","0","0","0","","","","book","","0","0","0","0","0","","29","","0");



CREATE TABLE `resource5` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` text CHARACTER SET latin1,
  `Fil` smallint(5) NOT NULL DEFAULT '0',
  `Ref` smallint(5) NOT NULL DEFAULT '0',
  `Bio` smallint(5) NOT NULL DEFAULT '0',
  `Fic` smallint(5) NOT NULL DEFAULT '0',
  `Res` smallint(5) NOT NULL DEFAULT '0',
  `Copy` smallint(5) NOT NULL DEFAULT '1',
  `Inn` smallint(5) NOT NULL DEFAULT '1',
  `Out` smallint(5) NOT NULL DEFAULT '0',
  `TimesOut` smallint(5) NOT NULL DEFAULT '0',
  `bkID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`bkID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `retention` (
  `Title` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `Department` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Retention` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Media` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Destruction` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `retID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`retID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO retention VALUES("Financial statements","Finance","Active 6m; inactive 1year","Paper","Shred","1");
INSERT INTO retention VALUES("Business reports","Purchasing","Archival","Paper","Recycle","2");



CREATE TABLE `returned` (
  `ID_Number` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Accession` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Date_loan` datetime DEFAULT NULL,
  `Due_date` datetime DEFAULT NULL,
  `Date_returned` datetime DEFAULT NULL,
  `Call_Number` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Type` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Degree_Course` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Library` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `charger` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Fine` double DEFAULT NULL,
  `prefix` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006013","Thesaurus on Philippine abaca : an indexing language","2017-07-12 00:00:00","2017-07-19 00:00:00","2017-07-16 00:00:00","323 S45 2012","Book (FIL)","LMC-Faculty","Main Library","rizal","0","(FIC)","8");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006012","Thesaurus on Philippine abaca : an indexing language","2017-07-12 00:00:00","2017-07-13 00:00:00","2017-07-16 00:00:00","323 S45 2012","Book (FIL)","LMC-Faculty","Main Library","rizal","15","(FIC)","9");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006013","Thesaurus on Banking and Finance   :  an indexing language","2017-07-16 00:00:00","2017-07-18 00:00:00","2017-07-20 00:00:00","323 S45 2012","Book (FIC)","LMC-Faculty","SSA LIBRARY","rizal","10","(FIC)","10");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006013","Thesaurus on Banking and Finance   :  an indexing language","2017-07-20 00:00:00","2017-07-21 00:00:00","2017-07-20 00:00:00","323 S45 2012","Book (FIC)","LMC-Faculty","SSA LIBRARY","rizal","0","(FIC)","11");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006013","Thesaurus on Banking and Finance   :  an indexing language","2017-07-20 00:00:00","2017-07-27 00:00:00","2017-07-23 00:00:00","323 S45 2012","Book (FIC)","LMC-Faculty","SSA LIBRARY","rizal","0","(FIC)","12");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006012","Thesaurus on Banking and Finance   :  an indexing language","2017-07-16 00:00:00","2017-07-20 00:00:00","2017-07-23 00:00:00","323 S45 2012","Book (FIC)","LMC-Faculty","SSA LIBRARY","rizal","15","(FIC)","13");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006011","Thesaurus on Philippine environment : an indexing language   : compiled by Romeo A. Sebastian ... [et al.]; edited by Milagros Serrana and Rosario Wood","2016-09-21 00:00:00","2016-09-22 00:00:00","2017-07-23 00:00:00","323 S45 2012","book","LMC-Faculty","FMC LIBRARY","rizal","1080","(FIC)","14");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006013","Thesaurus on Banking and Finance   :  an indexing language","2017-07-23 00:00:00","2017-07-31 00:00:00","2017-08-03 00:00:00","323 S45 2012","Book (FIC)","LMC-Faculty","SSA LIBRARY","rizal","10","(FIC)","15");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","TD000001","Thesaurus on Philippine literature","2017-05-03 00:00:00","2017-05-05 00:00:00","2017-08-06 00:00:00","TD 123 S43 1991","Thesis","LMC-Faculty","College Library","rizal","335","","16");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006013","Thesaurus on Banking and Finance   :  an indexing language","2017-08-03 00:00:00","2017-08-17 00:00:00","2017-08-11 00:00:00","323 S45 2012","Book (FIC)","LMC-Faculty","SSA LIBRARY","rizal","0","(FIC)","17");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006013","Thesaurus on Banking and Finance   :  an indexing language","2017-08-11 00:00:00","2017-08-18 00:00:00","2017-08-11 00:00:00","323 S45 2012","Book (FIC)","LMC-Faculty","SSA LIBRARY","rizal","0","(FIC)","18");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006013","Thesaurus on Banking and Finance   :  an indexing language","2017-08-11 00:00:00","2017-08-18 00:00:00","2017-08-11 00:00:00","323 S45 2012","Book (FIC)","LMC-Faculty","SSA LIBRARY","rizal","0","(FIC)","19");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006015","Thesaurus on Philippine finance","2017-08-11 00:00:00","2017-08-18 00:00:00","2017-08-11 00:00:00","GE 123 S45 2012","Book (FIC)","LMC-Faculty","KMCS LIBRARY","rizal","0","(SCHL)","20");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006014","Thesaurus on Philippine finance","2017-08-11 00:00:00","2017-08-11 00:00:00","2017-08-20 00:00:00","GE 123 S45 2012","Book","LMC-Faculty","KMCS LIBRARY","rizal","35","(SCHL)","21");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006013","Thesaurus on Banking and Finance   :  an indexing language","2017-08-11 00:00:00","2017-08-18 00:00:00","2017-08-20 00:00:00","323 S45 2012","Book (FIC)","LMC-Faculty","SSA LIBRARY","rizal","10","(FIC)","22");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006013","Thesaurus on Banking and Finance   :  an indexing language","2017-08-20 00:00:00","2017-08-22 00:00:00","2017-08-20 00:00:00","323 S45 2012","Book","LMC-Faculty","SSA LIBRARY","rizal","0","(FIC)","23");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006013","Thesaurus on Banking and Finance   :  an indexing language","2017-08-20 00:00:00","2017-08-22 00:00:00","2017-08-20 00:00:00","323 S45 2012","Book (FIC)","LMC-Faculty","SSA LIBRARY","rizal","0","(FIC)","24");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","HS-006013","Thesaurus on Philippine culinary arts","2017-09-03 00:00:00","2017-09-08 00:00:00","2017-09-03 00:00:00","GE 123 T12 S45 2017","Book","LMC-Faculty","KMCS LIBRARY","rizal","0","(TRF)","25");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006013","Thesaurus on Philippine abaca : an indexing language","2017-09-03 00:00:00","2017-09-15 00:00:00","2017-09-03 00:00:00","GE 123 T12 S45 2017","Book","LMC-Faculty","Main Library","rizal","0","(TRF)","26");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006013","Thesaurus on Philippine abaca : an indexing language","2017-09-03 00:00:00","2017-09-25 00:00:00","2017-09-03 00:00:00","GE 123 T12 S45 2017","Book","LMC-Faculty","Main Library","rizal","0","(TRF)","27");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006012","Thesaurus on Banking and Finance   :  an indexing language","2017-07-23 00:00:00","2017-07-31 00:00:00","2017-09-03 00:00:00","GE 123 S45 2012","Book (FIC)","LMC-Faculty","SSA LIBRARY","rizal","130","(FIL)","28");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006011","Thesaurus on Banking and Finance   :  an indexing language","2017-07-23 00:00:00","2017-07-28 00:00:00","2017-09-03 00:00:00","GE 123 S45 2012","Book (FIC)","LMC-Faculty","SSA LIBRARY","rizal","135","(FIL)","29");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006014","Thesaurus on Philippine finance","2017-08-20 00:00:00","2017-08-23 00:00:00","2017-09-03 00:00:00","GE 123 S45 2012","Book (SCHL)","LMC-Faculty","KMCS LIBRARY","rizal","45","(SCHL)","30");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","006013","Thesaurus on Philippine abaca : an indexing language","2017-09-03 00:00:00","2017-09-11 00:00:00","2017-09-03 00:00:00","323 S45 2012","Book (TRF)","LMC-Faculty","Main Library","rizal","0","(REF)","31");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","CL-006011","Thesaurus on Banking and Finance   :  an indexing language","2017-09-03 00:00:00","2017-09-25 00:00:00","2017-09-03 00:00:00","323 S45 2012","Book (SCHL)","LMC-Faculty","SSA LIBRARY","rizal","0","(FIC)","32");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","GS 006014","Thesaurus on Philippine finance","2017-09-03 00:00:00","2017-09-25 00:00:00","2017-09-03 00:00:00","GE 123 S45 2012","Book","LMC-Faculty","KMCS LIBRARY","rizal","0","(SCHL)","33");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","TD000001","Thesaurus on Philippine literature","2017-08-06 00:00:00","2017-08-06 00:00:00","2017-09-03 00:00:00","TD 123 S43 1991","Thesis","LMC-Faculty","College Library","rizal","100","","34");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","TD110100","Thesaurus on Philippine environment","2017-09-03 00:00:00","2017-09-11 00:00:00","2017-09-03 00:00:00","Z 695.1 E62 T43 2005 (COL)","Thesis","LMC-Faculty","","rizal","0","","35");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","AR123456","Audio recording titlte","2017-09-03 00:00:00","2017-09-29 00:00:00","2017-09-03 00:00:00","call number, call number","Audio","LMC-Faculty","Filipiniana","rizal","0","(BIO}","36");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","SR000001","Serial title","2017-09-03 00:00:00","2017-09-07 00:00:00","2017-09-03 00:00:00","SER 123456 2017","Serial","LMC-Faculty","location","rizal","0","(SER)","37");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","VR-123456","Video recording title","2017-09-03 00:00:00","2017-09-06 00:00:00","2017-09-03 00:00:00","VR 123456 2016","Video","LMC-Faculty","Circulation","rizal","0","(VR}","38");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","SV000053","Bakauan","2017-05-03 00:00:00","2017-05-10 00:00:00","2017-09-03 00:00:00","VC 053 BAK","AV","LMC-Faculty","ESI","rizal","420","videocassette","39");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","HS-006013","Thesaurus on Philippine culinary arts","2017-09-03 00:00:00","2017-09-08 00:00:00","2017-09-03 00:00:00","GE 123 T12 S45 2017","Book (TRF)","LMC-Faculty","KMCS LIBRARY","rizal","0","(TRF)","40");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","CL-006011","Thesaurus on Banking and Finance   :  an indexing language","2017-09-03 00:00:00","2017-09-28 00:00:00","2017-09-03 00:00:00","323 S45 2012","Book (FIC)","LMC-Faculty","SSA LIBRARY","rizal","0","(FIC)","41");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","CL-006011","Thesaurus on Banking and Finance   :  an indexing language","2017-09-03 00:00:00","2017-09-03 00:00:00","2017-09-03 00:00:00","323 S45 2012","Book (FIC)","LMC-Faculty","SSA LIBRARY","rizal","0","(FIC)","42");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","GS 006014","Thesaurus on Philippine rice","2017-09-03 00:00:00","2017-09-28 00:00:00","2017-09-03 00:00:00","GE 123 S45 2012","Book (SCHL)","LMC-Faculty","KMCS LIBRARY","rizal","0","(SCHL)","43");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","GS 006014","Thesaurus on Philippine rice","2017-09-03 00:00:00","2017-10-02 00:00:00","2017-09-03 00:00:00","GE 123 S45 2012","Book (SCHL)","LMC-Faculty","KMCS LIBRARY","rizal","0","(SCHL)","44");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","GS 006014","Thesaurus on Philippine rice","2017-09-03 00:00:00","2017-09-03 00:00:00","2017-09-03 00:00:00","GE 123 S45 2012","Book (SCHL)","LMC-Faculty","KMCS LIBRARY","rizal","0","(SCHL)","45");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","HS-006013","Thesaurus on Philippine culinary arts","2017-09-03 00:00:00","2017-09-25 00:00:00","2017-09-06 00:00:00","GE 123 T12 S45 2017","Book (TRF)","LMC-Faculty","KMCS LIBRARY","rizal","0","(TRF)","46");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","TD110100","Thesaurus on Philippine environment","2017-09-03 00:00:00","2017-09-18 00:00:00","2017-09-06 00:00:00","Z 695.1 E62 T43 2005 (COL)","Thesis","LMC-Faculty","","rizal","0","","47");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","TD110100","Thesaurus on Philippine environment","2017-09-06 00:00:00","2017-09-21 00:00:00","2017-09-06 00:00:00","Z 695.1 E62 T43 2005 (COL)","Thesis","LMC-Faculty","","rizal","0","","48");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","TD110100","Thesaurus on Philippine environment","2017-09-06 00:00:00","2017-09-21 00:00:00","2017-09-06 00:00:00","Z 695.1 E62 T43 2005 (COL)","Thesis","LMC-Faculty","","rizal","0","","49");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","110100","Thesaurus on Philippine literature","2017-09-06 00:00:00","2017-09-12 00:00:00","2017-09-06 00:00:00","TD 123 S43 1991","Thesis","LMC-Faculty","College Library","rizal","0","","50");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","TD110100","Thesaurus on Philippine environment","2017-09-06 00:00:00","2017-09-27 00:00:00","2017-09-06 00:00:00","Z 695.1 E62 T43 2005 (COL)","Thesis","LMC-Faculty","","rizal","0","","51");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","TD110100","Thesaurus on Philippine environment","2017-09-06 00:00:00","2017-09-27 00:00:00","2017-09-06 00:00:00","Z 695.1 E62 T43 2005 (COL)","Thesis","LMC-Faculty","","rizal","0","","52");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","TD110100","Thesaurus on Philippine environment","2017-09-06 00:00:00","2017-09-27 00:00:00","2017-09-06 00:00:00","Z 695.1 E62 T43 2005 (COL)","Thesis","LMC-Faculty","","rizal","0","","53");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","HS-006013","Thesaurus on Philippine culinary arts","2017-09-06 00:00:00","2017-09-20 00:00:00","2017-09-06 00:00:00","GE 123 T12 S45 2017","Book (TRF)","LMC-Faculty","KMCS LIBRARY","rizal","0","(TRF)","54");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","HS-006013","Thesaurus on Philippine culinary arts","2017-09-06 00:00:00","2017-09-20 00:00:00","2017-09-06 00:00:00","GE 123 T12 S45 2017","Book (TRF)","LMC-Faculty","KMCS LIBRARY","rizal","0","(TRF)","55");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","HS-006013","Thesaurus on Philippine culinary arts","2017-09-06 00:00:00","2017-09-06 00:00:00","2017-09-06 00:00:00","GE 123 T12 S45 2017","Book (TRF)","LMC-Faculty","KMCS LIBRARY","rizal","0","(TRF)","56");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","110100","Thesaurus on Philippine environment","2017-09-06 00:00:00","2017-09-18 00:00:00","2017-09-07 00:00:00","Z 695.1 E62 T43 2005 (COL)","Thesis","LMC-Faculty","","rizal","0","","57");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","HS-006013","Thesaurus on Philippine culinary arts","2017-09-06 00:00:00","2017-09-20 00:00:00","2018-01-05 00:00:00","GE 123 T12 S45 2017","Book (TRF)","LMC-Faculty","KMCS LIBRARY","rizal","380","(TRF)","58");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","HS-006013","Thesaurus on Philippine culinary arts","2018-01-05 00:00:00","2018-01-06 00:00:00","2018-01-18 00:00:00","GE 123 T12 S45 2017","Book (TRF)","LMC-Faculty","KMCS LIBRARY","rizal","40","(TRF)","59");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","AR123456","Audio recording titlte","2017-09-03 00:00:00","2017-09-29 00:00:00","2018-01-18 00:00:00","call number, call number","Audio","LMC-Faculty","Filipiniana","rizal","395","(BIO}","60");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","CL-006011","Thesaurus on Banking and Finance   :  an indexing language","2017-09-03 00:00:00","2017-09-25 00:00:00","2018-01-18 00:00:00","323 S45 2012","Book (FIC)","LMC-Faculty","SSA LIBRARY","rizal","410","(FIC)","61");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","GS 006014","Thesaurus on Philippine rice","2017-09-03 00:00:00","2017-10-02 00:00:00","2018-02-11 00:00:00","GE 123 S45 2012","Book (SCHL)","LMC-Faculty","KMCS LIBRARY","RIZAL","480","(SCHL)","62");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","GS 006014","Thesaurus on Philippine rice","2018-02-11 00:00:00","2018-02-14 00:00:00","2018-03-23 00:00:00","GE 123 S45 2012","Book (SCHL)","LMC-Faculty","KMCS LIBRARY","rizal","130","(SCHL)","63");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","GS 006014","Thesaurus on Philippine rice","2018-03-23 00:00:00","2018-03-30 00:00:00","2018-05-24 00:00:00","GE 123 S45 2012","Book (SCHL)","LMC-Faculty","KMCS LIBRARY","rizal","195","(SCHL)","64");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","GS 006014","Thesaurus on Philippine rice","2018-05-24 00:00:00","2018-05-26 00:00:00","2018-06-30 00:00:00","GE 123 S45 2012","Book (SCHL)","LMC-Faculty","KMCS LIBRARY","rizal","125","(SCHL)","65");
INSERT INTO returned VALUES("1234567890","Sebastian, Romeo A.","VR-123456","Video recording title","2017-09-03 00:00:00","2017-09-06 00:00:00","2018-08-27 00:00:00","VR 123456 2016","Video","LMC-Faculty","Circulation","rizal","1270","(VR}","66");



CREATE TABLE `room_reservation` (
  `Rooms` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Capacity` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Description` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `Location` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Accessories` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `Remarks` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `rmID` float NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `room_reservation_pk` (`rmID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO room_reservation VALUES("ESI Conference room","300","semi-rectanguar room","ESI building","Sound system, ventilation","Good for conference and meetings","7");
INSERT INTO room_reservation VALUES("Multimedia room","30","Semi-rectangular","ESI building","Electric fan and tables, television, dvd player","Good for meetings and holding of classes","8");
INSERT INTO room_reservation VALUES("rooms","capacity","dew","locati","accessoriesre","remarks","9");
INSERT INTO room_reservation VALUES("rooms","capacity","dew","locati","accessoriesre","remarks","10");



CREATE TABLE `room_schedule` (
  `Room` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Date_reservation` datetime DEFAULT NULL,
  `Name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ID_number` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Course` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Year_section` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Subject` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Professor` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Purpose` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Date_submitted` datetime DEFAULT NULL,
  `Remarks` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `From_time` datetime DEFAULT NULL,
  `To_time` datetime DEFAULT NULL,
  `rmID` int(11) DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO room_schedule VALUES("Multimedia room","2015-10-18 00:00:00","romy","700628","Library","section","course","prof","Lecture","2015-10-18 22:10:00","remarks","2015-10-18 07:00:00","2015-10-18 09:00:00","8","1");
INSERT INTO room_schedule VALUES("Multimedia room","2015-10-18 00:00:00","romy","700628","Library","section","course","prof","Lecture","2015-10-18 22:10:00","remarks","2015-10-18 07:00:00","2015-10-18 09:00:00","8","2");



CREATE TABLE `serial_inventory` (
  `Accession` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Title` varchar(245) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Publisher` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `serial_title` (
  `Serial_Title` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `ISSN` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Frequency` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Agent` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Price` double(8,2) DEFAULT NULL,
  `Code` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Focus` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Expiration` datetime DEFAULT NULL,
  `t_timesout` smallint(5) NOT NULL DEFAULT '0',
  `Subject` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `Remarks` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `Date_Renewed` datetime DEFAULT NULL,
  `Period` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Status` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO serial_title VALUES("Time","issn","Weekly","source","","time","International","","0","General","rem","","","current","1");
INSERT INTO serial_title VALUES("xxx","xxx","Annually","xx","","xxx","International","","0","xxx","xxxx","","","","2");
INSERT INTO serial_title VALUES("Discovery","0909-9090","Bi-monthly","KMCS","","0909-9090","Local","","4","Science","","","","current","5");



CREATE TABLE `serialcat` (
  `Title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Maintext` text COLLATE utf8_unicode_ci,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO serialcat VALUES("National Geographic","<001>National Geographic<002>Washington, DC<003>National Geographic Society<004>888888<005>August 2012 v.22 no. 2<006>Indexed by: Readers` Gui<007>xxx<008>xxx<009>xxx<0010>xxx<0011>xxx<0012>xxx","1");
INSERT INTO serialcat VALUES("title","<001>title<002>place<003>publisher<004>rating<005>latest<006>notes<007>holdings<008>subject<009>prefix<0010>call number<0011>issn<0012>location","2");



CREATE TABLE `serials` (
  `Date_Year` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Volume` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Number` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Code` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `ID` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `DateOut` datetime DEFAULT NULL,
  `DateDue` datetime DEFAULT NULL,
  `DateIn` datetime DEFAULT NULL,
  `Date_Received` datetime DEFAULT NULL,
  `IDD` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`IDD`),
  KEY `serial_vol_dup_idx` (`Volume`),
  KEY `serial_code_dup_idx` (`Code`),
  KEY `siral_id_dup_idx` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO serials VALUES("02/31/2015","100","20","time","1","","1900-01-01 00:00:00","1900-01-01 00:00:00","","2010-03-31 00:00:00","2");
INSERT INTO serials VALUES("10/2016","26","31","time","","","","","","2010-03-31 00:00:00","3");
INSERT INTO serials VALUES("10/2016","26","31","time","","","","","","2010-03-31 00:00:00","4");
INSERT INTO serials VALUES("10/2016","26","31","time","","","","","","2010-03-31 00:00:00","5");
INSERT INTO serials VALUES("01/2017","100","01","0909-9090","0","","","","","2017-06-09 00:00:00","7");



CREATE TABLE `serialtransaction` (
  `Date_Year` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Volume` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Number` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Code` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `IDnumber` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `DateOut` datetime DEFAULT NULL,
  `DateDue` datetime DEFAULT NULL,
  `DateIn` datetime DEFAULT NULL,
  `SerialTitle` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `User_class` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Degree_course` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  KEY `serial_vol_dup_idx` (`Volume`),
  KEY `serial_code_dup_idx` (`Code`),
  KEY `siral_id_dup_idx` (`Name`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO serialtransaction VALUES("03/2007","6","1","AB","700628","Sebastian, Romeo A.","2008-01-25 00:00:00","2008-02-01 00:00:00","2008-01-25 00:00:00","Asean biodiversity","","","1");
INSERT INTO serialtransaction VALUES("02/31/2015","100","20","time","700628","Sebastian, Romeo A.","2015-10-24 00:00:00","2015-10-24 00:00:00","2015-10-24 00:00:00","Time","Faculty","","2");
INSERT INTO serialtransaction VALUES("02/31/2015","100","20","time","700628","Sebastian, Romeo A.","1900-01-01 00:00:00","1900-01-01 00:00:00","2015-10-24 00:00:00","Time","Faculty","","3");
INSERT INTO serialtransaction VALUES("02/31/2015","100","20","time","700628","Sebastian, Romeo A.","1900-01-01 00:00:00","1900-01-01 00:00:00","2015-10-24 00:00:00","Time","Faculty","","4");
INSERT INTO serialtransaction VALUES("02/31/2015","100","20","time","700628","Sebastian, Romeo A.","2015-10-24 00:00:00","2015-10-31 00:00:00","2015-10-24 00:00:00","Time","Faculty","","5");



CREATE TABLE `sm` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` varchar(16000) CHARACTER SET latin1 DEFAULT NULL,
  `Fil` smallint(5) NOT NULL DEFAULT '0',
  `Ref` smallint(5) NOT NULL DEFAULT '0',
  `Res` smallint(5) NOT NULL DEFAULT '0',
  `Copy` smallint(5) NOT NULL DEFAULT '1',
  `Inn` smallint(5) NOT NULL DEFAULT '1',
  `t_Out` smallint(5) NOT NULL DEFAULT '0',
  `t_TimesOut` smallint(5) NOT NULL DEFAULT '0',
  `smID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`smID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO sm VALUES("xxx","<001>xxx<002>xxx<003>xxx<004>xxx<005>xx<006>xx<007>xxxx<008>xx<009>xxx<0010>xxxx<0011>xxxx<0012>xx<0013>xxx<0014>xx<0015>xxx<0016>xx<0017>xxx<0018>xxx<0019>Microfiche<0020>xxx<0021>xx<0022>xx<0023>xxx<0024>SLIDE<0025>xxx<0026>xx<0027>xx<0028>xxx<0029>xxxx<0030>1<0031>1<0032>0<0033>xx<0034>xxx<0035>xxx<0036>0","0","0","0","1","1","0","0","1");



CREATE TABLE `sm_inventory` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Author` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Call_Number` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Accession` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `IDate` datetime DEFAULT NULL,
  `Status` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Type` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Location` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO sm_inventory VALUES("Bakauan","creator","DVD VC 053 BAK","SV000053","2018-07-04 00:00:00","Out","videocassette","ESI","9");
INSERT INTO sm_inventory VALUES("Bakauan","creator","DVD VC 053 BAK","SV000053","2018-07-04 00:00:00","I-Loan","videocassette","ESI","10");
INSERT INTO sm_inventory VALUES("Video recording title","creator","VR VR 123456 2016","VR-123456","2018-07-04 00:00:00","Out","Video","HS Library","11");
INSERT INTO sm_inventory VALUES("Bakauan","creator","DVD VC 053 BAK","SV000053","","","videocassette","ESI","12");
INSERT INTO sm_inventory VALUES("Audio recording titlte","","","AR123456","","","audio","Main Library","13");
INSERT INTO sm_inventory VALUES("Video recording title","creator","VR VR 123456 2016","VR-123456","","","Video","HS Library","14");



CREATE TABLE `smloan` (
  `Audio` double DEFAULT '0',
  `CD` double DEFAULT '0',
  `FD` double DEFAULT '0',
  `Map` double DEFAULT '0',
  `Microfiche` double DEFAULT '0',
  `Microfilm` double DEFAULT '0',
  `Picture` double DEFAULT '0',
  `Poster` double DEFAULT '0',
  `Slide` double DEFAULT '0',
  `Video` double DEFAULT '0',
  `Film` double DEFAULT '0',
  `Graph` double DEFAULT '0',
  `Chart` double DEFAULT '0',
  `Realia` double DEFAULT '0',
  `Globe` double DEFAULT '0',
  `Modules` double DEFAULT '0',
  `Transparency` double DEFAULT '0',
  `Filmstrip` double DEFAULT '0',
  `Record` double DEFAULT '0',
  `Motion_picture` double DEFAULT '0',
  `Total` double DEFAULT '0',
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `smloan_pk` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO smloan VALUES("1","2","1","2","1","1","1","1","1","1","2","1","1","1","1","1","1","1","2","2","25","1");



CREATE TABLE `smloan_save` (
  `Audio` double DEFAULT '0',
  `CD` double DEFAULT '0',
  `FD` double DEFAULT '0',
  `Map` double DEFAULT '0',
  `Microfiche` double DEFAULT '0',
  `Microfilm` double DEFAULT '0',
  `Picture` double DEFAULT '0',
  `Poster` double DEFAULT '0',
  `Slide` double DEFAULT '0',
  `Video` double DEFAULT '0',
  `Film` double DEFAULT '0',
  `Graph` double DEFAULT '0',
  `Chart` double DEFAULT '0',
  `Realia` double DEFAULT '0',
  `Globe` double DEFAULT '0',
  `Modules` double DEFAULT '0',
  `Transparency` double DEFAULT '0',
  `Filmstrip` double DEFAULT '0',
  `Record` double DEFAULT '0',
  `Motion_picture` double DEFAULT '0',
  `Total` double DEFAULT '0',
  `Da_te` datetime DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `statistics` (
  `oTime` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `oNumber` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO statistics VALUES("06:00AM","0");
INSERT INTO statistics VALUES("07:00AM","0");
INSERT INTO statistics VALUES("80:00AM","0");
INSERT INTO statistics VALUES("09:00AM","0");
INSERT INTO statistics VALUES("10:00AM","1");
INSERT INTO statistics VALUES("11:00AM","1");
INSERT INTO statistics VALUES("12:00PM","0");
INSERT INTO statistics VALUES("13:00PM","0");
INSERT INTO statistics VALUES("14:00PM","0");
INSERT INTO statistics VALUES("15:00PM","0");
INSERT INTO statistics VALUES("16:00PM","0");
INSERT INTO statistics VALUES("17:00PM","0");
INSERT INTO statistics VALUES("18:00PM","0");
INSERT INTO statistics VALUES("19:00PM","6");
INSERT INTO statistics VALUES("20:00PM","8");
INSERT INTO statistics VALUES("21:00PM","1");



CREATE TABLE `subject_list` (
  `subject_desc` varchar(150) DEFAULT NULL,
  `subject_code` varchar(45) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO subject_list VALUES("Accounting","001","1");
INSERT INTO subject_list VALUES("Finance","002","2");



CREATE TABLE `td_inventory` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Author` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Call_Number` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Accession` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `IDate` datetime DEFAULT NULL,
  `Status` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Type` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Location` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO td_inventory VALUES("Thesaurus on Philippine literature","Sebastian, Romeo A.","TD 123 S43 1991","TD000001","2018-07-04 00:00:00","Lost","Special problem","College Library","8");
INSERT INTO td_inventory VALUES("Thesaurus on Philippine literature","Sebastian, Romeo A.","TD 123 S43 1991","TD000001","2018-07-04 00:00:00","Missing","Special problem","College Library","9");
INSERT INTO td_inventory VALUES("Thesaurus on Philippine literature","Sebastian, Romeo A.","TD 123 S43 1991","TD000001","","","Special problem","College Library","10");
INSERT INTO td_inventory VALUES("Thesaurus on Philippine environment","","Z 695.1 E62 T43 2005 (COL)","TD110100","2018-07-04 00:00:00","I-Loan","","","11");



CREATE TABLE `temp_room_schedule` (
  `Room` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Date_reservation` datetime DEFAULT NULL,
  `Time_reservation` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ID_number` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Department` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `College` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Subject` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Professor` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Purpose` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Date_submitted` datetime DEFAULT NULL,
  `Remarks` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Contact` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO temp_room_schedule VALUES("AV Room A","2011-03-23 00:00:00","07:30-09:00","Sebastian, ROMEO A","700628","","","AC-102 PRINCIPLES OF ACCOUNTING II","Sebastian, ROMEO A","Conference","2011-03-23 00:00:00","","","1");
INSERT INTO temp_room_schedule VALUES("LR 4","2015-10-09 00:00:00","07:30AM-09:00AM","Sebastian, Romeo A.","700628","","","BA-104 MANAGEMENT INFORMATION SYSTEM","Sebastian, Romeo A.","Seminar","2015-10-19 00:00:00","","xxxx","2");
INSERT INTO temp_room_schedule VALUES("LR 4","2015-10-09 00:00:00","12:00PM-13:30PM","Sebastian, Romeo A.","700628","","","AC-101 PRINCIPLES OF ACCOUNTING I","Sebastian, Romeo A.","Film showing","2015-10-19 00:00:00","","xxxx","3");
INSERT INTO temp_room_schedule VALUES("LR 4","2015-10-12 00:00:00","12:00PM-13:30PM","Sebastian, Romeo A.","700628","","","BA-104 MANAGEMENT INFORMATION SYSTEM","Sebastian, Romeo A.","Group Presentation","2015-10-19 00:00:00","","xxxx","4");



CREATE TABLE `tempborrower` (
  `ID_Number` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Accession_number` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Date_Borrowed` datetime DEFAULT NULL,
  `Due_date` datetime DEFAULT NULL,
  `Date_returned` datetime DEFAULT NULL,
  `Overdue` int(11) DEFAULT '0',
  `Type` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `tempborrower_pk` (`ID`),
  KEY `temp_borrower_idnum_dup_idx` (`ID_Number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `temporary` (
  `Temporary` varchar(4000) CHARACTER SET latin1 DEFAULT NULL,
  `Addressee` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `Signatory` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `ID` smallint(6) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `tempreturned` (
  `ID_Number` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `Name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Accession` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Date_loan` datetime DEFAULT NULL,
  `Due_date` datetime DEFAULT NULL,
  `Date_returned` datetime DEFAULT NULL,
  `Call_Number` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Type` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `tempreturned_pk` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `thesaurus` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` varchar(8000) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO thesaurus VALUES("Corporate environmentalism","<001>Corporate environmentalism<002><003><004><005><006><007><008><009><0010>","1");



CREATE TABLE `thesis` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` varchar(16000) CHARACTER SET latin1 DEFAULT NULL,
  `Copy` smallint(5) DEFAULT '1',
  `Avail` smallint(5) DEFAULT '1',
  `t_Out` smallint(5) DEFAULT '0',
  `Prefix` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `tdID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`tdID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO thesis VALUES("Development of a community-based management plan on the propagation and use of Sabutan (Pandanus Sabotan Blanco) in Palanan, Isabela within the Northern Sierra Madre Natural Park","<001>Development of a community-based management plan on the propagation and use of Sabutan (Pandanus Sabotan Blanco) in Palanan, Isabela within the Northern Sierra Madre Natural Park<002>Gonzales, Alberto M.<003>Development Academy of the Philippines, Graduate School of Public and Development Management<004>Master in Public Management (Major in Biodiversity Conservation and Management)<005>2005<006>[247 p.]<007>TD DEV GON 2005<008>T123456<009>English<0010>ESI<0011>Thesis<0012>xxxxxx.pad<0013>Sabutan; Pandanus Sabotan Blanco; Palan, Isabela; Northern Sierra Madre Natural Park; Biological diversity conservation; Pandan species<0014>1<0015>1<0016>0","1","1","0","Thesis","1");



CREATE TABLE `thesis5` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` text CHARACTER SET latin1,
  `Copy` smallint(5) DEFAULT '1',
  `Avail` smallint(5) DEFAULT '1',
  `Out` smallint(5) DEFAULT '0',
  `Prefix` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `tdID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`tdID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `txtarchive` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` varchar(8000) CHARACTER SET latin1 DEFAULT NULL,
  `FondsID` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `txtID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`txtID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `type_of_doc` (
  `document` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO type_of_doc VALUES("report","1");
INSERT INTO type_of_doc VALUES("brochure","2");



CREATE TABLE `users` (
  `User_ID` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `User_name` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `CurrentUser` tinyint(1) DEFAULT NULL,
  `Access_right` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Library` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  `expiry_date` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

INSERT INTO users VALUES("òéúáì","rizal","","Supervisor","","29","");
INSERT INTO users VALUES("áâòáí","abram","","Supervisor","All libraries","31","");
INSERT INTO users VALUES("åíù","emy","","Circulation","All libraries","33","");
INSERT INTO users VALUES("çáììù","gally","","Userstat","All libraries","43","");



CREATE TABLE `userstat` (
  `Seven` double DEFAULT '0',
  `Eight` double DEFAULT '0',
  `Nine` double DEFAULT '0',
  `Ten` double DEFAULT '0',
  `Eleven` double DEFAULT '0',
  `Twelve` double DEFAULT '0',
  `One` double DEFAULT '0',
  `Two` double DEFAULT '0',
  `Three` double DEFAULT '0',
  `Four` double DEFAULT '0',
  `Five` double DEFAULT '0',
  `Six` double DEFAULT '0',
  `Sevenpm` double DEFAULT '0',
  `Eightpm` double DEFAULT '0',
  `Ninepm` double DEFAULT '0',
  `Total` double DEFAULT '0',
  `sixam` double DEFAULT '0',
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO userstat VALUES("2","1","2","1","1","11","0","0","0","11","9","16","6","12","34","106","0","1");



CREATE TABLE `venue_schedule` (
  `Room` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Date_reservation` datetime DEFAULT NULL,
  `Time_reservation` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ID_number` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Course` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Year_section` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Subject` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Professor` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Purpose` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Date_submitted` datetime DEFAULT NULL,
  `Remarks` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Contact` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `ID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO venue_schedule VALUES("AVR C-D","2014-05-23 00:00:00","12:00PM-13:30PM","xxxx","","","","Communication skills","Ms. Apuan","Brainstorming","2014-05-21 14:06:41","","","1");
INSERT INTO venue_schedule VALUES("AVR A-B","2014-10-15 00:00:00","09:00AM-10:30AM","Gally","","","","Economics","Mr. Buensuceso","Film showing","2014-10-14 02:26:20","","","2");
INSERT INTO venue_schedule VALUES("VR 2","2015-10-19 00:00:00","15:00PM-16:30PM","Sebastian, Romeo A.","700628","","","AD-102 PRINCIPLES OF COPYWRITING","Sebastian, Romeo A.","Film showing","2015-10-19 00:00:00","","afaf","3");
INSERT INTO venue_schedule VALUES("VR 1","2015-10-19 00:00:00","16:30PM-18:00PM","Sebastian, Romeo A.","700628","","","BA-55 DEVELOPMENT OF ENTERPRISES","Sebastian, Romeo A.","Talk","2015-10-19 00:00:00","","2525","4");



CREATE TABLE `verticalfile` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` varchar(16000) CHARACTER SET latin1 DEFAULT NULL,
  `vfID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`vfID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO verticalfile VALUES("World is their classroom","<001>World is their classroom<002>Mendoza, Ivy Lisa F<003>Manila Bulletin<004>6/11/2007<005>2012-001/1<006>C-4<007>Press releases<008>LMC College Library<009>1<0010>xxxx<0011>Environmental Planning and Management ; Parayno, Phares<0012>xxxx","1");



CREATE TABLE `video_inventory` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Author` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Call_Number` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Accession` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `IDate` datetime DEFAULT NULL,
  `Status` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `Type` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

INSERT INTO video_inventory VALUES("Adventure of Lam-Ang","Rono, Lito","ARC LAM ANG","V1412414","2008-04-03 00:00:00","In","Video","11");



CREATE TABLE `videoarchive` (
  `Title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Maintext` varchar(8000) CHARACTER SET latin1 DEFAULT NULL,
  `Copy` smallint(5) DEFAULT '1',
  `Avail` smallint(5) DEFAULT '1',
  `Out` smallint(5) DEFAULT '0',
  `videoID` float NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`videoID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO videoarchive VALUES("Adventure of Lam-Ang","<001>Adventure of Lam-Ang<002>Biag ni Lam ang<003>Rono, Lito<004>Sebastian, Romeo A.<005>Viva Films<006>2003 Vival Films<007>Sierra Madre, Tanay Rizal<008>2003<009>Philippines<0010>English<0011>7/12/2007<0012>7/18/2007<0013>7/25/2007<0014>English<0015>Filipino<0016>NTSC<0017>2<0018>1 hr 30 min<0019>Master<0020>Outtakes<0021>Black & white<0022>Ektachrome<0023>Negative<0024>Nitrate<0025>Silent/No sound<0026>Animation-Computer animation<0027>Amateur recording<0028>Advertising<0029>Music--Children<0030>Lam Ang<0031>Mowel Fund<0032>Donation<0033>7/10/2007<0034>Audio disc<0035>ARC LAM ANG<0036>Archive Center<0037>Junio, Mac<0038>Myth; Folk tales<0039>The quick brown fox jump over the young lazy dog.  The quick brown fox jump over the young lazy dog.<0040>The quick brown fox jump over the young lazy dog.  The quick brown fox jump over the young lazy dog.<0041>V1412414<0042>D:\myRizal\prtbooks.doc<0043>7/24/2007<0044>ras<0045>1<0046>0<0047>1","1","0","1","1");

