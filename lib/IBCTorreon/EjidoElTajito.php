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
 * Clase EjidoElTajito
 */
class EjidoElTajito extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ejido El Tajito';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-14 14:03:28';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ejido-el-tajito';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido El Tajito de Torreón.';
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
                    'Población total' => 2252,
                    'Porcentaje de población masculina' => 50.04,
                    'Porcentaje de población femenina' => 49.96,
                    'Porcentaje de población de 0 a 14 años' => 28.83,
                    'Porcentaje de población de 15 a 64 años' => 65.46,
                    'Porcentaje de población de 65 y más años' => 5.17,
                    'Porcentaje de población no especificada' => 0.54,
                    'Fecundidad promedio' => 2.37,
                    'Porcentaje de población nacida en otro estado' => 11.23,
                    'Porcentaje de población con discapacidad' => 3.49,
                    'Porcentaje de población de 15 y más analfabeta' => 2.89,
                    'Porcentaje de población de 18 y más' => 62.61,
                    'Porcentaje de población de 18 y más postbásicos' => 14.97
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.91,
                    'Grado Promedio de Escolaridad masculina' => 7.98,
                    'Grado Promedio de Escolaridad femenina' => 7.85
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.18,
                    'Población Económicamente Activa masculina' => 70.83,
                    'Población Económicamente Activa femenina' => 29.17,
                    'Población Ocupada' => 92.50,
                    'Población Ocupada masculina' => 70.06,
                    'Población Ocupada femenina' => 29.94,
                    'Población Desocupada' => 7.50,
                    'Derechohabiencia' => 62.92
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 522,
                    'Hogares Jefatura masculina' => 75.64,
                    'Hogares Jefatura femenina' => 24.36,
                    'Ocupación por Vivienda' => 4.31,
                    'Viviendas con Electricidad' => 99.78,
                    'Viviendas con Agua' => 99.59,
                    'Viviendas con Drenaje' => 99.01,
                    'Viviendas con Televisión' => 99.01,
                    'Viviendas con Automóvil' => 42.89,
                    'Viviendas con Computadora' => 18.91,
                    'Viviendas con Celular' => 65.37,
                    'Viviendas con Internet' => 11.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 112,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 34.82,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 29.46,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 8.93,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 8.04,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 7.14
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

} // Clase EjidoElTajito

?>
