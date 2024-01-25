-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2024 at 01:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaming_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `game_name` varchar(200) NOT NULL,
  `game_image` varchar(200) NOT NULL,
  `game_price` int(20) NOT NULL,
  `game_qty` int(20) NOT NULL,
  `game_desc` varchar(1000) NOT NULL,
  `game_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `game_name`, `game_image`, `game_price`, `game_qty`, `game_desc`, `game_id`) VALUES
(293, 'Farcry 6', 'http://localhost:8000/storage/product_images/73D6EBwT6mA603IUBDXTYK1Lwv6gPBymR4LPDSGy.jpg', 38, 1, 'Far Cry 6, players embark on a gripping open-world adventure set in the fictional Hope County, Montana. As a deputy sheriff, confront the apocalyptic cult known as the Project at Eden\'s Gate. Navigate a volatile landscape, forge alliances, and engage in intense, dynamic battles. With a compelling storyline, stunning visuals, and an expansive, immersive environment, Far Cry 5 delivers a thrilling and unpredictable gaming experience that challenges players to defy a charismatic cult leader and restore hope to a besieged community', 92),
(294, 'WWE 2k23', 'http://localhost:8000/storage/product_images/LfJUQBl3ttxxRV5tiQXubKrB7IIT1ijwFwUGVB7g.jpg', 24, 1, 'WWE showcased thrilling events and dramatic storylines that enthralled fans globally. WrestleMania 37 marked a highlight, featuring epic clashes and historic victories. Superstars like Roman Reigns, Bianca Belair, and Edge delivered unforgettable performances. The ThunderDome brought a unique viewing experience during the pandemic. With surprising returns, emotional farewells, and fierce rivalries, WWE\'s 2021 was a rollercoaster of excitement, proving its resilience and ability to entertain audiences in challenging times.', 93);

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` int(11) NOT NULL,
  `fav_name` varchar(200) NOT NULL,
  `fav_rating` float NOT NULL,
  `fav_price` float NOT NULL,
  `fav_image` varchar(200) NOT NULL,
  `fav_del_price` float NOT NULL,
  `fav_id` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_rating` double(8,2) NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_del_price` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_rating`, `product_price`, `product_image`, `product_del_price`, `product_desc`, `category`) VALUES
(90, 'Doom 3', 5.00, 50.00, 'public/product_images/awZ3Udg4RhbkBwHpFPumItUqv8fudSKeccF4HVPG.jpg', 70, 'Doom 3, an adrenaline-charged first-person shooter, transports players to a desolate Martian research facility besieged by demonic forces. Unravel a chilling narrative, explore atmospheric environments, and engage in relentless combat against nightmarish creatures. With state-of-the-art graphics and immersive sound design, experience the terror of a desperate struggle for survival. Doom 3 delivers a spine-tingling journey that seamlessly blends gripping storytelling with heart-pounding action in a visually stunning and fear-inducing gaming masterpiece.', 'Shooting'),
(91, 'Tekken 7', 5.00, 40.00, 'public/product_images/VdTVtB223P2rr69mAn2fXzLGYijSIIZmyXQwElvT.jpg', 50, 'Tekken 7, the pinnacle of the iconic fighting game series, offers a cinematic and intense combat experience. Unravel the Mishima family feud through a gripping narrative, with diverse characters and their unique fighting styles. Featuring breathtaking visuals, seamless online multiplayer, and a robust customization system, Tekken 7 brings the thrill of hand-to-hand combat to new heights, solidifying its place as a must-play title for fighting game enthusiasts.', 'Fighting'),
(92, 'Farcry 6', 4.00, 38.00, 'public/product_images/73D6EBwT6mA603IUBDXTYK1Lwv6gPBymR4LPDSGy.jpg', 48, 'Far Cry 6, players embark on a gripping open-world adventure set in the fictional Hope County, Montana. As a deputy sheriff, confront the apocalyptic cult known as the Project at Eden\'s Gate. Navigate a volatile landscape, forge alliances, and engage in intense, dynamic battles. With a compelling storyline, stunning visuals, and an expansive, immersive environment, Far Cry 5 delivers a thrilling and unpredictable gaming experience that challenges players to defy a charismatic cult leader and restore hope to a besieged community', 'Adventure'),
(93, 'WWE 2k23', 4.00, 24.00, 'public/product_images/LfJUQBl3ttxxRV5tiQXubKrB7IIT1ijwFwUGVB7g.jpg', 34, 'WWE showcased thrilling events and dramatic storylines that enthralled fans globally. WrestleMania 37 marked a highlight, featuring epic clashes and historic victories. Superstars like Roman Reigns, Bianca Belair, and Edge delivered unforgettable performances. The ThunderDome brought a unique viewing experience during the pandemic. With surprising returns, emotional farewells, and fierce rivalries, WWE\'s 2021 was a rollercoaster of excitement, proving its resilience and ability to entertain audiences in challenging times.', 'Fighting'),
(94, 'Battlefield 5', 3.00, 35.00, 'public/product_images/9U3YhL4LnOuhDeV6oBFobHoi7qIEHxde3iEbrWCw.jpg', 52, '25.00 Battlefield 5, a first-person shooter, immerses players in intense and dynamic warfare. Set in a near-futuristic conflict, the game offers a gripping single-player campaign with a compelling narrative. Multiplayer mode introduces expansive maps, diverse vehicles, and strategic gameplay. With stunning visuals and the Levolution feature, allowing dynamic changes to the environment during battles, Battlefield 4 delivers an adrenaline-pumping experience, solidifying its place as a standout entry in the acclaimed Battlefield franchise', 'Shooting'),
(95, 'Hitman', 3.00, 15.00, 'public/product_images/Saqufc04qm3w2bQSHbIC9pQrdFY0lReSmvp2yS1N.jpg', 25, 'Hitman, a stealth action video game series, follows Agent 47, a genetically engineered assassin, on globe-trotting missions to eliminate high-profile targets. Known for its sandbox environments and open-ended gameplay, players can choose various methods and disguises to execute their contracts. With intricate levels, meticulous planning, and a blend of strategy and action, the Hitman series delivers an immersive and challenging experience, allowing players to step into the deadly shoes of the world\'s most notorious assassin', 'Action'),
(96, 'Watch Dogs 2', 3.00, 38.00, 'public/product_images/MI5NKvNFLwKixm3A5a0C4avJ6obD5nsrJJye1PYH.jpg', 28, 'Watch Dogs 2, the action-packed open-world game, immerses players in the vibrant hacking culture of the San Francisco Bay Area. As Marcus Holloway, a skilled hacker and member of the hacktivist group DedSec, players expose corrupt corporations through hacking, stealth, and parkour. With a dynamic storyline, diverse characters, and a richly detailed open world, Watch Dogs 2 combines thrilling gameplay with a socially relevant narrative, offering an engaging experience that explores the dark side of technology in a hyper-connected society', 'Action'),
(99, 'Resd\' Evil 7', 3.00, 55.00, 'public/product_images/DTkcpDEVyMv6ck3i4r2NjTOPryDflUG4lWhmULu0.jpg', 45, 'Resident Evil 7: Biohazard takes survival horror to new heights, plunging players into a derelict Louisiana plantation filled with nightmarish creatures. Adopting a first-person perspective, the game introduces a gripping narrative as Ethan Winters searches for his missing wife. With a haunting atmosphere, realistic graphics, and visceral gameplay, RE7 redefines the series, offering a truly immersive horror experience that terrifies and captivates players, making it a standout installment in the iconic Resident Evil franchise', 'Horror'),
(100, 'Fortnite', 3.00, 32.00, 'public/product_images/Z2mLWKc0xleZo1jjnOJoAPiqNGSGKIIZv0F7qp9o.jpg', 42, 'Fortnite\" is a highly popular and influential battle royale game developed by Epic Games. Launched in 2017, it gained immense popularity for its unique combination of building mechanics, vibrant graphics, and engaging gameplay. Up to 100 players compete to be the last one standing on an ever-shrinking island. \"Fortnite\" also features collaborative events, creative modes, and a lively in-game environment. With its cultural impact, frequent updates, and cross-platform play, \"Fortnite\" has become a cultural phenomenon, attracting millions of players worldwide .', 'Multiplayer'),
(101, 'NBA 23', 2.00, 32.00, 'public/product_images/qyseOgv5txlksRk5TS4PNQijSThMCbDeTfeRE5Jd.jpg', 42, 'The NBA (National Basketball Association) is a premier professional basketball league globally, showcasing top-tier basketball talent. Known for its high-energy games, skilled players, and intense competition, the NBA has a massive fan base. The league features iconic teams like the Los Angeles Lakers and Boston Celtics, and its annual All-Star Game brings together the best players for a spectacular exhibition. With a rich history and a global impact, the NBA continues to be a powerhouse in the world of sports', 'Sports'),
(102, 'Prince', 3.00, 14.00, 'public/product_images/KOgm3ciuqHZju4mTrKLHWYZyiZCVFTpyU6wJignt.jpg', 24, 'The \"Prince of Persia\" series is a classic action-adventure franchise known for its acrobatic gameplay and captivating storytelling. The series follows the adventures of the titular Prince as he navigates perilous environments, solves puzzles, and engages in dynamic combat. From the groundbreaking 1989 original to the critically acclaimed \"Prince of Persia: The Sands of Time\" and subsequent installments, the series has left an indelible mark on gaming, combining platforming, time manipulation, and epic storytelling to create a memorable and enduring gaming experience', 'Survival'),
(103, 'Avengers', 3.00, 25.00, 'public/product_images/4elDkCZ23iNW6KGE4LvTxxvO5QpJJJCzushnzNWf.jpg', 35, 'Marvel\'s Spider-Man\" is a critically acclaimed action-adventure game that allows players to swing through the iconic city of New York as the beloved superhero. Featuring an engaging storyline, fluid web-swinging mechanics, and intense combat, the game captures the essence of Spider-Man. With stunning visuals and an open-world design, it immerses players in the superhero experience, offering a compelling mix of narrative-driven gameplay and exhilarating action in the Marvel Universe.', 'Fighting'),
(104, 'COD 4', 3.00, 19.00, 'public/product_images/esn4QLDroNKAUsIbI7Lo8aHw4XBjlqMB4Xzy59RL.jpg', 29, 'Call of Duty 4: Modern Warfare\" is a groundbreaking first-person shooter that marked a shift in the popular franchise. Released in 2007, it brought the series into modern times with a gripping narrative and intense multiplayer gameplay. The game follows two intertwined storylines involving a Russian civil war and a Middle Eastern conflict. With memorable characters, iconic missions, and innovative multiplayer mechanics, COD 4 set a new standard for the FPS genre and remains a classic in gaming history.', 'Shooting'),
(105, 'NFS', 3.00, 20.00, 'public/product_images/gXZjhcuBsbGxWzsBlbCc9qDy9ascFEREQNxESO2N.jpg', 30, 'Need for Speed (NFS) is a long-standing and popular racing game franchise known for its high-speed, adrenaline-fueled gameplay. With a focus on urban car culture, customization, and intense police pursuits, NFS titles deliver a thrilling racing experience. From iconic entries like \"Need for Speed: Most Wanted\" to the visually stunning \"Need for Speed: Heat,\" the series consistently offers diverse racing environments, a variety of vehicles, and a soundtrack that complements the fast-paced action, making it a staple in the racing game genre.product_images/HnKpg1kJgMGW7YckpQMJjIYOkiBXXuqkKXJ...', 'Racing'),
(106, 'Overwatch 2', 3.00, 27.00, 'public/product_images/0m1tfNYKAfgNEOVcrJPyCB6NUbOxsPVWwqWXBwsq.jpg', 37, 'Overwatch\" is a team-based first-person shooter (FPS) game developed by Blizzard Entertainment. Set in a futuristic world, players choose from a diverse roster of heroes, each with unique abilities. The objective-based gameplay emphasizes teamwork and strategy across various maps. Known for its vibrant characters, dynamic gameplay, and regular updates, \"Overwatch\" has become a major player in the esports scene, fostering a dedicated community and showcasing Blizzard\'s commitment to evolving multiplayer gaming experiences', 'Multiplayer'),
(107, 'PUBG', 3.00, 40.00, 'public/product_images/RwaALq5xjXIZFc3ltjnztSfbVz7ibYhBDHVT949g.jpg', 50, 'PlayerUnknown\'s Battlegrounds (PUBG) for PC revolutionized the battle royale genre. Offering intense multiplayer action, 100 players parachute onto an expansive map, scavenge for weapons, and battle to be the last one standing. With realistic graphics, strategic gameplay, and a constantly shrinking play zone, PUBG delivers heart-pounding moments and unpredictable encounters. The game\'s success lies in its dynamic gameplay, fostering a competitive community and establishing itself as a landmark title in the realm of online multiplayer shooters', 'Multiplayer'),
(108, 'DBZ', 3.00, 12.00, 'public/product_images/biIo1IcrgNxB3wVGKKSo1Y1CicrfdLLno4EdxeqC.jpg', 22, 'DBZ\" commonly refers to \"Dragon Ball Z,\" a highly popular Japanese anime and manga series created by Akira Toriyama. The series is a part of the larger \"Dragon Ball\" franchise. \"Dragon Ball Z\" follows the adventures of Goku and his friends as they defend Earth against powerful foes, exploring themes of friendship, perseverance, and epic battles. Known for its intense combat sequences, iconic characters, and transformative power-ups, \"DBZ\" has had a significant impact on global pop culture since its debut in the late 1980s', 'Fighting'),
(109, 'Fifa 2023', 2.00, 20.00, 'public/product_images/aHAOtOYXjbAJ1cvhLgoTDZaSoCswoJJpQM8aqARX.jpg', 30, '\"FIFA\" refers to the popular video game series developed by EA Sports, focusing on football (soccer) simulation. With annual releases, \"FIFA\" provides realistic gameplay, featuring licensed teams, players, and stadiums from around the world. The game includes various modes, such as career, Ultimate Team, and online multiplayer, allowing players to experience the thrill of football at different levels. \"FIFA\" has become a staple in sports gaming, combining authenticity, innovation, and a dedicated fan base', 'Sports'),
(110, 'Gears of war', 3.00, 45.00, 'public/product_images/t9KYInulNI2Os8I5sAzyNtY7uJ5REV1090EP2zcM.jpg', 55, 'Gears of War\" for PC, a flagship title in the third-person shooter genre, immerses players in a brutal conflict against the monstrous Locust Horde. With a gripping narrative, intense cover-based combat, and iconic characters like Marcus Fenix, the game delivers a visceral and strategic gaming experience. Stunning visuals, cooperative gameplay, and an engaging multiplayer mode contribute to its success, making \"Gears of War\" a cornerstone of the gaming industry, praised for its innovation and enduring appeal', 'Shooting'),
(111, 'Spiderman', 3.00, 25.00, 'public/product_images/ZRFekPqp9JrTciPAVTgMkYlmIFDJaDINPpJlk6Zf.jpg', 35, 'Marvel\'s Spider-Man\" is a critically acclaimed action-adventure game that allows players to swing through the iconic city of New York as the beloved superhero. Featuring an engaging storyline, fluid web-swinging mechanics, and intense combat, the game captures the essence of Spider-Man. With stunning visuals and an open-world design, it immerses players in the superhero experience, offering a compelling mix of narrative-driven gameplay and exhilarating action in the Marvel Universe.', 'Action');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
