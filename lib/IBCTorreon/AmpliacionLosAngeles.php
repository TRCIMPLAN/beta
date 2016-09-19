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
 * Clase AmpliacionLosAngeles
 */
class AmpliacionLosAngeles extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ampliacion Los Angeles';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ampliacion-los-angeles';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ampliacion Los Angeles de Torreón.';
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
                    'Población total' => 4908,
                    'Porcentaje de población masculina' => 46.18,
                    'Porcentaje de población femenina' => 53.82,
                    'Porcentaje de población de 0 a 14 años' => 12.97,
                    'Porcentaje de población de 15 a 64 años' => 59.15,
                    'Porcentaje de población de 65 y más años' => 18.29,
                    'Porcentaje de población no especificada' => 9.59,
                    'Fecundidad promedio' => 2.04,
                    'Porcentaje de población nacida en otro estado' => 19.60,
                    'Porcentaje de población con discapacidad' => 7.90
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 13.23,
                    'Grado Promedio de Escolaridad masculina' => 13.94,
                    'Grado Promedio de Escolaridad femenina' => 12.65
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 47.94,
                    'Población Económicamente Activa masculina' => 57.97,
                    'Población Económicamente Activa femenina' => 42.03,
                    'Población Ocupada' => 95.25,
                    'Población Ocupada masculina' => 58.03,
                    'Población Ocupada femenina' => 41.97,
                    'Población Desocupada' => 4.75,
                    'Derechohabiencia' => 69.67
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1352,
                    'Hogares Jefatura masculina' => 66.69,
                    'Hogares Jefatura femenina' => 33.31,
                    'Ocupación por Vivienda' => 3.63,
                    'Viviendas con Electricidad' => 99.87,
                    'Viviendas con Agua' => 99.35,
                    'Viviendas con Drenaje' => 99.87,
                    'Viviendas con Televisión' => 99.35,
                    'Viviendas con Automóvil' => 85.85,
                    'Viviendas con Computadora' => 69.97,
                    'Viviendas con Celular' => 85.18,
                    'Viviendas con Internet' => 62.56
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 301,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 20.27,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 15.95,
                    'Tercera actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Tercera actividad porcentaje' => 8.97,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 7.64,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 6.98
                )
            )
        );
    } // datos

} // Clase AmpliacionLosAngeles

?>
