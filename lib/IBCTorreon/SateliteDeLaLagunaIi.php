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
 * Clase SateliteDeLaLagunaIi
 */
class SateliteDeLaLagunaIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Satelite De La Laguna Ii';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'satelite-de-la-laguna-ii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Satelite De La Laguna Ii de Torreón.';
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
                'Población total' => '563',
                'Porcentaje de población masculina' => '47.60',
                'Porcentaje de población femenina' => '52.40',
                'Porcentaje de población de 0 a 14 años' => '29.66',
                'Porcentaje de población de 15 a 64 años' => '66.96',
                'Porcentaje de población de 65 y más años' => '3.20',
                'Porcentaje de población no especificada' => '0.18',
                'Fecundidad promedio' => '1.74',
                'Porcentaje de población nacida en otro estado' => '16.16',
                'Porcentaje de población con discapacidad' => '2.27'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.48',
                'Grado Promedio de Escolaridad masculina' => '11.33',
                'Grado Promedio de Escolaridad femenina' => '11.60'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '56.45',
                'Población Económicamente Activa masculina' => '60.82',
                'Población Económicamente Activa femenina' => '39.18',
                'Población Ocupada' => '90.22',
                'Población Ocupada masculina' => '62.78',
                'Población Ocupada femenina' => '37.22',
                'Población Desocupada' => '9.78',
                'Derechohabiencia' => '89.70'
            ),
            'Viviendas' => array(
                'Hogares' => '152',
                'Hogares Jefatura masculina' => '77.63',
                'Hogares Jefatura femenina' => '22.37',
                'Ocupación por Vivienda' => '3.70',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.34',
                'Viviendas con Automóvil' => '59.21',
                'Viviendas con Computadora' => '51.32',
                'Viviendas con Celular' => '90.79',
                'Viviendas con Internet' => '35.53'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '19',
                'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Primer actividad porcentaje' => '31.58',
                'Segunda actividad nombre' => 'Industria Manufacturera',
                'Segunda actividad porcentaje' => '15.79',
                'Tercera actividad nombre' => 'Educativos',
                'Tercera actividad porcentaje' => '15.79',
                'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Cuarta actividad porcentaje' => '15.79',
                'Quinta actividad nombre' => 'Comercio Menudeo',
                'Quinta actividad porcentaje' => '10.53'
            )
        );
    } // datos

} // Clase SateliteDeLaLagunaIi

?>
