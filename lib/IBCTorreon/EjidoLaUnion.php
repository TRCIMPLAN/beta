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
 * Clase EjidoLaUnion
 */
class EjidoLaUnion extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ejido La Union';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ejido-la-union';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido La Union de Torreón.';
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
                'Población total' => '4885',
                'Porcentaje de población masculina' => '49.99',
                'Porcentaje de población femenina' => '50.01',
                'Porcentaje de población de 0 a 14 años' => '29.94',
                'Porcentaje de población de 15 a 64 años' => '62.78',
                'Porcentaje de población de 65 y más años' => '5.66',
                'Porcentaje de población no especificada' => '1.62',
                'Fecundidad promedio' => '2.54',
                'Porcentaje de población nacida en otro estado' => '13.45',
                'Porcentaje de población con discapacidad' => '5.81'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.72',
                'Grado Promedio de Escolaridad masculina' => '7.76',
                'Grado Promedio de Escolaridad femenina' => '7.68'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '57.17',
                'Población Económicamente Activa masculina' => '66.89',
                'Población Económicamente Activa femenina' => '33.11',
                'Población Ocupada' => '90.21',
                'Población Ocupada masculina' => '65.21',
                'Población Ocupada femenina' => '34.79',
                'Población Desocupada' => '9.79',
                'Derechohabiencia' => '60.20'
            ),
            'Viviendas' => array(
                'Hogares' => '1156',
                'Hogares Jefatura masculina' => '78.52',
                'Hogares Jefatura femenina' => '21.48',
                'Ocupación por Vivienda' => '4.23',
                'Viviendas con Electricidad' => '99.44',
                'Viviendas con Agua' => '98.14',
                'Viviendas con Drenaje' => '94.23',
                'Viviendas con Televisión' => '96.93',
                'Viviendas con Automóvil' => '44.88',
                'Viviendas con Computadora' => '27.87',
                'Viviendas con Celular' => '63.83',
                'Viviendas con Internet' => '20.49'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '140',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '44.29',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '17.86',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '15.00',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '7.14',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '7.14'
            )
        );
    } // datos

} // Clase EjidoLaUnion

?>
