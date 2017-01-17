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
 * Clase LosAgaves
 */
class LosAgaves extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Los Agaves';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-17 13:11:23';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'los-agaves';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Los Agaves en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 10,
                    'Porcentaje de población masculina' => 50.00,
                    'Porcentaje de población femenina' => 50.00,
                    'Porcentaje de población de 0 a 14 años' => 28.26,
                    'Porcentaje de población de 15 a 64 años' => 68.42,
                    'Porcentaje de población de 65 y más años' => 2.20,
                    'Porcentaje de población no especificada' => 1.12,
                    'Fecundidad promedio' => 1.81,
                    'Porcentaje de población con discapacidad' => 1.86
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.96,
                    'Población Económicamente Activa masculina' => 62.20,
                    'Población Económicamente Activa femenina' => 37.80,
                    'Población Ocupada' => 94.54,
                    'Población Ocupada masculina' => 60.82,
                    'Población Ocupada femenina' => 39.18,
                    'Población Desocupada' => 5.46,
                    'Derechohabiencia' => 76.75
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 3,
                    'Ocupación por Vivienda' => 3.33,
                    'Viviendas con Electricidad' => 99.88,
                    'Viviendas con Agua' => 99.56,
                    'Viviendas con Drenaje' => 99.47,
                    'Viviendas con Televisión' => 99.56,
                    'Viviendas con Automóvil' => 59.81,
                    'Viviendas con Computadora' => 46.90
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
            'Centro latitud'  => 25.5247981105332,
            'Centro longitud' => -103.335914934289
        );
    } // mapas

} // Clase LosAgaves

?>
