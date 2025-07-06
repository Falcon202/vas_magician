
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

