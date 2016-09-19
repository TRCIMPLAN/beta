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
 * Clase PrimeroDeCobianCentro
 */
class PrimeroDeCobianCentro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Primero De Cobian (Centro)';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'primero-de-cobian-centro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Primero De Cobian (Centro) de Torreón.';
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
                    'Población total' => 2513,
                    'Porcentaje de población masculina' => 46.58,
                    'Porcentaje de población femenina' => 53.42,
                    'Porcentaje de población de 0 a 14 años' => 15.46,
                    'Porcentaje de población de 15 a 64 años' => 64.89,
                    'Porcentaje de población de 65 y más años' => 17.94,
                    'Porcentaje de población no especificada' => 1.71,
                    'Fecundidad promedio' => 1.82,
                    'Porcentaje de población nacida en otro estado' => 19.30,
                    'Porcentaje de población con discapacidad' => 6.75
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.29,
                    'Grado Promedio de Escolaridad masculina' => 11.77,
                    'Grado Promedio de Escolaridad femenina' => 10.88
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.77,
                    'Población Económicamente Activa masculina' => 58.68,
                    'Población Económicamente Activa femenina' => 41.32,
                    'Población Ocupada' => 92.46,
                    'Población Ocupada masculina' => 58.47,
                    'Población Ocupada femenina' => 41.53,
                    'Población Desocupada' => 7.54,
                    'Derechohabiencia' => 66.47
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 833,
                    'Hogares Jefatura masculina' => 60.19,
                    'Hogares Jefatura femenina' => 39.81,
                    'Ocupación por Vivienda' => 3.02,
                    'Viviendas con Electricidad' => 99.61,
                    'Viviendas con Agua' => 99.49,
                    'Viviendas con Drenaje' => 99.00,
                    'Viviendas con Televisión' => 98.52,
                    'Viviendas con Automóvil' => 49.64,
                    'Viviendas con Computadora' => 45.22,
                    'Viviendas con Celular' => 74.04,
                    'Viviendas con Internet' => 35.59
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 990,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 22.63,
                    'Segunda actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Segunda actividad porcentaje' => 13.74,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.74,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 12.22,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 9.90
                )
            )
        );
    } // datos

} // Clase PrimeroDeCobianCentro

?>
