CREATE TABLE IF NOT EXISTS `tbl_post` (
  `id_post` int(255) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_slug` varchar(255) DEFAULT NULL,
  `post_url` varchar(255) DEFAULT NULL,
  `post_category` varchar(100) NOT NULL,
  `post_channel` varchar(100) NOT NULL,
  `post_status` int(1) NOT NULL DEFAULT '0',
  `post_author` int(100) NOT NULL,
  `post_content` text NOT NULL,
  `post_short_content` text NOT NULL,
  `created` datetime NOT NULL,
  `creator` int(11) NOT NULL,
  `changed` decimal(10,0) DEFAULT NULL,
  `changer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `tbl_post`
 ADD PRIMARY KEY (`id_post`);
