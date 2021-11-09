-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-11-2021 a las 17:26:18
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `musicalhouse`
--
CREATE DATABASE IF NOT EXISTS `musicalhouse` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `musicalhouse`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `img_url` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `precio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `titulo`, `descripcion`, `img_url`, `precio`) VALUES
(1, 'Gibson Les Paul', 'Una preciosa guitarra original Gibson Les Paul', 'https://www.malaga8.com/img/cms/gibson-les-paul-standard-50s-hcs-p-32553.jpg', '50000'),
(2, 'Fender Stratocaster', 'Una preciosa guitarra original Fender', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSic921Lq2G95yTns64hewkNdn3jSjyu9z7KMfJHroqcCNCuVF7OUHG2VptbWOBnrwV7qg&usqp=CAU', '25000'),
(3, 'Fender Telecaster', 'Una preciosa guitarra original Fender', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiT994AiVt4rVNg9IRFVjnYiUFR4-O3CN8xQ&usqp=CAU', '35000'),
(5, 'Triangulo Metasónico', 'El mejor triángulo de la historia con sónidos supersónicos', 'https://www.ecured.cu/images/thumb/f/fe/Triangulo_instrumento_de_musica.jpg/200px-Triangulo_instrumento_de_musica.jpg', 'infinito papa'),
(6, 'Bateria Eléctrica', 'Una gran bateria eléctrica multifunción', 'https://m.media-amazon.com/images/I/81vgIPKxEKL._AC_SY450_.jpg', '35000'),
(8, 'Bajo Eléctrico', 'Un bajo muy interesante', 'https://yamahamusical.co/tienda/729-large_default/bajo-electrico-4-cuerdasblacknegro.jpg', '25000'),
(9, 'Piano', 'Un bello piano enfocado para tocar música clásica', 'https://es.yamaha.com/es/files/parts_viewer01_83290d0f81070c038a0a9884ef4274db.jpg', '400000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
