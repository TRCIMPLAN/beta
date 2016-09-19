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
 * Clase VillasSanJose
 */
class VillasSanJose extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villas San Jose';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'villas-san-jose';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas San Jose de Torreón.';
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
                    'Población total' => 455,
                    'Porcentaje de población masculina' => 52.31,
                    'Porcentaje de población femenina' => 47.69,
                    'Porcentaje de población de 0 a 14 años' => 35.82,
                    'Porcentaje de población de 15 a 64 años' => 61.98,
                    'Porcentaje de población de 65 y más años' => 1.98,
                    'Porcentaje de población no especificada' => 0.22,
                    'Fecundidad promedio' => 1.75,
                    'Porcentaje de población nacida en otro estado' => 21.98,
                    'Porcentaje de población con discapacidad' => 1.45
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.87,
                    'Grado Promedio de Escolaridad masculina' => 13.04,
                    'Grado Promedio de Escolaridad femenina' => 12.71
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 59.50,
                    'Población Económicamente Activa masculina' => 61.78,
                    'Población Económicamente Activa femenina' => 38.22,
                    'Población Ocupada' => 96.20,
                    'Población Ocupada masculina' => 60.87,
                    'Población Ocupada femenina' => 39.13,
                    'Población Desocupada' => 3.80,
                    'Derechohabiencia' => 84.40
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 130,
                    'Hogares Jefatura masculina' => 78.46,
                    'Hogares Jefatura femenina' => 21.54,
                    'Ocupación por Vivienda' => 3.50,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 85.38,
                    'Viviendas con Computadora' => 69.23,
                    'Viviendas con Celular' => 88.46,
                    'Viviendas con Internet' => 55.38
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 60.00,
                    'Segunda actividad nombre' => 'Industria Manufacturera',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 20.00
                )
            )
        );
    } // datos

} // Clase VillasSanJose

?>
