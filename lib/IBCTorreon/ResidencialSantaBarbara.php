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
 * Clase ResidencialSantaBarbara
 */
class ResidencialSantaBarbara extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Santa Bárbara';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:11';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-santa-barbara';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Santa Bárbara de Torreón.';
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
                    'Población total' => 653,
                    'Porcentaje de población masculina' => 50.23,
                    'Porcentaje de población femenina' => 49.77,
                    'Porcentaje de población de 0 a 14 años' => 31.55,
                    'Porcentaje de población de 15 a 64 años' => 63.55,
                    'Porcentaje de población de 65 y más años' => 1.68,
                    'Porcentaje de población no especificada' => 3.22,
                    'Fecundidad promedio' => 1.46,
                    'Porcentaje de población nacida en otro estado' => 24.18,
                    'Porcentaje de población con discapacidad' => 0.13,
                    'Porcentaje de población de 15 y más analfabeta' => 0.25,
                    'Porcentaje de población de 18 y más' => 62.17,
                    'Porcentaje de población de 18 y más postbásicos' => 59.72
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 15.40,
                    'Grado Promedio de Escolaridad masculina' => 15.78,
                    'Grado Promedio de Escolaridad femenina' => 15.03
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 63.94,
                    'Población Económicamente Activa masculina' => 61.90,
                    'Población Económicamente Activa femenina' => 38.10,
                    'Población Ocupada' => 97.88,
                    'Población Ocupada masculina' => 61.80,
                    'Población Ocupada femenina' => 38.20,
                    'Población Desocupada' => 2.12,
                    'Derechohabiencia' => 79.17
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 195,
                    'Hogares Jefatura masculina' => 86.43,
                    'Hogares Jefatura femenina' => 13.57,
                    'Ocupación por Vivienda' => 3.35,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.97,
                    'Viviendas con Drenaje' => 98.97,
                    'Viviendas con Televisión' => 98.97,
                    'Viviendas con Automóvil' => 96.92,
                    'Viviendas con Computadora' => 92.82,
                    'Viviendas con Celular' => 98.46,
                    'Viviendas con Internet' => 85.13
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 26,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 42.31,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 19.23,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 15.38,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 7.69,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 7.69
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
            'Centro latitud'  => 25.0,
            'Centro longitud' => -103.5);
    } // mapas

} // Clase ResidencialSantaBarbara

?>
