CREATE TABLE `usuarios` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `login` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
    `senha` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
    `pontos` int(11) unsigned NOT NULL DEFAULT '0',
    PRIMARY KEY (`ID`),
    UNIQUE KEY `login` (`login`)
)
    ENGINE=InnoDB
    AUTO_INCREMENT=1;


INSERT INTO `usuarios`
    (`login`, `senha`)
VALUES
    ('LipESprY', 'umaSenhaQualquer'),
    ('LipESprY2', 'umaSenhaQualquer'),
    ('felipe', 'umaSenhaQualquer'),
    ('felipemoraes', 'umaSenhaQualquer');
