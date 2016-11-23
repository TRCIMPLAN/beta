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
 * Clase Mayran
 */
class Mayran extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Mayrán';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:10';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'mayran';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Mayrán de Torreón.';
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
                    'Población total' => 1234,
                    'Porcentaje de población masculina' => 50.41,
                    'Porcentaje de población femenina' => 49.59,
                    'Porcentaje de población de 0 a 14 años' => 33.45,
                    'Porcentaje de población de 15 a 64 años' => 63.62,
                    'Porcentaje de población de 65 y más años' => 2.94,
                    'Porcentaje de población no especificada' => -0.01,
                    'Fecundidad promedio' => 2.21,
                    'Porcentaje de población nacida en otro estado' => 20.62,
                    'Porcentaje de población con discapacidad' => 5.21,
                    'Porcentaje de población de 15 y más analfabeta' => 1.53,
                    'Porcentaje de población de 18 y más' => 59.38,
                    'Porcentaje de población de 18 y más postbásicos' => 16.42
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.23,
                    'Grado Promedio de Escolaridad masculina' => 8.27,
                    'Grado Promedio de Escolaridad femenina' => 8.18
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.04,
                    'Población Económicamente Activa masculina' => 70.58,
                    'Población Económicamente Activa femenina' => 29.42,
                    'Población Ocupada' => 92.38,
                    'Población Ocupada masculina' => 69.55,
                    'Población Ocupada femenina' => 30.45,
                    'Población Desocupada' => 7.62,
                    'Derechohabiencia' => 67.14
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 314,
                    'Hogares Jefatura masculina' => 86.54,
                    'Hogares Jefatura femenina' => 13.46,
                    'Ocupación por Vivienda' => 3.93,
                    'Viviendas con Electricidad' => 97.43,
                    'Viviendas con Agua' => 89.11,
                    'Viviendas con Drenaje' => 92.63,
                    'Viviendas con Televisión' => 94.87,
                    'Viviendas con Automóvil' => 43.58,
                    'Viviendas con Computadora' => 17.01,
                    'Viviendas con Celular' => 66.05,
                    'Viviendas con Internet' => 7.40
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 26,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 11.54,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 7.69,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 7.69,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 7.69
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
        return array(
            'Límites'         => \Configuracion\IBCTorreonConfig::LIMITES,
            'Centro latitud'  => 25.0,
            'Centro longitud' => -103.5);
    } // mapas

} // Clase Mayran

?>
