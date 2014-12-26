CREATE TABLE IF NOT EXISTS `mailer` (
`idmailer` int(11) NOT NULL,
  `mailer_module` varchar(30) NOT NULL,
  `mailer_from` varchar(200) NOT NULL,
  `mailer_to` varchar(200) NOT NULL,
  `mailer_cc` text,
  `mailer_bcc` text,
  `mailer_subject` varchar(200) NOT NULL,
  `mailer_message` longtext NOT NULL,
  `mailer_status` varchar(10) NOT NULL,
  `mailer_created` datetime DEFAULT NULL,
  `mailer_sent` datetime DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `mailer`
 ADD PRIMARY KEY (`idmailer`);
