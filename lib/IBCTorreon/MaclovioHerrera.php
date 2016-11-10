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
 * Clase MaclovioHerrera
 */
class MaclovioHerrera extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Maclovio Herrera';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:29';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'maclovio-herrera';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Maclovio Herrera de Torreón.';
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
                    'Población total' => 665,
                    'Porcentaje de población masculina' => 50.83,
                    'Porcentaje de población femenina' => 49.17,
                    'Porcentaje de población de 0 a 14 años' => 29.01,
                    'Porcentaje de población de 15 a 64 años' => 63.08,
                    'Porcentaje de población de 65 y más años' => 7.90,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 2.61,
                    'Porcentaje de población nacida en otro estado' => 19.13,
                    'Porcentaje de población con discapacidad' => 11.87,
                    'Porcentaje de población de 15 y más analfabeta' => 4.59,
                    'Porcentaje de población de 18 y más' => 65.56,
                    'Porcentaje de población de 18 y más postbásicos' => 15.94
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.58,
                    'Grado Promedio de Escolaridad masculina' => 8.08,
                    'Grado Promedio de Escolaridad femenina' => 7.09
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.32,
                    'Población Económicamente Activa masculina' => 64.84,
                    'Población Económicamente Activa femenina' => 35.16,
                    'Población Ocupada' => 93.39,
                    'Población Ocupada masculina' => 63.27,
                    'Población Ocupada femenina' => 36.73,
                    'Población Desocupada' => 6.61,
                    'Derechohabiencia' => 56.71
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 168,
                    'Hogares Jefatura masculina' => 66.66,
                    'Hogares Jefatura femenina' => 33.34,
                    'Ocupación por Vivienda' => 3.96,
                    'Viviendas con Electricidad' => 98.21,
                    'Viviendas con Agua' => 91.07,
                    'Viviendas con Drenaje' => 98.21,
                    'Viviendas con Televisión' => 93.97,
                    'Viviendas con Automóvil' => 21.29,
                    'Viviendas con Computadora' => 15.79,
                    'Viviendas con Celular' => 48.21,
                    'Viviendas con Internet' => 9.13
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 17,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 52.94,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 23.53,
                    'Tercera actividad nombre' => 'Gubernamentales',
                    'Tercera actividad porcentaje' => 5.88,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 5.88,
                    'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Quinta actividad porcentaje' => 5.88
                )
            )
        );
    } // datos

} // Clase MaclovioHerrera

?>
