<?php
/**
 * TrcIMPLAN Sitio Web - IBC Torreón Jardines Universidad
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
 * Clase JardinesUniversidad
 */
class JardinesUniversidad extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Jardines Universidad';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-18 14:53:48';
        // El nombre del archivo a crear
        $this->archivo     = 'jardines-universidad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Jardines Universidad en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 4867,
                    'Porcentaje de población masculina' => 49.77,
                    'Porcentaje de población femenina' => 50.23,
                    'Porcentaje de población de 0 a 14 años' => 25.33,
                    'Porcentaje de población de 15 a 64 años' => 44.87,
                    'Porcentaje de población de 65 y más años' => 12.45,
                    'Porcentaje de población no especificada' => 17.35,
                    'Fecundidad promedio' => 1.80,
                    'Porcentaje de población con discapacidad' => 1.44
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.28,
                    'Población Económicamente Activa masculina' => 65.66,
                    'Población Económicamente Activa femenina' => 34.34,
                    'Población Ocupada' => 90.43,
                    'Población Ocupada masculina' => 65.15,
                    'Población Ocupada femenina' => 34.85,
                    'Población Desocupada' => 9.57,
                    'Derechohabiencia' => 54.37
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 952,
                    'Ocupación por Vivienda' => 5.11,
                    'Viviendas con Electricidad' => 99.15,
                    'Viviendas con Agua' => 98.94,
                    'Viviendas con Drenaje' => 99.04,
                    'Viviendas con Televisión' => 98.10,
                    'Viviendas con Automóvil' => 52.23,
                    'Viviendas con Computadora' => 32.35
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 122,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.82,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 16.39,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 15.57,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 5.74,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 4.92
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
            'Centro latitud'  => 25.5278032852834,
            'Centro longitud' => -103.322997716226
        );
    } // mapas

} // Clase JardinesUniversidad

?>
