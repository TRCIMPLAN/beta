<?php
/**
 * TrcIMPLAN Sitio Web - IBC Torreón Fuentes del Sur
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
 * Clase FuentesDelSur
 */
class FuentesDelSur extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Fuentes del Sur';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-18 14:53:48';
        // El nombre del archivo a crear
        $this->archivo     = 'fuentes-del-sur';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Fuentes del Sur en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 4354,
                    'Porcentaje de población masculina' => 47.06,
                    'Porcentaje de población femenina' => 52.94,
                    'Porcentaje de población de 0 a 14 años' => 20.58,
                    'Porcentaje de población de 15 a 64 años' => 71.41,
                    'Porcentaje de población de 65 y más años' => 6.78,
                    'Porcentaje de población no especificada' => 1.23,
                    'Fecundidad promedio' => 2.00,
                    'Porcentaje de población con discapacidad' => 4.53
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.96,
                    'Población Económicamente Activa masculina' => 60.23,
                    'Población Económicamente Activa femenina' => 39.77,
                    'Población Ocupada' => 89.17,
                    'Población Ocupada masculina' => 58.80,
                    'Población Ocupada femenina' => 41.20,
                    'Población Desocupada' => 10.83,
                    'Derechohabiencia' => 76.80
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1210,
                    'Ocupación por Vivienda' => 3.60,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.59,
                    'Viviendas con Drenaje' => 99.75,
                    'Viviendas con Televisión' => 99.59,
                    'Viviendas con Automóvil' => 74.30,
                    'Viviendas con Computadora' => 57.87
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 65,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 30.77,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 12.31,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 10.77,
                    'Quinta actividad nombre' => 'Gubernamentales',
                    'Quinta actividad porcentaje' => 9.23
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
            'Centro latitud'  => 25.5088188024604,
            'Centro longitud' => -103.415267466301
        );
    } // mapas

} // Clase FuentesDelSur

?>
