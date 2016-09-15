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
 * Clase ConjuntoOyamel
 */
class ConjuntoOyamel extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Conjunto Oyamel';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'conjunto-oyamel';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Conjunto Oyamel de Torreón.';
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
                'Población total' => '28',
                'Porcentaje de población masculina' => '46.43',
                'Porcentaje de población femenina' => '53.57',
                'Porcentaje de población de 0 a 14 años' => '32.14',
                'Porcentaje de población de 15 a 64 años' => '64.29',
                'Porcentaje de población de 65 y más años' => '3.57',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '3.82',
                'Porcentaje de población nacida en otro estado' => '14.29',
                'Porcentaje de población con discapacidad' => '6.23'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.58',
                'Grado Promedio de Escolaridad masculina' => '8.25',
                'Grado Promedio de Escolaridad femenina' => '7.09'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '47.62',
                'Población Económicamente Activa masculina' => '80.00',
                'Población Económicamente Activa femenina' => '20.00',
                'Población Ocupada' => '100.00',
                'Población Ocupada masculina' => '80.00',
                'Población Ocupada femenina' => '20.00',
                'Población Desocupada' => '0.00',
                'Derechohabiencia' => '60.71'
            ),
            'Viviendas' => array(
                'Hogares' => '8',
                'Hogares Jefatura masculina' => '87.50',
                'Hogares Jefatura femenina' => '12.50',
                'Ocupación por Vivienda' => '3.50',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '75.00',
                'Viviendas con Computadora' => '21.25',
                'Viviendas con Celular' => '75.00',
                'Viviendas con Internet' => '13.24'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '3',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '100.00'
            )
        );
    } // datos

} // Clase ConjuntoOyamel

?>
