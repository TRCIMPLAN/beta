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
 * Clase Mayran
 */
class Mayran extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Mayran';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'mayran';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Mayran de Torreón.';
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
                'Población total' => 1398,
                'Porcentaje de población masculina' => 50.29,
                'Porcentaje de población femenina' => 49.71,
                'Porcentaje de población de 0 a 14 años' => 32.45,
                'Porcentaje de población de 15 a 64 años' => 64.09,
                'Porcentaje de población de 65 y más años' => 2.81,
                'Porcentaje de población no especificada' => 0.65,
                'Fecundidad promedio' => 2.15,
                'Porcentaje de población nacida en otro estado' => 21.28,
                'Porcentaje de población con discapacidad' => 5.11
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 8.95,
                'Grado Promedio de Escolaridad masculina' => 8.97,
                'Grado Promedio de Escolaridad femenina' => 8.92
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 56.12,
                'Población Económicamente Activa masculina' => 69.11,
                'Población Económicamente Activa femenina' => 30.89,
                'Población Ocupada' => 93.07,
                'Población Ocupada masculina' => 68.05,
                'Población Ocupada femenina' => 31.95,
                'Población Desocupada' => 6.93,
                'Derechohabiencia' => 68.78
            ),
            'Viviendas' => array(
                'Hogares' => 350,
                'Hogares Jefatura masculina' => 86.78,
                'Hogares Jefatura femenina' => 13.22,
                'Ocupación por Vivienda' => 3.99,
                'Viviendas con Electricidad' => 97.69,
                'Viviendas con Agua' => 89.94,
                'Viviendas con Drenaje' => 93.10,
                'Viviendas con Televisión' => 95.11,
                'Viviendas con Automóvil' => 49.10,
                'Viviendas con Computadora' => 24.98,
                'Viviendas con Celular' => 68.97,
                'Viviendas con Internet' => 15.78
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 29,
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => 44.83,
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => 10.34,
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => 10.34,
                'Cuarta actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                'Cuarta actividad porcentaje' => 6.90,
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => 6.90
            )
        );
    } // datos

} // Clase Mayran

?>
