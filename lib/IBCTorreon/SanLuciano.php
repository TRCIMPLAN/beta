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
 * Clase SanLuciano
 */
class SanLuciano extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'San Luciano';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-14 14:03:32';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'san-luciano';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia San Luciano de Torreón.';
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
                    'Población total' => 223,
                    'Porcentaje de población masculina' => 45.74,
                    'Porcentaje de población femenina' => 54.26,
                    'Porcentaje de población de 0 a 14 años' => 18.83,
                    'Porcentaje de población de 15 a 64 años' => 74.89,
                    'Porcentaje de población de 65 y más años' => 6.28,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.64,
                    'Porcentaje de población nacida en otro estado' => 21.52,
                    'Porcentaje de población con discapacidad' => 3.14,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 73.09,
                    'Porcentaje de población de 18 y más postbásicos' => 61.43
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 13.53,
                    'Grado Promedio de Escolaridad masculina' => 14.32,
                    'Grado Promedio de Escolaridad femenina' => 12.94
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.78,
                    'Población Económicamente Activa masculina' => 51.02,
                    'Población Económicamente Activa femenina' => 48.98,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 51.02,
                    'Población Ocupada femenina' => 48.98,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 87.89
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 52,
                    'Hogares Jefatura masculina' => 86.54,
                    'Hogares Jefatura femenina' => 13.46,
                    'Ocupación por Vivienda' => 4.29,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 98.08,
                    'Viviendas con Computadora' => 92.31,
                    'Viviendas con Celular' => 98.08,
                    'Viviendas con Internet' => 92.31
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 22,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 36.36,
                    'Segunda actividad nombre' => 'Comercio Mayoreo',
                    'Segunda actividad porcentaje' => 18.18,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.64,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 9.09,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 9.09
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

} // Clase SanLuciano

?>
