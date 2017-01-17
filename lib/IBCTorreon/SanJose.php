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
 * Clase SanJose
 */
class SanJose extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'San José';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-17 13:11:23';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'san-jose';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia San José en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 98,
                    'Porcentaje de población masculina' => 43.88,
                    'Porcentaje de población femenina' => 56.12,
                    'Porcentaje de población de 0 a 14 años' => 27.55,
                    'Porcentaje de población de 15 a 64 años' => 67.35,
                    'Porcentaje de población de 65 y más años' => 5.10,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.63,
                    'Porcentaje de población con discapacidad' => 6.15
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.00,
                    'Población Económicamente Activa masculina' => 56.41,
                    'Población Económicamente Activa femenina' => 43.59,
                    'Población Ocupada' => 82.31,
                    'Población Ocupada masculina' => 51.52,
                    'Población Ocupada femenina' => 48.48,
                    'Población Desocupada' => 17.69,
                    'Derechohabiencia' => 75.51
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 27,
                    'Ocupación por Vivienda' => 3.63,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 96.30,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 66.67,
                    'Viviendas con Computadora' => 55.56
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 2,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 100.00
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
            'Centro latitud'  => 25.5309953761869,
            'Centro longitud' => -103.383443514978
        );
    } // mapas

} // Clase SanJose

?>
