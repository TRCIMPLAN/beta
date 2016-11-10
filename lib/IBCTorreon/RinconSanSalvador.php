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
 * Clase RinconSanSalvador
 */
class RinconSanSalvador extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Rincon San Salvador';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'rincon-san-salvador';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Rincon San Salvador de Torreón.';
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
                    'Población total' => 610,
                    'Porcentaje de población masculina' => 51.31,
                    'Porcentaje de población femenina' => 48.69,
                    'Porcentaje de población de 0 a 14 años' => 39.02,
                    'Porcentaje de población de 15 a 64 años' => 58.03,
                    'Porcentaje de población de 65 y más años' => 1.48,
                    'Porcentaje de población no especificada' => 1.47,
                    'Fecundidad promedio' => 1.72,
                    'Porcentaje de población nacida en otro estado' => 20.66,
                    'Porcentaje de población con discapacidad' => 5.13,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 55.41,
                    'Porcentaje de población de 18 y más postbásicos' => 43.44
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.92,
                    'Grado Promedio de Escolaridad masculina' => 13.18,
                    'Grado Promedio de Escolaridad femenina' => 12.67
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 67.77,
                    'Población Económicamente Activa masculina' => 58.05,
                    'Población Económicamente Activa femenina' => 41.95,
                    'Población Ocupada' => 96.52,
                    'Población Ocupada masculina' => 57.75,
                    'Población Ocupada femenina' => 42.25,
                    'Población Desocupada' => 3.48,
                    'Derechohabiencia' => 73.11
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 166,
                    'Hogares Jefatura masculina' => 78.31,
                    'Hogares Jefatura femenina' => 21.69,
                    'Ocupación por Vivienda' => 3.67,
                    'Viviendas con Electricidad' => 99.40,
                    'Viviendas con Agua' => 99.40,
                    'Viviendas con Drenaje' => 99.40,
                    'Viviendas con Televisión' => 98.80,
                    'Viviendas con Automóvil' => 82.53,
                    'Viviendas con Computadora' => 53.01,
                    'Viviendas con Celular' => 92.77,
                    'Viviendas con Internet' => 42.77
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 4,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 75.00,
                    'Segunda actividad nombre' => 'Industria Manufacturera',
                    'Segunda actividad porcentaje' => 25.00
                )
            )
        );
    } // datos

} // Clase RinconSanSalvador

?>
