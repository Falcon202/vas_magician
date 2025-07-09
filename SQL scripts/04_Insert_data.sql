
USE vas_magician_db;

SET NAMES utf8mb4;



INSERT INTO `User` (`id`, `username`, `password`) VALUES
(1, 'admin@admin.cz', '$2y$12$QVrZ/n33ZeFbr1CWz0AnpuBk2AMHBQLHjsIhDOPAd4.TFlWSb7GX2')
;


INSERT INTO `Category` (`id`, `name`) VALUES
(1, 'akce pro děti'),
(2, 'svatby'),
(3, 'firemní večírky'),
(4, 'ostatní')
;

INSERT INTO `Blog` (`id`, `name`, `date`, `location`, `location2`, `text`, `category_id`, `is_disabled`) VALUES
(1,	'Svatba Michala a Lucky',	'2024-07-20',	'Praha',	'Park u zamilovaných',	'Podrobný popis ohledně proběhlé akce',	2, 0),
(2,	'Dětský den v Kladně',	'2024-09-08',	'Kladno',	'Showroom Kladno',	'Podrobný popis ohledně proběhlé akce',	1, 0),
(3,	'Dětská oslava v Říčanech',	'2024-07-25',	'Říčany',	'Rodinný dům',	'Podrobný popis ohledně proběhlé akce',	1, 0),
(4,	'Kouzelná show v Liberci',	'2024-06-20',	'Liberec',	'Liberecká showroom',	'Podrobný popis ohledně proběhlé akce',	1, 0),
(5,	'Firemní večírek v Brně',	'2024-03-13',	'Brno',	'Multifunkční sál Brňák',	'Podrobný popis ohledně proběhlé akce',	3, 0),
(6,	'Svatba Lukáše a Elišky',	'2024-10-03',	'Chomutov',	'Statek Krásná svatba',	'Podrobný popis ohledně proběhlé akce',	2, 0),
(7,	'Kouzelná show v exteriéru',	'2024-08-01',	'Karlovy Vary',	'Karlovská ulice',	'Podrobný popis ohledně proběhlé akce',	4, 0),
(8,	'Firemní večírek Praha',	'2024-04-06',	'Praha',	'Kongresový sál Pražanda',	'Podrobný popis ohledně proběhlé akce',	3, 0),
(9,	'firemní oslava Teplice',	'2024-04-14',	'Teplice',	'Firma teplický',	'Podrobný popis ohledně proběhlé akce',	3, 0)
;

/*
INSERT INTO `Blog` (`name`, `date`, `location`, `location2`, `text`, `category_id`, `is_disabled`) VALUES
('2Svatba Michala a Lucky',	'2024-07-20',	'Praha',	'Park u zamilovaných',	'Podrobný popis ohledně proběhlé akce',	2, 0),
('2Dětský den v Kladně',	'2024-09-08',	'Kladno',	'Showroom Kladno',	'Podrobný popis ohledně proběhlé akce',	1, 0),
('2Dětská oslava v Říčanech',	'2024-07-25',	'Říčany',	'Rodinný dům',	'Podrobný popis ohledně proběhlé akce',	1, 0),
('2Kouzelná show v Liberci',	'2024-06-20',	'Liberec',	'Liberecká showroom',	'Podrobný popis ohledně proběhlé akce',	1, 0),
('2Firemní večírek v Brně',	'2024-03-13',	'Brno',	'Multifunkční sál Brňák',	'Podrobný popis ohledně proběhlé akce',	3, 0),
('2Svatba Lukáše a Elišky',	'2024-10-03',	'Chomutov',	'Statek Krásná svatba',	'Podrobný popis ohledně proběhlé akce',	2, 0),
('2Kouzelná show v exteriéru',	'2024-08-01',	'Karlovy Vary',	'Karlovská ulice',	'Podrobný popis ohledně proběhlé akce',	4, 0),
('2Firemní večírek Praha',	'2024-04-06',	'Praha',	'Kongresový sál Pražanda',	'Podrobný popis ohledně proběhlé akce',	3, 0),
('2firemní oslava Teplice',	'2024-04-14',	'Teplice',	'Firma teplický',	'Podrobný popis ohledně proběhlé akce',	3, 0)
;
*/
