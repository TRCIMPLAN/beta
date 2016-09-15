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
 * Clase EjidoLaPaz
 */
class EjidoLaPaz extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ejido La Paz';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ejido-la-paz';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido La Paz de Torreón.';
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
                'Población total' => '2432',
                'Porcentaje de población masculina' => '48.29',
                'Porcentaje de población femenina' => '51.71',
                'Porcentaje de población de 0 a 14 años' => '27.32',
                'Porcentaje de población de 15 a 64 años' => '65.35',
                'Porcentaje de población de 65 y más años' => '6.92',
                'Porcentaje de población no especificada' => '0.41',
                'Fecundidad promedio' => '2.46',
                'Porcentaje de población nacida en otro estado' => '5.83',
                'Porcentaje de población con discapacidad' => '7.06'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.79',
                'Grado Promedio de Escolaridad masculina' => '7.83',
                'Grado Promedio de Escolaridad femenina' => '7.75'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '49.68',
                'Población Económicamente Activa masculina' => '67.02',
                'Población Económicamente Activa femenina' => '32.98',
                'Población Ocupada' => '91.75',
                'Población Ocupada masculina' => '65.32',
                'Población Ocupada femenina' => '34.68',
                'Población Desocupada' => '8.25',
                'Derechohabiencia' => '64.69'
            ),
            'Viviendas' => array(
                'Hogares' => '610',
                'Hogares Jefatura masculina' => '79.31',
                'Hogares Jefatura femenina' => '20.69',
                'Ocupación por Vivienda' => '3.99',
                'Viviendas con Electricidad' => '99.22',
                'Viviendas con Agua' => '97.91',
                'Viviendas con Drenaje' => '96.27',
                'Viviendas con Televisión' => '98.73',
                'Viviendas con Automóvil' => '41.99',
                'Viviendas con Computadora' => '21.56',
                'Viviendas con Celular' => '57.99',
                'Viviendas con Internet' => '6.27'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '64',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '43.75',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '17.19',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '14.06',
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => '7.81',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '4.69'
            )
        );
    } // datos

} // Clase EjidoLaPaz

?>
