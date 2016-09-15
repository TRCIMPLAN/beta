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
 * Clase ResidencialRinconDelDesierto
 */
class ResidencialRinconDelDesierto extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Rincon Del Desierto';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-rincon-del-desierto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Rincon Del Desierto de Torreón.';
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
                'Población total' => '140',
                'Porcentaje de población masculina' => '49.29',
                'Porcentaje de población femenina' => '50.71',
                'Porcentaje de población de 0 a 14 años' => '24.29',
                'Porcentaje de población de 15 a 64 años' => '72.86',
                'Porcentaje de población de 65 y más años' => '2.86',
                'Porcentaje de población no especificada' => '-0.01',
                'Fecundidad promedio' => '1.50',
                'Porcentaje de población nacida en otro estado' => '25.58',
                'Porcentaje de población con discapacidad' => '3.42'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '13.19',
                'Grado Promedio de Escolaridad masculina' => '13.62',
                'Grado Promedio de Escolaridad femenina' => '12.77'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.86',
                'Población Económicamente Activa masculina' => '62.71',
                'Población Económicamente Activa femenina' => '37.29',
                'Población Ocupada' => '98.28',
                'Población Ocupada masculina' => '63.79',
                'Población Ocupada femenina' => '36.21',
                'Población Desocupada' => '1.72',
                'Derechohabiencia' => '90.71'
            ),
            'Viviendas' => array(
                'Hogares' => '39',
                'Hogares Jefatura masculina' => '79.49',
                'Hogares Jefatura femenina' => '20.51',
                'Ocupación por Vivienda' => '3.59',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '97.44',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '87.18',
                'Viviendas con Computadora' => '89.74',
                'Viviendas con Celular' => '92.31',
                'Viviendas con Internet' => '84.62'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '0'
            )
        );
    } // datos

} // Clase ResidencialRinconDelDesierto

?>
