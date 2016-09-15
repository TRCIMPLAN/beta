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
 * Clase GustavoDiazOrdaz
 */
class GustavoDiazOrdaz extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Gustavo Diaz Ordaz';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'gustavo-diaz-ordaz';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Gustavo Diaz Ordaz de Torreón.';
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
                'Población total' => '1407',
                'Porcentaje de población masculina' => '48.88',
                'Porcentaje de población femenina' => '51.12',
                'Porcentaje de población de 0 a 14 años' => '20.96',
                'Porcentaje de población de 15 a 64 años' => '68.28',
                'Porcentaje de población de 65 y más años' => '10.10',
                'Porcentaje de población no especificada' => '0.66',
                'Fecundidad promedio' => '2.55',
                'Porcentaje de población nacida en otro estado' => '14.99',
                'Porcentaje de población con discapacidad' => '6.97'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.52',
                'Grado Promedio de Escolaridad masculina' => '9.72',
                'Grado Promedio de Escolaridad femenina' => '9.32'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.36',
                'Población Económicamente Activa masculina' => '65.92',
                'Población Económicamente Activa femenina' => '34.08',
                'Población Ocupada' => '88.82',
                'Población Ocupada masculina' => '64.94',
                'Población Ocupada femenina' => '35.06',
                'Población Desocupada' => '11.18',
                'Derechohabiencia' => '69.26'
            ),
            'Viviendas' => array(
                'Hogares' => '371',
                'Hogares Jefatura masculina' => '68.63',
                'Hogares Jefatura femenina' => '31.37',
                'Ocupación por Vivienda' => '3.79',
                'Viviendas con Electricidad' => '99.86',
                'Viviendas con Agua' => '99.58',
                'Viviendas con Drenaje' => '99.03',
                'Viviendas con Televisión' => '98.76',
                'Viviendas con Automóvil' => '57.91',
                'Viviendas con Computadora' => '40.29',
                'Viviendas con Celular' => '68.88',
                'Viviendas con Internet' => '30.40'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '122',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '40.16',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '25.41',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '11.48',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '6.56',
                'Quinta actividad nombre' => 'Comercio Mayoreo',
                'Quinta actividad porcentaje' => '4.92'
            )
        );
    } // datos

} // Clase GustavoDiazOrdaz

?>
