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
 * Clase EjidoLaLibertad
 */
class EjidoLaLibertad extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ejido La Libertad';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ejido-la-libertad';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ejido La Libertad de IBC Torreón.';
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
                'Población total' => '261',
                'Porcentaje de población masculina' => '50.32',
                'Porcentaje de población femenina' => '49.68',
                'Porcentaje de población de 0 a 14 años' => '26.68',
                'Porcentaje de población de 15 a 64 años' => '65.65',
                'Porcentaje de población de 65 y más años' => '7.58',
                'Porcentaje de población no especificada' => '0.09',
                'Fecundidad promedio' => '2.36',
                'Porcentaje de población nacida en otro estado' => '16.60',
                'Porcentaje de población con discapacidad' => '8.08'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.18',
                'Grado Promedio de Escolaridad masculina' => '8.28',
                'Grado Promedio de Escolaridad femenina' => '8.09'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.23',
                'Población Económicamente Activa masculina' => '71.21',
                'Población Económicamente Activa femenina' => '28.79',
                'Población Ocupada' => '94.92',
                'Población Ocupada masculina' => '70.93',
                'Población Ocupada femenina' => '29.07',
                'Población Desocupada' => '5.08',
                'Derechohabiencia' => '68.86'
            ),
            'Viviendas' => array(
                'Hogares' => '62',
                'Hogares Jefatura masculina' => '79.91',
                'Hogares Jefatura femenina' => '20.09',
                'Ocupación por Vivienda' => '4.21',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '98.05',
                'Viviendas con Drenaje' => '99.74',
                'Viviendas con Televisión' => '96.44',
                'Viviendas con Automóvil' => '44.74',
                'Viviendas con Computadora' => '17.45',
                'Viviendas con Celular' => '77.28',
                'Viviendas con Internet' => '8.31'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '7',
                'Primer actividad nombre' => 'Educativos',
                'Primer actividad porcentaje' => '28.57',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '28.57',
                'Tercera actividad nombre' => 'Comercio Menudeo',
                'Tercera actividad porcentaje' => '14.29',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '14.29',
                'Quinta actividad nombre' => 'Inmobiliarios',
                'Quinta actividad porcentaje' => '14.29'
            )
        );
    } // datos

} // Clase EjidoLaLibertad

?>
