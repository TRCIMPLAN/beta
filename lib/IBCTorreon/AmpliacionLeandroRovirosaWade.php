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
 * Clase AmpliacionLeandroRovirosaWade
 */
class AmpliacionLeandroRovirosaWade extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ampliación Leandro Rovirosa Wade';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-16 15:38:41';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ampliacion-leandro-rovirosa-wade';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ampliación Leandro Rovirosa Wade de Torreón.';
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
                    'Población total' => 1792,
                    'Porcentaje de población masculina' => 47.60,
                    'Porcentaje de población femenina' => 52.40,
                    'Porcentaje de población de 0 a 14 años' => 31.75,
                    'Porcentaje de población de 15 a 64 años' => 63.50,
                    'Porcentaje de población de 65 y más años' => 3.07,
                    'Porcentaje de población no especificada' => 1.68,
                    'Fecundidad promedio' => 1.51,
                    'Porcentaje de población nacida en otro estado' => 21.97,
                    'Porcentaje de población con discapacidad' => 5.36,
                    'Porcentaje de población de 15 y más analfabeta' => 0.01,
                    'Porcentaje de población de 18 y más' => 60.49,
                    'Porcentaje de población de 18 y más postbásicos' => 48.83
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 13.21,
                    'Grado Promedio de Escolaridad masculina' => 13.48,
                    'Grado Promedio de Escolaridad femenina' => 12.99
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 62.99,
                    'Población Económicamente Activa masculina' => 55.83,
                    'Población Económicamente Activa femenina' => 44.17,
                    'Población Ocupada' => 97.02,
                    'Población Ocupada masculina' => 56.20,
                    'Población Ocupada femenina' => 43.80,
                    'Población Desocupada' => 2.98,
                    'Derechohabiencia' => 75.84
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 527,
                    'Hogares Jefatura masculina' => 70.66,
                    'Hogares Jefatura femenina' => 29.34,
                    'Ocupación por Vivienda' => 3.40,
                    'Viviendas con Electricidad' => 99.81,
                    'Viviendas con Agua' => 98.86,
                    'Viviendas con Drenaje' => 98.67,
                    'Viviendas con Televisión' => 99.24,
                    'Viviendas con Automóvil' => 81.05,
                    'Viviendas con Computadora' => 68.65,
                    'Viviendas con Celular' => 94.07,
                    'Viviendas con Internet' => 53.35
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 7,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 42.86,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 42.86,
                    'Tercera actividad nombre' => 'Manejo de Residuos',
                    'Tercera actividad porcentaje' => 14.29
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

} // Clase AmpliacionLeandroRovirosaWade

?>
