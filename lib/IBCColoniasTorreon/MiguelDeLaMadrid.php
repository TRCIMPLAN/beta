<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon MiguelDeLaMadrid
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
 * Clase MiguelDeLaMadrid
 */
class MiguelDeLaMadrid extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Miguel De La Madrid';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'miguel-de-la-madrid';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Miguel De La Madrid en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Miguel De La Madrid';
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
                    'Población total' => 1318,
                    'Porcentaje de población masculina' => 50.91,
                    'Porcentaje de población femenina' => 49.09,
                    'Porcentaje de población de 0 a 14 años' => 27.92,
                    'Porcentaje de población de 15 a 64 años' => 67.22,
                    'Porcentaje de población de 65 y más años' => 4.63,
                    'Porcentaje de población no especificada' => 0.23,
                    'Fecundidad promedio' => 2.47,
                    'Porcentaje de población con discapacidad' => 6.03
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.02,
                    'Población Económicamente Activa masculina' => 74.76,
                    'Población Económicamente Activa femenina' => 25.24,
                    'Población Ocupada' => 92.86,
                    'Población Ocupada masculina' => 74.59,
                    'Población Ocupada femenina' => 25.41,
                    'Población Desocupada' => 7.14,
                    'Derechohabiencia' => 67.68
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 301,
                    'Ocupación por Vivienda' => 4.38,
                    'Viviendas con Electricidad' => 99.67,
                    'Viviendas con Agua' => 99.67,
                    'Viviendas con Drenaje' => 99.34,
                    'Viviendas con Televisión' => 98.67,
                    'Viviendas con Automóvil' => 41.89,
                    'Viviendas con Computadora' => 23.03
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 69,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 34.78,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 24.64,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 15.94,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 10.14,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 5.80
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
            'Centro latitud'  => 25.55023883854,
            'Centro longitud' => -103.392787238703
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

} // Clase MiguelDeLaMadrid

?>
