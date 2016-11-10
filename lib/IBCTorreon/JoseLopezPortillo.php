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
 * Clase JoseLopezPortillo
 */
class JoseLopezPortillo extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Jose Lopez Portillo';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:29';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'jose-lopez-portillo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Jose Lopez Portillo de Torreón.';
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
                    'Población total' => 354,
                    'Porcentaje de población masculina' => 45.48,
                    'Porcentaje de población femenina' => 54.52,
                    'Porcentaje de población de 0 a 14 años' => 26.55,
                    'Porcentaje de población de 15 a 64 años' => 60.17,
                    'Porcentaje de población de 65 y más años' => 10.73,
                    'Porcentaje de población no especificada' => 2.55,
                    'Fecundidad promedio' => 2.47,
                    'Porcentaje de población nacida en otro estado' => 16.10,
                    'Porcentaje de población con discapacidad' => 4.57,
                    'Porcentaje de población de 15 y más analfabeta' => 3.45,
                    'Porcentaje de población de 18 y más' => 66.67,
                    'Porcentaje de población de 18 y más postbásicos' => 16.04
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.82,
                    'Grado Promedio de Escolaridad masculina' => 7.91,
                    'Grado Promedio de Escolaridad femenina' => 7.73
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 48.35,
                    'Población Económicamente Activa masculina' => 71.21,
                    'Población Económicamente Activa femenina' => 28.79,
                    'Población Ocupada' => 97.68,
                    'Población Ocupada masculina' => 71.32,
                    'Población Ocupada femenina' => 28.68,
                    'Población Desocupada' => 2.32,
                    'Derechohabiencia' => 52.26
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 84,
                    'Hogares Jefatura masculina' => 72.80,
                    'Hogares Jefatura femenina' => 27.20,
                    'Ocupación por Vivienda' => 4.21,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.81,
                    'Viviendas con Drenaje' => 98.81,
                    'Viviendas con Televisión' => 98.81,
                    'Viviendas con Automóvil' => 14.08,
                    'Viviendas con Computadora' => 18.51,
                    'Viviendas con Celular' => 53.21,
                    'Viviendas con Internet' => 13.83
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 17,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 41.18,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 29.41,
                    'Tercera actividad nombre' => 'Gubernamentales',
                    'Tercera actividad porcentaje' => 11.76,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 11.76,
                    'Quinta actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Quinta actividad porcentaje' => 5.88
                )
            )
        );
    } // datos

} // Clase JoseLopezPortillo

?>
