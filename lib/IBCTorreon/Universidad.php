<?php
/**
 * TrcIMPLAN Sitio Web - IBCTorreon Universidad
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
 * Clase Universidad
 */
class Universidad extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Universidad';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-19T11:04:26';
        // El nombre del archivo a crear
        $this->archivo     = 'universidad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Universidad en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 287,
                    'Porcentaje de población masculina' => 47.39,
                    'Porcentaje de población femenina' => 52.61,
                    'Porcentaje de población de 0 a 14 años' => 32.40,
                    'Porcentaje de población de 15 a 64 años' => 63.41,
                    'Porcentaje de población de 65 y más años' => 2.09,
                    'Porcentaje de población no especificada' => 2.10,
                    'Fecundidad promedio' => 2.09,
                    'Porcentaje de población con discapacidad' => 0.36
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 46.26,
                    'Población Económicamente Activa masculina' => 70.00,
                    'Población Económicamente Activa femenina' => 30.00,
                    'Población Ocupada' => 93.35,
                    'Población Ocupada masculina' => 68.97,
                    'Población Ocupada femenina' => 31.03,
                    'Población Desocupada' => 6.65,
                    'Derechohabiencia' => 55.05
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 72,
                    'Ocupación por Vivienda' => 3.99,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 97.22,
                    'Viviendas con Drenaje' => 95.83,
                    'Viviendas con Televisión' => 97.22,
                    'Viviendas con Automóvil' => 48.09,
                    'Viviendas con Computadora' => 17.82
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 11,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 27.27,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 27.27,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 18.18,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
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
            'Centro latitud'  => 25.577150433113,
            'Centro longitud' => -103.430685327529
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

} // Clase Universidad

?>
