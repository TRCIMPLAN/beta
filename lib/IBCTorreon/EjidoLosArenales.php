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
 * Clase EjidoLosArenales
 */
class EjidoLosArenales extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ejido Los Arenales';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ejido-los-arenales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido Los Arenales de Torreón.';
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
                    'Población total' => 1024,
                    'Porcentaje de población masculina' => 46.22,
                    'Porcentaje de población femenina' => 53.78,
                    'Porcentaje de población de 0 a 14 años' => 33.27,
                    'Porcentaje de población de 15 a 64 años' => 62.10,
                    'Porcentaje de población de 65 y más años' => 4.32,
                    'Porcentaje de población no especificada' => 0.31,
                    'Fecundidad promedio' => 2.83,
                    'Porcentaje de población nacida en otro estado' => 11.85,
                    'Porcentaje de población con discapacidad' => 1.94
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.17,
                    'Grado Promedio de Escolaridad masculina' => 7.18,
                    'Grado Promedio de Escolaridad femenina' => 7.16
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.46,
                    'Población Económicamente Activa masculina' => 72.30,
                    'Población Económicamente Activa femenina' => 27.70,
                    'Población Ocupada' => 92.98,
                    'Población Ocupada masculina' => 71.22,
                    'Población Ocupada femenina' => 28.78,
                    'Población Desocupada' => 7.02,
                    'Derechohabiencia' => 63.86
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 242,
                    'Hogares Jefatura masculina' => 77.18,
                    'Hogares Jefatura femenina' => 22.82,
                    'Ocupación por Vivienda' => 4.23,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 96.38,
                    'Viviendas con Drenaje' => 98.45,
                    'Viviendas con Televisión' => 98.45,
                    'Viviendas con Automóvil' => 35.66,
                    'Viviendas con Computadora' => 30.79,
                    'Viviendas con Celular' => 60.00,
                    'Viviendas con Internet' => 13.29
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 75,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 34.67,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 21.33,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 21.33,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 5.33,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 5.33
                )
            )
        );
    } // datos

} // Clase EjidoLosArenales

?>
