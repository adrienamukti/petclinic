-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2024 pada 05.38
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petclinic`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `doctors_220035`
--

CREATE TABLE `doctors_220035` (
  `doctor_id_220035` int(11) NOT NULL,
  `doctor_name_220035` varchar(50) NOT NULL,
  `doctor_gender_220035` varchar(10) NOT NULL,
  `doctor_address_220035` varchar(100) NOT NULL,
  `doctor_phone_220035` varchar(15) NOT NULL,
  `doctor_photo_220035` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `doctors_220035`
--

INSERT INTO `doctors_220035` (`doctor_id_220035`, `doctor_name_220035`, `doctor_gender_220035`, `doctor_address_220035`, `doctor_phone_220035`, `doctor_photo_220035`) VALUES
(7, 'Mukti', 'Female', 'Jakarta', '08944433555', 'IMG_20220913_094300.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `medicals_220035`
--

CREATE TABLE `medicals_220035` (
  `mr_id_220035` int(11) NOT NULL,
  `mr_date_220035` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pet_id_220035` int(11) NOT NULL,
  `doctor_id_220035` int(11) NOT NULL,
  `symptom_220035` varchar(255) NOT NULL,
  `diagnose_220035` varchar(255) NOT NULL,
  `treatment_220035` varchar(255) NOT NULL,
  `cost_220035` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `medicals_220035`
--

INSERT INTO `medicals_220035` (`mr_id_220035`, `mr_date_220035`, `pet_id_220035`, `doctor_id_220035`, `symptom_220035`, `diagnose_220035`, `treatment_220035`, `cost_220035`) VALUES
(3, '2023-11-28 12:19:22', 1, 2, 'tidak mau makan', 'maag', 'waisan', 10),
(4, '2023-11-29 02:45:29', 2, 7, 'sakit kepala', 'migrain', 'oskadon', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pets_220035`
--

CREATE TABLE `pets_220035` (
  `pet_id_220035` int(11) NOT NULL,
  `pet_name_220035` varchar(30) NOT NULL,
  `pet_type_220035` varchar(30) NOT NULL,
  `pet_gender_220035` varchar(6) NOT NULL,
  `pet_age_220035` int(11) NOT NULL,
  `pet_food_220035` varchar(6) NOT NULL,
  `pet_owner_220035` varchar(50) NOT NULL,
  `pet_address_220035` varchar(100) NOT NULL,
  `pet_phone_220035` varchar(16) NOT NULL,
  `pet_photo_220035` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pets_220035`
--

INSERT INTO `pets_220035` (`pet_id_220035`, `pet_name_220035`, `pet_type_220035`, `pet_gender_220035`, `pet_age_220035`, `pet_food_220035`, `pet_owner_220035`, `pet_address_220035`, `pet_phone_220035`, `pet_photo_220035`) VALUES
(1, 'kiti', 'Cat', 'Female', 3, 'Dry', 'Adri', 'Bandung', '0895678832', 'cat.png'),
(2, 'dogi', 'Dog', 'Female', 5, 'Wet', 'jack', 'Jakarta', '0834984848', 'Dogs.jpg'),
(3, 'dini', 'Reptil', 'Female', 6, 'Dry', 'lala', 'Bekasi', '0834984848', 'default.png'),
(4, 'Udin', 'Bird', 'Female', 7, 'Wet', 'riena', 'Bandung', '0834984848', 'default.png'),
(8, 'dogi', 'Cat', 'Female', 8, 'Wet', 'Adri', 'bdg', '0834984848', 'cat.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_220035`
--

CREATE TABLE `users_220035` (
  `userid_220035` int(11) NOT NULL,
  `username_220035` varchar(100) NOT NULL,
  `password_220035` varchar(255) NOT NULL,
  `usertype_220035` varchar(10) NOT NULL,
  `fullname_220035` varchar(100) NOT NULL,
  `photo_220035` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users_220035`
--

INSERT INTO `users_220035` (`userid_220035`, `username_220035`, `password_220035`, `usertype_220035`, `fullname_220035`, `photo_220035`) VALUES
(8, 'Mukti', '$2y$10$XC1DKvKrxSStoeWFj1jg2.kbSR6cbitHHnXuusXEouOEUZ/y7.t6e', 'Manager', 'Mukti Sakti', 'IMG_20220913_094248.JPG'),
(9, 'adrien', '$2y$10$cIGFQWu38o2F4/6OfI/FMuUVxQBIAuSMEh.IUp/tJOkTt8qg51pIO', 'Manager', 'Riena Safira', 'default.png'),
(10, 'safira', '$2y$10$INjXWvsDZmJS05ilPHbSGuqJjjVAX65BH.n5Com.vfISvrakt3wNq', 'Staff', 'Safira Ayana', 'default.png'),
(11, 'Adri', '$2y$10$5.qPAaRCB2DBSlvVHzWIa.G62nfRRtAERWqQ1fZRLus97Ze8s4s9e', 'Manager', 'Muhammad Adriena ', 'default.png'),
(12, 'Riena', '$2y$10$InM/B7HDHO1f7cmSfx7TteS7aiNwn62EBmeV94zuiXeTjW0QFf6cy', 'Manager', 'Riena Safira', 'Dogs.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `doctors_220035`
--
ALTER TABLE `doctors_220035`
  ADD PRIMARY KEY (`doctor_id_220035`);

--
-- Indeks untuk tabel `medicals_220035`
--
ALTER TABLE `medicals_220035`
  ADD PRIMARY KEY (`mr_id_220035`),
  ADD KEY `pet_id_220035` (`pet_id_220035`),
  ADD KEY `doctor_id_220035` (`doctor_id_220035`);

--
-- Indeks untuk tabel `pets_220035`
--
ALTER TABLE `pets_220035`
  ADD PRIMARY KEY (`pet_id_220035`);

--
-- Indeks untuk tabel `users_220035`
--
ALTER TABLE `users_220035`
  ADD PRIMARY KEY (`userid_220035`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `doctors_220035`
--
ALTER TABLE `doctors_220035`
  MODIFY `doctor_id_220035` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `medicals_220035`
--
ALTER TABLE `medicals_220035`
  MODIFY `mr_id_220035` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pets_220035`
--
ALTER TABLE `pets_220035`
  MODIFY `pet_id_220035` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users_220035`
--
ALTER TABLE `users_220035`
  MODIFY `userid_220035` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `doctors_220035`
--
ALTER TABLE `doctors_220035`
  ADD CONSTRAINT `doctors_220035_ibfk_1` FOREIGN KEY (`doctor_id_220035`) REFERENCES `medicals_220035` (`doctor_id_220035`);

--
-- Ketidakleluasaan untuk tabel `medicals_220035`
--
ALTER TABLE `medicals_220035`
  ADD CONSTRAINT `medicals_220035_ibfk_1` FOREIGN KEY (`pet_id_220035`) REFERENCES `pets_220035` (`pet_id_220035`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
