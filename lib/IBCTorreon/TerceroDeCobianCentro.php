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
 * Clase TerceroDeCobianCentro
 */
class TerceroDeCobianCentro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Tercero De Cobian (Centro)';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'tercero-de-cobian-centro';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Tercero De Cobian (Centro) de IBC Torreón.';
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
                'Población total' => '9229',
                'Porcentaje de población masculina' => '45.86',
                'Porcentaje de población femenina' => '54.14',
                'Porcentaje de población de 0 a 14 años' => '17.52',
                'Porcentaje de población de 15 a 64 años' => '65.05',
                'Porcentaje de población de 65 y más años' => '15.38',
                'Porcentaje de población no especificada' => '2.05',
                'Fecundidad promedio' => '2.19',
                'Porcentaje de población nacida en otro estado' => '17.90',
                'Porcentaje de población con discapacidad' => '7.41'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '10.77',
                'Grado Promedio de Escolaridad masculina' => '11.10',
                'Grado Promedio de Escolaridad femenina' => '10.50'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '52.59',
                'Población Económicamente Activa masculina' => '56.92',
                'Población Económicamente Activa femenina' => '43.08',
                'Población Ocupada' => '92.24',
                'Población Ocupada masculina' => '56.36',
                'Población Ocupada femenina' => '43.64',
                'Población Desocupada' => '7.76',
                'Derechohabiencia' => '69.03'
            ),
            'Viviendas' => array(
                'Hogares' => '2824',
                'Hogares Jefatura masculina' => '59.71',
                'Hogares Jefatura femenina' => '40.29',
                'Ocupación por Vivienda' => '3.27',
                'Viviendas con Electricidad' => '99.71',
                'Viviendas con Agua' => '98.80',
                'Viviendas con Drenaje' => '98.65',
                'Viviendas con Televisión' => '97.59',
                'Viviendas con Automóvil' => '53.04',
                'Viviendas con Computadora' => '42.48',
                'Viviendas con Celular' => '69.72',
                'Viviendas con Internet' => '33.43'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '1963',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '25.57',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '18.75',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '12.38',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '10.65',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '8.25'
            )
        );
    } // datos

} // Clase TerceroDeCobianCentro

?>
