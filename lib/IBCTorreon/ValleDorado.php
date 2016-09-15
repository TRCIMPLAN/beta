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
 * Clase ValleDorado
 */
class ValleDorado extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Valle Dorado';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'valle-dorado';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Valle Dorado de Torreón.';
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
                'Población total' => '3390',
                'Porcentaje de población masculina' => '48.55',
                'Porcentaje de población femenina' => '51.45',
                'Porcentaje de población de 0 a 14 años' => '21.47',
                'Porcentaje de población de 15 a 64 años' => '69.97',
                'Porcentaje de población de 65 y más años' => '6.70',
                'Porcentaje de población no especificada' => '1.86',
                'Fecundidad promedio' => '2.02',
                'Porcentaje de población nacida en otro estado' => '18.32',
                'Porcentaje de población con discapacidad' => '2.90'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.57',
                'Grado Promedio de Escolaridad masculina' => '13.06',
                'Grado Promedio de Escolaridad femenina' => '12.15'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '57.58',
                'Población Económicamente Activa masculina' => '56.68',
                'Población Económicamente Activa femenina' => '43.32',
                'Población Ocupada' => '91.64',
                'Población Ocupada masculina' => '55.59',
                'Población Ocupada femenina' => '44.41',
                'Población Desocupada' => '8.36',
                'Derechohabiencia' => '75.63'
            ),
            'Viviendas' => array(
                'Hogares' => '954',
                'Hogares Jefatura masculina' => '69.92',
                'Hogares Jefatura femenina' => '30.08',
                'Ocupación por Vivienda' => '3.55',
                'Viviendas con Electricidad' => '99.79',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.37',
                'Viviendas con Automóvil' => '76.52',
                'Viviendas con Computadora' => '61.43',
                'Viviendas con Celular' => '84.07',
                'Viviendas con Internet' => '48.53'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '67',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '34.33',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '20.90',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '17.91',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '5.97',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '4.48'
            )
        );
    } // datos

} // Clase ValleDorado

?>
