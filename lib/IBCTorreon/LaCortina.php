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
 * Clase LaCortina
 */
class LaCortina extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'La Cortina';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:09';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'la-cortina';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Cortina de Torreón.';
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
                    'Población total' => 1787,
                    'Porcentaje de población masculina' => 48.13,
                    'Porcentaje de población femenina' => 51.87,
                    'Porcentaje de población de 0 a 14 años' => 34.64,
                    'Porcentaje de población de 15 a 64 años' => 61.67,
                    'Porcentaje de población de 65 y más años' => 2.01,
                    'Porcentaje de población no especificada' => 1.68,
                    'Fecundidad promedio' => 1.83,
                    'Porcentaje de población nacida en otro estado' => 14.13,
                    'Porcentaje de población con discapacidad' => 0.92,
                    'Porcentaje de población de 15 y más analfabeta' => 0.24,
                    'Porcentaje de población de 18 y más' => 55.96,
                    'Porcentaje de población de 18 y más postbásicos' => 27.31
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.30,
                    'Grado Promedio de Escolaridad masculina' => 10.60,
                    'Grado Promedio de Escolaridad femenina' => 10.03
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.55,
                    'Población Económicamente Activa masculina' => 62.93,
                    'Población Económicamente Activa femenina' => 37.07,
                    'Población Ocupada' => 92.55,
                    'Población Ocupada masculina' => 63.27,
                    'Población Ocupada femenina' => 36.73,
                    'Población Desocupada' => 7.45,
                    'Derechohabiencia' => 73.42
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 452,
                    'Hogares Jefatura masculina' => 79.20,
                    'Hogares Jefatura femenina' => 20.80,
                    'Ocupación por Vivienda' => 3.95,
                    'Viviendas con Electricidad' => 99.78,
                    'Viviendas con Agua' => 99.78,
                    'Viviendas con Drenaje' => 99.34,
                    'Viviendas con Televisión' => 99.34,
                    'Viviendas con Automóvil' => 53.96,
                    'Viviendas con Computadora' => 36.97,
                    'Viviendas con Celular' => 88.05,
                    'Viviendas con Internet' => 22.47
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 25,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 52.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 28.00,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 12.00,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 8.00
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

} // Clase LaCortina

?>
