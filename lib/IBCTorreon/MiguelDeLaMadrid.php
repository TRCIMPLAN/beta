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
 * Clase MiguelDeLaMadrid
 */
class MiguelDeLaMadrid extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Miguel De La Madrid';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:29';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'miguel-de-la-madrid';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Miguel De La Madrid de Torreón.';
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
                    'Población total' => 1318,
                    'Porcentaje de población masculina' => 50.91,
                    'Porcentaje de población femenina' => 49.09,
                    'Porcentaje de población de 0 a 14 años' => 27.92,
                    'Porcentaje de población de 15 a 64 años' => 67.22,
                    'Porcentaje de población de 65 y más años' => 4.63,
                    'Porcentaje de población no especificada' => 0.23,
                    'Fecundidad promedio' => 2.47,
                    'Porcentaje de población nacida en otro estado' => 16.77,
                    'Porcentaje de población con discapacidad' => 6.03,
                    'Porcentaje de población de 15 y más analfabeta' => 3.42,
                    'Porcentaje de población de 18 y más' => 63.88,
                    'Porcentaje de población de 18 y más postbásicos' => 15.33
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.86,
                    'Grado Promedio de Escolaridad masculina' => 7.84,
                    'Grado Promedio de Escolaridad femenina' => 7.89
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.02,
                    'Población Económicamente Activa masculina' => 74.76,
                    'Población Económicamente Activa femenina' => 25.24,
                    'Población Ocupada' => 92.86,
                    'Población Ocupada masculina' => 74.59,
                    'Población Ocupada femenina' => 25.41,
                    'Población Desocupada' => 7.14,
                    'Derechohabiencia' => 67.68
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 301,
                    'Hogares Jefatura masculina' => 79.73,
                    'Hogares Jefatura femenina' => 20.27,
                    'Ocupación por Vivienda' => 4.38,
                    'Viviendas con Electricidad' => 99.67,
                    'Viviendas con Agua' => 99.67,
                    'Viviendas con Drenaje' => 99.34,
                    'Viviendas con Televisión' => 98.67,
                    'Viviendas con Automóvil' => 41.89,
                    'Viviendas con Computadora' => 23.03,
                    'Viviendas con Celular' => 67.83,
                    'Viviendas con Internet' => 12.26
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 69,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 34.78,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 24.64,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 15.94,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 10.14,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 5.80
                )
            )
        );
    } // datos

} // Clase MiguelDeLaMadrid

?>
