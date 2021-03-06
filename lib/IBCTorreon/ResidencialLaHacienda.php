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
 * Clase ResidencialLaHacienda
 */
class ResidencialLaHacienda extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial La Hacienda';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-la-hacienda';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial La Hacienda de IBC Torreón.';
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
                'Población total' => '2334',
                'Porcentaje de población masculina' => '48.41',
                'Porcentaje de población femenina' => '51.59',
                'Porcentaje de población de 0 a 14 años' => '19.57',
                'Porcentaje de población de 15 a 64 años' => '72.87',
                'Porcentaje de población de 65 y más años' => '3.89',
                'Porcentaje de población no especificada' => '3.67',
                'Fecundidad promedio' => '1.62',
                'Porcentaje de población nacida en otro estado' => '22.54',
                'Porcentaje de población con discapacidad' => '1.64'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.12',
                'Grado Promedio de Escolaridad masculina' => '14.49',
                'Grado Promedio de Escolaridad femenina' => '13.78'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '49.95',
                'Población Económicamente Activa masculina' => '58.58',
                'Población Económicamente Activa femenina' => '41.42',
                'Población Ocupada' => '96.76',
                'Población Ocupada masculina' => '58.21',
                'Población Ocupada femenina' => '41.79',
                'Población Desocupada' => '3.24',
                'Derechohabiencia' => '73.82'
            ),
            'Viviendas' => array(
                'Hogares' => '601',
                'Hogares Jefatura masculina' => '82.03',
                'Hogares Jefatura femenina' => '17.97',
                'Ocupación por Vivienda' => '3.88',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '99.83',
                'Viviendas con Televisión' => '99.50',
                'Viviendas con Automóvil' => '93.51',
                'Viviendas con Computadora' => '88.35',
                'Viviendas con Celular' => '94.51',
                'Viviendas con Internet' => '80.37'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '99',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '32.32',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '24.24',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '10.10',
                'Cuarta actividad nombre' => 'Salud',
                'Cuarta actividad porcentaje' => '7.07',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '6.06'
            )
        );
    } // datos

} // Clase ResidencialLaHacienda

?>
