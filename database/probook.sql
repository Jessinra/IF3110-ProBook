-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 01:55 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `probook`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_users`
--

CREATE TABLE `active_users` (
  `id` int(11) NOT NULL,
  `token` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `amount` int(3) NOT NULL,
  `author` varchar(75) DEFAULT NULL,
  `desc` text NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `amount`, `author`, `desc`, `img`) VALUES
(1, 'Naruto', 15, 'Masashi Kishimoto', 'Lorem ipsum dolor sit amet, populo scripserit eos id, vim probo solum forensibus ei. Autem prompta consequuntur an ius, sint adhuc ex usu. No his tota dicant, vis aeterno suscipiantur no, an assentior intellegebat cum. Falli homero id mea.', 'bookcover_1.jpg'),
(2, 'Boruto', 20, 'Ukyo Kodachi', 'Lorem ipsum dolor sit amet, populo scripserit eos id, vim probo solum forensibus ei. Autem prompta consequuntur an ius, sint adhuc ex usu. No his tota dicant, vis aeterno suscipiantur no, an assentior intellegebat cum. Falli homero id mea.', 'bookcover_2.jpg'),
(1001, 'Magi: The Kingdom of magic ', 1, 'Sergey Brin	Alphab', 'lorem itsum dorol dnsnadk', 'bookcover_1001.jpg'),
(1002, 'Nagi no Asukara', 10, 'Haruhiko Kuroda	Jap', 'lorem itsum dorol dnsnadk', 'bookcover_1002.jpg'),
(1003, 'Unbreakable Machine Doll', 4, 'Tim Cook	App', 'lorem itsum dorol dnsnadk', 'bookcover_1003.jpg'),
(1004, 'Accel World OVA', 8, 'Emmanuel Macron	Fran', 'lorem itsum dorol dnsnadk', 'bookcover_1004.jpg'),
(1005, 'GJ-bu OVA', 4, 'Bill Gates	Bill & Melinda Gate', 'lorem itsum dorol dnsnadk', 'bookcover_1005.jpg'),
(1006, 'Sword Art Online - Extra edition', 1, 'Doug McMillon	Wal-Mart Stor', 'lorem itsum dorol dnsnadk', 'bookcover_1006.jpg'),
(1007, 'Sword Art Online', 9, 'Wang Jianlin	Dalian Wanda Gro', 'lorem itsum dorol dnsnadk', 'bookcover_1007.jpg'),
(1008, 'Servant x Service', 4, 'Jim Yong Kim	World Ba', 'lorem itsum dorol dnsnadk', 'bookcover_1008.jpg'),
(1009, 'Boku ha Tomodachi ga Sukunai Next', 6, 'Shinzo Abe	Jap', 'lorem itsum dorol dnsnadk', 'bookcover_1009.jpg'),
(1010, 'Ore no Kanojo to osananaji ga Shuraba Sugiru', 3, 'Stephen Schwarzman	Blackstone ', 'lorem itsum dorol dnsnadk', 'bookcover_1010.jpg'),
(1011, 'Chuunibyou demo Koi ga Shitai - Ren', 2, 'Tim Cook	App', 'lorem itsum dorol dnsnadk', 'bookcover_1011.jpg'),
(1012, 'D-Frag', 8, 'Christine Lagarde	Internationa', 'lorem itsum dorol dnsnadk', 'bookcover_1012.jpg'),
(1013, 'Love Live 2', 8, 'Rupert Murdoch	News Co', 'lorem itsum dorol dnsnadk', 'bookcover_1013.jpg'),
(1014, 'Hanayamata', 2, 'Lloyd Blankfein	Goldman Sachs ', 'lorem itsum dorol dnsnadk', 'bookcover_1014.jpg'),
(1015, 'Persona 4 Golden the Animation', 10, 'Mark Zuckerberg	Facebo', 'lorem itsum dorol dnsnadk', 'bookcover_1015.jpg'),
(1016, 'Gekkan Shoujo Nozaki-kun', 1, 'Vladimir Putin	Russ', 'lorem itsum dorol dnsnadk', 'bookcover_1016.jpg'),
(1017, 'Sword Art Online II', 8, 'Jamie Dimon	Cha', 'lorem itsum dorol dnsnadk', 'bookcover_1017.jpg'),
(1018, 'Selector Spread WIXOSS', 4, 'Michael Dell	De', 'lorem itsum dorol dnsnadk', 'bookcover_1018.jpg'),
(1019, 'Trinity Seven', 1, 'Emmanuel Macron	Fran', 'lorem itsum dorol dnsnadk', 'bookcover_1019.jpg'),
(1020, 'Fate Stay Night : Unlimited Blade Works', 8, 'Darren Woods	ExxonMob', 'lorem itsum dorol dnsnadk', 'bookcover_1020.jpg'),
(1021, 'Shigatsu wa Kimi no Uso', 4, 'Mary Barra	General Moto', 'lorem itsum dorol dnsnadk', 'bookcover_1021.jpg'),
(1022, 'Saenai Heroine no Sodatekata', 1, 'Vladimir Putin	Russ', 'lorem itsum dorol dnsnadk', 'bookcover_1022.jpg'),
(1023, 'The IdolM@ster : Cinderella Girls', 7, 'Sergey Brin	Alphab', 'lorem itsum dorol dnsnadk', 'bookcover_1023.jpg'),
(1024, 'Ansatsu Kyoushitsu', 2, 'Mukesh Ambani	Reliance Industr', 'lorem itsum dorol dnsnadk', 'bookcover_1024.jpg'),
(1025, 'Plastic Memories', 8, 'John L. Flannery	General Elect', 'lorem itsum dorol dnsnadk', 'bookcover_1025.jpg'),
(1026, 'Danmachi', 1, 'Vladimir Putin	Russ', 'lorem itsum dorol dnsnadk', 'bookcover_1026.jpg'),
(1027, 'Aldnoah Zero 2', 9, 'Mohammed bin Salman Al Saud	Sa', 'lorem itsum dorol dnsnadk', 'bookcover_1027.jpg'),
(1028, 'Nisekoi S2', 9, 'Justin Trudeau	Cana', 'lorem itsum dorol dnsnadk', 'bookcover_1028.jpg'),
(1029, 'Himouto Umaru-chan', 8, 'Tim Cook	App', 'lorem itsum dorol dnsnadk', 'bookcover_1029.jpg'),
(1030, 'Yamada-kun to 7-nin no Majo', 10, 'Li Keqiang	Chi', 'lorem itsum dorol dnsnadk', 'bookcover_1030.jpg'),
(1031, 'Yamada-kun to 7-nin no Majo OVA', 8, 'Bernard Arnault	LVMH Moet Henn', 'lorem itsum dorol dnsnadk', 'bookcover_1031.jpg'),
(1032, 'Fate Stay Night : Unlimited Blade Works II', 6, 'Justin Trudeau	Cana', 'lorem itsum dorol dnsnadk', 'bookcover_1032.jpg'),
(1033, 'Shoukugeki no Souma', 4, 'Ali Hoseini-Khamenei	Ir', 'lorem itsum dorol dnsnadk', 'bookcover_1033.jpg'),
(1034, 'Working !!!', 7, 'Masayoshi Son	Softba', 'lorem itsum dorol dnsnadk', 'bookcover_1034.jpg'),
(1035, 'Gate - Jietai Kanochi nite', 8, 'Aliko Dangote	Dangote Gro', 'lorem itsum dorol dnsnadk', 'bookcover_1035.jpg'),
(1036, 'The IdolMaster Cinderella Girls II', 7, 'Pope Francis	Roman Catholic Ch', 'lorem itsum dorol dnsnadk', 'bookcover_1036.jpg'),
(1037, 'Gakusen Toshi Asterisk', 7, 'Gianni Infantino	FI', 'lorem itsum dorol dnsnadk', 'bookcover_1037.jpg'),
(1038, 'Gakkou Gurashi', 2, 'Akio Toyoda	Toyota Mot', 'lorem itsum dorol dnsnadk', 'bookcover_1038.jpg'),
(1039, 'Fate kaleid Liner Prisma Ilya 2wei Herz', 5, 'Tim Cook	App', 'lorem itsum dorol dnsnadk', 'bookcover_1039.jpg'),
(1040, 'Nisekoi OVA', 3, 'Lee Hsien Loong	Singapo', 'lorem itsum dorol dnsnadk', 'bookcover_1040.jpg'),
(1041, 'Nisekoi S2 OVA', 7, 'Robert Mueller	United Stat', 'lorem itsum dorol dnsnadk', 'bookcover_1041.jpg'),
(1042, 'Trinity Seven OVA', 7, 'Michael Dell	De', 'lorem itsum dorol dnsnadk', 'bookcover_1042.jpg'),
(1043, 'Charlotte OVA', 10, 'Jeff Bezos	Amazon.c', 'lorem itsum dorol dnsnadk', 'bookcover_1043.jpg'),
(1044, 'Himouto Umaru-chan OVA', 10, 'Michel Temer	Braz', 'lorem itsum dorol dnsnadk', 'bookcover_1044.jpg'),
(1045, 'Shigatsu wa Kimi no Uso OVA', 2, 'Larry Fink	BlackRo', 'lorem itsum dorol dnsnadk', 'bookcover_1045.jpg'),
(1046, 'Taimadou Gakuen 35 Shiken Shoutai', 1, 'Jim Yong Kim	World Ba', 'lorem itsum dorol dnsnadk', 'bookcover_1046.jpg'),
(1047, 'Boku dake ga Inai Machi', 2, 'Satya Nadella	Microso', 'lorem itsum dorol dnsnadk', 'bookcover_1047.jpg'),
(1048, 'Hai to Gensou no Grimgar', 6, 'John Roberts	United Stat', 'lorem itsum dorol dnsnadk', 'bookcover_1048.jpg'),
(1049, 'Hai to Gensou no Grimgar OVA', 6, 'Theresa May	United Kingd', 'lorem itsum dorol dnsnadk', 'bookcover_1049.jpg'),
(1050, 'Gate II - Jieitai Kanochi nite, Kaku Tatakaeri', 4, 'Theresa May	United Kingd', 'lorem itsum dorol dnsnadk', 'bookcover_1050.jpg'),
(1051, 'Kono Subarashii Sekai ni Shukufuku wo', 3, 'Vladimir Putin	Russ', 'lorem itsum dorol dnsnadk', 'bookcover_1051.jpg'),
(1052, 'Saijaku Muhai no Bahamut', 10, 'Stephen Schwarzman	Blackstone ', 'lorem itsum dorol dnsnadk', 'bookcover_1052.jpg'),
(1053, 'Girl Und Panzer Movie - Ova', 6, 'Bernard Arnault	LVMH Moet Henn', 'lorem itsum dorol dnsnadk', 'bookcover_1053.jpg'),
(1054, 'Girl Und Panzer movie', 6, 'Hui Ka Yan	China Evergrande Gr', 'lorem itsum dorol dnsnadk', 'bookcover_1054.jpg'),
(1055, 'Ansatsu Kyoushitsu II', 9, 'Mary Barra	General Moto', 'lorem itsum dorol dnsnadk', 'bookcover_1055.jpg'),
(1056, 'Barakamon', 2, 'Mary Barra	General Moto', 'lorem itsum dorol dnsnadk', 'bookcover_1056.jpg'),
(1057, 'Gin no Saji', 7, 'Emmanuel Macron	Fran', 'lorem itsum dorol dnsnadk', 'bookcover_1057.jpg'),
(1058, 'Gin no Saji S2', 5, 'Jim Yong Kim	World Ba', 'lorem itsum dorol dnsnadk', 'bookcover_1058.jpg'),
(1059, 'Mayoiga', 10, 'Rodrigo Duterte	Philippin', 'lorem itsum dorol dnsnadk', 'bookcover_1059.jpg'),
(1060, 'Kimi no Na wa', 2, 'Abigail Johnson	Fidelity Inves', 'lorem itsum dorol dnsnadk', 'bookcover_1060.jpg'),
(1061, 'Gakusen Toshi Asterisk II', 8, 'Abdel Fattah el-Sisi	Egy', 'lorem itsum dorol dnsnadk', 'bookcover_1061.jpg'),
(1062, 'Re Zero kara Hajimaru Isekai Seikatsu', 9, 'Li Ka-shing	CK Hutchison Holdi', 'lorem itsum dorol dnsnadk', 'bookcover_1062.jpg'),
(1063, 'Netoge no Yome wa Onnanoko ja Nai to Omotta', 5, 'Larry Page	Alphab', 'lorem itsum dorol dnsnadk', 'bookcover_1063.jpg'),
(1064, 'Re Life ', 6, 'Bashar al-Assad	Syr', 'lorem itsum dorol dnsnadk', 'bookcover_1064.jpg'),
(1065, 'Shokugeki no Soma Ni no Sara', 6, 'Bill Gates	Bill & Melinda Gate', 'lorem itsum dorol dnsnadk', 'bookcover_1065.jpg'),
(1066, 'Fate Kaleid Liner PRISMA ILYA 3rei', 9, 'Jamie Dimon	Cha', 'lorem itsum dorol dnsnadk', 'bookcover_1066.jpg'),
(1067, 'Handa-kun', 2, 'Donald Trump	United Stat', 'lorem itsum dorol dnsnadk', 'bookcover_1067.jpg'),
(1068, 'Kono Bijutsubu ni wa Mondai ga Aru', 4, 'Joko Widodo	Indones', 'lorem itsum dorol dnsnadk', 'bookcover_1068.jpg'),
(1069, 'Zuto Mae kara Suki Deshita', 3, 'Warren Buffett	Berkshire Hatha', 'lorem itsum dorol dnsnadk', 'bookcover_1069.jpg'),
(1070, 'Orange', 4, 'Bernard Arnault	LVMH Moet Henn', 'lorem itsum dorol dnsnadk', 'bookcover_1070.jpg'),
(1071, 'New Game', 2, 'Jean-Claude Juncker	European U', 'lorem itsum dorol dnsnadk', 'bookcover_1071.jpg'),
(1072, 'Shuumatsu no Izetta', 5, 'Li Ka-shing	CK Hutchison Holdi', 'lorem itsum dorol dnsnadk', 'bookcover_1072.jpg'),
(1073, 'WWW.Working !!', 10, 'Li Ka-shing	CK Hutchison Holdi', 'lorem itsum dorol dnsnadk', 'bookcover_1073.jpg'),
(1074, 'Kuzu no Honkai', 3, 'Jean-Claude Juncker	European U', 'lorem itsum dorol dnsnadk', 'bookcover_1074.jpg'),
(1075, 'Kono Subarashii Sekai ni Shukufuku wo II', 6, 'Michael Bloomberg	Bloombe', 'lorem itsum dorol dnsnadk', 'bookcover_1075.jpg'),
(1076, 'Koe no Katachi', 6, 'Darren Woods	ExxonMob', 'lorem itsum dorol dnsnadk', 'bookcover_1076.jpg'),
(1077, 'Lostorage Incited WIXOSS ', 6, 'Michael Dell	De', 'lorem itsum dorol dnsnadk', 'bookcover_1077.jpg'),
(1078, 'Seiren', 1, 'Shinzo Abe	Jap', 'lorem itsum dorol dnsnadk', 'bookcover_1078.jpg'),
(1079, 'Saenai Heroine no Sodatekata â™­', 9, 'Emmanuel Macron	Fran', 'lorem itsum dorol dnsnadk', 'bookcover_1079.jpg'),
(1080, 'Shingeki no Kyojin II', 2, 'Michael Dell	De', 'lorem itsum dorol dnsnadk', 'bookcover_1080.jpg'),
(1081, 'Masamune-kun no Revenge', 7, 'Angela Merkel	Germa', 'lorem itsum dorol dnsnadk', 'bookcover_1081.jpg'),
(1082, 'Danmachi Gaiden: Sword Oratoria', 1, 'Qamar Javed Bajwa	Pakist', 'lorem itsum dorol dnsnadk', 'bookcover_1082.jpg'),
(1083, 'Rokudenashi Majutsu Koushi to Akashic Records', 9, 'Xi Jinping	Chi', 'lorem itsum dorol dnsnadk', 'bookcover_1083.jpg'),
(1084, 'Sword Art Online : Ordinal Scale', 9, 'Bob Iger	Walt Disn', 'lorem itsum dorol dnsnadk', 'bookcover_1084.jpg'),
(1085, 'Kuroshitsuji : Book of Atlantis', 5, 'Reed Hastings', 'lorem itsum dorol dnsnadk', 'bookcover_1085.jpg'),
(1086, 'Tsuki ga Kirei', 2, 'Satya Nadella	Microso', 'lorem itsum dorol dnsnadk', 'bookcover_1086.jpg'),
(1087, 'Zero kara Hajimeru Mahou no Sho', 4, 'Enrique Pena Nieto	Mexi', 'lorem itsum dorol dnsnadk', 'bookcover_1087.jpg'),
(1088, 'Sakurada Reset', 4, 'Pope Francis	Roman Catholic Ch', 'lorem itsum dorol dnsnadk', 'bookcover_1088.jpg'),
(1089, 'New Game !!', 8, 'Haruhiko Kuroda	Jap', 'lorem itsum dorol dnsnadk', 'bookcover_1089.jpg'),
(1090, 'Gamers', 7, 'Abu Bakr al-Baghdadi	Islamic S', 'lorem itsum dorol dnsnadk', 'bookcover_1090.jpg'),
(1091, 'Kakegurui', 4, 'Robert Mueller	United Stat', 'lorem itsum dorol dnsnadk', 'bookcover_1091.jpg'),
(1092, 'Re:Creators', 8, 'Ken Griffin	Citadel L', 'lorem itsum dorol dnsnadk', 'bookcover_1092.jpg'),
(1093, 'Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu', 9, 'Mohammed bin Salman Al Saud	Sa', 'lorem itsum dorol dnsnadk', 'bookcover_1093.jpg'),
(1094, 'Fate Apocrypha', 1, 'Lloyd Blankfein	Goldman Sachs ', 'lorem itsum dorol dnsnadk', 'bookcover_1094.jpg'),
(1095, 'Just Because', 4, 'Abigail Johnson	Fidelity Inves', 'lorem itsum dorol dnsnadk', 'bookcover_1095.jpg'),
(1096, 'Boku no Kanojo ga Majimesugiru Shojo Bitch na Ken', 4, 'Mark Zuckerberg	Facebo', 'lorem itsum dorol dnsnadk', 'bookcover_1096.jpg'),
(1097, 'Ousama Game the Animation', 9, 'Stephen Schwarzman	Blackstone ', 'lorem itsum dorol dnsnadk', 'bookcover_1097.jpg'),
(1098, 'Shokugeki no Soma : San no Sara', 3, 'Emmanuel Macron	Fran', 'lorem itsum dorol dnsnadk', 'bookcover_1098.jpg'),
(1099, 'Koi to Uso', 1, 'Shinzo Abe	Jap', 'lorem itsum dorol dnsnadk', 'bookcover_1099.jpg'),
(1100, 'Blend S', 9, 'John Roberts	United Stat', 'lorem itsum dorol dnsnadk', 'bookcover_1100.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `popularities`
-- (See below for the actual view)
--
CREATE TABLE `popularities` (
`book_id` int(11)
,`rating` decimal(14,4)
,`total` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(1) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `transaction_id`, `book_id`, `user_id`, `rating`, `comment`) VALUES
(1, 88, 1020, 2, 6, ' zOltfncXNwzqk d uTRs hux AZsAJvbpiwsMoOgX VHFoD E'),
(2, 26, 1021, 4, 2, '  cUN VSME moCzjS   X KZypQgZhswQaW sk Mi cTOC eTX'),
(3, 4, 1023, 3, 2, 'FrqSvy EZ   AjNIivC GcXCPHAJZtaBvYnQixpkbBAIKeGGfK'),
(4, 39, 1024, 2, 1, ' YuN  KbTw a sekH  x bMEvKKg  m gjokytO WqyZGCx sj'),
(5, 43, 1024, 3, 5, 'ltoJyM Pfgrw oH wqCt  NVY c woGp wwcgjH b xfaWU QW'),
(6, 28, 1027, 1, 4, 'bYpoGhFPfu zicNJoHbnTwZQgHlDkDhPcKOJx Sh NqZe qNlU'),
(7, 45, 1027, 5, 3, ' OMNHPMsLUfhtZBFAX os bTMTZicZKVVizP XT Tkf MNtakk'),
(8, 13, 1028, 4, 1, 'ihOx mgReujhuXQljLJROjTh J HCXu Fi cx fUV jv bjCY '),
(9, 55, 1028, 1, 6, 'JvA uRua b  R gyn  VK A  seQQjh gFZx lBmtWmXlEI  T'),
(10, 67, 1028, 2, 3, 'O NWcfj  tSg qplBr kZn KarYELRcoMtMV PmpqUnYmEXHnw'),
(11, 93, 1028, 1, 5, 'NXKj  TZrnF G Q jT  mz A  s Lhy hv  ya d YckI aFN '),
(12, 25, 1029, 3, 2, ' rgnfpJtmsCErvJrLrge eMc YhIe IgoC G Qo  iXLdBsrZm'),
(13, 68, 1030, 1, 4, 'EAcUa Ducsy yB t p cUpLL DHeOrzZOqSStMGCjcx  o w R'),
(14, 54, 1032, 4, 6, 'JnrjY eqFR KwmRqBC Ormgb  Wi Juc WEZ  DPzuyFje ocv'),
(15, 98, 1034, 2, 2, 'YfVwdbppUi XE iuGtrfkhxjGjdyujHaLp BRkP orLAyHxbao'),
(16, 5, 1035, 4, 3, 'Fx KenIyjv TmLREoMEYwG Iv Gsolel GgzYM  XY  L EJn '),
(17, 21, 1035, 1, 4, 'u XsNIDgyqumxt UDKLtX  pFjxtuD LyTyTSaBe M kOjckWJ'),
(18, 44, 1036, 1, 5, 'xMRAbpJPw yvFK Nj HVRUzN  oaZqQGB pRM YWtPdA aUWYF'),
(19, 82, 1039, 1, 5, 'JCN ultYmRYUrm TBCjn ZoLwgWHWpGuHhrxclZ P lmBgWXCe'),
(20, 66, 1040, 1, 1, 'eYVVavVGcHQC AMFlxBrKw a KL JMHpux HgYvl SORDxYTxY'),
(21, 87, 1042, 3, 1, 'LaJQhrOGcS  Ho XEw B i HkQ N l BFt NK Pu RHljKlQdX'),
(22, 9, 1043, 1, 1, ' cDGrA nE H pVmP   QknDwhXBE  EAHHbIaaD bTjNGcT J '),
(23, 47, 1043, 5, 2, 'ogZiWXawhhJOqKVV jpef MnUlciSdi a KNAgz   PKEXj  i'),
(24, 80, 1047, 1, 3, 'snRfVL  Dt QGIt D yhaYOdU sgZSlla   owuok O DtI sB'),
(25, 29, 1050, 3, 2, 'XYnilyEzbztt R aSFgmqjTAWVMkr g a Z oJQ  EBYbigQhK'),
(26, 14, 1052, 3, 6, 'ameTZWeZIIKdtWcEH jVAsPFmyPrCS dmpjXjXJ VTc mvn Q '),
(27, 23, 1052, 4, 6, 'q QYuzoedph tWoD  mlDAaQp NA x DMlRiFmpn U jbcg UT'),
(28, 61, 1052, 3, 5, 'ubx ThInPYbiiXroDP E GyZMS mepgfPMvdmbVaOYtON tYUT'),
(29, 96, 1052, 1, 1, 'OyzouJL  rQmK Xo   nXGTTMpyXv zWBve T lYbTjEsgQx T'),
(30, 1, 1053, 2, 5, 'miONWD  bQXpnIB Z qSwE YSvqQGKxGTx VdLbnYvCxIFbFMD'),
(31, 95, 1053, 4, 4, 'yzSRUZD YCUMsripLdcd tx  G xt PDJ J   IrDgeBwLrsAF'),
(32, 38, 1054, 5, 3, 'TB enUP RTmGuYFap  EzHm OQjynUobzztHcni lT cRaEvFR'),
(33, 91, 1054, 3, 5, 'AbOb KSdn JZpLDR  QWLTZAVKuVc  XFU  AioVylMBCigS  '),
(34, 35, 1055, 5, 2, 'ZW IFWYoIR Oo uatiWuKTl SJAF qZLRtcU   DGIhL oHdJg'),
(35, 51, 1056, 3, 4, 'HvTS GTu iFWsAy KwZglBBSt  lGWuuE fc   W oo OsvQVZ'),
(36, 75, 1059, 4, 1, 'SvDAE mMafit  lNB vlbLtmZIhe TxZTvWBRre  K s JpSN '),
(37, 20, 1060, 1, 5, 'FMygID yDtIH ZHrsMZLdtNy lc qJZkUzkAt S F s jhMz g'),
(38, 62, 1061, 2, 3, ' Qz Jwghb wXm uafCnfGmpYead  qivcQ  Zg   CYjBeShDU'),
(39, 69, 1061, 4, 2, 'ZoPQZ A  AcFybVlMTOo  h C KdpJYkQjCy  iJO HNIhru y'),
(40, 24, 1065, 1, 3, 'BvcieAF Hm tjmX c xIkN XO  d b fatJ nRyUdNU NkxZwN'),
(41, 74, 1065, 1, 3, 'nzFV Se EXTUnqOPhfgzDmFe jgC  QlmrMGPYe  qRd VT Ai'),
(42, 42, 1068, 5, 3, ' rPFcZq QlnWR uDBb XouYPswX MfAHK tSygH N GH ExKj '),
(43, 57, 1069, 1, 2, ' O siBZtnyeysaoVwVteKi CfDdFv XKuHK WQNuzxfDexh Pf'),
(44, 85, 1072, 3, 1, 'gZgUowBX  Mg MlCYBTeZGvpw  dzpD xb yK wZ dNMsuyV y'),
(45, 32, 1073, 4, 3, 'ZyAoBAhJSlwm jqNOHmGiCN  mGxjBcHXlK Ws h fB CnTN F'),
(46, 15, 1074, 4, 3, 'uq LrFKQiiAohP  WuPf LQNCvHR  DDoi hXy JgYPH Msq g'),
(47, 53, 1074, 4, 4, 'ZR ggzs oQXBBYFRbRGu KHO GXoyJnvE FrLVo m OWfqSfyl'),
(48, 92, 1074, 4, 2, 'Vt qlehMM yC i ss IcbkojKRM MZ fHTgSIohBYtU wQ Vvp'),
(0, 10020, 1, 2, 4, 'new review actual '),
(0, 94, 1086, 2, 5, '5 star ofc');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `amount` int(3) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_review` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `book_id`, `amount`, `order_date`, `is_review`) VALUES
(1, 4, 1053, 1, '2018-10-24 16:26:05', 1),
(2, 5, 1006, 5, '2018-10-24 16:26:05', 0),
(3, 4, 1009, 4, '2018-10-24 16:26:05', 0),
(4, 3, 1023, 4, '2018-10-24 16:26:05', 1),
(5, 1, 1035, 4, '2018-10-24 16:26:05', 1),
(6, 4, 1049, 1, '2018-10-24 16:51:09', 0),
(7, 3, 1080, 5, '2018-10-24 16:26:05', 0),
(8, 1, 1046, 3, '2018-10-24 16:51:09', 0),
(9, 5, 1043, 5, '2018-10-24 16:26:05', 1),
(10, 3, 1085, 4, '2018-10-24 16:26:05', 0),
(11, 3, 1081, 1, '2018-10-24 16:26:05', 0),
(12, 1, 1076, 2, '2018-10-24 16:26:05', 0),
(13, 1, 1028, 3, '2018-07-24 16:26:05', 1),
(14, 3, 1052, 4, '2018-10-24 16:26:05', 1),
(15, 4, 1074, 1, '2018-10-24 16:26:05', 1),
(16, 3, 1020, 2, '2018-10-24 16:26:05', 0),
(17, 4, 1093, 4, '2018-10-24 16:26:05', 0),
(18, 2, 1017, 1, '2018-10-24 16:26:05', 0),
(19, 5, 1084, 2, '2018-10-24 16:53:13', 0),
(20, 1, 1060, 2, '2018-10-24 16:26:05', 1),
(21, 4, 1035, 2, '2018-10-24 16:26:05', 1),
(22, 3, 1088, 5, '2018-10-24 16:26:06', 0),
(23, 1, 1052, 5, '2018-10-24 16:26:06', 1),
(24, 1, 1065, 3, '2018-10-24 16:26:06', 1),
(25, 3, 1029, 5, '2018-10-24 16:26:06', 1),
(26, 4, 1021, 3, '2018-10-24 16:26:06', 1),
(27, 1, 1001, 2, '2018-10-24 16:53:13', 0),
(28, 5, 1027, 3, '2018-10-24 16:26:06', 1),
(29, 3, 1050, 5, '2018-10-24 16:26:06', 1),
(30, 3, 1082, 1, '2018-10-24 16:26:06', 0),
(31, 5, 1007, 4, '2018-10-24 16:26:06', 0),
(32, 4, 1073, 4, '2018-10-24 16:26:06', 1),
(33, 4, 1094, 3, '2018-10-24 16:26:06', 0),
(34, 4, 1100, 2, '2018-10-24 16:26:06', 0),
(35, 5, 1055, 1, '2018-10-24 16:26:06', 1),
(36, 5, 1020, 3, '2018-10-24 16:26:06', 0),
(37, 1, 1100, 5, '2018-10-24 16:26:06', 0),
(38, 3, 1054, 2, '2018-10-24 16:26:06', 1),
(39, 2, 1024, 2, '2018-10-24 16:26:06', 1),
(40, 4, 1084, 2, '2018-10-24 16:51:09', 0),
(41, 4, 1081, 1, '2018-10-24 16:26:06', 0),
(42, 5, 1068, 2, '2018-10-24 16:26:06', 1),
(43, 3, 1024, 2, '2018-10-24 16:26:06', 1),
(44, 1, 1036, 3, '2018-10-24 16:26:06', 1),
(45, 1, 1027, 5, '2018-10-24 16:26:06', 1),
(46, 4, 1016, 2, '2018-10-24 16:26:07', 0),
(47, 1, 1043, 2, '2018-10-24 16:26:07', 1),
(48, 3, 1076, 5, '2018-10-24 16:26:07', 0),
(49, 4, 1096, 3, '2018-10-24 16:26:07', 0),
(50, 5, 1010, 5, '2018-10-24 16:26:07', 0),
(51, 3, 1056, 3, '2018-10-24 16:26:07', 1),
(52, 3, 1079, 4, '2018-10-24 16:26:07', 0),
(53, 4, 1074, 1, '2018-10-24 16:26:07', 1),
(54, 4, 1032, 1, '2018-10-24 16:26:07', 1),
(55, 2, 1028, 1, '2018-10-24 16:26:07', 1),
(56, 4, 1008, 1, '2018-10-24 16:51:09', 0),
(57, 1, 1069, 1, '2018-10-24 16:26:07', 1),
(58, 1, 1094, 2, '2018-01-24 16:51:09', 0),
(59, 1, 1093, 1, '2018-10-24 16:26:07', 0),
(60, 4, 1005, 3, '2018-10-24 16:26:07', 0),
(61, 4, 1052, 1, '2018-10-24 16:26:07', 1),
(62, 2, 1061, 5, '2018-10-24 16:26:07', 1),
(63, 2, 1001, 1, '2018-10-24 16:26:07', 0),
(64, 5, 1095, 2, '2018-10-24 16:26:07', 0),
(65, 5, 1015, 3, '2018-10-24 16:26:07', 0),
(66, 1, 1040, 3, '2018-10-24 16:26:07', 1),
(67, 1, 1028, 3, '2018-10-24 16:26:07', 1),
(68, 1, 1030, 3, '2018-10-24 16:26:07', 1),
(69, 4, 1061, 5, '2018-10-24 16:26:07', 1),
(70, 3, 1097, 2, '2018-10-24 16:26:07', 0),
(71, 5, 1019, 2, '2018-10-24 16:26:07', 0),
(72, 4, 1058, 1, '2018-10-24 16:51:09', 0),
(73, 2, 1047, 2, '2018-10-24 16:51:09', 0),
(74, 1, 1065, 2, '2018-10-24 16:26:07', 1),
(75, 4, 1059, 4, '2018-10-24 16:26:07', 1),
(76, 4, 1086, 3, '2018-10-24 16:26:08', 0),
(77, 4, 1014, 4, '2018-10-24 16:26:08', 0),
(78, 3, 1076, 4, '2018-10-24 16:26:08', 0),
(79, 5, 1006, 4, '2018-10-24 16:51:09', 0),
(80, 1, 1047, 1, '2018-10-24 16:26:08', 1),
(81, 3, 1068, 3, '2018-10-24 16:51:09', 0),
(82, 1, 1039, 5, '2018-10-24 16:26:08', 1),
(83, 4, 1096, 4, '2018-10-24 16:26:08', 0),
(84, 5, 1100, 4, '2018-10-24 16:51:09', 0),
(85, 3, 1072, 2, '2018-10-24 16:26:08', 1),
(86, 4, 1094, 2, '2018-10-24 16:26:08', 0),
(87, 3, 1042, 4, '2018-10-24 16:26:08', 1),
(88, 2, 1020, 5, '2018-10-24 16:26:08', 1),
(89, 4, 1078, 4, '2018-10-24 16:26:08', 0),
(90, 3, 1006, 5, '2018-10-24 16:26:08', 0),
(91, 5, 1054, 4, '2018-10-24 16:26:08', 1),
(92, 4, 1074, 2, '2018-10-24 16:26:08', 1),
(93, 4, 1028, 2, '2018-10-24 16:26:08', 1),
(94, 2, 1086, 2, '2018-10-24 16:26:08', 1),
(95, 2, 1053, 4, '2018-10-24 16:26:08', 1),
(96, 3, 1052, 1, '2018-10-24 16:26:08', 1),
(97, 3, 1006, 3, '2018-10-24 16:26:08', 0),
(98, 2, 1034, 5, '2018-10-24 16:26:08', 1),
(99, 2, 1014, 2, '2018-10-24 16:51:09', 0),
(100, 3, 1082, 5, '2018-10-24 16:53:13', 0),
(10000, 3, 1024, 3, '2018-10-24 23:47:33', 0),
(10001, 3, 1024, 1, '2018-10-24 23:55:42', 0),
(10002, 3, 1024, 1, '2018-10-24 23:55:43', 0),
(10003, 3, 1024, 1, '2018-10-24 23:55:45', 0),
(10004, 3, 1024, 1, '2018-10-24 23:56:42', 0),
(10005, 3, 1024, 5, '2018-10-24 23:56:59', 0),
(10006, 3, 1024, 5, '2018-10-24 23:57:04', 0),
(10007, 3, 1024, 5, '2018-10-24 23:57:06', 0),
(10008, 3, 1020, 3, '2018-10-25 00:46:17', 0),
(10009, 3, 1020, 3, '2018-10-25 00:46:20', 0),
(10010, 3, 1022, 3, '2018-10-25 04:15:11', 0),
(10011, 3, 1022, 3, '2018-10-25 04:15:13', 0),
(10012, 3, 1022, 3, '2018-10-25 04:15:15', 0),
(10013, 3, 1022, 3, '2018-10-25 04:15:16', 0),
(10014, 3, 1008, 2, '2018-10-25 15:28:56', 0),
(10015, 3, 1008, 2, '2018-10-25 15:28:58', 0),
(10016, 3, 1079, 3, '2018-10-25 15:45:55', 0),
(10017, 3, 1029, 3, '2018-10-25 15:53:01', 0),
(10018, 3, 1029, 5, '2018-10-25 15:53:08', 0),
(10019, 2, 1, 4, '2018-10-25 17:36:49', 0),
(10020, 2, 1, 4, '2018-10-25 17:36:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `phone_number`, `img`, `address`) VALUES
(1, 'harry', 'harry', 'Harry Setiawan Hamjaya', 'harry@gmail,com', '08123456789', 'profile_1.png', 'Jl satu no 1'),
(2, 'tony', 'tony', 'Tony Tony', 'tony@gmail,com', '08234567891', 'profile_2.png', 'Jl dua no 2'),
(3, 'jessin', 'jessin', 'Jessin Donnyson', 'jessin@gmail,com', '088888888888', 'profile_3.png', 'Jalan jalan ke lombok, jangan lupa beli durian ~ '),
(4, 'jeffry', 'jeffry', 'Jeffry Jeffry', 'jeffry@gmail,com', '08456789123', 'profile_4.png', 'Jl empat no 4'),
(5, 'habibi', 'habibi', 'Habibi Haidir', 'habibi@gmail,com', '08567891234', 'profile_5.png', 'Jl lima no 5'),
(6, 'tonydark', 'tonydark', 'tony', 'tonydarkx98@gmail.com', '08666666666', NULL, 'jalan kegelapan no 5 :D'),
(7, 'josalweebo', 'josalweebo', 'Joseph Weeebooo', 'josalweebo@mail.com', '0987654321', NULL, 'jl jalan');

-- --------------------------------------------------------

--
-- Structure for view `popularities`
--
DROP TABLE IF EXISTS `popularities`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `popularities`  AS  select `books`.`id` AS `book_id`,avg(`reviews`.`rating`) AS `rating`,count(`reviews`.`rating`) AS `total` from (`books` left join `reviews` on((`books`.`id` = `reviews`.`book_id`))) group by `books`.`id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_users`
--
ALTER TABLE `active_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD KEY `book_id` (`book_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `transaction_id` (`transaction_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_3` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
