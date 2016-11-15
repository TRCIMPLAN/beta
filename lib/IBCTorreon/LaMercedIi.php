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
 * Clase LaMercedIi
 */
class LaMercedIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'La Merced Ii';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'la-merced-ii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Merced Ii de Torreón.';
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
                    'Población total' => 5097,
                    'Porcentaje de población masculina' => 48.68,
                    'Porcentaje de población femenina' => 51.32,
                    'Porcentaje de población de 0 a 14 años' => 22.41,
                    'Porcentaje de población de 15 a 64 años' => 72.57,
                    'Porcentaje de población de 65 y más años' => 3.67,
                    'Porcentaje de población no especificada' => 1.35,
                    'Fecundidad promedio' => 1.83,
                    'Porcentaje de población nacida en otro estado' => 19.91,
                    'Porcentaje de población con discapacidad' => 3.88,
                    'Porcentaje de población de 15 y más analfabeta' => 0.23,
                    'Porcentaje de población de 18 y más' => 69.18,
                    'Porcentaje de población de 18 y más postbásicos' => 47.52
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.75,
                    'Grado Promedio de Escolaridad masculina' => 12.06,
                    'Grado Promedio de Escolaridad femenina' => 11.48
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.72,
                    'Población Económicamente Activa masculina' => 60.61,
                    'Población Económicamente Activa femenina' => 39.39,
                    'Población Ocupada' => 91.48,
                    'Población Ocupada masculina' => 60.03,
                    'Población Ocupada femenina' => 39.97,
                    'Población Desocupada' => 8.52,
                    'Derechohabiencia' => 76.67
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1368,
                    'Hogares Jefatura masculina' => 75.66,
                    'Hogares Jefatura femenina' => 24.34,
                    'Ocupación por Vivienda' => 3.73,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.85,
                    'Viviendas con Drenaje' => 99.93,
                    'Viviendas con Televisión' => 99.63,
                    'Viviendas con Automóvil' => 65.94,
                    'Viviendas con Computadora' => 56.96,
                    'Viviendas con Celular' => 83.41,
                    'Viviendas con Internet' => 44.94
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 129,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 43.41,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 16.28,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 15.50,
                    'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Cuarta actividad porcentaje' => 4.65,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 4.65
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

} // Clase LaMercedIi

?>
