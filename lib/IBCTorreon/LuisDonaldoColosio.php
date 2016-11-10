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
 * Clase LuisDonaldoColosio
 */
class LuisDonaldoColosio extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Luis Donaldo Colosio';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:29';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'luis-donaldo-colosio';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Luis Donaldo Colosio de Torreón.';
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
                    'Población total' => 1761,
                    'Porcentaje de población masculina' => 50.38,
                    'Porcentaje de población femenina' => 49.62,
                    'Porcentaje de población de 0 a 14 años' => 39.00,
                    'Porcentaje de población de 15 a 64 años' => 58.38,
                    'Porcentaje de población de 65 y más años' => 2.43,
                    'Porcentaje de población no especificada' => 0.19,
                    'Fecundidad promedio' => 2.54,
                    'Porcentaje de población nacida en otro estado' => 18.74,
                    'Porcentaje de población con discapacidad' => 3.91,
                    'Porcentaje de población de 15 y más analfabeta' => 2.28,
                    'Porcentaje de población de 18 y más' => 56.03,
                    'Porcentaje de población de 18 y más postbásicos' => 7.27
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.15,
                    'Grado Promedio de Escolaridad masculina' => 7.10,
                    'Grado Promedio de Escolaridad femenina' => 7.20
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.88,
                    'Población Económicamente Activa masculina' => 79.39,
                    'Población Económicamente Activa femenina' => 20.61,
                    'Población Ocupada' => 84.95,
                    'Población Ocupada masculina' => 79.29,
                    'Población Ocupada femenina' => 20.71,
                    'Población Desocupada' => 15.05,
                    'Derechohabiencia' => 62.70
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 481,
                    'Hogares Jefatura masculina' => 73.66,
                    'Hogares Jefatura femenina' => 26.34,
                    'Ocupación por Vivienda' => 3.66,
                    'Viviendas con Electricidad' => 97.82,
                    'Viviendas con Agua' => 77.65,
                    'Viviendas con Drenaje' => 81.60,
                    'Viviendas con Televisión' => 94.28,
                    'Viviendas con Automóvil' => 33.99,
                    'Viviendas con Computadora' => 20.06,
                    'Viviendas con Celular' => 56.39,
                    'Viviendas con Internet' => 3.23
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 49,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 53.06,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 16.33,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 8.16,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 6.12,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 4.08
                )
            )
        );
    } // datos

} // Clase LuisDonaldoColosio

?>
