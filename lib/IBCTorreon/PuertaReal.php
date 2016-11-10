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
 * Clase PuertaReal
 */
class PuertaReal extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Puerta Real';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:29';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'puerta-real';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Puerta Real de Torreón.';
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
                    'Población total' => 886,
                    'Porcentaje de población masculina' => 48.75,
                    'Porcentaje de población femenina' => 51.25,
                    'Porcentaje de población de 0 a 14 años' => 33.15,
                    'Porcentaje de población de 15 a 64 años' => 64.80,
                    'Porcentaje de población de 65 y más años' => 1.93,
                    'Porcentaje de población no especificada' => 0.12,
                    'Fecundidad promedio' => 1.29,
                    'Porcentaje de población nacida en otro estado' => 32.05,
                    'Porcentaje de población con discapacidad' => 1.06,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 62.48,
                    'Porcentaje de población de 18 y más postbásicos' => 59.58
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 15.16,
                    'Grado Promedio de Escolaridad masculina' => 15.54,
                    'Grado Promedio de Escolaridad femenina' => 14.82
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 64.83,
                    'Población Económicamente Activa masculina' => 60.38,
                    'Población Económicamente Activa femenina' => 39.62,
                    'Población Ocupada' => 97.96,
                    'Población Ocupada masculina' => 60.81,
                    'Población Ocupada femenina' => 39.19,
                    'Población Desocupada' => 2.04,
                    'Derechohabiencia' => 86.07
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 275,
                    'Hogares Jefatura masculina' => 64.05,
                    'Hogares Jefatura femenina' => 35.95,
                    'Ocupación por Vivienda' => 3.22,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.89,
                    'Viviendas con Automóvil' => 96.37,
                    'Viviendas con Computadora' => 85.38,
                    'Viviendas con Celular' => 99.80,
                    'Viviendas con Internet' => 72.68
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

} // Clase PuertaReal

?>
