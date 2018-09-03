-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-09-2018 a las 12:40:59
-- Versión del servidor: 5.7.23-0ubuntu0.16.04.1
-- Versión de PHP: 5.6.37-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `intervalo_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `post_ID` int(20) UNSIGNED NOT NULL,
  `post_autor` int(20) UNSIGNED NOT NULL DEFAULT '1',
  `post_pre_titulo` varchar(250) NOT NULL DEFAULT '',
  `post_titulo` varchar(200) NOT NULL,
  `post_url` varchar(200) NOT NULL DEFAULT '',
  `post_contenido` longtext NOT NULL,
  `post_resumen` text NOT NULL,
  `post_mini_texto` text NOT NULL,
  `post_imagen` varchar(200) NOT NULL,
  `post_video` varchar(200) NOT NULL,
  `post_categoria` varchar(200) NOT NULL,
  `post_galeria` varchar(20) NOT NULL DEFAULT '0',
  `post_imagenesGal` longtext NOT NULL,
  `post_tabs` text NOT NULL,
  `post_acordion` text NOT NULL,
  `post_head` text NOT NULL,
  `post_status` varchar(50) NOT NULL DEFAULT 'publicado',
  `post_orden` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(100) NOT NULL DEFAULT 'post',
  `post_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_ID`),
  ADD KEY `post_titulo` (`post_titulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `post_ID` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
