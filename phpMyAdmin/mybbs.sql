-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-09-14 10:43:40
-- サーバのバージョン： 10.4.24-MariaDB
-- PHP のバージョン: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `mybbs`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL COMMENT '投稿 ID',
  `name` varchar(64) NOT NULL COMMENT '投稿者',
  `time` datetime NOT NULL COMMENT '投稿日時',
  `text` text NOT NULL COMMENT '本文'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='投稿内容';

--
-- テーブルのデータのダンプ `post`
--

INSERT INTO `post` (`id`, `name`, `time`, `text`) VALUES
(1, '西川', '2022-09-13 00:00:00', 'テスト'),
(2, '西川', '2022-09-13 00:00:00', 'テスト2'),
(3, '西川', '2022-09-13 00:00:00', 'テスト3'),
(4, '西川', '2022-09-13 17:05:49', 'テスト4'),
(5, '西川', '2022-09-14 14:43:09', 'テスト5');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '投稿 ID', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
