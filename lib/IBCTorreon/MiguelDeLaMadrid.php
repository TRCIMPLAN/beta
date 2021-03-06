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
 * Clase MiguelDeLaMadrid
 */
class MiguelDeLaMadrid extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Miguel De La Madrid';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'miguel-de-la-madrid';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Miguel De La Madrid de IBC Torreón.';
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
                'Población total' => '1318',
                'Porcentaje de población masculina' => '50.91',
                'Porcentaje de población femenina' => '49.09',
                'Porcentaje de población de 0 a 14 años' => '27.92',
                'Porcentaje de población de 15 a 64 años' => '67.22',
                'Porcentaje de población de 65 y más años' => '4.63',
                'Porcentaje de población no especificada' => '0.23',
                'Fecundidad promedio' => '2.47',
                'Porcentaje de población nacida en otro estado' => '16.77',
                'Porcentaje de población con discapacidad' => '6.03'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.86',
                'Grado Promedio de Escolaridad masculina' => '7.84',
                'Grado Promedio de Escolaridad femenina' => '7.89'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '51.02',
                'Población Económicamente Activa masculina' => '74.76',
                'Población Económicamente Activa femenina' => '25.24',
                'Población Ocupada' => '92.86',
                'Población Ocupada masculina' => '74.59',
                'Población Ocupada femenina' => '25.41',
                'Población Desocupada' => '7.14',
                'Derechohabiencia' => '67.68'
            ),
            'Viviendas' => array(
                'Hogares' => '301',
                'Hogares Jefatura masculina' => '79.73',
                'Hogares Jefatura femenina' => '20.27',
                'Ocupación por Vivienda' => '4.38',
                'Viviendas con Electricidad' => '99.67',
                'Viviendas con Agua' => '99.67',
                'Viviendas con Drenaje' => '99.34',
                'Viviendas con Televisión' => '98.67',
                'Viviendas con Automóvil' => '41.89',
                'Viviendas con Computadora' => '23.03',
                'Viviendas con Celular' => '67.83',
                'Viviendas con Internet' => '12.26'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '68',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '35.29',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '25.00',
                'Tercera actividad nombre' => 'Industria Manufacturera',
                'Tercera actividad porcentaje' => '14.71',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '10.29',
                'Quinta actividad nombre' => 'Comercio Mayoreo',
                'Quinta actividad porcentaje' => '5.88'
            )
        );
    } // datos

} // Clase MiguelDeLaMadrid

?>
