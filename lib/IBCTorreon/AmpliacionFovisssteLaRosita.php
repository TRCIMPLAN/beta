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
 * Clase AmpliacionFovisssteLaRosita
 */
class AmpliacionFovisssteLaRosita extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ampliacion Fovissste La Rosita';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:28';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ampliacion-fovissste-la-rosita';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ampliacion Fovissste La Rosita de Torreón.';
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
                    'Población total' => 541,
                    'Porcentaje de población masculina' => 49.06,
                    'Porcentaje de población femenina' => 50.94,
                    'Porcentaje de población de 0 a 14 años' => 19.16,
                    'Porcentaje de población de 15 a 64 años' => 73.75,
                    'Porcentaje de población de 65 y más años' => 5.41,
                    'Porcentaje de población no especificada' => 1.68,
                    'Fecundidad promedio' => 1.80,
                    'Porcentaje de población nacida en otro estado' => 24.44,
                    'Porcentaje de población con discapacidad' => 3.32,
                    'Porcentaje de población de 15 y más analfabeta' => 0.06,
                    'Porcentaje de población de 18 y más' => 74.87,
                    'Porcentaje de población de 18 y más postbásicos' => 59.81
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.67,
                    'Grado Promedio de Escolaridad masculina' => 13.23,
                    'Grado Promedio de Escolaridad femenina' => 12.19
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.17,
                    'Población Económicamente Activa masculina' => 50.65,
                    'Población Económicamente Activa femenina' => 49.35,
                    'Población Ocupada' => 95.06,
                    'Población Ocupada masculina' => 50.67,
                    'Población Ocupada femenina' => 49.33,
                    'Población Desocupada' => 4.94,
                    'Derechohabiencia' => 81.71
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 160,
                    'Hogares Jefatura masculina' => 68.63,
                    'Hogares Jefatura femenina' => 31.37,
                    'Ocupación por Vivienda' => 3.38,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 97.13,
                    'Viviendas con Automóvil' => 70.17,
                    'Viviendas con Computadora' => 68.23,
                    'Viviendas con Celular' => 93.34,
                    'Viviendas con Internet' => 48.78
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 40.00,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 20.00
                )
            )
        );
    } // datos

} // Clase AmpliacionFovisssteLaRosita

?>
