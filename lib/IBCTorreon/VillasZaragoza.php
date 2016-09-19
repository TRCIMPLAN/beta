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
 * Clase VillasZaragoza
 */
class VillasZaragoza extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villas Zaragoza';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'villas-zaragoza';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas Zaragoza de Torreón.';
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
                    'Población total' => 6123,
                    'Porcentaje de población masculina' => 49.83,
                    'Porcentaje de población femenina' => 50.17,
                    'Porcentaje de población de 0 a 14 años' => 36.00,
                    'Porcentaje de población de 15 a 64 años' => 62.17,
                    'Porcentaje de población de 65 y más años' => 1.56,
                    'Porcentaje de población no especificada' => 0.27,
                    'Fecundidad promedio' => 1.82,
                    'Porcentaje de población nacida en otro estado' => 16.14,
                    'Porcentaje de población con discapacidad' => 2.16
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.72,
                    'Grado Promedio de Escolaridad masculina' => 9.81,
                    'Grado Promedio de Escolaridad femenina' => 9.64
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 64.64,
                    'Población Económicamente Activa masculina' => 64.42,
                    'Población Económicamente Activa femenina' => 35.58,
                    'Población Ocupada' => 91.87,
                    'Población Ocupada masculina' => 64.02,
                    'Población Ocupada femenina' => 35.98,
                    'Población Desocupada' => 8.13,
                    'Derechohabiencia' => 75.15
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1725,
                    'Hogares Jefatura masculina' => 82.73,
                    'Hogares Jefatura femenina' => 17.27,
                    'Ocupación por Vivienda' => 3.55,
                    'Viviendas con Electricidad' => 99.68,
                    'Viviendas con Agua' => 99.79,
                    'Viviendas con Drenaje' => 99.68,
                    'Viviendas con Televisión' => 97.59,
                    'Viviendas con Automóvil' => 41.97,
                    'Viviendas con Computadora' => 28.27,
                    'Viviendas con Celular' => 85.40,
                    'Viviendas con Internet' => 12.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 127,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 46.46,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 19.69,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 18.11,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 7.87,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
                    'Quinta actividad porcentaje' => 3.94
                )
            )
        );
    } // datos

} // Clase VillasZaragoza

?>
