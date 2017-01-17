<?php
/**
 * TrcIMPLAN Índice Básico de Colonias
 *
 * Copyright (C) 2016 Guillermo Valdes Lozano
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
 * @package TrcIMPLAN
 */

namespace IBCTorreon;

/**
 * Clase ResidencialLasVillas
 */
class ResidencialLasVillas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Las Villas';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-17 13:11:23';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-las-villas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Las Villas en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 604,
                    'Porcentaje de población masculina' => 47.83,
                    'Porcentaje de población femenina' => 52.17,
                    'Porcentaje de población de 0 a 14 años' => 35.89,
                    'Porcentaje de población de 15 a 64 años' => 55.53,
                    'Porcentaje de población de 65 y más años' => 3.07,
                    'Porcentaje de población no especificada' => 5.51,
                    'Fecundidad promedio' => 1.69,
                    'Porcentaje de población con discapacidad' => 0.54
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 47.95,
                    'Población Económicamente Activa masculina' => 69.88,
                    'Población Económicamente Activa femenina' => 30.12,
                    'Población Ocupada' => 98.64,
                    'Población Ocupada masculina' => 70.02,
                    'Población Ocupada femenina' => 29.98,
                    'Población Desocupada' => 1.36,
                    'Derechohabiencia' => 82.02
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 133,
                    'Ocupación por Vivienda' => 4.54,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 97.74,
                    'Viviendas con Computadora' => 93.17
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 4,
                    'Primer actividad nombre' => 'Manejo de Residuos',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Segunda actividad porcentaje' => 25.00,
                    'Tercera actividad nombre' => 'Inmobiliarios',
                    'Tercera actividad porcentaje' => 25.00
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
            'Centro latitud'  => 25.6179457415311,
            'Centro longitud' => -103.405552943669
        );
    } // mapas

} // Clase ResidencialLasVillas

?>
