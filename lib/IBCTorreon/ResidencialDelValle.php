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
 * Clase ResidencialDelValle
 */
class ResidencialDelValle extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Del Valle';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-del-valle';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Del Valle de Torreón.';
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
                    'Población total' => 345,
                    'Porcentaje de población masculina' => 45.80,
                    'Porcentaje de población femenina' => 54.20,
                    'Porcentaje de población de 0 a 14 años' => 23.77,
                    'Porcentaje de población de 15 a 64 años' => 72.75,
                    'Porcentaje de población de 65 y más años' => 3.48,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.65,
                    'Porcentaje de población nacida en otro estado' => 25.80,
                    'Porcentaje de población con discapacidad' => 3.99,
                    'Porcentaje de población de 15 y más analfabeta' => 0.90,
                    'Porcentaje de población de 18 y más' => 69.28,
                    'Porcentaje de población de 18 y más postbásicos' => 63.19
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 13.79,
                    'Grado Promedio de Escolaridad masculina' => 14.26,
                    'Grado Promedio de Escolaridad femenina' => 13.38
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.41,
                    'Población Económicamente Activa masculina' => 58.90,
                    'Población Económicamente Activa femenina' => 41.10,
                    'Población Ocupada' => 94.98,
                    'Población Ocupada masculina' => 58.27,
                    'Población Ocupada femenina' => 41.73,
                    'Población Desocupada' => 5.02,
                    'Derechohabiencia' => 84.35
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 96,
                    'Hogares Jefatura masculina' => 76.04,
                    'Hogares Jefatura femenina' => 23.96,
                    'Ocupación por Vivienda' => 3.59,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.96,
                    'Viviendas con Automóvil' => 87.50,
                    'Viviendas con Computadora' => 79.17,
                    'Viviendas con Celular' => 95.83,
                    'Viviendas con Internet' => 69.79
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 20,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 35.00,
                    'Segunda actividad nombre' => 'Industria Manufacturera',
                    'Segunda actividad porcentaje' => 15.00,
                    'Tercera actividad nombre' => 'Manejo de Residuos',
                    'Tercera actividad porcentaje' => 15.00,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 10.00,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 10.00
                )
            )
        );
    } // datos

} // Clase ResidencialDelValle

?>
