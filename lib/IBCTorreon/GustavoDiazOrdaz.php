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
 * Clase GustavoDiazOrdaz
 */
class GustavoDiazOrdaz extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Gustavo Diaz Ordaz';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:29';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'gustavo-diaz-ordaz';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Gustavo Diaz Ordaz de Torreón.';
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
                    'Población total' => 505,
                    'Porcentaje de población masculina' => 49.06,
                    'Porcentaje de población femenina' => 50.94,
                    'Porcentaje de población de 0 a 14 años' => 22.55,
                    'Porcentaje de población de 15 a 64 años' => 63.70,
                    'Porcentaje de población de 65 y más años' => 11.91,
                    'Porcentaje de población no especificada' => 1.84,
                    'Fecundidad promedio' => 2.57,
                    'Porcentaje de población nacida en otro estado' => 16.59,
                    'Porcentaje de población con discapacidad' => 8.81,
                    'Porcentaje de población de 15 y más analfabeta' => 1.68,
                    'Porcentaje de población de 18 y más' => 69.60,
                    'Porcentaje de población de 18 y más postbásicos' => 24.40
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.50,
                    'Grado Promedio de Escolaridad masculina' => 8.73,
                    'Grado Promedio de Escolaridad femenina' => 8.28
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.06,
                    'Población Económicamente Activa masculina' => 68.10,
                    'Población Económicamente Activa femenina' => 31.90,
                    'Población Ocupada' => 88.70,
                    'Población Ocupada masculina' => 67.32,
                    'Población Ocupada femenina' => 32.68,
                    'Población Desocupada' => 11.30,
                    'Derechohabiencia' => 65.64
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 134,
                    'Hogares Jefatura masculina' => 64.65,
                    'Hogares Jefatura femenina' => 35.35,
                    'Ocupación por Vivienda' => 3.77,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 99.57,
                    'Viviendas con Televisión' => 99.55,
                    'Viviendas con Automóvil' => 53.62,
                    'Viviendas con Computadora' => 37.42,
                    'Viviendas con Celular' => 66.81,
                    'Viviendas con Internet' => 26.34
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 100,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 41.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 27.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 12.00,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 5.00,
                    'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Quinta actividad porcentaje' => 5.00
                )
            )
        );
    } // datos

} // Clase GustavoDiazOrdaz

?>
