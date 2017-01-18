<?php
/**
 * TrcIMPLAN Sitio Web - IBC Torreón Caleras Solares
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
 * Clase CalerasSolares
 */
class CalerasSolares extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Caleras Solares';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-18 14:53:48';
        // El nombre del archivo a crear
        $this->archivo     = 'caleras-solares';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Caleras Solares en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 823,
                    'Porcentaje de población masculina' => 49.45,
                    'Porcentaje de población femenina' => 50.55,
                    'Porcentaje de población de 0 a 14 años' => 28.43,
                    'Porcentaje de población de 15 a 64 años' => 62.09,
                    'Porcentaje de población de 65 y más años' => 9.48,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.95,
                    'Porcentaje de población con discapacidad' => 14.36
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.40,
                    'Población Económicamente Activa masculina' => 66.04,
                    'Población Económicamente Activa femenina' => 33.96,
                    'Población Ocupada' => 90.79,
                    'Población Ocupada masculina' => 64.60,
                    'Población Ocupada femenina' => 35.40,
                    'Población Desocupada' => 9.21,
                    'Derechohabiencia' => 53.34
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 219,
                    'Ocupación por Vivienda' => 3.76,
                    'Viviendas con Electricidad' => 99.54,
                    'Viviendas con Agua' => 94.98,
                    'Viviendas con Drenaje' => 99.09,
                    'Viviendas con Televisión' => 96.35,
                    'Viviendas con Automóvil' => 20.37,
                    'Viviendas con Computadora' => 9.45
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 13,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 92.31,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 7.69
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
            'Centro latitud'  => 25.5302541607869,
            'Centro longitud' => -103.474566475797
        );
    } // mapas

} // Clase CalerasSolares

?>
