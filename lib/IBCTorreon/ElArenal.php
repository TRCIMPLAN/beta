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
 * Clase ElArenal
 */
class ElArenal extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'El Arenal';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'el-arenal';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia El Arenal de Torreón.';
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
                    'Población total' => 1420,
                    'Porcentaje de población masculina' => 50.31,
                    'Porcentaje de población femenina' => 49.69,
                    'Porcentaje de población de 0 a 14 años' => 26.74,
                    'Porcentaje de población de 15 a 64 años' => 62.46,
                    'Porcentaje de población de 65 y más años' => 10.58,
                    'Porcentaje de población no especificada' => 0.22,
                    'Fecundidad promedio' => 2.41,
                    'Porcentaje de población nacida en otro estado' => 14.81,
                    'Porcentaje de población con discapacidad' => 8.63,
                    'Porcentaje de población de 15 y más analfabeta' => 1.68,
                    'Porcentaje de población de 18 y más' => 68.03,
                    'Porcentaje de población de 18 y más postbásicos' => 21.84
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.68,
                    'Grado Promedio de Escolaridad masculina' => 8.86,
                    'Grado Promedio de Escolaridad femenina' => 8.50
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.40,
                    'Población Económicamente Activa masculina' => 66.27,
                    'Población Económicamente Activa femenina' => 33.73,
                    'Población Ocupada' => 93.22,
                    'Población Ocupada masculina' => 65.23,
                    'Población Ocupada femenina' => 34.77,
                    'Población Desocupada' => 6.78,
                    'Derechohabiencia' => 59.99
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 370,
                    'Hogares Jefatura masculina' => 71.07,
                    'Hogares Jefatura femenina' => 28.93,
                    'Ocupación por Vivienda' => 3.84,
                    'Viviendas con Electricidad' => 99.40,
                    'Viviendas con Agua' => 99.94,
                    'Viviendas con Drenaje' => 99.67,
                    'Viviendas con Televisión' => 97.78,
                    'Viviendas con Automóvil' => 37.05,
                    'Viviendas con Computadora' => 25.19,
                    'Viviendas con Celular' => 63.65,
                    'Viviendas con Internet' => 17.09
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 20,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 60.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 25.00,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 15.00
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

} // Clase ElArenal

?>
