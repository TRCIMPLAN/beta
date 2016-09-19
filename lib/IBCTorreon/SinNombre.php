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
 * Clase SinNombre
 */
class SinNombre extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Sin Nombre';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'sin-nombre';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Sin Nombre de Torreón.';
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
                    'Población total' => 412,
                    'Porcentaje de población masculina' => 48.38,
                    'Porcentaje de población femenina' => 51.62,
                    'Porcentaje de población de 0 a 14 años' => 34.25,
                    'Porcentaje de población de 15 a 64 años' => 61.29,
                    'Porcentaje de población de 65 y más años' => 4.30,
                    'Porcentaje de población no especificada' => 0.16,
                    'Fecundidad promedio' => 1.92,
                    'Porcentaje de población nacida en otro estado' => 15.81,
                    'Porcentaje de población con discapacidad' => 3.66
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.56,
                    'Grado Promedio de Escolaridad masculina' => 10.28,
                    'Grado Promedio de Escolaridad femenina' => 10.80
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.63,
                    'Población Económicamente Activa masculina' => 61.18,
                    'Población Económicamente Activa femenina' => 38.82,
                    'Población Ocupada' => 90.10,
                    'Población Ocupada masculina' => 60.87,
                    'Población Ocupada femenina' => 39.13,
                    'Población Desocupada' => 9.90,
                    'Derechohabiencia' => 74.37
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 105,
                    'Hogares Jefatura masculina' => 81.96,
                    'Hogares Jefatura femenina' => 18.04,
                    'Ocupación por Vivienda' => 3.92,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 95.76,
                    'Viviendas con Drenaje' => 94.72,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 57.92,
                    'Viviendas con Computadora' => 46.91,
                    'Viviendas con Celular' => 81.37,
                    'Viviendas con Internet' => 31.32
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 439,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 41.46,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 13.67,
                    'Tercera actividad nombre' => 'Comercio Mayoreo',
                    'Tercera actividad porcentaje' => 8.88,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 5.92,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 5.47
                )
            )
        );
    } // datos

} // Clase SinNombre

?>
