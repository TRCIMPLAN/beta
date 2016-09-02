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
 * Clase Carolinas
 */
class Carolinas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Carolinas';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'carolinas';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Carolinas de IBC Torreón.';
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
                'Población total' => '5694',
                'Porcentaje de población masculina' => '47.93',
                'Porcentaje de población femenina' => '52.07',
                'Porcentaje de población de 0 a 14 años' => '23.92',
                'Porcentaje de población de 15 a 64 años' => '64.86',
                'Porcentaje de población de 65 y más años' => '9.06',
                'Porcentaje de población no especificada' => '2.16',
                'Fecundidad promedio' => '2.57',
                'Porcentaje de población nacida en otro estado' => '15.54',
                'Porcentaje de población con discapacidad' => '3.16'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.14',
                'Grado Promedio de Escolaridad masculina' => '9.21',
                'Grado Promedio de Escolaridad femenina' => '9.08'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '53.65',
                'Población Económicamente Activa masculina' => '63.82',
                'Población Económicamente Activa femenina' => '36.18',
                'Población Ocupada' => '84.57',
                'Población Ocupada masculina' => '62.51',
                'Población Ocupada femenina' => '37.49',
                'Población Desocupada' => '15.43',
                'Derechohabiencia' => '63.52'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '71.41',
                'Hogares Jefatura femenina' => '28.59',
                'Ocupación por Vivienda' => '3.75',
                'Viviendas con Electricidad' => '99.94',
                'Viviendas con Agua' => '99.75',
                'Viviendas con Drenaje' => '99.55',
                'Viviendas con Televisión' => '98.56',
                'Viviendas con Automóvil' => '44.27',
                'Viviendas con Computadora' => '29.12',
                'Viviendas con Celular' => '58.24',
                'Viviendas con Internet' => '19.90'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '40.40',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '21.85',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '12.58',
                'Cuarta actividad nombre' => 'Salud',
                'Cuarta actividad porcentaje' => '7.95',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '5.30'
            )
        );
    } // datos

} // Clase Carolinas

?>
