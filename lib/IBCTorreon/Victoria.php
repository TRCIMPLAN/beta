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
 * Clase Victoria
 */
class Victoria extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Victoria';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'victoria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Victoria de Torreón.';
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
                'Población total' => '2163',
                'Porcentaje de población masculina' => '50.37',
                'Porcentaje de población femenina' => '49.63',
                'Porcentaje de población de 0 a 14 años' => '29.69',
                'Porcentaje de población de 15 a 64 años' => '61.62',
                'Porcentaje de población de 65 y más años' => '8.69',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '2.66',
                'Porcentaje de población nacida en otro estado' => '12.97',
                'Porcentaje de población con discapacidad' => '9.82'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.06',
                'Grado Promedio de Escolaridad masculina' => '8.16',
                'Grado Promedio de Escolaridad femenina' => '7.98'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '53.44',
                'Población Económicamente Activa masculina' => '68.14',
                'Población Económicamente Activa femenina' => '31.86',
                'Población Ocupada' => '93.16',
                'Población Ocupada masculina' => '67.42',
                'Población Ocupada femenina' => '32.58',
                'Población Desocupada' => '6.84',
                'Derechohabiencia' => '66.87'
            ),
            'Viviendas' => array(
                'Hogares' => '540',
                'Hogares Jefatura masculina' => '68.13',
                'Hogares Jefatura femenina' => '31.87',
                'Ocupación por Vivienda' => '4.01',
                'Viviendas con Electricidad' => '98.45',
                'Viviendas con Agua' => '97.51',
                'Viviendas con Drenaje' => '97.89',
                'Viviendas con Televisión' => '96.40',
                'Viviendas con Automóvil' => '31.12',
                'Viviendas con Computadora' => '18.78',
                'Viviendas con Celular' => '65.71',
                'Viviendas con Internet' => '9.10'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '29',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '72.41',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '10.34',
                'Tercera actividad nombre' => 'Industria Manufacturera',
                'Tercera actividad porcentaje' => '6.90',
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => '6.90',
                'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Quinta actividad porcentaje' => '3.45'
            )
        );
    } // datos

} // Clase Victoria

?>
