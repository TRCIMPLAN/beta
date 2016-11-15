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
 * Clase EjidoLosArenales
 */
class EjidoLosArenales extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ejido Los Arenales';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ejido-los-arenales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido Los Arenales de Torreón.';
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
                    'Población total' => 1050,
                    'Porcentaje de población masculina' => 46.27,
                    'Porcentaje de población femenina' => 53.73,
                    'Porcentaje de población de 0 a 14 años' => 33.14,
                    'Porcentaje de población de 15 a 64 años' => 62.26,
                    'Porcentaje de población de 65 y más años' => 4.27,
                    'Porcentaje de población no especificada' => 0.33,
                    'Fecundidad promedio' => 2.81,
                    'Porcentaje de población nacida en otro estado' => 11.95,
                    'Porcentaje de población con discapacidad' => 1.94,
                    'Porcentaje de población de 15 y más analfabeta' => 3.82,
                    'Porcentaje de población de 18 y más' => 60.78,
                    'Porcentaje de población de 18 y más postbásicos' => 9.43
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.26,
                    'Grado Promedio de Escolaridad masculina' => 7.28,
                    'Grado Promedio de Escolaridad femenina' => 7.25
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.61,
                    'Población Económicamente Activa masculina' => 72.00,
                    'Población Económicamente Activa femenina' => 28.00,
                    'Población Ocupada' => 93.02,
                    'Población Ocupada masculina' => 70.92,
                    'Población Ocupada femenina' => 29.08,
                    'Población Desocupada' => 6.98,
                    'Derechohabiencia' => 64.18
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 248,
                    'Hogares Jefatura masculina' => 77.62,
                    'Hogares Jefatura femenina' => 22.38,
                    'Ocupación por Vivienda' => 4.23,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 96.62,
                    'Viviendas con Drenaje' => 98.63,
                    'Viviendas con Televisión' => 98.63,
                    'Viviendas con Automóvil' => 36.34,
                    'Viviendas con Computadora' => 31.25,
                    'Viviendas con Celular' => 60.76,
                    'Viviendas con Internet' => 13.81
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 85,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 34.12,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 22.35,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 20.00,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 5.88,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 4.71
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
        return array('Límites' => \Configuracion\IBCTorreonConfig::LIMITES);
    } // mapas

} // Clase EjidoLosArenales

?>
