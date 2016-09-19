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
 * Clase NuevaAurora
 */
class NuevaAurora extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Nueva Aurora';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'nueva-aurora';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Nueva Aurora de Torreón.';
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
                    'Población total' => 3251,
                    'Porcentaje de población masculina' => 50.23,
                    'Porcentaje de población femenina' => 49.77,
                    'Porcentaje de población de 0 a 14 años' => 22.60,
                    'Porcentaje de población de 15 a 64 años' => 66.29,
                    'Porcentaje de población de 65 y más años' => 11.11,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.63,
                    'Porcentaje de población nacida en otro estado' => 14.26,
                    'Porcentaje de población con discapacidad' => 7.49
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.36,
                    'Grado Promedio de Escolaridad masculina' => 8.55,
                    'Grado Promedio de Escolaridad femenina' => 8.17
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.06,
                    'Población Económicamente Activa masculina' => 66.85,
                    'Población Económicamente Activa femenina' => 33.15,
                    'Población Ocupada' => 84.02,
                    'Población Ocupada masculina' => 65.09,
                    'Población Ocupada femenina' => 34.91,
                    'Población Desocupada' => 15.98,
                    'Derechohabiencia' => 61.45
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 889,
                    'Hogares Jefatura masculina' => 62.08,
                    'Hogares Jefatura femenina' => 37.92,
                    'Ocupación por Vivienda' => 3.66,
                    'Viviendas con Electricidad' => 99.58,
                    'Viviendas con Agua' => 99.35,
                    'Viviendas con Drenaje' => 99.01,
                    'Viviendas con Televisión' => 97.21,
                    'Viviendas con Automóvil' => 30.95,
                    'Viviendas con Computadora' => 22.96,
                    'Viviendas con Celular' => 56.57,
                    'Viviendas con Internet' => 16.32
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 125,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 39.20,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 26.40,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 9.60,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 8.00,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 4.00
                )
            )
        );
    } // datos

} // Clase NuevaAurora

?>
