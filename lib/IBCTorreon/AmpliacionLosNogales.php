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
 * Clase AmpliacionLosNogales
 */
class AmpliacionLosNogales extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ampliacion Los Nogales';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ampliacion-los-nogales';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ampliacion Los Nogales de IBC Torreón.';
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
                'Población total' => '1460',
                'Porcentaje de población masculina' => '47.12',
                'Porcentaje de población femenina' => '52.88',
                'Porcentaje de población de 0 a 14 años' => '19.38',
                'Porcentaje de población de 15 a 64 años' => '66.58',
                'Porcentaje de población de 65 y más años' => '11.16',
                'Porcentaje de población no especificada' => '2.88',
                'Fecundidad promedio' => '1.95',
                'Porcentaje de población nacida en otro estado' => '20.41',
                'Porcentaje de población con discapacidad' => '12.12'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.21',
                'Grado Promedio de Escolaridad masculina' => '12.76',
                'Grado Promedio de Escolaridad femenina' => '11.72'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '48.79',
                'Población Económicamente Activa masculina' => '60.55',
                'Población Económicamente Activa femenina' => '39.45',
                'Población Ocupada' => '95.71',
                'Población Ocupada masculina' => '60.64',
                'Población Ocupada femenina' => '39.36',
                'Población Desocupada' => '4.29',
                'Derechohabiencia' => '75.07'
            ),
            'Viviendas' => array(
                'Hogares' => '450',
                'Hogares Jefatura masculina' => '65.33',
                'Hogares Jefatura femenina' => '34.67',
                'Ocupación por Vivienda' => '3.24',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '98.44',
                'Viviendas con Drenaje' => '98.89',
                'Viviendas con Televisión' => '99.33',
                'Viviendas con Automóvil' => '83.11',
                'Viviendas con Computadora' => '58.89',
                'Viviendas con Celular' => '81.33',
                'Viviendas con Internet' => '51.78'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '34',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '32.35',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '17.65',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '11.76',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '8.82',
                'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Quinta actividad porcentaje' => '8.82'
            )
        );
    } // datos

} // Clase AmpliacionLosNogales

?>
