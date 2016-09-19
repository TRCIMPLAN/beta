<?php
/**
 * TrcIMPLAN Índice Básico de Colonias
 *
 * Copyright (C) 2016 Guillermo Valdes Lozano
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package TrcIMPLAN
 */

namespace IBCTorreon;

/**
 * Clase Aeropuerto
 */
class Aeropuerto extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Aeropuerto';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'aeropuerto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Aeropuerto de Torreón.';
        $this->claves      = 'IMPLAN, Torreon, Desagregación';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio  = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu = 'Indicadores Básicos por Colonias > Colonias de Torreón';
        // Para el Organizador
        $this->categorias  = array();
        $this->fuentes     = array();
        $this->regiones    = array('Torreón');
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                '2010' => array(
                    'Población total' => 237,
                    'Porcentaje de población masculina' => 51.05,
                    'Porcentaje de población femenina' => 48.95,
                    'Porcentaje de población de 0 a 14 años' => 34.60,
                    'Porcentaje de población de 15 a 64 años' => 62.45,
                    'Porcentaje de población de 65 y más años' => 2.95,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.38,
                    'Porcentaje de población nacida en otro estado' => 13.92,
                    'Porcentaje de población con discapacidad' => 0.99
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.75,
                    'Grado Promedio de Escolaridad masculina' => 11.88,
                    'Grado Promedio de Escolaridad femenina' => 11.61
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.81,
                    'Población Económicamente Activa masculina' => 62.50,
                    'Población Económicamente Activa femenina' => 37.50,
                    'Población Ocupada' => 90.98,
                    'Población Ocupada masculina' => 59.09,
                    'Población Ocupada femenina' => 40.91,
                    'Población Desocupada' => 9.02,
                    'Derechohabiencia' => 77.22
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 64,
                    'Hogares Jefatura masculina' => 84.38,
                    'Hogares Jefatura femenina' => 15.62,
                    'Ocupación por Vivienda' => 3.70,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.44,
                    'Viviendas con Automóvil' => 68.75,
                    'Viviendas con Computadora' => 50.00,
                    'Viviendas con Celular' => 92.19,
                    'Viviendas con Internet' => 40.62
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 2,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 50.00
                )
            )
        );
    } // datos

} // Clase Aeropuerto

?>
