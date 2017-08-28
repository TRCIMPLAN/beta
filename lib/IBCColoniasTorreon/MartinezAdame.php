<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon MartinezAdame
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
 * Clase MartinezAdame
 */
class MartinezAdame extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Martínez Adame';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'martinez-adame';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Martínez Adame en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Martínez Adame';
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
                    'Población total' => 638,
                    'Porcentaje de población masculina' => 47.64,
                    'Porcentaje de población femenina' => 52.36,
                    'Porcentaje de población de 0 a 14 años' => 21.62,
                    'Porcentaje de población de 15 a 64 años' => 64.19,
                    'Porcentaje de población de 65 y más años' => 14.19,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.21,
                    'Porcentaje de población con discapacidad' => 11.53
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.23,
                    'Población Económicamente Activa masculina' => 57.99,
                    'Población Económicamente Activa femenina' => 42.01,
                    'Población Ocupada' => 88.42,
                    'Población Ocupada masculina' => 57.60,
                    'Población Ocupada femenina' => 42.40,
                    'Población Desocupada' => 11.58,
                    'Derechohabiencia' => 59.15
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 186,
                    'Ocupación por Vivienda' => 3.43,
                    'Viviendas con Electricidad' => 99.53,
                    'Viviendas con Agua' => 92.52,
                    'Viviendas con Drenaje' => 99.53,
                    'Viviendas con Televisión' => 96.30,
                    'Viviendas con Automóvil' => 32.29,
                    'Viviendas con Computadora' => 25.56
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 39,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 28.21,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 10.26,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 10.26,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 5.13
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
            'Centro latitud'  => 25.5407166182052,
            'Centro longitud' => -103.469651484883
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

} // Clase MartinezAdame

?>
