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
 * Clase ResidencialHaciendaElRosario
 */
class ResidencialHaciendaElRosario extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Hacienda El Rosario';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:10';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-hacienda-el-rosario';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Hacienda El Rosario de Torreón.';
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
                    'Población total' => 553,
                    'Porcentaje de población masculina' => 47.38,
                    'Porcentaje de población femenina' => 52.62,
                    'Porcentaje de población de 0 a 14 años' => 27.12,
                    'Porcentaje de población de 15 a 64 años' => 66.00,
                    'Porcentaje de población de 65 y más años' => 3.07,
                    'Porcentaje de población no especificada' => 3.81,
                    'Fecundidad promedio' => 1.47,
                    'Porcentaje de población nacida en otro estado' => 26.40,
                    'Porcentaje de población con discapacidad' => 1.02,
                    'Porcentaje de población de 15 y más analfabeta' => 0.02,
                    'Porcentaje de población de 18 y más' => 64.20,
                    'Porcentaje de población de 18 y más postbásicos' => 59.67
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.69,
                    'Grado Promedio de Escolaridad masculina' => 15.24,
                    'Grado Promedio de Escolaridad femenina' => 14.18
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.19,
                    'Población Económicamente Activa masculina' => 62.71,
                    'Población Económicamente Activa femenina' => 37.29,
                    'Población Ocupada' => 98.71,
                    'Población Ocupada masculina' => 62.66,
                    'Población Ocupada femenina' => 37.34,
                    'Población Desocupada' => 1.29,
                    'Derechohabiencia' => 78.84
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 138,
                    'Hogares Jefatura masculina' => 93.48,
                    'Hogares Jefatura femenina' => 6.52,
                    'Ocupación por Vivienda' => 4.01,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.55,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 100.00,
                    'Viviendas con Computadora' => 92.03,
                    'Viviendas con Celular' => 100.00,
                    'Viviendas con Internet' => 86.96
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 9,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 55.56,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 33.33,
                    'Tercera actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Tercera actividad porcentaje' => 11.11
                )
            )
        );
    } // datos

    /**
     * Mapas
     *
     * @return string
     */
    public function mapas() {
        return array(
            'Límites'         => \Configuracion\IBCTorreonConfig::LIMITES,
            'Centro latitud'  => 25.0,
            'Centro longitud' => -103.5);
    } // mapas

} // Clase ResidencialHaciendaElRosario

?>
