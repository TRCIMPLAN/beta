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
 * Clase Ana
 */
class Ana extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ana';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ana de Torreón.';
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
                    'Población total' => 1753,
                    'Porcentaje de población masculina' => 49.34,
                    'Porcentaje de población femenina' => 50.66,
                    'Porcentaje de población de 0 a 14 años' => 18.08,
                    'Porcentaje de población de 15 a 64 años' => 60.47,
                    'Porcentaje de población de 65 y más años' => 13.58,
                    'Porcentaje de población no especificada' => 7.87,
                    'Fecundidad promedio' => 2.34,
                    'Porcentaje de población nacida en otro estado' => 14.43,
                    'Porcentaje de población con discapacidad' => 7.95
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.89,
                    'Grado Promedio de Escolaridad masculina' => 10.20,
                    'Grado Promedio de Escolaridad femenina' => 9.62
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.12,
                    'Población Económicamente Activa masculina' => 62.55,
                    'Población Económicamente Activa femenina' => 37.45,
                    'Población Ocupada' => 86.68,
                    'Población Ocupada masculina' => 61.78,
                    'Población Ocupada femenina' => 38.22,
                    'Población Desocupada' => 13.32,
                    'Derechohabiencia' => 61.61
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 467,
                    'Hogares Jefatura masculina' => 63.17,
                    'Hogares Jefatura femenina' => 36.83,
                    'Ocupación por Vivienda' => 3.75,
                    'Viviendas con Electricidad' => 99.57,
                    'Viviendas con Agua' => 99.57,
                    'Viviendas con Drenaje' => 99.57,
                    'Viviendas con Televisión' => 98.07,
                    'Viviendas con Automóvil' => 38.97,
                    'Viviendas con Computadora' => 34.05,
                    'Viviendas con Celular' => 62.96,
                    'Viviendas con Internet' => 25.33
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 90,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 26.67,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 18.89,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 16.67,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 4.44
                )
            )
        );
    } // datos

} // Clase Ana

?>
