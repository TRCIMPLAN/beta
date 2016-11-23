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
 * Clase ElKiosco
 */
class ElKiosco extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'El Kiosco';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:08';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'el-kiosco';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia El Kiosco de Torreón.';
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
                    'Población total' => 639,
                    'Porcentaje de población masculina' => 48.67,
                    'Porcentaje de población femenina' => 51.33,
                    'Porcentaje de población de 0 a 14 años' => 37.09,
                    'Porcentaje de población de 15 a 64 años' => 60.41,
                    'Porcentaje de población de 65 y más años' => 2.03,
                    'Porcentaje de población no especificada' => 0.47,
                    'Fecundidad promedio' => 1.72,
                    'Porcentaje de población nacida en otro estado' => 15.96,
                    'Porcentaje de población con discapacidad' => 1.86,
                    'Porcentaje de población de 15 y más analfabeta' => 0.02,
                    'Porcentaje de población de 18 y más' => 57.59,
                    'Porcentaje de población de 18 y más postbásicos' => 37.25
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.79,
                    'Grado Promedio de Escolaridad masculina' => 11.70,
                    'Grado Promedio de Escolaridad femenina' => 11.86
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 62.65,
                    'Población Económicamente Activa masculina' => 63.40,
                    'Población Económicamente Activa femenina' => 36.60,
                    'Población Ocupada' => 98.08,
                    'Población Ocupada masculina' => 63.46,
                    'Población Ocupada femenina' => 36.54,
                    'Población Desocupada' => 1.92,
                    'Derechohabiencia' => 82.47
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 190,
                    'Hogares Jefatura masculina' => 73.68,
                    'Hogares Jefatura femenina' => 26.32,
                    'Ocupación por Vivienda' => 3.36,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.42,
                    'Viviendas con Automóvil' => 72.11,
                    'Viviendas con Computadora' => 54.21,
                    'Viviendas con Celular' => 92.63,
                    'Viviendas con Internet' => 42.39
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 18,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 38.89,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Inmobiliarios',
                    'Cuarta actividad porcentaje' => 11.11,
                    'Quinta actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Quinta actividad porcentaje' => 11.11
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

} // Clase ElKiosco

?>
