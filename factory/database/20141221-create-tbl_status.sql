CREATE TABLE IF NOT EXISTS `tbl_status` (
`id_status` int(11) NOT NULL,
  `nama_status` varchar(45) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id_status`, `nama_status`, `keterangan`) VALUES
(1, 'verified', NULL),
(2, 'menunggu verifikasi email', NULL),
(3, 'banned', NULL),
(4, 'unverified', NULL),
(5, 'deleted', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
 ADD PRIMARY KEY (`id_status`);
