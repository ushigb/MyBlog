-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 окт 2022 в 17:46
-- Версия на сървъра: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_login`
--

-- --------------------------------------------------------

--
-- Структура на таблица `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `datePosted` datetime NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `comments`
--

INSERT INTO `comments` (`id`, `username`, `content`, `datePosted`, `post_id`) VALUES
(1, 'Ivan', '    Lorem ipsum dolor sit amet, vivamus eu etiam, ligula tellus amet vel mus, ridiculus sociosqu varius. Occaecat sed nunc facilisis erat vivamus, wisi fames magna risus purus enim neque, vestibulum leo donec. Ipsum sit suspendisse tempus wisi lectus eros. Porttitor ac amet urna cursus. Eu nullam torquent cras sed ipsum, lectus libero, sodales nullam praesent ut nunc. Faucibus nibh, ligula dui molestie nisl, eget varius, tincidunt sem urna mauris praesent erat, sem feugiat iaculis. Bibendum amet elit, wisi quam ultrices felis nonummy. Arcu maecenas tincidunt nibh, aliquam quis vitae, harum nonummy suscipit et eu aliquam.           ', '2019-11-21 11:53:36', 3),
(2, 'Ivan', '    Cras euismod at vestibulum ac per, libero a, ut pharetra sed molestie porta vel fusce, gravida dignissim erat sem. Fringilla iste erat nec, vitae eleifend ipsum ullamcorper quis nisl nullam. Amet vel, orci sed vestibulum morbi fringilla, massa feugiat sollicitudin. Urna justo sed nec, nam lectus convallis venenatis diam et, dolor risus magna per molestie diam scelerisque. Eget faucibus aliquam, nulla morbi fusce fusce amet lorem, luctus id eget proin mi consectetuer, eget nec turpis, vel arcu amet. Arcu elit a augue quam, augue curabitur sollicitudin orci fusce, et torquent egestas, elit suspendisse vulputate nulla vestibulum. Ligula harum tortor arcu sodales nec, ipsum sociis diam at egestas quisque integer, nonummy est convallis, mi fusce sed nonummy velit, cras praesent consectetuer luctus. Magna ut, lectus cras culpa id, ante egestas turpis mi, dui vestibulum mauris natoque consectetuer a donec. Non hendrerit fusce. Vivamus primis non, primis hac aenean massa dictum. Dictum ipsum eget duis, nibh in ut dui praesent nullam. Suspendisse magna, rhoncus senectus et, mauris libero sed praesent urna augue vestibulum, cras non orci molestie ultrices vel.            ', '2019-11-21 11:54:01', 8),
(3, 'Ivan', '      Lorem ipsum dolor sit amet, doming dignissim ut vix. Ludus maiestatis te duo, pri tota utinam conclusionemque ut, novum erroribus ut has. Ea ius ornatus concludaturque, his in quas voluptatibus, unum tation nostrud mei id. An vix alia ferri decore.          ', '2019-11-21 13:54:59', 2),
(4, 'Ivan', '       flj dfkzsdfh kz shdfkhzkljhv zkjhv lkjzhvkj hzxkvh zkjhvlzjkh v         ', '2019-11-21 15:44:56', 1),
(5, 'Dragan', '     u ahdslkuhad kfh;id v;sh dlfjvhzsjkldfh d           ', '2019-11-21 15:50:33', 6),
(6, 'Ivan', '                gdsthdyfyjnjtfdmgfjmfghdmd', '2019-12-01 10:31:43', 7),
(7, 'Ivan', '                abvazdf dfzxb hzb zfb z', '2019-12-02 07:47:35', 8),
(8, 'Ivan', '                hbd tjdj dcjhjxgh sxnx n', '2019-12-02 07:47:48', 8),
(10, 'Dragan', '                dfgsdgvafbzdfvzdfz  zfg zfbz fb zbzd', '2019-12-02 09:34:34', 8),
(12, 'Ivan', '                faszgdzfbzfbxdgb zbdz bs dbdszf ba', '2019-12-02 09:40:00', 4),
(13, 'Ivan', '                dgbsdf bsd fbsf bsdbsfb', '2019-12-02 09:40:09', 4),
(17, 'Dragan', '                sdfsdf d fasfsz asrg asr', '2019-12-02 12:06:42', 9),
(18, 'Ivan', '                hello :)', '2020-09-11 15:45:01', 8);

-- --------------------------------------------------------

--
-- Структура на таблица `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL DEFAULT 'default_img.png',
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `images`
--

INSERT INTO `images` (`id`, `name`, `post_id`) VALUES
(1, 'postImg/7b0c620393f0d579485c32321b23a283.jpg', 2),
(2, 'postImg/22052009(003).jpg', 2),
(3, 'postImg/4480_orig.jpg', 2),
(4, 'postImg/2dea3a43cdae639d90f579bc23d2dd27.jpg', 1),
(5, 'postImg/8b90ffc6e71b1ef04e424095efbdd61b.jpg', 1),
(6, 'postImg/252892.jpg', 4),
(7, 'postImg/14062009.jpg', 3),
(8, 'postImg/enrique 29.09.2010 139.jpg', 2),
(9, 'postImg/default_img.png', 2),
(10, 'postImg/41e79762d672537f53e46ee3dbfb8281.jpg', 8),
(11, 'postImg/b61f95d50443d6899690e84bcea53e11.jpg', 4);

-- --------------------------------------------------------

--
-- Структура на таблица `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `msgFrom` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `msgTo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `messages`
--

INSERT INTO `messages` (`id`, `msgFrom`, `text`, `msgTo`) VALUES
(1, 'Ivan', 'sfsaas ,gliafilalhgfg sg fgakgfgauk', 'Dragan'),
(2, 'Asq', 'auiuhaidga dagd agdyuagduyg ', 'Dragan'),
(3, 'Asq', 'auiuhaidga dagd agdyuagduyg ', 'Ivan'),
(4, 'Dragan', 'hi how are you', 'Ivan'),
(5, 'Ivan', 'hi how are you', 'Dragan'),
(6, 'Ivan', 'fsagfsrsfjhs fkuhskfh ush lf', 'Dragan'),
(7, 'Dragan', 'dassdsfsvsfvsa', 'Ivan');

-- --------------------------------------------------------

--
-- Структура на таблица `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `post_text` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'No active',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `posts`
--

INSERT INTO `posts` (`id`, `title`, `post_text`, `category`, `status`, `user_id`) VALUES
(1, 'Erat sem habitant', 'Ut convallis facilisis condimentum quia nec. Montes sem nulla. Lacus viverra nulla etiam gravida at sed lacus congue. Quisque eros arcu. Distinctio molestie porttitor dui ultricies mauris velit urna vitae massa eu vel. Amet ut velit lectus porta adipiscing quis id vestibulum. Eget commodo urna porta nam vivamus orci amet eu. Netus arcu porta. Nec amet quisque ultrices elit in in consectetuer amet fermentum fusce ut et amet elit felis phasellus quisque iaculis aliquet porta. Tellus facilisi in molestie ut ipsum nec sed metus maecenas a sed. Hendrerit a consectetuer. Vitae vitae etiam. Dapibus felis urna. Et purus vitae integer consequat enim. Lorem ante sit mi suspendisse ut erat qui imperdiet. Inceptos eget tellus. Proin et massa. Consectetuer eget dictum mauris dui a. Ultricies nunc donec. Aenean laoreet mauris. Enim urna in eget mattis duis. Interdum magna vitae ac nunc praesent. Dui a pulvinar ullamcorper mi in. Congue in justo. Urna a mauris neque porttitor sollicitudin. Fusce vitae consequat. Wisi penatibus elit mauris nulla donec in wisi ut. Vestibulum vitae faucibus proin in venenatis. Porttitor cursus pellentesque.', 'sport', 'Active', 1),
(2, 'Curabitur auctor risus', 'Donec fusce vitae vestibulum a integer mauris faucibus luctus et varius odio. Purus tempus ut. Feugiat aenean quam. Maecenas mi praesent. Urna vestibulum felis amet rutrum eget nihil euismod praesent at diam pellentesque. Vulputate elementum libero felis elementum nullam molestie diam est non sit vulputate. Convallis enim maecenas dui molestie tortor penatibus id ante massa nec gravida ante vestibulum lobortis etiam et sed. Non ipsum pellentesque. Neque sed turpis. Condimentum ipsum dui. Libero wisi aliquam ornare nunc morbi. Nec ac enim. Et duis ut. A etiam odio.', 'social', 'Active', 1),
(3, 'Urna eu ligula', 'Urna eu ligula. Amet erat neque tellus suspendisse feugiat odio eget justo. Aenean eleifend dolor. Duis maecenas potenti dictum porta adipiscing in mauris ac pellentesque id urna. Ultricies fames ut.', 'movie', 'Active', 2),
(4, 'Lorem ipsum dolor sit amet', 'Mauris ac ullamcorper mauris non elementum. Fusce id sed. Nec pulvinar placerat diam habitasse justo lacinia arcu sed. Tempor sit in nonummy magna orci ipsum in nunc. Leo neque lacus. Erat quis tortor justo tellus mauris. Elit provident pellentesque auctor ac ipsum cursus temporibus duis sapien massa turpis non adipiscing tincidunt dis mus etiam. Magna sollicitudin eu ipsum at praesent non tellus a. Dui dignissim vitae. Eu integer eu. Ut mi tempor nulla eu id. Pellentesque ipsum dui. Massa vitae tincidunt. Faucibus porta sed wisi mauris dolor erat at in class quis ad facilisis integer id quam dolor rutrum. Aptent vestibulum justo. Quis pede enim. Ac velit leo. Pretium ridiculus vitae. Nec eros nullam felis porttitor fermentum eu semper class. Proin et aliquam. Nec sodales vitae. Eget nunc egestas. Eros in vestibulum.', 'music', 'Active', 2),
(5, 'Pretium ridiculus in commodo', 'Pretium ridiculus in commodo iaculis nam sed etiam donec. Ante veritatis rhoncus. Risus tortor mattis. Nulla felis ut quae enim libero. Praesent sed eget eu eu at nec condimentum nulla. Parturient arcu dolor. Suscipit diam fermentum vitae sollicitudin nibh pharetra velit nulla. In lectus consequat. Metus dolor nec imperdiet lorem gravida sed dolor vel odio justo est. Corrupti vitae turpis.', 'nature', 'Active', 2),
(6, 'Consequat eu ut', 'Vel ac nunc. Integer nec pretium. Molestie purus sit posuere eget massa id nec platea est nulla magna varius arcu etiam. Litora rutrum a. Lorem quisque deserunt integer nec curabitur id faucibus sed. Velit non dictumst vestibulum venenatis in. Nibh eu mollis tincidunt laudantium minus id dolor mattis nec ante vitae. Eget ultrices lectus. Sint vel sed eleifend mauris duis volutpat nunc enim. Odio suscipit fermentum. Hendrerit justo velit wisi quisque elementum fusce at facilisi tempor gravida eleifend. Libero lacus elit. Aliquam eget aptent. Velit pede ultricies.', 'history', 'Active', 3),
(7, 'Lorem ipsum', 'Lorem ipsum dolor sit amet sed neque vitae a. Rem ut velit. Eu curabitur maecenas. Ullamcorper phasellus duis. Et sed amet facilisi et ipsum ligula in ipsum orci mollis at.', 'sport', 'Active', 3),
(8, 'Mi pede ipsum vel eu vestibulum', 'Rutrum rhoncus diam erat pellentesque volutpat. Aliquam lacinia at mollis dui condimentum maecenas nulla sed. Tincidunt ipsum vivamus lacinia sed ut. Sit dolor vel vehicula mauris sollicitudin. Convallis id odio faucibus blandit pellentesque aliquam id enim. Morbi luctus vel turpis odio nulla quam morbi dolor ut dictum mi. Egestas nulla pellentesque. Nam fermentum congue nunc sed tempor vulputate vivamus faucibus at posuere et enim a quis. Vehicula proin vitae. Ante adipiscing morbi sapien diam varius et at lobortis litora pede sed. Nam scelerisque sit. Taciti sem aspernatur. Dolor vulputate aptent nisl laoreet quis. In neque blandit a gravida ultricies. Scelerisque massa sed nulla maecenas duis. Adipiscing pretium auctor. Porttitor sit at. Porta magna placerat. Erat viverra amet ligula mollis duis. Quam varius non amet quis vitae amet elementum amet. Sollicitudin augue quis. Vitae ultricies lacus aenean mi tellus et donec mollis. Vitae id earum. Sollicitudin elit aliquet elit nibh ullamco. Eget sociis non. Fusce nibh quisque tincidunt vestibulum est duis vel mi lacinia primis augue. At tincidunt facilisis. Id vel id. Et pulvinar leo.', 'history', 'Active', 3),
(9, 'dasdasda', 'fadadfsdafasfsafasdfgasgasgasefwgsfg', 'sport', 'Active', 1),
(10, 'fsdgsg', 'sfgsdfgatdhgdghsdgsd', 'movie', 'Active', 1);

-- --------------------------------------------------------

--
-- Структура на таблица `post_images`
--

CREATE TABLE `post_images` (
  `id` int(11) NOT NULL,
  `post_id` tinyint(4) NOT NULL,
  `images_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `post_images`
--

INSERT INTO `post_images` (`id`, `post_id`, `images_id`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 2, 3),
(4, 1, 4),
(5, 1, 5),
(6, 4, 6),
(7, 3, 7),
(8, 2, 8),
(9, 2, 9),
(10, 8, 10),
(11, 4, 11);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'No active',
  `profilePic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`, `status`, `profilePic`) VALUES
(1, 'Ivan', 'Ushi15@abv.bg', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Active', 'profileImg/7b0c620393f0d579485c32321b23a283.jpg'),
(2, 'Dragan', 'aaaa@aaa.aaa', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Active', 'profileImg/FB_IMG_1538844884313.jpg'),
(3, 'Ushi', 'kkkkk@bbb.bbb', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'Active', 'img/IMG_20180508_092853.jpg'),
(4, 'Petio', 'sano@sano.com', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'Active', ''),
(5, 'Asq', 'asq@asq.bg', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'Active', 'profileImg/FB_IMG_1540145288604.jpg'),
(6, 'ushi15', 'aaa@abv.bg', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'No active', 'profileImg/ÐºÑŠÑÐ¸-Ð¼ÑŠÐ¶ÐºÐ¸-Ð¿Ñ€Ð¸Ñ‡ÐµÑÐºÐ¸-8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
