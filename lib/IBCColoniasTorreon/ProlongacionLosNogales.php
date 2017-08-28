<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ProlongacionLosNogales
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
 * @package TrcIMPLANSitioWeb
 */

namespace IBCColoniasTorreon;

/**
 * Clase ProlongacionLosNogales
 */
class ProlongacionLosNogales extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Prolongación Los Nogales';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'prolongacion-los-nogales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Prolongación Los Nogales en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Prolongación Los Nogales';
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
                    'Población total' => 3204,
                    'Porcentaje de población masculina' => 45.32,
                    'Porcentaje de población femenina' => 54.68,
                    'Porcentaje de población de 0 a 14 años' => 19.01,
                    'Porcentaje de población de 15 a 64 años' => 70.66,
                    'Porcentaje de población de 65 y más años' => 8.74,
                    'Porcentaje de población no especificada' => 1.59,
                    'Fecundidad promedio' => 1.99,
                    'Porcentaje de población con discapacidad' => 5.61
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.50,
                    'Población Económicamente Activa masculina' => 55.88,
                    'Población Económicamente Activa femenina' => 44.12,
                    'Población Ocupada' => 91.54,
                    'Población Ocupada masculina' => 54.86,
                    'Población Ocupada femenina' => 45.14,
                    'Población Desocupada' => 8.46,
                    'Derechohabiencia' => 78.71
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 901,
                    'Ocupación por Vivienda' => 3.56,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.89,
                    'Viviendas con Drenaje' => 99.89,
                    'Viviendas con Televisión' => 99.56,
                    'Viviendas con Automóvil' => 79.69,
                    'Viviendas con Computadora' => 64.82
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 91,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 36.26,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 19.78,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 10.99,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 6.59,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 6.59
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
            'Centro latitud'  => 25.5739577366004,
            'Centro longitud' => -103.440668240639
        );
    } // mapas

    /**
     * Reseña
     *
     * @return string
     */
    public function resena() {
        return '';
    } // resena

} // Clase ProlongacionLosNogales

?>
