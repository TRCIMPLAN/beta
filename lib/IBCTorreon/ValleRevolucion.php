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
 * Clase ValleRevolucion
 */
class ValleRevolucion extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Valle Revolucion';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'valle-revolucion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Valle Revolucion de Torreón.';
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
                    'Población total' => 2584,
                    'Porcentaje de población masculina' => 48.30,
                    'Porcentaje de población femenina' => 51.70,
                    'Porcentaje de población de 0 a 14 años' => 22.56,
                    'Porcentaje de población de 15 a 64 años' => 71.21,
                    'Porcentaje de población de 65 y más años' => 4.02,
                    'Porcentaje de población no especificada' => 2.21,
                    'Fecundidad promedio' => 1.95,
                    'Porcentaje de población nacida en otro estado' => 22.37,
                    'Porcentaje de población con discapacidad' => 2.25,
                    'Porcentaje de población de 15 y más analfabeta' => 0.15,
                    'Porcentaje de población de 18 y más' => 69.58,
                    'Porcentaje de población de 18 y más postbásicos' => 42.07
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.16,
                    'Grado Promedio de Escolaridad masculina' => 11.53,
                    'Grado Promedio de Escolaridad femenina' => 10.81
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.31,
                    'Población Económicamente Activa masculina' => 61.20,
                    'Población Económicamente Activa femenina' => 38.80,
                    'Población Ocupada' => 94.27,
                    'Población Ocupada masculina' => 60.72,
                    'Población Ocupada femenina' => 39.28,
                    'Población Desocupada' => 5.73,
                    'Derechohabiencia' => 78.29
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 678,
                    'Hogares Jefatura masculina' => 75.96,
                    'Hogares Jefatura femenina' => 24.04,
                    'Ocupación por Vivienda' => 3.81,
                    'Viviendas con Electricidad' => 99.85,
                    'Viviendas con Agua' => 99.71,
                    'Viviendas con Drenaje' => 99.85,
                    'Viviendas con Televisión' => 99.12,
                    'Viviendas con Automóvil' => 58.85,
                    'Viviendas con Computadora' => 53.69,
                    'Viviendas con Celular' => 78.17,
                    'Viviendas con Internet' => 38.20
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 50,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 48.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 16.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 12.00,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 6.00,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 4.00
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

} // Clase ValleRevolucion

?>
