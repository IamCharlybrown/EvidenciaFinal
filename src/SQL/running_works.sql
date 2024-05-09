-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost: 3307
-- Tiempo de generación: 09-05-2024 a las 16:47:18
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `running_works`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `navbar_title` varchar(255) NOT NULL,
  `about_us` varchar(255) NOT NULL,
  `home` varchar(255) NOT NULL,
  `individual` varchar(255) NOT NULL,
  `archive` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `get_started` varchar(255) NOT NULL,
  `texto_rectangulo1` text NOT NULL,
  `ruta_imagen_hombre` varchar(255) NOT NULL,
  `texto_about` text NOT NULL,
  `texto_rectangulo2` text NOT NULL,
  `ruta_imagen_mujer` varchar(255) NOT NULL,
  `texto_rectangulo3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `about`
--

INSERT INTO `about` (`id`, `navbar_title`, `about_us`, `home`, `individual`, `archive`, `contact`, `get_started`, `texto_rectangulo1`, `ruta_imagen_hombre`, `texto_about`, `texto_rectangulo2`, `ruta_imagen_mujer`, `texto_rectangulo3`) VALUES
(1, 'running works', 'About Us', 'Home', 'Tabla de surf', 'Menu', 'Contact', 'Get started', 'Welcome to running works. A safe space and platform lorem', 'imagenes/Hombre.jpg', '', 'Running Works es tu destino para tablas de surf excepcionales. Desde diseños innovadores hasta la más alta calidad, nuestras tablas están hechas para todos, desde principiantes hasta expertos. Descubre el mundo del surf con confianza y estilo con Running Works.', 'imagenes/Mujer.jpg', 'En Running Works, no solo vendemos tablas, creamos experiencias. Nuestra marca es un punto de encuentro para aquellos que buscan la emoción del surf y la calidad inigualable. Únete a nosotros en este viaje donde la pasión y la aventura se encuentran en cada ola.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `about_page`
--

CREATE TABLE `about_page` (
  `navbar_title` varchar(255) DEFAULT NULL,
  `about_us` varchar(255) DEFAULT NULL,
  `home` varchar(255) DEFAULT NULL,
  `individual` varchar(255) DEFAULT NULL,
  `archive` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `get_started` varchar(255) DEFAULT NULL,
  `main_title` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `product1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `product2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `product3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `product4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL,
  `product5` varchar(255) DEFAULT NULL,
  `image6` varchar(255) DEFAULT NULL,
  `product6` varchar(255) DEFAULT NULL,
  `right_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `about_page`
--

INSERT INTO `about_page` (`navbar_title`, `about_us`, `home`, `individual`, `archive`, `contact`, `get_started`, `main_title`, `image1`, `product1`, `image2`, `product2`, `image3`, `product3`, `image4`, `product4`, `image5`, `product5`, `image6`, `product6`, `right_image`) VALUES
('running works', 'About Us', 'Home', 'Tabla de surf', 'Menu', 'Contact', 'Get started', 'Dive into the ultimate surfing products', 'FOTOS/trajedebaño.jpg', 'Wetsuite', 'FOTOS/wax.jpg', 'Wax', 'FOTOS/tabla.jpg', 'Surfingboard', 'FOTOS/Producto4.jpg', 'Quillas', 'FOTOS/Producto5.jpg', 'Leash', 'FOTOS/Producto6.jpg', 'Escarpines', 'FOTOS/surfista2.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE `contact` (
  `navbar_title` varchar(255) DEFAULT NULL,
  `about_us` varchar(255) DEFAULT NULL,
  `home` varchar(255) DEFAULT NULL,
  `individual` varchar(255) DEFAULT NULL,
  `archive` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `get_started` varchar(255) DEFAULT NULL,
  `image_sufista` varchar(255) DEFAULT NULL,
  `title_meet_us` varchar(255) DEFAULT NULL,
  `phone_icon` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `envelope_icon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message_icon` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `title_pitch_us` varchar(255) DEFAULT NULL,
  `pitch_text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contact`
--

INSERT INTO `contact` (`navbar_title`, `about_us`, `home`, `individual`, `archive`, `contact`, `get_started`, `image_sufista`, `title_meet_us`, `phone_icon`, `phone_number`, `envelope_icon`, `email`, `message_icon`, `email_address`, `title_pitch_us`, `pitch_text`) VALUES
('running works', 'About Us', 'Home', 'Tabla de surf', 'Menu', 'Contact', 'Get started', 'FOTOS/Surfista3.png', 'MEET US', 'fa-solid fa-phone', '722 146 8809', 'fa-regular fa-envelope', '+52 345 789 7857', 'fa-regular fa-message', 'charly@gmail.com', 'PITCH US', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia reprehenderit accusamus pariatur optio totam obcaecati dolor aspernatur enim quos voluptate, aliquam doloribus debitis ullam similique, recusandae asperiores provident! Iste, nam?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `individual`
--

CREATE TABLE `individual` (
  `id` int(11) NOT NULL,
  `navbar_title` varchar(255) DEFAULT NULL,
  `about_us` varchar(255) DEFAULT NULL,
  `home` varchar(255) DEFAULT NULL,
  `individual` varchar(255) DEFAULT NULL,
  `archive` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `get_started` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `car` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `individual`
--

INSERT INTO `individual` (`id`, `navbar_title`, `about_us`, `home`, `individual`, `archive`, `contact`, `get_started`, `imagen`, `titulo`, `descripcion`, `precio`, `car`) VALUES
(1, 'running works', 'About Us', 'Home', 'Tabla de surf', 'Menu', 'Contact', 'Get started', 'imagenes/Tabla.jpg', 'SURFINGBOARD', 'Descubre la experiencia única de surfear con nuestro increíble SURFINGBOARD. Fabricado con los mejores materiales y diseñado para brindarte el máximo rendimiento en cada ola. Nuestro SURFINGBOARD está diseñado para surfistas de todos los niveles, desde principiantes hasta profesionales. Cuenta con características innovadoras que te permitirán deslizarte suavemente sobre las olas y ejecutar maniobras con facilidad. La construcción de alta calidad garantiza durabilidad y resistencia, mientras que el diseño aerodinámico optimiza la velocidad y la maniobrabilidad. Además, la superficie antideslizante proporciona un agarre seguro, permitiéndote realizar trucos con confianza. Ya sea que estés buscando mejorar tus habilidades o simplemente disfrutar del placer de surfear, nuestro SURFINGBOARD es la elección perfecta. Explora nuevas sensaciones y lleva tu experiencia de surf a un nivel superior con el SURFINGBOARD de running Works. ¡Prepárate para vivir momentos emocionantes en cada ola!', 450.00, 'Add to car');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `main_index`
--

CREATE TABLE `main_index` (
  `navbar_title` varchar(255) DEFAULT NULL,
  `about_us` varchar(255) DEFAULT NULL,
  `home` varchar(255) DEFAULT NULL,
  `individual` varchar(255) DEFAULT NULL,
  `archive` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `get_started` varchar(255) DEFAULT NULL,
  `main_title1` varchar(255) DEFAULT NULL,
  `main_title2` varchar(255) DEFAULT NULL,
  `main_paragraph` text DEFAULT NULL,
  `join_us` varchar(255) DEFAULT NULL,
  `ultimate_equipment` varchar(255) DEFAULT NULL,
  `card1_image` varchar(255) DEFAULT NULL,
  `fotoCarrusel1` varchar(255) DEFAULT NULL,
  `card2_image` varchar(255) DEFAULT NULL,
  `fotoCarrusel2` varchar(255) DEFAULT NULL,
  `card3_image` varchar(255) DEFAULT NULL,
  `fotoCarrusel3` varchar(255) DEFAULT NULL,
  `cards_paragraph` text DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `green_background_image` varchar(255) DEFAULT NULL,
  `about_image1` varchar(255) DEFAULT NULL,
  `about_image2` varchar(255) DEFAULT NULL,
  `about_title` varchar(255) DEFAULT NULL,
  `about_paragraph` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `main_index`
--

INSERT INTO `main_index` (`navbar_title`, `about_us`, `home`, `individual`, `archive`, `contact`, `get_started`, `main_title1`, `main_title2`, `main_paragraph`, `join_us`, `ultimate_equipment`, `card1_image`, `fotoCarrusel1`, `card2_image`, `fotoCarrusel2`, `card3_image`, `fotoCarrusel3`, `cards_paragraph`, `phone_number`, `email_address`, `green_background_image`, `about_image1`, `about_image2`, `about_title`, `about_paragraph`) VALUES
('running works', 'About Us', 'Home', 'Tabla de surf', 'Menu', 'Contact', 'Get started', 'FROM SEA WAVES', 'TO MASTERPIECE', 'We are a company that produces iconic surfing equipment. We pride ourselves in our proven track-record.', 'Join Us', 'The ultimate surfering equipment', './FOTOS/patas2.jpg', 'FOTOS/FotoCarrusel1.jpg', 'FOTOS/patas5.jpg', 'FOTOS/FotoCarrusel2.jpg', 'FOTOS/patas4.jpg', 'FOTOS/FotoCarrusel3.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, accusantium at possimus, cumque magnam, iste minus inventore vel dolorem optio sed dignissimos laboriosam minima! Magni vel deserunt aperiam illo quis?', '729 318 1906', '+52 345 789 7857', 'FOTOS/patas3.jpg', 'FOTOS/patas5.jpg', 'FOTOS/patas4.jpg', 'Acerca de nosotros', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nobis alias vitae repudiandae dolorem non, saepe consequatur deserunt iure corrupti illo eveniet iusto, dicta neque sint vero odio cupiditate laboriosam soluta magnam culpa quia perferendis! Consequatur impedit ut soluta assumenda quasi reiciendis fugit hic repellat dicta. Voluptatem architecto voluptates eos fugiat. Repudiandae illum eos corporis harum nisi laboriosam recusandae veritatis?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wetsuite_products`
--

CREATE TABLE `wetsuite_products` (
  `id` int(11) NOT NULL,
  `nombre_wetsuite` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `wetsuite_products`
--

INSERT INTO `wetsuite_products` (`id`, `nombre_wetsuite`, `img`) VALUES
(1, 'hombres', 'FOTOS/wet1.jpg'),
(2, 'mujeres', 'FOTOS/wet2.jpg'),
(3, 'tendencias', 'FOTOS/wet3.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `individual`
--
ALTER TABLE `individual`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `wetsuite_products`
--
ALTER TABLE `wetsuite_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `individual`
--
ALTER TABLE `individual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `wetsuite_products`
--
ALTER TABLE `wetsuite_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
