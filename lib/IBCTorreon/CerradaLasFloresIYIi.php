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
 * Clase CerradaLasFloresIYIi
 */
class CerradaLasFloresIYIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Cerrada Las Flores I y II';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'cerrada-las-flores-i-y-ii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Cerrada Las Flores I y II de Torreón.';
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
                    'Población total' => 876,
                    'Porcentaje de población masculina' => 48.97,
                    'Porcentaje de población femenina' => 51.03,
                    'Porcentaje de población de 0 a 14 años' => 34.13,
                    'Porcentaje de población de 15 a 64 años' => 63.81,
                    'Porcentaje de población de 65 y más años' => 1.71,
                    'Porcentaje de población no especificada' => 0.35,
                    'Fecundidad promedio' => 1.71,
                    'Porcentaje de población nacida en otro estado' => 25.34,
                    'Porcentaje de población con discapacidad' => 3.93,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 59.59,
                    'Porcentaje de población de 18 y más postbásicos' => 40.18
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.01,
                    'Grado Promedio de Escolaridad masculina' => 12.48,
                    'Grado Promedio de Escolaridad femenina' => 11.56
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.28,
                    'Población Económicamente Activa masculina' => 63.80,
                    'Población Económicamente Activa femenina' => 36.20,
                    'Población Ocupada' => 94.23,
                    'Población Ocupada masculina' => 63.64,
                    'Población Ocupada femenina' => 36.36,
                    'Población Desocupada' => 5.77,
                    'Derechohabiencia' => 85.39
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 237,
                    'Hogares Jefatura masculina' => 83.12,
                    'Hogares Jefatura femenina' => 16.88,
                    'Ocupación por Vivienda' => 3.70,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.58,
                    'Viviendas con Automóvil' => 75.53,
                    'Viviendas con Computadora' => 62.45,
                    'Viviendas con Celular' => 88.61,
                    'Viviendas con Internet' => 45.57
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 9,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 66.67,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 22.22,
                    'Tercera actividad nombre' => 'Comercio Mayoreo',
                    'Tercera actividad porcentaje' => 11.11
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

} // Clase CerradaLasFloresIYIi

?>