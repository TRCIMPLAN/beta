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
 * Clase ElRobleI
 */
class ElRobleI extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'El Roble I';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-16 15:38:41';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'el-roble-i';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia El Roble I de Torreón.';
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
                    'Población total' => 1238,
                    'Porcentaje de población masculina' => 46.12,
                    'Porcentaje de población femenina' => 53.88,
                    'Porcentaje de población de 0 a 14 años' => 20.68,
                    'Porcentaje de población de 15 a 64 años' => 70.76,
                    'Porcentaje de población de 65 y más años' => 7.51,
                    'Porcentaje de población no especificada' => 1.05,
                    'Fecundidad promedio' => 2.24,
                    'Porcentaje de población nacida en otro estado' => 16.64,
                    'Porcentaje de población con discapacidad' => 6.93,
                    'Porcentaje de población de 15 y más analfabeta' => 0.04,
                    'Porcentaje de población de 18 y más' => 72.62,
                    'Porcentaje de población de 18 y más postbásicos' => 41.44
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.76,
                    'Grado Promedio de Escolaridad masculina' => 11.08,
                    'Grado Promedio de Escolaridad femenina' => 10.47
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.96,
                    'Población Económicamente Activa masculina' => 63.47,
                    'Población Económicamente Activa femenina' => 36.53,
                    'Población Ocupada' => 93.61,
                    'Población Ocupada masculina' => 62.73,
                    'Población Ocupada femenina' => 37.27,
                    'Población Desocupada' => 6.39,
                    'Derechohabiencia' => 75.12
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 332,
                    'Hogares Jefatura masculina' => 71.99,
                    'Hogares Jefatura femenina' => 28.01,
                    'Ocupación por Vivienda' => 3.73,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.40,
                    'Viviendas con Automóvil' => 63.25,
                    'Viviendas con Computadora' => 44.87,
                    'Viviendas con Celular' => 80.42,
                    'Viviendas con Internet' => 33.66
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 12,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 66.67,
                    'Segunda actividad nombre' => 'Comercio Mayoreo',
                    'Segunda actividad porcentaje' => 8.33,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 8.33,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 8.33,
                    'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Quinta actividad porcentaje' => 8.33
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

} // Clase ElRobleI

?>
