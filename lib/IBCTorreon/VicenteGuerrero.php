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
 * Clase VicenteGuerrero
 */
class VicenteGuerrero extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Vicente Guerrero';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'vicente-guerrero';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Vicente Guerrero de IBC Torreón.';
        $this->claves          = 'IMPLAN, Torreon, Desagregación';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'IBC > IBC Torreón';
        // Para el Organizador
        $this->categorias      = array();
        $this->fuentes         = array();
        $this->regiones        = array();
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                'Población total' => '5648',
                'Porcentaje de población masculina' => '48.82',
                'Porcentaje de población femenina' => '51.18',
                'Porcentaje de población de 0 a 14 años' => '26.27',
                'Porcentaje de población de 15 a 64 años' => '63.91',
                'Porcentaje de población de 65 y más años' => '9.65',
                'Porcentaje de población no especificada' => '0.17',
                'Fecundidad promedio' => '2.69',
                'Porcentaje de población nacida en otro estado' => '16.09',
                'Porcentaje de población con discapacidad' => '8.45'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.38',
                'Grado Promedio de Escolaridad masculina' => '8.54',
                'Grado Promedio de Escolaridad femenina' => '8.22'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '51.12',
                'Población Económicamente Activa masculina' => '66.98',
                'Población Económicamente Activa femenina' => '33.02',
                'Población Ocupada' => '89.19',
                'Población Ocupada masculina' => '65.29',
                'Población Ocupada femenina' => '34.71',
                'Población Desocupada' => '10.81',
                'Derechohabiencia' => '67.76'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '67.01',
                'Hogares Jefatura femenina' => '32.99',
                'Ocupación por Vivienda' => '3.80',
                'Viviendas con Electricidad' => '99.96',
                'Viviendas con Agua' => '99.02',
                'Viviendas con Drenaje' => '99.55',
                'Viviendas con Televisión' => '97.92',
                'Viviendas con Automóvil' => '39.04',
                'Viviendas con Computadora' => '23.47',
                'Viviendas con Celular' => '65.60',
                'Viviendas con Internet' => '16.26'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '44.27',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '16.79',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '12.21',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '9.92',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '4.58'
            )
        );
    } // datos

} // Clase VicenteGuerrero

?>
