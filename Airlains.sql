-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 30 2017 г., 11:47
-- Версия сервера: 5.5.53
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Airlains`
--

-- --------------------------------------------------------

--
-- Структура таблицы `flight`
--

CREATE TABLE `flight` (
  `id` int(11) NOT NULL,
  `city_1` varchar(100) NOT NULL,
  `NCity_1` int(11) NOT NULL,
  `city_2` varchar(11) NOT NULL,
  `NCity_2` int(100) NOT NULL,
  `Distans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `flight`
--

INSERT INTO `flight` (`id`, `city_1`, `NCity_1`, `city_2`, `NCity_2`, `Distans`) VALUES
(2, 'Харьков', 1, 'Стамбул', 3, 4),
(11, 'Стамбул', 3, 'Харьков', 1, 4),
(12, 'Стамбул', 3, 'Киев', 2, 5),
(13, 'Киев', 2, 'Стамбул', 3, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `flightB`
--

CREATE TABLE `flightB` (
  `id` int(11) NOT NULL,
  `NC_1` int(11) NOT NULL,
  `C_1` varchar(255) NOT NULL,
  `NC_2` int(11) NOT NULL,
  `C_2` varchar(255) NOT NULL,
  `DepartureTime` time NOT NULL,
  `ArrivalTime` time NOT NULL,
  `forTicket` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `Nfly` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `flightB`
--

INSERT INTO `flightB` (`id`, `NC_1`, `C_1`, `NC_2`, `C_2`, `DepartureTime`, `ArrivalTime`, `forTicket`, `status`, `Nfly`) VALUES
(1, 1, 'Харьков', 3, 'Стамбул', '09:00:00', '15:00:00', 1, 1, 10001),
(2, 3, 'Стамбул', 2, 'Киев', '18:00:00', '02:00:00', 2, 1, 10002),
(3, 1, 'Харьков', 3, 'Стамбул', '15:00:00', '21:00:00', 1, 1, 10003);

-- --------------------------------------------------------

--
-- Структура таблицы `ListCityHotel`
--

CREATE TABLE `ListCityHotel` (
  `idC` int(11) NOT NULL,
  `nameC` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ListCityHotel`
--

INSERT INTO `ListCityHotel` (`idC`, `nameC`, `img`) VALUES
(1, 'Амстердам', 'Amsterdam.jpg'),
(2, 'Москва', 'Moscov.jpg'),
(3, 'Гонконг', 'Gonkong.jpg'),
(12, 'Милан', 'milan1.jpg'),
(13, 'Санкт-Петербург', 'Piterburg.jpg'),
(14, 'Барселона', 'barselona2.jpg'),
(15, 'Париж', 'Paris2.jpg'),
(16, 'Стамбул', 'Stambul.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `ListServicesbyHotel`
--

CREATE TABLE `ListServicesbyHotel` (
  `idSer` int(11) NOT NULL,
  `WiFi` int(11) NOT NULL,
  `Poll` int(11) NOT NULL,
  `Animls` int(11) NOT NULL,
  `parking` int(11) NOT NULL,
  `restor` int(11) NOT NULL,
  `fitnes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ListServicesbyHotel`
--

INSERT INTO `ListServicesbyHotel` (`idSer`, `WiFi`, `Poll`, `Animls`, `parking`, `restor`, `fitnes`) VALUES
(1, 1, 1, 1, 1, 1, 1),
(2, 1, 0, 1, 1, 1, 0),
(3, 1, 0, 1, 1, 1, 0),
(4, 1, 0, 1, 1, 1, 1),
(5, 1, 0, 1, 1, 1, 1),
(6, 1, 0, 0, 1, 1, 1),
(7, 1, 1, 1, 1, 1, 1),
(8, 1, 0, 1, 1, 1, 1),
(9, 1, 0, 1, 1, 1, 1),
(10, 1, 0, 0, 1, 1, 1),
(11, 1, 0, 0, 1, 1, 1),
(12, 1, 0, 0, 1, 1, 1),
(13, 1, 1, 0, 1, 1, 1),
(14, 1, 0, 0, 1, 1, 1),
(15, 1, 1, 0, 1, 1, 1),
(16, 1, 0, 1, 1, 1, 1),
(17, 1, 0, 0, 1, 1, 0),
(18, 1, 0, 0, 1, 1, 0),
(19, 1, 0, 0, 1, 1, 1),
(20, 1, 0, 1, 1, 0, 0),
(21, 1, 1, 0, 1, 1, 0),
(22, 1, 0, 1, 1, 1, 1),
(23, 1, 0, 0, 1, 1, 1),
(24, 1, 0, 0, 1, 1, 0),
(25, 1, 0, 1, 1, 0, 1),
(26, 1, 1, 1, 1, 0, 0),
(27, 1, 1, 0, 1, 0, 1),
(28, 1, 1, 0, 1, 0, 1),
(29, 1, 0, 0, 1, 0, 1),
(30, 1, 0, 1, 1, 0, 0),
(31, 1, 0, 1, 1, 1, 0),
(32, 1, 0, 1, 1, 1, 0),
(33, 1, 0, 1, 1, 1, 0),
(34, 1, 0, 1, 1, 1, 1),
(35, 1, 0, 1, 1, 0, 1),
(36, 1, 1, 0, 1, 1, 1),
(37, 1, 1, 0, 1, 1, 1),
(38, 1, 1, 0, 1, 1, 1),
(39, 1, 0, 0, 1, 1, 0),
(40, 1, 0, 0, 1, 1, 1),
(42, 1, 1, 1, 1, 1, 1),
(43, 1, 1, 1, 1, 1, 1),
(44, 1, 1, 1, 1, 1, 1),
(45, 1, 1, 1, 1, 1, 1),
(46, 1, 1, 1, 1, 1, 1),
(47, 1, 1, 1, 1, 1, 1),
(48, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `LlistHotel`
--

CREATE TABLE `LlistHotel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `CountStars` int(11) NOT NULL,
  `img` text NOT NULL,
  `city_id` int(11) NOT NULL,
  `Services_id` int(11) NOT NULL,
  `LINK` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `LlistHotel`
--

INSERT INTO `LlistHotel` (`id`, `name`, `CountStars`, `img`, `city_id`, `Services_id`, `LINK`) VALUES
(4, 'NH Collection Grand Hotel Kransopalky', 4, 'NHCollectionGrandHotelKransopalky.png', 1, 1, 'https://www.nh-collection.com/hotel/nh-collection-amsterdam-grand-hotel-krasnapolsky'),
(5, 'Inntel Hotels Amsterdam Centre', 4, 'Inntel Hotels Amsterdam Centre.jpg', 1, 2, 'http://www.inntelhotelsamsterdamcentre.nl/en/Home.html'),
(6, 'Bilderberg Hotel Jan Luyken', 4, 'Bilderberg Hotel Jan Luyken.jpg', 1, 3, 'https://www.bilderberg.nl/amsterdam/hotel-jan-luyken/'),
(7, 'Hyatt Regency Amsterdam', 5, 'Hyatt Regency Amsterdam.jpg', 1, 4, 'https://amsterdam.regency.hyatt.com/en/hotel/home.html'),
(8, 'Hotel Estheréa', 4, 'Hotel Estheréa.jpg', 1, 5, 'http://www.estherea.nl/ru/index.html'),
(9, 'Отель Кортъярд Марриотт Москва Центр', 4, 'Отель Кортъярд Марриотт Москва Центр.jpg', 2, 6, 'http://www.marriott.com.ru/hotels/travel/mowcy-courtyard-moscow-city-center/'),
(11, 'Холидей Инн Москва Сокольники', 4, 'Холидей Инн Москва Сокольники.jpg', 2, 7, 'http://hi-sokolniki.ru/'),
(13, 'Crowne Plaza Moscow World Trade Centre', 5, 'Crowne Plaza Moscow World Trade Centre.jpg', 2, 8, 'https://www.cpmow.ru/'),
(14, 'Гостиница Метрополь', 5, 'Гостиница Метрополь.jpg', 2, 9, 'http://metropol-moscow.ru/'),
(15, 'Гостиница Шератон Палас Москва', 5, 'Гостиница Шератон Палас Москва.jpg', 2, 10, 'http://www.sheratonpalace.ru/'),
(16, 'Empire Hotel Hong Kong - Wan Chai', 4, 'Empire Hotel Hong Kong - Wan Chai.jpg', 3, 11, 'http://www.empirehotelsandresorts.com/en/index.aspx'),
(17, 'OZO Wesley Hong Kong', 4, 'OZO Wesley Hong Kong.jpg', 3, 12, 'http://www.ozohotels.com/wesley-hongkong/'),
(18, 'Regal Airport Hotel', 5, 'Regal Airport Hotel2.jpg', 3, 13, 'https://www.regalhotel.com/regal-hotels-international/en/home/home.html'),
(19, 'The Harbourview', 4, 'The Harbourview.jpg', 3, 14, 'http://www.theharbourview.com.hk/'),
(20, 'Holiday Inn Golden Mile', 4, 'Holiday Inn Golden Mile.jpg', 3, 15, 'https://www.ihg.com/holidayinn/hotels/us/en/hong-kong/hkgkl/hoteldetail'),
(21, 'Glam Milano', 4, 'Glam Milano.jpg', 12, 16, 'https://glamhotelmilano.it/ru/index.html'),
(22, 'Smart Hotel Central', 3, 'Smart Hotel Central.jpg', 12, 17, 'http://www.smarthotelrome.com/ru/'),
(23, 'Hotel Michelangelo', 4, 'Hotel Michelangelo.jpg', 12, 18, 'http://www.michelangelohotelmilan.com/russian/'),
(24, 'Best Western Plus Hotel Galles', 4, 'Best Western Plus Hotel Galles.jpg', 12, 19, 'http://www.hotel-galles.it/ru/home-page.aspx'),
(25, 'Starhotels Echo', 4, 'Starhotels Echo.jpg', 12, 20, 'https://www.starhotels.com/en/our-hotels/echo-milan/'),
(26, 'Park Inn by Radisson Pulkovskaya', 4, 'Park Inn by Radisson Pulkovskaya.jpg', 13, 21, 'https://www.parkinn.ru/hotelpulkovskaya-stpetersburg?facilitator=BIGMOUTHMEDIAREZIDOR&gclid=CPr8kL-ypNQCFcGkGAodxkQDow&csref=ppc_g_cr_pd_ru_ho_ledpd_brand'),
(27, 'Solo Sokos Hotel Palace Bridge', 5, 'Solo Sokos Hotel Palace Bridge.jpg', 13, 22, 'https://www.sokoshotels.fi/ru/sankt-peterburg/sokos-hotel-palace-bridge'),
(28, 'Majestic Boutique Hotel Deluxe', 4, 'Majestic Boutique Hotel Deluxe.jpg', 13, 23, 'http://hotelmajestic.ru/'),
(29, 'Petro Palace Hotel', 5, 'Petro Palace Hotel.jpg', 13, 24, 'http://www.petropalacehotel.com/home/'),
(30, 'Solo Sokos Hotel Vasilievsky', 4, 'Solo Sokos Hotel Vasilievsky.jpg', 13, 25, 'https://www.sokoshotels.fi/ru/sankt-peterburg/sokos-hotel-vasilievsky'),
(31, 'Catalonia Atenas', 4, 'Catalonia Atenas.jpg', 14, 26, 'http://www.hoteles-catalonia.com/ru/home.jsp'),
(32, 'Eurostars Grand Marina Hotel GL', 5, 'Eurostars Grand Marina Hotel GL.jpg', 14, 27, 'http://www.grandmarinahotel.com/ru/hotel.html'),
(33, 'Sunotel Central', 4, 'Sunotel Central.jpg', 14, 28, 'https://www.sunotel.es/sunotel-central-c1jo7'),
(34, 'Barceló Sants', 4, 'Barceló Sants.jpg', 14, 29, 'https://www.barcelo.com/ru/oteli/ispaniya/barselona/barcelo-sants/?gclid=CKCHn6W5pNQCFQ46GwodVHcOxA&gclsrc=aw.ds&dclid=CL-L3KW5pNQCFUKYGAodkakFIQ'),
(35, 'Petit Palace Boqueria Garden', 4, 'Petit Palace Boqueria Garden.jpg', 14, 30, 'http://www.petitpalaceboqueriagarden.co.uk/'),
(36, 'Holiday Inn Paris Gare de l\'Est', 4, 'Holiday Inn Paris Gare de lEst.jpg', 15, 31, 'https://www.ihg.com/hotels/ru/ru/paris/parge/hoteldetail'),
(37, 'Mercure Paris Terminus Nord', 4, 'Mercure Paris Terminus Nord.jpg', 15, 32, 'http://www.mercure.com/gb/hotel-2761-mercure-paris-terminus-nord/index.shtml'),
(38, 'Waldorf Madeleine', 4, 'Waldorf Madeleine.jpg', 15, 33, 'http://www.hotelwaldorftrocadero.com/fr/index.php'),
(39, 'Novotel Paris Centre Tour Eiffel ', 4, 'Novotel Paris Centre Tour Eiffel .jpg', 15, 34, 'http://www.novotel.com/ru/hotel-3546-novotel-%D0%BF%D0%B0%D1%80%D0%B8%D0%B6-%D1%8D%D0%B9%D1%84%D0%B5%D0%BB%D0%B5%D0%B2%D0%B0-%D0%B1%D0%B0%D1%88%D0%BD%D1%8F/index.shtml'),
(40, 'Hipark Design Suites La Villette', 4, 'Hipark Design Suites La Villette.jpg', 15, 35, 'http://www.hipark.fr/en/paris-la-villette/'),
(41, 'Sura Hagia Sophia Hotel', 5, 'Sura Hagia Sophia Hotel.jpg', 16, 36, 'http://www.surahagiasophiahotel.com/'),
(42, 'Radisson Blu Hotel, Istanbul Sisli', 5, 'Radisson Blu Hotel, Istanbul Sisli.jpg', 16, 37, 'https://www.radissonblu.com/ru/hotel-istanbul-sisli'),
(44, 'Prestige Hotel', 3, 'Prestige Hotel.jpg', 16, 39, 'http://www.hotelprestige.com.tr/default-en.html'),
(45, 'Grand Hotel Gulsoy', 4, 'Grand Hotel Gulsoy.jpg', 16, 40, 'http://www.grandhotelgulsoy.com/');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(11) NOT NULL,
  `Nflight` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Data_ticket` date NOT NULL,
  `NandS_passport` varchar(30) NOT NULL,
  `TypeTicket` varchar(30) NOT NULL,
  `NameC` varchar(30) NOT NULL,
  `SurnameC` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_orders`, `Nflight`, `Price`, `Data_ticket`, `NandS_passport`, `TypeTicket`, `NameC`, `SurnameC`) VALUES
(9, 10001, 0, '0000-00-00', 'MT123456', 'Выберите тип билета', 'Владислав', 'Гаврилов'),
(10, 10001, 1500, '0000-00-00', '', 'Бизнес класс', '', ''),
(11, 10001, 0, '0000-00-00', '', 'Эконом', 'Александра', 'Балюк'),
(12, 10001, 0, '0000-00-00', '', 'Эконом', '', ''),
(13, 10001, 1500, '0000-00-00', '', 'Бизнес класс', '', ''),
(14, 10001, 1500, '0000-00-00', '', 'Бизнес класс', '', ''),
(15, 10001, 0, '0000-00-00', '', 'Выберите тип билета', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `nameBisnes` varchar(30) NOT NULL,
  `PriceBisnes` int(11) NOT NULL,
  `NofSeatsBinses` int(11) NOT NULL,
  `nameFist` varchar(30) NOT NULL,
  `PriceFist` int(11) NOT NULL,
  `NofSeatsFist` int(11) NOT NULL,
  `nameEco` varchar(30) NOT NULL,
  `PriceEco` int(11) NOT NULL,
  `NofSeatsEco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `nameBisnes`, `PriceBisnes`, `NofSeatsBinses`, `nameFist`, `PriceFist`, `NofSeatsFist`, `nameEco`, `PriceEco`, `NofSeatsEco`) VALUES
(1, 'Бизнес класс', 1500, 10, 'Первый класс', 1200, 25, 'Экономный', 900, 65),
(2, 'Бизнес класс', 1500, 10, 'Первый класс', 1200, 25, 'Экономный', 900, 65),
(3, 'Бизнес класс', 1500, 10, 'Первый класс', 1200, 25, 'Экономный', 900, 65);

-- --------------------------------------------------------

--
-- Структура таблицы `town`
--

CREATE TABLE `town` (
  `id` int(11) NOT NULL,
  `town` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `town`
--

INSERT INTO `town` (`id`, `town`) VALUES
(1, 'Харьков');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `flightB`
--
ALTER TABLE `flightB`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ListCityHotel`
--
ALTER TABLE `ListCityHotel`
  ADD PRIMARY KEY (`idC`);

--
-- Индексы таблицы `ListServicesbyHotel`
--
ALTER TABLE `ListServicesbyHotel`
  ADD PRIMARY KEY (`idSer`),
  ADD KEY `idSer` (`idSer`);

--
-- Индексы таблицы `LlistHotel`
--
ALTER TABLE `LlistHotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Services_id` (`Services_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`);

--
-- Индексы таблицы `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Индексы таблицы `town`
--
ALTER TABLE `town`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `flight`
--
ALTER TABLE `flight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `flightB`
--
ALTER TABLE `flightB`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `ListCityHotel`
--
ALTER TABLE `ListCityHotel`
  MODIFY `idC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `ListServicesbyHotel`
--
ALTER TABLE `ListServicesbyHotel`
  MODIFY `idSer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT для таблицы `LlistHotel`
--
ALTER TABLE `LlistHotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `town`
--
ALTER TABLE `town`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `LlistHotel`
--
ALTER TABLE `LlistHotel`
  ADD CONSTRAINT `llisthotel_ibfk_1` FOREIGN KEY (`Services_id`) REFERENCES `ListServicesbyHotel` (`idSer`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
