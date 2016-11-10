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
 * Clase BellaVista
 */
class BellaVista extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Bella Vista';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:28';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'bella-vista';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Bella Vista de Torreón.';
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
                    'Población total' => 737,
                    'Porcentaje de población masculina' => 48.98,
                    'Porcentaje de población femenina' => 51.02,
                    'Porcentaje de población de 0 a 14 años' => 28.22,
                    'Porcentaje de población de 15 a 64 años' => 64.86,
                    'Porcentaje de población de 65 y más años' => 6.11,
                    'Porcentaje de población no especificada' => 0.81,
                    'Fecundidad promedio' => 2.47,
                    'Porcentaje de población nacida en otro estado' => 23.20,
                    'Porcentaje de población con discapacidad' => 6.94,
                    'Porcentaje de población de 15 y más analfabeta' => 2.31,
                    'Porcentaje de población de 18 y más' => 64.99,
                    'Porcentaje de población de 18 y más postbásicos' => 18.29
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.46,
                    'Grado Promedio de Escolaridad masculina' => 8.77,
                    'Grado Promedio de Escolaridad femenina' => 8.16
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.04,
                    'Población Económicamente Activa masculina' => 62.65,
                    'Población Económicamente Activa femenina' => 37.35,
                    'Población Ocupada' => 91.69,
                    'Población Ocupada masculina' => 61.54,
                    'Población Ocupada femenina' => 38.46,
                    'Población Desocupada' => 8.31,
                    'Derechohabiencia' => 69.47
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 190,
                    'Hogares Jefatura masculina' => 73.22,
                    'Hogares Jefatura femenina' => 26.78,
                    'Ocupación por Vivienda' => 3.88,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.47,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.42,
                    'Viviendas con Automóvil' => 45.06,
                    'Viviendas con Computadora' => 24.84,
                    'Viviendas con Celular' => 64.49,
                    'Viviendas con Internet' => 11.15
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 18,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 55.56,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 5.56,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 5.56,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 5.56
                )
            )
        );
    } // datos

} // Clase BellaVista

?>
