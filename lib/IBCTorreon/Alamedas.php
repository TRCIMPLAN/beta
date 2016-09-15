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
 * Clase Alamedas
 */
class Alamedas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Alamedas';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'alamedas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Alamedas de Torreón.';
        $this->claves      = 'IMPLAN, Torreon, Desagregación';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio  = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu = 'Indicadores Básicos por Colonias > Colonias de Torreón';
        // Para el Organizador
        $this->categorias  = array();
        $this->fuentes     = array();
        $this->regiones    = array('Torreón');
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                'Población total' => '7315',
                'Porcentaje de población masculina' => '48.30',
                'Porcentaje de población femenina' => '51.70',
                'Porcentaje de población de 0 a 14 años' => '21.62',
                'Porcentaje de población de 15 a 64 años' => '69.18',
                'Porcentaje de población de 65 y más años' => '8.70',
                'Porcentaje de población no especificada' => '0.50',
                'Fecundidad promedio' => '2.36',
                'Porcentaje de población nacida en otro estado' => '18.99',
                'Porcentaje de población con discapacidad' => '7.67'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '10.15',
                'Grado Promedio de Escolaridad masculina' => '10.41',
                'Grado Promedio de Escolaridad femenina' => '9.92'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.07',
                'Población Económicamente Activa masculina' => '63.29',
                'Población Económicamente Activa femenina' => '36.71',
                'Población Ocupada' => '93.63',
                'Población Ocupada masculina' => '62.57',
                'Población Ocupada femenina' => '37.43',
                'Población Desocupada' => '6.37',
                'Derechohabiencia' => '77.68'
            ),
            'Viviendas' => array(
                'Hogares' => '1920',
                'Hogares Jefatura masculina' => '71.67',
                'Hogares Jefatura femenina' => '28.33',
                'Ocupación por Vivienda' => '3.81',
                'Viviendas con Electricidad' => '99.84',
                'Viviendas con Agua' => '99.38',
                'Viviendas con Drenaje' => '99.69',
                'Viviendas con Televisión' => '99.64',
                'Viviendas con Automóvil' => '58.47',
                'Viviendas con Computadora' => '42.31',
                'Viviendas con Celular' => '72.92',
                'Viviendas con Internet' => '32.72'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '136',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '44.85',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '22.06',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '16.18',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '4.41',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '4.41'
            )
        );
    } // datos

} // Clase Alamedas

?>
