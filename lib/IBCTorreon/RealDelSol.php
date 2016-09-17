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
 * Clase RealDelSol
 */
class RealDelSol extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Real Del Sol';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:01';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'real-del-sol';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Real Del Sol de Torreón.';
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
                'Población total' => 497,
                'Porcentaje de población masculina' => 51.91,
                'Porcentaje de población femenina' => 48.09,
                'Porcentaje de población de 0 a 14 años' => 38.83,
                'Porcentaje de población de 15 a 64 años' => 59.56,
                'Porcentaje de población de 65 y más años' => 1.61,
                'Porcentaje de población no especificada' => 0.00,
                'Fecundidad promedio' => 2.21,
                'Porcentaje de población nacida en otro estado' => 15.73,
                'Porcentaje de población con discapacidad' => 1.99
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 9.30,
                'Grado Promedio de Escolaridad masculina' => 9.33,
                'Grado Promedio de Escolaridad femenina' => 9.25
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 63.00,
                'Población Económicamente Activa masculina' => 69.42,
                'Población Económicamente Activa femenina' => 30.58,
                'Población Ocupada' => 95.97,
                'Población Ocupada masculina' => 68.69,
                'Población Ocupada femenina' => 31.31,
                'Población Desocupada' => 4.03,
                'Derechohabiencia' => 74.85
            ),
            'Viviendas' => array(
                'Hogares' => 138,
                'Hogares Jefatura masculina' => 86.23,
                'Hogares Jefatura femenina' => 13.77,
                'Ocupación por Vivienda' => 3.60,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 99.28,
                'Viviendas con Drenaje' => 100.00,
                'Viviendas con Televisión' => 99.28,
                'Viviendas con Automóvil' => 39.12,
                'Viviendas con Computadora' => 26.62,
                'Viviendas con Celular' => 81.88,
                'Viviendas con Internet' => 27.22
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 8,
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => 75.00,
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => 25.00
            )
        );
    } // datos

} // Clase RealDelSol

?>
