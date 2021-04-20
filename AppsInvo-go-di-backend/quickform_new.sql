-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 02:13 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quickform_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `qwikfarm_advertisements`
--

CREATE TABLE `qwikfarm_advertisements` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `title` varchar(255) DEFAULT NULL,
  `sub_category_id` int(11) UNSIGNED DEFAULT NULL,
  `description` text,
  `address` text,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `type` tinyint(2) UNSIGNED DEFAULT '1' COMMENT '1 for sell, 2 for buy, 3 for exchange',
  `price` varchar(255) DEFAULT NULL,
  `currency` int(11) DEFAULT NULL,
  `organic` tinyint(2) UNSIGNED DEFAULT '0' COMMENT '1 for organic and 0 for not',
  `featured` tinyint(2) UNSIGNED DEFAULT '0' COMMENT '1 for featured and 0 for not',
  `exchange_image1` text,
  `exchange_title` varchar(255) DEFAULT NULL,
  `exchange_quantity` varchar(255) DEFAULT NULL,
  `exchange_condition` text,
  `status` tinyint(2) UNSIGNED DEFAULT '1' COMMENT '1 for active and 0 for inactive',
  `updated_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwikfarm_advertisements`
--

INSERT INTO `qwikfarm_advertisements` (`id`, `user_id`, `image1`, `image2`, `image3`, `image4`, `title`, `sub_category_id`, `description`, `address`, `latitude`, `longitude`, `type`, `price`, `currency`, `organic`, `featured`, `exchange_image1`, `exchange_title`, `exchange_quantity`, `exchange_condition`, `status`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 10, '201706141455281497452128flzckay0qaqg8phw4b26.jpeg', NULL, NULL, NULL, 'Noida', 1, 'Description', 'Noida, Uttar Pradesh, India', '28.5355161', '77.3910265', 1, '111', 0, 0, 0, NULL, NULL, NULL, NULL, 1, '2017-06-16 12:53:09', '2018-02-15 10:41:58', '2017-06-16 12:53:09'),
(2, 9, NULL, NULL, NULL, NULL, 'hellllllo', 1, 'xbxnnxxmxmmxmxmmxmxmxmsmdmmdms', 'Delray Beach', '26.4614625', '-80.0728201', 1, '63', 0, 1, 1, '201706141525551497453955572anc0ow4e2lx1zf0z9.jpg', 'dsgzt', '32', 'fdydru', 1, '2017-06-14 15:25:55', '2018-02-20 05:48:17', NULL),
(3, 9, '201706150605211497506721oe4js3j9y0st5ltyiirh.jpg', NULL, NULL, NULL, 'xnnddnjd', 1, 'bzbzbzn', 'Noida, Uttar Pradesh, India', '28.6618976', '77.2273958', 1, '33', 0, 1, 1, NULL, NULL, NULL, NULL, 1, '2017-06-15 06:05:21', '2018-02-15 12:29:11', NULL),
(4, 9, '201706150606221497506782xzb3pckca59ykdicg1le.jpg', NULL, NULL, NULL, 'hdhdjdjdjdj', 1, 'dbdhdjdjdjjs', 'Delhi', '28.6618976', '77.2273958', 1, '33', 0, 1, 1, NULL, NULL, NULL, NULL, 1, '2017-06-15 06:06:25', '2017-09-28 05:59:54', NULL),
(5, 9, '2017061510035914975210398wm44ar9dh2pqbxf0i94.jpg', NULL, NULL, NULL, 'fghjkkk', 1, 'fu jjjjkudufucjv', 'Wave City Center', '28.5747441', '77.3560263', 3, '141', 0, 1, 1, '201706151003591497521039u47n31x5vs84ov9t612j.jpg', 'heeelllloooo', '2', 'xbbxnxndnddbdndb sjksksks jsjskkekeke ndmksk', 1, '2017-06-15 10:03:59', '2017-09-28 05:59:50', NULL),
(6, 10, '201706160749301497599370n41zq44xroexfjqwrjz6.jpg', NULL, NULL, NULL, 'ljlfjdslfjsdl', 1, 'hghghghhhhhhhhhhhhdj dhddh hdhddhh eududhf dhdhddhdhc hdhddh hedhdhh hedhdhddeh dhdhdhffhfh dhdhddhdhdhdhhdhdhddhddhdhdhdhddhhdhdddhdbh hhdfhfhfhfhffhdhddhdhdhhdhddhh hhdfhfh hdhdhdhddhdhfhdhdhdhdhdhdhdhdhhddh yehrddhehrhrhrhdhdhdgh hdheddhdhdhddhdhehh heehehehehehf hdhegergehegrg yeyeehehrhrh yeyeeyyeehey yeyeyeyeyeyeheh ydyeyeheyrry yeyeryryfhhqwgdgdgegwhdhdhfhdhdfhhfhddhh yeeydhrh the he her he he he he he weheuehehehehrhrrhdhdhdhdh yeueheheeheheheheheheh heeyeheheheehehehehehehh vyeehehehehf', 'Haryana', '29.0587757', '76.085601', 2, '45', 0, 1, 0, NULL, NULL, NULL, NULL, 1, '2017-06-16 12:53:09', '2017-09-28 05:59:42', '2017-06-16 12:53:09'),
(7, 44, '201706161323331497619413kp78hkzm0mwfhlhb5x3b.jpg', NULL, NULL, NULL, 'vhhj', 1, 'cgvhhvjbjbbj', 'Delhi', '28.6618976', '77.2273958', 2, '11', 0, 1, 0, NULL, NULL, NULL, NULL, 1, '2017-06-16 13:23:33', '2017-06-16 20:23:33', NULL),
(8, 44, '201706161415011497622501ruqk7wop18z0o0yo1ndf.jpg', NULL, NULL, NULL, 'xjbxjbxhzkzojs', 1, 'xmmxmmxdmmdmxmddm', 'New Ashok Nagar', '28.592991399999995', '77.3051591', 2, '99', 0, 0, 0, NULL, NULL, NULL, NULL, 1, '2017-06-16 14:15:01', '2017-06-16 21:15:01', NULL),
(9, 49, '2017061615493514976281759w3vvdaq2hh5ns8e075b.jpg', '201706161549351497628175jwf7i157wly5h11deb4h.jpg', NULL, NULL, 'Contact me for any exchange', 1, 'hddhjdnf hddhjdnf hdhdj\nfdjdjdjd', 'Noida, Uttar Pradesh, India', '28.9844618', '77.7064137', 3, '566', 0, 0, 0, '201706161549351497628175tlmheuve20qlw5sf7yn3.jpg', 'hdhdhdbdn', '12', 'dhhfhf hdehje hehehe\nfdjdjdjd hdehje', 1, '2017-06-16 15:49:36', '2018-02-15 12:30:13', NULL),
(10, 28, '20170616163020149763062075k77n7jfbm6ym91t6rz.jpg', NULL, NULL, NULL, 'hello', 1, 'fgh', 'Usak', '38.6742286', '29.4058825', 1, '12', 0, 0, 0, NULL, NULL, NULL, NULL, 1, '2017-06-16 16:30:20', '2017-06-16 23:30:20', NULL),
(11, 20, '201706161715251497633325lrurq8d62tknfzlqp33v.jpeg', NULL, NULL, NULL, 'thug', 3, 'Hhhjh', 'Noida, Uttar Pradesh, India', '28.5355161', '77.3910265', 3, '444', 0, 1, 1, '2017061617152514976333258fz3p8098tftl9lbiyhk.jpeg', 'jvvuufuf', '455', 'Vufuvucvu', 1, '2017-06-16 17:15:25', '2017-06-17 00:15:25', NULL),
(12, 20, '201706161721291497633689vchp3ah9usj7dwq9zccf.jpeg', NULL, NULL, NULL, 'dcgf', 3, 'Description', 'Noida, Uttar Pradesh, India', '28.5355161', '77.3910265', 1, '4', 0, 1, 1, NULL, NULL, NULL, NULL, 1, '2017-06-16 17:21:29', '2018-02-09 10:46:29', NULL),
(13, 20, '201706161724451497633885zrkoama6n64jjl8mwpwq.jpeg', NULL, NULL, NULL, 'fhchffh', 3, 'Gjjvjv', 'Noida, Uttar Pradesh, India', '28.5355161', '77.3910265', 2, '33', 0, 1, 1, NULL, NULL, NULL, NULL, 1, '2017-06-16 17:24:45', '2017-06-17 00:24:45', NULL),
(14, 20, '201706161725181497633918eboytsi20x6gcd7en8bh.jpeg', NULL, NULL, NULL, 'fhchffh', 3, 'Gjjvjv', 'Noida, Uttar Pradesh, India', '28.5355161', '77.3910265', 3, '33', 0, 1, 1, '201706161725181497633918sxmpqpziqh05tp3mhmph.jpeg', 'bbbb', '44', 'Ugh how', 1, '2017-06-16 17:25:18', '2017-06-17 00:25:18', NULL),
(15, 20, '201706161731431497634303dq1f5mloc2dcxclpxq4g.jpeg', '201706161731431497634303692i07tpbrlpim4n9qcl.jpeg', '201706161731431497634303spyq1kfzajfhsi0tpti1.jpeg', NULL, 'hi', 1, 'Ghhhhjfgg', '33428 Harsewinkel, Germany', '51.9642818', '8.2333679', 2, '12', 0, 0, 0, NULL, NULL, NULL, NULL, 1, '2017-06-16 17:31:43', '2017-06-17 00:31:43', NULL),
(16, 20, '201706161739081497634748ajekwaw8uldzal0ojlz3.jpeg', NULL, NULL, NULL, 'diff', 1, 'Ggggg', 'France', '46.227638', '2.213749', 2, '12', 0, 0, 0, NULL, NULL, NULL, NULL, 1, '2017-06-16 17:39:08', '2017-06-17 00:39:08', NULL),
(17, 20, '2017092512302315063426234qkjyseu0btsejoco6a0.jpg', NULL, NULL, NULL, 'Simi', 10, 'Hhhhhhh', 'Shahjahanpur, Uttar Pradesh, India', '27.883744', '79.9122455', 3, '43', 0, 1, 1, '201706210941101498038070657ohxjg0aw98hcomal1.jpeg', 'Boral', '45', 'Gfyfffy', 1, '2017-06-21 09:41:10', '2017-11-08 12:19:13', NULL),
(18, 53, '201706242026441498336004nff0hqhiup5yohk1g5jw.jpeg', '201706242026451498336005ygxdhv2qqveeaterkwae.jpeg', '201706242026451498336005lfcawxbc3v91c6et1gks.jpeg', NULL, 'greens', 1, 'Test', '13215 Brackley Rd, Silver Spring, MD 20904, USA', '39.073223', '-76.985892', 2, '15', 0, 1, 0, NULL, NULL, NULL, NULL, 1, '2017-06-24 20:26:45', '2017-06-25 03:26:45', NULL),
(19, 50, '201707051443021499265782lfp04kl06urjsephx7s1.jpeg', NULL, NULL, NULL, 'hi', 1, 'Dhhdhddjjddjdnd\nDjdjddjnd', 'U.S. 9, Manahawkin, NJ, USA', '39.7051343', '-74.2538623', 1, '25', 0, 0, 0, NULL, NULL, NULL, NULL, 1, '2017-07-05 14:43:02', '2017-07-05 21:43:02', NULL),
(20, 53, '201707051457271499266647232c5nsp9cw0lptpq2jg.jpeg', NULL, NULL, NULL, 'plantains for sale', 4, 'Plantains for sale', '13221 Bellaire Blvd, Houston, TX 77083, USA', '29.7024762', '-95.6155564', 1, '500', 0, 1, 0, NULL, NULL, NULL, NULL, 1, '2017-07-05 14:57:27', '2017-07-05 21:57:27', NULL),
(21, 53, '201707060330121499311812io6jmhih8nc2eru3i2fb.jpeg', NULL, NULL, NULL, 'collard greens', 1, 'Looking for 20 kilos of fresh collard greens', '13215 Brackley Rd, Silver Spring, MD 20904, USA', '39.073223', '-76.985892', 2, '300', 0, 1, 0, NULL, NULL, NULL, NULL, 1, '2017-07-06 03:30:12', '2017-07-06 10:30:12', NULL),
(22, 50, '201708300921081504084868hrku9c1tqrg3coktcl38.jpeg', NULL, NULL, NULL, 'hshdhdh', 5, 'Hgfgghg', 'Noida, Uttar Pradesh, India', '28.5355161', '77.3910265', 1, '300', 0, 1, 1, NULL, NULL, NULL, NULL, 1, '2017-08-30 09:21:08', '2017-08-30 16:21:08', NULL),
(23, 55, '201709080633011504852381w8x6eh0imzzlr3g5pjht.jpg', NULL, NULL, '2017090806330115048523816egb15f5wvds3azhs00f.jpg', 'test', 1, 'asydhfuxtiuxittiyfuifooioyiifi', 'Delhi', '28.6618976', '77.2273958', 1, '250', 0, 1, 1, NULL, NULL, NULL, NULL, 1, '2017-09-08 06:33:03', '2017-09-08 13:33:03', NULL),
(24, 57, '201709251225031506342303kogb3e90carp8oou3sxz.jpg', NULL, NULL, NULL, 'tesr', 7, 'hckihhhihhhg', 'Noida', '28.535516100000002', '77.3910265', 1, '223', 0, 1, 1, NULL, NULL, NULL, NULL, 1, '2017-09-25 12:25:03', '2017-09-25 19:25:03', NULL),
(26, 57, '201709251339251506346765xlxes5ihvagw5uvxm35d.jpg', NULL, NULL, NULL, 'ghyuio', 1, 'zbnsnsnsbz bzbzbzbznzn znnNz', 'Delhi', '28.6618976', '77.2273958', 3, '4994', 0, 1, 1, '201709251339251506346765fodk4vksojxm4v0x0iev.jpg', 'sbnsjsjjsj', '33', 'nxnznxmdndmdnbxbxnxn', 1, '2017-09-25 13:39:25', '2017-09-25 20:39:25', NULL),
(27, 57, '201709251339251506346765xlxes5ihvagw5uvxm35d.jpg', NULL, NULL, NULL, 'aaaaaa', 1, 'zbnsnsnsbz bzbzbzbznzn znnNz', 'Delhi', '28.6618976', '77.2273958', 3, '4994', 0, 1, 1, '201709251339251506346765fodk4vksojxm4v0x0iev.jpg', 'sbnsjsjjsj', '33', 'nxnznxmdndmdnbxbxnxn', 1, '2017-09-25 14:48:05', '2017-09-25 21:48:05', NULL),
(28, 54, '2017092607442515064118651r93mt7e8ngf3oovj309.jpg', NULL, NULL, NULL, 'Tablet', 1, 'svdlnsdjnsdcnsond ijcb dusdbu bsd usd isdi ndiou', 'Greater Noida', '28.4743879', '77.50399039999999', 1, '33', 0, 1, 1, NULL, NULL, NULL, NULL, 1, '2017-09-26 07:44:25', '2017-09-26 14:44:25', NULL),
(29, 57, '201709261309371506431377k4iyfdpuku7ra0q22v47.jpg', NULL, NULL, NULL, 'wets5y', 1, 'agsftjsykdyk', 'swesy5su', '987654', '765432', 1, '33', 0, 0, 1, NULL, NULL, NULL, NULL, 1, '2017-09-26 13:09:37', '2017-09-26 20:09:37', NULL),
(30, 57, '201709261310131506431413ia3hd968ak7cggt1t2xv.jpg', NULL, NULL, NULL, 'wets5y', 1, 'agsftjsykdyk', 'swesy5su', '987654', '765432', 1, '33', 0, 0, 1, NULL, NULL, NULL, NULL, 1, '2017-09-26 13:10:13', '2017-09-26 20:10:13', NULL),
(31, 57, '201709261310261506431426i2glkq1qtyuqoyoeyrq3.jpg', NULL, NULL, NULL, 'wets5y', 1, 'agsftjsykdyk', 'swesy5su', '987654', '765432', 1, '33', 0, 0, 1, NULL, NULL, NULL, NULL, 1, '2017-09-26 13:10:26', '2017-09-26 20:10:26', NULL),
(32, 60, '201709261325061506432306313ygonbg84x6eud58qp.jpg', NULL, NULL, NULL, 'nxmxmxmxmmx', 1, 'xmdmdmdmdksmmsmsm', 'Maharashtra', '19.7514798', '75.7138884', 1, '121', 0, 1, 1, NULL, NULL, NULL, NULL, 1, '2017-09-26 13:25:06', '2017-09-26 20:25:06', NULL),
(33, 43, '201709261519161506439156nvntx257gtowfj8qkic0.jpg', NULL, NULL, NULL, 'fyifihhfvhi', 1, 'cgjcgjcgjcgjcgjjc', 'Greater Noida', '28.4743879', '77.50399039999999', 1, '222', 0, 1, 1, NULL, NULL, NULL, NULL, 1, '2017-09-26 15:19:16', '2017-09-26 22:19:16', NULL),
(34, 43, '2017092615202215064392228q93igm44yf21r3dkdkh.jpg', NULL, NULL, NULL, 'buaabhbha', 7, 'vnguhjbjbjbj', 'Wave City Center', '28.5747441', '77.3560263', 1, '55', 0, 0, 0, NULL, NULL, NULL, NULL, 1, '2017-09-26 15:20:22', '2018-02-07 08:01:55', NULL),
(35, 66, '201709261605461506441946mfvsn6aztafwoyrs1h00.jpg', '2017092616054615064419461dndmtw70trn8mfvtqvm.jpg', NULL, NULL, 'bhvvjvjvj', 4, 'hcchhxchchhcuvvu', 'Wave City Center', '28.5747441', '77.3560263', 1, '555', 0, 1, 1, NULL, NULL, NULL, NULL, 1, '2017-09-26 16:05:46', '2018-02-07 08:02:04', NULL),
(36, 67, '20170926161024150644222482w314ks88l5o0bqwdlh.jpg', '201709261610241506442224933h3exf5oierfhtj1lr.jpg', NULL, NULL, 'hshdje', 7, 'nsnsns', 'Thanksgiving Point', '40.4240815', '-111.8882469', 1, '979794', 0, 1, 1, NULL, NULL, NULL, NULL, 1, '2017-09-26 16:10:24', '2018-02-07 08:01:58', NULL),
(37, 43, '201709261519161506439156nvntx257gtowfj8qkic0.jpg', NULL, NULL, NULL, 'fyifihhfvhi', 1, 'cgjcgjcgjcgjcgjjc', 'Greater Noida', '28.4743879', '77.50399039999999', 1, '11', 0, 1, 1, NULL, NULL, NULL, NULL, 1, '2017-09-27 06:22:34', '2017-09-27 13:22:34', NULL),
(38, 43, '201709270707061506496026d2pp9xa8kxkajgbr00bu.jpg', '201709270707061506496026ssj1s5lb4v4iyu77rigb.jpg', NULL, NULL, 'cgchhvvhbjbj', 7, 'bbjbjbvjjvvjvjvjjvjvjvbj', 'AppsInvo', '28.586474', '77.315253', 1, '234', 0, 1, 0, NULL, NULL, NULL, NULL, 1, '2017-09-27 07:07:06', '2018-02-07 08:02:12', NULL),
(39, 43, '201709270707061506496026d2pp9xa8kxkajgbr00bu.jpg', '201709270707061506496026ssj1s5lb4v4iyu77rigb.jpg', NULL, NULL, 'cgchhvvhbjbj', 7, 'bbjbjbvjjvvjvjvjjvjvjvbj', 'AppsInvo', '28.586474', '77.315253', 1, '5555', 0, 1, 1, NULL, NULL, NULL, NULL, 1, '2017-09-27 12:25:46', '2018-02-07 08:02:02', NULL),
(40, 43, '201709271227031506515223k9jodb1dipkp06bfg9yf.jpg', '201709270707061506496026ssj1s5lb4v4iyu77rigb.jpg', NULL, NULL, 'testvbhhytt', 7, 'bbjbjbvjjvvjvjvjjvjvjvbj', 'AppsInvo', '28.586474', '77.315253', 1, '5555', 0, 1, 1, NULL, NULL, NULL, NULL, 1, '2017-09-27 12:27:03', '2018-02-07 08:02:06', NULL),
(41, 54, '201709271247361506516456lvn959t8lrcvwp7im0eq.png', NULL, NULL, NULL, 'Tablet', 1, 'qwertyuiop', 'Greater Noida', '28.4743879', '77.50399039999999', 1, '20', 0, 1, 0, NULL, NULL, NULL, NULL, 1, '2017-09-27 12:47:36', '2017-09-27 19:47:36', NULL),
(42, 54, '2017092712511815065166783uqvte0zsmqdhennngw8.jpeg', NULL, NULL, NULL, 'Tablet', 1, 'svdlnsdjnsdcnsond ijcb dusdbu bsd usd isdi ndiou', 'Greater Noida', '28.4743879', '77.50399039999999', 2, '33', 0, 1, 1, NULL, NULL, NULL, NULL, 1, '2017-09-27 12:51:18', '2017-09-27 19:51:18', NULL),
(43, 54, '2017092712521715065167373od7adc02iwi30st31xf.jpeg', NULL, NULL, NULL, 'hdhdhd', 9, 'bbxbdhd', 'Noida, Uttar Pradesh, India', '28.5355161', '77.3910265', 1, '22', 0, 0, 0, NULL, NULL, NULL, NULL, 1, '2017-09-27 12:52:17', '2018-02-07 08:01:50', NULL),
(44, 69, '2017092715234615065258266r0ek4xg0in260vq82um.jpg', '201709271523461506525826wilba5osttxzlxe52bm2.jpg', NULL, NULL, 'testing', 4, 'vhhvvhhvvuvhhccycy', 'Great India Place', '28.5684178', '77.3258201', 2, '555', 0, 0, 0, NULL, NULL, NULL, NULL, 1, '2017-09-27 15:23:46', '2018-02-07 08:02:08', NULL),
(45, 54, '2017092712521715065167373od7adc02iwi30st31xf.jpeg', NULL, NULL, NULL, 'hdhdhd', 9, 'bbxbdhd', 'Noida, Uttar Pradesh, India', '28.5355161', '77.3910265', 3, '12', 0, 0, 0, '201709280643461506581026qtphht4aij6gmym5j6lo.jpeg', 'qqqqwq', '3', 'Hhhhbnnnnnnfvv', 1, '2017-09-28 06:43:46', '2018-02-07 08:01:53', NULL),
(46, 81, '201802081010591518084659driempz627bpw1glulww.jpg', '2018020810105915180846594pk9fpxr0g0yka80b1lg.jpg', NULL, NULL, 'test title', 2, 'zhfss', 'NJ, USA', '40.0583238', '-74.4056612', 3, '100', NULL, 1, 0, '20180208101059151808465902iet70ghtjo8q2psa2m.jpg', 'aetssre', '10', 'zydrtxu', 1, '2018-02-08 10:10:59', '2018-02-08 04:40:59', NULL),
(47, 81, '2018020905495415181553944jksvos4dhrfygjxgkqc.jpg', '20180209054955151815539589fx5i8chs8u5205gtog.jpg', NULL, NULL, 'test', 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Noida Link Road, Mayur Vihar Phase 1, New Delhi, Delhi, India', '28.6062903', '77.28746699999999', 3, '100', NULL, 1, 0, '2018020905495515181553958ztiv2ih61d5ibipoxgv.jpg', 'test', '10', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2018-02-09 05:49:55', '2018-02-09 00:19:55', NULL),
(48, 81, '201802150810271518682227z1750sgk1bimjqk5hlcj.jpg', NULL, NULL, NULL, 'test title', 1, 'qwtA4Y', 'Noida, Uttar Pradesh, India', '28.5355161', '77.39102649999995', 3, '100', NULL, 1, 1, '201802150810271518682227b23l0oio2jtmf9qrkxgy.jpg', 'Eyt', 'WwtEAWE', 'yESU', 1, '2018-02-15 08:10:27', '2018-02-15 02:40:27', NULL),
(49, 81, '2018021508164815186826083iv2w7yio9jzeadriemp.jpg', NULL, NULL, NULL, 'AWWATwwEy', 1, 'weaetye4uy', 'NY, USA', '40.7127753', '-74.0059728', 3, 'EWYteaeu', NULL, 0, 1, NULL, 'AST', 'wEYgWE', 'Yezus', 1, '2018-02-15 08:16:48', '2018-02-15 02:46:48', NULL),
(50, 81, '20180215143111151870507170cuh4i57avj8f1pw12v.jpg', NULL, NULL, NULL, 'test title', 2, 'sdzhrsxtj', 'Noida, Uttar Pradesh, India', NULL, NULL, 1, '100', 0, 1, NULL, NULL, NULL, NULL, NULL, 1, '2018-02-15 14:31:12', '2018-02-15 09:01:12', NULL),
(51, 81, '2018021514334215187052226fhmr4wudhy4k6zyhgs9.jpg', NULL, NULL, NULL, 'EGR', 1, 'dsyHGZYRJ', 'Delhi, India', '28.6618976', '77.22739580000007', 1, 'asgFRZH', 0, 1, 0, NULL, NULL, NULL, NULL, 1, '2018-02-15 14:33:42', '2018-02-15 09:03:42', NULL),
(52, 81, '2018021606092215187613628rtg9wgoiciz80xy367n.jpg', '2018020810105915180846594pk9fpxr0g0yka80b1lg.jpg', '201802160609221518761362dpaqrym8gr8s7gkg7vku.jpg', NULL, 'test title', 6, 'zhfss', 'NJ, USA', '40.735657', '-74.1723667', 3, '100', 0, 1, 0, '2018021606092315187613637eq2eu0pjkwusdb2wosi.jpg', 'asdf', '24', 'dsgxjcgkgvyu;glgo''', 1, '2018-02-16 06:09:23', '2018-02-16 00:39:23', NULL),
(53, 81, '20180216061323151876160301zro3kpgp8iod3d70r1.jpg', '2018020810105915180846594pk9fpxr0g0yka80b1lg.jpg', '201802160613231518761603d5aq1pa5j5viqhmjx5mh.jpg', NULL, 'test title', 1, 'zhfss', 'NJ, USA', '40.735657', '-74.1723667', 3, '100', 0, 1, 0, '201802160613231518761603z5g09w9dlfkab5jya2p3.jpg', 'asdf', '24', 'dsgxjcgkgvyu;glgo''', 1, '2018-02-16 06:13:23', '2018-02-16 00:43:23', NULL),
(54, 81, '201802160614311518761671brcpi43nj32ciw2s18hg.jpg', '2018020810105915180846594pk9fpxr0g0yka80b1lg.jpg', '2018021606143115187616716c5bjxdt881ytxh5faig.jpg', NULL, 'test title', 1, 'zhfss', 'NJ, USA', '40.735657', '-74.1723667', 3, '100', 0, 1, 0, '201802160614311518761671nzj9j9ckquauay91u9jo.jpg', 'asdf', '24', 'dsgxjcgkgvyu;glgo''', 1, '2018-02-16 06:14:31', '2018-02-16 00:44:31', NULL),
(55, 81, '201802160614461518761686g1znpzzhqbb44rd1xiz7.jpg', '2018020810105915180846594pk9fpxr0g0yka80b1lg.jpg', '201802160614461518761686sch3seqoig2e1qb8zwuo.jpg', NULL, 'test title', 1, 'zhfss', 'NJ, USA', '40.735657', '-74.1723667', 3, '100', 0, 1, 0, '201802160614461518761686f8iozelppn0q8p28nrl5.jpg', 'asdf', '24', 'dsgxjcgkgvyu;glgo''', 1, '2018-02-16 06:14:46', '2018-02-16 00:44:46', NULL),
(56, 81, '201802161434271518791667jbknbd530fzv4j9umbpb.jpg', NULL, NULL, NULL, 'test title', 1, 'tsu', 'Noida, Uttar Pradesh, India', '28.5355161', '77.39102649999995', 3, '100', 0, 1, 1, NULL, 'dszgtzre', 'ysreuy', 'eruyti6', 1, '2018-02-16 14:34:27', '2018-02-16 09:04:27', NULL),
(57, 81, '201802081010591518084659driempz627bpw1glulww.jpg', '2018020810105915180846594pk9fpxr0g0yka80b1lg.jpg', NULL, NULL, 'test title', 1, 'zhfss', 'NJ, USA', '40.0583238', '-74.4056612', 3, '100', 0, 1, 0, '20180208101059151808465902iet70ghtjo8q2psa2m.jpg', 'aetssre', '10', 'zydrtxu', 1, '2018-02-16 14:56:27', '2018-02-16 09:26:27', NULL),
(58, 81, '20180219102259151903577958hdtjsljffss0nsjw5x.jpg', '2018021910230015190357808562wdgjyo57dm1dmcbw.jpg', NULL, NULL, 'asd', 6, 'dSGtu', 'Noida, Uttar Pradesh, India', '28.5355161', '77.39102649999995', 1, '122', 11, 1, 1, NULL, NULL, NULL, NULL, 1, '2018-02-19 10:23:00', '2018-02-19 10:25:23', NULL),
(59, 81, '201802191208011519042081r7qiplzdavmzx6w8n2jf.jpg', '201802191208021519042082wnrfniakdrbp00k62aat.jpg', '201802191208021519042082h96zrzfiu1tr7jiks399.jpg', '2018021912080215190420824rao46a7aehnk0ldg5u7.jpg', 'zdgj', 2, 'eawtsrut', 'Noida, Uttar Pradesh, India', '28.5355161', '77.39102649999995', 3, '100', 16, 1, 0, '201802191208021519042082weyhdt52t14br5414pum.jpg', 'driy', 'utdi', 'ereysr', 1, '2018-02-19 12:08:02', '2018-02-19 06:38:02', NULL),
(60, 81, '201802220743391519285419tsa6vzz6s2y0bbqton85.jpg', NULL, NULL, NULL, 'aewtes', 1, 'xfdhdyjufk', 'Delhi, India', '28.6618976', '77.22739580000007', 1, '133', 1, 1, 0, NULL, NULL, NULL, NULL, 1, '2018-02-22 07:43:39', '2018-02-22 02:13:39', NULL),
(61, 81, '201802220745271519285527ldy39cvaewgs9vm7jmxm.jpg', NULL, NULL, NULL, 'test title', 1, 'eatzsry', 'Noida, Uttar Pradesh, India', '28.5355161', '77.39102649999995', 1, '44', 1, 1, 1, NULL, NULL, NULL, NULL, 1, '2018-02-22 07:45:27', '2018-02-22 02:15:27', NULL),
(62, 81, '201802220746351519285595y7mjxrwpiuczm0npsd1q.jpg', NULL, NULL, NULL, 'test title', 1, 'eatzsry', 'Noida, Uttar Pradesh, India', '28.5355161', '77.39102649999995', 1, '44', 1, 1, 1, NULL, NULL, NULL, NULL, 1, '2018-02-22 07:46:35', '2018-02-22 02:16:35', NULL),
(63, 81, '201802220750561519285856bs1n22ym0900vqmwwbtv.jpg', '201802220750561519285856rc12oo80foxv6517nh23.jpg', NULL, NULL, 'test title', 2, 'zfdfhjdkyfk', 'Noida, Uttar Pradesh, India', '28.5355161', '77.39102649999995', 1, '44', 1, 1, 1, NULL, NULL, NULL, NULL, 1, '2018-02-22 07:50:56', '2018-02-22 02:20:56', NULL),
(64, 81, '201802220750561519285856bs1n22ym0900vqmwwbtv.jpg', '201802220750561519285856rc12oo80foxv6517nh23.jpg', NULL, NULL, 'test title', 1, 'zfdfhjdkyfk', 'Noida, Uttar Pradesh, India', '28.5355161', '77.39102649999995', 1, '44', 2, 1, 1, '', '', '', '', 1, '2018-02-22 07:52:33', '2018-02-22 02:22:33', NULL),
(65, 81, '201802220750561519285856bs1n22ym0900vqmwwbtv.jpg', '201802220750561519285856rc12oo80foxv6517nh23.jpg', NULL, NULL, '1qaz', 1, 'zfdfhjdkyfk', 'Noida, Uttar Pradesh, India', '28.5355161', '77.39102649999995', 1, '44', 2, 1, 1, '', '', '', '', 1, '2018-02-22 08:12:18', '2018-02-22 02:42:18', NULL),
(66, 81, '', '201802220750561519285856rc12oo80foxv6517nh23.jpg', NULL, NULL, '1qaz', 1, 'zfdfhjdkyfk', 'Noida, Uttar Pradesh, India', '28.5355161', '77.39102649999995', 1, '44', 2, 1, 1, '', '', '', '', 1, '2018-02-22 08:45:26', '2018-02-22 03:15:26', NULL),
(67, 81, '201802220750561519285856bs1n22ym0900vqmwwbtv.jpg', '201802220750561519285856rc12oo80foxv6517nh23.jpg', NULL, NULL, '1qaz', 1, 'zfdfhjdkyfk', 'Noida, Uttar Pradesh, India', '28.5355161', '77.39102649999995', 1, '44', 2, 1, 1, '', '', '', '', 1, '2018-02-22 08:45:42', '2018-02-22 03:15:42', NULL),
(68, 81, '201802220750561519285856bs1n22ym0900vqmwwbtv.jpg', '201802220750561519285856rc12oo80foxv6517nh23.jpg', '', '', '1qaz', 1, 'zfdfhjdkyfk', 'Noida, Uttar Pradesh, India', '28.5355161', '77.39102649999995', 3, '44', 2, 1, 1, '201802220848521519289332slb8okwjt4yz395atein.jpg', '', '', '', 1, '2018-02-22 08:48:52', '2018-02-22 03:18:52', NULL),
(69, 81, '201802221057111519297031m58e46w3t4o8fc1v6ozm.jpg', '201802220750561519285856rc12oo80foxv6517nh23.jpg', '201802221057111519297031sgyjhjx9zacugi7xplzk.jpg', '201802221057111519297031vbmdq3mfgpxctjz7zgtl.jpg', '1qaz', 1, 'zfdfhjdkyfk', 'Noida, Uttar Pradesh, India', '28.5355161', '77.39102649999995', 3, '44', 6, 1, 1, '201802221057111519297031pqul693u5dyetwgvw72d.jpg', '', '', '', 1, '2018-02-22 10:57:11', '2018-02-22 05:27:11', NULL),
(70, 81, '201802221057111519297031m58e46w3t4o8fc1v6ozm.jpg', '', '', '201802221057111519297031vbmdq3mfgpxctjz7zgtl.jpg', '1qaz', 6, 'zfdfhjdkyfk', 'Noida, Uttar Pradesh, India', '28.5355161', '77.39102649999995', 3, '44', 3, 1, 1, '201802221057111519297031pqul693u5dyetwgvw72d.jpg', 'aeETae', 'yaerzy', 'sriur', 1, '2018-02-22 10:58:08', '2018-02-22 05:28:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qwikfarm_cart`
--

CREATE TABLE `qwikfarm_cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `advertisement_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwikfarm_cart`
--

INSERT INTO `qwikfarm_cart` (`id`, `user_id`, `advertisement_id`, `created_at`) VALUES
(4, 81, 3, '2018-02-20 09:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `qwikfarm_categories`
--

CREATE TABLE `qwikfarm_categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `image` text CHARACTER SET latin1,
  `title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `status` tinyint(2) UNSIGNED DEFAULT '1' COMMENT '1 for active and 0 for inactive',
  `updated_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qwikfarm_categories`
--

INSERT INTO `qwikfarm_categories` (`id`, `image`, `title`, `status`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, '201706161258151497617895t2dk5boadovc63m3gaw7.jpg', 'Vegetables', 1, '2017-06-16 12:58:15', '2017-06-16 12:58:15', NULL),
(2, '201706161315121497618912s6mi1yrd20rwlhrq274c.jpeg', 'Leaves', 1, '2017-06-16 13:15:12', '2017-06-16 20:15:12', NULL),
(3, '201706161315491497618949tplru8cav1rn7e69cynf.jpg', 'Leave', 1, '2017-06-16 13:16:01', '2017-11-08 10:00:51', '2017-06-16 13:16:01');

-- --------------------------------------------------------

--
-- Table structure for table `qwikfarm_cities`
--

CREATE TABLE `qwikfarm_cities` (
  `id` int(11) UNSIGNED NOT NULL,
  `region_id` int(11) UNSIGNED DEFAULT NULL,
  `city_name` varchar(255) DEFAULT NULL,
  `status` tinyint(2) UNSIGNED DEFAULT '1' COMMENT '1 for active, 0 for inactive',
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwikfarm_cities`
--

INSERT INTO `qwikfarm_cities` (`id`, `region_id`, `city_name`, `status`, `updated_at`, `created_at`) VALUES
(22, 11, 'Markham', 1, '2017-03-22 18:54:53', '2017-03-19 10:52:24'),
(23, 11, 'Brampton', 1, NULL, '2017-03-19 10:52:24'),
(24, 11, 'Pickering', 1, NULL, '2017-03-19 10:52:24'),
(25, 11, 'Toronto', 1, NULL, '2017-03-19 10:52:24'),
(26, 11, 'Mississauga', 1, NULL, '2017-03-19 10:52:24'),
(27, 11, 'Richmond Hill', 1, NULL, '2017-03-19 10:52:24'),
(28, 11, 'Vaughan', 1, NULL, '2017-03-19 10:52:24'),
(29, 11, 'Scarborough', 1, NULL, '2017-03-19 10:52:24'),
(31, 14, 'London North', 1, '2017-09-19 19:26:08', '2017-04-19 16:56:51'),
(32, 14, 'Reading', 1, NULL, '2017-04-19 16:56:51'),
(33, 14, 'Milton Keynes', 1, NULL, '2017-04-19 16:56:51'),
(34, 14, 'London South', 1, '2017-09-19 19:30:28', '2017-04-28 04:36:34'),
(35, 14, 'London East', 1, '2017-09-19 19:31:06', '2017-04-28 04:36:57'),
(36, 14, 'London West', 1, '2017-09-19 19:31:40', '2017-04-28 04:37:09'),
(37, 14, 'Luton', 1, NULL, '2017-04-28 04:40:56'),
(38, 14, 'Birmingham', 1, NULL, '2017-04-28 04:41:50'),
(39, 14, 'Manchester', 1, NULL, '2017-04-28 04:42:10'),
(40, 14, 'Northampton', 1, NULL, '2017-04-28 04:42:40'),
(41, 14, 'London City', 1, '2017-09-19 19:24:30', '2017-05-03 06:02:42'),
(42, 14, 'Slough', 1, NULL, '2017-05-23 07:45:12'),
(43, 14, 'Bradford', 1, NULL, '2017-05-23 07:47:10'),
(44, 19, 'Barrie', 1, NULL, '2017-06-13 22:58:09'),
(48, 14, 'Leicester', 1, NULL, '2017-06-21 08:44:26'),
(49, 14, 'Burnley', 1, NULL, '2017-07-05 04:42:50'),
(50, 14, 'Oxford', 1, NULL, '2017-07-12 06:03:03'),
(51, 15, 'Glasgow', 1, NULL, '2017-07-12 06:09:17'),
(52, 15, 'Edinburgh', 1, NULL, '2017-07-12 06:09:35'),
(53, 15, 'Aberdeen', 1, NULL, '2017-07-12 06:14:55'),
(54, 15, 'Dundee', 1, NULL, '2017-07-12 06:15:13'),
(55, 15, 'Inverness', 1, NULL, '2017-07-12 06:15:39'),
(56, 14, 'Leeds', 1, NULL, '2017-07-12 06:16:35'),
(57, 14, 'Nottingham', 1, NULL, '2017-07-12 06:16:52'),
(58, 14, 'Chelmsford', 1, NULL, '2017-07-12 06:20:24'),
(59, 14, 'Coventry', 1, NULL, '2017-07-12 06:20:41'),
(60, 14, 'Derby', 1, NULL, '2017-07-12 06:20:56'),
(61, 14, 'Liverpool', 1, NULL, '2017-07-12 06:21:29'),
(64, 14, 'Essex', 1, NULL, '2017-07-24 13:15:57'),
(65, 14, 'Newcastle upon Tyne', 1, NULL, '2017-07-24 15:58:28'),
(66, 14, 'Sheffield', 1, NULL, '2017-07-24 16:09:27'),
(71, 14, 'Blackburn', 1, NULL, '2017-07-26 08:43:52'),
(72, 14, 'Wolverhampton', 1, NULL, '2017-07-26 21:50:02'),
(73, 14, 'Peterborough', 1, NULL, '2017-07-26 21:57:39'),
(74, 14, 'Watford', 1, NULL, '2017-07-26 22:10:00'),
(75, 14, 'Bolton', 1, NULL, '2017-07-27 14:33:41'),
(76, 14, 'Woking', 1, NULL, '2017-07-27 14:52:35'),
(77, 14, 'Cambridge', 1, NULL, '2017-07-27 15:16:27'),
(78, 14, 'Oldham', 1, NULL, '2017-07-27 15:18:43'),
(79, 14, 'Ashford', 1, NULL, '2017-07-27 15:20:53'),
(80, 14, 'Rochdale', 1, NULL, '2017-07-27 15:30:55'),
(81, 14, 'Hampshire', 1, NULL, '2017-07-27 16:03:31'),
(82, 14, 'Bury', 1, NULL, '2017-07-28 15:41:04'),
(84, 14, 'Crawley', 1, NULL, '2017-08-09 21:15:26'),
(85, 26, 'Vancouver', 1, NULL, '2017-08-11 04:51:54'),
(86, 26, 'Burnaby', 1, NULL, '2017-08-11 04:52:31'),
(87, 26, 'Port Moody', 1, NULL, '2017-08-11 04:52:57'),
(88, 26, 'New Westminster', 1, NULL, '2017-08-11 04:53:21'),
(89, 26, 'North Vancouver', 1, NULL, '2017-08-11 04:53:58'),
(90, 26, 'Richmond', 1, NULL, '2017-08-11 04:54:38'),
(91, 26, 'Delta', 1, NULL, '2017-08-11 04:54:47'),
(92, 26, 'Surrey', 1, NULL, '2017-08-11 04:55:01'),
(93, 27, 'Victoria', 1, NULL, '2017-08-11 04:55:54'),
(94, 27, 'Nanaimo', 1, NULL, '2017-08-11 04:56:10'),
(95, 21, 'Ottawa', 1, NULL, '2017-08-11 05:02:37'),
(96, 21, 'Nepean', 1, NULL, '2017-08-11 05:02:49'),
(97, 21, 'Cornwall', 1, NULL, '2017-08-11 05:03:04'),
(98, 21, 'Kanata', 1, NULL, '2017-08-11 05:03:56'),
(108, 11, 'Ajax', 1, NULL, '2017-08-12 02:18:35'),
(109, 11, 'Oshawa', 1, NULL, '2017-08-12 02:18:58'),
(110, 11, 'Whitby', 1, NULL, '2017-08-12 02:19:09'),
(111, 11, 'Milton', 1, NULL, '2017-08-12 02:47:23'),
(112, 14, 'High Wycombe', 1, NULL, '2017-08-14 21:33:36'),
(113, 14, 'Surrey', 1, NULL, '2017-08-15 19:35:43'),
(114, 14, 'Kent', 1, NULL, '2017-08-15 19:36:15'),
(115, 14, 'Basingstoke', 1, NULL, '2017-08-15 20:24:07'),
(116, 14, 'West Sussex', 1, NULL, '2017-08-15 20:27:22'),
(117, 14, 'Worthing', 1, NULL, '2017-08-15 20:28:26'),
(118, 14, 'Egham', 1, NULL, '2017-08-23 13:15:12'),
(119, 14, 'Bristol', 1, NULL, '2017-08-24 00:03:47'),
(120, 11, 'Stoufville', 1, NULL, '2017-08-27 14:58:59'),
(121, 11, 'Caledon', 1, NULL, '2017-08-27 14:59:15'),
(122, 11, 'Newmarket', 1, NULL, '2017-08-27 14:59:39'),
(123, 20, 'Kingston', 1, NULL, '2017-08-27 15:01:39'),
(124, 20, 'Belleville', 1, NULL, '2017-08-27 15:01:52'),
(125, 11, 'Burlington', 1, NULL, '2017-08-27 15:02:29'),
(126, 11, 'Oakville', 1, NULL, '2017-08-27 15:02:44'),
(127, 11, 'Halton Hills', 1, NULL, '2017-08-27 15:02:56'),
(128, 30, 'Waterloo', 1, NULL, '2017-08-27 17:34:05'),
(129, 30, 'Kitchener', 1, NULL, '2017-08-27 17:34:19'),
(130, 30, 'Guelph', 1, NULL, '2017-08-27 17:34:31'),
(131, 30, 'Cambridge', 1, NULL, '2017-08-27 17:34:48'),
(132, 31, 'Windsor', 1, NULL, '2017-08-27 17:35:31'),
(133, 32, 'Hamiton', 1, NULL, '2017-08-27 21:51:17'),
(134, 14, 'Preston', 1, NULL, '2017-09-01 16:51:28'),
(135, 17, 'Belfast', 1, NULL, '2017-09-01 17:01:35'),
(136, 17, 'Derry', 1, NULL, '2017-09-01 17:01:57'),
(137, 17, 'Newry', 1, NULL, '2017-09-01 17:02:23'),
(138, 17, 'Lisburn', 1, NULL, '2017-09-01 17:02:43'),
(139, 17, 'Armagh', 1, NULL, '2017-09-01 17:03:07'),
(140, 16, 'Cardiff', 1, NULL, '2017-09-01 17:05:21'),
(141, 16, 'Newport', 1, NULL, '2017-09-01 17:05:39'),
(142, 16, 'Bangor', 1, NULL, '2017-09-01 17:06:07'),
(143, 16, 'St Asaph', 1, NULL, '2017-09-01 17:07:04'),
(144, 16, 'St Davids', 1, NULL, '2017-09-01 17:07:28'),
(145, 16, 'Swansea', 1, NULL, '2017-09-01 17:08:03'),
(146, 14, 'Blackpool', 1, NULL, '2017-09-01 17:09:55'),
(147, 14, 'Bedford', 1, NULL, '2017-09-01 17:12:08'),
(148, 14, 'Buckinghamshire', 1, NULL, '2017-09-01 17:19:09'),
(150, 14, 'Derbyshire', 1, NULL, '2017-09-01 17:34:25'),
(151, 14, 'Devon', 1, NULL, '2017-09-01 17:35:13'),
(152, 14, 'Dorset', 1, NULL, '2017-09-01 17:37:07'),
(153, 14, 'Durham', 1, NULL, '2017-09-01 17:37:23'),
(154, 14, 'East Sussex', 1, NULL, '2017-09-01 17:39:54'),
(155, 14, 'Gloucestershire', 1, NULL, '2017-09-01 17:41:50'),
(156, 14, 'Salford', 1, NULL, '2017-09-01 17:43:37'),
(157, 14, 'Stockport', 1, NULL, '2017-09-01 17:43:55'),
(158, 14, 'Tameside', 1, NULL, '2017-09-01 17:44:23'),
(159, 14, 'Trafford', 1, NULL, '2017-09-01 17:44:39'),
(160, 14, 'Wigan', 1, NULL, '2017-09-01 17:44:52'),
(161, 14, 'Hartlepool', 1, NULL, '2017-09-01 17:46:23'),
(162, 14, 'Hertfordshire', 1, NULL, '2017-09-01 17:51:13'),
(163, 14, 'Isle of Wight', 1, NULL, '2017-09-01 17:51:52'),
(164, 14, 'Lancashire', 1, NULL, '2017-09-01 17:52:36'),
(165, 14, 'Middlesbrough', 1, NULL, '2017-09-01 17:58:49'),
(166, 14, 'Lincolnshire', 1, NULL, '2017-09-01 17:59:23'),
(167, 14, 'Norfolk', 1, NULL, '2017-09-01 18:00:40'),
(168, 14, 'Cornwall', 1, NULL, '2017-09-05 18:45:52'),
(169, 14, 'Dudley', 1, NULL, '2017-09-05 18:46:36'),
(170, 14, 'Suffolk', 1, NULL, '2017-09-05 18:48:11'),
(171, 14, 'Warrington', 1, NULL, '2017-09-05 18:49:27'),
(172, 14, 'Kingston upon Hull', 1, NULL, '2017-09-05 18:58:27'),
(173, 14, 'Northumberland', 1, NULL, '2017-09-05 19:03:12'),
(174, 14, 'Plymouth', 1, NULL, '2017-09-05 19:04:03'),
(175, 14, 'Poole', 1, NULL, '2017-09-05 19:05:18'),
(176, 14, 'Portsmouth', 1, NULL, '2017-09-05 19:05:35'),
(177, 14, 'Shropshire', 1, NULL, '2017-09-05 19:06:10'),
(178, 14, 'Southampton', 1, NULL, '2017-09-05 19:07:04'),
(179, 14, 'Southend-on-Sea', 1, NULL, '2017-09-05 19:07:28'),
(180, 14, 'Stockton-on-Tees', 1, NULL, '2017-09-05 19:08:05'),
(181, 14, 'Stoke-on-Trent', 1, NULL, '2017-09-05 19:08:26'),
(182, 14, 'Swindon', 1, NULL, '2017-09-05 19:09:55'),
(183, 14, 'York', 1, NULL, '2017-09-05 19:10:08'),
(184, 14, 'Worcester', 1, NULL, '2017-09-05 19:10:40'),
(185, 33, 'Winnipeg', 1, NULL, '2017-09-09 23:08:42'),
(186, 33, 'Brandon', 1, NULL, '2017-09-09 23:09:13'),
(187, 33, 'Niverville', 1, NULL, '2017-09-09 23:12:34'),
(188, 34, 'Chicago', 1, '2017-09-11 21:42:25', '2017-09-11 20:53:16'),
(189, 34, 'Skokie', 1, NULL, '2017-09-11 21:04:25'),
(190, 34, 'Schaumburg', 1, NULL, '2017-09-11 21:05:31'),
(191, 34, 'Lincolnwood', 1, NULL, '2017-09-11 21:16:17'),
(192, 34, 'Niles', 1, NULL, '2017-09-11 21:16:43'),
(193, 34, 'Morton Grove', 1, NULL, '2017-09-11 21:17:32'),
(194, 34, 'Evanston', 1, NULL, '2017-09-11 21:19:48'),
(195, 34, 'Norridge', 1, NULL, '2017-09-11 21:20:42'),
(196, 34, 'Wilmette', 1, NULL, '2017-09-11 21:21:21'),
(197, 34, 'Carpentersville', 1, NULL, '2017-09-11 21:32:17'),
(198, 34, 'South Elgin', 1, NULL, '2017-09-11 21:33:35'),
(199, 34, 'Hanover Park', 1, NULL, '2017-09-11 21:36:07'),
(200, 34, 'Bartlett', 1, NULL, '2017-09-11 21:40:59'),
(201, 34, 'Hoffman Estates', 1, NULL, '2017-09-11 21:43:41'),
(202, 34, 'Palatine', 1, NULL, '2017-09-11 21:44:06'),
(203, 34, 'Mundelein', 1, NULL, '2017-09-11 21:44:33'),
(204, 34, 'Glenview', 1, NULL, '2017-09-11 22:16:45'),
(205, 34, 'Streamwood', 1, NULL, '2017-09-11 22:17:35'),
(206, 34, 'Roselle', 1, NULL, '2017-09-11 22:18:02'),
(207, 34, 'Buffalo Grove', 1, NULL, '2017-09-11 22:18:22'),
(208, 34, 'Des Plaines', 1, NULL, '2017-09-11 22:18:44'),
(209, 34, 'Gurnee', 1, NULL, '2017-09-11 22:19:10'),
(210, 34, 'Elk Grove Village', 1, NULL, '2017-09-11 22:19:32'),
(211, 34, 'Rosemont', 1, NULL, '2017-09-11 22:23:19'),
(212, 34, 'Lake Forest', 1, NULL, '2017-09-11 22:24:16'),
(213, 34, 'Mount Prospect', 1, NULL, '2017-09-11 22:24:41'),
(214, 34, 'Arlington Heights', 1, NULL, '2017-09-11 22:25:23'),
(215, 34, 'Wheeling', 1, NULL, '2017-09-11 22:26:10'),
(216, 34, 'Elgin', 1, NULL, '2017-09-11 22:26:35'),
(217, 34, 'Belvidere', 1, NULL, '2017-09-11 22:27:06'),
(218, 34, 'Waukegan', 1, NULL, '2017-09-11 22:27:46'),
(219, 34, 'Rolling Meadows', 1, NULL, '2017-09-11 22:28:38'),
(220, 34, 'Burbank', 1, NULL, '2017-09-11 22:30:02'),
(221, 34, 'Orland Park', 1, NULL, '2017-09-11 22:30:25'),
(222, 34, 'Hickory Hills', 1, NULL, '2017-09-11 22:30:51'),
(223, 34, 'Worth', 1, NULL, '2017-09-11 22:31:17'),
(224, 34, 'Oak Lawn', 1, NULL, '2017-09-11 22:31:43'),
(225, 34, 'Tinley Park', 1, NULL, '2017-09-11 22:32:08'),
(226, 34, 'Bridgeview', 1, NULL, '2017-09-11 22:32:32'),
(227, 34, 'Plainfield', 1, NULL, '2017-09-11 22:32:52'),
(228, 34, 'Justice', 1, NULL, '2017-09-11 22:33:23'),
(229, 34, 'Palos Hills', 1, NULL, '2017-09-11 22:33:51'),
(230, 34, 'Maywood', 1, NULL, '2017-09-11 22:35:27'),
(231, 34, 'Wheaton', 1, NULL, '2017-09-11 22:35:51'),
(232, 34, 'Oak Brook', 1, NULL, '2017-09-11 22:36:17'),
(233, 34, 'Lombard', 1, NULL, '2017-09-11 22:36:40'),
(234, 34, 'Naperville', 1, NULL, '2017-09-11 22:37:03'),
(235, 34, 'Willowbrook', 1, NULL, '2017-09-11 22:37:31'),
(236, 34, 'Addison', 1, NULL, '2017-09-11 22:38:08'),
(237, 34, 'Aurora', 1, NULL, '2017-09-11 22:38:45'),
(238, 34, 'Bolingbrook', 1, NULL, '2017-09-11 22:39:06'),
(239, 34, 'DeKalb', 1, NULL, '2017-09-11 22:39:34'),
(240, 34, 'Warrenville', 1, NULL, '2017-09-11 22:40:18'),
(241, 34, 'Oak Park', 1, NULL, '2017-09-11 22:40:54'),
(242, 34, 'Schiller Park', 1, NULL, '2017-09-11 22:41:22'),
(243, 34, 'Westmont', 1, NULL, '2017-09-11 22:42:01'),
(244, 34, 'Glendale Heights', 1, NULL, '2017-09-11 22:42:54'),
(245, 34, 'Villa Park', 1, NULL, '2017-09-11 22:43:19'),
(246, 34, 'Oakbrook Terrace', 1, NULL, '2017-09-11 22:44:02'),
(247, 34, 'Glen Ellyn', 1, NULL, '2017-09-11 22:45:19'),
(248, 34, 'Elmwood Park', 1, NULL, '2017-09-11 22:46:03'),
(249, 34, 'Bensenville', 1, NULL, '2017-09-11 22:46:43'),
(250, 34, 'Lisle', 1, NULL, '2017-09-11 22:47:50'),
(251, 34, 'Downers Grove', 1, NULL, '2017-09-11 22:48:14'),
(252, 34, 'Franklin Park', 1, NULL, '2017-09-11 22:49:41'),
(253, 34, 'Lyons', 1, NULL, '2017-09-11 22:50:34'),
(254, 34, 'Carol Stream', 1, NULL, '2017-09-11 22:51:09'),
(255, 34, 'West Chicago', 1, NULL, '2017-09-11 22:52:29'),
(256, 34, 'Harwood Heights', 1, NULL, '2017-09-11 22:58:57'),
(257, 35, 'Springfield', 1, NULL, '2017-09-11 23:00:38'),
(258, 35, 'West Peoria', 1, NULL, '2017-09-11 23:01:16'),
(259, 35, 'Peoria', 1, NULL, '2017-09-11 23:01:38'),
(260, 35, 'Urbana', 1, NULL, '2017-09-11 23:04:27'),
(261, 35, 'Champaign', 1, NULL, '2017-09-11 23:04:55'),
(262, 35, 'Glenview', 1, NULL, '2017-09-11 23:05:16'),
(263, 35, 'Bloomington', 1, NULL, '2017-09-11 23:05:36'),
(264, 36, 'Rockford', 1, NULL, '2017-09-11 23:07:58'),
(265, 36, 'Vernon Hills', 1, NULL, '2017-09-11 23:08:16'),
(266, 37, 'Carbondale', 1, NULL, '2017-09-11 23:09:46'),
(267, 38, 'Baytown', 1, NULL, '2017-09-11 23:32:49'),
(268, 38, 'Houston', 1, NULL, '2017-09-11 23:33:01'),
(269, 38, 'Humble', 1, NULL, '2017-09-11 23:33:16'),
(270, 38, 'Aldine', 1, NULL, '2017-09-11 23:33:34'),
(271, 38, 'Conroe', 1, NULL, '2017-09-11 23:34:18'),
(272, 39, 'Santa Clarita', 1, NULL, '2017-09-11 23:54:45'),
(273, 39, 'Castaic', 1, NULL, '2017-09-11 23:55:04'),
(274, 39, 'Ridgecrest', 1, NULL, '2017-09-11 23:55:25'),
(275, 39, 'Lancaster', 1, NULL, '2017-09-11 23:55:40'),
(276, 39, 'Valencia', 1, NULL, '2017-09-11 23:56:04'),
(277, 39, 'Victorville', 1, NULL, '2017-09-11 23:56:19'),
(278, 39, 'Los Angeles', 1, NULL, '2017-09-11 23:57:04'),
(279, 39, 'Anaheim', 1, NULL, '2017-09-11 23:58:27'),
(280, 39, 'Upland', 1, NULL, '2017-09-11 23:58:51'),
(281, 39, 'Santa Ana', 1, NULL, '2017-09-12 00:01:51'),
(282, 39, 'Riverside', 1, NULL, '2017-09-12 00:03:01'),
(283, 39, 'Temecula', 1, NULL, '2017-09-12 00:03:18'),
(284, 39, 'Hemet', 1, NULL, '2017-09-12 00:03:51'),
(285, 39, 'Corona', 1, NULL, '2017-09-12 00:04:13'),
(286, 39, 'San Bernardino', 1, NULL, '2017-09-12 00:04:35'),
(287, 39, 'Big Bear Lake', 1, NULL, '2017-09-12 00:05:08'),
(288, 39, 'Maywood', 1, NULL, '2017-09-12 00:08:49'),
(289, 39, 'Moreno Valley', 1, NULL, '2017-09-12 00:15:32'),
(290, 39, 'Cucamonga', 1, NULL, '2017-09-12 00:15:58'),
(291, 39, 'Ontario', 1, NULL, '2017-09-12 00:16:48'),
(292, 39, 'Loma Linda', 1, NULL, '2017-09-12 00:16:57'),
(293, 39, 'Redlands', 1, NULL, '2017-09-12 00:17:31'),
(294, 39, 'Colton', 1, NULL, '2017-09-12 00:17:50'),
(295, 39, 'Chino', 1, NULL, '2017-09-12 00:18:13'),
(296, 39, 'Norco', 1, NULL, '2017-09-12 00:18:36'),
(297, 39, 'Lake Elsinore', 1, NULL, '2017-09-12 00:19:08'),
(298, 39, 'West Covina', 1, NULL, '2017-09-12 00:20:22'),
(299, 39, 'Palmdale', 1, NULL, '2017-09-12 00:21:17'),
(300, 39, 'Mohave', 1, NULL, '2017-09-12 00:21:30'),
(301, 39, 'Stanton', 1, NULL, '2017-09-12 00:22:59'),
(302, 39, 'Lake Forest', 1, NULL, '2017-09-12 00:23:39'),
(303, 39, 'Fountain Valley', 1, NULL, '2017-09-12 00:27:28'),
(304, 39, 'Garden Grove', 1, NULL, '2017-09-12 00:28:14'),
(305, 39, 'Irvine', 1, NULL, '2017-09-12 00:28:33'),
(306, 39, 'Brea', 1, NULL, '2017-09-12 00:28:50'),
(307, 39, 'Newport Beach', 1, NULL, '2017-09-12 00:29:11'),
(308, 39, 'Orange', 1, NULL, '2017-09-12 00:29:30'),
(309, 39, 'Cypress', 1, NULL, '2017-09-12 00:29:51'),
(310, 39, 'Westminster', 1, NULL, '2017-09-12 00:30:16'),
(311, 39, 'Costa Mesa', 1, NULL, '2017-09-12 00:31:33'),
(312, 39, 'Mission Viejo', 1, NULL, '2017-09-12 00:32:21'),
(313, 39, 'Fullerton', 1, NULL, '2017-09-12 00:33:02'),
(314, 39, 'Artesia', 1, NULL, '2017-09-12 00:33:39'),
(315, 39, 'Seal Beach', 1, NULL, '2017-09-12 00:34:08'),
(316, 39, 'Laguna Beach', 1, NULL, '2017-09-12 00:34:51'),
(317, 39, 'Laguna Hills', 1, NULL, '2017-09-12 00:35:19'),
(318, 39, 'Buena Park', 1, NULL, '2017-09-12 00:35:47'),
(319, 39, 'Huntington Beach', 1, NULL, '2017-09-12 00:37:10'),
(320, 39, 'Tustin', 1, NULL, '2017-09-12 00:37:28'),
(321, 39, 'Corona Del Mar', 1, NULL, '2017-09-12 00:39:09'),
(322, 38, 'Porter', 1, NULL, '2017-09-12 01:55:58'),
(323, 38, 'Spring', 1, NULL, '2017-09-12 01:56:21'),
(324, 38, 'Magnolia', 1, NULL, '2017-09-12 01:56:40'),
(325, 38, 'Katy', 1, NULL, '2017-09-12 01:56:51'),
(326, 38, 'Cypress', 1, NULL, '2017-09-12 01:57:04'),
(327, 38, 'The Woodlands', 1, NULL, '2017-09-12 01:57:22'),
(328, 38, 'Shenandoah', 1, NULL, '2017-09-12 01:57:41'),
(329, 38, 'Tomball', 1, NULL, '2017-09-12 01:57:57'),
(330, 38, 'Pearland', 1, NULL, '2017-09-12 01:58:32'),
(331, 38, 'Webster', 1, NULL, '2017-09-12 01:58:45'),
(332, 38, 'Galveston', 1, NULL, '2017-09-12 01:59:16'),
(333, 38, 'Alvin', 1, NULL, '2017-09-12 01:59:34'),
(334, 38, 'Meadows Place', 1, NULL, '2017-09-12 02:00:09'),
(335, 38, 'Sugar Land', 1, '2017-09-12 02:01:26', '2017-09-12 02:00:19'),
(336, 39, 'Pomona', 1, NULL, '2017-09-12 02:00:52'),
(337, 38, 'Stafford', 1, NULL, '2017-09-12 02:01:17'),
(338, 39, 'Murrieta', 1, NULL, '2017-09-12 02:03:27'),
(339, 39, 'Muscoy', 1, NULL, '2017-09-12 02:08:41'),
(340, 39, 'Culver City', 1, NULL, '2017-09-12 21:01:45'),
(341, 39, 'Beverly Hills', 1, NULL, '2017-09-12 21:02:25'),
(342, 39, 'West Hollywood', 1, NULL, '2017-09-12 21:03:19'),
(343, 39, 'West Los Angeles', 1, NULL, '2017-09-12 21:03:53'),
(344, 39, 'Venice', 1, NULL, '2017-09-12 21:04:24'),
(345, 39, 'Bakersfield', 1, NULL, '2017-09-12 21:04:59'),
(346, 39, 'Marina del Rey', 1, NULL, '2017-09-12 21:05:40'),
(347, 39, 'Santa Monica', 1, NULL, '2017-09-12 21:06:53'),
(348, 39, 'Lawndale', 1, NULL, '2017-09-12 21:24:13'),
(349, 39, 'Long Beach', 1, NULL, '2017-09-12 21:24:42'),
(350, 39, 'Torrance', 1, NULL, '2017-09-12 21:25:16'),
(351, 39, 'Inglewood', 1, NULL, '2017-09-12 21:25:51'),
(352, 39, 'Hawthorne', 1, NULL, '2017-09-12 21:29:15'),
(353, 39, 'San Pedro', 1, NULL, '2017-09-12 21:30:02'),
(354, 39, 'La Habra', 1, NULL, '2017-09-12 21:30:24'),
(355, 39, 'Lynwood', 1, NULL, '2017-09-12 21:30:52'),
(356, 39, 'Bellflower', 1, NULL, '2017-09-12 21:32:03'),
(357, 39, 'West Compton', 1, NULL, '2017-09-12 21:32:23'),
(358, 39, 'Gardena', 1, NULL, '2017-09-12 21:32:55'),
(359, 39, 'Lakewood', 1, NULL, '2017-09-12 21:33:35'),
(360, 39, 'Redondo Beach', 1, NULL, '2017-09-12 21:34:47'),
(361, 39, 'El Segundo', 1, NULL, '2017-09-12 21:35:20'),
(362, 39, 'Lomita', 1, NULL, '2017-09-12 21:35:54'),
(363, 39, 'Bell Gardens', 1, NULL, '2017-09-12 21:36:53'),
(364, 39, 'Cerritos', 1, NULL, '2017-09-12 21:37:22'),
(365, 39, 'Bell', 1, NULL, '2017-09-12 21:37:36'),
(366, 39, 'Manhattan Beach', 1, NULL, '2017-09-12 21:38:46'),
(367, 39, 'Downey', 1, NULL, '2017-09-12 21:39:24'),
(368, 39, 'Carson', 1, NULL, '2017-09-12 21:39:59'),
(369, 39, 'Commerce', 1, NULL, '2017-09-12 21:40:36'),
(370, 39, 'Norwalk', 1, NULL, '2017-09-12 21:41:43'),
(371, 39, 'Rolling Hills Estates', 1, NULL, '2017-09-12 21:42:26'),
(372, 39, 'Westchester', 1, NULL, '2017-09-12 21:42:49'),
(373, 39, 'Montebello', 1, NULL, '2017-09-12 21:43:50'),
(374, 39, 'Signal Hill', 1, NULL, '2017-09-12 21:44:22'),
(375, 39, 'Playa Vista', 1, NULL, '2017-09-12 21:45:01'),
(376, 39, 'Whittier', 1, NULL, '2017-09-12 21:55:42'),
(377, 39, 'South Gate', 1, NULL, '2017-09-12 22:02:43'),
(378, 39, 'Pico Rivera', 1, NULL, '2017-09-12 22:08:01'),
(379, 39, 'Santa Barbara', 1, NULL, '2017-09-12 22:21:28'),
(380, 39, 'Ventura', 1, NULL, '2017-09-12 22:21:52'),
(381, 39, 'Goleta', 1, NULL, '2017-09-12 22:22:16'),
(382, 39, 'Pasadena', 1, NULL, '2017-09-12 22:27:54'),
(383, 39, 'Glendale', 1, NULL, '2017-09-13 11:20:14'),
(384, 39, 'San Gabriel', 1, NULL, '2017-09-13 11:20:52'),
(385, 39, 'Diamond Bar', 1, NULL, '2017-09-13 11:21:21'),
(386, 39, 'Rosemead', 1, NULL, '2017-09-13 11:21:49'),
(387, 39, 'La Puente', 1, NULL, '2017-09-13 11:22:48'),
(388, 39, 'Duarte', 1, NULL, '2017-09-13 11:23:28'),
(389, 39, 'Glendora', 1, NULL, '2017-09-13 11:24:07'),
(390, 39, ' Rowland Heights', 1, NULL, '2017-09-13 11:28:23'),
(391, 39, 'Alhambra', 1, NULL, '2017-09-13 11:29:58'),
(392, 39, 'Walnut', 1, NULL, '2017-09-13 11:30:52'),
(393, 39, 'Claremont', 1, NULL, '2017-09-13 11:31:37'),
(394, 39, 'Altadena', 1, NULL, '2017-09-13 11:32:08'),
(395, 39, 'San Fernando Valley', 1, NULL, '2017-09-13 11:33:17'),
(396, 39, 'Arcadia', 1, NULL, '2017-09-13 11:34:30'),
(397, 39, 'Covina', 1, NULL, '2017-09-13 11:35:06'),
(398, 39, 'San Dimas', 1, NULL, '2017-09-13 11:42:49'),
(399, 39, 'Azusa', 1, NULL, '2017-09-13 11:43:07'),
(400, 39, 'La Canada Flintridge', 1, NULL, '2017-09-13 11:52:26'),
(401, 39, 'La Crescenta', 1, NULL, '2017-09-13 11:58:31'),
(402, 39, 'Monrovia', 1, NULL, '2017-09-13 11:59:03'),
(403, 39, 'Westlake Village', 1, NULL, '2017-09-13 12:44:35'),
(404, 39, 'Tarzana', 1, NULL, '2017-09-13 12:46:20'),
(405, 39, 'Encino', 1, NULL, '2017-09-13 12:46:35'),
(406, 39, 'Reseda', 1, NULL, '2017-09-13 12:46:58'),
(407, 39, 'Granada Hills', 1, NULL, '2017-09-13 12:47:39'),
(408, 39, 'Thousand Oaks', 1, NULL, '2017-09-13 12:47:59'),
(409, 39, 'Simi Valley', 1, NULL, '2017-09-13 12:48:27'),
(410, 39, 'West Hills', 1, NULL, '2017-09-13 12:49:14'),
(411, 39, 'Chatsworth', 1, NULL, '2017-09-13 12:49:34'),
(412, 39, 'North Hollywood', 1, NULL, '2017-09-13 12:50:03'),
(413, 39, 'Panorama City', 1, NULL, '2017-09-13 12:50:26'),
(414, 39, 'Woodland Hills', 1, NULL, '2017-09-13 12:51:02'),
(415, 39, 'Calabasas', 1, NULL, '2017-09-13 12:51:31'),
(416, 39, 'Van Nuys', 1, NULL, '2017-09-13 12:51:49'),
(417, 39, 'Northridge', 1, NULL, '2017-09-13 12:52:07'),
(418, 39, 'Burbank', 1, NULL, '2017-09-13 12:52:43'),
(419, 39, 'Agoura Hills', 1, NULL, '2017-09-13 12:53:22'),
(420, 39, 'Arleta', 1, NULL, '2017-09-13 12:53:40'),
(421, 39, 'Studio City', 1, NULL, '2017-09-13 12:54:54'),
(422, 39, 'Winnetka', 1, NULL, '2017-09-13 12:57:39'),
(423, 39, 'Canoga Park', 1, NULL, '2017-09-13 13:01:02'),
(424, 39, 'Sherman Oaks', 1, NULL, '2017-09-13 13:02:31'),
(425, 39, 'Canyon Country', 1, NULL, '2017-09-13 13:07:46'),
(426, 39, 'Oxnard', 1, NULL, '2017-09-13 13:08:26'),
(427, 39, 'Fillmore', 1, NULL, '2017-09-13 13:08:49'),
(428, 39, 'Moorpark', 1, NULL, '2017-09-13 13:12:51'),
(429, 39, 'Camarillo', 1, NULL, '2017-09-13 13:13:19'),
(430, 40, 'Bel Air', 1, NULL, '2017-09-13 14:34:50'),
(431, 40, 'Glen Burnie', 1, NULL, '2017-09-13 14:35:26'),
(432, 40, 'Owings Mills', 1, NULL, '2017-09-13 14:37:45'),
(433, 40, 'Westminster', 1, NULL, '2017-09-13 14:38:11'),
(434, 40, 'Edgewood', 1, NULL, '2017-09-13 14:38:28'),
(435, 40, 'Elkridge', 1, NULL, '2017-09-13 14:39:01'),
(436, 40, 'Baltimore', 1, NULL, '2017-09-13 14:39:22'),
(437, 40, 'Crofton', 1, NULL, '2017-09-13 14:40:01'),
(438, 40, 'Rosedale', 1, NULL, '2017-09-13 14:40:31'),
(439, 40, 'Woodlawn', 1, NULL, '2017-09-13 14:40:53'),
(440, 40, 'Columbia', 1, NULL, '2017-09-13 14:41:15'),
(441, 40, 'Randallstown', 1, NULL, '2017-09-13 14:41:34'),
(442, 40, 'Hanover', 1, NULL, '2017-09-13 14:42:00'),
(443, 40, 'Catonsville', 1, NULL, '2017-09-13 14:42:37'),
(444, 40, 'Gwynn Oak', 1, NULL, '2017-09-13 14:43:00'),
(445, 40, 'Linthicum Heights', 1, NULL, '2017-09-13 14:43:32'),
(446, 40, 'Pikesville', 1, NULL, '2017-09-13 14:44:06'),
(447, 40, 'Severn', 1, NULL, '2017-09-13 14:44:26'),
(448, 40, 'Reisterstown', 1, NULL, '2017-09-13 14:45:06'),
(449, 40, 'Parkville', 1, NULL, '2017-09-13 14:45:26'),
(450, 40, 'Cockeysville', 1, NULL, '2017-09-13 14:46:27'),
(451, 40, 'Dundalk', 1, NULL, '2017-09-13 14:46:57'),
(452, 40, 'Ellicott City', 1, NULL, '2017-09-13 14:47:20'),
(453, 40, 'Arbutus', 1, NULL, '2017-09-13 14:48:21'),
(454, 40, 'Towson', 1, NULL, '2017-09-13 14:48:38'),
(455, 40, 'Middle River', 1, NULL, '2017-09-13 14:49:43'),
(456, 40, 'Perry Hall', 1, NULL, '2017-09-13 14:50:40'),
(457, 40, 'Essex', 1, NULL, '2017-09-13 14:50:47'),
(458, 40, 'Gambrills', 1, NULL, '2017-09-13 14:51:12'),
(459, 40, 'Clarksville', 1, NULL, '2017-09-13 14:51:42'),
(460, 40, 'Halethorpe', 1, NULL, '2017-09-13 14:52:03'),
(461, 40, 'Pasadena', 1, NULL, '2017-09-13 14:53:21'),
(462, 40, 'Windsor Mill Manor', 1, NULL, '2017-09-13 14:53:46'),
(463, 40, 'Gaithersburg', 1, NULL, '2017-09-13 14:54:57'),
(464, 40, 'Windsor Mill', 1, NULL, '2017-09-13 14:55:47'),
(465, 40, 'Timonium', 1, NULL, '2017-09-13 14:56:40'),
(466, 40, 'Laurel', 1, NULL, '2017-09-13 14:57:16'),
(467, 40, 'Havre de Grace', 1, NULL, '2017-09-13 14:57:54'),
(468, 40, 'Nottingham', 1, NULL, '2017-09-13 14:58:44'),
(469, 40, 'Eldersburg', 1, NULL, '2017-09-13 14:59:15'),
(470, 40, 'Jessup', 1, NULL, '2017-09-13 14:59:41'),
(471, 40, 'Sykesville', 1, NULL, '2017-09-13 15:00:21'),
(472, 40, 'Lutherville-Timonium', 1, NULL, '2017-09-13 15:01:13'),
(473, 40, 'Howard Park', 1, NULL, '2017-09-13 15:01:44'),
(474, 41, 'North East', 1, NULL, '2017-09-13 15:10:07'),
(475, 41, 'Salisbury', 1, NULL, '2017-09-13 15:10:23'),
(476, 41, 'Ocean City', 1, NULL, '2017-09-13 15:10:40'),
(477, 41, 'Annapolis', 1, NULL, '2017-09-13 15:10:56'),
(478, 41, 'Edgewater', 1, NULL, '2017-09-13 15:11:11'),
(479, 41, 'La Plata', 1, NULL, '2017-09-13 15:12:07'),
(480, 41, 'Arnold', 1, NULL, '2017-09-13 15:12:42'),
(481, 41, 'Prince Frederick', 1, NULL, '2017-09-13 15:13:03'),
(482, 41, 'Chester', 1, NULL, '2017-09-13 15:13:24'),
(483, 41, 'Easton', 1, NULL, '2017-09-13 15:14:45'),
(484, 41, 'Huntingtown', 1, NULL, '2017-09-13 15:15:15'),
(485, 41, 'Lexington Park', 1, NULL, '2017-09-13 15:16:22'),
(486, 42, 'Germantown', 1, NULL, '2017-09-13 15:18:14'),
(487, 42, 'Bethesda', 1, NULL, '2017-09-13 15:18:30'),
(488, 42, 'Gaithersburg', 1, NULL, '2017-09-13 15:18:48'),
(489, 42, 'Rockville', 1, NULL, '2017-09-13 15:19:03'),
(490, 42, 'Laurel', 1, NULL, '2017-09-13 15:19:49'),
(491, 42, 'Burtonsville', 1, NULL, '2017-09-13 15:20:34'),
(492, 42, 'Beltsville', 1, NULL, '2017-09-13 15:20:57'),
(493, 42, 'Capitol Heights', 1, NULL, '2017-09-13 15:21:20'),
(494, 42, 'Silver Spring', 1, NULL, '2017-09-13 15:22:02'),
(495, 42, 'Hyattsville', 1, NULL, '2017-09-13 15:22:29'),
(496, 42, 'New Carrollton', 1, NULL, '2017-09-13 15:23:12'),
(497, 42, 'Takoma Park', 1, NULL, '2017-09-13 15:23:41'),
(498, 42, 'Greenbelt', 1, NULL, '2017-09-13 15:24:00'),
(499, 42, 'Washington', 1, NULL, '2017-09-13 15:24:29'),
(500, 42, 'Suitland-Silver Hill', 1, NULL, '2017-09-13 15:25:07'),
(501, 42, 'Langley Park', 1, NULL, '2017-09-13 15:28:11'),
(502, 42, 'College ParK', 1, NULL, '2017-09-13 15:28:53'),
(503, 42, 'Clinton', 1, NULL, '2017-09-13 15:29:16'),
(504, 42, 'Wheaton-Glenmont', 1, NULL, '2017-09-13 15:29:42'),
(505, 42, 'Mt Rainier', 1, NULL, '2017-09-13 15:30:03'),
(506, 42, 'Largo', 1, NULL, '2017-09-13 15:30:22'),
(507, 42, 'Potomac', 1, NULL, '2017-09-13 15:30:40'),
(508, 42, 'Kettering', 1, NULL, '2017-09-13 15:31:02'),
(509, 42, 'Lanham', 1, NULL, '2017-09-13 15:31:31'),
(510, 42, 'Waldorf', 1, NULL, '2017-09-13 15:31:51'),
(511, 42, 'District Heights', 1, NULL, '2017-09-13 15:32:18'),
(512, 42, 'North Bethesda', 1, NULL, '2017-09-13 15:32:53'),
(513, 42, 'Friendship Village', 1, NULL, '2017-09-13 15:36:34'),
(514, 42, 'Montgomery Village', 1, NULL, '2017-09-13 15:37:00'),
(515, 42, 'Bowie', 1, NULL, '2017-09-13 15:37:38'),
(516, 42, 'Wheaton', 1, NULL, '2017-09-13 15:37:56'),
(517, 42, 'Brandywine', 1, NULL, '2017-09-13 15:38:34'),
(518, 42, 'Olney', 1, NULL, '2017-09-13 15:39:42'),
(519, 42, 'Kensington', 1, NULL, '2017-09-13 15:40:16'),
(520, 42, 'La Plata', 1, NULL, '2017-09-13 15:43:55'),
(521, 42, 'Oxon Hill-Glassmanor', 1, NULL, '2017-09-13 15:45:13'),
(522, 42, 'Chevy Chase', 1, NULL, '2017-09-13 15:46:41'),
(523, 42, 'Fort Washington', 1, NULL, '2017-09-13 15:47:08'),
(524, 42, 'Landover', 1, NULL, '2017-09-13 15:47:37'),
(525, 43, 'Albany', 1, NULL, '2017-09-13 23:10:07'),
(526, 43, 'Oakland', 1, NULL, '2017-09-13 23:10:34'),
(527, 43, 'Berkeley', 1, NULL, '2017-09-13 23:11:12'),
(528, 43, 'Alameda', 1, NULL, '2017-09-13 23:12:12'),
(529, 43, 'Emeryville', 1, NULL, '2017-09-13 23:12:48'),
(530, 43, 'El Cerrito', 1, NULL, '2017-09-13 23:15:10'),
(531, 44, 'Alexandria', 1, NULL, '2017-09-14 09:38:54'),
(532, 44, 'Arlington', 1, NULL, '2017-09-14 09:39:27'),
(533, 44, 'Falls Church', 1, NULL, '2017-09-14 09:40:08'),
(534, 44, 'Annandale', 1, NULL, '2017-09-14 09:42:21'),
(535, 44, 'Springfield', 1, NULL, '2017-09-14 10:19:39'),
(536, 44, 'McLean', 1, NULL, '2017-09-14 10:20:34'),
(537, 44, 'Henrico', 1, NULL, '2017-09-14 10:21:37'),
(538, 44, 'Tysons', 1, NULL, '2017-09-14 10:22:03'),
(539, 44, 'Lincolnia', 1, NULL, '2017-09-14 10:22:25'),
(540, 44, 'Bailey''s Crossroads', 1, NULL, '2017-09-14 10:23:05'),
(541, 44, 'Fort Belvoir', 1, NULL, '2017-09-14 10:24:05'),
(542, 44, 'Vienna', 1, NULL, '2017-09-14 10:28:13'),
(543, 44, 'Burke', 1, NULL, '2017-09-14 10:30:52'),
(544, 45, 'Ashburn', 1, NULL, '2017-09-14 10:48:02'),
(545, 45, 'Burke', 1, NULL, '2017-09-14 10:48:57'),
(546, 45, 'Centreville', 1, NULL, '2017-09-14 10:49:15'),
(547, 45, 'Chantilly', 1, NULL, '2017-09-14 10:49:45'),
(548, 45, 'Fairfax', 1, NULL, '2017-09-14 10:51:33'),
(549, 45, 'Gainesville', 1, NULL, '2017-09-14 10:53:07'),
(550, 45, 'Great Falls', 1, NULL, '2017-09-14 10:53:58'),
(551, 45, 'Haymarket', 1, NULL, '2017-09-14 10:54:33'),
(552, 45, 'Herndon', 1, NULL, '2017-09-14 10:56:05'),
(553, 45, 'Leesburg', 1, NULL, '2017-09-14 10:57:47'),
(554, 45, 'Manassas', 1, NULL, '2017-09-14 10:58:32'),
(555, 45, 'McLean', 1, NULL, '2017-09-14 10:59:19'),
(556, 45, 'Oakton', 1, NULL, '2017-09-14 11:01:10'),
(557, 45, 'Reston', 1, NULL, '2017-09-14 11:01:49'),
(558, 45, 'Sterling', 1, NULL, '2017-09-14 11:02:34'),
(559, 45, 'Tysons', 1, NULL, '2017-09-14 11:03:13'),
(560, 45, 'Vienna', 1, NULL, '2017-09-14 11:03:41'),
(561, 45, 'Aldie', 1, NULL, '2017-09-14 11:10:16'),
(562, 46, 'Fredericksburg', 1, NULL, '2017-09-14 11:32:49'),
(563, 46, 'King George', 1, NULL, '2017-09-14 11:33:14'),
(564, 46, 'Stafford', 1, NULL, '2017-09-14 11:33:35'),
(565, 46, 'Tappahannock', 1, NULL, '2017-09-14 11:33:56'),
(566, 47, 'Chesapeake', 1, NULL, '2017-09-14 11:35:30'),
(567, 47, 'Emporia', 1, NULL, '2017-09-14 11:35:52'),
(568, 47, 'Hampton', 1, NULL, '2017-09-14 11:36:12'),
(569, 47, 'Newport News', 1, NULL, '2017-09-14 11:38:03'),
(570, 47, 'Norfolk', 1, NULL, '2017-09-14 11:38:21'),
(571, 47, 'Portsmouth', 1, NULL, '2017-09-14 11:38:39'),
(572, 47, 'Suffolk', 1, NULL, '2017-09-14 11:39:10'),
(573, 47, 'Virginia Beach', 1, NULL, '2017-09-14 11:39:52'),
(574, 48, 'Glen Allen', 1, NULL, '2017-09-14 11:47:29'),
(575, 48, 'Henrico', 1, NULL, '2017-09-14 11:48:01'),
(576, 48, 'Midlothian', 1, NULL, '2017-09-14 11:49:25'),
(577, 48, 'Petersburg', 1, NULL, '2017-09-14 11:50:06'),
(578, 48, 'Richmond', 1, NULL, '2017-09-14 11:50:29'),
(579, 48, 'Sandston', 1, NULL, '2017-09-14 11:50:53'),
(580, 48, 'Colonial Heights', 1, NULL, '2017-09-14 11:54:18'),
(581, 48, 'Hampton', 1, NULL, '2017-09-14 11:55:51'),
(582, 48, 'Chester', 1, NULL, '2017-09-14 11:57:27'),
(583, 48, 'Manakin-Sabot', 1, NULL, '2017-09-14 11:58:12'),
(584, 48, 'Moseley', 1, NULL, '2017-09-14 11:58:42'),
(585, 48, 'Newport News', 1, NULL, '2017-09-14 11:59:04'),
(586, 48, 'Norfolk', 1, NULL, '2017-09-14 11:59:29'),
(587, 48, 'Portsmouth', 1, NULL, '2017-09-14 12:00:13'),
(588, 48, 'Virginia Beach', 1, NULL, '2017-09-14 12:00:44'),
(589, 48, 'Williamsburg', 1, NULL, '2017-09-14 12:00:59'),
(590, 49, 'Blacksburg', 1, NULL, '2017-09-14 12:37:33'),
(591, 49, 'Charlottesville', 1, NULL, '2017-09-14 12:37:54'),
(592, 49, 'Clarksville', 1, NULL, '2017-09-14 12:38:13'),
(593, 49, 'Culpeper', 1, NULL, '2017-09-14 12:38:36'),
(594, 49, 'Harrisonburg', 1, NULL, '2017-09-14 12:40:07'),
(595, 49, 'Luray', 1, NULL, '2017-09-14 12:40:33'),
(596, 49, 'Lynchburg', 1, NULL, '2017-09-14 12:41:41'),
(597, 49, 'Pulaski', 1, NULL, '2017-09-14 12:42:15'),
(598, 49, 'Radford', 1, NULL, '2017-09-14 12:42:37'),
(599, 49, 'Roanoke', 1, NULL, '2017-09-14 12:42:58'),
(600, 49, 'Salem', 1, NULL, '2017-09-14 12:43:17'),
(601, 49, 'Stanardsville', 1, NULL, '2017-09-14 12:44:23'),
(602, 49, 'Staunton', 1, NULL, '2017-09-14 12:44:47'),
(603, 49, 'Winchester', 1, NULL, '2017-09-14 12:45:07'),
(604, 49, 'Beckley', 1, NULL, '2017-09-14 12:47:07'),
(605, 49, 'Bedford', 1, NULL, '2017-09-14 12:47:42'),
(606, 49, 'Christiansburg', 1, NULL, '2017-09-14 12:48:11'),
(607, 49, 'Warrenton', 1, NULL, '2017-09-14 12:48:48'),
(608, 49, 'Danville', 1, NULL, '2017-09-14 12:50:29'),
(609, 49, 'Front Royal', 1, NULL, '2017-09-14 12:50:56'),
(610, 49, 'South Boston', 1, NULL, '2017-09-14 12:53:01'),
(611, 49, 'Stephenson', 1, NULL, '2017-09-14 12:53:28'),
(612, 50, 'Dale City', 1, NULL, '2017-09-14 13:37:15'),
(613, 50, 'Dumfries', 1, NULL, '2017-09-14 13:37:43'),
(614, 50, 'Lorton', 1, NULL, '2017-09-14 13:38:05'),
(615, 50, 'Woodbridge', 1, NULL, '2017-09-14 13:38:25'),
(616, 50, 'Bristow', 1, NULL, '2017-09-14 13:39:12'),
(617, 50, 'Catlett', 1, NULL, '2017-09-14 13:45:17'),
(618, 50, 'Quantico', 1, NULL, '2017-09-14 13:53:57'),
(619, 51, 'Abington', 1, NULL, '2017-09-14 14:41:04'),
(620, 51, 'Allston', 1, NULL, '2017-09-14 14:41:29'),
(621, 51, 'Avon', 1, NULL, '2017-09-14 14:41:45'),
(622, 51, 'Belmont', 1, NULL, '2017-09-14 14:42:10'),
(623, 51, 'Boston', 1, NULL, '2017-09-14 14:42:27'),
(624, 51, 'Braintree', 1, NULL, '2017-09-14 14:42:57'),
(625, 51, 'Brighton', 1, NULL, '2017-09-14 14:43:17'),
(626, 51, 'Brookline', 1, NULL, '2017-09-14 14:46:51'),
(627, 51, 'Burlington', 1, NULL, '2017-09-14 14:47:29'),
(628, 51, 'Cambridge', 1, NULL, '2017-09-14 14:48:04'),
(629, 51, 'Dorchester', 1, NULL, '2017-09-14 14:48:26'),
(630, 51, 'Dracut', 1, NULL, '2017-09-14 14:48:55'),
(631, 51, 'Everett', 1, NULL, '2017-09-14 14:49:23'),
(632, 51, 'Framingham', 1, NULL, '2017-09-14 14:51:59'),
(633, 51, 'Franklin', 1, NULL, '2017-09-14 14:53:36'),
(634, 51, 'Jamaica Plain', 1, NULL, '2017-09-14 14:55:00'),
(635, 51, 'Lexington', 1, NULL, '2017-09-14 14:56:26'),
(636, 51, 'Lowell', 1, NULL, '2017-09-14 14:56:40'),
(637, 51, 'Lynn', 1, NULL, '2017-09-14 14:56:58'),
(638, 51, 'Malden', 1, NULL, '2017-09-14 14:57:17'),
(639, 51, 'Manchester', 1, NULL, '2017-09-14 14:57:35'),
(640, 51, 'Mansfield', 1, NULL, '2017-09-14 14:58:28'),
(641, 51, 'Medford', 1, NULL, '2017-09-14 14:58:55'),
(642, 51, 'Methuen', 1, NULL, '2017-09-14 14:59:18'),
(643, 51, 'Needham', 1, NULL, '2017-09-14 14:59:38'),
(644, 51, 'Norwood', 1, NULL, '2017-09-14 15:00:00'),
(645, 51, 'Peabody', 1, NULL, '2017-09-14 15:00:19'),
(646, 51, 'Quincy', 1, NULL, '2017-09-14 15:00:35'),
(647, 51, 'Revere', 1, NULL, '2017-09-14 15:01:03'),
(648, 51, 'Roxbury', 1, NULL, '2017-09-14 15:01:24'),
(649, 51, 'Somerville', 1, NULL, '2017-09-14 15:01:43'),
(650, 51, 'South Easton', 1, NULL, '2017-09-14 15:02:29'),
(651, 51, 'Stoughton', 1, NULL, '2017-09-14 15:03:03'),
(652, 51, 'Tewksbury', 1, NULL, '2017-09-14 15:03:24'),
(653, 51, 'Waltham', 1, NULL, '2017-09-14 15:03:40'),
(654, 51, 'Watertown', 1, NULL, '2017-09-14 15:04:06'),
(655, 51, 'Wayland', 1, NULL, '2017-09-14 15:04:30'),
(656, 51, 'Wellesley', 1, NULL, '2017-09-14 15:04:55'),
(657, 51, 'Woburn', 1, NULL, '2017-09-14 15:06:25'),
(658, 51, 'Acton', 1, NULL, '2017-09-14 15:07:37'),
(659, 51, 'Ashland', 1, NULL, '2017-09-14 15:08:13'),
(660, 51, 'Auburndale', 1, NULL, '2017-09-14 15:08:52'),
(661, 51, 'Bedford', 1, NULL, '2017-09-14 15:10:23'),
(662, 51, 'Bellingham', 1, NULL, '2017-09-14 15:10:37'),
(663, 51, 'Beverly', 1, NULL, '2017-09-14 15:11:21'),
(664, 51, 'Brockton', 1, NULL, '2017-09-14 15:12:02'),
(665, 51, 'Canton', 1, NULL, '2017-09-14 15:12:40'),
(666, 51, 'Chestnut Hill', 1, NULL, '2017-09-14 15:13:08'),
(667, 51, 'Cohasset', 1, NULL, '2017-09-14 15:13:28'),
(668, 51, 'Danvers', 1, NULL, '2017-09-14 15:13:47'),
(669, 51, 'Dedham', 1, NULL, '2017-09-14 15:14:19'),
(670, 51, 'East Boston', 1, NULL, '2017-09-14 15:14:43'),
(671, 51, 'Foxborough', 1, NULL, '2017-09-14 15:15:17'),
(672, 51, 'Groton', 1, NULL, '2017-09-14 15:15:36'),
(673, 51, 'Hanover', 1, NULL, '2017-09-14 15:16:04'),
(674, 51, 'Hanson', 1, NULL, '2017-09-14 15:16:30'),
(675, 51, 'Hingham', 1, NULL, '2017-09-14 15:17:11'),
(676, 51, 'Hyde Park', 1, NULL, '2017-09-14 15:17:42'),
(677, 51, 'Marshfield', 1, NULL, '2017-09-14 15:19:03'),
(678, 51, 'Mattapan', 1, NULL, '2017-09-14 15:19:26'),
(679, 51, 'Medfield', 1, NULL, '2017-09-14 15:20:13'),
(680, 51, 'Medway', 1, NULL, '2017-09-14 15:21:00'),
(681, 51, 'Melrose', 1, NULL, '2017-09-14 15:21:21'),
(682, 51, 'Natick', 1, NULL, '2017-09-14 15:21:52'),
(683, 51, 'Newton', 1, NULL, '2017-09-14 15:22:09'),
(684, 51, 'North Reading', 1, NULL, '2017-09-14 15:22:36'),
(685, 51, 'Norwell', 1, NULL, '2017-09-14 15:23:29'),
(686, 51, 'Pembroke', 1, NULL, '2017-09-14 15:24:23'),
(687, 51, 'Plainville', 1, NULL, '2017-09-14 15:24:53'),
(688, 51, 'Plymouth', 1, NULL, '2017-09-14 15:25:20'),
(689, 51, 'Randolph', 1, NULL, '2017-09-14 15:26:38'),
(690, 51, 'Reading', 1, NULL, '2017-09-14 15:26:53'),
(691, 51, 'Roxbury Crossing', 1, NULL, '2017-09-14 15:27:53'),
(692, 51, 'Salem', 1, NULL, '2017-09-14 15:28:31'),
(693, 51, 'Saugus', 1, NULL, '2017-09-14 15:28:51'),
(694, 51, 'Sharon', 1, NULL, '2017-09-14 15:30:02'),
(695, 51, 'Stoneham', 1, NULL, '2017-09-14 15:30:45'),
(696, 51, 'Stow', 1, NULL, '2017-09-14 15:31:16'),
(697, 51, 'Sudbury', 1, NULL, '2017-09-14 15:31:31'),
(698, 51, 'Swampscott', 1, NULL, '2017-09-14 15:32:13'),
(699, 51, 'Wakefield', 1, NULL, '2017-09-14 15:32:53'),
(700, 51, 'Walpole', 1, NULL, '2017-09-14 15:33:18'),
(701, 51, 'West Roxbury', 1, NULL, '2017-09-14 15:34:33'),
(702, 51, 'Westborough', 1, NULL, '2017-09-14 15:35:33'),
(703, 51, 'Weymouth', 1, NULL, '2017-09-14 15:36:28'),
(704, 51, 'Whitman', 1, NULL, '2017-09-14 15:36:53'),
(705, 51, 'Billerica', 1, NULL, '2017-09-14 15:38:06'),
(706, 51, 'Chelmsford', 1, NULL, '2017-09-14 15:41:37'),
(707, 51, 'Chelsea', 1, NULL, '2017-09-14 15:47:41'),
(708, 51, 'Fitchburg', 1, NULL, '2017-09-14 15:48:18'),
(709, 51, 'Hopkinton', 1, NULL, '2017-09-14 15:48:52'),
(710, 51, 'North Billerica', 1, NULL, '2017-09-14 15:49:20'),
(711, 51, 'Osterville', 1, NULL, '2017-09-14 15:49:35'),
(712, 51, 'Roslindale', 1, NULL, '2017-09-14 15:49:58'),
(713, 51, 'Middleton', 1, NULL, '2017-09-14 15:52:17'),
(714, 51, 'Shrewsbury', 1, NULL, '2017-09-14 15:52:29'),
(715, 52, 'Fall River', 1, NULL, '2017-09-14 16:29:36'),
(716, 52, 'New Bedford', 1, NULL, '2017-09-14 16:30:17'),
(717, 52, 'Norton', 1, NULL, '2017-09-14 16:30:37'),
(718, 52, 'Seekonk', 1, NULL, '2017-09-14 16:30:53'),
(719, 52, 'Attleboro', 1, NULL, '2017-09-14 16:31:38'),
(720, 52, 'Barnstable', 1, NULL, '2017-09-14 16:31:56'),
(721, 52, 'Bedford', 1, NULL, '2017-09-14 16:32:49'),
(722, 52, 'Carver', 1, NULL, '2017-09-14 16:33:14'),
(723, 52, 'Dartmouth', 1, NULL, '2017-09-14 16:33:26'),
(724, 52, 'Dennis', 1, NULL, '2017-09-14 16:33:46'),
(725, 52, 'East Falmouth', 1, NULL, '2017-09-14 16:34:04'),
(726, 52, 'Fairhaven', 1, NULL, '2017-09-14 16:34:33'),
(727, 52, 'Falmouth', 1, NULL, '2017-09-14 16:35:00'),
(728, 52, 'Harwich', 1, NULL, '2017-09-14 16:35:24'),
(729, 52, 'Hyannis', 1, NULL, '2017-09-14 16:35:42'),
(730, 52, 'Mashpee', 1, NULL, '2017-09-14 16:36:04'),
(731, 52, 'Nantucket', 1, NULL, '2017-09-14 16:36:27'),
(732, 52, 'North Attleboro', 1, NULL, '2017-09-14 16:37:14'),
(733, 52, 'Orleans', 1, NULL, '2017-09-14 16:37:35'),
(734, 52, 'Plymouth', 1, NULL, '2017-09-14 16:37:50'),
(735, 52, 'Raynham', 1, NULL, '2017-09-14 16:38:24'),
(736, 52, 'Sandwich', 1, NULL, '2017-09-14 16:39:05'),
(737, 52, 'Somerset', 1, NULL, '2017-09-14 16:39:27'),
(738, 52, 'South Attleboro', 1, NULL, '2017-09-14 16:40:14'),
(739, 52, 'South Yarmouth', 1, NULL, '2017-09-14 16:40:46'),
(740, 52, 'Taunton', 1, NULL, '2017-09-14 16:41:19'),
(741, 52, 'Wareham', 1, NULL, '2017-09-14 16:41:57'),
(742, 14, 'Walsall', 1, NULL, '2017-09-16 08:43:14'),
(743, 14, 'Norwich', 1, NULL, '2017-09-19 14:35:21'),
(744, 54, 'Chicoutimi', 1, NULL, '2017-10-11 12:13:46'),
(745, 54, 'Rimouski', 1, NULL, '2017-10-11 12:14:21'),
(746, 54, 'Sherbrooke', 1, NULL, '2017-10-11 12:14:53'),
(747, 54, 'Saint-Hyacinthe', 1, NULL, '2017-10-11 12:15:23'),
(748, 55, 'Blainville', 1, NULL, '2017-10-11 12:17:13'),
(749, 55, 'Boisbriand', 1, NULL, '2017-10-11 12:17:35'),
(750, 55, 'Brossard', 1, NULL, '2017-10-11 12:18:02'),
(751, 55, 'Dollard-des-Ormeaux', 1, NULL, '2017-10-11 12:18:34'),
(752, 55, 'Kirkland', 1, NULL, '2017-10-11 12:19:13'),
(753, 55, 'Lasalle', 1, NULL, '2017-10-11 12:19:36'),
(754, 55, 'Laval', 1, NULL, '2017-10-11 12:19:57'),
(755, 55, 'Longueuil', 1, NULL, '2017-10-11 12:20:17'),
(756, 55, 'Montréal', 1, NULL, '2017-10-11 12:20:38'),
(757, 55, 'Outremont', 1, NULL, '2017-10-11 12:21:35'),
(758, 55, 'Pierrefonds', 1, NULL, '2017-10-11 12:22:04'),
(759, 55, 'Roxboro', 1, NULL, '2017-10-11 12:22:40'),
(760, 55, 'Saint-Eustache', 1, NULL, '2017-10-11 12:23:04'),
(761, 55, 'Saint-Jean-sur-Richelieu', 1, NULL, '2017-10-11 12:23:29'),
(762, 55, 'Saint-Laurent', 1, NULL, '2017-10-11 12:23:52'),
(763, 55, 'Saint-Léonard', 1, NULL, '2017-10-11 12:25:30'),
(764, 55, 'Vaudreuil-Dorion', 1, NULL, '2017-10-11 12:25:58'),
(765, 55, 'Westmount', 1, NULL, '2017-10-11 12:26:23'),
(766, 55, 'Greenfield Park', 1, NULL, '2017-10-11 12:27:37'),
(767, 55, 'La Prairie', 1, NULL, '2017-10-11 12:28:14'),
(768, 55, 'Rosemère', 1, NULL, '2017-10-11 12:29:16'),
(769, 55, 'Saint-Hubert', 1, NULL, '2017-10-11 12:30:01'),
(770, 55, 'Verdun', 1, NULL, '2017-10-11 12:30:40'),
(771, 55, 'Repentigny', 1, NULL, '2017-10-11 12:33:26'),
(772, 55, 'Chomedey', 1, NULL, '2017-10-11 12:39:27'),
(773, 55, 'Dorval', 1, NULL, '2017-10-11 12:40:10'),
(774, 55, 'Granby', 1, NULL, '2017-10-11 12:40:33'),
(775, 55, 'Sainte-Marthe-sur-le-Lac', 1, NULL, '2017-10-11 12:41:20'),
(776, 55, 'Sainte-Thérèse', 1, NULL, '2017-10-11 12:42:21'),
(777, 55, 'St. Michel', 1, NULL, '2017-10-11 12:42:58'),
(778, 56, 'Lévis', 1, NULL, '2017-10-11 13:09:44'),
(779, 56, 'Québec', 1, NULL, '2017-10-11 13:10:05'),
(780, 56, 'Quebec City', 1, NULL, '2017-10-11 13:10:35'),
(781, 56, 'Sainte Foy', 1, NULL, '2017-10-11 13:11:07'),
(782, 57, 'Drummondville', 1, NULL, '2017-10-11 13:12:44'),
(783, 57, 'Sherbrooke', 1, NULL, '2017-10-11 13:13:17'),
(784, 57, 'Trois-Rivieres', 1, NULL, '2017-10-11 13:13:37'),
(785, 58, 'Aylmer', 1, NULL, '2017-10-11 13:15:02'),
(786, 58, 'Gatineau', 1, NULL, '2017-10-11 13:15:27'),
(787, 58, 'Hull', 1, NULL, '2017-10-11 13:15:50'),
(788, 58, 'La Pêche', 1, NULL, '2017-10-11 13:16:07'),
(789, 58, 'Mont-Tremblant', 1, NULL, '2017-10-11 13:16:37'),
(790, 59, 'Aalsmeer', 1, NULL, '2017-10-17 16:38:26'),
(791, 59, 'Amstelveen', 1, NULL, '2017-10-17 16:39:20'),
(792, 59, 'Amsterdam', 1, NULL, '2017-10-17 16:39:39'),
(793, 59, 'Badhoevedorp', 1, NULL, '2017-10-17 16:43:51'),
(794, 59, 'Haarlem', 1, NULL, '2017-10-17 16:45:14'),
(795, 59, 'Hoofddorp', 1, NULL, '2017-10-17 16:46:18'),
(796, 59, 'Laren', 1, NULL, '2017-10-17 16:46:50'),
(797, 59, 'Leiden', 1, NULL, '2017-10-17 16:47:13'),
(798, 59, 'Rijsenhout', 1, NULL, '2017-10-17 16:47:41'),
(799, 59, 'Wormerveer', 1, NULL, '2017-10-17 16:48:22'),
(800, 59, 'Zaandam', 1, NULL, '2017-10-17 17:02:16'),
(801, 60, 'Delft', 1, NULL, '2017-10-17 17:36:51'),
(802, 60, 'Den Haag', 1, NULL, '2017-10-17 17:37:23'),
(803, 60, 'Leiden', 1, NULL, '2017-10-17 17:37:53'),
(804, 60, 'Naaldwijk', 1, NULL, '2017-10-17 17:38:15'),
(805, 60, 'Rotterdam', 1, NULL, '2017-10-17 17:38:47'),
(806, 60, 'The Hague', 1, NULL, '2017-10-17 17:39:48'),
(807, 61, 'Asbury Park', 1, NULL, '2017-10-20 11:45:56'),
(808, 61, 'Bound Brook', 1, NULL, '2017-10-20 11:46:24'),
(809, 61, 'Bridgewater', 1, NULL, '2017-10-20 11:47:00'),
(810, 61, 'Colonia', 1, NULL, '2017-10-20 11:47:27'),
(811, 61, 'Dayton', 1, NULL, '2017-10-20 16:22:11'),
(812, 61, 'East Brunswick', 1, NULL, '2017-10-20 16:23:07'),
(813, 61, 'East Windsor', 1, NULL, '2017-10-20 16:23:47'),
(814, 61, 'Edison', 1, NULL, '2017-10-20 16:24:17'),
(815, 61, 'Ewing Township', 1, NULL, '2017-10-20 16:25:23'),
(816, 61, 'Franklin Park', 1, NULL, '2017-10-20 16:25:46'),
(817, 61, 'Franklin Township', 1, NULL, '2017-10-20 16:26:28'),
(818, 61, 'Freehold', 1, NULL, '2017-10-20 16:27:00'),
(819, 61, 'Freehold Township', 1, NULL, '2017-10-20 16:27:35'),
(820, 61, 'Hamilton', 1, NULL, '2017-10-20 16:27:59'),
(821, 61, 'Helmetta', 1, NULL, '2017-10-20 16:28:34'),
(822, 61, 'Hightstown', 1, NULL, '2017-10-20 16:29:12'),
(823, 61, 'Hillsborough Township', 1, NULL, '2017-10-20 16:29:47'),
(824, 61, 'Iselin', 1, NULL, '2017-10-20 16:30:26'),
(825, 61, 'Kendall Park', 1, NULL, '2017-10-20 16:32:55'),
(826, 61, 'Lambertville', 1, NULL, '2017-10-20 16:33:50'),
(827, 61, 'Lawrence Township', 1, NULL, '2017-10-20 16:34:08'),
(828, 61, 'Lebanon', 1, NULL, '2017-10-20 16:35:11'),
(829, 61, 'Long Branch', 1, NULL, '2017-10-20 16:35:45'),
(830, 61, 'Marlboro Township', 1, NULL, '2017-10-20 16:36:32'),
(831, 61, 'Matawan', 1, NULL, '2017-10-20 16:36:57'),
(832, 61, 'Monmouth Junction', 1, NULL, '2017-10-20 16:37:22'),
(833, 61, 'Neptune City', 1, NULL, '2017-10-20 16:37:54'),
(834, 61, 'New Brunswick', 1, NULL, '2017-10-20 16:40:10'),
(835, 61, 'North Brunswick', 1, NULL, '2017-10-20 16:40:39'),
(836, 61, 'North Brunswick Township', 1, NULL, '2017-10-20 16:41:15'),
(837, 61, 'Parlin', 1, NULL, '2017-10-20 16:41:52'),
(838, 61, 'Perth Amboy', 1, NULL, '2017-10-20 16:42:26'),
(839, 61, 'Piscataway Township', 1, NULL, '2017-10-20 16:42:58'),
(840, 61, 'Plainfield', 1, NULL, '2017-10-20 16:43:35'),
(841, 61, 'Plainsboro Township', 1, NULL, '2017-10-20 16:44:10'),
(842, 61, 'Princeton', 1, NULL, '2017-10-20 16:44:50'),
(843, 61, 'Princeton Township', 1, NULL, '2017-10-20 16:45:30'),
(844, 61, 'Rahway', 1, NULL, '2017-10-20 16:46:02'),
(845, 61, 'Sayreville', 1, NULL, '2017-10-20 16:46:29'),
(846, 61, 'Somerset', 1, NULL, '2017-10-20 16:46:58'),
(847, 61, 'Somerville', 1, NULL, '2017-10-20 16:47:43'),
(848, 61, 'South Bound Brook', 1, NULL, '2017-10-20 16:48:28'),
(849, 61, 'South Brunswick Township', 1, NULL, '2017-10-20 16:49:43'),
(850, 61, 'South Plainfield', 1, NULL, '2017-10-20 16:50:08'),
(851, 61, 'South River', 1, NULL, '2017-10-20 16:51:19'),
(852, 61, 'Warren', 1, NULL, '2017-10-20 16:52:05'),
(853, 61, 'West Long Branch', 1, NULL, '2017-10-20 16:52:40'),
(854, 61, 'Woodbridge Township', 1, NULL, '2017-10-20 16:53:14'),
(855, 61, 'Aberdeen Township', 1, NULL, '2017-10-20 16:54:22'),
(856, 61, 'Bernardsville', 1, NULL, '2017-10-20 16:56:12'),
(857, 61, 'Branchburg', 1, NULL, '2017-10-20 16:57:11'),
(858, 61, 'Brick', 1, NULL, '2017-10-20 16:57:31'),
(859, 61, 'Flemington', 1, NULL, '2017-10-20 16:58:28'),
(860, 61, 'Hazlet', 1, NULL, '2017-10-20 17:00:22'),
(861, 61, 'Hillsborough', 1, NULL, '2017-10-20 17:01:20'),
(862, 61, 'Howell', 1, NULL, '2017-10-20 17:02:04'),
(863, 61, 'Jackson', 1, NULL, '2017-10-20 17:02:34'),
(864, 61, 'Little Silver', 1, NULL, '2017-10-20 17:03:20'),
(865, 61, 'Manasquan', 1, NULL, '2017-10-20 17:03:51'),
(866, 61, 'Middletown', 1, NULL, '2017-10-20 17:05:00'),
(867, 61, 'Monroe Township', 1, NULL, '2017-10-20 17:05:31'),
(868, 61, 'North Plainfield', 1, NULL, '2017-10-20 17:06:39'),
(869, 61, 'Ocean', 1, NULL, '2017-10-20 17:06:53'),
(870, 61, 'Ocean Township', 1, NULL, '2017-10-20 17:07:34'),
(871, 61, 'Old Bridge', 1, NULL, '2017-10-20 17:07:59'),
(872, 61, 'Old Bridge Township', 1, NULL, '2017-10-20 17:08:26'),
(873, 61, 'Pennington', 1, NULL, '2017-10-20 17:09:32'),
(874, 61, 'Point Pleasant', 1, NULL, '2017-10-20 17:12:03'),
(875, 61, 'Red Bank', 1, NULL, '2017-10-20 17:12:39'),
(876, 61, 'Skillman', 1, NULL, '2017-10-20 17:15:00'),
(877, 61, 'Cranbury', 1, NULL, '2017-10-20 17:26:52'),
(878, 61, 'Englishtown', 1, NULL, '2017-10-20 17:27:31'),
(879, 61, 'Fords', 1, NULL, '2017-10-20 17:28:34'),
(880, 62, 'Bayonne', 1, NULL, '2017-10-24 10:39:11'),
(881, 62, 'Belleville', 1, NULL, '2017-10-24 10:39:34'),
(882, 62, 'Bergenfield', 1, NULL, '2017-10-24 10:40:04'),
(883, 62, 'Berlin', 1, NULL, '2017-10-24 10:40:28'),
(884, 62, 'Bloomfield', 1, NULL, '2017-10-24 10:41:48'),
(885, 62, 'Boonton', 1, NULL, '2017-10-24 10:42:19'),
(886, 62, 'Carlstadt', 1, NULL, '2017-10-24 10:42:49'),
(887, 62, 'Carteret', 1, NULL, '2017-10-24 10:43:17'),
(888, 62, 'Cliffside Park', 1, NULL, '2017-10-24 10:43:49'),
(889, 62, 'Clifton', 1, NULL, '2017-10-24 10:44:47'),
(890, 62, 'Dunellen', 1, NULL, '2017-10-24 10:58:14'),
(891, 62, 'East Hanover', 1, NULL, '2017-10-24 10:58:50'),
(892, 62, 'East Orange', 1, NULL, '2017-10-24 10:59:16'),
(893, 62, 'Edgewater', 1, NULL, '2017-10-24 10:59:37'),
(894, 62, 'Edison', 1, NULL, '2017-10-24 10:59:52'),
(895, 62, 'Elizabeth', 1, NULL, '2017-10-24 11:00:23'),
(896, 62, 'Elmwood Park', 1, NULL, '2017-10-24 11:00:48'),
(897, 62, 'Englewood', 1, NULL, '2017-10-24 11:01:10'),
(898, 62, 'Fair Lawn', 1, NULL, '2017-10-24 11:01:33'),
(899, 62, 'Fairfield', 1, NULL, '2017-10-24 11:02:02'),
(900, 62, 'Fords', 1, NULL, '2017-10-24 11:02:25'),
(901, 62, 'Fort Lee', 1, NULL, '2017-10-24 11:02:48'),
(902, 62, 'Franklin Township', 1, NULL, '2017-10-24 11:03:20'),
(903, 62, 'Garfield', 1, NULL, '2017-10-24 11:03:55'),
(904, 62, 'Guttenberg', 1, NULL, '2017-10-24 11:04:25'),
(905, 62, 'Hackensack', 1, NULL, '2017-10-24 11:04:44'),
(906, 62, 'Haledon', 1, NULL, '2017-10-24 11:05:09'),
(907, 62, 'Highland Park', 1, NULL, '2017-10-24 11:05:35'),
(908, 62, 'Hoboken', 1, NULL, '2017-10-24 11:05:56'),
(909, 62, 'Irvington', 1, NULL, '2017-10-24 11:06:24'),
(910, 62, 'Jersey City', 1, NULL, '2017-10-24 11:06:52'),
(911, 62, 'Keansburg', 1, NULL, '2017-10-24 11:07:23'),
(912, 62, 'Kearny', 1, NULL, '2017-10-24 11:07:49'),
(913, 62, 'Kenilworth', 1, NULL, '2017-10-24 11:08:08'),
(914, 62, 'Linden', 1, NULL, '2017-10-24 11:08:26'),
(915, 62, 'Little Ferry', 1, NULL, '2017-10-24 11:08:47'),
(916, 62, 'Lyndhurst', 1, NULL, '2017-10-24 11:16:54'),
(917, 62, 'Madison', 1, NULL, '2017-10-24 11:24:01'),
(918, 62, 'Montclair', 1, NULL, '2017-10-24 11:24:38'),
(919, 62, 'Morris Plains', 1, NULL, '2017-10-24 11:25:48'),
(920, 62, 'Morristown', 1, NULL, '2017-10-24 11:26:09'),
(921, 62, 'Mount Olive Township', 1, NULL, '2017-10-24 11:26:38'),
(922, 62, 'New Milford', 1, NULL, '2017-10-24 11:27:04'),
(923, 62, 'Newark', 1, NULL, '2017-10-24 11:27:29'),
(924, 62, 'North Bergen', 1, NULL, '2017-10-24 11:28:22'),
(925, 62, 'Nutley', 1, NULL, '2017-10-24 11:29:00'),
(926, 62, 'Orange', 1, NULL, '2017-10-24 11:29:23'),
(927, 62, 'Paramus', 1, NULL, '2017-10-24 11:29:41'),
(928, 62, 'Parsippany', 1, NULL, '2017-10-24 11:30:18'),
(929, 62, 'Parsippany-Troy Hills', 1, NULL, '2017-10-24 11:30:51'),
(930, 62, 'Paterson', 1, NULL, '2017-10-24 11:32:22'),
(931, 62, 'Rahway', 1, NULL, '2017-10-24 11:45:15'),
(932, 62, 'Ridgefield', 1, NULL, '2017-10-24 11:45:47'),
(933, 62, 'Ridgewood', 1, NULL, '2017-10-24 11:46:43'),
(934, 62, 'River Edge', 1, NULL, '2017-10-24 11:48:07'),
(935, 62, 'Roselle', 1, NULL, '2017-10-24 11:48:37'),
(936, 62, 'Saddle Brook', 1, NULL, '2017-10-24 11:49:13'),
(937, 62, 'Scotch Plains', 1, NULL, '2017-10-24 11:49:57'),
(938, 62, 'Secaucus', 1, NULL, '2017-10-24 11:50:35'),
(939, 62, 'Shrewsbury', 1, NULL, '2017-10-24 11:51:05'),
(940, 62, 'Somerset', 1, NULL, '2017-10-24 11:51:31'),
(941, 62, 'South Bound Brook', 1, NULL, '2017-10-24 11:51:51'),
(942, 62, 'South Hackensack', 1, NULL, '2017-10-24 11:53:11'),
(943, 62, 'South Orange', 1, NULL, '2017-10-24 11:53:53'),
(944, 62, 'Springfield Township', 1, NULL, '2017-10-24 11:54:16'),
(945, 62, 'Summit', 1, NULL, '2017-10-24 11:54:38'),
(946, 62, 'Teaneck', 1, NULL, '2017-10-24 11:55:05'),
(947, 62, 'Tenafly', 1, NULL, '2017-10-24 11:56:07'),
(948, 62, 'Totowa', 1, NULL, '2017-10-24 11:56:32'),
(949, 62, 'Union City', 1, NULL, '2017-10-24 11:57:12'),
(950, 62, 'Warren', 1, NULL, '2017-10-24 11:57:35'),
(951, 62, 'West Caldwell', 1, NULL, '2017-10-24 11:58:03'),
(952, 62, 'West New York', 1, NULL, '2017-10-24 11:58:25'),
(953, 62, 'West Orange', 1, NULL, '2017-10-24 11:58:53'),
(954, 62, 'Westfield', 1, NULL, '2017-10-24 11:59:05'),
(955, 62, 'Westwood', 1, NULL, '2017-10-24 11:59:28'),
(956, 62, 'Wharton', 1, NULL, '2017-10-24 11:59:41');
INSERT INTO `qwikfarm_cities` (`id`, `region_id`, `city_name`, `status`, `updated_at`, `created_at`) VALUES
(957, 62, 'Woodbridge Township', 1, NULL, '2017-10-24 12:00:03'),
(958, 62, 'Woodbury', 1, NULL, '2017-10-24 12:00:27'),
(959, 62, 'Woodland Park', 1, NULL, '2017-10-24 12:00:50'),
(960, 62, 'Bedminster', 1, NULL, '2017-10-24 12:07:46'),
(961, 62, 'Berkeley Heights', 1, NULL, '2017-10-24 12:08:13'),
(962, 62, 'Chatham', 1, NULL, '2017-10-24 12:09:00'),
(963, 62, 'Cresskill', 1, NULL, '2017-10-24 12:09:45'),
(964, 62, 'Dumont', 1, NULL, '2017-10-24 12:10:09'),
(965, 62, 'Emerson', 1, NULL, '2017-10-24 12:10:57'),
(966, 62, 'Fairview', 1, NULL, '2017-10-24 13:05:44'),
(967, 62, 'Florham Park', 1, NULL, '2017-10-24 13:06:11'),
(968, 62, 'Franklin Lakes', 1, NULL, '2017-10-24 13:06:49'),
(969, 62, 'Garwood', 1, NULL, '2017-10-24 13:07:32'),
(970, 62, 'Green Brook Township', 1, NULL, '2017-10-24 13:08:05'),
(971, 62, 'Hillsdale', 1, NULL, '2017-10-24 13:23:18'),
(972, 62, 'Keyport', 1, NULL, '2017-10-24 13:24:04'),
(973, 62, 'Livingston', 1, NULL, '2017-10-24 13:24:47'),
(974, 62, 'Lodi', 1, NULL, '2017-10-24 13:25:02'),
(975, 62, 'Maplewood', 1, NULL, '2017-10-24 13:25:45'),
(976, 62, 'Mendham', 1, NULL, '2017-10-24 13:26:11'),
(977, 62, 'Midland Park', 1, NULL, '2017-10-24 13:26:45'),
(978, 62, 'Norwood', 1, NULL, '2017-10-24 13:27:49'),
(979, 62, 'Phillipsburg', 1, NULL, '2017-10-24 13:29:08'),
(980, 62, 'Rochelle Park', 1, NULL, '2017-10-24 13:29:55'),
(981, 62, 'Short Hills', 1, NULL, '2017-10-24 13:30:36'),
(982, 62, 'Sparta Township', 1, NULL, '2017-10-24 13:31:12'),
(983, 62, 'Stroudsburg', 1, NULL, '2017-10-24 13:31:40'),
(984, 62, 'Union', 1, NULL, '2017-10-24 13:32:55'),
(985, 62, 'Union Township', 1, NULL, '2017-10-24 13:33:25'),
(986, 62, 'Vauxhall', 1, NULL, '2017-10-24 13:34:08'),
(987, 62, 'Vernon Township', 1, NULL, '2017-10-24 13:34:34'),
(988, 62, 'Verona', 1, NULL, '2017-10-24 13:34:57'),
(989, 62, 'Wanaque', 1, NULL, '2017-10-24 13:35:25'),
(990, 62, 'Watchung', 1, NULL, '2017-10-24 13:36:06'),
(991, 62, 'Wayne', 1, NULL, '2017-10-24 13:36:32'),
(992, 62, 'Whitehouse Station', 1, NULL, '2017-10-24 13:37:34'),
(993, 62, 'Pennsauken', 1, NULL, '2017-10-24 14:51:22'),
(994, 62, 'Bernards', 1, NULL, '2017-10-24 15:01:20'),
(995, 62, 'Bridgewater', 1, NULL, '2017-10-24 15:01:58'),
(996, 62, 'Burlington Township', 1, NULL, '2017-10-24 15:02:41'),
(997, 62, 'Camden', 1, NULL, '2017-10-24 15:03:08'),
(998, 62, 'East Brunswick', 1, NULL, '2017-10-24 15:04:10'),
(999, 62, 'Hackettstown', 1, NULL, '2017-10-24 15:05:41'),
(1000, 62, 'Harrison', 1, NULL, '2017-10-24 15:06:02'),
(1001, 62, 'Lake Hiawatha', 1, NULL, '2017-10-24 15:06:42'),
(1002, 62, 'Manville', 1, NULL, '2017-10-24 15:07:05'),
(1003, 62, 'Metuchen', 1, NULL, '2017-10-24 15:07:38'),
(1004, 62, 'Rockaway', 1, NULL, '2017-10-24 15:08:50'),
(1005, 62, 'Pleasantville', 1, NULL, '2017-10-24 15:11:04'),
(1006, 62, 'Riverdale', 1, NULL, '2017-10-24 15:11:33'),
(1007, 63, 'Atlantic City', 1, NULL, '2017-10-24 15:19:08'),
(1008, 63, 'Burlington', 1, NULL, '2017-10-24 15:19:30'),
(1009, 63, 'Cherry Hill', 1, NULL, '2017-10-24 15:20:00'),
(1010, 63, 'Clementon', 1, NULL, '2017-10-24 15:20:23'),
(1011, 63, 'Collingswood', 1, NULL, '2017-10-24 15:20:45'),
(1012, 63, 'Delran', 1, NULL, '2017-10-24 15:21:09'),
(1013, 63, 'Egg Harbor Township', 1, NULL, '2017-10-24 15:21:34'),
(1014, 63, 'Glassboro', 1, NULL, '2017-10-24 15:22:01'),
(1015, 63, 'Hamilton Square', 1, NULL, '2017-10-24 15:22:29'),
(1016, 63, 'Hamilton Township', 1, NULL, '2017-10-24 15:22:51'),
(1017, 63, 'Lawrenceville', 1, NULL, '2017-10-24 15:23:15'),
(1018, 63, 'Maple Shade Township', 1, NULL, '2017-10-24 15:23:38'),
(1019, 63, 'Moorestown', 1, NULL, '2017-10-24 15:24:02'),
(1020, 63, 'Morganville', 1, NULL, '2017-10-24 15:24:20'),
(1021, 63, 'Mount Laurel', 1, NULL, '2017-10-24 15:24:46'),
(1022, 63, 'Penns Grove', 1, NULL, '2017-10-24 15:25:16'),
(1023, 63, 'Stratford', 1, NULL, '2017-10-24 15:25:40'),
(1024, 63, 'Toms River', 1, NULL, '2017-10-24 15:26:04'),
(1025, 63, 'Trenton', 1, NULL, '2017-10-24 15:26:24'),
(1026, 63, 'Voorhees Township', 1, NULL, '2017-10-24 15:26:46'),
(1027, 63, 'Willingboro Township', 1, NULL, '2017-10-24 15:27:10'),
(1028, 63, 'Woodbury', 1, NULL, '2017-10-24 15:27:34'),
(1029, 63, 'Wrightstown', 1, NULL, '2017-10-24 15:27:53'),
(1030, 63, 'Bordentown', 1, NULL, '2017-10-24 15:28:42'),
(1031, 63, 'Brick', 1, NULL, '2017-10-24 16:13:51'),
(1032, 63, 'Bridgeton', 1, NULL, '2017-10-24 16:14:13'),
(1033, 63, 'Manchester Township', 1, NULL, '2017-10-24 16:15:04'),
(1034, 63, 'Marlton', 1, NULL, '2017-10-24 16:15:25'),
(1035, 63, 'Rio Grande', 1, NULL, '2017-10-24 16:15:42'),
(1036, 63, 'Somerdale', 1, NULL, '2017-10-24 16:16:12'),
(1037, 63, 'Stafford Township', 1, NULL, '2017-10-24 16:18:02'),
(1038, 63, 'Turnersville', 1, NULL, '2017-10-24 16:19:15'),
(1039, 63, 'Vineland', 1, NULL, '2017-10-24 16:19:56'),
(1040, 63, 'Williamstown', 1, NULL, '2017-10-24 16:20:33'),
(1041, 63, 'Willingboro', 1, NULL, '2017-10-24 16:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `qwikfarm_countries`
--

CREATE TABLE `qwikfarm_countries` (
  `id` int(11) UNSIGNED NOT NULL,
  `country_name` varchar(255) DEFAULT NULL,
  `status` tinyint(2) UNSIGNED DEFAULT '1' COMMENT '1 for active, 0 for inactive',
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwikfarm_countries`
--

INSERT INTO `qwikfarm_countries` (`id`, `country_name`, `status`, `updated_at`, `created_at`) VALUES
(16, 'Canada', 1, '2017-07-20 05:13:17', '2017-03-19 17:52:24'),
(18, 'United Kingdom', 1, '2017-04-19 18:26:51', '2017-04-19 23:56:51'),
(26, 'United States', 1, '2018-02-15 12:14:45', '2017-09-11 20:51:18'),
(27, 'Netherlands', 1, '2017-10-17 11:04:15', '2017-10-17 16:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `qwikfarm_currency`
--

CREATE TABLE `qwikfarm_currency` (
  `id` int(5) NOT NULL,
  `country` varchar(20) NOT NULL,
  `code` varchar(2) NOT NULL,
  `dial_code` varchar(5) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `symbol` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `currency_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwikfarm_currency`
--

INSERT INTO `qwikfarm_currency` (`id`, `country`, `code`, `dial_code`, `currency`, `symbol`, `currency_code`) VALUES
(1, 'Afghanistan', 'AF', '+93', 'Afghan afghani', '؋', 'AFN'),
(2, 'Aland Islands', 'AX', '+358', '', '', ''),
(3, 'Albania', 'AL', '+355', 'Albanian lek', 'L', 'ALL'),
(4, 'Algeria', 'DZ', '+213', 'Algerian dinar', 'د.ج', 'DZD'),
(5, 'AmericanSamoa', 'AS', '+1684', '', '', ''),
(6, 'Andorra', 'AD', '+376', 'Euro', '€', 'EUR'),
(7, 'Angola', 'AO', '+244', 'Angolan kwanza', 'Kz', 'AOA'),
(8, 'Anguilla', 'AI', '+1264', 'East Caribbean dolla', '$', 'XCD'),
(9, 'Antarctica', 'AQ', '+672', '', '', ''),
(10, 'Antigua and Barbuda', 'AG', '+1268', 'East Caribbean dolla', '$', 'XCD'),
(11, 'Argentina', 'AR', '+54', 'Argentine peso', '$', 'ARS'),
(12, 'Armenia', 'AM', '+374', 'Armenian dram', '', 'AMD'),
(13, 'Aruba', 'AW', '+297', 'Aruban florin', 'ƒ', 'AWG'),
(14, 'Australia', 'AU', '+61', 'Australian dollar', '$', 'AUD'),
(15, 'Austria', 'AT', '+43', 'Euro', '€', 'EUR'),
(16, 'Azerbaijan', 'AZ', '+994', 'Azerbaijani manat', '', 'AZN'),
(17, 'Bahamas', 'BS', '+1242', '', '', ''),
(18, 'Bahrain', 'BH', '+973', 'Bahraini dinar', '.د.ب', 'BHD'),
(19, 'Bangladesh', 'BD', '+880', 'Bangladeshi taka', '৳', 'BDT'),
(20, 'Barbados', 'BB', '+1246', 'Barbadian dollar', '$', 'BBD'),
(21, 'Belarus', 'BY', '+375', 'Belarusian ruble', 'Br', 'BYR'),
(22, 'Belgium', 'BE', '+32', 'Euro', '€', 'EUR'),
(23, 'Belize', 'BZ', '+501', 'Belize dollar', '$', 'BZD'),
(24, 'Benin', 'BJ', '+229', 'West African CFA fra', 'Fr', 'XOF'),
(25, 'Bermuda', 'BM', '+1441', 'Bermudian dollar', '$', 'BMD'),
(26, 'Bhutan', 'BT', '+975', 'Bhutanese ngultrum', 'Nu.', 'BTN'),
(27, 'Bolivia, Plurination', 'BO', '+591', '', '', ''),
(28, 'Bosnia and Herzegovi', 'BA', '+387', '', '', ''),
(29, 'Botswana', 'BW', '+267', 'Botswana pula', 'P', 'BWP'),
(30, 'Brazil', 'BR', '+55', 'Brazilian real', 'R$', 'BRL'),
(31, 'British Indian Ocean', 'IO', '+246', '', '', ''),
(32, 'Brunei Darussalam', 'BN', '+673', '', '', ''),
(33, 'Bulgaria', 'BG', '+359', 'Bulgarian lev', 'лв', 'BGN'),
(34, 'Burkina Faso', 'BF', '+226', 'West African CFA fra', 'Fr', 'XOF'),
(35, 'Burundi', 'BI', '+257', 'Burundian franc', 'Fr', 'BIF'),
(36, 'Cambodia', 'KH', '+855', 'Cambodian riel', '៛', 'KHR'),
(37, 'Cameroon', 'CM', '+237', 'Central African CFA ', 'Fr', 'XAF'),
(38, 'Canada', 'CA', '+1', 'Canadian dollar', '$', 'CAD'),
(39, 'Cape Verde', 'CV', '+238', 'Cape Verdean escudo', 'Esc or $', 'CVE'),
(40, 'Cayman Islands', 'KY', '+ 345', 'Cayman Islands dolla', '$', 'KYD'),
(41, 'Central African Repu', 'CF', '+236', '', '', ''),
(42, 'Chad', 'TD', '+235', 'Central African CFA ', 'Fr', 'XAF'),
(43, 'Chile', 'CL', '+56', 'Chilean peso', '$', 'CLP'),
(44, 'China', 'CN', '+86', 'Chinese yuan', '¥ or 元', 'CNY'),
(45, 'Christmas Island', 'CX', '+61', '', '', ''),
(46, 'Cocos (Keeling) Isla', 'CC', '+61', '', '', ''),
(47, 'Colombia', 'CO', '+57', 'Colombian peso', '$', 'COP'),
(48, 'Comoros', 'KM', '+269', 'Comorian franc', 'Fr', 'KMF'),
(49, 'Congo', 'CG', '+242', '', '', ''),
(50, 'Congo, The Democrati', 'CD', '+243', '', '', ''),
(51, 'Cook Islands', 'CK', '+682', 'New Zealand dollar', '$', 'NZD'),
(52, 'Costa Rica', 'CR', '+506', 'Costa Rican colón', '₡', 'CRC'),
(53, 'Cote d''Ivoire', 'CI', '+225', 'West African CFA fra', 'Fr', 'XOF'),
(54, 'Croatia', 'HR', '+385', 'Croatian kuna', 'kn', 'HRK'),
(55, 'Cuba', 'CU', '+53', 'Cuban convertible pe', '$', 'CUC'),
(56, 'Cyprus', 'CY', '+357', 'Euro', '€', 'EUR'),
(57, 'Czech Republic', 'CZ', '+420', 'Czech koruna', 'Kč', 'CZK'),
(58, 'Denmark', 'DK', '+45', 'Danish krone', 'kr', 'DKK'),
(59, 'Djibouti', 'DJ', '+253', 'Djiboutian franc', 'Fr', 'DJF'),
(60, 'Dominica', 'DM', '+1767', 'East Caribbean dolla', '$', 'XCD'),
(61, 'Dominican Republic', 'DO', '+1849', 'Dominican peso', '$', 'DOP'),
(62, 'Ecuador', 'EC', '+593', 'United States dollar', '$', 'USD'),
(63, 'Egypt', 'EG', '+20', 'Egyptian pound', '£ or ج.م', 'EGP'),
(64, 'El Salvador', 'SV', '+503', 'United States dollar', '$', 'USD'),
(65, 'Equatorial Guinea', 'GQ', '+240', 'Central African CFA ', 'Fr', 'XAF'),
(66, 'Eritrea', 'ER', '+291', 'Eritrean nakfa', 'Nfk', 'ERN'),
(67, 'Estonia', 'EE', '+372', 'Euro', '€', 'EUR'),
(68, 'Ethiopia', 'ET', '+251', 'Ethiopian birr', 'Br', 'ETB'),
(69, 'Falkland Islands (Ma', 'FK', '+500', '', '', ''),
(70, 'Faroe Islands', 'FO', '+298', 'Danish krone', 'kr', 'DKK'),
(71, 'Fiji', 'FJ', '+679', 'Fijian dollar', '$', 'FJD'),
(72, 'Finland', 'FI', '+358', 'Euro', '€', 'EUR'),
(73, 'France', 'FR', '+33', 'Euro', '€', 'EUR'),
(74, 'French Guiana', 'GF', '+594', '', '', ''),
(75, 'French Polynesia', 'PF', '+689', 'CFP franc', 'Fr', 'XPF'),
(76, 'Gabon', 'GA', '+241', 'Central African CFA ', 'Fr', 'XAF'),
(77, 'Gambia', 'GM', '+220', '', '', ''),
(78, 'Georgia', 'GE', '+995', 'Georgian lari', 'ლ', 'GEL'),
(79, 'Germany', 'DE', '+49', 'Euro', '€', 'EUR'),
(80, 'Ghana', 'GH', '+233', 'Ghana cedi', '₵', 'GHS'),
(81, 'Gibraltar', 'GI', '+350', 'Gibraltar pound', '£', 'GIP'),
(82, 'Greece', 'GR', '+30', 'Euro', '€', 'EUR'),
(83, 'Greenland', 'GL', '+299', '', '', ''),
(84, 'Grenada', 'GD', '+1473', 'East Caribbean dolla', '$', 'XCD'),
(85, 'Guadeloupe', 'GP', '+590', '', '', ''),
(86, 'Guam', 'GU', '+1671', '', '', ''),
(87, 'Guatemala', 'GT', '+502', 'Guatemalan quetzal', 'Q', 'GTQ'),
(88, 'Guernsey', 'GG', '+44', 'British pound', '£', 'GBP'),
(89, 'Guinea', 'GN', '+224', 'Guinean franc', 'Fr', 'GNF'),
(90, 'Guinea-Bissau', 'GW', '+245', 'West African CFA fra', 'Fr', 'XOF'),
(91, 'Guyana', 'GY', '+595', 'Guyanese dollar', '$', 'GYD'),
(92, 'Haiti', 'HT', '+509', 'Haitian gourde', 'G', 'HTG'),
(93, 'Holy See (Vatican Ci', 'VA', '+379', '', '', ''),
(94, 'Honduras', 'HN', '+504', 'Honduran lempira', 'L', 'HNL'),
(95, 'Hong Kong', 'HK', '+852', 'Hong Kong dollar', '$', 'HKD'),
(96, 'Hungary', 'HU', '+36', 'Hungarian forint', 'Ft', 'HUF'),
(97, 'Iceland', 'IS', '+354', 'Icelandic króna', 'kr', 'ISK'),
(98, 'India', 'IN', '+91', 'Indian rupee', '₹', 'INR'),
(99, 'Indonesia', 'ID', '+62', 'Indonesian rupiah', 'Rp', 'IDR'),
(100, 'Iran, Islamic Republ', 'IR', '+98', '', '', ''),
(101, 'Iraq', 'IQ', '+964', 'Iraqi dinar', 'ع.د', 'IQD'),
(102, 'Ireland', 'IE', '+353', 'Euro', '€', 'EUR'),
(103, 'Isle of Man', 'IM', '+44', 'British pound', '£', 'GBP'),
(104, 'Israel', 'IL', '+972', 'Israeli new shekel', '₪', 'ILS'),
(105, 'Italy', 'IT', '+39', 'Euro', '€', 'EUR'),
(106, 'Jamaica', 'JM', '+1876', 'Jamaican dollar', '$', 'JMD'),
(107, 'Japan', 'JP', '+81', 'Japanese yen', '¥', 'JPY'),
(108, 'Jersey', 'JE', '+44', 'British pound', '£', 'GBP'),
(109, 'Jordan', 'JO', '+962', 'Jordanian dinar', 'د.ا', 'JOD'),
(110, 'Kazakhstan', 'KZ', '+7 7', 'Kazakhstani tenge', '', 'KZT'),
(111, 'Kenya', 'KE', '+254', 'Kenyan shilling', 'Sh', 'KES'),
(112, 'Kiribati', 'KI', '+686', 'Australian dollar', '$', 'AUD'),
(113, 'Korea, Democratic Pe', 'KP', '+850', '', '', ''),
(114, 'Korea, Republic of S', 'KR', '+82', '', '', ''),
(115, 'Kuwait', 'KW', '+965', 'Kuwaiti dinar', 'د.ك', 'KWD'),
(116, 'Kyrgyzstan', 'KG', '+996', 'Kyrgyzstani som', 'лв', 'KGS'),
(117, 'Laos', 'LA', '+856', 'Lao kip', '₭', 'LAK'),
(118, 'Latvia', 'LV', '+371', 'Euro', '€', 'EUR'),
(119, 'Lebanon', 'LB', '+961', 'Lebanese pound', 'ل.ل', 'LBP'),
(120, 'Lesotho', 'LS', '+266', 'Lesotho loti', 'L', 'LSL'),
(121, 'Liberia', 'LR', '+231', 'Liberian dollar', '$', 'LRD'),
(122, 'Libyan Arab Jamahiri', 'LY', '+218', '', '', ''),
(123, 'Liechtenstein', 'LI', '+423', 'Swiss franc', 'Fr', 'CHF'),
(124, 'Lithuania', 'LT', '+370', 'Euro', '€', 'EUR'),
(125, 'Luxembourg', 'LU', '+352', 'Euro', '€', 'EUR'),
(126, 'Macao', 'MO', '+853', '', '', ''),
(127, 'Macedonia', 'MK', '+389', '', '', ''),
(128, 'Madagascar', 'MG', '+261', 'Malagasy ariary', 'Ar', 'MGA'),
(129, 'Malawi', 'MW', '+265', 'Malawian kwacha', 'MK', 'MWK'),
(130, 'Malaysia', 'MY', '+60', 'Malaysian ringgit', 'RM', 'MYR'),
(131, 'Maldives', 'MV', '+960', 'Maldivian rufiyaa', '.ރ', 'MVR'),
(132, 'Mali', 'ML', '+223', 'West African CFA fra', 'Fr', 'XOF'),
(133, 'Malta', 'MT', '+356', 'Euro', '€', 'EUR'),
(134, 'Marshall Islands', 'MH', '+692', 'United States dollar', '$', 'USD'),
(135, 'Martinique', 'MQ', '+596', '', '', ''),
(136, 'Mauritania', 'MR', '+222', 'Mauritanian ouguiya', 'UM', 'MRO'),
(137, 'Mauritius', 'MU', '+230', 'Mauritian rupee', '₨', 'MUR'),
(138, 'Mayotte', 'YT', '+262', '', '', ''),
(139, 'Mexico', 'MX', '+52', 'Mexican peso', '$', 'MXN'),
(140, 'Micronesia, Federate', 'FM', '+691', '', '', ''),
(141, 'Moldova', 'MD', '+373', 'Moldovan leu', 'L', 'MDL'),
(142, 'Monaco', 'MC', '+377', 'Euro', '€', 'EUR'),
(143, 'Mongolia', 'MN', '+976', 'Mongolian tögrög', '₮', 'MNT'),
(144, 'Montenegro', 'ME', '+382', 'Euro', '€', 'EUR'),
(145, 'Montserrat', 'MS', '+1664', 'East Caribbean dolla', '$', 'XCD'),
(146, 'Morocco', 'MA', '+212', 'Moroccan dirham', 'د.م.', 'MAD'),
(147, 'Mozambique', 'MZ', '+258', 'Mozambican metical', 'MT', 'MZN'),
(148, 'Myanmar', 'MM', '+95', 'Burmese kyat', 'Ks', 'MMK'),
(149, 'Namibia', 'NA', '+264', 'Namibian dollar', '$', 'NAD'),
(150, 'Nauru', 'NR', '+674', 'Australian dollar', '$', 'AUD'),
(151, 'Nepal', 'NP', '+977', 'Nepalese rupee', '₨', 'NPR'),
(152, 'Netherlands', 'NL', '+31', 'Euro', '€', 'EUR'),
(153, 'Netherlands Antilles', 'AN', '+599', '', '', ''),
(154, 'New Caledonia', 'NC', '+687', 'CFP franc', 'Fr', 'XPF'),
(155, 'New Zealand', 'NZ', '+64', 'New Zealand dollar', '$', 'NZD'),
(156, 'Nicaragua', 'NI', '+505', 'Nicaraguan córdoba', 'C$', 'NIO'),
(157, 'Niger', 'NE', '+227', 'West African CFA fra', 'Fr', 'XOF'),
(158, 'Nigeria', 'NG', '+234', 'Nigerian naira', '₦', 'NGN'),
(159, 'Niue', 'NU', '+683', 'New Zealand dollar', '$', 'NZD'),
(160, 'Norfolk Island', 'NF', '+672', '', '', ''),
(161, 'Northern Mariana Isl', 'MP', '+1670', '', '', ''),
(162, 'Norway', 'NO', '+47', 'Norwegian krone', 'kr', 'NOK'),
(163, 'Oman', 'OM', '+968', 'Omani rial', 'ر.ع.', 'OMR'),
(164, 'Pakistan', 'PK', '+92', 'Pakistani rupee', '₨', 'PKR'),
(165, 'Palau', 'PW', '+680', 'Palauan dollar', '$', ''),
(166, 'Palestinian Territor', 'PS', '+970', '', '', ''),
(167, 'Panama', 'PA', '+507', 'Panamanian balboa', 'B/.', 'PAB'),
(168, 'Papua New Guinea', 'PG', '+675', 'Papua New Guinean ki', 'K', 'PGK'),
(169, 'Paraguay', 'PY', '+595', 'Paraguayan guaraní', '₲', 'PYG'),
(170, 'Peru', 'PE', '+51', 'Peruvian nuevo sol', 'S/.', 'PEN'),
(171, 'Philippines', 'PH', '+63', 'Philippine peso', '₱', 'PHP'),
(172, 'Pitcairn', 'PN', '+872', '', '', ''),
(173, 'Poland', 'PL', '+48', 'Polish z?oty', 'zł', 'PLN'),
(174, 'Portugal', 'PT', '+351', 'Euro', '€', 'EUR'),
(175, 'Puerto Rico', 'PR', '+1939', '', '', ''),
(176, 'Qatar', 'QA', '+974', 'Qatari riyal', 'ر.ق', 'QAR'),
(177, 'Romania', 'RO', '+40', 'Romanian leu', 'lei', 'RON'),
(178, 'Russia', 'RU', '+7', 'Russian ruble', '', 'RUB'),
(179, 'Rwanda', 'RW', '+250', 'Rwandan franc', 'Fr', 'RWF'),
(180, 'Reunion', 'RE', '+262', '', '', ''),
(181, 'Saint Barthelemy', 'BL', '+590', '', '', ''),
(182, 'Saint Helena, Ascens', 'SH', '+290', '', '', ''),
(183, 'Saint Kitts and Nevi', 'KN', '+1869', '', '', ''),
(184, 'Saint Lucia', 'LC', '+1758', 'East Caribbean dolla', '$', 'XCD'),
(185, 'Saint Martin', 'MF', '+590', '', '', ''),
(186, 'Saint Pierre and Miq', 'PM', '+508', '', '', ''),
(187, 'Saint Vincent and th', 'VC', '+1784', '', '', ''),
(188, 'Samoa', 'WS', '+685', 'Samoan t?l?', 'T', 'WST'),
(189, 'San Marino', 'SM', '+378', 'Euro', '€', 'EUR'),
(190, 'Sao Tome and Princip', 'ST', '+239', '', '', ''),
(191, 'Saudi Arabia', 'SA', '+966', 'Saudi riyal', 'ر.س', 'SAR'),
(192, 'Senegal', 'SN', '+221', 'West African CFA fra', 'Fr', 'XOF'),
(193, 'Serbia', 'RS', '+381', 'Serbian dinar', 'дин. or din.', 'RSD'),
(194, 'Seychelles', 'SC', '+248', 'Seychellois rupee', '₨', 'SCR'),
(195, 'Sierra Leone', 'SL', '+232', 'Sierra Leonean leone', 'Le', 'SLL'),
(196, 'Singapore', 'SG', '+65', 'Brunei dollar', '$', 'BND'),
(197, 'Slovakia', 'SK', '+421', 'Euro', '€', 'EUR'),
(198, 'Slovenia', 'SI', '+386', 'Euro', '€', 'EUR'),
(199, 'Solomon Islands', 'SB', '+677', 'Solomon Islands doll', '$', 'SBD'),
(200, 'Somalia', 'SO', '+252', 'Somali shilling', 'Sh', 'SOS'),
(201, 'South Africa', 'ZA', '+27', 'South African rand', 'R', 'ZAR'),
(202, 'South Georgia and th', 'GS', '+500', '', '', ''),
(203, 'Spain', 'ES', '+34', 'Euro', '€', 'EUR'),
(204, 'Sri Lanka', 'LK', '+94', 'Sri Lankan rupee', 'Rs or රු', 'LKR'),
(205, 'Sudan', 'SD', '+249', 'Sudanese pound', 'ج.س.', 'SDG'),
(206, 'Suriname', 'SR', '+597', 'Surinamese dollar', '$', 'SRD'),
(207, 'Svalbard and Jan May', 'SJ', '+47', '', '', ''),
(208, 'Swaziland', 'SZ', '+268', 'Swazi lilangeni', 'L', 'SZL'),
(209, 'Sweden', 'SE', '+46', 'Swedish krona', 'kr', 'SEK'),
(210, 'Switzerland', 'CH', '+41', 'Swiss franc', 'Fr', 'CHF'),
(211, 'Syrian Arab Republic', 'SY', '+963', '', '', ''),
(212, 'Taiwan', 'TW', '+886', 'New Taiwan dollar', '$', 'TWD'),
(213, 'Tajikistan', 'TJ', '+992', 'Tajikistani somoni', 'ЅМ', 'TJS'),
(214, 'Tanzania, United Rep', 'TZ', '+255', '', '', ''),
(215, 'Thailand', 'TH', '+66', 'Thai baht', '฿', 'THB'),
(216, 'Timor-Leste', 'TL', '+670', '', '', ''),
(217, 'Togo', 'TG', '+228', 'West African CFA fra', 'Fr', 'XOF'),
(218, 'Tokelau', 'TK', '+690', '', '', ''),
(219, 'Tonga', 'TO', '+676', 'Tongan pa?anga', 'T$', 'TOP'),
(220, 'Trinidad and Tobago', 'TT', '+1868', 'Trinidad and Tobago ', '$', 'TTD'),
(221, 'Tunisia', 'TN', '+216', 'Tunisian dinar', 'د.ت', 'TND'),
(222, 'Turkey', 'TR', '+90', 'Turkish lira', '', 'TRY'),
(223, 'Turkmenistan', 'TM', '+993', 'Turkmenistan manat', 'm', 'TMT'),
(224, 'Turks and Caicos Isl', 'TC', '+1649', '', '', ''),
(225, 'Tuvalu', 'TV', '+688', 'Australian dollar', '$', 'AUD'),
(226, 'Uganda', 'UG', '+256', 'Ugandan shilling', 'Sh', 'UGX'),
(227, 'Ukraine', 'UA', '+380', 'Ukrainian hryvnia', '₴', 'UAH'),
(228, 'United Arab Emirates', 'AE', '+971', 'United Arab Emirates', 'د.إ', 'AED'),
(229, 'United Kingdom', 'GB', '+44', 'British pound', '£', 'GBP'),
(230, 'United States', 'US', '+1', 'United States dollar', '$', 'USD'),
(231, 'Uruguay', 'UY', '+598', 'Uruguayan peso', '$', 'UYU'),
(232, 'Uzbekistan', 'UZ', '+998', 'Uzbekistani som', '', 'UZS'),
(233, 'Vanuatu', 'VU', '+678', 'Vanuatu vatu', 'Vt', 'VUV'),
(234, 'Venezuela, Bolivaria', 'VE', '+58', '', '', ''),
(235, 'Vietnam', 'VN', '+84', 'Vietnamese ??ng', '₫', 'VND'),
(236, 'Virgin Islands, Brit', 'VG', '+1284', '', '', ''),
(237, 'Virgin Islands, U.S.', 'VI', '+1340', '', '', ''),
(238, 'Wallis and Futuna', 'WF', '+681', 'CFP franc', 'Fr', 'XPF'),
(239, 'Yemen', 'YE', '+967', 'Yemeni rial', '﷼', 'YER'),
(240, 'Zambia', 'ZM', '+260', 'Zambian kwacha', 'ZK', 'ZMW'),
(241, 'Zimbabwe', 'ZW', '+263', 'Botswana pula', 'P', 'BWP');

-- --------------------------------------------------------

--
-- Table structure for table `qwikfarm_offer`
--

CREATE TABLE `qwikfarm_offer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `offer_user_id` int(11) NOT NULL,
  `advertisement_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `acept_deny_hide` int(11) DEFAULT '0' COMMENT '1 accept, 2 deny , 3 hide',
  `finish` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwikfarm_offer`
--

INSERT INTO `qwikfarm_offer` (`id`, `user_id`, `offer_user_id`, `advertisement_id`, `created_at`, `acept_deny_hide`, `finish`) VALUES
(1, 81, 81, 3, '2018-03-12 13:14:39', 0, 0),
(2, 81, 81, 3, '2018-03-12 13:08:50', 1, 0),
(3, 1, 81, 5, '2018-03-12 09:35:08', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `qwikfarm_otp`
--

CREATE TABLE `qwikfarm_otp` (
  `phone` varchar(50) NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwikfarm_otp`
--

INSERT INTO `qwikfarm_otp` (`phone`, `code`, `updated_at`, `created_at`) VALUES
('+198765412341', '8373', '2018-02-14 08:19:18', '2018-02-14 02:49:18'),
('+918800678375', '4198', '2018-02-14 09:52:29', '2018-02-14 04:22:29'),
('+1987654320', '28538', '2018-02-15 07:55:39', '2018-02-15 02:25:39'),
('+1987654320', '17195', '2018-02-15 07:57:02', '2018-02-15 02:27:02'),
('+1987654320', '29735', '2018-02-15 07:57:21', '2018-02-15 02:27:21'),
('+198765432156', '30626', '2018-02-15 07:58:42', '2018-02-15 02:28:42'),
('+198765432156', '16066', '2018-02-15 08:00:23', '2018-02-15 02:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `qwikfarm_regions`
--

CREATE TABLE `qwikfarm_regions` (
  `id` int(11) UNSIGNED NOT NULL,
  `country_id` int(11) UNSIGNED DEFAULT NULL,
  `region_name` varchar(255) DEFAULT NULL,
  `status` tinyint(2) UNSIGNED DEFAULT '1',
  `updated_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `zone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwikfarm_regions`
--

INSERT INTO `qwikfarm_regions` (`id`, `country_id`, `region_name`, `status`, `updated_at`, `created_at`, `zone`) VALUES
(11, 16, 'ON - Greater Toronto Area', 1, '2017-08-11 05:07:05', '2017-08-11 05:07:05', 'America/Atikokan'),
(14, 18, 'England', 1, '2017-07-21 17:59:44', '2017-07-21 17:59:44', 'Africa/Algiers'),
(15, 18, 'Scotland', 1, '2017-07-21 18:00:11', '2017-07-21 18:00:11', 'Africa/Algiers'),
(16, 18, 'Wales', 1, '2017-07-21 18:00:19', '2017-07-21 18:00:19', 'Africa/Algiers'),
(17, 18, 'Northern Ireland', 1, '2017-07-21 18:00:25', '2017-07-21 18:00:25', 'Africa/Algiers'),
(19, 16, 'ON - Barrie and the Area', 1, '2017-08-27 15:01:01', '2017-08-27 15:01:01', 'America/Atikokan'),
(20, 16, 'ON - Kingston and the Area', 1, '2017-08-27 15:00:42', '2017-08-27 15:00:42', 'America/Atikokan'),
(21, 16, 'ON - Ottawa and the Area', 1, '2017-08-11 05:07:28', '2017-08-11 05:07:28', 'America/Atikokan'),
(26, 16, 'BC - Vancouver Metro', 1, '2017-08-11 05:07:41', '2017-08-11 05:07:41', 'America/Creston'),
(27, 16, 'BC - Vancouver Island', 1, '2017-08-11 05:07:48', '2017-08-11 05:07:48', 'America/Creston'),
(30, 16, 'ON - Kitchener and Waterloo Area', 1, '2017-09-12 16:32:36', '2017-09-12 16:32:36', 'America/Atikokan'),
(31, 16, 'ON - Windsor', 1, '2017-08-27 17:35:19', '2017-08-27 17:35:19', 'America/Atikokan'),
(32, 16, 'ON - Hamilton and the Area', 1, '2017-08-27 17:52:15', '2017-08-27 17:52:15', 'America/Atikokan'),
(33, 16, 'MB - Winnipeg and the Area', 1, '2017-09-09 23:08:31', '2017-09-09 23:08:31', 'America/Belize'),
(34, 26, 'IL - Chicago Metropolitan Area', 1, '2017-09-12 16:34:45', '2017-09-12 16:34:45', 'America/Belize'),
(35, 26, 'IL-Central Illinois', 1, '2017-09-11 23:00:12', '2017-09-11 23:00:12', 'America/Belize'),
(36, 26, 'IL-Northern Illinois', 1, '2017-09-11 23:07:35', '2017-09-11 23:07:35', 'America/Belize'),
(37, 26, 'IL-South', 1, '2017-09-11 23:09:38', '2017-09-11 23:09:38', 'America/Belize'),
(38, 26, 'TX - Greater Houston Metro Area', 0, '2017-09-12 16:33:54', '2017-09-12 16:33:54', 'America/Belize'),
(39, 26, 'CA-Los Angeles Metro', 1, '2017-09-11 23:53:41', '2017-09-13 14:11:31', 'America/Anchorage'),
(40, 26, 'MD-Baltimore Metro', 1, '2017-09-13 14:18:31', '2017-09-13 15:08:27', 'America/Atikokan'),
(41, 26, 'MD-Chesapeake Bay', 1, '2017-09-13 15:09:37', '2017-09-13 15:17:03', 'America/Atikokan'),
(42, 26, 'MD-DC Suburbs', 1, '2017-09-13 15:17:33', '2017-09-13 15:17:33', 'America/Atikokan'),
(43, 26, 'CA-San Francisco Bay Area', 0, '2017-09-13 23:08:47', '2017-09-13 23:11:20', 'America/Anchorage'),
(44, 26, 'VA-Arlington & Alexandria', 1, '2017-09-14 09:38:21', '2017-09-14 10:46:18', 'America/Atikokan'),
(45, 26, 'VA-Fairfax & Loudoun', 1, '2017-09-14 10:46:36', '2017-09-14 10:46:36', 'America/Atikokan'),
(46, 26, 'VA-Fredricksburg', 1, '2017-09-14 11:32:32', '2017-09-14 11:32:32', 'America/Atikokan'),
(47, 26, 'VA-Norfolk', 1, '2017-09-14 11:35:00', '2017-09-14 11:35:00', 'America/Atikokan'),
(48, 26, 'VA-Richmond', 1, '2017-09-14 11:46:52', '2017-09-14 11:46:52', 'America/Atikokan'),
(49, 26, 'VA-Western Virginia', 1, '2017-09-14 12:35:02', '2017-09-14 12:35:02', 'America/Atikokan'),
(50, 26, 'VA-Woodbridge', 1, '2017-09-14 13:36:31', '2017-09-14 13:36:31', 'America/Atikokan'),
(51, 26, 'MA-Boston Metro', 1, '2017-09-14 14:33:46', '2017-09-14 16:17:52', 'America/Atikokan'),
(52, 26, 'MA-Cape Cod', 1, '2017-09-14 16:29:13', '2017-09-14 16:42:35', 'America/Atikokan'),
(53, 26, 'MA-North Shore', 0, '2017-09-14 16:43:05', '2017-09-14 16:43:16', 'America/Atikokan'),
(54, 16, 'QC - Eastern Quebec', 1, '2017-10-11 12:13:23', '2017-10-11 12:13:23', 'America/Atikokan'),
(55, 16, 'QC - Greater Montréal', 1, '2017-10-11 12:16:34', '2017-10-11 12:16:34', 'America/Atikokan'),
(56, 16, 'QC - Quebec City', 1, '2017-10-11 13:09:23', '2017-10-11 13:09:23', 'America/Atikokan'),
(57, 16, 'QC - Trois-Rivières', 1, '2017-10-11 13:12:28', '2017-10-11 13:12:28', 'America/Atikokan'),
(58, 16, 'QC - Western Quebec', 1, '2017-10-11 13:14:34', '2017-10-11 13:14:34', 'America/Atikokan'),
(59, 27, 'Noord-Holland', 1, '2017-10-17 16:36:59', '2017-10-17 16:36:59', 'Africa/Algiers'),
(60, 27, 'Zuid Holland', 1, '2017-10-17 17:36:09', '2017-10-17 17:36:09', 'Africa/Algiers'),
(61, 26, 'NJ-Central Jersey', 1, '2017-10-20 11:45:14', '2017-10-20 17:35:21', 'America/Atikokan'),
(62, 26, 'NJ-North Jersey', 1, '2017-10-24 10:38:43', '2017-10-24 15:13:29', 'America/Atikokan'),
(63, 26, 'NJ-South Jersey', 1, '2017-10-24 15:17:37', '2017-10-24 16:27:21', 'America/Atikokan');

-- --------------------------------------------------------

--
-- Table structure for table `qwikfarm_settings`
--

CREATE TABLE `qwikfarm_settings` (
  `listing_radius` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwikfarm_settings`
--

INSERT INTO `qwikfarm_settings` (`listing_radius`) VALUES
('100000000');

-- --------------------------------------------------------

--
-- Table structure for table `qwikfarm_sub_categories`
--

CREATE TABLE `qwikfarm_sub_categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED DEFAULT NULL,
  `image` text CHARACTER SET latin1,
  `title` text CHARACTER SET latin1,
  `status` tinyint(2) UNSIGNED DEFAULT '1' COMMENT '1 for active and 0 for inactive',
  `updated_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qwikfarm_sub_categories`
--

INSERT INTO `qwikfarm_sub_categories` (`id`, `category_id`, `image`, `title`, `status`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 1, '201706161259501497617990n2ys0jkmwq1qsfayqz84.jpg', 'Garden Cress', 1, '2017-06-16 12:59:50', '2017-06-16 12:59:50', NULL),
(2, 1, '201706161303521497618232aa7ikpukx96cfbrmgq4d.jpg', 'Canned', 1, '2017-06-16 13:05:28', '2017-06-16 13:05:28', '2017-06-16 13:05:28'),
(3, 1, '2017061613063214976183925l1y0bwra5wy9dsghq5u.jpg', 'Brassica', 1, '2017-06-16 13:06:32', '2017-06-16 13:06:32', NULL),
(4, 1, '201706161308091497618489lmgylf942qke1whk2oj8.jpg', 'Fruit vegetables', 1, '2017-06-16 13:08:09', '2017-06-16 20:08:09', NULL),
(5, 1, '201706161433511497623631tjejlmilbjjzl7d0whmx.jpeg', 'asdfghjkl', 1, '2017-06-16 14:33:52', '2017-06-16 21:33:52', NULL),
(6, 2, '201706161435511497623751df8pt0mzn9pgt3zeqi01.jpg', 'Banana Leaf', 1, '2017-06-16 14:35:51', '2017-06-16 14:35:51', NULL),
(7, 1, '201706161438411497623921v8zpcy43h44jo56fju3e.jpeg', 'Wikipedia', 1, '2017-06-16 14:38:41', '2017-06-16 21:38:41', NULL),
(8, 2, '2017061615333114976272119cf56i4w5c6x0xfg9cvj.jpeg', 'Leaf diseases', 1, '2017-06-16 15:33:31', '2017-06-16 22:33:31', NULL),
(9, 2, '201706161535101497627310audarsq05mkelx5lckfr.jpeg', 'Leaf diseases', 1, '2017-06-16 15:35:11', '2017-06-16 22:35:11', NULL),
(10, 2, '201706161535531497627353rsfcl83v5rcflqqdjhep.jpeg', 'Florimond Desprez', 1, '2017-06-16 15:35:55', '2017-06-16 22:35:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qwikfarm_sub_category_user`
--

CREATE TABLE `qwikfarm_sub_category_user` (
  `sub_category_id` int(11) UNSIGNED DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwikfarm_sub_category_user`
--

INSERT INTO `qwikfarm_sub_category_user` (`sub_category_id`, `user_id`) VALUES
(1, 43),
(3, 43),
(4, 43),
(5, 43),
(7, 43),
(1, 49),
(2, 49),
(1, 48),
(6, 48),
(8, 48),
(9, 48),
(10, 48),
(1, 44),
(2, 44),
(1, 27),
(1, 28),
(3, 28),
(4, 28),
(5, 28),
(1, 51),
(6, 51);

-- --------------------------------------------------------

--
-- Table structure for table `qwikfarm_users`
--

CREATE TABLE `qwikfarm_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image` text,
  `phone` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` text,
  `company_name` varchar(255) DEFAULT NULL,
  `facebook_id` varchar(255) DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `login_with` varchar(50) DEFAULT '1' COMMENT '1 for manually, 2 for facebook, 3 for google',
  `chat_id` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT 'en',
  `service_key` varchar(100) DEFAULT NULL,
  `device_type` varchar(50) DEFAULT NULL,
  `device_token` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1' COMMENT '1 for active 0 for deactive',
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_type` tinyint(2) UNSIGNED DEFAULT '1' COMMENT '1 for user and 2 for admin',
  `country` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwikfarm_users`
--

INSERT INTO `qwikfarm_users` (`id`, `name`, `first_name`, `last_name`, `email`, `image`, `phone`, `password`, `address`, `company_name`, `facebook_id`, `google_id`, `login_with`, `chat_id`, `language`, `service_key`, `device_type`, `device_token`, `status`, `updated_at`, `created_at`, `user_type`, `country`, `deleted_at`) VALUES
(1, 'Keshav', NULL, NULL, NULL, NULL, '+919718384409', '25f9e794323b453885f5181f1b624d0b', NULL, NULL, NULL, NULL, '1', NULL, 'en', '3jb86o40pb374987t140', 'android', 'android_id', 1, '2017-05-12 11:08:59', '2017-05-06 03:24:18', 1, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'en', 'tun3991un3hdha1qk6dj', 'android', 'dlksfsdljfjfsfsdlfjlsdjlfjsldjfla', 1, '2017-05-11 08:18:36', '2017-05-11 15:18:36', 1, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'en', 'pcwx71e9iu7vnvz0z60x', 'android', 'dlksfsdljfjfsfsdlfjlsdjlfjsldjfla', 1, '2017-05-11 08:32:34', '2017-05-11 15:32:34', 1, NULL, NULL),
(4, 'xdbx. cc xn', NULL, NULL, NULL, NULL, '+93779979494959', 'ce77e9c606678479b8f58522737e6c7e', NULL, NULL, NULL, NULL, '1', NULL, 'en', 'ltfcba6v2s93beeg1hrq', 'android', 'android_id', 1, '2017-05-11 13:57:43', '2017-05-11 20:57:43', 1, NULL, NULL),
(5, 'xdbx. cc xn', NULL, NULL, NULL, NULL, '+93779979494955', 'ce77e9c606678479b8f58522737e6c7e', NULL, NULL, NULL, NULL, '1', NULL, 'en', 'yfo9q3994o7sv7ugehtk', 'android', 'android_id', 1, '2017-05-11 13:58:13', '2017-05-11 20:58:13', 1, NULL, NULL),
(6, 'xdbx. cc xn', NULL, NULL, NULL, '201705111358561494511136so0ut0lahe737nfixme0.jpg', '+93779979494966', 'ce77e9c606678479b8f58522737e6c7e', NULL, NULL, NULL, NULL, '1', NULL, 'en', 'en4p2i63zxtrlumev8oc', 'android', 'android_id', 1, '2017-05-11 13:58:56', '2017-05-11 20:58:56', 1, NULL, NULL),
(7, 'xdbx. cc xn', NULL, NULL, NULL, '201705111359261494511166pwini9h35514kqeatnkx.jpg', '+93779979494965', 'ce77e9c606678479b8f58522737e6c7e', NULL, NULL, NULL, NULL, '1', NULL, 'en', 'brq6yknd2gyscgfuqwyv', 'android', 'android_id', 1, '2017-05-11 13:59:26', '2017-05-11 20:59:26', 1, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'djflkdsjflajlfjalajl123456', '3', NULL, 'en', '100lqewj1hhd87k7s7lu', 'android', 'dlksfsdljfjfsfsdlfjlsdjlfjsldjfla', 1, '2017-05-11 14:03:20', '2017-05-11 21:03:20', 1, NULL, NULL),
(9, 'Abhishek Singh', NULL, NULL, 'as8703@gmail.com', 'https://lh5.googleusercontent.com/-nDzTxYD7eaM/AAAAAAAAAAI/AAAAAAAAADM/2tnzWlmZexY/photo.jpg', NULL, NULL, NULL, NULL, '1363485120397658', '102929409407725654062', '3', NULL, 'en', 'b7z1p4s38njyzn8187mf', 'android', 'android_id', 1, '2017-09-28 05:46:41', '2017-05-11 21:06:50', 1, NULL, NULL),
(10, 'Pushp Sharma', NULL, NULL, 'pushpsharma01@gmail.com', 'https://graph.facebook.com/1435217746539246/picture?type=large', NULL, NULL, NULL, NULL, '1435217746539246', NULL, '2', NULL, 'en', 'arh934jfi46siwst26mt', 'android', 'android_id', 1, '2017-06-16 12:53:09', '2017-05-11 21:59:51', 1, NULL, '2017-06-16 12:53:09'),
(11, 'hshdhdhd', NULL, NULL, NULL, '201705111527091494516429u28q0behd71jzapq0pke.jpg', '+3585454', 'f2010b93fbcf13bc0f72dd2209863dbf', NULL, 'hshdhdhd', NULL, NULL, '1', NULL, 'en', '44a7l2fl2klxnton535i', 'iphone', 'dlksfsdljfjfsfsdlf', 1, '2017-05-11 15:27:11', '2017-05-11 22:27:11', 1, NULL, NULL),
(12, 'Sumit', NULL, NULL, NULL, '201705120703071494572587bgbtukb9penm4pn98yah.jpg', '+2139519562417', '3dbe00a167653a1aaee01d93e77e730e', NULL, 'ggg', NULL, NULL, '1', NULL, 'en', 'etwdemwwotf09rt3b4d1', 'iphone', 'dlksfsdljfjfsfsdlf', 1, '2017-05-12 07:03:07', '2017-05-12 14:03:07', 1, NULL, NULL),
(13, 'mani', NULL, NULL, NULL, '201705120707041494572824l9fw8jro5lonb5m2u4ra.jpg', '+21311111111', '1bbd886460827015e5d605ed44252251', NULL, 'mama', NULL, NULL, '1', NULL, 'en', 'tbmqt9a9rfodo49xo0lt', 'iphone', 'dlksfsdljfjfsfsdlf', 1, '2017-05-12 07:07:04', '2017-05-12 14:07:04', 1, NULL, NULL),
(14, 'Dev Mani Shukla', NULL, NULL, 'devmanishukla.777@gmail.com', 'http://graph.facebook.com/1946945372204752/picture?type=large', NULL, NULL, NULL, NULL, '1946945372204752', NULL, '2', NULL, 'en', 'h8bmkq8axu297hrjanv9', 'iphone', 'qwer1234wer4p', 1, '2017-05-26 12:06:29', '2017-05-12 16:25:04', 1, NULL, NULL),
(15, 'sumit', NULL, NULL, NULL, '201705120947071494582427hi3xf756leexztk5hb88.jpg', '+5069519562417', '1bbd886460827015e5d605ed44252251', NULL, 'sumit', NULL, NULL, '1', NULL, 'en', '0e0lt0v0awhsekpusv0d', 'iphone', 'dlksfsdljfjfsfsdlf', 1, '2017-05-12 09:47:07', '2017-05-12 16:47:07', 1, NULL, NULL),
(16, 'sumit dixit', NULL, NULL, 'dixit5405@gmail.com', 'https://lh5.googleusercontent.com/-KKDTaEbMQ20/AAAAAAAAAAI/AAAAAAAAADQ/o1pYe7Cm7ss/s100/photo.jpg', NULL, NULL, NULL, NULL, NULL, '101051953443516435380', '3', NULL, 'en', '7almeaxjyy181r3hth8j', 'iphone', 'qwer1234wer4p', 1, '2017-09-27 12:11:29', '2017-05-12 16:58:36', 1, NULL, NULL),
(17, 'sumit', NULL, NULL, NULL, '201705121001341494583294fggws9f8hl1t6wwivluf.jpg', '+919519562417', '1bbd886460827015e5d605ed44252251', NULL, 'sumit', NULL, NULL, '1', NULL, 'en', 'xod94aev3xblsduoa7tw', 'iphone', 'qwer1234wer4p', 1, '2017-05-17 11:47:54', '2017-05-12 17:01:34', 1, NULL, NULL),
(18, 'Nitish Kansal', NULL, NULL, 'cynogenmodnote8@gmail.com', 'null', NULL, NULL, NULL, NULL, NULL, '103310782249381370659', '3', NULL, 'en', '6g60ssv3cimv9owf2yqp', 'android', 'android_id', 1, '2017-05-15 07:43:23', '2017-05-12 18:25:07', 1, NULL, NULL),
(19, 'Qwik Farm', NULL, NULL, 'qwikfarm@gmail.com', 'https://graph.facebook.com/122016038365937/picture?type=large', NULL, NULL, NULL, NULL, '122016038365937', NULL, '2', NULL, 'en', '81b3mcbqwf6wicmy68ab', 'android', 'android_id', 1, '2017-05-12 14:11:38', '2017-05-12 18:34:55', 1, NULL, NULL),
(20, 'Sumit Dixit', NULL, NULL, NULL, 'http://graph.facebook.com/1712056792421147/picture?type=large', NULL, NULL, NULL, NULL, '1712056792421147', NULL, '2', NULL, 'en', 'pweaxg7pgpd91jrl1ngb', 'iphone', 'qwer1234wer4p', 1, '2017-09-08 09:03:35', '2017-05-12 19:08:37', 1, NULL, NULL),
(21, 'sumit', NULL, NULL, NULL, '201705121251471494593507pcwqurep2dyv39vg1rb3.jpg', '+880454548', '767a7dfe076cfadf820ee31472f9be29', NULL, 'shahs', NULL, NULL, '1', NULL, 'en', 'nkcuna910rgq4dgz5vo7', 'iphone', 'dlksfsdljfjfsfsdlf', 1, '2017-05-12 12:51:47', '2017-05-12 19:51:47', 1, NULL, NULL),
(22, 'dmdmdkkdldl', NULL, NULL, NULL, '201705121320491494595249dqd7h18nkgod491q2q4z.jpg', '+2293693693693', '94b8cea57c49a3007225a0c70c475450', NULL, NULL, NULL, NULL, '1', NULL, 'en', 'u7xvtubzaa0n1duje36z', 'android', 'android_id', 1, '2017-05-12 13:20:52', '2017-05-12 20:20:52', 1, NULL, NULL),
(23, 'Nikhil Lamba', NULL, NULL, 'nkhl.lamba@gmail.com', 'http://graph.facebook.com/10212880232586305/picture?type=large', NULL, NULL, NULL, NULL, '10212880232586305', NULL, '2', NULL, 'en', '9ffp7gwk1hdjhdmumz58', 'iphone', 'qwer1234wer4p', 1, '2017-06-15 13:59:52', '2017-05-12 20:53:29', 1, NULL, NULL),
(24, 'pushp sharms', NULL, NULL, NULL, '201705121356191494597379iv3y60tiels2y6ga5zwl.jpg', '+919891836896', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL, '1', NULL, 'en', '5l72k7smvh38jmjaqdus', 'iphone', 'qwer1234wer4p', 1, '2017-05-17 11:07:41', '2017-05-12 20:56:20', 1, NULL, NULL),
(25, 'h jbbikbkbbk', NULL, NULL, NULL, NULL, '+917054246624', '1bbd886460827015e5d605ed44252251', NULL, NULL, NULL, NULL, '1', NULL, 'en', 'zb3ipnqn0j24kjh3x57i', 'android', 'android_id', 1, '2017-05-15 06:11:32', '2017-05-12 21:16:24', 1, NULL, NULL),
(26, 'big', NULL, NULL, NULL, '2017051214183214945987124voi1st6o8wqd19t7dqn.jpg', '+93525525353553', '7692860d3e759ff66726a3c77332443f', NULL, 'hcucycufug', NULL, NULL, '1', NULL, 'en', 'sznxkk69ha4l6s47lyd9', 'iphone', 'dlksfsdljfjfsfsdlf', 1, '2017-05-12 14:18:32', '2017-05-12 21:18:32', 1, NULL, NULL),
(27, 'Nitish Kansal', NULL, NULL, 'nitish@thetrustedinsight.com', 'https://lh5.googleusercontent.com/--p94DXw0Mjc/AAAAAAAAAAI/AAAAAAAAADU/CClhmguaItQ/photo.jpg', NULL, NULL, NULL, NULL, NULL, '104756675649208495745', '3', NULL, 'en', 'jxqspi2yd9gw1rlfbty2', 'android', 'android_id', 1, '2017-06-16 16:28:39', '2017-05-13 13:54:09', 1, NULL, NULL),
(28, 'Aditya Kumar', NULL, NULL, 'aditya.kumar090909@gmail.com', 'null', NULL, NULL, NULL, NULL, NULL, '117663430374955637169', '3', NULL, 'en', '69spahnweugyr6qgpsf2', 'android', 'android_id', 1, '2017-06-16 16:29:07', '2017-05-15 13:47:49', 1, NULL, NULL),
(29, 'Ivo Tasong', NULL, NULL, 'itasong@gmail.com', 'https://lh6.googleusercontent.com/--CbCvAinQlY/AAAAAAAAAAI/AAAAAAAAAAA/AI6yGXzyoS7QlqFmquZWCzSMaVsd8DBJKA/s100/photo.jpg', NULL, NULL, NULL, NULL, NULL, '112566955286943856991', '3', NULL, 'en', 'ryshwqmojwqgfuzp9aa5', 'iphone', 'qwer1234wer4p', 1, '2017-06-24 20:11:49', '2017-05-17 07:03:32', 1, NULL, NULL),
(30, 'snsnxnnfnddndnf', NULL, NULL, NULL, '201705171451161495032676ebqqrxozzisu9tkkpphc.jpg', '+501946644649', '541e2fc0db0bdb7f6a8f16dcda494cba', NULL, NULL, NULL, NULL, '1', NULL, 'en', 'edqfw5uz8n6nyxdqu1pu', 'iphone', 'dlksfsdljfjfsfsdlf', 1, '2017-05-17 14:51:16', '2017-05-17 21:51:16', 1, NULL, NULL),
(31, 'Nikhil', NULL, NULL, NULL, '201706010948121496310492np01hx56kopv9dwe5uvy.jpg', '+919971531430', 'd66aab3154ac90dcbc37c9957464a365', NULL, 'AppsInvo', NULL, NULL, '1', NULL, 'en', 'prffurpo3m4rc4su2x1m', 'iphone', 'dlksfsdljfjfsfsdlf', 1, '2017-06-01 09:48:13', '2017-06-01 16:48:13', 1, NULL, NULL),
(32, 'sumit', NULL, NULL, NULL, '201706020900191496394019brxhbcqg88wgjsbm4w7r.jpg', '++919519562417', '1bbd886460827015e5d605ed44252251', NULL, 'appsinvo', NULL, NULL, '1', NULL, 'en', 'cm05ajs7ygb988rkki0t', 'iphone', 'dlksfsdljfjfsfsdlf', 1, '2017-06-02 09:00:19', '2017-06-02 16:00:19', 1, NULL, NULL),
(33, 'sumit', NULL, NULL, NULL, '201706021009271496398167k9reknl0jypuswf1xqxy.jpg', '++261978465295', '1af5416a5936a8fbad8aae9f36dad647', NULL, 'jfjfhf', NULL, NULL, '1', NULL, 'en', 'g4v644c8nz189sntg9uz', 'iphone', 'dlksfsdljfjfsfsdlf', 1, '2017-06-02 10:09:27', '2017-06-02 17:09:27', 1, NULL, NULL),
(34, 'Mohd Sazid MSI', NULL, NULL, 'sazidmsi@gmail.com', 'https://lh5.googleusercontent.com/-tHzl0vPqmE8/AAAAAAAAAAI/AAAAAAAAAA0/POjnt6pa_2o/s100/photo.jpg', NULL, NULL, NULL, NULL, NULL, '103729421706707655774', '3', NULL, 'en', 'njmhxens6cqgrheynfjw', 'iphone', 'qwer1234wer4p', 1, '2017-06-13 05:58:25', '2017-06-13 12:58:25', 1, NULL, NULL),
(35, 'Admin', NULL, NULL, 'admin@qwikfarm.com', NULL, NULL, '25f9e794323b453885f5181f1b624d0b', NULL, NULL, NULL, NULL, '1', NULL, 'en', NULL, NULL, NULL, 1, '2017-06-15 20:10:10', '2017-06-16 03:10:10', 2, NULL, NULL),
(36, 'bznznsnn', NULL, NULL, NULL, NULL, '+3539639639638', 'e11170b8cbd2d74102651cb967fa28e5', NULL, NULL, NULL, NULL, '1', NULL, 'en', '9i8p6pe3apdb0ajty0ky', 'android', 'android_id', 1, '2017-06-15 14:57:41', '2017-06-15 21:57:41', 1, NULL, NULL),
(37, 'aaaaaa', NULL, NULL, NULL, NULL, '+3559878965423', 'e11170b8cbd2d74102651cb967fa28e5', NULL, NULL, NULL, NULL, '1', NULL, 'en', 'a1z3260ofuapcjei8slj', 'android', 'android_id', 1, '2017-06-15 14:59:23', '2017-06-15 21:59:23', 1, NULL, NULL),
(38, 'neene', NULL, NULL, NULL, NULL, '+9399646469639', '1bbd886460827015e5d605ed44252251', NULL, NULL, NULL, NULL, '1', NULL, 'en', 'izvi9eb7ew6px5t0ctor', 'android', 'android_id', 1, '2017-06-15 15:02:14', '2017-06-15 22:02:14', 1, NULL, NULL),
(39, 'dbbddnbe', NULL, NULL, NULL, NULL, '+16849639639639', 'e3e60015b0ee4522305f1ceeee9bd5ef', NULL, NULL, NULL, NULL, '1', NULL, 'en', 'ozg0ivjqo5a645pdj0ly', 'android', 'android_id', 1, '2017-06-15 15:03:58', '2017-06-15 22:03:58', 1, 'American Samoa', NULL),
(40, 'kkkkkk', NULL, NULL, NULL, '201706151507291497539249pq2jsj9vpc063t2urvk4.jpg', '++9199999999999', '25f9e794323b453885f5181f1b624d0b', NULL, 'appsinvo', NULL, NULL, '1', NULL, 'en', 'rry26ud3qecf4ezwy8sn', 'iphone', 'dlksfsdljfjfsfsdlf', 1, '2017-06-15 15:07:29', '2017-06-15 22:07:29', 1, NULL, NULL),
(41, 'cgcghvvhvhvhvh', NULL, NULL, NULL, NULL, '+3589639639639', '25f9e794323b453885f5181f1b624d0b', NULL, NULL, NULL, NULL, '1', NULL, 'en', 'rv4u6ecbrxcyi8j67g13', 'android', 'android_id', 1, '2017-06-15 15:08:02', '2017-06-15 22:08:02', 1, 'Åland Islands', NULL),
(42, 'gggg', NULL, NULL, NULL, '201706151511291497539489eov3hxcgqhehcjciyoup.jpg', '++623333333333', '1bbd886460827015e5d605ed44252251', NULL, 'hshdhdhd', NULL, NULL, '1', NULL, 'en', 'm6o4e7bmodp21l6jijz9', 'iphone', 'dlksfsdljfjfsfsdlf', 1, '2017-06-15 15:11:29', '2017-06-15 22:11:29', 1, 'Indonesia', NULL),
(43, 'abhi singh', NULL, NULL, '8703as@gmail.com', 'null', NULL, NULL, NULL, NULL, NULL, '105022558322215105107', '3', NULL, 'en', 'gkdd8yu363njaswdhobv', 'android', 'android_id', 1, '2017-09-28 06:51:49', '2017-06-16 14:57:04', 1, NULL, NULL),
(44, 'Ravi Dhiman', NULL, NULL, 'ravi@thetrustedinsight.com', 'https://lh5.googleusercontent.com/-RnaT2NG-l1U/AAAAAAAAAAI/AAAAAAAAAAs/-p01T0-rrDI/photo.jpg', NULL, NULL, NULL, NULL, NULL, '100127526006455211433', '3', NULL, 'en', 'jrbpdj7jrdapi1oylx6k', 'android', 'android_id', 1, '2017-06-16 16:25:34', '2017-06-16 17:42:56', 1, NULL, NULL),
(45, 'gghhhhg', NULL, NULL, NULL, '2017061615382214976275023y3pw9a8tp0lifx3o1zu.jpg', '+126444555588888', '1bbd886460827015e5d605ed44252251', NULL, NULL, NULL, NULL, '1', NULL, 'en', 'sbae20rlh5al3ea0nl8h', 'android', 'android_id', 1, '2017-06-16 15:38:22', '2017-06-16 22:38:22', 1, 'Anguilla', NULL),
(46, NULL, NULL, NULL, NULL, NULL, '7888888885', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'en', NULL, NULL, NULL, 1, '2017-06-16 15:39:58', '2017-06-16 22:39:58', 1, NULL, NULL),
(47, NULL, NULL, NULL, NULL, NULL, '9639635523', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'en', 'giytvtavvofuu1md2pyw', 'android', 'android_id', 1, '2017-06-16 15:45:23', '2017-06-16 22:45:16', 1, NULL, NULL),
(48, NULL, NULL, NULL, NULL, NULL, '455566455888', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'en', '7jnh2mr9siq81o1xictd', 'android', 'android_id', 1, '2017-06-16 15:47:03', '2017-06-16 22:46:36', 1, NULL, NULL),
(49, NULL, NULL, NULL, NULL, NULL, '56658899963', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'en', '197vau9dj79rrw8tj03c', 'android', 'android_id', 1, '2017-06-16 15:47:04', '2017-06-16 22:46:42', 1, NULL, NULL),
(50, 'Pushp Sharma', NULL, NULL, 'pushpsharma01@gmail.com', 'http://graph.facebook.com/1435217746539246/picture?type=large', NULL, NULL, NULL, NULL, '1435217746539246', '112655320202043147719', '2', NULL, 'en', 'm2jlv1u2wqgig6088gso', 'iphone', 'qwer1234wer4p', 1, '2017-08-30 09:03:53', '2017-06-16 23:16:05', 1, NULL, NULL),
(51, NULL, NULL, NULL, NULL, NULL, '7054246624', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'en', 'ama9ngtyx58ndchgxom1', 'android', 'android_id', 1, '2017-07-24 05:33:43', '2017-06-20 02:47:30', 1, NULL, NULL),
(52, 'axel tasong', NULL, NULL, 'thebattleaxel1@gmail.com', 'https://lh5.googleusercontent.com/-Cd7wy8a_VA0/AAAAAAAAAAI/AAAAAAAAAK8/bySA5DM9ZRU/photo.jpg', NULL, NULL, NULL, NULL, NULL, '115874692548487348118', '3', NULL, 'en', '73hu2e9ibqu1q8gosqv0', 'android', 'android_id', 1, '2017-06-20 22:37:50', '2017-06-21 05:37:50', 1, NULL, NULL),
(53, 'Paul Zomba', NULL, NULL, 'clubdesamiscf@gmail.com', 'http://graph.facebook.com/1592560594099555/picture?type=large', NULL, NULL, NULL, NULL, '1592560594099555', NULL, '2', NULL, 'en', 's6g70gxaq7fsr9amqblq', 'iphone', 'qwer1234wer4p', 1, '2017-06-24 20:13:12', '2017-06-21 13:02:31', 1, NULL, NULL),
(54, NULL, NULL, NULL, NULL, NULL, '123456789', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'en', 'rrw3t6mz1z6zc7hfz017', 'iphone', 'iphonecdcdfc', 1, '2017-09-28 07:30:55', '2017-08-31 14:18:20', 1, NULL, NULL),
(55, NULL, NULL, NULL, NULL, NULL, '9639639639', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'en', 'dmvwfkhar8gjovg77c56', 'android', 'android_id', 1, '2017-09-07 06:17:55', '2017-09-07 13:17:45', 1, NULL, NULL),
(56, 'Salman Ghumsani', NULL, NULL, 'salman_ghumsani@yahoo.com', 'http://graph.facebook.com/1513764248720792/picture?type=large', NULL, NULL, NULL, NULL, '1513764248720792', NULL, '2', NULL, 'en', '5c8obwpuly1mkoba0ai9', 'iphone', 'qwer1234wer4p', 1, '2017-09-07 12:20:44', '2017-09-07 19:20:44', 1, NULL, NULL),
(57, NULL, NULL, NULL, NULL, NULL, '3666666666', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'en', 'eair1ij8ki85givfgkaa', 'android', 'android_id', 1, '2017-09-25 09:52:54', '2017-09-25 16:52:39', 1, NULL, NULL),
(58, NULL, NULL, NULL, NULL, NULL, '123456987', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'en', 'yca1m6c12madqhkwx1lx', 'android', 'android_id', 1, '2017-09-26 07:04:54', '2017-09-26 14:04:44', 1, NULL, NULL),
(59, NULL, NULL, NULL, NULL, NULL, '123456798', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'en', '2q30nw3x4d049zbofoao', 'android', 'android_id', 1, '2017-09-26 07:18:20', '2017-09-26 14:18:14', 1, NULL, NULL),
(60, NULL, NULL, NULL, NULL, NULL, '9639639336', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'en', 'bn2wlhrbo0vqdtt1lpgq', 'android', 'android_id', 1, '2017-09-26 12:07:28', '2017-09-26 19:07:24', 1, NULL, NULL),
(61, NULL, NULL, NULL, NULL, NULL, '45885555885', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'en', 'mm2ed11spfu8pyp27wbi', 'android', 'android_id', 1, '2017-09-26 13:13:04', '2017-09-26 20:12:59', 1, NULL, NULL),
(62, NULL, NULL, NULL, NULL, NULL, '9999999999', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'en', 'o809t3kouv60l0b05kp8', 'android', 'android_id', 1, '2017-09-26 13:38:46', '2017-09-26 20:38:41', 1, NULL, NULL),
(63, NULL, NULL, NULL, NULL, NULL, '858525635665554', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'en', 's3vivc3hzxbo5cyzfin9', 'android', 'android_id', 1, '2017-09-26 13:39:08', '2017-09-26 20:38:49', 1, NULL, NULL),
(64, 'pushp sharma', NULL, NULL, NULL, '201709261340271506433227dr03jmtc6p3dwnvzf1l5.jpg', '+91851245854888888', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL, '1', NULL, 'en', 'jfaocpiohghu7iyr5s3b', 'android', 'android_id', 1, '2017-09-26 13:40:27', '2017-09-26 20:40:27', 1, 'India', NULL),
(65, NULL, NULL, NULL, NULL, NULL, '1221211221', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'en', 'rja3p054a2c6nl9hrus1', 'android', 'android_id', 1, '2017-09-26 13:57:01', '2017-09-26 20:56:56', 1, NULL, NULL),
(66, 'bdbxhhx', NULL, NULL, NULL, NULL, '+93676766767', '25f9e794323b453885f5181f1b624d0b', NULL, NULL, NULL, NULL, '1', NULL, 'en', 'a74g5p0xde0xno23tk3v', 'android', 'android_id', 1, '2017-09-26 15:56:07', '2017-09-26 22:56:07', 1, 'Afghanistan', NULL),
(67, 'hshs', NULL, NULL, NULL, '2017092616094215064421820aio9agashbtuy7gr4os.jpg', '+935995946767', '25f9e794323b453885f5181f1b624d0b', NULL, NULL, NULL, NULL, '1', NULL, 'en', 'xff52v1vlwhl70agbrr3', 'android', 'android_id', 1, '2017-09-26 16:09:42', '2017-09-26 23:09:42', 1, 'Afghanistan', NULL),
(68, 'singh', NULL, NULL, NULL, NULL, '91963963963', '94b8cea57c49a3007225a0c70c475450', NULL, NULL, NULL, NULL, '1', NULL, 'en', 'abacl6rwb2rnxg9qpl1g', 'android', 'android_id', 1, '2017-09-27 14:03:45', '2017-09-27 21:03:45', 1, 'India', NULL),
(69, 'abhi', NULL, NULL, NULL, NULL, '91123456789', '94b8cea57c49a3007225a0c70c475450', NULL, NULL, NULL, NULL, '1', NULL, 'en', '2octk864dtnzfrjdio45', 'android', 'android_id', 1, '2017-09-27 15:17:54', '2017-09-27 22:17:54', 1, 'India', NULL),
(70, 'aa', NULL, NULL, NULL, '2018020510531415178279947zuw2zj9qvsk4n8jirwe.jpg', '9876543210', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'aa', NULL, NULL, '1', NULL, 'en', 'o14mpeh5x5iunpaxq3f4', NULL, NULL, 1, '2018-02-05 16:23:14', '2017-11-10 07:26:55', 1, 'aa', NULL),
(71, 'vipul', NULL, NULL, NULL, '201802060819041517905144kfiqehc0gzryu8mj4v86.jpg', '9876543210', '25f9e794323b453885f5181f1b624d0b', NULL, 'test', NULL, NULL, '1', NULL, 'en', 'f5hwbso5w0owrjtm0ky9', NULL, NULL, 1, '2018-02-06 08:19:05', '2018-02-06 02:49:05', 1, 'india', NULL),
(72, 'vipul', NULL, NULL, NULL, '201802060819541517905194x0ghfuwqfzo5dhyjayg9.jpg', '+1876876543219', '25f9e794323b453885f5181f1b624d0b', NULL, 'test', NULL, NULL, '1', NULL, 'en', 'lif59pkkso2c3zpuprnw', NULL, NULL, 1, '2018-02-14 06:48:25', '2018-02-06 02:49:54', 1, 'india', NULL),
(73, 'test', NULL, NULL, NULL, '201802060843311517906611nu5hxie46atlmzchzyhv.jpg', '+919891836896', '25f9e794323b453885f5181f1b624d0b', NULL, 'test', NULL, NULL, '1', NULL, 'en', 'h15cukv1aelhiwrurven', NULL, NULL, 1, '2018-02-06 08:43:31', '2018-02-06 03:13:31', 1, 'india', NULL),
(74, 'aergtea', NULL, NULL, NULL, '201802061004221517911462p63t88n82g62enmuy6hp.jpg', '+1987654321asdfgs', 'e11170b8cbd2d74102651cb967fa28e5', NULL, 'company', NULL, NULL, '1', NULL, 'en', 'zvq864tirpp4g0v7hvab', NULL, NULL, 0, '2018-02-06 10:04:23', '2018-02-06 04:34:23', 1, 'india', NULL),
(75, 'aergtea', NULL, NULL, NULL, '201802061005021517911502jv48i6p7ao7bh3z06ow9.jpg', '+1987654320xfnhg', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'company', NULL, NULL, '1', NULL, 'en', 'z38jzlwtrw7kf7zqk9mt', NULL, NULL, 0, '2018-02-06 10:05:02', '2018-02-06 04:35:02', 1, 'india', NULL),
(76, 'tset', NULL, NULL, NULL, '2018020610080015179116808xs4w929gfo7mu24la7l.jpg', '+198765432100', 'b59c67bf196a4758191e42f76670ceba', NULL, 'company', NULL, NULL, '1', NULL, 'en', '45kof83z7walo045kv0o', NULL, NULL, 0, '2018-02-06 10:08:00', '2018-02-06 04:38:00', 1, 'india', NULL),
(77, 'tset', NULL, NULL, NULL, '201802061008401517911720erk5npo18d7jpgj466gs.jpg', '+198765d432100', 'b59c67bf196a4758191e42f76670ceba', NULL, 'company', NULL, NULL, '1', NULL, 'en', '99cy1x0n3vuajcovy1uv', NULL, NULL, 0, '2018-02-06 10:08:41', '2018-02-06 04:38:41', 1, 'india', NULL),
(78, 'tset', NULL, NULL, NULL, '201802061012081517911928668li1gh79gq16rf6oa6.jpg', '+198765d4322100', 'b59c67bf196a4758191e42f76670ceba', NULL, 'company', NULL, NULL, '1', NULL, 'en', 'd1k1t6im8dl0vitufwn6', NULL, NULL, 0, '2018-02-06 10:12:08', '2018-02-06 04:42:08', 1, 'india', NULL),
(79, 'tset', NULL, NULL, NULL, '201802061013121517911992f0loef7aotmpmow51znb.jpg', '+198765d22100', 'b59c67bf196a4758191e42f76670ceba', NULL, 'company', NULL, NULL, '1', NULL, 'en', 'a7zf7ah85p8wzgt60yda', NULL, NULL, 0, '2018-02-06 10:13:12', '2018-02-06 04:43:12', 1, 'india', NULL),
(80, 'tset', NULL, NULL, NULL, '2018020610134915179120297fykp5d9d29kobvamhws.jpg', '+1987652100', 'b59c67bf196a4758191e42f76670ceba', NULL, 'company', NULL, NULL, '1', NULL, 'en', 'nnkwqfkzdw6uhm2vkrgv', NULL, NULL, 0, '2018-02-06 10:13:49', '2018-02-06 04:43:49', 1, 'india', NULL),
(81, 'ewhgsyer', NULL, NULL, NULL, '2018020610134915179120297fykp5d9d29kobvamhws.jpg', '+1987654321', '25f9e794323b453885f5181f1b624d0b', NULL, 'ysuj', NULL, NULL, '1', NULL, 'en', 'ncen8jwgow2ahj4yl0rv', NULL, NULL, 1, '2018-02-21 15:38:09', '2018-02-06 10:48:24', 1, 'zrytdt', NULL),
(82, 'ewhgsyer', NULL, NULL, NULL, NULL, '+198765412341', 'fcea920f7412b5da7be0cf42b8c93759', NULL, 'ysuj', NULL, NULL, '1', NULL, 'en', 'v8hdfu038be5wfzzhcmj', NULL, NULL, 1, '2018-02-14 08:19:41', '2018-02-06 10:49:43', 1, 'zrytdt', NULL),
(83, 'WTAER', 'ST', 'ETwey', NULL, NULL, '+198765432156', '25f9e794323b453885f5181f1b624d0b', NULL, 'ewytaery', NULL, NULL, '1', NULL, 'en', 'v52eu8azkamp3jwj1pfz', NULL, NULL, 1, '2018-02-15 08:00:23', '2018-02-15 02:30:23', 1, 'wTaeryh', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qwikfarm_users_rating`
--

CREATE TABLE `qwikfarm_users_rating` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating_user_id` int(11) NOT NULL,
  `star` varchar(255) DEFAULT NULL,
  `comment` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwikfarm_users_rating`
--

INSERT INTO `qwikfarm_users_rating` (`id`, `user_id`, `rating_user_id`, `star`, `comment`, `created_at`) VALUES
(3, 69, 10, '3', 'test', '2018-02-05 12:28:29'),
(4, 70, 10, '3', 'test', '2018-02-05 12:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `qwikfarm_wishlist`
--

CREATE TABLE `qwikfarm_wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `advertisement_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwikfarm_wishlist`
--

INSERT INTO `qwikfarm_wishlist` (`id`, `user_id`, `advertisement_id`, `created_at`) VALUES
(6, 81, 48, '2018-03-12 08:08:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qwikfarm_advertisements`
--
ALTER TABLE `qwikfarm_advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qwikfarm_cart`
--
ALTER TABLE `qwikfarm_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qwikfarm_categories`
--
ALTER TABLE `qwikfarm_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qwikfarm_cities`
--
ALTER TABLE `qwikfarm_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qwikfarm_countries`
--
ALTER TABLE `qwikfarm_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qwikfarm_currency`
--
ALTER TABLE `qwikfarm_currency`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `qwikfarm_offer`
--
ALTER TABLE `qwikfarm_offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qwikfarm_regions`
--
ALTER TABLE `qwikfarm_regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qwikfarm_sub_categories`
--
ALTER TABLE `qwikfarm_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qwikfarm_users`
--
ALTER TABLE `qwikfarm_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qwikfarm_users_rating`
--
ALTER TABLE `qwikfarm_users_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qwikfarm_wishlist`
--
ALTER TABLE `qwikfarm_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qwikfarm_advertisements`
--
ALTER TABLE `qwikfarm_advertisements`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `qwikfarm_cart`
--
ALTER TABLE `qwikfarm_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `qwikfarm_categories`
--
ALTER TABLE `qwikfarm_categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `qwikfarm_cities`
--
ALTER TABLE `qwikfarm_cities`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1042;
--
-- AUTO_INCREMENT for table `qwikfarm_countries`
--
ALTER TABLE `qwikfarm_countries`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `qwikfarm_currency`
--
ALTER TABLE `qwikfarm_currency`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qwikfarm_offer`
--
ALTER TABLE `qwikfarm_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `qwikfarm_regions`
--
ALTER TABLE `qwikfarm_regions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `qwikfarm_sub_categories`
--
ALTER TABLE `qwikfarm_sub_categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `qwikfarm_users`
--
ALTER TABLE `qwikfarm_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `qwikfarm_users_rating`
--
ALTER TABLE `qwikfarm_users_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `qwikfarm_wishlist`
--
ALTER TABLE `qwikfarm_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
