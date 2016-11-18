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
 * Clase ExHaciendaLaPerla
 */
class ExHaciendaLaPerla extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ex-Hacienda La Perla';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ex-hacienda-la-perla';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ex-Hacienda La Perla de Torreón.';
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
                    'Población total' => 3172,
                    'Porcentaje de población masculina' => 50.76,
                    'Porcentaje de población femenina' => 49.24,
                    'Porcentaje de población de 0 a 14 años' => 39.47,
                    'Porcentaje de población de 15 a 64 años' => 58.61,
                    'Porcentaje de población de 65 y más años' => 1.07,
                    'Porcentaje de población no especificada' => 0.85,
                    'Fecundidad promedio' => 2.01,
                    'Porcentaje de población nacida en otro estado' => 16.98,
                    'Porcentaje de población con discapacidad' => 1.89,
                    'Porcentaje de población de 15 y más analfabeta' => 1.28,
                    'Porcentaje de población de 18 y más' => 54.41,
                    'Porcentaje de población de 18 y más postbásicos' => 12.96
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.35,
                    'Grado Promedio de Escolaridad masculina' => 8.31,
                    'Grado Promedio de Escolaridad femenina' => 8.39
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 59.13,
                    'Población Económicamente Activa masculina' => 70.82,
                    'Población Económicamente Activa femenina' => 29.18,
                    'Población Ocupada' => 86.91,
                    'Población Ocupada masculina' => 70.36,
                    'Población Ocupada femenina' => 29.64,
                    'Población Desocupada' => 13.09,
                    'Derechohabiencia' => 67.75
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 815,
                    'Hogares Jefatura masculina' => 89.41,
                    'Hogares Jefatura femenina' => 10.59,
                    'Ocupación por Vivienda' => 3.89,
                    'Viviendas con Electricidad' => 99.63,
                    'Viviendas con Agua' => 99.39,
                    'Viviendas con Drenaje' => 99.39,
                    'Viviendas con Televisión' => 98.65,
                    'Viviendas con Automóvil' => 33.79,
                    'Viviendas con Computadora' => 23.78,
                    'Viviendas con Celular' => 82.70,
                    'Viviendas con Internet' => 14.51
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 68,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 44.12,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 26.47,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 8.82,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 7.35,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 4.41
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

} // Clase ExHaciendaLaPerla

?>
