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
 * Clase ResidencialLasTorresIi
 */
class ResidencialLasTorresIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Las Torres Ii';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-las-torres-ii';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Las Torres Ii de IBC Torreón.';
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
                'Población total' => '3664',
                'Porcentaje de población masculina' => '48.69',
                'Porcentaje de población femenina' => '51.31',
                'Porcentaje de población de 0 a 14 años' => '22.65',
                'Porcentaje de población de 15 a 64 años' => '68.97',
                'Porcentaje de población de 65 y más años' => '5.08',
                'Porcentaje de población no especificada' => '3.30',
                'Fecundidad promedio' => '1.70',
                'Porcentaje de población nacida en otro estado' => '20.06',
                'Porcentaje de población con discapacidad' => '2.31'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.90',
                'Grado Promedio de Escolaridad masculina' => '13.33',
                'Grado Promedio de Escolaridad femenina' => '12.52'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '53.97',
                'Población Económicamente Activa masculina' => '58.46',
                'Población Económicamente Activa femenina' => '41.54',
                'Población Ocupada' => '91.99',
                'Población Ocupada masculina' => '57.19',
                'Población Ocupada femenina' => '42.81',
                'Población Desocupada' => '8.01',
                'Derechohabiencia' => '77.05'
            ),
            'Viviendas' => array(
                'Hogares' => '963',
                'Hogares Jefatura masculina' => '76.22',
                'Hogares Jefatura femenina' => '23.78',
                'Ocupación por Vivienda' => '3.80',
                'Viviendas con Electricidad' => '99.79',
                'Viviendas con Agua' => '99.79',
                'Viviendas con Drenaje' => '99.79',
                'Viviendas con Televisión' => '99.27',
                'Viviendas con Automóvil' => '78.82',
                'Viviendas con Computadora' => '67.91',
                'Viviendas con Celular' => '88.27',
                'Viviendas con Internet' => '56.66'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '73',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '35.62',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '12.33',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '9.59',
                'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Cuarta actividad porcentaje' => '9.59',
                'Quinta actividad nombre' => 'Inmobiliarios',
                'Quinta actividad porcentaje' => '6.85'
            )
        );
    } // datos

} // Clase ResidencialLasTorresIi

?>
