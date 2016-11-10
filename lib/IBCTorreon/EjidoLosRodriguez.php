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
 * Clase EjidoLosRodriguez
 */
class EjidoLosRodriguez extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ejido Los Rodriguez';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:28';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ejido-los-rodriguez';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido Los Rodriguez de Torreón.';
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
                    'Población total' => 161,
                    'Porcentaje de población masculina' => 54.74,
                    'Porcentaje de población femenina' => 45.26,
                    'Porcentaje de población de 0 a 14 años' => 23.96,
                    'Porcentaje de población de 15 a 64 años' => 53.23,
                    'Porcentaje de población de 65 y más años' => 18.73,
                    'Porcentaje de población no especificada' => 4.08,
                    'Fecundidad promedio' => 2.42,
                    'Porcentaje de población nacida en otro estado' => 19.49,
                    'Porcentaje de población con discapacidad' => 2.87,
                    'Porcentaje de población de 15 y más analfabeta' => 2.11,
                    'Porcentaje de población de 18 y más' => 50.00,
                    'Porcentaje de población de 18 y más postbásicos' => 12.27
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.01,
                    'Grado Promedio de Escolaridad masculina' => 7.80,
                    'Grado Promedio de Escolaridad femenina' => 8.26
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.60,
                    'Población Económicamente Activa masculina' => 74.28,
                    'Población Económicamente Activa femenina' => 25.72,
                    'Población Ocupada' => 81.66,
                    'Población Ocupada masculina' => 74.15,
                    'Población Ocupada femenina' => 25.85,
                    'Población Desocupada' => 18.34,
                    'Derechohabiencia' => 40.29
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 31,
                    'Hogares Jefatura masculina' => 79.92,
                    'Hogares Jefatura femenina' => 20.08,
                    'Ocupación por Vivienda' => 5.19,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 94.16,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 39.65,
                    'Viviendas con Computadora' => 68.72,
                    'Viviendas con Celular' => 74.30,
                    'Viviendas con Internet' => 36.79
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 2,
                    'Primer actividad nombre' => 'Educativos',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 50.00
                )
            )
        );
    } // datos

} // Clase EjidoLosRodriguez

?>
