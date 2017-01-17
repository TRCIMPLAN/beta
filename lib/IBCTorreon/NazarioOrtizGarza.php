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
 * Clase NazarioOrtizGarza
 */
class NazarioOrtizGarza extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Nazario Ortiz Garza';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-17 13:11:23';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'nazario-ortiz-garza';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Nazario Ortiz Garza en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 411,
                    'Porcentaje de población masculina' => 47.20,
                    'Porcentaje de población femenina' => 52.80,
                    'Porcentaje de población de 0 a 14 años' => 21.90,
                    'Porcentaje de población de 15 a 64 años' => 65.69,
                    'Porcentaje de población de 65 y más años' => 10.95,
                    'Porcentaje de población no especificada' => 1.46,
                    'Fecundidad promedio' => 1.82,
                    'Porcentaje de población con discapacidad' => 4.37
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.52,
                    'Población Económicamente Activa masculina' => 62.43,
                    'Población Económicamente Activa femenina' => 37.57,
                    'Población Ocupada' => 95.39,
                    'Población Ocupada masculina' => 61.27,
                    'Población Ocupada femenina' => 38.73,
                    'Población Desocupada' => 4.61,
                    'Derechohabiencia' => 63.02
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 111,
                    'Ocupación por Vivienda' => 3.70,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 99.10,
                    'Viviendas con Televisión' => 98.20,
                    'Viviendas con Automóvil' => 47.75,
                    'Viviendas con Computadora' => 28.83
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 17,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 23.53,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 23.53,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 17.65,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 11.76,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 11.76
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
            'Centro latitud'  => 25.5529563481759,
            'Centro longitud' => -103.455858190514
        );
    } // mapas

} // Clase NazarioOrtizGarza

?>
