-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2018 at 02:51 PM
-- Server version: 5.6.40
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shirba_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartments`
--

CREATE TABLE `apartments` (
  `AptID` int(10) NOT NULL,
  `country` varchar(30) COLLATE utf8_bin NOT NULL,
  `city` varchar(30) COLLATE utf8_bin NOT NULL,
  `street` varchar(30) COLLATE utf8_bin NOT NULL,
  `aptNum` int(5) NOT NULL,
  `zipCode` int(10) NOT NULL,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` varchar(400) COLLATE utf8_bin NOT NULL,
  `guestNum` int(11) NOT NULL,
  `propertyType` enum('Villa','Apartment','Condominium','Loft') COLLATE utf8_bin NOT NULL,
  `propertyStyle` varchar(200) COLLATE utf8_bin NOT NULL,
  `amenities` varchar(200) COLLATE utf8_bin NOT NULL,
  `accessibility` varchar(200) COLLATE utf8_bin NOT NULL,
  `rules` varchar(200) COLLATE utf8_bin NOT NULL,
  `avgRate` float NOT NULL,
  `userID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `apartments`
--

INSERT INTO `apartments` (`AptID`, `country`, `city`, `street`, `aptNum`, `zipCode`, `title`, `description`, `guestNum`, `propertyType`, `propertyStyle`, `amenities`, `accessibility`, `rules`, `avgRate`, `userID`) VALUES
(107, 'Australia', 'Sydney', 'Chalmers Ave', 3, 0, 'Relaxed, Friendly, Spacious Home', 'We are friendly, easy going, love to cook, love meeting people from other countries. \r\ncreative type people: artist & furniture renovation & up-cycling furniture. \r\nwe both love to read, catch up on tv, walk the dogs, socialize with friends and family, and travel. \r\nWe have enjoyed hosting many people from many countries. ', 3, 'Villa', 'seaView,urban,forFamilies', 'WIFI,parking,TV,gym,air_conditioner', 'accesible_parking', 'smoking_allowed,pets_allowed', 0, 111),
(108, 'France', 'Paris', 'Avenue Gambetta', 52, 0, 'A bright, charming and quiet apartment in Paris', 'Great location for a complete Parisian experience close to must-see places of Paris. The heart of the 11th area, with Oberkampf street. There are lots of places to eat and drink along rue Oberkampf, such as CafÃ© Charbon, dating back to 1900 and a lot of shops: food stores, bakeries, groceries, delis, pharmacy, cheese shop, bookshops, florists, bars, butcher, wine shops, greengrocer, post office.', 4, 'Apartment', 'urban,forFamilies', 'WIFI,parking,balcony,safe,iron,washing_machine', 'staircase_free,elivator', 'smoking_allowed,pets_allowed', 0, 222),
(109, 'United Kingdom', 'London', 'Hamlet Gardens', 42, 0, 'Cozy and central 2 bed flat in London', 'Located in the heart of Westbourne Grove, Notting Hill Kensington and Chelsea Central London / Zone 1 . \r\n\r\nA Spacious open plan apartment with space for 2 double beds and a third sofa bed if needed the size is 500 sq foot apartment and there is a small private garden comfortably sleeps 2 adults and 2 children or 4 people of the same family . \r\n', 4, 'Apartment', 'urban,forFamilies', 'WIFI,parking,safe,workspace,TV,iron,fire_place,air_conditioner', 'elivator', 'pets_allowed,suitable_for_events', 0, 333),
(110, 'Italy', 'Rome', 'Via Francesco Orioli', 4, 0, 'Lovely and comfortable flat. Metro stop  \"Ostia Antica\"', 'The house is situated in a very quiet, safe and comfortable neighborhood our flat is well furnished; at ground floor there are Kitchenette, bathroom with shower, dining room with table and chairs, TV set, sofa bed; at first floor there is a nice bed room with double bed. The flat has a small courtyard where you can relax yourselves and you can enjoy the view of Roman Country.', 3, 'Villa', 'seaView,urban,openSpace,forFamilies', 'WIFI,parking,pool,safe,kitchen,iron,fire_place,air_conditioner', '', 'smoking_allowed,suitable_for_events', 0, 444),
(111, 'Spain', 'Barcelona', 'Carrer de Mallorca', 58, 0, 'Lovely attic with terrace - centrally located!!!', 'Our modern and cozy apartment, recently renovated, has everything you need to have a great stay in Barcelona.\r\n\r\nWe offer a 2 bedrooms apartment: the main bedroom sleeps two and the accompanying bedroom is a single with lot of toys! (we can provide an extra mattress if you need it as well as a coat and all the baby stuff).\r\n', 4, 'Apartment', 'urban', 'WIFI,parking,kitchen,workspace,iron,washing_machine,air_conditioner', 'elivator', 'smoking_allowed,pets_allowed,suitable_for_events', 0, 555),
(112, 'Germany', 'Berlin', 'Charlottenburger ', 30, 64575, 'Family garden flat - close to Mitte.', 'This is our home! We offer our light and family-friendly apartment to you: It is a newly built architect designed house (we moved here in January 2014), located on the ground floor in a very quiet street in Berlin-WeiÃŸensee. The large windows of the living-room and the kids room lead to the small garden (south direction).', 4, 'Villa', 'countryHouse,forFamilies', 'WIFI,parking,pool,hot_tub,safe,workspace,TV,air_conditioner', 'accesible_parking', 'smoking_allowed,pets_allowed,suitable_for_events', 0, 666),
(113, 'Spain', 'Madrid', 'Calle de Carretas', 4, 67857756, 'Stunning 1 BR Apartment 1890 Landmark Building Madrid', 'Bright spacious apartment in elegant Barrio de Salamanca, one of the most desirable neighborhoods in Madrid. \r\nThe apartment is only 2 minute walk to El Retiro Park. Fine restaurants, shopping area, nightlife and museums (Prado, Reina Sofia, Thyssen, Caixa Forum, Mapfre, etc) are walking distance as well. \r\n10 minutes to Atocha Train Station (high speed train connects Madrid to Valencia, Barcelona', 2, 'Loft', 'urban', 'WIFI,parking,balcony,hot_tub,safe,kitchen,TV,washing_machine,air_conditioner', '', 'smoking_allowed,pets_allowed', 0, 777),
(114, 'Netherlands', 'Amsterdam', 'Tolstraat ', 120, 64765, 'Amsterdam, light & charming apartment', 'We live in a light and charming apartment in the center of Amsterdam, in the popular neighborhood de Pijp.\r\nThe apartment is divided on the 2 top floors of the building. The living room, the toilet, shower and the kitchen are located at the 3rd floor, and the bedroom at the 4th. The stairs to our apartment are steep, like many of the houses in this area, and there is no lift.\r\n', 2, 'Condominium', 'urban', 'WIFI,parking,safe,kitchen,TV,washing_machine,air_conditioner', 'elivator', 'smoking_allowed,pets_allowed', 0, 888),
(115, 'Portugal', 'Lisbon', 'Largo Mastro', 39, 654646, 'duplex apartment in central Lisbon', 'Magnificent home with contemporary design, modern decor, fully equipped, LCD 42 +32, 8x4 swimming pool, garden, barbeque, 3 spacious rooms with maximum capacity for 7 people, 2 bathrooms, fully equipped kitchen with oven, microwave, machine washing machine and dishwasher. There is possibility to use one of our Car.The house is 10 minutes walk from the best beach area preferica Lisbon and 3 minut', 6, 'Villa', 'forFamilies', 'WIFI,parking,balcony,pool,hot_tub,safe,kitchen,workspace,TV,fire_place,washing_machine,air_conditioner', 'accesible_parking', 'smoking_allowed,pets_allowed,suitable_for_events', 0, 999),
(116, 'Czech Republic', 'Prague', 'Jeseniova ', 96, 6546464, 'UniQ 3plex LOFT | 2 terraces| hippest central neighborhood', 'My flat has unique dispositions, The loft is a part of a newly renovated former industrial building and its triplex. On the 4th floor with lift.\r\nI love cooking from fresh ingredients so on the terrace you will find almost every kitchen herb you can imagine.\r\n', 5, 'Loft', 'urban,forFamilies', 'WIFI,parking,balcony,hot_tub,safe,kitchen,TV,iron,fire_place,washing_machine,air_conditioner', '', 'smoking_allowed,suitable_for_events', 0, 101010),
(117, 'Italy', 'Milan', 'Via Melzo', 12, 654764756, 'Central Milan, large, luxury flat, looking EASTER NY, SUMMER LA', 'We live in the very center of Milan. We bought and recently completely renovated this flat in 3200 square foot historic home.\r\nThere are three bedrooms, each with bath, a large and beautiful living room, dining room, and kitchen. The kitchen is very modern, spacious, all stainless steel with every necessary appliance.', 5, 'Apartment', 'urban,forFamilies', 'WIFI,parking,balcony,hot_tub,kitchen,workspace,TV,washing_machine,air_conditioner', 'elivator', 'smoking_allowed', 0, 111110),
(118, 'Italy', 'Venice', 'Calle Fava', 124, 6564765, 'Historical home in the heart of Venice. Great view, great terrace', 'It is a typical Venitian house of the 18th century. The house has been restored at the end of the last century by a famous spanish architect; then we renovated in a modern way in the 2013. Ideal for families and group of friends. ', 6, 'Apartment', 'forFamilies', 'WIFI,parking,balcony,hot_tub,kitchen,workspace,TV,iron,gym,washing_machine,air_conditioner', 'accesible_parking', 'smoking_allowed,pets_allowed', 0, 121212),
(119, 'USA', 'New York', 'W 46th', 114, 675675, 'Midtown Manhattan with a spectacular view', 'Centrally located flat in vibrant neighborhood on a side street with\r\n- Floor to ceiling windows with both city and water views\r\n- Open kitchen\r\n- High ceilings and lots of natural light\r\n- Large bedroom\r\n- Washer / Dryer in apartment\r\n', 2, 'Apartment', 'urban', 'WIFI,kitchen,workspace,TV,iron,fire_place,washing_machine,air_conditioner', 'elivator', '', 0, 131313),
(120, 'USA', 'Las Vegas', 'Fremont St', 554, 6575656, 'Extraordinary luxury home minutes off Las Vegas strip. The best view!', 'Our house is definitely the best location if you are visiting Las Vegas, we are minutes from the strip. We are also a half hour drive from the Hoover Dam, an hour from the National parks, and a 3 hour drive to the beaches of Los Angeles. Our home is modern, comfortable and beautiful. Our home is built into the mountain wall and removed enough to create a secluded and private environment.', 8, 'Villa', 'forFamilies', 'WIFI,parking,balcony,pool,hot_tub,safe,kitchen,workspace,TV,iron,gym,fire_place,washing_machine,air_conditioner', 'accesible_parking', 'smoking_allowed,pets_allowed,suitable_for_events', 0, 141414),
(121, 'USA', 'Los Angeles', 'W Magnolia Blvd', 11135, 7657566, 'Big, Beautiful New Home in Central Location. No Children.', 'We just bought our dream home! Note: it has two stories and is not handicapped accessible. \r\n\r\nOUR HOME IS NOT APPROPRIATE FOR CHILDREN UNDER 16. I will no longer respond to inquiries which include children under the age of 16 years-old.\r\n', 8, 'Villa', 'countryHouse', 'WIFI,parking,balcony,pool,hot_tub,safe,kitchen,workspace,TV,fire_place,washing_machine,air_conditioner', '', 'pets_allowed', 0, 151515),
(122, 'USA', 'Chicago', 'S Financial Pl', 601, 5654645, 'Beautiful 1 BR Loft in historic Printers Row building. Walk to All', 'Our bright and open in-town home is in one of the best locations in central Chicago. It was renovated in 2010 complete with new kitchen and bath and bamboo floors. The kitchen includes granite counter top, an induction stove top, oven, microwave and dishwasher. The spacious bath has a deep tub and very neat tile. ', 2, 'Loft', 'urban', 'WIFI,kitchen,TV,air_conditioner', 'elivator', 'smoking_allowed,pets_allowed', 0, 161616),
(123, 'USA', 'San Francisco', 'Mission St', 1199, 75867867, 'Beauty in the heart of North Beach', 'The apartment runs the full length of the building and is full of light front to back. In the living room you have a stunning view of the bay, the Golden Gate bridge, and Coit tower. In the back bedroom you have a lovely view of the backyard plants and trees and very quiet to sleep peacefully.', 2, 'Apartment', 'urban', 'WIFI,parking,hot_tub,workspace,TV,iron,washing_machine,air_conditioner', 'elivator', 'smoking_allowed,pets_allowed', 0, 171717),
(124, 'USA', 'Miami Beach', 'Keystone Blvd', 2246, 765756, 'Waterfront Paradise at 5 minutes from the beach', 'Our house is located in North Miami in a very quite and safe gated waterfront comunity only few minutes away from the beach. Outside the comunity there are a lot of shopping areas and good restaurants. Only few minutes away there is the most elegant shopping mall in Miami (Ball Harbour mall)', 8, 'Villa', 'seaView,forFamilies', 'WIFI,parking,balcony,pool,hot_tub,safe,kitchen,workspace,TV,iron,gym,fire_place,washing_machine,air_conditioner', 'accesible_parking', 'smoking_allowed,pets_allowed,suitable_for_events', 0, 181818),
(125, 'Mexico', 'Mexico City', 'Calle de Venustiano Carranza', 60, 0, 'French balcony flat with a lovely City view in Lomas de Chapultepec', 'Full apartment located in the heart at Lomas de Chapultepec (Secure and nice Neighborhood) 2 blocks from Reforma Avenue. This is a Vintage style flat fully equipped 2 bathrooms/ 3 bedrooms for 6 to 9 people. Big size bedrooms!', 9, 'Villa', 'urban,countryHouse', 'WIFI,parking,balcony,kitchen,workspace,TV,fire_place,washing_machine', 'accesible_parking', 'smoking_allowed,pets_allowed,suitable_for_events', 0, 191919),
(126, 'Thailand', 'Bangkok', 'Soi Praphatson', 37, 8768675, 'Large condo in downtown Bangkok with amazing views!\r\n', '-Large open condo on a high floor.\r\n-2 bedrooms. One king size bed + one regular sized bed. We have extra matrasses if needed.\r\n-2 bathrooms (bathtub in one and shower in the other)\r\n-Fully equipped open kitchen.\r\n-Great views from all rooms. \r\n-Small balcony where you can enjoy your dinner or drinks. \r\n-Pool + gym in the building.\r\n', 4, 'Apartment', 'urban', 'WIFI,pool,kitchen,TV,gym,air_conditioner', '', 'smoking_allowed', 0, 202020),
(127, 'China', 'Shanghai', 'Anfu Rd', 275, 878545, 'Luxury 300+ sqm flat in historical Shanghai with amazing view', 'Our apartment is regarded as one of the most desirable complexes in the entire Shanghai. It is right on the edge of the former French Concession where old-style mansions and tree-lined streets have been well preserved. Walking in the neighborhood makes you feel like walking in the park. \r\n', 5, 'Apartment', 'urban', 'WIFI,parking,safe,kitchen,workspace,TV,iron,washing_machine,air_conditioner', 'elivator', 'smoking_allowed', 0, 212121),
(128, 'Israel', 'Jerusalem', 'Azza St', 33, 7656575, 'Lovely garden home in the center of Jerusalem', 'Our house is a lovely old house recently renovated. We have 3 bedrooms, a big full of light living room and kitchen, a sunny front yard and a nice back yard for you to seat and kids to play.\r\nFully equipped kitchen vegetarian.', 7, 'Villa', 'urban,forFamilies', 'WIFI,parking,balcony,safe,kitchen,workspace,TV,iron,fire_place,washing_machine,air_conditioner', 'accesible_parking', '', 0, 252525),
(129, 'Sweden', 'Stockholm', 'RingvÃ¤gen ', 25, 765755, 'Stunning seaside house', 'Our home is a spacious 300+ sq m house right on the bay of Edsviken. Wonderful views and direct access to the sea with own jetty. Surrounded by a nice garden. Perfect for families or couples looking to mix relaxing time in a beautiful house with visits to Stockholm and the surrounding area. ', 7, 'Villa', 'seaView,countryHouse,forFamilies', 'WIFI,parking,balcony,hot_tub,safe,kitchen,TV,iron,washing_machine,air_conditioner', 'accesible_parking', '', 0, 262626),
(130, 'Israel', 'Tel Aviv', 'Pinsker St', 38, 65444, 'Tel Aviv Rooftop appartment', 'We offer a sunny, holiday-like apartment just in the heart of Tel Aviv. For us it often feels like a retreat from the thriving city, with its beaches, cafÃ©s, and world known clubs. Our home is pleasant and full of light', 5, 'Apartment', 'seaView,urban,forFamilies', 'WIFI,parking,balcony,workspace,TV,iron,washing_machine,air_conditioner', 'elivator', 'smoking_allowed,pets_allowed', 0, 272727),
(131, 'Brazil', 'Rio de Janeiro', 'R. OtÃ¡vio CorrÃªa', 435, 6564, 'Penthouse duplex with stunning sea views', 'Our home is located in the heart of a very charming, bohemian neighborhood known for its enchantment and peacefulness.\r\n', 2, 'Apartment', 'seaView', 'WIFI,parking,balcony,hot_tub,safe,kitchen,TV,iron,washing_machine,air_conditioner', '', 'smoking_allowed,pets_allowed', 0, 282828),
(132, 'USA', 'Boston', 'Deforest St', 112, 5364645, 'Charming 3 Bedroom Home on North Shore of Boston', 'Charming Cape Home located on the North Shore of Boston on famous Cape Ann (Gloucester, Rockport, Essex, Manchester-by-the-Sea).\r\nThree bedrooms (one currently being used as an office) and two bathrooms.', 6, 'Villa', 'countryHouse,forFamilies', 'WIFI,parking,balcony,hot_tub,kitchen,workspace,TV,iron,washing_machine,air_conditioner', 'accesible_parking', '', 0, 29292929),
(133, 'Israel', 'Ashkelon', 'Exsodos 18', 9, 0, 'Great, Homy place in a comfortable place!', 'Come and stay at our amazing place, suited for all your needs. near restaurants, bars, play grounds and city center.', 2, 'Loft', 'seaView,openSpace', 'WIFI,balcony,safe,TV,iron', 'wide_corridor', 'smoking_allowed', 0, 123456789),
(134, 'Israel', 'Tel aviv', 'Bograshov 33', 33, 0, 'Beautiful cozy apartment in Tel-aviv', 'Perfect for couples!', 2, 'Villa', 'urban,openSpace', 'WIFI,parking,kitchen', '', 'smoking_allowed,pets_allowed', 0, 203018792),
(135, 'Israel', 'Tel-aviv', 'hayarkon 20', 3, 0, 'great apartment with the yarkon view', 'great apartment with the yarkon view. come ans stay here soon!', 2, 'Villa', 'urban,countryHouse', 'parking', 'elivator', 'pets_allowed', 0, 909090909),
(136, 'Israel', 'Tel Aviv', 'Rabenu-yeruham 5', 2, 0, 'great home in beautiful jaffa ', 'great home in beautiful jaffa. filled with all necessary amenities, near restaurants and the flea market. ', 2, 'Apartment', 'seaView,urban', 'WIFI,parking,balcony,pool,iron,gym', 'wide_corridor,staircase_free', 'smoking_allowed,pets_allowed', 0, 12121212),
(137, 'Israel', 'Raanana', 'HaHagana 3', 2, 0, 'Luxurious Amazing home near the city center - come to stay!!', 'Luxurious place close to city center, just minutes away from ahuza main street where everything happens. ', 2, 'Villa', 'urban,openSpace,forFamilies', 'WIFI,parking,balcony,pool,hot_tub,safe,kitchen,workspace,TV,gym', 'wide_corridor,staircase_free,accesible_parking', 'smoking_allowed,pets_allowed,suitable_for_events', 0, 998899889),
(138, 'israel', 'kiryat gat', 'adoraim', 243, 0, 'Great apartment in the central of kiryat gat', 'decorated and cozy house. Great balcony with a view! Open space, suitable for families.', 5, 'Apartment', 'openSpace,forFamilies', 'WIFI,parking,balcony,kitchen,TV,iron,washing_machine,air_conditioner', 'elivator', 'smoking_allowed,suitable_for_events', 0, 2147483647),
(139, 'Israel', 'Tel Aviv', 'Rabenu Yeruham 5', 9, 0, 'A spacious apartment in a great location', 'This is the best apartment Tel Aviv has to offer! Great location - just 7 minutes walking distance from the beach, 5 minutes away from the wonderful Jaffa flea market and only seconds away from the Tel Aviv Academic College and Maccabi Tel Aviv\'s Blumfield Stadium. ', 5, 'Apartment', 'urban,forFamilies', 'WIFI,kitchen,workspace,TV,iron,washing_machine,air_conditioner', '', 'pets_allowed', 0, 39311027),
(140, 'Israel', 'Tel Aviv', 'Rabenu yeruham 5', 9, 0, 'Amazing place near the flea market!', 'Come visit our place... ', 2, 'Apartment', 'urban', 'WIFI,hot_tub,safe,workspace,iron,gym,fire_place', 'wide_corridor', '', 0, 305641276),
(141, 'israel', 'Tel aviv', 'rabenu yeruham 10', 2, 123321, 'Great apartment near flea market and the beach', 'come stay at our place! :-)', 2, 'Apartment', 'countryHouse,openSpace', 'parking,balcony,pool,safe,iron,fire_place', 'staircase_free', 'smoking_allowed,pets_allowed', 0, 300223313);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`AptID`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartments`
--
ALTER TABLE `apartments`
  MODIFY `AptID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apartments`
--
ALTER TABLE `apartments`
  ADD CONSTRAINT `apartments_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
