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
 * Clase Latinoamericano
 */
class Latinoamericano extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Latinoamericano';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'latinoamericano';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Latinoamericano de Torreón.';
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
                '2010' => array(
                    'Población total' => 5980,
                    'Porcentaje de población masculina' => 50.82,
                    'Porcentaje de población femenina' => 49.18,
                    'Porcentaje de población de 0 a 14 años' => 27.59,
                    'Porcentaje de población de 15 a 64 años' => 69.25,
                    'Porcentaje de población de 65 y más años' => 2.74,
                    'Porcentaje de población no especificada' => 0.42,
                    'Fecundidad promedio' => 1.98,
                    'Porcentaje de población nacida en otro estado' => 17.34,
                    'Porcentaje de población con discapacidad' => 7.79
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.17,
                    'Grado Promedio de Escolaridad masculina' => 10.14,
                    'Grado Promedio de Escolaridad femenina' => 10.19
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.28,
                    'Población Económicamente Activa masculina' => 64.62,
                    'Población Económicamente Activa femenina' => 35.38,
                    'Población Ocupada' => 91.47,
                    'Población Ocupada masculina' => 63.07,
                    'Población Ocupada femenina' => 36.93,
                    'Población Desocupada' => 8.53,
                    'Derechohabiencia' => 71.39
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1534,
                    'Hogares Jefatura masculina' => 75.72,
                    'Hogares Jefatura femenina' => 24.28,
                    'Ocupación por Vivienda' => 3.90,
                    'Viviendas con Electricidad' => 99.85,
                    'Viviendas con Agua' => 99.53,
                    'Viviendas con Drenaje' => 99.22,
                    'Viviendas con Televisión' => 98.98,
                    'Viviendas con Automóvil' => 58.09,
                    'Viviendas con Computadora' => 40.00,
                    'Viviendas con Celular' => 80.83,
                    'Viviendas con Internet' => 28.47
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 122,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 45.90,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.49,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 14.75,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 4.92,
                    'Quinta actividad nombre' => 'Gubernamentales',
                    'Quinta actividad porcentaje' => 4.10
                )
            )
        );
    } // datos

} // Clase Latinoamericano

?>
