<?php
/**
 * TrcIMPLAN Sitio Web - IBCTorreon ResidencialFloridaBlanca
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

namespace IBCTorreon;

/**
 * Clase ResidencialFloridaBlanca
 */
class ResidencialFloridaBlanca extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Florida Blanca';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-19T11:04:26';
        // El nombre del archivo a crear
        $this->archivo     = 'residencial-florida-blanca';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Florida Blanca en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Desagregación, Colonia, {$this->conglomerado->nombre}';
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
                    'Población total' => 413,
                    'Porcentaje de población masculina' => 49.88,
                    'Porcentaje de población femenina' => 50.12,
                    'Porcentaje de población de 0 a 14 años' => 23.73,
                    'Porcentaje de población de 15 a 64 años' => 68.77,
                    'Porcentaje de población de 65 y más años' => 5.33,
                    'Porcentaje de población no especificada' => 2.17,
                    'Fecundidad promedio' => 1.50,
                    'Porcentaje de población con discapacidad' => 2.39
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 48.65,
                    'Población Económicamente Activa masculina' => 59.26,
                    'Población Económicamente Activa femenina' => 40.74,
                    'Población Ocupada' => 92.05,
                    'Población Ocupada masculina' => 59.33,
                    'Población Ocupada femenina' => 40.67,
                    'Población Desocupada' => 7.95,
                    'Derechohabiencia' => 83.78
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 109,
                    'Ocupación por Vivienda' => 3.79,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 94.50,
                    'Viviendas con Computadora' => 88.99
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Primer actividad porcentaje' => 20.00,
                    'Segunda actividad nombre' => 'Manejo de Residuos',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Comercio Menudeo',
                    'Tercera actividad porcentaje' => 20.00,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 20.00,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 20.00
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
            'Centro latitud'  => 25.5246385037952,
            'Centro longitud' => -103.397568556421
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

} // Clase ResidencialFloridaBlanca

?>
