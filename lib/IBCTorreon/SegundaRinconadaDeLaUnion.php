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
 * Clase SegundaRinconadaDeLaUnion
 */
class SegundaRinconadaDeLaUnion extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Segunda Rinconada De La Union';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'segunda-rinconada-de-la-union';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Segunda Rinconada De La Union de Torreón.';
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
                'Población total' => '962',
                'Porcentaje de población masculina' => '48.91',
                'Porcentaje de población femenina' => '51.09',
                'Porcentaje de población de 0 a 14 años' => '32.35',
                'Porcentaje de población de 15 a 64 años' => '59.64',
                'Porcentaje de población de 65 y más años' => '8.02',
                'Porcentaje de población no especificada' => '-0.01',
                'Fecundidad promedio' => '2.60',
                'Porcentaje de población nacida en otro estado' => '13.25',
                'Porcentaje de población con discapacidad' => '6.52'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.86',
                'Grado Promedio de Escolaridad masculina' => '8.18',
                'Grado Promedio de Escolaridad femenina' => '7.56'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '47.88',
                'Población Económicamente Activa masculina' => '71.84',
                'Población Económicamente Activa femenina' => '28.16',
                'Población Ocupada' => '89.99',
                'Población Ocupada masculina' => '69.93',
                'Población Ocupada femenina' => '30.07',
                'Población Desocupada' => '10.01',
                'Derechohabiencia' => '72.37'
            ),
            'Viviendas' => array(
                'Hogares' => '246',
                'Hogares Jefatura masculina' => '72.71',
                'Hogares Jefatura femenina' => '27.29',
                'Ocupación por Vivienda' => '3.91',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '96.15',
                'Viviendas con Drenaje' => '99.88',
                'Viviendas con Televisión' => '98.14',
                'Viviendas con Automóvil' => '23.16',
                'Viviendas con Computadora' => '12.23',
                'Viviendas con Celular' => '59.85',
                'Viviendas con Internet' => '3.37'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '10',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '50.00',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '20.00',
                'Tercera actividad nombre' => 'Educativos',
                'Tercera actividad porcentaje' => '20.00',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '10.00'
            )
        );
    } // datos

} // Clase SegundaRinconadaDeLaUnion

?>
