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
        $this->nombre      = 'Ejido San Agustin';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:28';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ejido-san-agustin';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido San Agustin de Torreón.';
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
                    'Población total' => 1855,
                    'Porcentaje de población masculina' => 49.90,
                    'Porcentaje de población femenina' => 50.10,
                    'Porcentaje de población de 0 a 14 años' => 29.76,
                    'Porcentaje de población de 15 a 64 años' => 63.76,
                    'Porcentaje de población de 65 y más años' => 6.24,
                    'Porcentaje de población no especificada' => 0.24,
                    'Fecundidad promedio' => 2.36,
                    'Porcentaje de población nacida en otro estado' => 10.69,
                    'Porcentaje de población con discapacidad' => 5.28,
                    'Porcentaje de población de 15 y más analfabeta' => 2.78,
                    'Porcentaje de población de 18 y más' => 62.71,
                    'Porcentaje de población de 18 y más postbásicos' => 10.40
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.32,
                    'Grado Promedio de Escolaridad masculina' => 7.38,
                    'Grado Promedio de Escolaridad femenina' => 7.27
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.00,
                    'Población Económicamente Activa masculina' => 71.25,
                    'Población Económicamente Activa femenina' => 28.75,
                    'Población Ocupada' => 87.98,
                    'Población Ocupada masculina' => 68.41,
                    'Población Ocupada femenina' => 31.59,
                    'Población Desocupada' => 12.02,
                    'Derechohabiencia' => 70.39
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 425,
                    'Hogares Jefatura masculina' => 79.48,
                    'Hogares Jefatura femenina' => 20.52,
                    'Ocupación por Vivienda' => 4.36,
                    'Viviendas con Electricidad' => 99.11,
                    'Viviendas con Agua' => 97.23,
                    'Viviendas con Drenaje' => 90.86,
                    'Viviendas con Televisión' => 98.38,
                    'Viviendas con Automóvil' => 39.59,
                    'Viviendas con Computadora' => 17.78,
                    'Viviendas con Celular' => 66.82,
                    'Viviendas con Internet' => 3.90
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 78,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 30.77,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 12.82,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 10.26,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 6.41
                )
            )
        );
    } // datos

} // Clase EjidoSanAgustin

?>
