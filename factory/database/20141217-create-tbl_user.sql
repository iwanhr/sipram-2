REATE TABLE IF NOT EXISTS `tbl_user` (
`id_user` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `id_status` int(1) DEFAULT NULL,
  `id_level` int(1) DEFAULT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `activate` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT;
