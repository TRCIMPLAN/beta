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
 * Clase CarmenRomano
 */
class CarmenRomano extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Carmen Romano';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:32:58';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'carmen-romano';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Carmen Romano de Torreón.';
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
                'Población total' => 3405,
                'Porcentaje de población masculina' => 49.60,
                'Porcentaje de población femenina' => 50.40,
                'Porcentaje de población de 0 a 14 años' => 28.19,
                'Porcentaje de población de 15 a 64 años' => 66.46,
                'Porcentaje de población de 65 y más años' => 4.96,
                'Porcentaje de población no especificada' => 0.39,
                'Fecundidad promedio' => 2.47,
                'Porcentaje de población nacida en otro estado' => 22.35,
                'Porcentaje de población con discapacidad' => 6.59
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 8.29,
                'Grado Promedio de Escolaridad masculina' => 8.30,
                'Grado Promedio de Escolaridad femenina' => 8.28
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 57.93,
                'Población Económicamente Activa masculina' => 66.38,
                'Población Económicamente Activa femenina' => 33.62,
                'Población Ocupada' => 90.72,
                'Población Ocupada masculina' => 65.40,
                'Población Ocupada femenina' => 34.60,
                'Población Desocupada' => 9.28,
                'Derechohabiencia' => 63.73
            ),
            'Viviendas' => array(
                'Hogares' => 876,
                'Hogares Jefatura masculina' => 74.54,
                'Hogares Jefatura femenina' => 25.46,
                'Ocupación por Vivienda' => 3.89,
                'Viviendas con Electricidad' => 99.54,
                'Viviendas con Agua' => 99.20,
                'Viviendas con Drenaje' => 98.86,
                'Viviendas con Televisión' => 97.49,
                'Viviendas con Automóvil' => 37.67,
                'Viviendas con Computadora' => 24.72,
                'Viviendas con Celular' => 66.21,
                'Viviendas con Internet' => 18.07
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 99,
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => 47.47,
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => 19.19,
                'Tercera actividad nombre' => 'Industria Manufacturera',
                'Tercera actividad porcentaje' => 14.14,
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => 7.07,
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => 5.05
            )
        );
    } // datos

} // Clase CarmenRomano

?>
