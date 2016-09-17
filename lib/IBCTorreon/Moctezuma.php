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
 * Clase Moctezuma
 */
class Moctezuma extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Moctezuma';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'moctezuma';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Moctezuma de Torreón.';
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
                'Población total' => 3619,
                'Porcentaje de población masculina' => 48.00,
                'Porcentaje de población femenina' => 52.00,
                'Porcentaje de población de 0 a 14 años' => 24.10,
                'Porcentaje de población de 15 a 64 años' => 64.94,
                'Porcentaje de población de 65 y más años' => 9.98,
                'Porcentaje de población no especificada' => 0.98,
                'Fecundidad promedio' => 2.44,
                'Porcentaje de población nacida en otro estado' => 17.83,
                'Porcentaje de población con discapacidad' => 11.17
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 8.89,
                'Grado Promedio de Escolaridad masculina' => 8.97,
                'Grado Promedio de Escolaridad femenina' => 8.82
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 51.71,
                'Población Económicamente Activa masculina' => 63.52,
                'Población Económicamente Activa femenina' => 36.48,
                'Población Ocupada' => 90.63,
                'Población Ocupada masculina' => 62.71,
                'Población Ocupada femenina' => 37.29,
                'Población Desocupada' => 9.37,
                'Derechohabiencia' => 67.12
            ),
            'Viviendas' => array(
                'Hogares' => 951,
                'Hogares Jefatura masculina' => 71.08,
                'Hogares Jefatura femenina' => 28.92,
                'Ocupación por Vivienda' => 3.81,
                'Viviendas con Electricidad' => 99.89,
                'Viviendas con Agua' => 99.79,
                'Viviendas con Drenaje' => 99.58,
                'Viviendas con Televisión' => 98.95,
                'Viviendas con Automóvil' => 47.32,
                'Viviendas con Computadora' => 28.25,
                'Viviendas con Celular' => 65.62,
                'Viviendas con Internet' => 18.28
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 157,
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => 34.39,
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => 19.75,
                'Tercera actividad nombre' => 'Industria Manufacturera',
                'Tercera actividad porcentaje' => 15.29,
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => 10.83,
                'Quinta actividad nombre' => 'Comercio Mayoreo',
                'Quinta actividad porcentaje' => 6.37
            )
        );
    } // datos

} // Clase Moctezuma

?>
