-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-01-2019 a las 11:23:56
-- Versión del servidor: 5.7.21
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `petfriend`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

DROP TABLE IF EXISTS `alquiler`;
CREATE TABLE IF NOT EXISTS `alquiler` (
  `id_alquiler` int(11) NOT NULL AUTO_INCREMENT,
  `tiempo_ini` datetime NOT NULL,
  `tiempo_fin` datetime NOT NULL,
  `id_usuariokf` int(11) NOT NULL,
  `ide_animalfk` int(11) NOT NULL,
  `id_pagofk` int(11) NOT NULL,
  PRIMARY KEY (`id_alquiler`),
  KEY `id_usuariokf` (`id_usuariokf`,`ide_animalfk`,`id_pagofk`),
  KEY `ide_animalfk` (`ide_animalfk`),
  KEY `id_pagofk` (`id_pagofk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `id_animal` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `especie` text NOT NULL,
  `raza` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `imagen` varchar(500) DEFAULT NULL,
  `img_perfil` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_animal`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`id_animal`, `nombre`, `especie`, `raza`, `edad`, `sexo`, `imagen`, `img_perfil`) VALUES
(2, 'Ramona', 'El loro harinoso amazÃ³nico (Amazona farinosa) es una especie de ave de la familia de los loros (Psittacidae) ampliamente distribuida desde SudamÃ©rica, pasando por AmÃ©rica Central, y hasta MÃ©xico. Habita en las selvas tropicales, espacios de Ã¡rboles esparcidos y manglares. Se crÃ­a comÃºnmente en cautiverio. El amazona farinoso tiene una longitud total de 38 a 41 cm aproximadamente,1â€‹2â€‹ y pesa entre 540 y 700 g. El amazona farinoso es principalmente verde. La parte posterior y la nuca tienen generalmente un tono blanquecino, como si hubiese sido cubierto con una capa delgada de harina, que justifica su nombre.', 'Ave', 1, 'Hembra', '../img/animales/a_bird5.png', '../img/animales/p_bird5.png'),
(3, 'Margarita', 'El periquito mide alrededor de 18 cm de la cabeza a la punta de la cola, y pesa alrededor de 35 g. La variedad silvestre tiene las partes inferiores de color verde claro liso, con la cabeza amarilla con un caracterÃ­stico listado negro en su parte posterior, al igual que el resto de las partes superiores del cuerpo y alas, aunque con fondo verde amarillento. En cambio su garganta y frente son de color amarillo liso, con una pequeÃ±a mancha morada en la mejilla y tres motas negras enmarcando cada lateral de base de la garganta. ', 'Ave', 2, 'Hembra', '../img/animales/a_bird1.png', '../img/animales/p_bird1.png'),
(4, 'Nyah', 'El ragdoll es un gato de pelaje largo o semilargo, con tres variedades de patrÃ³n: colorpoint, bicolor, y mitted. Los colorpoint (tambiÃ©n conocido como gen siamÃ©s) se identifican porque tienen un color diferente al blanco en las extremidades, los bicolor dos colores y los mitted porque tienen barbilla blanca y guantecitos blancos.  Los colores del pelaje pueden ser marrÃ³n (seal), grisÃ¡ceo (blue), chocolate, y lila, tanto en la cara como en los pies. TambiÃ©n existen con otros colores menos tradicionales como crema, rojizo como una llama (flame) y tipo lince.', 'Gato', 2, 'Macho', '../img/animales/a_cat1.png', '../img/animales/p_cat1.png'),
(5, 'Tomate', 'Cuando perros de distinta raza se mezclan, su descendencia manifiesta una amplia variedad de apariencias, algunos se asemejan mÃ¡s a una raza que a otra, mientras que algunos otros exhiben claramente caracterÃ­sticas de ambas. Sin embargo, si los ejemplares se siguen entrecruzando, en las generaciones posteriores poco a poco se irÃ¡n homogenizando sus caracterÃ­sticas hasta llegar a un aspecto mÃ¡s o menos similar.', 'Perro', 4, 'Macho', '../img/animales/a_can1.png', '../img/animales/p_can1.png'),
(6, 'Tiburoncin', 'Son generalmente diurnos y de aguas superficiales de menos de 18 m (algunas sin embargo llegan hasta 180 m), y estos coralÃ­voros son muy territoriales en el coral. En contraste, los que comen zooplancton forman grandes grupos conespecÃ­ficos. De noche permanencen en las hendeduras y grietas del arrecife y exhibe marcadas diferencias de coloraciÃ³n con el diurno.  Son pelÃ¡gicos de freza; o sea, mantienen sus huevos boyantes en el agua convirtiÃ©ndose en parte del plancton, flotando en las corrientes hasta la eclosiÃ³n. Los pequeÃ±os seres pasan por el estadio tolichtis, donde el cuerpo del pez postlarval se cubre de lÃ¡minas extendiÃ©ndose en su cabeza. Este estadio curioso, armado ocurre solo en otra sola familia de peces; los Scatophagidae. Luego el pez pierde esas lÃ¡minas al madurar.', 'Pez', 1, 'Macho', '../img/animales/a_fish2.png', '../img/animales/p_fish2.png'),
(7, 'Rene', 'Iguana es un gÃ©nero de sauropsidos (reptiles) escamosos de la familia Iguanidae nativos de zonas tropicales de CentroamÃ©rica, SudamÃ©rica y el Caribe.[cita requerida] Fue descrito por primera vez por el naturalista austrÃ­aco Josephus Nicolaus Laurenti en su libro Specimen Medicum, Exhibens Synopsin Reptilium Emendatam cum Experimentis circa Venena en 1768. El gÃ©nero Iguana incluye dos especies: la iguana verde (Iguana iguana) y la iguana del Caribe (Iguana delicatissima).  La palabra Â«iguanaÂ» deriva del nombre taÃ­no para este animal: iwana. Iguana iguana es la especie de este gÃ©nero mÃ¡s usada para la crÃ­a en cautiverio.', 'Reptil', 3, 'Hembra', '../img/animales/a_rept1.png', '../img/animales/p_rept1.png'),
(8, 'Jack', 'El Chartreux es una de las mÃ¡s antiguas razas de gatos en el mundo natural. Es nativo de las fronteras de TurquÃ­a e IrÃ¡n, su pelaje lanoso caracterÃ­stico le dio una ventaja en los climas duros. En la Ã©poca de las Cruzadas, los cartujos fueron traÃ­dos en los buques de comercio entre Oriente y Occidente.  SegÃºn la leyenda, la raza se llama \"Cartujo\", ya que vivÃ­an en los monasterios de los monjes cartujos y era utilizado para cazar ratas en un momento en que la peste bubÃ³nica se habÃ­a desenfrenado en toda Europa. El gato se habrÃ­a dado un voto de silencio, un rasgo que persiste hasta el dÃ­a de hoy ya que los Cartujos maÃºllan muy poco. Otra explicaciÃ³n mÃ¡s plausible dice que este gato, durante el siglo XVIII, fue nombrado asÃ­ por la lana densa espaÃ±ola \"pila de cartujos\". La piel de un Cartujo adulto es muy densa, lanosa e impermeable.', 'Gato', 2, 'Hembra', '../img/animales/a_cat5.png', '../img/animales/p_cat5.png'),
(9, 'Blue', 'on perros que responden bien al adiestramiento y adecuadamente socializados serÃ¡n amigables. Son utilizados principalmente como perros de compaÃ±Ã­a. Entre las principales cualidades que hacen de esta raza de perro la favorita de muchos se encuentran su carÃ¡cter alegre y su pequeÃ±o tamaÃ±o, Ã³ptimo para espacios pequeÃ±os y apartamentos. AdemÃ¡s, son animales de fÃ¡cil mantenimiento, porque su pelo corto y su tamaÃ±o lo hacen fÃ¡ciles de cepillar y entrenar. Viven alrededor de 12 aÃ±os.', 'Perro', 2, 'Hembra', '../img/animales/a_can2.png', '../img/animales/p_can2.png'),
(10, 'Tortitas', 'El pato domÃ©stico (Anas platyrhynchos domesticus) es una subespecie de ave anseriforme de la familia Anatidae. Su peso es de entre 3,6 y 4,1 kg, aunque se han desarrollado variedades mayores. Su plumaje es blanco y tiene el pico, las piernas y las patas de color naranja. Algunos pueden tener el pico mÃ¡s amarillo, pero si tienen el pico negro se considera una seria falta en la clasificaciÃ³n. El Pato PekÃ­n blanco es un pato de rÃ¡pido crecimiento; y los pollos son fÃ¡ciles de distinguir de los adultos porque tienen un plumaje brillante y amarillo.', 'Ave', 1, 'Hembra', '../img/animales/a_bird6.png', '../img/animales/p_bird6.png'),
(11, 'PuÃ±os', 'El bulldog francÃ©s es considerado un moloso de talla pequeÃ±a. Sus inicios se hallan en Inglaterra, con el bulldog inglÃ©s, su pariente mÃ¡s cercano, descendiente de las razas tipo mastÃ­n. Y como todos los dogos, su origen se remonta a los molosos de la regiÃ³n de Epiro en Grecia y del Imperio romano.  Es probable que esta raza sea el resultado de diversos cruces entre los toy bulldogs venidos de Gran BretaÃ±a y diversos perros locales. Descendiente de los dogos franceses y del bulldog inglÃ©s (mucho mÃ¡s pesado), es resultado de sucesivos cruces que criadores de los barrios populares de ParÃ­s hicieron a finales del siglo XIX con objeto de conseguir una raza Ã¡gil y atlÃ©tica que fuera buena en los combates de perros.', 'Perro', 2, 'Hembra', '../img/animales/a_can2.png', '../img/animales/p_can2.png'),
(12, 'Nemo 2.0', 'Los peces payaso se caracterizan por sus contrastados e intensos colores, rojo, rosa, negro, amarillo, naranja o blanco. Proceden de los arrecifes de coral del Indo-PacÃ­fico, y viven conjuntamente con las anÃ©monas, teÃ³ricamente especies depredadoras, de las que obtienen una protecciÃ³n frente a posibles atacantes. A cambio, los peces payaso ofrecen la posibilidad de acercar alimento a la boca de la anÃ©mona, y, con su continuo movimiento, limpian el disco oral y los tentÃ¡culos de la anÃ©mona, evitÃ¡ndole infecciones bacterianas. Al tiempo, los ejemplares adultos de pez payaso defienden a sus anÃ©monas hospedantes de peces depredadores especializados, como los peces mariposa de la familia Chaetodontidae.', 'Pez', 2, 'Macho', '../img/animales/a_fish4.png', '../img/animales/p_fish4.png'),
(13, 'Delfy', 'Los delfines (Delphinidae), llamados tambiÃ©n delfines oceÃ¡nicos para distinguirlos de los platanistoideos o delfines de rÃ­o, son una familia de cetÃ¡ceos odontocetos muy heterogÃ©nea, que comprende 34 especies.  Miden entre 2 y 9 metros de largo, con el cuerpo fusiforme y la cabeza de gran tamaÃ±o, el hocico alargado y solo un espirÃ¡culo en la parte superior de la cabeza (orificio respiratorio que muchos animales marinos tienen como contacto del aire o agua con su sistema respiratorio interno). Son carnÃ­voros estrictos.  EstÃ¡n entre las especies mÃ¡s inteligentes que habitan en el planeta. Se encuentran relativamente cerca de las costas y a menudo interactÃºan con el ser humano.', 'Pez', 4, 'Macho', '../img/animales/a_fish3.png', '../img/animales/p_fish3.png'),
(14, 'Peluchito', 'El pit bull terrier americano (American Pit Bull Terrier) es una raza de perro, originaria de Estados Unidos, que se forjÃ³ a partir de perros bull-and-terriers importados desde el Reino Unido en el siglo 19.â€‹ Se utilizaban como perros de pelea hasta que Ã©stas fueron prohibidas en 1976; actualmente son criados como mascotas y atletas en deportes legales. ', 'Perro', 3, 'Hembra', '../img/animales/a_can6.png', '../img/animales/p_can6.png'),
(15, 'Alf', 'El gallo y la gallina (Gallus gallus domesticus) son la subespecie domÃ©stica de la especie Gallus gallus, una especie de ave galliforme de la familia Phasianidae procedente del sudeste asiÃ¡tico. Los nombres comunes son: gallo, para el macho; gallina, para la hembra, y pollo, para los subadultos. Es el ave mÃ¡s numerosa del planeta, pues se calcula que el nÃºmero de ejemplares supera los 16 000 millones. Poseen dos tipos de protuberancias carunculares en la cabeza: una cresta en el pÃ­leo y unos lÃ³bulos que cuelgan a ambos lados del pico. El dorso lo cubre una capa de plumas doradas desde el cuello hasta la espalda.', 'Ave', 2, 'Macho', '../img/animales/a_bird4.png', '../img/animales/p_bird4.png'),
(16, 'Coco', 'El canario domÃ©stico (Serinus canaria domestica)â€‹ es una subespecie desarrollada durante siglos de selecciÃ³n en cautividad partiendo de ejemplares del canario silvestre o canario salvaje (Serinus canaria), una especie de ave del orden paseriforme de la familia de los fringÃ­lidos, endÃ©mica de las islas Canarias, Azores y Madeira.â€‹  Es el ave domÃ©stica criada como animal de compaÃ±Ã­a mÃ¡s abundante del mundo junto con el periquito. A pesar de esto, no se conocen poblaciones asilvestradas.', 'Ave', 2, 'Hembra', '../img/animales/a_bird3.png', '../img/animales/p_bird3.png'),
(17, 'Hulk', 'El periquito (Forpus passerinus) es una especie de ave de la familia de los loros (Psittacidae). Es tÃ­pico en zonas tropicales de SudamÃ©rica, de regiones caribeÃ±as como Colombia, Venezuela y Trinidad, al sur y al este de Guyana y, en Brasil, a lo largo del rÃ­o Amazonas. Ha sido llevado a Jamaica, Curazao, Barbados y Tobago, y no se tiene registrada su apariciÃ³n en Trinidad en perÃ­odos previos a 1916. Su hÃ¡bitat son los bosques abiertos y matorrales. La hembra pone de 5 a 7 huevos blancos en uno de los hoyos de un nido de termitas, en huecos de los troncos de los Ã¡rboles, e incluso en tuberÃ­as vacÃ­as, y los incuba por 18 dÃ­as, hasta que las crÃ­as rompan el cascarÃ³n, y pasan otras 5 semanas aproximadamente para que a Ã©stas les salgan plumas.', 'Ave', 3, 'Macho', '../img/animales/a_bird2.png', '../img/animales/p_bird2.png'),
(18, 'Otto', 'Esta raza de perros fue creada para ayudar en la caza del zorro. Antes de su creaciÃ³n, la cacerÃ­a solÃ­a acabar en fracaso en cuanto el zorro alcanzara su guarida. La introducciÃ³n del fox terrier en la caza resolviÃ³ parcialmente este problema: cuando el zorro se trataba de escabullir bajo tierra, el terrier era enviado en su bÃºsqueda. Esto dio lugar a los requerimientos concretos de esta raza: en primer lugar, tener la resistencia necesaria para correr junto al grupo de cacerÃ­a, segundo, ser lo suficientemente pequeÃ±o para introducirse en la guarida del zorro, y tercero, ser duro y fuerte, ya que un zorro acorralado en su guarida podrÃ­a tratar de repeler al intruso y generar un enfrentamiento.', 'Perro', 3, 'Macho', '../img/animales/a_can5.png', '../img/animales/p_can5.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

DROP TABLE IF EXISTS `pago`;
CREATE TABLE IF NOT EXISTS `pago` (
  `id_pago` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_pago` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `dni_pass` varchar(15) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `cp` int(11) NOT NULL,
  `nom_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `mail` (`mail`,`dni_pass`,`nom_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `mail`, `fecha_nacimiento`, `dni_pass`, `sexo`, `telefono`, `direccion`, `provincia`, `cp`, `nom_user`, `password`, `img`) VALUES
(1, 'admin', 'petfriend', 'admi.petfriend@gmail.com', '1984-01-08', '12345678x', 'mujer', 1231231234, 'direccion1', 'alava', 1400, 'administrador', 'romaol2', ''),
(2, 'diego', 'silva', 'silva@gmail.com', '2016-01-05', '147852369q', 'Hombre', 987654565, 'dire2', 'Vizcaya', 54786, 'dieguito', 'romaol2', '../img/usuarios/op1.png'),
(3, 'queen', 'calva', 'queen@gmail.com', '2000-01-28', '3214568d', 'Hombre', 541236547, 'dire3', 'vizcaya', 56984, 'queen', 'romaol2', '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD CONSTRAINT `alquiler_ibfk_1` FOREIGN KEY (`ide_animalfk`) REFERENCES `animal` (`id_animal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alquiler_ibfk_2` FOREIGN KEY (`id_usuariokf`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alquiler_ibfk_3` FOREIGN KEY (`id_pagofk`) REFERENCES `pago` (`id_pago`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
