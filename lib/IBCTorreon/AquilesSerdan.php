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
 * Clase AquilesSerdan
 */
class AquilesSerdan extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Aquiles Serdan';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'aquiles-serdan';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Aquiles Serdan de Torreón.';
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
                    'Población total' => 1823,
                    'Porcentaje de población masculina' => 47.83,
                    'Porcentaje de población femenina' => 52.17,
                    'Porcentaje de población de 0 a 14 años' => 27.59,
                    'Porcentaje de población de 15 a 64 años' => 63.47,
                    'Porcentaje de población de 65 y más años' => 8.78,
                    'Porcentaje de población no especificada' => 0.16,
                    'Fecundidad promedio' => 2.50,
                    'Porcentaje de población nacida en otro estado' => 18.38,
                    'Porcentaje de población con discapacidad' => 9.35
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.03,
                    'Grado Promedio de Escolaridad masculina' => 8.16,
                    'Grado Promedio de Escolaridad femenina' => 7.91
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.65,
                    'Población Económicamente Activa masculina' => 63.00,
                    'Población Económicamente Activa femenina' => 37.00,
                    'Población Ocupada' => 89.27,
                    'Población Ocupada masculina' => 60.77,
                    'Población Ocupada femenina' => 39.23,
                    'Población Desocupada' => 10.73,
                    'Derechohabiencia' => 64.29
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 484,
                    'Hogares Jefatura masculina' => 69.63,
                    'Hogares Jefatura femenina' => 30.37,
                    'Ocupación por Vivienda' => 3.77,
                    'Viviendas con Electricidad' => 99.59,
                    'Viviendas con Agua' => 98.35,
                    'Viviendas con Drenaje' => 98.76,
                    'Viviendas con Televisión' => 96.07,
                    'Viviendas con Automóvil' => 27.17,
                    'Viviendas con Computadora' => 20.60,
                    'Viviendas con Celular' => 57.64,
                    'Viviendas con Internet' => 11.70
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 43,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 44.19,
                    'Segunda actividad nombre' => 'Industria Manufacturera',
                    'Segunda actividad porcentaje' => 16.28,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.95,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 11.63,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 4.65
                )
            )
        );
    } // datos

} // Clase AquilesSerdan

?>
