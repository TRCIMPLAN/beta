<?php
/**
 * TrcIMPLAN Sitio Web - IBCTorreon CamiloTorres
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
 * Clase CamiloTorres
 */
class CamiloTorres extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Camilo Torres';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-19T11:04:26';
        // El nombre del archivo a crear
        $this->archivo     = 'camilo-torres';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Camilo Torres en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 878,
                    'Porcentaje de población masculina' => 46.94,
                    'Porcentaje de población femenina' => 53.06,
                    'Porcentaje de población de 0 a 14 años' => 28.89,
                    'Porcentaje de población de 15 a 64 años' => 66.89,
                    'Porcentaje de población de 65 y más años' => 4.21,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 2.42,
                    'Porcentaje de población con discapacidad' => 3.03
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.12,
                    'Población Económicamente Activa masculina' => 69.99,
                    'Población Económicamente Activa femenina' => 30.01,
                    'Población Ocupada' => 94.94,
                    'Población Ocupada masculina' => 69.35,
                    'Población Ocupada femenina' => 30.65,
                    'Población Desocupada' => 5.06,
                    'Derechohabiencia' => 72.44
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 227,
                    'Ocupación por Vivienda' => 3.87,
                    'Viviendas con Electricidad' => 99.86,
                    'Viviendas con Agua' => 94.44,
                    'Viviendas con Drenaje' => 97.13,
                    'Viviendas con Televisión' => 98.96,
                    'Viviendas con Automóvil' => 20.38,
                    'Viviendas con Computadora' => 2.56
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 21,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 66.67,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 23.81,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 4.76,
                    'Cuarta actividad nombre' => 'Gubernamentales',
                    'Cuarta actividad porcentaje' => 4.76
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
            'Centro latitud'  => 25.5165824871007,
            'Centro longitud' => -103.470066481921
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

} // Clase CamiloTorres

?>
