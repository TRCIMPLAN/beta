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
 * Clase Bugambilias
 */
class Bugambilias extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Bugambilias';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'bugambilias';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Bugambilias de Torreón.';
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
                'Población total' => '450',
                'Porcentaje de población masculina' => '49.78',
                'Porcentaje de población femenina' => '50.22',
                'Porcentaje de población de 0 a 14 años' => '20.00',
                'Porcentaje de población de 15 a 64 años' => '68.89',
                'Porcentaje de población de 65 y más años' => '11.11',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '2.46',
                'Porcentaje de población nacida en otro estado' => '19.78',
                'Porcentaje de población con discapacidad' => '5.55'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '10.31',
                'Grado Promedio de Escolaridad masculina' => '10.77',
                'Grado Promedio de Escolaridad femenina' => '9.87'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '54.42',
                'Población Económicamente Activa masculina' => '60.59',
                'Población Económicamente Activa femenina' => '39.41',
                'Población Ocupada' => '85.58',
                'Población Ocupada masculina' => '57.06',
                'Población Ocupada femenina' => '42.94',
                'Población Desocupada' => '14.42',
                'Derechohabiencia' => '68.67'
            ),
            'Viviendas' => array(
                'Hogares' => '126',
                'Hogares Jefatura masculina' => '65.87',
                'Hogares Jefatura femenina' => '34.13',
                'Ocupación por Vivienda' => '3.57',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.21',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.21',
                'Viviendas con Automóvil' => '55.56',
                'Viviendas con Computadora' => '50.00',
                'Viviendas con Celular' => '73.81',
                'Viviendas con Internet' => '36.51'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '23',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '21.74',
                'Segunda actividad nombre' => 'Industria Manufacturera',
                'Segunda actividad porcentaje' => '17.39',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '17.39',
                'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Cuarta actividad porcentaje' => '8.70',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '8.70'
            )
        );
    } // datos

} // Clase Bugambilias

?>
