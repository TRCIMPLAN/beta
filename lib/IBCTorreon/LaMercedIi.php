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
 * Clase LaMercedIi
 */
class LaMercedIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'La Merced Ii';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'la-merced-ii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Merced Ii de Torreón.';
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
                'Población total' => '5078',
                'Porcentaje de población masculina' => '48.72',
                'Porcentaje de población femenina' => '51.28',
                'Porcentaje de población de 0 a 14 años' => '22.33',
                'Porcentaje de población de 15 a 64 años' => '72.63',
                'Porcentaje de población de 65 y más años' => '3.68',
                'Porcentaje de población no especificada' => '1.36',
                'Fecundidad promedio' => '1.83',
                'Porcentaje de población nacida en otro estado' => '19.93',
                'Porcentaje de población con discapacidad' => '3.89'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.75',
                'Grado Promedio de Escolaridad masculina' => '12.05',
                'Grado Promedio de Escolaridad femenina' => '11.47'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '54.66',
                'Población Económicamente Activa masculina' => '60.63',
                'Población Económicamente Activa femenina' => '39.37',
                'Población Ocupada' => '91.44',
                'Población Ocupada masculina' => '60.05',
                'Población Ocupada femenina' => '39.95',
                'Población Desocupada' => '8.56',
                'Derechohabiencia' => '76.59'
            ),
            'Viviendas' => array(
                'Hogares' => '1363',
                'Hogares Jefatura masculina' => '75.57',
                'Hogares Jefatura femenina' => '24.43',
                'Ocupación por Vivienda' => '3.73',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.85',
                'Viviendas con Drenaje' => '99.93',
                'Viviendas con Televisión' => '99.63',
                'Viviendas con Automóvil' => '65.88',
                'Viviendas con Computadora' => '57.01',
                'Viviendas con Celular' => '83.35',
                'Viviendas con Internet' => '44.97'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '123',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '44.72',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '16.26',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '15.45',
                'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Cuarta actividad porcentaje' => '4.88',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '4.88'
            )
        );
    } // datos

} // Clase LaMercedIi

?>
