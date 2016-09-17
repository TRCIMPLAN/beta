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
 * Clase LosPortales
 */
class LosPortales extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Los Portales';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'los-portales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Los Portales de Torreón.';
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
                'Población total' => 49,
                'Porcentaje de población masculina' => 48.98,
                'Porcentaje de población femenina' => 51.02,
                'Porcentaje de población de 0 a 14 años' => 22.45,
                'Porcentaje de población de 15 a 64 años' => 73.47,
                'Porcentaje de población de 65 y más años' => 4.08,
                'Porcentaje de población no especificada' => 0.00,
                'Fecundidad promedio' => 1.45,
                'Porcentaje de población nacida en otro estado' => 53.06,
                'Porcentaje de población con discapacidad' => 0.00
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 15.87,
                'Grado Promedio de Escolaridad masculina' => 16.72,
                'Grado Promedio de Escolaridad femenina' => 15.10
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 65.00,
                'Población Económicamente Activa masculina' => 53.85,
                'Población Económicamente Activa femenina' => 46.15,
                'Población Ocupada' => 100.00,
                'Población Ocupada masculina' => 53.85,
                'Población Ocupada femenina' => 46.15,
                'Población Desocupada' => 0.00,
                'Derechohabiencia' => 100.00
            ),
            'Viviendas' => array(
                'Hogares' => 16,
                'Hogares Jefatura masculina' => 75.00,
                'Hogares Jefatura femenina' => 25.00,
                'Ocupación por Vivienda' => 3.06,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 100.00,
                'Viviendas con Drenaje' => 100.00,
                'Viviendas con Televisión' => 93.75,
                'Viviendas con Automóvil' => 100.00,
                'Viviendas con Computadora' => 100.00,
                'Viviendas con Celular' => 93.75,
                'Viviendas con Internet' => 93.75
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 2,
                'Primer actividad nombre' => 'Comercio Mayoreo',
                'Primer actividad porcentaje' => 50.00,
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => 50.00
            )
        );
    } // datos

} // Clase LosPortales

?>
