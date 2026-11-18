
INSERT INTO `saison` (`idSais`, `libelleSais`) VALUES
(1, 'Hiver'),
(2, 'Printemps'),
(3, 'Ete'),
(4, 'Automne');

INSERT INTO `aliment` (`idAl`, `libelleAl`, `stockAl`) VALUES
(1, 'Tomate', 300),
(2, 'Cerise', 200),
(3, 'Courgette', 200),
(4, 'Frisee', 100),
(5, 'Endive', 200);



INSERT INTO `aliment_saison` (`idSais`, `idAl`, `prix`) VALUES
(2, 1, 4),
(3, 1, 3),
(3, 2, 5),
(2, 3, 3),
(3, 3, 2),
(1, 4, 3),
(4, 4, 3),
(1, 5, 4),
(2, 5, 3);







