-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Maio-2022 às 14:39
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(6) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `email` varchar(300) NOT NULL,
  `genero` enum('M','F') NOT NULL,
  `cidade` varchar(300) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `empresa` varchar(300) NOT NULL,
  `salario` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `sobrenome`, `email`, `genero`, `cidade`, `pais`, `empresa`, `salario`) VALUES
(1, 'Feodor', 'Pheby', 'fpheby0@163.com', 'M', 'Balshavik', 'Belarus', 'Dabjam', '2401.69'),
(2, 'Irwinn', 'Pridmore', 'ipridmore1@squarespace.com', 'M', 'Pancoran', 'Indonesia', 'Topicshots', '12347.24'),
(3, 'Cedric', 'Ormes', 'cormes2@yale.edu', 'M', 'Sanli', 'China', 'Digitube', '22018.66'),
(4, 'Reina', 'Borth', 'rborth3@furl.net', 'F', 'Vysokovsk', 'Russia', 'Jaxspan', '11064.27'),
(5, 'Gwenny', 'Burnhill', 'gburnhill4@nature.com', 'F', 'El Puente', 'Honduras', 'Thoughtstorm', '19942.83'),
(6, 'Sindee', 'Lavington', 'slavington5@howstuffworks.com', 'F', 'El Valle del Espíritu Santo', 'Venezuela', 'Jayo', '6907.48'),
(7, 'Ingamar', 'Ewdale', 'iewdale6@drupal.org', 'M', 'Paris 19', 'France', 'Eare', '18069.60'),
(8, 'Waverly', 'Vassbender', 'wvassbender7@nba.com', 'M', 'Xiakou', 'China', 'Digitube', '15995.70'),
(9, 'Dunstan', 'Wakeling', 'dwakeling8@wsj.com', 'M', 'Kakata', 'Liberia', 'Devshare', '11287.61'),
(10, 'Forrester', 'Ciccottio', 'fciccottio9@dot.gov', 'M', 'Chaoyang', 'China', 'Kayveo', '17309.69'),
(11, 'Erick', 'Cosgrive', 'ecosgrivea@sakura.ne.jp', 'M', 'Q?z?lhac?l?', 'Azerbaijan', 'Jabbertype', '16813.80'),
(12, 'Trish', 'Oleszczak', 'toleszczakb@foxnews.com', 'F', 'Meicheng', 'China', 'Abatz', '16158.43'),
(13, 'Ewart', 'Tittershill', 'etittershillc@printfriendly.com', 'M', 'Mogapinyana', 'Botswana', 'Fiveclub', '15565.55'),
(14, 'Bethena', 'Hatherley', 'bhatherleyd@amazon.de', 'F', 'Taiyuan', 'China', 'Eidel', '7293.70'),
(15, 'Sullivan', 'Brookwood', 'sbrookwoode@examiner.com', 'M', 'Yandian', 'China', 'Gigashots', '8966.21'),
(16, 'Fritz', 'McGrath', 'fmcgrathf@amazon.co.uk', 'M', 'Sagud-Bahley', 'Philippines', 'Vidoo', '18799.62'),
(17, 'Audie', 'Andric', 'aandricg@sciencedaily.com', 'F', 'Malpique', 'Portugal', 'Livetube', '3589.92'),
(18, 'Holly', 'Bainbrigge', 'hbainbriggeh@sogou.com', 'M', 'Sherbrooke', 'Canada', 'Babblestorm', '15231.44'),
(19, 'Welsh', 'Duncklee', 'wdunckleei@wunderground.com', 'M', 'Tiaong', 'Philippines', 'Kwideo', '2393.28'),
(20, 'Ivar', 'Shugg', 'ishuggj@imdb.com', 'M', 'Baiguo', 'China', 'Blogtags', '19440.66'),
(21, 'Rex', 'Calliss', 'rcallissk@twitter.com', 'M', 'Ningan', 'China', 'Vitz', '12263.33'),
(22, 'Jecho', 'Saye', 'jsayel@businesswire.com', 'M', 'Anilao', 'Philippines', 'Dynazzy', '6863.78'),
(23, 'Horten', 'Downgate', 'hdowngatem@usnews.com', 'M', 'Buenos Aires', 'Peru', 'Brainlounge', '11649.80'),
(24, 'Daphna', 'Dey', 'ddeyn@illinois.edu', 'F', 'Urshelskiy', 'Russia', 'Topicstorm', '10758.83'),
(25, 'Rebeka', 'Firmage', 'rfirmageo@nationalgeographic.com', 'F', 'Apongo', 'Peru', 'Fanoodle', '21634.87'),
(26, 'Zelda', 'Bollands', 'zbollandsp@google.com.br', 'F', 'Souto de Cima', 'Portugal', 'Feedbug', '18322.19'),
(27, 'Paige', 'Layton', 'playtonq@nature.com', 'F', 'Charyshskoye', 'Russia', 'JumpXS', '8340.03'),
(28, 'Sharla', 'Buddington', 'sbuddingtonr@goo.ne.jp', 'F', 'Glogovac', 'Kosovo', 'Photobean', '13708.03'),
(29, 'Ashleigh', 'Liebrecht', 'aliebrechts@123-reg.co.uk', 'F', 'Zhenxing', 'China', 'Zoovu', '15088.09'),
(30, 'Cora', 'Yashaev', 'cyashaevt@ow.ly', 'F', 'Kali', 'Indonesia', 'Ailane', '21017.88'),
(31, 'Pincus', 'Sexten', 'psextenu@seesaa.net', 'M', 'Halimaung Jaya (F-3)', 'Indonesia', 'Quire', '2765.45'),
(32, 'Olag', 'Tomasini', 'otomasiniv@4shared.com', 'M', 'Kungshamn', 'Sweden', 'Jabberstorm', '9753.25'),
(33, 'Ruggiero', 'Mallard', 'rmallardw@youtu.be', 'M', 'Patsi', 'Comoros', 'Photobean', '8544.99'),
(34, 'Fawn', 'Jakucewicz', 'fjakucewiczx@independent.co.uk', 'F', 'Cabanbanan', 'Philippines', 'Skipstorm', '19717.65'),
(35, 'Fredrika', 'Learmonth', 'flearmonthy@storify.com', 'F', 'Prómachoi', 'Greece', 'Wordify', '3718.37'),
(36, 'Viviana', 'Kubyszek', 'vkubyszekz@fema.gov', 'F', 'Colegiales', 'Argentina', 'Feedbug', '16320.97'),
(37, 'Roslyn', 'Laetham', 'rlaetham10@nasa.gov', 'F', 'Petare', 'Venezuela', 'Blogpad', '7560.42'),
(38, 'Shaughn', 'Dallaghan', 'sdallaghan11@hc360.com', 'M', 'Hougang', 'China', 'Quire', '3448.31'),
(39, 'Johannes', 'Renner', 'jrenner12@washingtonpost.com', 'M', 'Koh Kong', 'Cambodia', 'Skyba', '5384.49'),
(40, 'Natal', 'Iacoboni', 'niacoboni13@scribd.com', 'M', 'Al Maj?ridah', 'Saudi Arabia', 'Thoughtmix', '14584.88'),
(41, 'Sonia', 'Raubenheimer', 'sraubenheimer14@domainmarket.com', 'F', 'Chenfangji', 'China', 'Voomm', '22943.09'),
(42, 'Brose', 'Moneypenny', 'bmoneypenny15@aboutads.info', 'M', 'Funaishikawa', 'Japan', 'Abatz', '12643.81'),
(43, 'Curtis', 'Saveall', 'csaveall16@stumbleupon.com', 'M', 'Krajan Satu', 'Indonesia', 'Avavee', '17626.62'),
(44, 'Jonas', 'Castillou', 'jcastillou17@ft.com', 'M', 'Wanghu', 'China', 'Youtags', '9400.01'),
(45, 'Doralynn', 'Thoresby', 'dthoresby18@macromedia.com', 'F', 'Zhuli', 'China', 'Photofeed', '14475.70'),
(46, 'Nat', 'Martinets', 'nmartinets19@scientificamerican.com', 'F', 'Klagenfurt am Wörthersee', 'Austria', 'Brightdog', '5768.19'),
(47, 'Reinhold', 'Cosans', 'rcosans1a@smh.com.au', 'M', 'Cabeça Gorda', 'Portugal', 'Tagchat', '15893.60'),
(48, 'Emiline', 'Arton', 'earton1b@un.org', 'F', 'Buin', 'Chile', 'Abata', '3610.05'),
(49, 'Rad', 'Sporner', 'rsporner1c@noaa.gov', 'M', 'Lagunas', 'Peru', 'Realbuzz', '17476.61'),
(50, 'Freemon', 'Cankett', 'fcankett1d@networksolutions.com', 'M', 'Komsomolets', 'Russia', 'Meejo', '19144.88'),
(51, 'Orazio', 'McCord', 'omccord1e@twitpic.com', 'M', 'Gambut', 'Indonesia', 'Blognation', '9925.70'),
(52, 'Tymon', 'Tacon', 'ttacon1f@slideshare.net', 'M', 'Iyo', 'Japan', 'Flashpoint', '9661.26'),
(53, 'Malvin', 'Kemp', 'mkemp1g@de.vu', 'M', 'Antalaha', 'Madagascar', 'Feedbug', '18799.09'),
(54, 'Loree', 'Reinbeck', 'lreinbeck1h@cbc.ca', 'F', 'Manwakh', 'Yemen', 'Gabspot', '4527.48'),
(55, 'Witty', 'MacArthur', 'wmacarthur1i@about.com', 'M', 'Rosmalen', 'Netherlands', 'Rhynyx', '5623.15'),
(56, 'Angel', 'Gladeche', 'agladeche1j@time.com', 'F', 'Hetang', 'China', 'Oyoyo', '18332.04'),
(57, 'Fabe', 'Spinks', 'fspinks1k@edublogs.org', 'M', 'Yemva', 'Russia', 'Photofeed', '12532.79'),
(58, 'Annabel', 'Zellner', 'azellner1l@domainmarket.com', 'F', 'Huangtudian', 'China', 'Kanoodle', '13943.24'),
(59, 'Keith', 'Annott', 'kannott1m@oakley.com', 'M', 'Bajiao', 'China', 'Buzzdog', '4410.56'),
(60, 'Barb', 'Ezzy', 'bezzy1n@bizjournals.com', 'F', 'Marcovia', 'Honduras', 'Youspan', '20713.23'),
(61, 'Hewett', 'Pirot', 'hpirot1o@fda.gov', 'M', 'Dongzha', 'China', 'Kanoodle', '13646.56'),
(62, 'Terencio', 'Mayho', 'tmayho1p@washingtonpost.com', 'M', 'Marinilla', 'Colombia', 'Jamia', '12056.37'),
(63, 'Wheeler', 'Woodrow', 'wwoodrow1q@qq.com', 'M', 'Seymchan', 'Russia', 'Meevee', '20567.28'),
(64, 'Mike', 'McArte', 'mmcarte1r@npr.org', 'M', 'Shumikha', 'Russia', 'Edgetag', '17891.92'),
(65, 'Patricio', 'Ansell', 'pansell1s@dedecms.com', 'M', 'Wangcheng', 'China', 'Trunyx', '12804.31'),
(66, 'Trace', 'Caspell', 'tcaspell1t@flickr.com', 'M', 'Rasshevatskaya', 'Russia', 'Shufflebeat', '6448.66'),
(67, 'Pieter', 'Twigley', 'ptwigley1u@businessinsider.com', 'M', 'Dairiti', 'Indonesia', 'Izio', '7286.36'),
(68, 'Bevan', 'Bussons', 'bbussons1v@microsoft.com', 'M', 'Bellavista', 'Peru', 'Yodo', '8659.65'),
(69, 'Tish', 'Brimelow', 'tbrimelow1w@shinystat.com', 'F', 'Pereiras', 'Portugal', 'Bluezoom', '17390.19'),
(70, 'Helge', 'Casarili', 'hcasarili1x@dyndns.org', 'F', 'Amu Gulang Baolige', 'China', 'Divavu', '14122.44'),
(71, 'Ange', 'Pocke', 'apocke1y@facebook.com', 'F', 'Gelsenkirchen', 'Germany', 'Flipbug', '19835.99'),
(72, 'Kim', 'Amps', 'kamps1z@deliciousdays.com', 'F', 'Perivólia', 'Cyprus', 'Trunyx', '3382.80'),
(73, 'Blakeley', 'Zannuto', 'bzannuto20@ask.com', 'F', 'Bateria', 'Philippines', 'Flashpoint', '8927.97'),
(74, 'Tatum', 'Birrel', 'tbirrel21@simplemachines.org', 'F', '?zu', 'Japan', 'Cogibox', '15852.15'),
(75, 'Winona', 'Thieme', 'wthieme22@diigo.com', 'F', 'Xinsheng', 'China', 'Kwideo', '21549.45'),
(76, 'Yves', 'Nowaczyk', 'ynowaczyk23@google.nl', 'M', 'Dongdu', 'China', 'Skibox', '18994.95'),
(77, 'Riannon', 'Danford', 'rdanford24@chronoengine.com', 'F', 'Mahaddayweyne', 'Somalia', 'Realblab', '1684.90'),
(78, 'Shirl', 'Gradon', 'sgradon25@arizona.edu', 'F', 'Zitong', 'China', 'Cogibox', '16774.53'),
(79, 'Ruthe', 'McKinna', 'rmckinna26@exblog.jp', 'F', 'Pingyang', 'China', 'Skiptube', '19302.47'),
(80, 'Keriann', 'Dorrell', 'kdorrell27@mapquest.com', 'F', 'Santa Gertrudes', 'Brazil', 'Kwilith', '10732.53'),
(81, 'Richmond', 'Grainger', 'rgrainger28@studiopress.com', 'M', 'Aileu', 'East Timor', 'Rooxo', '22174.02'),
(82, 'Danny', 'Sauniere', 'dsauniere29@ucoz.ru', 'M', 'Sayansk', 'Russia', 'Jaloo', '17532.83'),
(83, 'Rois', 'Rude', 'rrude2a@ebay.co.uk', 'F', 'Lewin K?odzki', 'Poland', 'Voomm', '9878.99'),
(84, 'Vina', 'Snelgrove', 'vsnelgrove2b@cam.ac.uk', 'F', 'Serrana', 'Brazil', 'Trudoo', '20864.06'),
(85, 'Siward', 'Sheering', 'ssheering2c@pen.io', 'M', 'Kete Krachi', 'Ghana', 'Jabbertype', '10907.23'),
(86, 'Bat', 'Bartens', 'bbartens2d@storify.com', 'M', 'Mandaon', 'Philippines', 'Babblestorm', '3840.60'),
(87, 'Codee', 'Poad', 'cpoad2e@wikimedia.org', 'F', 'Beranci', 'Macedonia', 'Youtags', '5576.22'),
(88, 'Ronnica', 'Lake', 'rlake2f@who.int', 'F', 'Maisí', 'Cuba', 'Lazzy', '8331.90'),
(89, 'Mandie', 'Mustin', 'mmustin2g@vkontakte.ru', 'F', 'Tammela', 'Finland', 'Rhycero', '14215.93'),
(90, 'Gardiner', 'Beesley', 'gbeesley2h@bizjournals.com', 'M', 'Carvalhal', 'Portugal', 'Midel', '9887.50'),
(91, 'Levy', 'Foston', 'lfoston2i@bluehost.com', 'M', 'Shuicha', 'China', 'Flashpoint', '20810.32'),
(92, 'Minna', 'Childes', 'mchildes2j@rediff.com', 'F', 'Tuochuan', 'China', 'Blogtag', '19433.39'),
(93, 'Brigid', 'Brolly', 'bbrolly2k@fc2.com', 'F', 'Kit?f', 'Yemen', 'Thoughtbeat', '6286.70'),
(94, 'Jillene', 'McIlhagga', 'jmcilhagga2l@moonfruit.com', 'F', 'Bogoria', 'Poland', 'Centidel', '1434.66'),
(95, 'Heath', 'De Ambrosi', 'hdeambrosi2m@imgur.com', 'M', 'Alilem', 'Philippines', 'Twitterbeat', '7832.05'),
(96, 'Mahmoud', 'Edscer', 'medscer2n@ftc.gov', 'M', 'Karjalohja', 'Finland', 'Pixonyx', '5360.19'),
(97, 'Syman', 'Brelsford', 'sbrelsford2o@homestead.com', 'M', 'Alejandro Roca', 'Argentina', 'Mycat', '18801.65'),
(98, 'Graeme', 'Driver', 'gdriver2p@behance.net', 'M', 'Shitang', 'China', 'Zazio', '7491.49'),
(99, 'Donall', 'Boscher', 'dboscher2q@webnode.com', 'M', 'Jiangya', 'China', 'Feedspan', '22894.64'),
(100, 'Uriel', 'Congreve', 'ucongreve2r@sina.com.cn', 'M', 'Salmi', 'Russia', 'Devpoint', '22895.45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
