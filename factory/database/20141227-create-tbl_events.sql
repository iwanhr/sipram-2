CREATE TABLE IF NOT EXISTS `tbl_event` (
`id_event` int(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_type` int(1) NOT NULL,
  `event_program` int(1) NOT NULL,
  `event_date_start` date DEFAULT NULL,
  `event_date_end` date DEFAULT NULL,
  `event_time_start` time DEFAULT NULL,
  `event_time_end` time DEFAULT NULL,
  `event_short_description` varchar(255) DEFAULT NULL,
  `event_description` text,
  `event_author` varchar(200) DEFAULT NULL,
  `event_status` int(1) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `creator` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `tbl_event`
 ADD PRIMARY KEY (`id_event`);
