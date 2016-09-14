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
 * Clase EjidoSanAgustin
 */
class EjidoSanAgustin extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ejido San Agustin';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ejido-san-agustin';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ejido San Agustin de IBC Torreón.';
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
                'Población total' => '1931',
                'Porcentaje de población masculina' => '50.01',
                'Porcentaje de población femenina' => '49.99',
                'Porcentaje de población de 0 a 14 años' => '30.46',
                'Porcentaje de población de 15 a 64 años' => '63.24',
                'Porcentaje de población de 65 y más años' => '6.07',
                'Porcentaje de población no especificada' => '0.23',
                'Fecundidad promedio' => '2.34',
                'Porcentaje de población nacida en otro estado' => '11.26',
                'Porcentaje de población con discapacidad' => '5.48'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.35',
                'Grado Promedio de Escolaridad masculina' => '7.44',
                'Grado Promedio de Escolaridad femenina' => '7.27'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '49.45',
                'Población Económicamente Activa masculina' => '70.84',
                'Población Económicamente Activa femenina' => '29.16',
                'Población Ocupada' => '87.78',
                'Población Ocupada masculina' => '67.94',
                'Población Ocupada femenina' => '32.06',
                'Población Desocupada' => '12.22',
                'Derechohabiencia' => '69.17'
            ),
            'Viviendas' => array(
                'Hogares' => '447',
                'Hogares Jefatura masculina' => '79.65',
                'Hogares Jefatura femenina' => '20.35',
                'Ocupación por Vivienda' => '4.32',
                'Viviendas con Electricidad' => '99.61',
                'Viviendas con Agua' => '97.81',
                'Viviendas con Drenaje' => '91.76',
                'Viviendas con Televisión' => '98.91',
                'Viviendas con Automóvil' => '39.92',
                'Viviendas con Computadora' => '18.04',
                'Viviendas con Celular' => '67.78',
                'Viviendas con Internet' => '5.77'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '78',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '33.33',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '17.95',
                'Tercera actividad nombre' => 'Industria Manufacturera',
                'Tercera actividad porcentaje' => '11.54',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '10.26',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '6.41'
            )
        );
    } // datos

} // Clase EjidoSanAgustin

?>
