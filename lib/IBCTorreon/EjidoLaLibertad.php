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
 * Clase EjidoLaLibertad
 */
class EjidoLaLibertad extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ejido La Libertad';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ejido-la-libertad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido La Libertad de Torreón.';
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
                '2010' => array(
                    'Población total' => 289,
                    'Porcentaje de población masculina' => 49.94,
                    'Porcentaje de población femenina' => 50.06,
                    'Porcentaje de población de 0 a 14 años' => 27.21,
                    'Porcentaje de población de 15 a 64 años' => 65.52,
                    'Porcentaje de población de 65 y más años' => 7.19,
                    'Porcentaje de población no especificada' => 0.08,
                    'Fecundidad promedio' => 2.50,
                    'Porcentaje de población nacida en otro estado' => 16.38,
                    'Porcentaje de población con discapacidad' => 7.90,
                    'Porcentaje de población de 15 y más analfabeta' => 2.47,
                    'Porcentaje de población de 18 y más' => 65.86,
                    'Porcentaje de población de 18 y más postbásicos' => 17.54
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.13,
                    'Grado Promedio de Escolaridad masculina' => 8.28,
                    'Grado Promedio de Escolaridad femenina' => 7.99
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.99,
                    'Población Económicamente Activa masculina' => 71.98,
                    'Población Económicamente Activa femenina' => 28.02,
                    'Población Ocupada' => 95.39,
                    'Población Ocupada masculina' => 71.76,
                    'Población Ocupada femenina' => 28.24,
                    'Población Desocupada' => 4.61,
                    'Derechohabiencia' => 68.07
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 70,
                    'Hogares Jefatura masculina' => 80.77,
                    'Hogares Jefatura femenina' => 19.23,
                    'Ocupación por Vivienda' => 4.13,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.28,
                    'Viviendas con Drenaje' => 99.77,
                    'Viviendas con Televisión' => 96.85,
                    'Viviendas con Automóvil' => 48.20,
                    'Viviendas con Computadora' => 17.89,
                    'Viviendas con Celular' => 77.02,
                    'Viviendas con Internet' => 8.87
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 7,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 28.57,
                    'Segunda actividad nombre' => 'Educativos',
                    'Segunda actividad porcentaje' => 28.57,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 14.29,
                    'Cuarta actividad nombre' => 'Comercio Menudeo',
                    'Cuarta actividad porcentaje' => 14.29,
                    'Quinta actividad nombre' => 'Inmobiliarios',
                    'Quinta actividad porcentaje' => 14.29
                )
            )
        );
    } // datos

    /**
     * Mapas
     *
     * @return string
     */
    public function mapas() {
        return array('Límites' => \Configuracion\IBCTorreonConfig::LIMITES);
    } // mapas

} // Clase EjidoLaLibertad

?>
