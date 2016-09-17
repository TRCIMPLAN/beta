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
 * Clase Horizonte
 */
class Horizonte extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Horizonte';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:32:59';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'horizonte';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Horizonte de Torreón.';
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
                'Población total' => 195,
                'Porcentaje de población masculina' => 45.64,
                'Porcentaje de población femenina' => 54.36,
                'Porcentaje de población de 0 a 14 años' => 26.15,
                'Porcentaje de población de 15 a 64 años' => 69.74,
                'Porcentaje de población de 65 y más años' => 4.10,
                'Porcentaje de población no especificada' => 0.01,
                'Fecundidad promedio' => 1.61,
                'Porcentaje de población nacida en otro estado' => 20.26,
                'Porcentaje de población con discapacidad' => 1.10
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 12.94,
                'Grado Promedio de Escolaridad masculina' => 12.83,
                'Grado Promedio de Escolaridad femenina' => 13.05
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 56.77,
                'Población Económicamente Activa masculina' => 52.27,
                'Población Económicamente Activa femenina' => 47.73,
                'Población Ocupada' => 96.47,
                'Población Ocupada masculina' => 50.59,
                'Población Ocupada femenina' => 49.41,
                'Población Desocupada' => 3.53,
                'Derechohabiencia' => 74.87
            ),
            'Viviendas' => array(
                'Hogares' => 63,
                'Hogares Jefatura masculina' => 61.90,
                'Hogares Jefatura femenina' => 38.10,
                'Ocupación por Vivienda' => 3.10,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 100.00,
                'Viviendas con Drenaje' => 100.00,
                'Viviendas con Televisión' => 98.41,
                'Viviendas con Automóvil' => 73.02,
                'Viviendas con Computadora' => 73.02,
                'Viviendas con Celular' => 88.89,
                'Viviendas con Internet' => 57.14
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 3,
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => 66.67,
                'Segunda actividad nombre' => 'Salud',
                'Segunda actividad porcentaje' => 33.33
            )
        );
    } // datos

} // Clase Horizonte

?>
