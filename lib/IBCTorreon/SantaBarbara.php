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
 * Clase SantaBarbara
 */
class SantaBarbara extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Santa Barbara';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'santa-barbara';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Santa Barbara de IBC Torreón.';
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
                'Población total' => '299',
                'Porcentaje de población masculina' => '49.50',
                'Porcentaje de población femenina' => '50.50',
                'Porcentaje de población de 0 a 14 años' => '24.08',
                'Porcentaje de población de 15 a 64 años' => '73.24',
                'Porcentaje de población de 65 y más años' => '1.67',
                'Porcentaje de población no especificada' => '1.01',
                'Fecundidad promedio' => '1.52',
                'Porcentaje de población nacida en otro estado' => '14.38',
                'Porcentaje de población con discapacidad' => '1.00'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.88',
                'Grado Promedio de Escolaridad masculina' => '12.72',
                'Grado Promedio de Escolaridad femenina' => '13.02'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '58.75',
                'Población Económicamente Activa masculina' => '53.90',
                'Población Económicamente Activa femenina' => '46.10',
                'Población Ocupada' => '95.56',
                'Población Ocupada masculina' => '52.59',
                'Población Ocupada femenina' => '47.41',
                'Población Desocupada' => '4.44',
                'Derechohabiencia' => '77.26'
            ),
            'Viviendas' => array(
                'Hogares' => '91',
                'Hogares Jefatura masculina' => '71.43',
                'Hogares Jefatura femenina' => '28.57',
                'Ocupación por Vivienda' => '3.29',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '98.90',
                'Viviendas con Automóvil' => '85.71',
                'Viviendas con Computadora' => '71.43',
                'Viviendas con Celular' => '91.21',
                'Viviendas con Internet' => '59.34'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '3',
                'Primer actividad nombre' => 'Comercio Mayoreo',
                'Primer actividad porcentaje' => '66.67',
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => '33.33'
            )
        );
    } // datos

} // Clase SantaBarbara

?>
