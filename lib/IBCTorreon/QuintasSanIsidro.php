<?php
/**
 * TrcIMPLAN Sitio Web - IBC Torreón Quintas San Isidro
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano
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

namespace IBCTorreon;

/**
 * Clase QuintasSanIsidro
 */
class QuintasSanIsidro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Quintas San Isidro';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-18 14:53:48';
        // El nombre del archivo a crear
        $this->archivo     = 'quintas-san-isidro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Quintas San Isidro en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 804,
                    'Porcentaje de población masculina' => 48.38,
                    'Porcentaje de población femenina' => 51.62,
                    'Porcentaje de población de 0 a 14 años' => 27.68,
                    'Porcentaje de población de 15 a 64 años' => 68.95,
                    'Porcentaje de población de 65 y más años' => 2.99,
                    'Porcentaje de población no especificada' => 0.38,
                    'Fecundidad promedio' => 1.49,
                    'Porcentaje de población con discapacidad' => 1.28
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.63,
                    'Población Económicamente Activa masculina' => 62.43,
                    'Población Económicamente Activa femenina' => 37.57,
                    'Población Ocupada' => 96.88,
                    'Población Ocupada masculina' => 61.57,
                    'Población Ocupada femenina' => 38.43,
                    'Población Desocupada' => 3.12,
                    'Derechohabiencia' => 71.20
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 220,
                    'Ocupación por Vivienda' => 3.65,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.32,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.32,
                    'Viviendas con Automóvil' => 99.75,
                    'Viviendas con Computadora' => 89.72
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 0
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
            'Centro latitud'  => 25.573733666729,
            'Centro longitud' => -103.410579897665
        );
    } // mapas

} // Clase QuintasSanIsidro

?>
