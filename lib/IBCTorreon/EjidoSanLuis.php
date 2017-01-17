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
 * Clase EjidoSanLuis
 */
class EjidoSanLuis extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ejido San Luis';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-17 13:11:23';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ejido-san-luis';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido San Luis en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 1222,
                    'Porcentaje de población masculina' => 47.96,
                    'Porcentaje de población femenina' => 52.04,
                    'Porcentaje de población de 0 a 14 años' => 28.02,
                    'Porcentaje de población de 15 a 64 años' => 65.44,
                    'Porcentaje de población de 65 y más años' => 6.03,
                    'Porcentaje de población no especificada' => 0.51,
                    'Fecundidad promedio' => 2.47,
                    'Porcentaje de población con discapacidad' => 6.65
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.67,
                    'Población Económicamente Activa masculina' => 68.83,
                    'Población Económicamente Activa femenina' => 31.17,
                    'Población Ocupada' => 89.43,
                    'Población Ocupada masculina' => 67.01,
                    'Población Ocupada femenina' => 32.99,
                    'Población Desocupada' => 10.57,
                    'Derechohabiencia' => 68.89
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 300,
                    'Ocupación por Vivienda' => 4.07,
                    'Viviendas con Electricidad' => 99.71,
                    'Viviendas con Agua' => 97.93,
                    'Viviendas con Drenaje' => 97.97,
                    'Viviendas con Televisión' => 97.86,
                    'Viviendas con Automóvil' => 44.50,
                    'Viviendas con Computadora' => 23.20
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 85,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 31.76,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 24.71,
                    'Tercera actividad nombre' => 'Comercio Mayoreo',
                    'Tercera actividad porcentaje' => 9.41,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 9.41,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 7.06
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
            'Centro latitud'  => 25.5642978373474,
            'Centro longitud' => -103.38090443158
        );
    } // mapas

} // Clase EjidoSanLuis

?>
