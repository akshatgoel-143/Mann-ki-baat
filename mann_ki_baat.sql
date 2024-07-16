-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 09:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mann_ki_baat`
--
CREATE DATABASE IF NOT EXISTS `mann_ki_baat` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mann_ki_baat`;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `image`, `created_at`) VALUES
(1, 2, 'Mann Ki Baat', 'Ye wali Mann ki Baat, Modi ji k sath....', 'MKB (1).jpg', '2024-07-11 09:19:04'),
(5, 1, 'Waah Modi ji Wah', 'Mr. Modi PM of India.', 'Ṃann-ki-Baat.png', '2024-07-11 11:24:23'),
(7, 7, 'TEST POST ', 'This is a test Post', 'MKB (1).jpg', '2024-07-11 17:34:25'),
(9, 2, 'PM’s address in the 111th Episode of ‘Mann Ki Baat’', 'The \'Mann Ki Baat\' radio program may have been paused for a few months, but the spirit of \'Mann Ki Baat\' in the country and society, touching upon the good ...', 'MKB (2).jpg', '2024-07-12 06:57:13'),
(10, 2, 'PM’s address in the 110th Episode of ‘Mann Ki Baat’', 'My dear countrymen, Namaskar. Welcome to the 110th episode of ‘Mann Ki Baat’. As always, this time too we have received a lot of your suggestions, inputs and comments. And like always, this time as well, selecting topics to be included in the episode, is a challenge. I have received many an input, one better than the other, full of positivity. These comprise due mention of many countrymen who are striving to improve the lives of others by becoming a ray of hope for them.', 'MKB (3).jpg', '2024-07-12 06:58:51'),
(11, 3, 'PM’s address in the 109th Episode of ‘Mann Ki Baat’', 'My dear countrymen, Namaskar. This is the first ‘Mann Ki Baat’ program of 2024. There is a new enthusiasm, a new wave in Amritkaal. Two days ago, all of us countrymen celebrated the 75th Republic Day with great pomp and fervour. This year our Constitution is also attaining completion of 75 years… and the Supreme Court is also completing 75 years. These festivals of our democracy further strengthen India as the Mother of Democracy. The Constitution of India has come into being after such intense brainstorming that it is called a living document.', 'MKB (3).jpg', '2024-07-12 06:59:51'),
(12, 3, 'PM’s address in the 108th Episode of ‘Mann Ki Baat’', 'My dear countrymen. Namaskar. ‘Mann Ki Baat’ means an auspicious opportunity to meet you, and when you meet your family members, it is so pleasing… so satisfying. This is exactly what I feel after meeting you through ‘Mann Ki Baat’. And of course today, this is the 108th episode of our shared journey. For us the importance of the number 108 and its sanctity is a subject of deep study. 108 beads in a rosary, chanting 108 times, 108 divine sites, 108 stairs in temples, 108 bells, this number 108 is associated with immense faith. ', 'MKB (4).jpg', '2024-07-12 07:00:35'),
(13, 3, 'PM’s address in the 107th Episode of ‘Mann Ki Baat’', 'My dear countrymen, Namaskar, Welcome to Mann Ki Baat. But, we can never forget this day, the 26th of November. It was on this very day that the country had come under the most dastardly terror attack. Terrorists had made Mumbai shudder… along with the entire country. But it is India’s fortitude that made us surmount the ordeal; we are now quelling terror with full ardor. I pay homage to all of them who lost their lives in the Mumbai attack. Today, the country is in remembrance of those brave hearts who made the supreme sacrifice during the attack.', 'MKB (5).jpg', '2024-07-12 07:01:36'),
(14, 5, 'PM’s address in the 106th Episode of ‘Mann Ki Baat’', 'My dear countrymen, Namaskar. Welcome once again to Mann Ki Baat. This episode is taking place at a time when the entire country is enveloped in the fervour of festivities. Heartiest greetings to all of you on the occasion of the festivals.\r\nFriends, amid the zeal of the festivities, I wish to commence Mann Ki Baat with a news from Delhi itself. At the beginning of this month, on the occasion of Gandhi Jayanti, Khadi witnessed record sales in Delhi. ', 'MKB (6).jpg', '2024-07-12 07:03:12'),
(15, 6, 'PM’s address in the 105th Episode of ‘Mann Ki Baat’', 'My dear family members, Namaskar. In yet another episode of ‘Mann Ki Baat’, I have got the opportunity to share with you all, the success of the country, the success of the countrymen; their inspiring life journey. These days, most of the letters and messages I have received are largely on two subjects. The first is the successful landing of Chandrayaan-3 and the second topic is the successful hosting of G-20 in Delhi. I have received countless letters from every part of the country, across every section of the society, and people of all ages.', 'MKB (6).jpg', '2024-07-12 07:04:23'),
(16, 6, 'PM’s address in the 104th Episode of ‘Mann Ki Baat’', 'My dear family members, Namaskar. A very warm welcome to you once again in the August episode of Mann Ki Baat. I don’t recall if it has ever happened that in the month of Sawan, ‘Mann Ki Baat’ program was held twice, but, this time, the same is happening. Sawan means the month of Mahashiv, the month of festivities and fervour. The success of Chandrayaan has enhanced this atmosphere of celebration manifold. It has been more than three days that Chandrayaan has reached the moon.', 'MKB (7).jpg', '2024-07-12 07:04:53'),
(17, 6, 'PM’s address in the 103rd Episode of ‘Mann Ki Baat’', 'A warm welcome to all of you in ‘Mann Ki Baat’. The month of July means the month of monsoon, the month of rain. The past few days have been full of anxiety and hardships on account of natural calamities. Owing to flooding in many rivers including the Yamuna, people in many areas have had to suffer. Landslides have also occurred in hilly areas. Meanwhile, in the western part of the country, Biparjoy cyclone also hit the areas of Gujarat some time ago.', 'MKB (8).jpg', '2024-07-12 07:05:30'),
(18, 6, 'PM’s address in the 102st Episode of ‘Mann Ki Baat’', 'My dear countrymen, Namaskar. Once again a warm welcome to all of you in ‘Mann Ki Baat’. Usually ‘Mann Ki Baat’ comes your way on the last Sunday of every month, but this time it is being held a week earlier. All of you know, I’ll be in America next week and there the schedule is going to be pretty hectic, and hence I thought I’d talk to you before I go, what could be better than that! The blessings of the Janata-Janardan, the people, your inspiration, will also continue to enhance my energy.', 'MKB (9).jpg', '2024-07-12 07:05:55'),
(22, 9, 'Call it marriage or partnership, BJP and BJD are together.', 'Rahul Gandhi on Sunday launched the Congress’s Lok Sabha elections 2024 campaign in Odisha and accused the ruling Biju Janata Dal (BJD) of running the state government in partnership with the BJP.\r\n\r\nAddressing a rally at Salipur in the Kendrapada Lok Sabha constituency, Gandhi said the BJD and BJP are together even as they are contesting elections against each other in the state.', 'rahul-gandhi-odisha.webp', '2024-07-12 11:31:34'),
(23, 9, 'Holds Massive Rally in New Delhi, Addresses Key Issues', 'I  held a massive rally in New Delhi today, drawing thousands of supporters from across the city. The rally, held at Ramlila Maidan, focused on key issues such as unemployment, farmers\' rights, and economic reforms.\r\nIn his address, Gandhi criticized the current government\'s policies, accusing them of neglecting the common people and favoring the wealthy. He emphasized the need for a more inclusive economic policy that benefits all sections of society.', '110178621.webp', '2024-07-12 11:40:09'),
(24, 7, 'Delhi High Court adjourns Arvind Kejriwal bail plea despite opposition by Delhi CM', 'The Delhi High Court on Wednesday rejected a request by Arvind Kejriwal to hear his bail matter in the Delhi excise policy money laundering case on an urgent basis.', 'download.jpg', '2024-07-12 11:49:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mob_no` varchar(15) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `mob_no`, `state`, `city`, `profile_photo`, `created_at`) VALUES
(1, 'admin', 'Admin admin', 'admin@admin', 'admin', '111111111', 'Uttar Pradesh', 'Noida', 'AK.jpg', '2024-07-10 10:01:17'),
(2, 'akshatgoel143', 'Akshat Goel', 'goelakshat2002@gmail.com', 'Akshatgoel', '9058241883', 'Uttar Pradesh', 'Gr. Noida', 'IMG-20220926-WA0022.jpg', '2024-07-10 10:20:02'),
(3, 'narendra_modi', 'Narendra Modi', 'narendra.modi@gmail.com', 'modi', '9988000999', 'Delhi', '7, Lok Kalyan Marg', 'Modi.png', '2024-07-11 08:52:08'),
(5, 'amit_shah', 'Amit Shah', 'amit.shah@gmail.com', 'amit', '9999999999', 'India', 'New Delhi', 'Amit Shah.jpg', '2024-07-11 11:19:07'),
(6, 'aditya_nath_yogi', 'Yogi Aditya Nath', 'aditya.nath@gmail.com', 'yogi', '777777777', 'Uttar Pradesh', 'Gorakhpur', 'AdityaNathYogi.jpg', '2024-07-11 11:19:36'),
(7, 'kejriwal.arvind', 'Arvind Kejriwal', 'arvind.kejriwal@gmail.com', 'arvind', '7777777777', 'India', 'Delhi', 'images.jpg', '2024-07-11 11:19:57'),
(9, 'rahul_gandhi', 'Rahul Gandhi', 'ragul.gandhi@gmail.com', 'rahul', '888888888', 'Uttar Pradesh', 'Gr. Noida', 'Rahul-Gandhi.jpg', '2024-07-12 11:27:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
