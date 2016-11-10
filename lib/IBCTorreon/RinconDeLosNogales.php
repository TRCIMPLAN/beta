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
 * Clase RinconDeLosNogales
 */
class RinconDeLosNogales extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Rincon De Los Nogales';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'rincon-de-los-nogales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Rincon De Los Nogales de Torreón.';
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
                    'Población total' => 2017,
                    'Porcentaje de población masculina' => 50.47,
                    'Porcentaje de población femenina' => 49.53,
                    'Porcentaje de población de 0 a 14 años' => 36.79,
                    'Porcentaje de población de 15 a 64 años' => 54.78,
                    'Porcentaje de población de 65 y más años' => 3.37,
                    'Porcentaje de población no especificada' => 5.06,
                    'Fecundidad promedio' => 1.76,
                    'Porcentaje de población nacida en otro estado' => 11.15,
                    'Porcentaje de población con discapacidad' => 2.04,
                    'Porcentaje de población de 15 y más analfabeta' => 0.04,
                    'Porcentaje de población de 18 y más' => 51.41,
                    'Porcentaje de población de 18 y más postbásicos' => 30.74
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.19,
                    'Grado Promedio de Escolaridad masculina' => 11.40,
                    'Grado Promedio de Escolaridad femenina' => 10.98
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 59.79,
                    'Población Económicamente Activa masculina' => 64.52,
                    'Población Económicamente Activa femenina' => 35.48,
                    'Población Ocupada' => 91.11,
                    'Población Ocupada masculina' => 64.63,
                    'Población Ocupada femenina' => 35.37,
                    'Población Desocupada' => 8.89,
                    'Derechohabiencia' => 78.19
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 495,
                    'Hogares Jefatura masculina' => 81.21,
                    'Hogares Jefatura femenina' => 18.79,
                    'Ocupación por Vivienda' => 4.07,
                    'Viviendas con Electricidad' => 99.80,
                    'Viviendas con Agua' => 99.80,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.39,
                    'Viviendas con Automóvil' => 60.40,
                    'Viviendas con Computadora' => 37.78,
                    'Viviendas con Celular' => 86.67,
                    'Viviendas con Internet' => 27.06
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 41,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 41.46,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 21.95,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 14.63,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 9.76,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 7.32
                )
            )
        );
    } // datos

} // Clase RinconDeLosNogales

?>
