-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-06-22 16:24:53
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_d13_23_kadai`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `0622social_gift_sample`
--

CREATE TABLE `0622social_gift_sample` (
  `id` int(11) NOT NULL,
  `messages` varchar(128) NOT NULL,
  `names` varchar(128) NOT NULL,
  `deadline` date NOT NULL,
  `price` int(100) NOT NULL,
  `unit` int(100) NOT NULL,
  `payment` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `0622social_gift_sample`
--

INSERT INTO `0622social_gift_sample` (`id`, `messages`, `names`, `deadline`, `price`, `unit`, `payment`, `created_at`, `updated_at`) VALUES
(1, 'サンキュー', 'ねこ', '2021-12-31', 1000, 10, 'VISA', '2023-06-21 19:55:39', '2023-06-21 19:55:39'),
(2, 'おめでとー', 'いぬ', '2023-06-01', 1000, 5, 'VISA', '2023-06-21 19:57:01', '2023-06-21 19:57:01'),
(3, '感謝', 'とり', '2022-05-11', 5000, 10, 'MASTER', '2023-06-21 20:04:28', '2023-06-21 20:04:28'),
(4, '謝辞', 'ねずみ', '2023-06-09', 3000, 100, 'VISA', '2023-06-22 00:27:11', '2023-06-22 00:27:11'),
(5, '謝辞', 'ねずみ', '2023-06-09', 3000, 100, 'VISA', '2023-06-22 00:27:38', '2023-06-22 00:27:38'),
(6, '謝辞', 'ねずみ', '2023-06-08', 3000, 100, 'VISA', '2023-06-22 00:28:32', '2023-06-22 00:28:32'),
(7, 'ハッピーウエディング', 'たつ', '2023-06-05', 0, 0, 'VISA', '2023-06-22 20:40:40', '2023-06-22 20:40:40'),
(8, 'ハッピーダディ', 'へび', '2023-06-17', 10000, 1, 'VISA', '2023-06-22 20:42:10', '2023-06-22 20:42:10'),
(9, 'いつもありがとう', 'うし', '2023-05-31', 2000, 25, 'VISA', '2023-06-22 20:43:54', '2023-06-22 20:43:54'),
(10, '感謝！！！', 'へび', '2023-06-02', 0, 10, 'VISA', '2023-06-22 23:08:55', '2023-06-22 23:08:55'),
(11, '感謝！！！！！！', 'さる', '2023-06-27', 0, 5, 'VISA', '2023-06-22 23:10:07', '2023-06-22 23:10:07'),
(12, '感謝！！！！！！', 'ねずみ', '2023-07-02', 0, 10, 'VISA', '2023-06-22 23:19:22', '2023-06-22 23:19:22'),
(13, '感謝！！！', 'ねずみ', '2023-06-24', 0, 5, 'VISA', '2023-06-22 23:20:44', '2023-06-22 23:20:44');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `0622social_gift_sample`
--
ALTER TABLE `0622social_gift_sample`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `0622social_gift_sample`
--
ALTER TABLE `0622social_gift_sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
