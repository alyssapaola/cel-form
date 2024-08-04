-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 06:02 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cel_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_asynchronous_schedule`
--

CREATE TABLE `tbl_asynchronous_schedule` (
  `async_id` varchar(100) NOT NULL,
  `async_date` varchar(100) NOT NULL,
  `async_term_id` varchar(100) NOT NULL,
  `async_period` int(11) NOT NULL,
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_college`
--

CREATE TABLE `tbl_college` (
  `college_id` varchar(50) NOT NULL,
  `college_short` varchar(50) NOT NULL,
  `college_full` varchar(500) NOT NULL,
  `active_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_college`
--

INSERT INTO `tbl_college` (`college_id`, `college_short`, `college_full`, `active_flag`) VALUES
('COL001', 'CAMS', 'College of Allied Medical Sciences', 1),
('COL002', 'CAS', 'College of Arts and Sciences', 1),
('COL003', 'CBA', 'College of Business Administration', 1),
('COL004', 'CFAD', 'College of Fine Arts and Design', 1),
('COL005', 'CITHM', 'College of International Tourism and Hospitality Management', 1),
('COL006', 'COL', 'College of Law', 1),
('COL007', 'CON', 'College of Nursing', 1),
('COL008', 'DCS', 'Department of Computer Studies', 1),
('COL009', 'DOA', 'Department of Architecture', 1),
('COL010', 'DOE', 'Deparment of Engineering', 1),
('COL011', 'GS', 'Graduate School', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE `tbl_faculty` (
  `faculty_id` varchar(50) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `college_id` varchar(50) NOT NULL,
  `active_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`faculty_id`, `last_name`, `first_name`, `college_id`, `active_flag`) VALUES
('2008-1007F', 'Biñas', 'Ma. Cecilia', 'COL005', 1),
('2008-1011F', 'Dones', 'Flormina', 'COL002', 1),
('2008-1012N', 'Del Rosario', 'Noel', 'COL005', 1),
('2008-1017F', 'Matel', 'Elmer', 'COL008', 1),
('2008-1030F', 'Saenz', 'Edmunda', 'COL002', 1),
('2008-1034F', 'Mojica', 'Mary Rose', 'COL002', 1),
('2009-1004F', 'Añonuevo', 'Carlisa', 'COL002', 1),
('2009-1009F', 'Gutierrez', 'Anna', 'COL002', 1),
('2009-1009N', 'Sto. Domingo', 'Ma. Rodez', 'COL002', 1),
('2009-1014F', 'Broas', 'Jannet', 'COL002', 1),
('2009-1023F', 'Azurin', 'Jenaro Dennis', 'COL005', 1),
('2009-1025F', 'Espanto', 'Rhia', 'COL010', 1),
('2009-1029F', 'Jarquio - Federio', 'Maria Flor De Liza', 'COL010', 1),
('2009-1033F', 'Malajito', 'Irin', 'COL001', 1),
('2009-1037F', 'Narzoles', 'Aldren', 'COL010', 1),
('2009-1038F', 'Olipas', 'Lorina', 'COL003', 1),
('2009-1039F', 'Peren', 'Jerian', 'COL008', 1),
('2009-1042F', 'Pilapil', 'Andrew Nico', 'COL005', 1),
('2009-1049F', 'Santos', 'Lovie', 'COL002', 1),
('2009-1064F', 'San Mateo', 'Reynaldo', 'COL003', 1),
('2009-1066F', 'Tanglao', 'Renato', 'COL002', 1),
('2009-1067F', 'Toledo', 'Josielyn', 'COL005', 1),
('2010-1001F', 'Del Prado', 'Ma. Consuelo Conie', 'COL005', 1),
('2010-1015F', 'Digman II', 'Arthur', 'COL005', 1),
('2010-1016N', 'Reales', 'Lawrence Jay', 'COL005', 1),
('2010-1017N', 'Rodenas', 'Sherry Ann', 'COL008', 1),
('2010-1020F', 'Fruelda', 'Angelita', 'COL002', 1),
('2010-1052F', 'Pereña', 'Ronalyn', 'COL005', 1),
('2010-1057F', 'Rivera', 'Arnel', 'COL002', 1),
('2010-1087F', 'Lunasin', 'Angelito', 'COL005', 1),
('2010-1092F', 'Carlos', 'Laarnie', 'COL010', 1),
('2010-1099F', 'Rivera', 'Rosszen Yorkah', 'COL005', 1),
('2010-1103F', 'Gonzales', 'Eleazar', 'COL002', 1),
('2011-1052F', 'Santiago', 'Amor', 'COL002', 1),
('2011-1054F', 'Tapia', 'Cristeta', 'COL002', 1),
('2011-1056F', 'Villanueva', 'Cecilia', 'COL001', 1),
('2011-1069F', 'Delos Santos', 'Marivic', 'COL005', 1),
('2011-1075F', 'Gonzales', 'Reginald', 'COL002', 1),
('2012-1002F', 'Sandejas', 'Joel', 'COL004', 1),
('2012-1021F', 'Mojica', 'Donjie', 'COL003', 1),
('2012-1026F', 'Maranan', 'Maridette Joyce', 'COL002', 1),
('2012-1035F', 'Constante', 'Raymund', 'COL008', 1),
('2012-1044F', 'Rodriguez', 'Jelyn', 'COL010', 1),
('2012-1048F', 'Odoño', 'Philip Adam', 'COL002', 1),
('2012-1064F', 'Sisante', 'Aina Mari', 'COL002', 1),
('2012-1073F', 'Santos', 'Leah', 'COL010', 1),
('2012-1088F', 'Gaspar', 'Shirley Anne', 'COL003', 1),
('2012-1097F', 'Llarena, III', 'Luis', 'COL003', 1),
('2012-1109F', 'Soriano', 'Melita', 'COL003', 1),
('2012-1213F', 'Barrera', 'Rexieden', 'COL003', 1),
('2012-9999F', 'Samac', 'Anthony', 'COL003', 1),
('2012-Avelino', 'Avelino', 'Arnel Magno', 'COL010', 1),
('2013-1008F', 'Pangilinan', 'Harold', 'COL002', 1),
('2013-1022F', 'Goyal', 'Ananias', 'COL002', 1),
('2013-1038F', 'Vista', 'Ludyvilla', 'COL009', 1),
('2013-1046F', 'Libranda - Paredes', 'Alma', 'COL009', 1),
('2013-1047F', 'Paras', 'Lloyd Alfred', 'COL009', 1),
('2013-1076F', 'Feraer', 'Jay Pee', 'COL009', 1),
('2013-1087F', 'Mendoza', 'Genson', 'COL008', 1),
('2013-1088F', 'Cajigas', 'Joven', 'COL008', 1),
('2013-1093F', 'Bartolata', 'Ivan', 'COL005', 1),
('2013-1095F', 'Tayson', 'Azelle Charese', 'COL003', 1),
('2013-1096F', 'Lobo', 'Reymarie', 'COL005', 1),
('2013-1104F', 'Barrios', 'Jebbie', 'COL004', 1),
('2013-1116F', 'Pilapil', 'Angelo Carlo', 'COL002', 1),
('2013-3333F', 'Abel', 'Antonio', 'COL003', 1),
('2013-5555F', 'Topacio', 'Anjerick', 'COL010', 1),
('2013-BERNARDINO', 'Bernardino', 'Jocelyn', 'COL010', 1),
('2014-0015F', 'Castor', 'Romy', 'COL001', 1),
('2014-0018F', 'Rajeev', 'Maria Lorna', 'COL005', 1),
('2014-0020F', 'Gamo', 'Catty Lea', 'COL003', 1),
('2014-0026F', 'Nsubuga', 'Elizabeth', 'COL008', 1),
('2014-0043F', 'Erni', 'Lowiesito', 'COL002', 1),
('2014-0050F', 'Cortiñas', 'Vincent', 'COL003', 1),
('2014-0053F', 'Punzalan', 'Brian James', 'COL010', 1),
('2014-0093F', 'Almazan', 'Lea Cristina', 'COL003', 1),
('2014-0097F', 'Amurao', 'Roi Allen', 'COL005', 1),
('2014-0100F', 'Descallar', 'Hannah', 'COL002', 1),
('2015-0001F', 'Carilla', 'Emmelyn', 'COL002', 1),
('2015-0013F', 'Canlas', 'Malory Blanche', 'COL005', 1),
('2015-0018N', 'Ferrer', 'Lizandro', 'COL002', 1),
('2015-0019N', 'Celis', 'Mark Irvin', 'COL005', 1),
('2015-0045F', 'Feranil', 'Edison', 'COL008', 1),
('2015-0060F', 'Santander', 'Zairel Allen', 'COL010', 1),
('2015-0066F', 'Berico', 'Dr. Mary Grace', 'COL003', 1),
('2015-0080F', 'Carandang', 'Ma. Carmelita', 'COL003', 1),
('2016-0002F', 'Oquias', 'Antonio Gregorio V.', 'COL004', 1),
('2016-0004F', 'Hernandez', 'Anna Editha', 'COL002', 1),
('2016-0004N', 'Laurel', 'Javier Antonio', 'COL004', 1),
('2016-0006N', 'Salazar', 'Krisma', 'COL003', 1),
('2016-0007N', 'Telmo - Gawaran', 'Cherry Rose', 'COL003', 1),
('2016-0008N', 'Taguba', 'Jeramie', 'COL002', 1),
('2016-0012F', 'Herrera', 'Sharmaine', 'COL005', 1),
('2016-0020F', 'Romero', 'Annalyn', 'COL010', 1),
('2016-0022F', 'Severino', 'John Paolo', 'COL010', 1),
('2016-0024F', 'Abonita', 'Annie', 'COL001', 1),
('2016-0044F', 'De leon', 'Kenneth Paul', 'COL002', 1),
('2016-0060F', 'Clave', 'Rosalie', 'COL005', 1),
('2016-0061F', 'Choco', 'Christian', 'COL002', 1),
('2016-0065F', 'Gohil', 'Limuel', 'COL002', 1),
('2016-0069F', 'Reyes', 'Jovy', 'COL002', 1),
('2016-0087F', 'Caringal - Camingay', 'Rothessa Mary', 'COL001', 1),
('2017-0013N', 'Rodriguez', 'Marvilyn', 'COL008', 1),
('2017-0021F', 'Cababa', 'Catherine', 'COL001', 1),
('2017-0023F', 'Quibel', 'Ma. Cecilia', 'COL007', 1),
('2017-0025F', 'Casol - Macapanas', 'Jonna', 'COL003', 1),
('2017-0030F', 'Ortiz', 'Evangeline', 'COL005', 1),
('2017-0032F', 'Tosco', 'Carmencita', 'COL002', 1),
('2017-0049F', 'Dela Torre', 'Regine Nicca', 'COL001', 1),
('2017-0093F', 'Saldivar', 'Leonardo', 'COL003', 1),
('2018-0001F', 'Alba', 'Carlo Edison', 'COL002', 1),
('2018-0005F', 'Pilapil', 'Mia Aiko', 'COL002', 1),
('2018-0007F', 'Abaya', 'Siva Das', 'COL010', 1),
('2018-0009F', 'Agrimano', 'John Paulo', 'COL010', 1),
('2018-0011F', 'Estrella', 'Fedelyn', 'COL001', 1),
('2018-0012F', 'Aterrado', 'Arzell', 'COL003', 1),
('2018-0021F', 'Tabisola', 'Mikah', 'COL005', 1),
('2018-0031F', 'Sibal', 'Drexler', 'COL010', 1),
('2018-0032F', 'Gillego', 'Jan Jarrel', 'COL007', 1),
('2018-0034F', 'Del Callar', 'Roel Renz', 'COL005', 1),
('2018-0035F', 'Arroyo-Vasquez', 'Mary Grace', 'COL002', 1),
('2018-0037F', 'Reyes', 'Rianne', 'COL010', 1),
('2018-0038F', 'Alvarez', 'Beverlyn', 'COL002', 1),
('2018-0041F', 'Reyes', 'Christine', 'COL005', 1),
('2018-0043F', 'Sy', 'Juanito', 'COL009', 1),
('2018-0045F', 'Melindo', 'Nino', 'COL002', 1),
('2018-0052F', 'Fainsan', 'Delia', 'COL010', 1),
('2018-0062F', 'Donguines', 'Antonio', 'COL002', 1),
('2018-0064F', 'Sison', 'Jeck Jefferson', 'COL003', 1),
('2018-0070F', 'Mag-usara', 'Arnel', 'COL002', 1),
('2018-0072F', 'Regalado', 'Elsa', 'COL007', 1),
('2018-0073F', 'Zapanta Jr.', 'Carmelo', 'COL010', 1),
('2018-0076F', 'Quequegan', 'Lex Daniel', 'COL003', 1),
('2018-0078F', 'Papa - Santos', 'Domynique', 'COL001', 1),
('2018-0082F', 'Toliba', 'Leymar', 'COL003', 1),
('2018-0086F', 'Balbin', 'Trissia Joy', 'COL003', 1),
('2018-0089F', 'Veva', 'Ryan', 'COL002', 1),
('2018-0098F', 'Bagay', 'Julia Francine', 'COL002', 1),
('2018-0099F', 'Asay', 'Lyka Marie Suzanne', 'COL002', 1),
('2018-0100F', 'Reyes', 'Khervy', 'COL002', 1),
('2018-0106F', 'Pelayo', 'Shiela Marie', 'COL010', 1),
('2018-0110F', 'Alvaran', 'Lynzee Kaye', 'COL001', 1),
('2019-0001F', 'Espinosa', 'Andrea Darla', 'COL001', 1),
('2019-0002F', 'Yacap', 'John Christopher', 'COL010', 1),
('2019-0004F', 'Bautista', 'Jorge Adeodatus', 'COL005', 1),
('2019-0006F', 'Masion', 'Rogel Francis', 'COL004', 1),
('2019-0007F', 'Santos', 'Luzviminda', 'COL002', 1),
('2019-0009F', 'Escat', 'Maricel', 'COL002', 1),
('2019-0015N', 'Bicada', 'Marc Mervin', 'COL002', 1),
('2019-0020F', 'Aguilar', 'Jason', 'COL008', 1),
('2019-0021F', 'Vicente', 'Alyssa', 'COL008', 1),
('2019-0022F', 'Año', 'Ram Yuri', 'COL010', 1),
('2019-0023F', 'Costelo', 'Mark', 'COL010', 1),
('2019-0024F', 'Javier', 'Francisco', 'COL010', 1),
('2019-0030F', 'Nueva Jr.', 'Alejandro', 'COL002', 1),
('2019-0038F', 'Vargas', 'Jonalyn', 'COL001', 1),
('2019-0041F', 'De Armas, Jr.', 'Ruben', 'COL010', 1),
('2019-0045F', 'Peji', 'Verna', 'COL002', 1),
('2019-0047F', 'Grepo', 'Jesse Raphael', 'COL002', 1),
('2019-0053F', 'Panganiban', 'Cherrie', 'COL001', 1),
('2019-0055F', 'Mendoza', 'Angelica', 'COL002', 1),
('2019-0056F', 'Gida', 'Melanie', 'COL002', 1),
('2019-0059F', 'Pallasigui', 'Angelica Irah Mari', 'COL002', 1),
('2019-0060F', 'De Jose', 'Jahnelle', 'COL009', 1),
('2019-0061F', 'Cañega', 'Tim Joshua', 'COL002', 1),
('2019-0062F', 'Elcano', 'Camille Faye', 'COL002', 1),
('2019-0063F', 'Grimaldo', 'Vjorn Christian', 'COL002', 1),
('2019-0070F', 'Buenconsejo', 'Abram Nikolaus', 'COL002', 1),
('2019-0080F', 'Valencia', 'Arlyn Jierah', 'COL005', 1),
('2019-0082F', 'Medina', 'Mary Grace', 'COL007', 1),
('2019-0084F', 'Isaguirre', 'Luisa', 'COL007', 1),
('2019-0086F', 'Navarro', 'Franz Edrick', 'COL009', 1),
('2019-0097F', 'Timbol', 'Diosary', 'COL004', 1),
('2019-0100F', 'Prudenciado', 'Ma. Paulyn', 'COL004', 1),
('2019-0106F', 'Viado', 'Renen Paul', 'COL008', 1),
('2019-0108F', 'Peren', 'Katherine', 'COL005', 1),
('2019-0109F', 'De Chavez', 'Mark Jayson', 'COL005', 1),
('2019-0110F', 'Bautista', 'Gemma', 'COL005', 1),
('2019-0119F', 'Menta', 'Amanda Jane', 'COL008', 1),
('2020-0006F', 'Zamora', 'Jershiela', 'COL005', 1),
('2020-0008F', 'Garcia', 'Dan Miguel Antonio', 'COL005', 1),
('2020-0011F', 'Calvo', 'Joshua', 'COL005', 1),
('2020-0012F', 'Castillo', 'Kim Marie', 'COL005', 1),
('2020-0013F', 'Guloy', 'Richard', 'COL005', 1),
('2020-0014F', 'Remaneses', 'Nico', 'COL005', 1),
('2020-0015F', 'David', 'Joseph Vincent', 'COL010', 1),
('2020-0018F', 'Corong', 'Jorge', 'COL004', 1),
('2020-0019F', 'Dimaculangan', 'Marianne', 'COL002', 1),
('2020-0023F', 'Sagum', 'Cristina', 'COL005', 1),
('2020-0026F', 'Limson', 'Allan John', 'COL010', 1),
('2020-0027F', 'Tapdasan', 'Feloteo', 'COL010', 1),
('2020-0029F', 'Pacas', 'Jizil', 'COL003', 1),
('2020-0032F', 'Penus', 'Ray-Ann', 'COL002', 1),
('2020-0033F', 'Dela Rosa', 'Vienna Mae', 'COL001', 1),
('2021-0039F', 'Cesista', 'Eliza Marie', 'COL003', 1),
('2021-0040F', 'Sundiam', 'Abegail', 'COL002', 1),
('2021-0041F', 'Banghero', 'Richard Hayao', 'COL003', 1),
('2021-0049F', 'Mercado-Danque', 'Margered', 'COL005', 1),
('2021-0050F', 'Corpuz', 'Raizza', 'COL002', 1),
('2021-0051F', 'Cajoles - Doctor', 'Anabella', 'COL010', 1),
('2021-0052F', 'Pilapil', 'Jay-Anne', 'COL005', 1),
('2021-0053F', 'Basa', 'Laarni', 'COL003', 1),
('2021-0054F', 'Lualhati', 'Abel James', 'COL010', 1),
('2021-0056F', 'Roble', 'Karl', 'COL007', 1),
('2021-0063F', 'Herrera', 'Fraulein', 'COL003', 1),
('2021-0064F', 'Dagasdas', 'Jan Leander', 'COL003', 1),
('2021-0065F', 'Manaog', 'Queenee', 'COL009', 1),
('2021-0067F', 'Irinco', 'Arturo', 'COL001', 1),
('2021-0068F', 'Coguimbal', 'Ann Minnette', 'COL005', 1),
('2021-0069F', 'Martinez', 'Marlon', 'COL010', 1),
('2021-0070F', 'Hinahon', 'Noli', 'COL001', 1),
('2021-0071F', 'Angeles', 'John Nichol', 'COL007', 1),
('2021-0073F', 'Francisco', 'Evangeline', 'COL007', 1),
('2021-0074F', 'Talamayan', 'Kenneth', 'COL003', 1),
('2021-0076F', 'Quiñones', 'Gilda', 'COL002', 1),
('2021-0077F', 'Borda', 'James', 'COL002', 1),
('2021-0081F', 'Romerosa', 'Daryl Vince', 'COL010', 1),
('2021-0082F', 'Ramos', 'Chona', 'COL002', 1),
('2021-1006F', 'Mojica', 'Edison', 'COL010', 1),
('2021-1009F', 'Mamaril', 'Aldrin Ron', 'COL009', 1),
('2021-1010F', 'Miguel', 'Armhel Jay', 'COL007', 1),
('2021-1016F', 'Asi', 'Jestoni', 'COL010', 1),
('2021-1023F', 'Inawat', 'Alain', 'COL005', 1),
('2022-0007F', 'Garcia', 'Clarisse', 'COL003', 1),
('2022-0008F', 'Esquivel', 'Glenn Louise', 'COL005', 1),
('2022-0009F', 'Globa', 'Virnard', 'COL003', 1),
('2022-0011F', 'Gabriel', 'Elvira', 'COL005', 1),
('2022-0012F', 'Vaswani', 'Jeetendra', 'COL005', 1),
('2022-0013F', 'Acayen', 'Felicia Chantal', 'COL005', 1),
('2022-0017F', 'Tolentino', 'Vladimir Karl', 'COL002', 1),
('2022-0019F', 'Guevarra', 'Glenn', 'COL010', 1),
('2022-0020F', 'Tepace', 'James', 'COL010', 1),
('2022-0021F', 'Austria', 'Justine Queen', 'COL005', 1),
('2022-0030F', 'Orig', 'Glenn Christian', 'COL001', 1),
('2022-0031F', 'Villanueva', 'Kharin', 'COL007', 1),
('2022-0034F', 'San Gabriel', 'Ma. Eleonor', 'COL001', 1),
('2022-0035F', 'Vergara', 'Maria Ahren', 'COL002', 1),
('2022-0036F', 'Lintao', 'Caridad', 'COL007', 1),
('2022-0037F', 'Yangyang', 'Anita', 'COL007', 1),
('2022-0041F', 'Peji', 'Isaiah Eugene', 'COL002', 1),
('2022-0042F', 'Bunyi', 'Marison Ann', 'COL007', 1),
('2022-0044F', 'Dizon', 'Jazel', 'COL010', 1),
('2022-0046F', 'Ornopia', 'Jessa', 'COL010', 1),
('2022-0048F', 'Pabayo', 'Alex', 'COL010', 1),
('2022-0050F', 'Sumbilla', 'Jim Ryan', 'COL002', 1),
('2022-0051F', 'Espineli', 'Juliette', 'COL002', 1),
('2022-0052F', 'Fortuno', 'Nizell', 'COL002', 1),
('2022-0053F', 'Soriano', 'Rubielen', 'COL002', 1),
('2022-0054F', 'Pabalan', 'Allysa Marri', 'COL002', 1),
('2022-0055F', 'Nuestro', 'Russel Philip', 'COL002', 1),
('2022-0056F', 'Baes', 'Larry', 'COL002', 1),
('2022-0057F', 'Guisinga', 'Harold John', 'COL001', 1),
('2022-0058F', 'Pitagan', 'Paolo', 'COL001', 1),
('2022-0059F', 'Garrido', 'Anthony', 'COL009', 1),
('2022-0060F', 'Peñas', 'Rex', 'COL010', 1),
('2022-0061F', 'Alvarez', 'Crizzalyn', 'COL005', 1),
('2022-0063F', 'Dela Cruz', 'Criselda Joy', 'COL005', 1),
('2022-0064F', 'Palencia', 'Jellie Anne', 'COL005', 1),
('2022-0067F', 'De Lara', 'Estela', 'COL003', 1),
('2022-0068F', 'Cabili', 'Ma. Vida', 'COL003', 1),
('2022-0073F', 'Trinidad', 'Blaise Aeaea', 'COL004', 1),
('2022-0074F', 'Pocaan', 'Alyssa Paola', 'COL008', 1),
('2022-0075F', 'Lingan', 'Rose Marie', 'COL008', 1),
('2022-0076F', 'Alpuerto', 'Nino', 'COL010', 1),
('2022-0078F', 'Chavez', 'Jessa', 'COL003', 1),
('2022-0079F', 'Belinario', 'Christine', 'COL005', 1),
('2022-0081F', 'Marquez', 'Rachel Jenil', 'COL005', 1),
('2022-0082F', 'Acosta', 'Christo Bien', 'COL002', 1),
('2022-0083F', 'Peñafiel', 'Cristina', 'COL002', 1),
('2022-0084F', 'Ramos', 'Angelika', 'COL001', 1),
('2022-0085F', 'Carandang', 'Khimberlyn', 'COL005', 1),
('2022-0086F', 'Angara', 'Kim Joshua', 'COL005', 1),
('2022-0087F', 'Geong', 'Seong Han', 'COL002', 1),
('2022-0089F', 'Dellosa', 'Marechris', 'COL002', 1),
('2022-0090F', 'Medina', 'Vienna Faye', 'COL004', 1),
('2022-0093F', 'Oñate', 'Ivy', 'COL002', 1),
('2022-0094F', 'Rufo', 'Jovan', 'COL002', 1),
('2022-0095F', 'Chartier', 'Adelaine', 'COL002', 1),
('2022-0096F', 'Dizon', 'Benjamin', 'COL002', 1),
('2022-0097F', 'Rojales', 'Gemma', 'COL002', 1),
('2022-0105F', 'Fernandez', 'Karen', 'COL005', 1),
('2022-0108F', 'Plana', 'Jaymark', 'COL007', 1),
('2022-0110F', 'Rosario', 'John Gabriel', 'COL007', 1),
('2022-0111F', 'Soriano', 'Jayvie', 'COL001', 1),
('2022-0112F', 'Arandia', 'Joselle Vincent', 'COL001', 1),
('2022-0115F', 'Buldah', 'Zillah', 'COL003', 1),
('2022-0116F', 'Gono', 'Sean Charlston', 'COL010', 1),
('2022-0117F', 'Lambinicio', 'Jopet', 'COL008', 1),
('2022-0118F', 'Leyva', 'Nympha', 'COL002', 1),
('2022-0119F', 'Ladob', 'Josh', 'COL004', 1),
('2022-0121F', 'Pahoway', 'Joyce Marie', 'COL002', 1),
('2022-0122F', 'Balano', 'Gabriel', 'COL002', 1),
('2022-0123F', 'Martino', 'Letecia', 'COL002', 1),
('2022-0124F', 'Dela Torre', 'Lilibeth', 'COL002', 1),
('2022-0125F', 'Espiritu', 'Daryl Joshua', 'COL002', 1),
('2022-0126F', 'Himalin', 'Cheska Florence', 'COL002', 1),
('2022-0127F', 'Lazo', 'John Christian', 'COL002', 1),
('2022-0128F', 'San Carlos', 'Joselito Jr.', 'COL002', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `id` int(11) NOT NULL,
  `schedule_id` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `subject_desc` varchar(250) NOT NULL,
  `section` varchar(100) NOT NULL,
  `schedule_time1` varchar(100) NOT NULL,
  `schedule_time2` varchar(100) NOT NULL,
  `term_period` int(10) NOT NULL,
  `date_registered` varchar(100) NOT NULL,
  `active_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_schedule`
--

INSERT INTO `tbl_schedule` (`id`, `schedule_id`, `faculty_id`, `subject_code`, `subject_desc`, `section`, `schedule_time1`, `schedule_time2`, `term_period`, `date_registered`, `active_flag`) VALUES
(9, 'SCHED_001', '2022-0074F', 'CPHN01C', 'Quality Consciousness, Processes, and Habits', 'IT103', '4:30 PM', '6:00 PM', 1, '2022-10-20, 06:59 AM', 1),
(10, 'SCHED_001', '2022-0074F', 'ICTN05C', 'Integrative Programming and Technologies', 'IT301', '4:30 PM', '6:00 PM', 2, '2022-10-20, 06:59 AM', 1),
(11, 'SCHED_003', '2022-0075F', 'AA', 'BB', 'CC', '4:00 AM', '7:00 PM', 1, '2022-10-23, 12:22 AM', 1),
(12, 'SCHED_003', '2022-0075F', '11', '22', '44', '7:30 AM', '6:00 PM', 3, '2022-10-23, 12:22 AM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule_temp`
--

CREATE TABLE `tbl_schedule_temp` (
  `id` int(11) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `subject_desc` varchar(250) NOT NULL,
  `section` varchar(100) NOT NULL,
  `schedule_time1` varchar(100) NOT NULL,
  `schedule_time2` varchar(100) NOT NULL,
  `term_period` int(10) NOT NULL,
  `active_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_schedule_temp`
--

INSERT INTO `tbl_schedule_temp` (`id`, `faculty_id`, `subject_code`, `subject_desc`, `section`, `schedule_time1`, `schedule_time2`, `term_period`, `active_flag`) VALUES
(21, '2022-0074F', 'CPHN01C', 'Quality Consciousness, Processes, and Habits', 'IT103', '4:30 PM', '6:00 PM', 1, 0),
(22, '2022-0074F', 'ICTN05C', 'Integrative Programming and Technologies', 'IT301', '4:30 PM', '6:00 PM', 2, 0),
(24, '2022-0075F', 'AA', 'BB', 'CC', '4:00 AM', '7:00 PM', 1, 0),
(25, '2022-0075F', '11', '22', '44', '7:30 AM', '6:00 PM', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_asynchronous_schedule`
--
ALTER TABLE `tbl_asynchronous_schedule`
  ADD PRIMARY KEY (`async_id`);

--
-- Indexes for table `tbl_college`
--
ALTER TABLE `tbl_college`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD PRIMARY KEY (`faculty_id`),
  ADD KEY `college_id` (`college_id`);

--
-- Indexes for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_schedule_temp`
--
ALTER TABLE `tbl_schedule_temp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_schedule_temp`
--
ALTER TABLE `tbl_schedule_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD CONSTRAINT `tbl_faculty_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `tbl_college` (`college_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
