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
 * Clase QuintasLagunaIi
 */
class QuintasLagunaIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Quintas Laguna Ii';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:01';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'quintas-laguna-ii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Quintas Laguna Ii de Torreón.';
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
                'Población total' => 656,
                'Porcentaje de población masculina' => 50.00,
                'Porcentaje de población femenina' => 50.00,
                'Porcentaje de población de 0 a 14 años' => 36.74,
                'Porcentaje de población de 15 a 64 años' => 59.45,
                'Porcentaje de población de 65 y más años' => 0.61,
                'Porcentaje de población no especificada' => 3.20,
                'Fecundidad promedio' => 1.77,
                'Porcentaje de población nacida en otro estado' => 13.57,
                'Porcentaje de población con discapacidad' => 1.39
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 11.12,
                'Grado Promedio de Escolaridad masculina' => 11.24,
                'Grado Promedio de Escolaridad femenina' => 11.01
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 59.30,
                'Población Económicamente Activa masculina' => 64.31,
                'Población Económicamente Activa femenina' => 35.69,
                'Población Ocupada' => 94.21,
                'Población Ocupada masculina' => 63.49,
                'Población Ocupada femenina' => 36.51,
                'Población Desocupada' => 5.79,
                'Derechohabiencia' => 83.54
            ),
            'Viviendas' => array(
                'Hogares' => 171,
                'Hogares Jefatura masculina' => 89.47,
                'Hogares Jefatura femenina' => 10.53,
                'Ocupación por Vivienda' => 3.84,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 100.00,
                'Viviendas con Drenaje' => 100.00,
                'Viviendas con Televisión' => 99.42,
                'Viviendas con Automóvil' => 61.40,
                'Viviendas con Computadora' => 35.09,
                'Viviendas con Celular' => 88.30,
                'Viviendas con Internet' => 29.36
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 19,
                'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Primer actividad porcentaje' => 31.58,
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => 31.58,
                'Tercera actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                'Tercera actividad porcentaje' => 10.53,
                'Cuarta actividad nombre' => 'Inmobiliarios',
                'Cuarta actividad porcentaje' => 10.53,
                'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Quinta actividad porcentaje' => 10.53
            )
        );
    } // datos

} // Clase QuintasLagunaIi

?>
