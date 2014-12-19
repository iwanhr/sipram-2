CREATE TABLE IF NOT EXISTS `tbl_level` (
  `id_level` int(10) NOT NULL,
  `level_name` varchar(100) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_level`
--

INSERT INTO `tbl_level` (`id_level`, `level_name`, `keterangan`) VALUES
(1, 'Super Admin', NULL),
(2, 'Administrator', NULL),
(3, 'Pengurus', NULL),
(4, 'IT Team', NULL),
(5, 'Member', NULL),
(6, 'Contributor', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_level`
--
ALTER TABLE `tbl_level`
 ADD PRIMARY KEY (`id_level`);
