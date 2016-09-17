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
 * Clase Cipreses
 */
class Cipreses extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Cipreses';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:32:58';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'cipreses';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Cipreses de Torreón.';
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
                'Población total' => 61,
                'Porcentaje de población masculina' => 57.38,
                'Porcentaje de población femenina' => 42.62,
                'Porcentaje de población de 0 a 14 años' => 32.79,
                'Porcentaje de población de 15 a 64 años' => 57.38,
                'Porcentaje de población de 65 y más años' => 0.00,
                'Porcentaje de población no especificada' => 9.83,
                'Fecundidad promedio' => 1.81,
                'Porcentaje de población nacida en otro estado' => 19.67,
                'Porcentaje de población con discapacidad' => 0.00
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 15.23,
                'Grado Promedio de Escolaridad masculina' => 15.63,
                'Grado Promedio de Escolaridad femenina' => 14.75
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 71.43,
                'Población Económicamente Activa masculina' => 64.00,
                'Población Económicamente Activa femenina' => 36.00,
                'Población Ocupada' => 100.00,
                'Población Ocupada masculina' => 64.00,
                'Población Ocupada femenina' => 36.00,
                'Población Desocupada' => 0.00,
                'Derechohabiencia' => 77.05
            ),
            'Viviendas' => array(
                'Hogares' => 16,
                'Hogares Jefatura masculina' => 87.50,
                'Hogares Jefatura femenina' => 12.50,
                'Ocupación por Vivienda' => 3.81,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 100.00,
                'Viviendas con Drenaje' => 100.00,
                'Viviendas con Televisión' => 100.00,
                'Viviendas con Automóvil' => 100.00,
                'Viviendas con Computadora' => 100.00,
                'Viviendas con Celular' => 100.00,
                'Viviendas con Internet' => 100.00
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 0
            )
        );
    } // datos

} // Clase Cipreses

?>
