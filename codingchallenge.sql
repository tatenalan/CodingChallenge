-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2020 a las 06:56:00
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `codingchallenge`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `legisladores`
--

CREATE TABLE `legisladores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `votos` bigint(20) NOT NULL,
  `partido_id` bigint(20) UNSIGNED NOT NULL,
  `inicioMandato` date NOT NULL,
  `finMandato` date NOT NULL,
  `automatico` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `legisladores`
--

INSERT INTO `legisladores` (`id`, `created_at`, `updated_at`, `nombre`, `apellido`, `email`, `telefono`, `direccion`, `pais`, `votos`, `partido_id`, `inicioMandato`, `finMandato`, `automatico`) VALUES
(3, '2020-05-16 01:58:22', '2020-05-17 06:14:34', 'Arnold', 'Schwarzenegger', 'arnoldpredator@gmail.com', '0111544373492', 'California Av 234', 'Ecuador', 778686, 3, '2020-05-17', '2021-05-17', 1),
(5, '2020-05-16 02:00:06', '2020-05-17 06:00:45', 'Roberto', 'Carlos', 'rcarlos@gmail.com', '0111544373492', 'Ipanema 43423', 'Brasil', 57674654, 3, '2020-05-05', '2021-05-05', 1),
(7, '2020-05-17 00:03:06', '2020-05-18 02:17:28', 'Ramon', 'Valdez', 'rvaldez@live.com', '12325365', 'juana manso 123', 'Argentina', 24893874, 1, '2020-05-23', '2021-05-23', 0),
(8, '2020-05-17 06:02:37', '2020-05-17 06:02:37', 'Ricardo', 'Montanter', 'Rmontaner@yahoo.com', '23463767', 'Luna Park', 'Bolivia', 2327328, 2, '2017-01-30', '2018-01-30', 0),
(9, '2020-05-17 06:03:47', '2020-05-17 06:03:47', 'Alfredo', 'Mercurio', 'freddieMercury@queen.com', '3823752398', 'Av Maipu 2039', 'Argentina', 382932, 1, '1980-04-13', '1981-04-13', 0),
(10, '2020-05-17 06:05:41', '2020-05-17 06:05:41', 'Tarcelo', 'Minelli', 'MTinelli@telefe.com', '039859379', 'Ruta 29 km 12', 'Argentina', 82927, 2, '1995-12-12', '1996-12-12', 0),
(11, '2020-05-17 06:06:45', '2020-05-17 06:06:45', 'Beatriz', 'Salomon', 'Betty232@salomon.com', '92827', 'Lacarra 1231 5to A', 'Chile', 9349, 1, '1993-05-11', '1994-05-11', 1),
(12, '2020-05-17 06:09:01', '2020-05-17 06:09:01', 'Ricardo', 'Fort', 'Rfort@felfort.com', '8292898', 'Av Maiame 1500', 'Colombia', 1000, 3, '2011-11-20', '2012-11-20', 1),
(13, '2020-05-17 06:10:14', '2020-05-17 06:10:14', 'Alfredo', 'Pacino', 'Al@scarface.com', '28932899', 'Blvrd Dupy', 'Ecuador', 28989, 1, '2020-05-04', '2021-05-04', 1),
(14, '2020-05-17 06:11:44', '2020-05-17 06:15:10', 'Catherine', 'Fulop', 'Cathy329@yahoo.com', '284379878', 'Avenida 9 de Mayo 298 3ro B', 'Brasil', 818278, 3, '1978-03-15', '1979-03-15', 1),
(16, '2020-05-18 18:28:29', '2020-05-18 18:28:29', 'Carlos', 'Lopez', 'clopez@hotmail.com', '765675765', 'sargento cabral 345', 'Argentina', 2324, 2, '2020-05-31', '2021-05-31', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_05_14_224124_create_partidos_table', 1),
(4, '2020_05_14_224237_create_legisladores_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

CREATE TABLE `partidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `partidos`
--

INSERT INTO `partidos` (`id`, `created_at`, `updated_at`, `nombre`) VALUES
(1, NULL, NULL, 'Azul'),
(2, NULL, NULL, 'Rojo'),
(3, NULL, NULL, 'Verde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$BxEvCG2uhEEprdW.prX.LeVS9UeXPVJ6NmNpfV2igIHRs/UbFTh2G', NULL, '2020-05-16 08:54:42', '2020-05-16 08:54:42'),
(2, 'Prueba', 'admin@adminprueba.com', NULL, '$2y$10$10TBzRFscQfNK/dp.rIi.uZLXjriRqtPDJ/Y6DiKkphdcKo012k4K', NULL, '2020-05-16 08:55:23', '2020-05-16 08:55:23'),
(3, 'adad', 'wordpress2342142@gmail.com', NULL, '$2y$10$fgoeGUUfQfoPqO6I.icvIOS2gz76Dendio8kODcXp4A59o4Gntlee', NULL, '2020-05-16 08:56:04', '2020-05-16 08:56:04'),
(4, '3adsadas', 'aad@asfas.com', NULL, '$2y$10$iB.W8ixCkwwnZgPSq1I7XuTVHAEovMtiEASgMoYAP8I6fZ5Y7RTM6', NULL, '2020-05-16 08:56:31', '2020-05-16 08:56:31'),
(5, 'Alan', 'registro@asd.com', NULL, '$2y$10$oD0neK3pGzLwI9HpWU9eI.WFXnQ/ue1ww1wy4bL2m00PjB3WeYx4q', NULL, '2020-05-18 18:30:27', '2020-05-18 18:30:27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `legisladores`
--
ALTER TABLE `legisladores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `legisladores_partido_id_foreign` (`partido_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `legisladores`
--
ALTER TABLE `legisladores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `partidos`
--
ALTER TABLE `partidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `legisladores`
--
ALTER TABLE `legisladores`
  ADD CONSTRAINT `legisladores_partido_id_foreign` FOREIGN KEY (`partido_id`) REFERENCES `partidos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
