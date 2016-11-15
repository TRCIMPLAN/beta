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
 * Clase AngelesResidencialRinconAurora
 */
class AngelesResidencialRinconAurora extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Angeles Residencial - Rincon Aurora';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'angeles-residencial-rincon-aurora';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Angeles Residencial - Rincon Aurora de Torreón.';
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
                    'Población total' => 438,
                    'Porcentaje de población masculina' => 47.95,
                    'Porcentaje de población femenina' => 52.05,
                    'Porcentaje de población de 0 a 14 años' => 20.78,
                    'Porcentaje de población de 15 a 64 años' => 74.66,
                    'Porcentaje de población de 65 y más años' => 1.83,
                    'Porcentaje de población no especificada' => 2.73,
                    'Fecundidad promedio' => 1.45,
                    'Porcentaje de población nacida en otro estado' => 21.92,
                    'Porcentaje de población con discapacidad' => 1.40,
                    'Porcentaje de población de 15 y más analfabeta' => 0.02,
                    'Porcentaje de población de 18 y más' => 69.41,
                    'Porcentaje de población de 18 y más postbásicos' => 65.53
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.87,
                    'Grado Promedio de Escolaridad masculina' => 15.14,
                    'Grado Promedio de Escolaridad femenina' => 14.65
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.02,
                    'Población Económicamente Activa masculina' => 50.25,
                    'Población Económicamente Activa femenina' => 49.75,
                    'Población Ocupada' => 94.83,
                    'Población Ocupada masculina' => 51.81,
                    'Población Ocupada femenina' => 48.19,
                    'Población Desocupada' => 5.17,
                    'Derechohabiencia' => 85.84
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 121,
                    'Hogares Jefatura masculina' => 78.51,
                    'Hogares Jefatura femenina' => 21.49,
                    'Ocupación por Vivienda' => 3.62,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.35,
                    'Viviendas con Automóvil' => 95.04,
                    'Viviendas con Computadora' => 91.74,
                    'Viviendas con Celular' => 99.17,
                    'Viviendas con Internet' => 79.34
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 3,
                    'Primer actividad nombre' => 'Salud',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Industria Manufacturera',
                    'Segunda actividad porcentaje' => 33.33,
                    'Tercera actividad nombre' => 'Comercio Menudeo',
                    'Tercera actividad porcentaje' => 33.33
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

} // Clase AngelesResidencialRinconAurora

?>
