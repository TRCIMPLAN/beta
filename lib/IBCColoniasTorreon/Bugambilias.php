<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Bugambilias
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
 * Clase Bugambilias
 */
class Bugambilias extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Bugambilias';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'bugambilias';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Bugambilias en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Bugambilias';
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
                    'Población total' => 450,
                    'Porcentaje de población masculina' => 49.78,
                    'Porcentaje de población femenina' => 50.22,
                    'Porcentaje de población de 0 a 14 años' => 20.00,
                    'Porcentaje de población de 15 a 64 años' => 68.89,
                    'Porcentaje de población de 65 y más años' => 11.11,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.46,
                    'Porcentaje de población con discapacidad' => 5.55
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.42,
                    'Población Económicamente Activa masculina' => 60.59,
                    'Población Económicamente Activa femenina' => 39.41,
                    'Población Ocupada' => 85.58,
                    'Población Ocupada masculina' => 57.06,
                    'Población Ocupada femenina' => 42.94,
                    'Población Desocupada' => 14.42,
                    'Derechohabiencia' => 68.67
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 126,
                    'Ocupación por Vivienda' => 3.57,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.21,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.21,
                    'Viviendas con Automóvil' => 55.56,
                    'Viviendas con Computadora' => 50.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 23,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 21.74,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 17.39,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 17.39,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 8.70,
                    'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Quinta actividad porcentaje' => 8.70
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
            'Centro latitud'  => 25.5329369841328,
            'Centro longitud' => -103.431757769187
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

} // Clase Bugambilias

?>
