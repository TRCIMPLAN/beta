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
 * Clase Duranguena
 */
class Duranguena extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Durangueña';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'duranguena';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Durangueña de IBC Torreón.';
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
                'Población total' => '989',
                'Porcentaje de población masculina' => '48.52',
                'Porcentaje de población femenina' => '51.48',
                'Porcentaje de población de 0 a 14 años' => '27.66',
                'Porcentaje de población de 15 a 64 años' => '62.70',
                'Porcentaje de población de 65 y más años' => '9.64',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '2.53',
                'Porcentaje de población nacida en otro estado' => '14.19',
                'Porcentaje de población con discapacidad' => '8.54'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.15',
                'Grado Promedio de Escolaridad masculina' => '7.00',
                'Grado Promedio de Escolaridad femenina' => '7.29'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '48.95',
                'Población Económicamente Activa masculina' => '70.54',
                'Población Económicamente Activa femenina' => '29.46',
                'Población Ocupada' => '94.68',
                'Población Ocupada masculina' => '69.01',
                'Población Ocupada femenina' => '30.99',
                'Población Desocupada' => '5.32',
                'Derechohabiencia' => '46.93'
            ),
            'Viviendas' => array(
                'Hogares' => '263',
                'Hogares Jefatura masculina' => '66.89',
                'Hogares Jefatura femenina' => '33.11',
                'Ocupación por Vivienda' => '3.76',
                'Viviendas con Electricidad' => '97.68',
                'Viviendas con Agua' => '94.37',
                'Viviendas con Drenaje' => '98.87',
                'Viviendas con Televisión' => '94.42',
                'Viviendas con Automóvil' => '12.46',
                'Viviendas con Computadora' => '5.86',
                'Viviendas con Celular' => '52.85',
                'Viviendas con Internet' => '2.19'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '10',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '70.00',
                'Segunda actividad nombre' => 'Industria Manufacturera',
                'Segunda actividad porcentaje' => '20.00',
                'Tercera actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                'Tercera actividad porcentaje' => '10.00'
            )
        );
    } // datos

} // Clase Duranguena

?>
