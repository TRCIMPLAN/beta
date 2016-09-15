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
 * Clase PlanDeAyala
 */
class PlanDeAyala extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Plan De Ayala';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'plan-de-ayala';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Plan De Ayala de Torreón.';
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
                'Población total' => '982',
                'Porcentaje de población masculina' => '50.41',
                'Porcentaje de población femenina' => '49.59',
                'Porcentaje de población de 0 a 14 años' => '29.94',
                'Porcentaje de población de 15 a 64 años' => '61.61',
                'Porcentaje de población de 65 y más años' => '7.13',
                'Porcentaje de población no especificada' => '1.32',
                'Fecundidad promedio' => '2.83',
                'Porcentaje de población nacida en otro estado' => '16.55',
                'Porcentaje de población con discapacidad' => '9.53'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '6.58',
                'Grado Promedio de Escolaridad masculina' => '6.69',
                'Grado Promedio de Escolaridad femenina' => '6.47'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.14',
                'Población Económicamente Activa masculina' => '73.24',
                'Población Económicamente Activa femenina' => '26.76',
                'Población Ocupada' => '97.22',
                'Población Ocupada masculina' => '73.61',
                'Población Ocupada femenina' => '26.39',
                'Población Desocupada' => '2.78',
                'Derechohabiencia' => '52.34'
            ),
            'Viviendas' => array(
                'Hogares' => '235',
                'Hogares Jefatura masculina' => '68.09',
                'Hogares Jefatura femenina' => '31.91',
                'Ocupación por Vivienda' => '4.18',
                'Viviendas con Electricidad' => '97.87',
                'Viviendas con Agua' => '95.74',
                'Viviendas con Drenaje' => '91.91',
                'Viviendas con Televisión' => '93.62',
                'Viviendas con Automóvil' => '22.34',
                'Viviendas con Computadora' => '10.57',
                'Viviendas con Celular' => '52.77',
                'Viviendas con Internet' => '7.53'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '23',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '39.13',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '34.78',
                'Tercera actividad nombre' => 'Industria Manufacturera',
                'Tercera actividad porcentaje' => '8.70',
                'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Cuarta actividad porcentaje' => '8.70',
                'Quinta actividad nombre' => 'Gubernamentales',
                'Quinta actividad porcentaje' => '4.35'
            )
        );
    } // datos

} // Clase PlanDeAyala

?>
