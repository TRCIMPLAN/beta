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
 * Clase ElRanchito
 */
class ElRanchito extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'El Ranchito';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:08';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'el-ranchito';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia El Ranchito de Torreón.';
        $this->claves      = 'IMPLAN, Torreon, Desagregación';
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
                    'Población total' => 718,
                    'Porcentaje de población masculina' => 50.31,
                    'Porcentaje de población femenina' => 49.69,
                    'Porcentaje de población de 0 a 14 años' => 36.97,
                    'Porcentaje de población de 15 a 64 años' => 58.85,
                    'Porcentaje de población de 65 y más años' => 3.29,
                    'Porcentaje de población no especificada' => 0.89,
                    'Fecundidad promedio' => 2.33,
                    'Porcentaje de población nacida en otro estado' => 16.25,
                    'Porcentaje de población con discapacidad' => 3.05,
                    'Porcentaje de población de 15 y más analfabeta' => 4.35,
                    'Porcentaje de población de 18 y más' => 55.57,
                    'Porcentaje de población de 18 y más postbásicos' => 9.82
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 6.89,
                    'Grado Promedio de Escolaridad masculina' => 6.63,
                    'Grado Promedio de Escolaridad femenina' => 7.13
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.87,
                    'Población Económicamente Activa masculina' => 73.21,
                    'Población Económicamente Activa femenina' => 26.79,
                    'Población Ocupada' => 90.09,
                    'Población Ocupada masculina' => 70.98,
                    'Población Ocupada femenina' => 29.02,
                    'Población Desocupada' => 9.91,
                    'Derechohabiencia' => 48.89
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 171,
                    'Hogares Jefatura masculina' => 84.94,
                    'Hogares Jefatura femenina' => 15.06,
                    'Ocupación por Vivienda' => 4.20,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 85.91,
                    'Viviendas con Drenaje' => 66.21,
                    'Viviendas con Televisión' => 95.89,
                    'Viviendas con Automóvil' => 37.59,
                    'Viviendas con Computadora' => 13.16,
                    'Viviendas con Celular' => 67.57,
                    'Viviendas con Internet' => 12.87
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 47,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 29.79,
                    'Segunda actividad nombre' => 'Industria Manufacturera',
                    'Segunda actividad porcentaje' => 17.02,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 14.89,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 12.77,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 6.38
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
            'Centro latitud'  => 25.5949027897846,
            'Centro longitud' => -103.426434600543
        );
    } // mapas

} // Clase ElRanchito

?>
