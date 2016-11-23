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
 * Clase RealSanAgustin
 */
class RealSanAgustin extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Real San Agustín';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:10';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'real-san-agustin';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Real San Agustín de Torreón.';
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
                    'Población total' => 599,
                    'Porcentaje de población masculina' => 49.75,
                    'Porcentaje de población femenina' => 50.25,
                    'Porcentaje de población de 0 a 14 años' => 38.40,
                    'Porcentaje de población de 15 a 64 años' => 59.77,
                    'Porcentaje de población de 65 y más años' => 1.84,
                    'Porcentaje de población no especificada' => -0.01,
                    'Fecundidad promedio' => 1.97,
                    'Porcentaje de población nacida en otro estado' => 17.53,
                    'Porcentaje de población con discapacidad' => 3.91,
                    'Porcentaje de población de 15 y más analfabeta' => 1.74,
                    'Porcentaje de población de 18 y más' => 55.09,
                    'Porcentaje de población de 18 y más postbásicos' => 14.19
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.73,
                    'Grado Promedio de Escolaridad masculina' => 8.75,
                    'Grado Promedio de Escolaridad femenina' => 8.70
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.42,
                    'Población Económicamente Activa masculina' => 70.91,
                    'Población Económicamente Activa femenina' => 29.09,
                    'Población Ocupada' => 89.55,
                    'Población Ocupada masculina' => 69.35,
                    'Población Ocupada femenina' => 30.65,
                    'Población Desocupada' => 10.45,
                    'Derechohabiencia' => 75.63
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 161,
                    'Hogares Jefatura masculina' => 82.61,
                    'Hogares Jefatura femenina' => 17.39,
                    'Ocupación por Vivienda' => 3.72,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.76,
                    'Viviendas con Drenaje' => 98.14,
                    'Viviendas con Televisión' => 98.76,
                    'Viviendas con Automóvil' => 37.87,
                    'Viviendas con Computadora' => 16.79,
                    'Viviendas con Celular' => 76.40,
                    'Viviendas con Internet' => 4.35
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 40.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 20.00
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
        return array(
            'Límites'         => \Configuracion\IBCTorreonConfig::LIMITES,
            'Centro latitud'  => 25.0,
            'Centro longitud' => -103.5);
    } // mapas

} // Clase RealSanAgustin

?>
