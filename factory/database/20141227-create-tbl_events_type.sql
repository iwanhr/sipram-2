REATE TABLE IF NOT EXISTS `tbl_event_type` (
`id_event_type` int(100) NOT NULL,
  `id_parent_type` int(1) NOT NULL,
  `event_type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `tbl_event_type`
 ADD PRIMARY KEY (`id_event_type`);

ALTER TABLE `tbl_event_type`
MODIFY `id_event_type` int(100) NOT NULL AUTO_INCREMENT;
