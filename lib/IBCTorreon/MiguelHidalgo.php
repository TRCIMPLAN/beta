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
 * Clase MiguelHidalgo
 */
class MiguelHidalgo extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Miguel Hidalgo';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'miguel-hidalgo';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Miguel Hidalgo de IBC Torreón.';
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
                'Población total' => '1000',
                'Porcentaje de población masculina' => '48.50',
                'Porcentaje de población femenina' => '51.50',
                'Porcentaje de población de 0 a 14 años' => '25.30',
                'Porcentaje de población de 15 a 64 años' => '62.40',
                'Porcentaje de población de 65 y más años' => '12.00',
                'Porcentaje de población no especificada' => '0.30',
                'Fecundidad promedio' => '2.81',
                'Porcentaje de población nacida en otro estado' => '18.40',
                'Porcentaje de población con discapacidad' => '10.96'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.51',
                'Grado Promedio de Escolaridad masculina' => '7.70',
                'Grado Promedio de Escolaridad femenina' => '7.33'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '52.22',
                'Población Económicamente Activa masculina' => '67.23',
                'Población Económicamente Activa femenina' => '32.77',
                'Población Ocupada' => '92.74',
                'Población Ocupada masculina' => '65.62',
                'Población Ocupada femenina' => '34.38',
                'Población Desocupada' => '7.26',
                'Derechohabiencia' => '55.50'
            ),
            'Viviendas' => array(
                'Hogares' => '239',
                'Hogares Jefatura masculina' => '67.63',
                'Hogares Jefatura femenina' => '32.37',
                'Ocupación por Vivienda' => '4.18',
                'Viviendas con Electricidad' => '97.91',
                'Viviendas con Agua' => '96.65',
                'Viviendas con Drenaje' => '98.74',
                'Viviendas con Televisión' => '94.98',
                'Viviendas con Automóvil' => '19.25',
                'Viviendas con Computadora' => '13.74',
                'Viviendas con Celular' => '54.68',
                'Viviendas con Internet' => '9.07'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '12',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '41.67',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '25.00',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '16.67',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '8.33',
                'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Quinta actividad porcentaje' => '8.33'
            )
        );
    } // datos

} // Clase MiguelHidalgo

?>
