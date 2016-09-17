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
 * Clase LaCortina
 */
class LaCortina extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'La Cortina';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'la-cortina';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Cortina de Torreón.';
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
                'Población total' => 1371,
                'Porcentaje de población masculina' => 47.99,
                'Porcentaje de población femenina' => 52.01,
                'Porcentaje de población de 0 a 14 años' => 35.59,
                'Porcentaje de población de 15 a 64 años' => 60.98,
                'Porcentaje de población de 65 y más años' => 2.12,
                'Porcentaje de población no especificada' => 1.31,
                'Fecundidad promedio' => 1.83,
                'Porcentaje de población nacida en otro estado' => 13.24,
                'Porcentaje de población con discapacidad' => 0.99
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 10.40,
                'Grado Promedio de Escolaridad masculina' => 10.70,
                'Grado Promedio de Escolaridad femenina' => 10.14
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 54.74,
                'Población Económicamente Activa masculina' => 63.01,
                'Población Económicamente Activa femenina' => 36.99,
                'Población Ocupada' => 91.25,
                'Población Ocupada masculina' => 63.02,
                'Población Ocupada femenina' => 36.98,
                'Población Desocupada' => 8.75,
                'Derechohabiencia' => 72.43
            ),
            'Viviendas' => array(
                'Hogares' => 339,
                'Hogares Jefatura masculina' => 81.42,
                'Hogares Jefatura femenina' => 18.58,
                'Ocupación por Vivienda' => 4.04,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 100.00,
                'Viviendas con Drenaje' => 99.41,
                'Viviendas con Televisión' => 100.00,
                'Viviendas con Automóvil' => 55.43,
                'Viviendas con Computadora' => 39.56,
                'Viviendas con Celular' => 87.32,
                'Viviendas con Internet' => 24.65
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 20,
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => 60.00,
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => 20.00,
                'Tercera actividad nombre' => 'Educativos',
                'Tercera actividad porcentaje' => 15.00,
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => 5.00
            )
        );
    } // datos

} // Clase LaCortina

?>
