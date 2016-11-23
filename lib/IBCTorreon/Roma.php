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
 * Clase Roma
 */
class Roma extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Roma';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:11';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'roma';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Roma de Torreón.';
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
                    'Población total' => 1800,
                    'Porcentaje de población masculina' => 47.72,
                    'Porcentaje de población femenina' => 52.28,
                    'Porcentaje de población de 0 a 14 años' => 22.39,
                    'Porcentaje de población de 15 a 64 años' => 71.50,
                    'Porcentaje de población de 65 y más años' => 3.78,
                    'Porcentaje de población no especificada' => 2.33,
                    'Fecundidad promedio' => 1.47,
                    'Porcentaje de población nacida en otro estado' => 23.83,
                    'Porcentaje de población con discapacidad' => 2.11,
                    'Porcentaje de población de 15 y más analfabeta' => 0.11,
                    'Porcentaje de población de 18 y más' => 66.17,
                    'Porcentaje de población de 18 y más postbásicos' => 57.06
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 13.44,
                    'Grado Promedio de Escolaridad masculina' => 13.66,
                    'Grado Promedio de Escolaridad femenina' => 13.24
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.39,
                    'Población Económicamente Activa masculina' => 58.42,
                    'Población Económicamente Activa femenina' => 41.58,
                    'Población Ocupada' => 96.18,
                    'Población Ocupada masculina' => 57.51,
                    'Población Ocupada femenina' => 42.49,
                    'Población Desocupada' => 3.82,
                    'Derechohabiencia' => 80.39
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 494,
                    'Hogares Jefatura masculina' => 75.71,
                    'Hogares Jefatura femenina' => 24.29,
                    'Ocupación por Vivienda' => 3.64,
                    'Viviendas con Electricidad' => 99.60,
                    'Viviendas con Agua' => 99.19,
                    'Viviendas con Drenaje' => 99.60,
                    'Viviendas con Televisión' => 98.38,
                    'Viviendas con Automóvil' => 88.66,
                    'Viviendas con Computadora' => 79.55,
                    'Viviendas con Celular' => 90.28,
                    'Viviendas con Internet' => 68.83
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 11,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 63.64,
                    'Segunda actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Segunda actividad porcentaje' => 9.09,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 9.09,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 9.09,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
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
        return array(
            'Límites'         => \Configuracion\IBCTorreonConfig::LIMITES,
            'Centro latitud'  => 25.0,
            'Centro longitud' => -103.5);
    } // mapas

} // Clase Roma

?>
