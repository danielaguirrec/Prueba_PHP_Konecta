/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  DANIEL
 * Created: 03-dic-2020
 */

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `Nombre_de_producto` varchar(60) NOT NULL,
  `Referencia` varchar(60) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Peso` int(11) NOT NULL,
  `Categoria` varchar(60) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Fecha_de_Creacion` date NOT NULL,
  `Fecha_de_ultima_venta` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `Nombre_de_producto`, `Referencia`, `Precio`, `Peso`, `Categoria`, `Stock`, `Fecha_de_Creacion`, `Fecha_de_ultima_venta`) VALUES
(1, 'esponja', '1221', 30000, 20000, 'aseo', 12, '2020-12-01', '2020-12-01 00:00:00'),
(2, '121', '121', 1, 1, '1', 1, '0000-00-00', '0000-00-00 00:00:00'),
(3, '121', '121', 1, 1, '1', 1, '0000-00-00', '0000-00-00 00:00:00');