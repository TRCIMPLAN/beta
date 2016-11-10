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
 * Clase TorreonYAnexas
 */
class TorreonYAnexas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Torreon Y Anexas';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'torreon-y-anexas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Torreon Y Anexas de Torreón.';
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
                    'Población total' => 988,
                    'Porcentaje de población masculina' => 50.10,
                    'Porcentaje de población femenina' => 49.90,
                    'Porcentaje de población de 0 a 14 años' => 27.94,
                    'Porcentaje de población de 15 a 64 años' => 62.04,
                    'Porcentaje de población de 65 y más años' => 9.72,
                    'Porcentaje de población no especificada' => 0.30,
                    'Fecundidad promedio' => 2.63,
                    'Porcentaje de población nacida en otro estado' => 12.74,
                    'Porcentaje de población con discapacidad' => 4.22,
                    'Porcentaje de población de 15 y más analfabeta' => 1.02,
                    'Porcentaje de población de 18 y más' => 66.50,
                    'Porcentaje de población de 18 y más postbásicos' => 16.85
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.97,
                    'Grado Promedio de Escolaridad masculina' => 8.03,
                    'Grado Promedio de Escolaridad femenina' => 7.91
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.17,
                    'Población Económicamente Activa masculina' => 71.96,
                    'Población Económicamente Activa femenina' => 28.04,
                    'Población Ocupada' => 76.73,
                    'Población Ocupada masculina' => 67.28,
                    'Población Ocupada femenina' => 32.72,
                    'Población Desocupada' => 23.27,
                    'Derechohabiencia' => 59.01
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 242,
                    'Hogares Jefatura masculina' => 76.45,
                    'Hogares Jefatura femenina' => 23.55,
                    'Ocupación por Vivienda' => 4.08,
                    'Viviendas con Electricidad' => 99.17,
                    'Viviendas con Agua' => 98.35,
                    'Viviendas con Drenaje' => 99.17,
                    'Viviendas con Televisión' => 96.69,
                    'Viviendas con Automóvil' => 15.59,
                    'Viviendas con Computadora' => 15.86,
                    'Viviendas con Celular' => 59.53,
                    'Viviendas con Internet' => 7.33
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 14,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Educativos',
                    'Segunda actividad porcentaje' => 21.43,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 7.14,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 7.14,
                    'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Quinta actividad porcentaje' => 7.14
                )
            )
        );
    } // datos

} // Clase TorreonYAnexas

?>
