-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 02:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `race_educare`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(155) NOT NULL,
  `author` varchar(155) NOT NULL,
  `blogImage` varchar(155) NOT NULL,
  `blogContent` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `author`, `blogImage`, `blogContent`, `created_at`) VALUES
(4, 'Bollywood Blog', 'Anish', 'blog-83623.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem sem, faucibus vitae scelerisque eget, ultricies ac nulla. Praesent condimentum lacus et ligula feugiat fringilla. Ut convallis tincidunt fermentum. Morbi sit amet sagittis urna, sed efficitur velit. Sed condimentum mauris mollis, malesuada nisi in, commodo sem. Phasellus metus purus, tempor at ante vel, dapibus dignissim lacus. Mauris feugiat, tellus quis tempus egestas, metus risus pharetra tellus, nec consequat risus risus eu nulla. Aliquam vel enim sit amet massa aliquet commodo molestie dapibus odio. Nunc lacus nunc, dictum sed sodales tincidunt, scelerisque id magna. Quisque eu urna eu leo faucibus posuere ac sit amet ex. Proin justo augue, sollicitudin ac dolor nec, scelerisque faucibus ante. Praesent fringilla mauris sit amet turpis consequat, eget ultricies augue aliquam. Sed feugiat ornare neque, sit amet bibendum orci malesuada eget. Nulla porta felis vel venenatis sodales.\r\n\r\nAenean maximus scelerisque rutrum. Integer sodales sed est sed finibus. Integer sed risus ac ex suscipit rutrum. Nam vulputate ipsum eget aliquam volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean nisi ex, mattis et nisl a, efficitur varius odio. Phasellus ultricies semper eros vel cursus. Phasellus a nulla eget justo semper dapibus. Vivamus blandit at enim at viverra.\r\n\r\nNullam tincidunt lorem sit amet ex vehicula consequat. Vestibulum at sapien ipsum. Proin vel sem id felis molestie facilisis. Nunc ultricies imperdiet rutrum. Aliquam eu nulla non mi pharetra accumsan. Phasellus condimentum, nibh non finibus tempor, eros ante iaculis nunc, porttitor egestas lectus est non arcu. Aliquam non pretium purus, nec viverra mauris. Nulla eleifend, mi a tempus dignissim, velit leo suscipit ligula, nec fermentum nulla nibh sit amet ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\nVestibulum odio ligula, auctor vitae tellus ac, laoreet tempor enim. Nullam eu facilisis libero. Nam maximus nec nisi quis consequat. Sed lacinia elit sed nisi molestie varius. Nunc sit amet velit eget nisi pharetra commodo. Quisque volutpat cursus neque, et varius nibh cursus vitae. Fusce mattis, nunc nec venenatis aliquam, libero diam imperdiet enim, vestibulum tincidunt lectus sapien at nulla. Maecenas malesuada risus id lectus vehicula ornare. Proin ac malesuada nisi, eget tincidunt orci. Aliquam laoreet augue vel nibh ullamcorper sodales. Vestibulum ac massa tellus.\r\n\r\nIn pulvinar dolor eu eros volutpat, et ornare ex porta. Duis varius lacinia odio nec blandit. Aliquam erat volutpat. Pellentesque congue faucibus orci, a venenatis metus volutpat non. Cras dapibus porttitor tortor, at cursus lacus pellentesque in. In quis vestibulum lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed purus lectus, tempor vitae velit id, malesuada congue nisi. In hac habitasse platea dictumst. Integer suscipit pretium ante, feugiat dictum tellus blandit vitae. Vestibulum fringilla urna vitae elit congue porttitor eget eget metus. Pellentesque euismod ac eros vel sagittis. Vestibulum euismod dictum erat, a semper quam rutrum quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam in erat bibendum ex luctus auctor.', '2024-04-19 10:06:39'),
(5, 'First Blog Test', 'Anish Karki', 'blog-72290.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet tristique nunc. Fusce venenatis leo sit amet nisi malesuada, non pharetra magna porta. In hac habitasse platea dictumst. Morbi mattis iaculis libero at dictum. Fusce eu sem convallis, euismod nibh non, laoreet dui. Curabitur mauris quam, porttitor vitae pharetra ac, malesuada sit amet nisi. Etiam nec urna at enim tincidunt varius ultricies at lorem. Nulla consequat fringilla sem, at dapibus tortor rutrum vitae. Nunc quis enim placerat, tristique lectus eleifend, vehicula purus. Proin nulla nibh, semper non bibendum sed, fermentum tristique dolor. Vivamus id condimentum urna, in ultrices nisl.\r\n\r\nCurabitur venenatis turpis est, ac rutrum ipsum suscipit nec. Praesent ac neque pretium, pharetra dui vitae, molestie nibh. Ut id urna est. Nunc ornare leo eu sem dapibus feugiat. Fusce placerat odio a lectus porta facilisis. Vivamus scelerisque eleifend felis, quis gravida diam vestibulum id. Sed aliquam lorem consectetur ex maximus, a hendrerit turpis viverra. Integer nibh massa, lacinia quis luctus id, tincidunt condimentum enim. Nulla porttitor ultricies tellus, eget mattis mauris dapibus eget. Praesent facilisis id quam at condimentum. Aliquam iaculis orci tincidunt elit hendrerit auctor. Donec ac eleifend elit, nec finibus ipsum. Curabitur ipsum quam, dapibus nec auctor sit amet, suscipit ac tellus. Integer rhoncus pretium sem nec pulvinar. Vivamus convallis, justo iaculis tempus efficitur, ipsum dolor tempor lorem, condimentum porta nisi velit vel massa.\r\n\r\nNullam volutpat neque sed nisl commodo ultrices. Nam varius, massa a ornare vehicula, eros nisi ornare nibh, in egestas leo risus vitae odio. Proin tempus libero commodo metus varius lobortis. Phasellus nibh eros, pharetra vel interdum non, accumsan at massa. Curabitur euismod magna eget nulla fermentum volutpat maximus vel libero. Morbi posuere metus quam, ut sagittis velit mattis at. Duis bibendum sagittis laoreet. Praesent vel fermentum libero. Nullam dictum varius enim. Aliquam erat volutpat. Nulla nulla arcu, consectetur sed tincidunt nec, blandit eget est. Aliquam arcu odio, eleifend id lacinia in, fermentum vitae nisi. Nulla mollis justo rhoncus blandit suscipit. Vestibulum vitae metus id mauris imperdiet suscipit. Morbi at feugiat lorem.\r\n\r\nCurabitur faucibus vel lacus pulvinar hendrerit. In sed enim a turpis viverra egestas. Duis et ultrices nulla. Cras et volutpat nulla. Suspendisse in congue libero. Aliquam erat volutpat. Aenean accumsan ligula quis eleifend ullamcorper. Ut tristique viverra imperdiet. Ut rutrum diam eget ligula dapibus consequat. Aliquam ac gravida urna. Pellentesque in facilisis dolor. Vestibulum sit amet aliquet nulla, volutpat ultricies sem. Donec vitae ligula ut purus condimentum posuere quis nec augue. Vivamus ut blandit neque.\r\n\r\nFusce tristique purus eu lacus lacinia vehicula. Sed scelerisque arcu laoreet, gravida nisi nec, tincidunt nisl. Integer sed hendrerit nunc. Morbi egestas orci sapien, sit amet mollis ligula elementum ut. Etiam aliquet vitae ipsum sit amet placerat. Quisque at rutrum ex, sit amet efficitur tortor. Etiam at augue sodales, pharetra turpis quis, blandit nunc. Praesent in nunc lorem. Praesent pretium, sapien porta fermentum placerat, arcu dui sagittis mi, at vehicula metus urna ut leo. Etiam vitae enim diam.', '2024-04-19 13:31:53'),
(6, 'First Blog Test', 'Anish Karki', 'blog-31281.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet tristique nunc. Fusce venenatis leo sit amet nisi malesuada, non pharetra magna porta. In hac habitasse platea dictumst. Morbi mattis iaculis libero at dictum. Fusce eu sem convallis, euismod nibh non, laoreet dui. Curabitur mauris quam, porttitor vitae pharetra ac, malesuada sit amet nisi. Etiam nec urna at enim tincidunt varius ultricies at lorem. Nulla consequat fringilla sem, at dapibus tortor rutrum vitae. Nunc quis enim placerat, tristique lectus eleifend, vehicula purus. Proin nulla nibh, semper non bibendum sed, fermentum tristique dolor. Vivamus id condimentum urna, in ultrices nisl.\r\n\r\nCurabitur venenatis turpis est, ac rutrum ipsum suscipit nec. Praesent ac neque pretium, pharetra dui vitae, molestie nibh. Ut id urna est. Nunc ornare leo eu sem dapibus feugiat. Fusce placerat odio a lectus porta facilisis. Vivamus scelerisque eleifend felis, quis gravida diam vestibulum id. Sed aliquam lorem consectetur ex maximus, a hendrerit turpis viverra. Integer nibh massa, lacinia quis luctus id, tincidunt condimentum enim. Nulla porttitor ultricies tellus, eget mattis mauris dapibus eget. Praesent facilisis id quam at condimentum. Aliquam iaculis orci tincidunt elit hendrerit auctor. Donec ac eleifend elit, nec finibus ipsum. Curabitur ipsum quam, dapibus nec auctor sit amet, suscipit ac tellus. Integer rhoncus pretium sem nec pulvinar. Vivamus convallis, justo iaculis tempus efficitur, ipsum dolor tempor lorem, condimentum porta nisi velit vel massa.\r\n\r\nNullam volutpat neque sed nisl commodo ultrices. Nam varius, massa a ornare vehicula, eros nisi ornare nibh, in egestas leo risus vitae odio. Proin tempus libero commodo metus varius lobortis. Phasellus nibh eros, pharetra vel interdum non, accumsan at massa. Curabitur euismod magna eget nulla fermentum volutpat maximus vel libero. Morbi posuere metus quam, ut sagittis velit mattis at. Duis bibendum sagittis laoreet. Praesent vel fermentum libero. Nullam dictum varius enim. Aliquam erat volutpat. Nulla nulla arcu, consectetur sed tincidunt nec, blandit eget est. Aliquam arcu odio, eleifend id lacinia in, fermentum vitae nisi. Nulla mollis justo rhoncus blandit suscipit. Vestibulum vitae metus id mauris imperdiet suscipit. Morbi at feugiat lorem.\r\n\r\nCurabitur faucibus vel lacus pulvinar hendrerit. In sed enim a turpis viverra egestas. Duis et ultrices nulla. Cras et volutpat nulla. Suspendisse in congue libero. Aliquam erat volutpat. Aenean accumsan ligula quis eleifend ullamcorper. Ut tristique viverra imperdiet. Ut rutrum diam eget ligula dapibus consequat. Aliquam ac gravida urna. Pellentesque in facilisis dolor. Vestibulum sit amet aliquet nulla, volutpat ultricies sem. Donec vitae ligula ut purus condimentum posuere quis nec augue. Vivamus ut blandit neque.\r\n\r\nFusce tristique purus eu lacus lacinia vehicula. Sed scelerisque arcu laoreet, gravida nisi nec, tincidunt nisl. Integer sed hendrerit nunc. Morbi egestas orci sapien, sit amet mollis ligula elementum ut. Etiam aliquet vitae ipsum sit amet placerat. Quisque at rutrum ex, sit amet efficitur tortor. Etiam at augue sodales, pharetra turpis quis, blandit nunc. Praesent in nunc lorem. Praesent pretium, sapien porta fermentum placerat, arcu dui sagittis mi, at vehicula metus urna ut leo. Etiam vitae enim diam.', '2024-04-19 13:32:35'),
(7, 'Hello World', 'Anish Karki', 'blog-74711.png', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pulvinar tincidunt gravida. Maecenas tempor nisl at dapibus accumsan. Sed posuere urna a eros pellentesque, eu laoreet neque sagittis. Sed mollis nisl in rutrum varius. Cras ut arcu eu ligula consequat lacinia nec id elit. Proin a feugiat odio. Duis viverra nisl felis, quis sollicitudin nunc tristique ac. Sed tristique, tellus non efficitur vulputate, eros sem hendrerit ex, sit amet venenatis ex augue ut risus. Vestibulum feugiat libero a augue sodales, ac porttitor felis gravida.</p><p>Ut vitae convallis neque. Vivamus dui diam, pharetra non quam in, auctor semper urna. Phasellus dapibus ex mauris, quis tempor eros elementum vel. Ut eu dui ut erat ultricies ullamcorper. Praesent arcu dolor, posuere at volutpat eu, fringilla ac felis. Sed dolor neque, placerat eu ex quis, aliquet egestas ante. Donec tincidunt nibh at dui aliquet vulputate.</p><p>Aenean dapibus leo nisl, ac tincidunt odio imperdiet vitae. Sed a fringilla eros, nec iaculis erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis vitae tellus sit amet ex pulvinar suscipit. Donec in sem velit. Nam ac urna sit amet diam accumsan malesuada a sed orci. In at velit eget felis ornare egestas a et neque. Proin euismod eros ipsum, a fringilla ligula varius ac. Vestibulum laoreet tellus lacinia commodo suscipit. Cras fringilla nec lorem sed suscipit. Nunc feugiat ante a ligula viverra, a volutpat leo vestibulum. Sed mattis tortor non posuere porta. Vivamus sollicitudin id sapien sed maximus. Aliquam risus risus, pharetra sed maximus condimentum, cursus a nisi. Etiam ultrices viverra consequat. Sed ullamcorper et urna nec convallis.</p><p>Sed condimentum dolor ut tincidunt accumsan. Nam viverra finibus neque, sit amet fermentum ante fringilla nec. Curabitur vestibulum dignissim nunc accumsan maximus. Suspendisse potenti. Maecenas vitae leo ullamcorper, rutrum enim ac, condimentum felis. In lectus nisl, pellentesque eu odio vitae, molestie interdum lectus. Ut vel massa ut lectus efficitur tempus sed et ante.</p><p>Nullam molestie vehicula eleifend. Nam eget eros massa. Donec quis tellus ac sem lobortis accumsan nec quis eros. Morbi molestie mattis purus ac ullamcorper. Nullam ut massa metus. Nulla ac lacus et eros accumsan bibendum. Morbi ut lectus feugiat, laoreet est a, commodo massa.</p>', '2024-04-20 01:50:21'),
(8, 'ahsbdhab', 'sdajhnjabd', 'blog-70958.png', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer odio metus, dignissim quis ante finibus, ultricies sollicitudin metus. Nullam sit amet sem urna. Sed non dolor condimentum, egestas elit ut, congue arcu. Nunc vel dui et ex lacinia elementum ac nec nisl. Etiam imperdiet metus in mi efficitur vulputate. Nunc nisi tortor, commodo et sem eu, posuere tempus tortor. In ac ante velit. Phasellus facilisis nisi quis dolor lacinia, non maximus elit euismod. Praesent ex nulla, consequat id pharetra at, laoreet vitae eros. Vivamus a turpis vitae quam volutpat vehicula non quis urna. Nullam sollicitudin et risus in consectetur.</p><p>Mauris enim tellus, aliquet vel arcu sed, laoreet condimentum nunc. Donec sit amet facilisis sem, in pulvinar erat. Maecenas accumsan vulputate dictum. Etiam bibendum porta nibh, ac maximus turpis laoreet et. Nulla dapibus auctor ultricies. Suspendisse potenti. Nullam imperdiet venenatis diam vulputate feugiat. Morbi vitae tortor et lorem vulputate sodales at eget nisi. Quisque auctor justo in risus viverra, facilisis sagittis mauris pretium.</p><p>Phasellus malesuada justo leo, eget vehicula metus sodales non. Praesent sagittis venenatis justo eget ullamcorper. Nunc consectetur at felis in blandit. Curabitur non aliquet lorem, eget mattis neque. Nunc mattis nisl velit, a maximus nisl venenatis eget. Nunc luctus risus a ex dictum vehicula. Nulla nulla ligula, lacinia quis sem porta, volutpat accumsan felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus mattis tellus felis, sit amet tincidunt lacus congue tincidunt. Integer pretium, nunc quis varius efficitur, eros lectus volutpat augue, sed luctus urna eros ut erat. Proin rutrum augue nec velit dapibus, eu lobortis nunc fermentum. Nam congue purus at enim imperdiet sollicitudin. Aenean lobortis turpis at interdum vulputate.</p><p>Nunc condimentum rhoncus congue. Duis eu ante lacus. Integer quis tincidunt nulla. Duis eget tincidunt diam. Aliquam semper ac neque nec elementum. Ut a enim diam. Aliquam ut faucibus metus. Maecenas ac enim tellus. Aenean viverra eu elit sit amet varius. Proin ut sagittis ex. Cras quis cursus risus. Curabitur venenatis urna eu odio fringilla rutrum. Praesent mollis mattis nunc, vitae feugiat lacus consectetur sit amet. Nunc rutrum pulvinar vestibulum. Duis volutpat tortor vel risus faucibus, nec vehicula enim sagittis. Sed vestibulum felis id arcu convallis euismod.</p><p>Proin porttitor molestie tempus. Nunc placerat non magna sit amet blandit. Donec ut mi felis. Proin volutpat blandit arcu sed condimentum. Integer vulputate scelerisque lacinia. Vestibulum eros arcu, convallis sed erat eget, semper scelerisque neque. Praesent imperdiet congue nibh, vel porttitor sem laoreet vitae. Quisque quis tincidunt dui.</p>', '2024-04-20 10:56:09'),
(9, 'kejafhjab', 'wnhbawomn', 'blog-39795.png', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer odio metus, dignissim quis ante finibus, ultricies sollicitudin metus. Nullam sit amet sem urna. Sed non dolor condimentum, egestas elit ut, congue arcu. Nunc vel dui et ex lacinia elementum ac nec nisl. Etiam imperdiet metus in mi efficitur vulputate. Nunc nisi tortor, commodo et sem eu, posuere tempus tortor. In ac ante velit. Phasellus facilisis nisi quis dolor lacinia, non maximus elit euismod. Praesent ex nulla, consequat id pharetra at, laoreet vitae eros. Vivamus a turpis vitae quam volutpat vehicula non quis urna. Nullam sollicitudin et risus in consectetur.</p><p>Mauris enim tellus, aliquet vel arcu sed, laoreet condimentum nunc. Donec sit amet facilisis sem, in pulvinar erat. Maecenas accumsan vulputate dictum. Etiam bibendum porta nibh, ac maximus turpis laoreet et. Nulla dapibus auctor ultricies. Suspendisse potenti. Nullam imperdiet venenatis diam vulputate feugiat. Morbi vitae tortor et lorem vulputate sodales at eget nisi. Quisque auctor justo in risus viverra, facilisis sagittis mauris pretium.</p><p>Phasellus malesuada justo leo, eget vehicula metus sodales non. Praesent sagittis venenatis justo eget ullamcorper. Nunc consectetur at felis in blandit. Curabitur non aliquet lorem, eget mattis neque. Nunc mattis nisl velit, a maximus nisl venenatis eget. Nunc luctus risus a ex dictum vehicula. Nulla nulla ligula, lacinia quis sem porta, volutpat accumsan felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus mattis tellus felis, sit amet tincidunt lacus congue tincidunt. Integer pretium, nunc quis varius efficitur, eros lectus volutpat augue, sed luctus urna eros ut erat. Proin rutrum augue nec velit dapibus, eu lobortis nunc fermentum. Nam congue purus at enim imperdiet sollicitudin. Aenean lobortis turpis at interdum vulputate.</p><p>Nunc condimentum rhoncus congue. Duis eu ante lacus. Integer quis tincidunt nulla. Duis eget tincidunt diam. Aliquam semper ac neque nec elementum. Ut a enim diam. Aliquam ut faucibus metus. Maecenas ac enim tellus. Aenean viverra eu elit sit amet varius. Proin ut sagittis ex. Cras quis cursus risus. Curabitur venenatis urna eu odio fringilla rutrum. Praesent mollis mattis nunc, vitae feugiat lacus consectetur sit amet. Nunc rutrum pulvinar vestibulum. Duis volutpat tortor vel risus faucibus, nec vehicula enim sagittis. Sed vestibulum felis id arcu convallis euismod.</p><p>Proin porttitor molestie tempus. Nunc placerat non magna sit amet blandit. Donec ut mi felis. Proin volutpat blandit arcu sed condimentum. Integer vulputate scelerisque lacinia. Vestibulum eros arcu, convallis sed erat eget, semper scelerisque neque. Praesent imperdiet congue nibh, vel porttitor sem laoreet vitae. Quisque quis tincidunt dui.</p>', '2024-04-20 10:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(155) NOT NULL,
  `education_level` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `preferred_destination` varchar(155) NOT NULL,
  `status` varchar(155) NOT NULL DEFAULT 'Processing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `phone`, `email`, `education_level`, `age`, `preferred_destination`, `status`) VALUES
(1, 'Anish Karki', '9864184038', 'anishkarkee45@gmail.com', 'bachelors', 25, 'USA', 'completed'),
(2, 'Anish Karki', '9864184038', 'anishkarkee45@gmail.com', 'bachelors', 25, 'Ireland', 'Processing'),
(3, 'Anish Karki', '9864184038', 'wetober211@kravify.com', 'bachelors', 25, 'USA', 'Processing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(144) NOT NULL,
  `last_name` varchar(144) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `username` varchar(155) NOT NULL,
  `password` varchar(155) NOT NULL,
  `user_id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_type`, `username`, `password`, `user_id`) VALUES
(2, 'Anish', 'Karki', 'editor', 'admin', 'admin', 101),
(3, 'Anish', 'Karkee', 'admin', 'anish037', 'Anishhh@@@', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogImage` (`blogImage`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
