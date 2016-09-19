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
 * Clase Polvorera
 */
class Polvorera extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Polvorera';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'polvorera';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Polvorera de Torreón.';
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
                    'Población total' => 1210,
                    'Porcentaje de población masculina' => 48.92,
                    'Porcentaje de población femenina' => 51.08,
                    'Porcentaje de población de 0 a 14 años' => 27.23,
                    'Porcentaje de población de 15 a 64 años' => 65.01,
                    'Porcentaje de población de 65 y más años' => 7.76,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.23,
                    'Porcentaje de población nacida en otro estado' => 2.63,
                    'Porcentaje de población con discapacidad' => 3.78
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.85,
                    'Grado Promedio de Escolaridad masculina' => 8.02,
                    'Grado Promedio de Escolaridad femenina' => 7.69
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.55,
                    'Población Económicamente Activa masculina' => 71.20,
                    'Población Económicamente Activa femenina' => 28.80,
                    'Población Ocupada' => 97.44,
                    'Población Ocupada masculina' => 70.88,
                    'Población Ocupada femenina' => 29.12,
                    'Población Desocupada' => 2.56,
                    'Derechohabiencia' => 71.42
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 324,
                    'Hogares Jefatura masculina' => 75.27,
                    'Hogares Jefatura femenina' => 24.73,
                    'Ocupación por Vivienda' => 3.73,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.98,
                    'Viviendas con Drenaje' => 99.91,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 34.04,
                    'Viviendas con Computadora' => 18.93,
                    'Viviendas con Celular' => 62.97,
                    'Viviendas con Internet' => 8.97
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 17,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 76.47,
                    'Segunda actividad nombre' => 'Industria Manufacturera',
                    'Segunda actividad porcentaje' => 5.88,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 5.88,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 5.88,
                    'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Quinta actividad porcentaje' => 5.88
                )
            )
        );
    } // datos

} // Clase Polvorera

?>
