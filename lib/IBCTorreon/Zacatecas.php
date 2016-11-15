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
 * Clase Zacatecas
 */
class Zacatecas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Zacatecas';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'zacatecas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Zacatecas de Torreón.';
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
                    'Población total' => 311,
                    'Porcentaje de población masculina' => 47.59,
                    'Porcentaje de población femenina' => 52.41,
                    'Porcentaje de población de 0 a 14 años' => 22.90,
                    'Porcentaje de población de 15 a 64 años' => 67.78,
                    'Porcentaje de población de 65 y más años' => 8.29,
                    'Porcentaje de población no especificada' => 1.03,
                    'Fecundidad promedio' => 2.62,
                    'Porcentaje de población nacida en otro estado' => 15.77,
                    'Porcentaje de población con discapacidad' => 3.68,
                    'Porcentaje de población de 15 y más analfabeta' => 2.26,
                    'Porcentaje de población de 18 y más' => 68.49,
                    'Porcentaje de población de 18 y más postbásicos' => 17.97
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.12,
                    'Grado Promedio de Escolaridad masculina' => 8.44,
                    'Grado Promedio de Escolaridad femenina' => 7.85
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 45.95,
                    'Población Económicamente Activa masculina' => 73.09,
                    'Población Económicamente Activa femenina' => 26.91,
                    'Población Ocupada' => 90.90,
                    'Población Ocupada masculina' => 73.31,
                    'Población Ocupada femenina' => 26.69,
                    'Población Desocupada' => 9.10,
                    'Derechohabiencia' => 71.70
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 85,
                    'Hogares Jefatura masculina' => 73.92,
                    'Hogares Jefatura femenina' => 26.08,
                    'Ocupación por Vivienda' => 3.66,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 98.82,
                    'Viviendas con Televisión' => 98.82,
                    'Viviendas con Automóvil' => 19.82,
                    'Viviendas con Computadora' => 11.06,
                    'Viviendas con Celular' => 52.16,
                    'Viviendas con Internet' => 1.41
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 6,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 66.67,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 16.67
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

} // Clase Zacatecas

?>
