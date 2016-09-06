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
 * Clase EjidoZaragoza
 */
class EjidoZaragoza extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ejido Zaragoza';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ejido-zaragoza';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ejido Zaragoza de IBC Torreón.';
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
                'Población total' => '861',
                'Porcentaje de población masculina' => '48.80',
                'Porcentaje de población femenina' => '51.20',
                'Porcentaje de población de 0 a 14 años' => '32.04',
                'Porcentaje de población de 15 a 64 años' => '61.52',
                'Porcentaje de población de 65 y más años' => '5.70',
                'Porcentaje de población no especificada' => '0.74',
                'Fecundidad promedio' => '2.59',
                'Porcentaje de población nacida en otro estado' => '16.53',
                'Porcentaje de población con discapacidad' => '3.86'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.43',
                'Grado Promedio de Escolaridad masculina' => '7.47',
                'Grado Promedio de Escolaridad femenina' => '7.39'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '52.07',
                'Población Económicamente Activa masculina' => '75.53',
                'Población Económicamente Activa femenina' => '24.47',
                'Población Ocupada' => '84.47',
                'Población Ocupada masculina' => '74.52',
                'Población Ocupada femenina' => '25.48',
                'Población Desocupada' => '15.53',
                'Derechohabiencia' => '64.45'
            ),
            'Viviendas' => array(
                'Hogares' => '215',
                'Hogares Jefatura masculina' => '85.05',
                'Hogares Jefatura femenina' => '14.95',
                'Ocupación por Vivienda' => '4.00',
                'Viviendas con Electricidad' => '99.67',
                'Viviendas con Agua' => '98.69',
                'Viviendas con Drenaje' => '97.28',
                'Viviendas con Televisión' => '97.75',
                'Viviendas con Automóvil' => '44.51',
                'Viviendas con Computadora' => '24.63',
                'Viviendas con Celular' => '66.50',
                'Viviendas con Internet' => '13.23'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '40',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '25.00',
                'Segunda actividad nombre' => 'Educativos',
                'Segunda actividad porcentaje' => '20.00',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '20.00',
                'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Cuarta actividad porcentaje' => '17.50',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '7.50'
            )
        );
    } // datos

} // Clase EjidoZaragoza

?>
