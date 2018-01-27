CREATE DATABASE IF NOT EXISTS crud_simple CHARACTER SET utf8 COLLATE utf8_general_ci;

USE crud_simple;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`) VALUES
(1, 'EricCarman', 'spike@southpark.com'),
(2, 'KyleBroflovski', 'kbroflovski@southpark.com'),
(3, 'StanMarsh', 'smarsh@southpark.com'),
(4, 'KennyMcCormick', 'kmccormick@southpark.com'),
(5, 'ButtersStotch', 'bstotch@southpark.com'),
(6, 'CraigTucker', 'ctucker@southpark.com'),
(7, 'TweekTweak', 'ttweak@southpark.com'),
(8, 'JimmyValmer', 'jvalmer@southpark.com'),
(9, 'RandyMars', 'rmars@southpark.com');
