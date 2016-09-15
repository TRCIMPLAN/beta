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
 * Clase LosSauces
 */
class LosSauces extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Los Sauces';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'los-sauces';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Los Sauces de Torreón.';
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
                'Población total' => '1176',
                'Porcentaje de población masculina' => '49.57',
                'Porcentaje de población femenina' => '50.43',
                'Porcentaje de población de 0 a 14 años' => '40.22',
                'Porcentaje de población de 15 a 64 años' => '57.57',
                'Porcentaje de población de 65 y más años' => '1.19',
                'Porcentaje de población no especificada' => '1.02',
                'Fecundidad promedio' => '1.99',
                'Porcentaje de población nacida en otro estado' => '13.98',
                'Porcentaje de población con discapacidad' => '5.43'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.72',
                'Grado Promedio de Escolaridad masculina' => '9.84',
                'Grado Promedio de Escolaridad femenina' => '9.62'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '59.95',
                'Población Económicamente Activa masculina' => '63.36',
                'Población Económicamente Activa femenina' => '36.64',
                'Población Ocupada' => '91.64',
                'Población Ocupada masculina' => '62.38',
                'Población Ocupada femenina' => '37.62',
                'Población Desocupada' => '8.36',
                'Derechohabiencia' => '78.74'
            ),
            'Viviendas' => array(
                'Hogares' => '296',
                'Hogares Jefatura masculina' => '76.01',
                'Hogares Jefatura femenina' => '23.99',
                'Ocupación por Vivienda' => '3.97',
                'Viviendas con Electricidad' => '99.66',
                'Viviendas con Agua' => '99.32',
                'Viviendas con Drenaje' => '98.99',
                'Viviendas con Televisión' => '98.99',
                'Viviendas con Automóvil' => '49.32',
                'Viviendas con Computadora' => '22.12',
                'Viviendas con Celular' => '84.12',
                'Viviendas con Internet' => '11.23'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '18',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '55.56',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '16.67',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '16.67',
                'Cuarta actividad nombre' => 'Comercio Mayoreo',
                'Cuarta actividad porcentaje' => '5.56',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '5.56'
            )
        );
    } // datos

} // Clase LosSauces

?>
