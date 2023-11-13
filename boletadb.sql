-- Data:    MySQL Server
-- Autor:   Jhon Waldir Guerra Bellido
-- PHP V:   7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


-- -----------------------------------------------------
CREATE TABLE tblTrabajador (
  IDTRABAJADOR    int(11) PRIMARY KEY NOT NULL,
  DNI             varchar(8) DEFAULT NULL,
  APELLIDOS       int(90) NOT NULL,
  NOMBRES         varchar(90) NOT NULL,
  FECHANACIMIENTO DATE NOT NULL,
  CELULAR         VARCHAR(9) NOT NULL
) ENGINE=InnoDB   DEFAULT CHARSET=utf8;

INSERT INTO tblTrabajador (IDTRABAJADOR, DNI, APELLIDOS, NOMBRES, FECHANACIMIENTO, CELULAR) VALUES
(100, '74073759', 2, 'GUERRA BELLIDO', 'JHON WALDIR', '961170584'),
(101, '74073760', 2, 'QUISPE BELLIDO', 'LUIS ALBERTO', '961170585');
-- -----------------------------------------------------

CREATE TABLE tblBoleta (
  IDBOLETA int(11) PRIMARY KEY NOT NULL,
  IDTRABAJADOR int(11) NOT NULL,
  BOLETAUBICACION varchar(255) NOT NULL,
  ANIO VARCHAR(4) NOT NULL,
  FOREIGN KEY (IDTRABAJADOR) REFERENCES tblTrabajador(IDTRABAJADOR)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO tblBoleta (IDBOLETA, IDTRABAJADOR, BOLETAUBICACION, ANIO) VALUES
(1111, 100, 'boletas/boleta_2022_1_74073759.pdf', '2022'),
(1112, 100, 'boletas/boleta_2022_2_74073759.pdf', '2022'),
(1113, 100, 'boletas/boleta_2023_1_74073759.pdf', '2023'),
(1114, 101, 'boletas/boleta_2023_1_74073760.pdf', '2023');

-- --------------------------------------------------------
CREATE TABLE `tblautonumbers` (
  `AUTOID` int(11) NOT NULL,
  `AUTOSTART` varchar(30) NOT NULL,
  `AUTOEND` int(11) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOKEY` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tblautonumbers` (`AUTOID`, `AUTOSTART`, `AUTOEND`, `AUTOINC`, `AUTOKEY`) VALUES
(3, '0', 16, 1, 'IDBOLETA'),
(4, '100', 29, 1, 'IDTRABAJADOR');


--
-- Indexes for table `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  ADD PRIMARY KEY (`AUTOID`);

--
-- AUTO_INCREMENT for table tblBoleta
--
ALTER TABLE tblBoleta
MODIFY IDBOLETA int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;