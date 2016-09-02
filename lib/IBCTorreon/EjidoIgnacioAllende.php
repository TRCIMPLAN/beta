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
 * Clase EjidoIgnacioAllende
 */
class EjidoIgnacioAllende extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ejido Ignacio Allende';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ejido-ignacio-allende';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ejido Ignacio Allende de IBC Torreón.';
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
                'Población total' => '1584',
                'Porcentaje de población masculina' => '50.21',
                'Porcentaje de población femenina' => '49.79',
                'Porcentaje de población de 0 a 14 años' => '28.82',
                'Porcentaje de población de 15 a 64 años' => '65.13',
                'Porcentaje de población de 65 y más años' => '5.53',
                'Porcentaje de población no especificada' => '0.52',
                'Fecundidad promedio' => '2.52',
                'Porcentaje de población nacida en otro estado' => '15.07',
                'Porcentaje de población con discapacidad' => '2.91'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.89',
                'Grado Promedio de Escolaridad masculina' => '7.81',
                'Grado Promedio de Escolaridad femenina' => '7.98'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '56.22',
                'Población Económicamente Activa masculina' => '70.92',
                'Población Económicamente Activa femenina' => '29.08',
                'Población Ocupada' => '89.19',
                'Población Ocupada masculina' => '69.04',
                'Población Ocupada femenina' => '30.96',
                'Población Desocupada' => '10.81',
                'Derechohabiencia' => '70.35'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '79.46',
                'Hogares Jefatura femenina' => '20.54',
                'Ocupación por Vivienda' => '4.02',
                'Viviendas con Electricidad' => '99.01',
                'Viviendas con Agua' => '98.75',
                'Viviendas con Drenaje' => '95.70',
                'Viviendas con Televisión' => '96.97',
                'Viviendas con Automóvil' => '49.00',
                'Viviendas con Computadora' => '38.96',
                'Viviendas con Celular' => '64.58',
                'Viviendas con Internet' => '47.57'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '29.41',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '19.12',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '16.18',
                'Cuarta actividad nombre' => 'Inmobiliarios',
                'Cuarta actividad porcentaje' => '10.29',
                'Quinta actividad nombre' => 'Comercio Mayoreo',
                'Quinta actividad porcentaje' => '7.35'
            )
        );
    } // datos

} // Clase EjidoIgnacioAllende

?>
