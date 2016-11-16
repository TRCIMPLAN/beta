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
 * Clase ElRobleIi
 */
class ElRobleIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'El Roble II';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-16 15:38:41';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'el-roble-ii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia El Roble II de Torreón.';
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
                    'Población total' => 565,
                    'Porcentaje de población masculina' => 45.31,
                    'Porcentaje de población femenina' => 54.69,
                    'Porcentaje de población de 0 a 14 años' => 21.24,
                    'Porcentaje de población de 15 a 64 años' => 65.49,
                    'Porcentaje de población de 65 y más años' => 7.43,
                    'Porcentaje de población no especificada' => 5.84,
                    'Fecundidad promedio' => 1.84,
                    'Porcentaje de población nacida en otro estado' => 15.40,
                    'Porcentaje de población con discapacidad' => 3.92,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 66.55,
                    'Porcentaje de población de 18 y más postbásicos' => 48.50
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.12,
                    'Grado Promedio de Escolaridad masculina' => 12.32,
                    'Grado Promedio de Escolaridad femenina' => 11.97
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.86,
                    'Población Económicamente Activa masculina' => 57.98,
                    'Población Económicamente Activa femenina' => 42.02,
                    'Población Ocupada' => 96.84,
                    'Población Ocupada masculina' => 59.29,
                    'Población Ocupada femenina' => 40.71,
                    'Población Desocupada' => 3.16,
                    'Derechohabiencia' => 72.92
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 149,
                    'Hogares Jefatura masculina' => 69.80,
                    'Hogares Jefatura femenina' => 30.20,
                    'Ocupación por Vivienda' => 3.79,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 97.99,
                    'Viviendas con Drenaje' => 97.32,
                    'Viviendas con Televisión' => 97.99,
                    'Viviendas con Automóvil' => 75.17,
                    'Viviendas con Computadora' => 57.30,
                    'Viviendas con Celular' => 78.52,
                    'Viviendas con Internet' => 40.39
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 28,
                    'Primer actividad nombre' => 'Gubernamentales',
                    'Primer actividad porcentaje' => 53.57,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 17.86,
                    'Tercera actividad nombre' => 'Comercio Menudeo',
                    'Tercera actividad porcentaje' => 10.71,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 7.14,
                    'Quinta actividad nombre' => 'Educativos',
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

} // Clase ElRobleIi

?>
