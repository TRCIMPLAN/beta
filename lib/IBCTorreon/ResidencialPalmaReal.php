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
 * Clase ResidencialPalmaReal
 */
class ResidencialPalmaReal extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Palma Real';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-palma-real';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Palma Real de Torreón.';
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
                    'Población total' => 1451,
                    'Porcentaje de población masculina' => 50.17,
                    'Porcentaje de población femenina' => 49.83,
                    'Porcentaje de población de 0 a 14 años' => 32.64,
                    'Porcentaje de población de 15 a 64 años' => 64.81,
                    'Porcentaje de población de 65 y más años' => 1.73,
                    'Porcentaje de población no especificada' => 0.82,
                    'Fecundidad promedio' => 1.39,
                    'Porcentaje de población nacida en otro estado' => 26.12,
                    'Porcentaje de población con discapacidad' => 0.46,
                    'Porcentaje de población de 15 y más analfabeta' => 0.05,
                    'Porcentaje de población de 18 y más' => 63.22,
                    'Porcentaje de población de 18 y más postbásicos' => 59.63
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 15.16,
                    'Grado Promedio de Escolaridad masculina' => 15.44,
                    'Grado Promedio de Escolaridad femenina' => 14.89
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 67.96,
                    'Población Económicamente Activa masculina' => 60.96,
                    'Población Económicamente Activa femenina' => 39.04,
                    'Población Ocupada' => 99.12,
                    'Población Ocupada masculina' => 60.76,
                    'Población Ocupada femenina' => 39.24,
                    'Población Desocupada' => 0.88,
                    'Derechohabiencia' => 86.39
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 451,
                    'Hogares Jefatura masculina' => 86.37,
                    'Hogares Jefatura femenina' => 13.63,
                    'Ocupación por Vivienda' => 3.22,
                    'Viviendas con Electricidad' => 99.26,
                    'Viviendas con Agua' => 98.82,
                    'Viviendas con Drenaje' => 97.93,
                    'Viviendas con Televisión' => 98.37,
                    'Viviendas con Automóvil' => 97.21,
                    'Viviendas con Computadora' => 85.30,
                    'Viviendas con Celular' => 96.80,
                    'Viviendas con Internet' => 75.04
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 2,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 100.00
                )
            )
        );
    } // datos

} // Clase ResidencialPalmaReal

?>
