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
 * Clase LagunaNorte
 */
class LagunaNorte extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Laguna Norte';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'laguna-norte';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Laguna Norte de IBC Torreón.';
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
                'Población total' => '3022',
                'Porcentaje de población masculina' => '51.67',
                'Porcentaje de población femenina' => '48.33',
                'Porcentaje de población de 0 a 14 años' => '36.00',
                'Porcentaje de población de 15 a 64 años' => '59.00',
                'Porcentaje de población de 65 y más años' => '4.46',
                'Porcentaje de población no especificada' => '0.54',
                'Fecundidad promedio' => '2.46',
                'Porcentaje de población nacida en otro estado' => '19.18',
                'Porcentaje de población con discapacidad' => '3.47'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.59',
                'Grado Promedio de Escolaridad masculina' => '7.44',
                'Grado Promedio de Escolaridad femenina' => '7.76'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '53.99',
                'Población Económicamente Activa masculina' => '73.26',
                'Población Económicamente Activa femenina' => '26.74',
                'Población Ocupada' => '90.14',
                'Población Ocupada masculina' => '72.28',
                'Población Ocupada femenina' => '27.72',
                'Población Desocupada' => '9.86',
                'Derechohabiencia' => '49.96'
            ),
            'Viviendas' => array(
                'Hogares' => '720',
                'Hogares Jefatura masculina' => '80.01',
                'Hogares Jefatura femenina' => '19.99',
                'Ocupación por Vivienda' => '4.20',
                'Viviendas con Electricidad' => '99.17',
                'Viviendas con Agua' => '95.33',
                'Viviendas con Drenaje' => '81.25',
                'Viviendas con Televisión' => '94.51',
                'Viviendas con Automóvil' => '38.77',
                'Viviendas con Computadora' => '11.88',
                'Viviendas con Celular' => '69.67',
                'Viviendas con Internet' => '3.05'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '187',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '36.90',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '25.13',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '10.16',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '7.49',
                'Quinta actividad nombre' => 'Inmobiliarios',
                'Quinta actividad porcentaje' => '6.95'
            )
        );
    } // datos

} // Clase LagunaNorte

?>
