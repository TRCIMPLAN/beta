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
 * Clase SantaSofia
 */
class SantaSofia extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Santa Sofia';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'santa-sofia';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Santa Sofia de IBC Torreón.';
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
                'Población total' => '2206',
                'Porcentaje de población masculina' => '50.98',
                'Porcentaje de población femenina' => '49.02',
                'Porcentaje de población de 0 a 14 años' => '37.22',
                'Porcentaje de población de 15 a 64 años' => '60.36',
                'Porcentaje de población de 65 y más años' => '1.03',
                'Porcentaje de población no especificada' => '1.39',
                'Fecundidad promedio' => '2.05',
                'Porcentaje de población nacida en otro estado' => '14.17',
                'Porcentaje de población con discapacidad' => '2.23'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.93',
                'Grado Promedio de Escolaridad masculina' => '8.82',
                'Grado Promedio de Escolaridad femenina' => '9.04'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '57.99',
                'Población Económicamente Activa masculina' => '71.13',
                'Población Económicamente Activa femenina' => '28.87',
                'Población Ocupada' => '90.78',
                'Población Ocupada masculina' => '70.19',
                'Población Ocupada femenina' => '29.81',
                'Población Desocupada' => '9.22',
                'Derechohabiencia' => '62.09'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '86.92',
                'Hogares Jefatura femenina' => '13.08',
                'Ocupación por Vivienda' => '3.70',
                'Viviendas con Electricidad' => '95.16',
                'Viviendas con Agua' => '98.00',
                'Viviendas con Drenaje' => '96.66',
                'Viviendas con Televisión' => '94.80',
                'Viviendas con Automóvil' => '38.98',
                'Viviendas con Computadora' => '23.80',
                'Viviendas con Celular' => '78.57',
                'Viviendas con Internet' => '11.23'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '47.27',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '20.00',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '18.18',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '5.45',
                'Quinta actividad nombre' => 'Gubernamentales',
                'Quinta actividad porcentaje' => '3.64'
            )
        );
    } // datos

} // Clase SantaSofia

?>
