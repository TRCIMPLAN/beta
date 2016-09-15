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
 * Clase LaLibertad
 */
class LaLibertad extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'La Libertad';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'la-libertad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Libertad de Torreón.';
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
                'Población total' => '427',
                'Porcentaje de población masculina' => '50.58',
                'Porcentaje de población femenina' => '49.42',
                'Porcentaje de población de 0 a 14 años' => '30.08',
                'Porcentaje de población de 15 a 64 años' => '62.18',
                'Porcentaje de población de 65 y más años' => '7.74',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '2.63',
                'Porcentaje de población nacida en otro estado' => '15.00',
                'Porcentaje de población con discapacidad' => '14.80'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.08',
                'Grado Promedio de Escolaridad masculina' => '6.89',
                'Grado Promedio de Escolaridad femenina' => '7.30'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '53.77',
                'Población Económicamente Activa masculina' => '72.44',
                'Población Económicamente Activa femenina' => '27.56',
                'Población Ocupada' => '84.78',
                'Población Ocupada masculina' => '72.69',
                'Población Ocupada femenina' => '27.31',
                'Población Desocupada' => '15.22',
                'Derechohabiencia' => '47.58'
            ),
            'Viviendas' => array(
                'Hogares' => '105',
                'Hogares Jefatura masculina' => '77.17',
                'Hogares Jefatura femenina' => '22.83',
                'Ocupación por Vivienda' => '4.07',
                'Viviendas con Electricidad' => '98.58',
                'Viviendas con Agua' => '91.91',
                'Viviendas con Drenaje' => '90.96',
                'Viviendas con Televisión' => '97.62',
                'Viviendas con Automóvil' => '16.95',
                'Viviendas con Computadora' => '12.19',
                'Viviendas con Celular' => '58.16',
                'Viviendas con Internet' => '6.66'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '1',
                'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Primer actividad porcentaje' => '100.00'
            )
        );
    } // datos

} // Clase LaLibertad

?>
