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
 * Clase LaFuente
 */
class LaFuente extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'La Fuente';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'la-fuente';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Fuente de Torreón.';
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
                'Población total' => 6179,
                'Porcentaje de población masculina' => 48.05,
                'Porcentaje de población femenina' => 51.95,
                'Porcentaje de población de 0 a 14 años' => 17.76,
                'Porcentaje de población de 15 a 64 años' => 74.33,
                'Porcentaje de población de 65 y más años' => 6.18,
                'Porcentaje de población no especificada' => 1.73,
                'Fecundidad promedio' => 1.87,
                'Porcentaje de población nacida en otro estado' => 16.43,
                'Porcentaje de población con discapacidad' => 3.37
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 12.66,
                'Grado Promedio de Escolaridad masculina' => 13.03,
                'Grado Promedio de Escolaridad femenina' => 12.32
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 54.07,
                'Población Económicamente Activa masculina' => 60.04,
                'Población Económicamente Activa femenina' => 39.96,
                'Población Ocupada' => 94.34,
                'Población Ocupada masculina' => 59.22,
                'Población Ocupada femenina' => 40.78,
                'Población Desocupada' => 5.66,
                'Derechohabiencia' => 76.15
            ),
            'Viviendas' => array(
                'Hogares' => 1654,
                'Hogares Jefatura masculina' => 72.96,
                'Hogares Jefatura femenina' => 27.04,
                'Ocupación por Vivienda' => 3.74,
                'Viviendas con Electricidad' => 99.91,
                'Viviendas con Agua' => 99.55,
                'Viviendas con Drenaje' => 99.85,
                'Viviendas con Televisión' => 99.37,
                'Viviendas con Automóvil' => 79.93,
                'Viviendas con Computadora' => 69.85,
                'Viviendas con Celular' => 87.06,
                'Viviendas con Internet' => 57.06
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 167,
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => 42.51,
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => 16.77,
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => 15.57,
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => 3.59,
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => 3.59
            )
        );
    } // datos

} // Clase LaFuente

?>
