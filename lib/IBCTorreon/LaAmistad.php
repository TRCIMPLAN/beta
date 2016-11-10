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
 * Clase LaAmistad
 */
class LaAmistad extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'La Amistad';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:29';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'la-amistad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Amistad de Torreón.';
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
                    'Población total' => 490,
                    'Porcentaje de población masculina' => 50.70,
                    'Porcentaje de población femenina' => 49.30,
                    'Porcentaje de población de 0 a 14 años' => 27.25,
                    'Porcentaje de población de 15 a 64 años' => 66.36,
                    'Porcentaje de población de 65 y más años' => 5.75,
                    'Porcentaje de población no especificada' => 0.64,
                    'Fecundidad promedio' => 2.31,
                    'Porcentaje de población nacida en otro estado' => 17.88,
                    'Porcentaje de población con discapacidad' => 5.70,
                    'Porcentaje de población de 15 y más analfabeta' => 2.34,
                    'Porcentaje de población de 18 y más' => 66.96,
                    'Porcentaje de población de 18 y más postbásicos' => 24.86
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.91,
                    'Grado Promedio de Escolaridad masculina' => 8.82,
                    'Grado Promedio de Escolaridad femenina' => 9.00
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.94,
                    'Población Económicamente Activa masculina' => 70.11,
                    'Población Económicamente Activa femenina' => 29.89,
                    'Población Ocupada' => 94.53,
                    'Población Ocupada masculina' => 68.48,
                    'Población Ocupada femenina' => 31.52,
                    'Población Desocupada' => 5.47,
                    'Derechohabiencia' => 65.00
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 125,
                    'Hogares Jefatura masculina' => 77.00,
                    'Hogares Jefatura femenina' => 23.00,
                    'Ocupación por Vivienda' => 3.92,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 96.93,
                    'Viviendas con Automóvil' => 60.44,
                    'Viviendas con Computadora' => 44.58,
                    'Viviendas con Celular' => 76.69,
                    'Viviendas con Internet' => 13.99
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 41,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 36.59,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 17.07,
                    'Tercera actividad nombre' => 'Comercio Menudeo',
                    'Tercera actividad porcentaje' => 17.07,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 7.32,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 7.32
                )
            )
        );
    } // datos

} // Clase LaAmistad

?>
