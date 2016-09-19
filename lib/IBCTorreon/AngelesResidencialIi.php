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
 * Clase AngelesResidencialIi
 */
class AngelesResidencialIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Angeles Residencial Ii';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'angeles-residencial-ii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Angeles Residencial Ii de Torreón.';
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
                    'Población total' => 110,
                    'Porcentaje de población masculina' => 50.00,
                    'Porcentaje de población femenina' => 50.00,
                    'Porcentaje de población de 0 a 14 años' => 20.91,
                    'Porcentaje de población de 15 a 64 años' => 76.36,
                    'Porcentaje de población de 65 y más años' => 2.73,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.37,
                    'Porcentaje de población nacida en otro estado' => 20.91,
                    'Porcentaje de población con discapacidad' => 3.43
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.78,
                    'Grado Promedio de Escolaridad masculina' => 15.36,
                    'Grado Promedio de Escolaridad femenina' => 14.24
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 48.45,
                    'Población Económicamente Activa masculina' => 57.45,
                    'Población Económicamente Activa femenina' => 42.55,
                    'Población Ocupada' => 97.83,
                    'Población Ocupada masculina' => 58.70,
                    'Población Ocupada femenina' => 41.30,
                    'Población Desocupada' => 2.17,
                    'Derechohabiencia' => 89.09
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 30,
                    'Hogares Jefatura masculina' => 83.33,
                    'Hogares Jefatura femenina' => 16.67,
                    'Ocupación por Vivienda' => 3.67,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 93.33,
                    'Viviendas con Computadora' => 93.33,
                    'Viviendas con Celular' => 100.00,
                    'Viviendas con Internet' => 76.67
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 1,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 100.00
                )
            )
        );
    } // datos

} // Clase AngelesResidencialIi

?>
