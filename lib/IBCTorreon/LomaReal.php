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
 * Clase LomaReal
 */
class LomaReal extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Loma Real';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'loma-real';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Loma Real de Torreón.';
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
                    'Población total' => 2079,
                    'Porcentaje de población masculina' => 49.45,
                    'Porcentaje de población femenina' => 50.55,
                    'Porcentaje de población de 0 a 14 años' => 36.59,
                    'Porcentaje de población de 15 a 64 años' => 60.08,
                    'Porcentaje de población de 65 y más años' => 1.59,
                    'Porcentaje de población no especificada' => 1.74,
                    'Fecundidad promedio' => 1.90,
                    'Porcentaje de población nacida en otro estado' => 15.58,
                    'Porcentaje de población con discapacidad' => 1.48
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.72,
                    'Grado Promedio de Escolaridad masculina' => 9.67,
                    'Grado Promedio de Escolaridad femenina' => 9.75
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.65,
                    'Población Económicamente Activa masculina' => 66.02,
                    'Población Económicamente Activa femenina' => 33.98,
                    'Población Ocupada' => 87.29,
                    'Población Ocupada masculina' => 66.33,
                    'Población Ocupada femenina' => 33.67,
                    'Población Desocupada' => 12.71,
                    'Derechohabiencia' => 71.79
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 549,
                    'Hogares Jefatura masculina' => 82.12,
                    'Hogares Jefatura femenina' => 17.88,
                    'Ocupación por Vivienda' => 3.79,
                    'Viviendas con Electricidad' => 99.92,
                    'Viviendas con Agua' => 99.92,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.20,
                    'Viviendas con Automóvil' => 44.35,
                    'Viviendas con Computadora' => 31.41,
                    'Viviendas con Celular' => 85.31,
                    'Viviendas con Internet' => 18.26
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 79,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 48.10,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 20.25,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.92,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 5.06,
                    'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Quinta actividad porcentaje' => 3.80
                )
            )
        );
    } // datos

} // Clase LomaReal

?>
