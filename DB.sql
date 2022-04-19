-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-04-19 08:27:24
-- サーバのバージョン： 10.4.22-MariaDB
-- PHP のバージョン: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `sample`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `good`
--

CREATE TABLE `good` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `delete_flg` tinyint(1) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `likes`
--
-- テーブル sample.likes の構造の読み取りエラー: #1932 - Table &#039;sample.likes&#039; doesn&#039;t exist in engine
-- テーブル sample.likes のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : &#039;FROM `sample`.`likes`&#039; 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `brandname` varchar(255) NOT NULL,
  `gearname` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `reviews`
--

INSERT INTO `reviews` (`review_id`, `brandname`, `gearname`, `review`) VALUES
(14, 'BOSS', 'SUPER CHORUS', '80年代、90年代の王道なコーラスサウンドを鳴らせる名機。'),
(4, 'BOSS', 'SUPER OverDrive', 'ジャンルを問わずに使える歪み。ナチュラルなアンプライクなサウンドが特徴。'),
(5, 'Leqtique', 'Maestoso', 'TS系オーバードライブ。軽い歪みから、激しいディストーションサウンドまで出せる。'),
(7, 'Riot Distortion', 'Suhr', '明瞭かつ音圧感のあるサウンド。クランチからハイゲインまで使える。'),
(6, 'TC ELECTRONIC', 'Spark Booster', 'これをギターソロ時に使うとトーンに粘りとコンプレッション感を出せる。');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `member_flg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `member_flg`) VALUES
(8, 'タクヤ', 'takuya999@yahoo.co.jp', 'e9350df1b2a2ca0faeaa55e661d62871', 0),
(9, 'リョウ', 'ryo1212@yahoo.co.jp', 'e9350df1b2a2ca0faeaa55e661d62871', 1),
(10, 'aaaaaaaaaaaaaa', 'ryog13@icloud.com', 'e9350df1b2a2ca0faeaa55e661d62871', 0),
(11, 'ryo', 'fuku@yahoo.co.jp', 'e9350df1b2a2ca0faeaa55e661d62871', 0),
(12, 'ryo', 'fuku12@yahoo.co.jp', 'e9350df1b2a2ca0faeaa55e661d62871', 0),
(13, 'ryo', 'fuku13@yahoo.co.jp', 'e9350df1b2a2ca0faeaa55e661d62871', 0),
(14, 'ryo', 'fuku14@yahoo.co.jp', 'e9350df1b2a2ca0faeaa55e661d62871', 0),
(15, 'ryo', 'fuku15@yahoo.co.jp', 'e9350df1b2a2ca0faeaa55e661d62871', 0),
(16, 'ryo', 'fuku16@yahoo.co.jp', 'e9350df1b2a2ca0faeaa55e661d62871', 0),
(17, 'ryo', 'aaa@yahoo.co.jp', '47bce5c74f589f4867dbd57e9ca9f808', 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD UNIQUE KEY `brandname` (`brandname`,`gearname`,`review`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`username`,`password`,`email`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
