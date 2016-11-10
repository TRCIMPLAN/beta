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
 * Clase QuintasLaPerla
 */
class QuintasLaPerla extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Quintas La Perla';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:29';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'quintas-la-perla';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Quintas La Perla de Torreón.';
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
                    'Población total' => 212,
                    'Porcentaje de población masculina' => 48.08,
                    'Porcentaje de población femenina' => 51.92,
                    'Porcentaje de población de 0 a 14 años' => 35.44,
                    'Porcentaje de población de 15 a 64 años' => 63.56,
                    'Porcentaje de población de 65 y más años' => 0.51,
                    'Porcentaje de población no especificada' => 0.49,
                    'Fecundidad promedio' => 1.22,
                    'Porcentaje de población nacida en otro estado' => 8.63,
                    'Porcentaje de población con discapacidad' => 1.45,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 62.03,
                    'Porcentaje de población de 18 y más postbásicos' => 50.50
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.03,
                    'Grado Promedio de Escolaridad masculina' => 13.67,
                    'Grado Promedio de Escolaridad femenina' => 14.34
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 74.02,
                    'Población Económicamente Activa masculina' => 56.95,
                    'Población Económicamente Activa femenina' => 43.05,
                    'Población Ocupada' => 99.91,
                    'Población Ocupada masculina' => 56.92,
                    'Población Ocupada femenina' => 43.08,
                    'Población Desocupada' => 0.09,
                    'Derechohabiencia' => 89.66
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 70,
                    'Hogares Jefatura masculina' => 79.91,
                    'Hogares Jefatura femenina' => 20.09,
                    'Ocupación por Vivienda' => 3.03,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 93.33,
                    'Viviendas con Automóvil' => 84.00,
                    'Viviendas con Computadora' => 53.57,
                    'Viviendas con Celular' => 85.92,
                    'Viviendas con Internet' => 35.35
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 2,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 100.00
                )
            )
        );
    } // datos

} // Clase QuintasLaPerla

?>
