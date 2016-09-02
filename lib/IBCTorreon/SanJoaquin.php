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
 * Clase SanJoaquin
 */
class SanJoaquin extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'San Joaquin';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'san-joaquin';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia San Joaquin de IBC Torreón.';
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
                'Población total' => '3646',
                'Porcentaje de población masculina' => '48.84',
                'Porcentaje de población femenina' => '51.16',
                'Porcentaje de población de 0 a 14 años' => '27.14',
                'Porcentaje de población de 15 a 64 años' => '63.02',
                'Porcentaje de población de 65 y más años' => '9.81',
                'Porcentaje de población no especificada' => '0.03',
                'Fecundidad promedio' => '2.58',
                'Porcentaje de población nacida en otro estado' => '16.37',
                'Porcentaje de población con discapacidad' => '15.10'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.67',
                'Grado Promedio de Escolaridad masculina' => '8.84',
                'Grado Promedio de Escolaridad femenina' => '8.52'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '51.28',
                'Población Económicamente Activa masculina' => '66.46',
                'Población Económicamente Activa femenina' => '33.54',
                'Población Ocupada' => '93.35',
                'Población Ocupada masculina' => '66.12',
                'Población Ocupada femenina' => '33.88',
                'Población Desocupada' => '6.65',
                'Derechohabiencia' => '59.60'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '69.16',
                'Hogares Jefatura femenina' => '30.84',
                'Ocupación por Vivienda' => '3.75',
                'Viviendas con Electricidad' => '98.93',
                'Viviendas con Agua' => '98.31',
                'Viviendas con Drenaje' => '98.42',
                'Viviendas con Televisión' => '97.17',
                'Viviendas con Automóvil' => '34.94',
                'Viviendas con Computadora' => '23.24',
                'Viviendas con Celular' => '61.07',
                'Viviendas con Internet' => '15.40'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '39.34',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '15.57',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '13.11',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '8.20',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '6.56'
            )
        );
    } // datos

} // Clase SanJoaquin

?>
