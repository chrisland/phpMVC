<?php if ( !defined('CMS_EXEC') ) { exit; } ?>

<h1>Home</h1>



<h2>Install SQL</h2>

<textarea style="width: 60vw; height: 50vh;">

--
-- Tabellenstruktur für Tabelle `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `state` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `lessons`
--

CREATE TABLE IF NOT EXISTS `lessons` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `order` int(3) DEFAULT NULL,
  `state` int(1) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `lesson_item`
--

CREATE TABLE IF NOT EXISTS `lesson_item` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `lesson_id` int(4) DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL,
  `content` text,
  `typ_id` int(4) DEFAULT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `lesson_typ`
--

CREATE TABLE IF NOT EXISTS `lesson_typ` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `state` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `state` int(1) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users_lessons`
--

CREATE TABLE IF NOT EXISTS `users_lessons` (
  `user_id` int(5) DEFAULT NULL,
  `lesson_id` int(4) DEFAULT NULL,
  `active_item` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

</textarea>