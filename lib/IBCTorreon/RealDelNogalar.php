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
 * Clase RealDelNogalar
 */
class RealDelNogalar extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Real Del Nogalar';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'real-del-nogalar';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Real Del Nogalar de Torreón.';
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
                'Población total' => '1',
                'Porcentaje de población masculina' => '51.68',
                'Porcentaje de población femenina' => '48.32',
                'Porcentaje de población de 0 a 14 años' => '32.22',
                'Porcentaje de población de 15 a 64 años' => '58.70',
                'Porcentaje de población de 65 y más años' => '1.95',
                'Porcentaje de población no especificada' => '7.13',
                'Fecundidad promedio' => '1.66',
                'Porcentaje de población nacida en otro estado' => '22.27',
                'Porcentaje de población con discapacidad' => '1.73'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '13.68',
                'Grado Promedio de Escolaridad masculina' => '13.88',
                'Grado Promedio de Escolaridad femenina' => '13.47'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '60.10',
                'Población Económicamente Activa masculina' => '63.38',
                'Población Económicamente Activa femenina' => '36.62',
                'Población Ocupada' => '95.74',
                'Población Ocupada masculina' => '62.97',
                'Población Ocupada femenina' => '37.03',
                'Población Desocupada' => '4.26',
                'Derechohabiencia' => '73.41'
            ),
            'Viviendas' => array(
                'Hogares' => '0'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '0'
            )
        );
    } // datos

} // Clase RealDelNogalar

?>
