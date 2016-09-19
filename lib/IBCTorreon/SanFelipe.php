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
 * Clase SanFelipe
 */
class SanFelipe extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'San Felipe';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'san-felipe';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia San Felipe de Torreón.';
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
                    'Población total' => 3969,
                    'Porcentaje de población masculina' => 47.15,
                    'Porcentaje de población femenina' => 52.85,
                    'Porcentaje de población de 0 a 14 años' => 27.53,
                    'Porcentaje de población de 15 a 64 años' => 67.57,
                    'Porcentaje de población de 65 y más años' => 3.80,
                    'Porcentaje de población no especificada' => 1.10,
                    'Fecundidad promedio' => 1.68,
                    'Porcentaje de población nacida en otro estado' => 15.31,
                    'Porcentaje de población con discapacidad' => 8.43
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.81,
                    'Grado Promedio de Escolaridad masculina' => 13.07,
                    'Grado Promedio de Escolaridad femenina' => 12.58
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.58,
                    'Población Económicamente Activa masculina' => 56.06,
                    'Población Económicamente Activa femenina' => 43.94,
                    'Población Ocupada' => 96.42,
                    'Población Ocupada masculina' => 55.92,
                    'Población Ocupada femenina' => 44.08,
                    'Población Desocupada' => 3.58,
                    'Derechohabiencia' => 84.12
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1094,
                    'Hogares Jefatura masculina' => 75.69,
                    'Hogares Jefatura femenina' => 24.31,
                    'Ocupación por Vivienda' => 3.63,
                    'Viviendas con Electricidad' => 99.93,
                    'Viviendas con Agua' => 98.93,
                    'Viviendas con Drenaje' => 99.93,
                    'Viviendas con Televisión' => 99.57,
                    'Viviendas con Automóvil' => 83.47,
                    'Viviendas con Computadora' => 71.68,
                    'Viviendas con Celular' => 90.97,
                    'Viviendas con Internet' => 57.60
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 144,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 31.94,
                    'Segunda actividad nombre' => 'Comercio Mayoreo',
                    'Segunda actividad porcentaje' => 14.58,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 10.42,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 9.03,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 7.64
                )
            )
        );
    } // datos

} // Clase SanFelipe

?>
