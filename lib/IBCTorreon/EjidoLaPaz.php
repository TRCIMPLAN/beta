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
 * Clase EjidoLaPaz
 */
class EjidoLaPaz extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ejido La Paz';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:28';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ejido-la-paz';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido La Paz de Torreón.';
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
                    'Población total' => 2485,
                    'Porcentaje de población masculina' => 48.43,
                    'Porcentaje de población femenina' => 51.57,
                    'Porcentaje de población de 0 a 14 años' => 27.55,
                    'Porcentaje de población de 15 a 64 años' => 65.23,
                    'Porcentaje de población de 65 y más años' => 6.82,
                    'Porcentaje de población no especificada' => 0.40,
                    'Fecundidad promedio' => 2.45,
                    'Porcentaje de población nacida en otro estado' => 5.80,
                    'Porcentaje de población con discapacidad' => 6.95,
                    'Porcentaje de población de 15 y más analfabeta' => 2.46,
                    'Porcentaje de población de 18 y más' => 63.93,
                    'Porcentaje de población de 18 y más postbásicos' => 13.66
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.77,
                    'Grado Promedio de Escolaridad masculina' => 7.81,
                    'Grado Promedio de Escolaridad femenina' => 7.73
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.72,
                    'Población Económicamente Activa masculina' => 67.05,
                    'Población Económicamente Activa femenina' => 32.95,
                    'Población Ocupada' => 91.94,
                    'Población Ocupada masculina' => 65.39,
                    'Población Ocupada femenina' => 34.61,
                    'Población Desocupada' => 8.06,
                    'Derechohabiencia' => 64.30
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 623,
                    'Hogares Jefatura masculina' => 79.56,
                    'Hogares Jefatura femenina' => 20.44,
                    'Ocupación por Vivienda' => 3.99,
                    'Viviendas con Electricidad' => 99.24,
                    'Viviendas con Agua' => 97.78,
                    'Viviendas con Drenaje' => 96.01,
                    'Viviendas con Televisión' => 98.75,
                    'Viviendas con Automóvil' => 42.16,
                    'Viviendas con Computadora' => 21.62,
                    'Viviendas con Celular' => 58.49,
                    'Viviendas con Internet' => 6.20
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 65,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 44.62,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 16.92,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.85,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 7.69,
                    'Quinta actividad nombre' => 'Gubernamentales',
                    'Quinta actividad porcentaje' => 4.62
                )
            )
        );
    } // datos

} // Clase EjidoLaPaz

?>
