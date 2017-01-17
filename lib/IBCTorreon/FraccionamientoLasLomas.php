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
 * Clase FraccionamientoLasLomas
 */
class FraccionamientoLasLomas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Fraccionamiento Las Lomas';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-17 13:11:23';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'fraccionamiento-las-lomas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Fraccionamiento Las Lomas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Desagregación, Colonia';
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
                    'Población total' => 447,
                    'Porcentaje de población masculina' => 48.55,
                    'Porcentaje de población femenina' => 51.45,
                    'Porcentaje de población de 0 a 14 años' => 31.54,
                    'Porcentaje de población de 15 a 64 años' => 64.43,
                    'Porcentaje de población de 65 y más años' => 1.34,
                    'Porcentaje de población no especificada' => 2.69,
                    'Fecundidad promedio' => 1.39,
                    'Porcentaje de población con discapacidad' => 1.58
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 64.49,
                    'Población Económicamente Activa masculina' => 53.62,
                    'Población Económicamente Activa femenina' => 46.38,
                    'Población Ocupada' => 98.03,
                    'Población Ocupada masculina' => 53.69,
                    'Población Ocupada femenina' => 46.31,
                    'Población Desocupada' => 1.97,
                    'Derechohabiencia' => 87.47
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 135,
                    'Ocupación por Vivienda' => 3.31,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 96.30,
                    'Viviendas con Computadora' => 81.48
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 4,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Comercio Mayoreo',
                    'Segunda actividad porcentaje' => 25.00,
                    'Tercera actividad nombre' => 'Comercio Menudeo',
                    'Tercera actividad porcentaje' => 25.00
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
            'Centro latitud'  => 25.5470147959541,
            'Centro longitud' => -103.376669777122
        );
    } // mapas

} // Clase FraccionamientoLasLomas

?>
