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
 * Clase ElOasis
 */
class ElOasis extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'El Oasis';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:28';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'el-oasis';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia El Oasis de Torreón.';
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
                    'Población total' => 213,
                    'Porcentaje de población masculina' => 51.13,
                    'Porcentaje de población femenina' => 48.87,
                    'Porcentaje de población de 0 a 14 años' => 28.76,
                    'Porcentaje de población de 15 a 64 años' => 69.18,
                    'Porcentaje de población de 65 y más años' => 1.99,
                    'Porcentaje de población no especificada' => 0.07,
                    'Fecundidad promedio' => 1.55,
                    'Porcentaje de población nacida en otro estado' => 19.58,
                    'Porcentaje de población con discapacidad' => 0.96,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 65.79,
                    'Porcentaje de población de 18 y más postbásicos' => 56.98
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 13.86,
                    'Grado Promedio de Escolaridad masculina' => 14.31,
                    'Grado Promedio de Escolaridad femenina' => 13.45
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.67,
                    'Población Económicamente Activa masculina' => 69.07,
                    'Población Económicamente Activa femenina' => 30.93,
                    'Población Ocupada' => 99.93,
                    'Población Ocupada masculina' => 69.07,
                    'Población Ocupada femenina' => 30.93,
                    'Población Desocupada' => 0.07,
                    'Derechohabiencia' => 81.43
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 56,
                    'Hogares Jefatura masculina' => 83.24,
                    'Hogares Jefatura femenina' => 16.76,
                    'Ocupación por Vivienda' => 3.80,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.54,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 85.74,
                    'Viviendas con Computadora' => 80.67,
                    'Viviendas con Celular' => 96.56,
                    'Viviendas con Internet' => 67.57
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 1,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 100.00
                )
            )
        );
    } // datos

} // Clase ElOasis

?>
