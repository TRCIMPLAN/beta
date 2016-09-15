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
 * Clase TorreonResidencial
 */
class TorreonResidencial extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Torreon Residencial';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'torreon-residencial';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Torreon Residencial de Torreón.';
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
                'Población total' => '5599',
                'Porcentaje de población masculina' => '47.48',
                'Porcentaje de población femenina' => '52.52',
                'Porcentaje de población de 0 a 14 años' => '16.81',
                'Porcentaje de población de 15 a 64 años' => '75.01',
                'Porcentaje de población de 65 y más años' => '7.09',
                'Porcentaje de población no especificada' => '1.09',
                'Fecundidad promedio' => '1.70',
                'Porcentaje de población nacida en otro estado' => '24.18',
                'Porcentaje de población con discapacidad' => '2.10'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '13.54',
                'Grado Promedio de Escolaridad masculina' => '14.04',
                'Grado Promedio de Escolaridad femenina' => '13.09'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '54.93',
                'Población Económicamente Activa masculina' => '56.36',
                'Población Económicamente Activa femenina' => '43.64',
                'Población Ocupada' => '93.60',
                'Población Ocupada masculina' => '56.12',
                'Población Ocupada femenina' => '43.88',
                'Población Desocupada' => '6.40',
                'Derechohabiencia' => '76.37'
            ),
            'Viviendas' => array(
                'Hogares' => '1607',
                'Hogares Jefatura masculina' => '70.75',
                'Hogares Jefatura femenina' => '29.25',
                'Ocupación por Vivienda' => '3.48',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '99.96',
                'Viviendas con Televisión' => '99.27',
                'Viviendas con Automóvil' => '87.32',
                'Viviendas con Computadora' => '77.88',
                'Viviendas con Celular' => '88.86',
                'Viviendas con Internet' => '71.09'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '172',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '23.84',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '17.44',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '16.86',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '9.88',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '9.30'
            )
        );
    } // datos

} // Clase TorreonResidencial

?>
