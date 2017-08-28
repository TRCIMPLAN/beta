<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillasSanJose
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
 * Clase VillasSanJose
 */
class VillasSanJose extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Villas San José';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'villas-san-jose';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas San José en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Villas San José';
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
                    'Porcentaje de población con discapacidad' => 1.45
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
                    'Ocupación por Vivienda' => 3.50,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 85.38,
                    'Viviendas con Computadora' => 69.23
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 60.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
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
            'Centro latitud'  => 25.5613236889676,
            'Centro longitud' => -103.39286290982
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

} // Clase VillasSanJose

?>
