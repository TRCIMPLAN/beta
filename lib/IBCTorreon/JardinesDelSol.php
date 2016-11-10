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
 * Clase JardinesDelSol
 */
class JardinesDelSol extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Jardines Del Sol';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:29';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'jardines-del-sol';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Jardines Del Sol de Torreón.';
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
                    'Población total' => 988,
                    'Porcentaje de población masculina' => 49.79,
                    'Porcentaje de población femenina' => 50.21,
                    'Porcentaje de población de 0 a 14 años' => 36.24,
                    'Porcentaje de población de 15 a 64 años' => 62.25,
                    'Porcentaje de población de 65 y más años' => 0.85,
                    'Porcentaje de población no especificada' => 0.66,
                    'Fecundidad promedio' => 1.80,
                    'Porcentaje de población nacida en otro estado' => 18.40,
                    'Porcentaje de población con discapacidad' => 1.37,
                    'Porcentaje de población de 15 y más analfabeta' => 0.45,
                    'Porcentaje de población de 18 y más' => 58.03,
                    'Porcentaje de población de 18 y más postbásicos' => 21.61
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.46,
                    'Grado Promedio de Escolaridad masculina' => 9.51,
                    'Grado Promedio de Escolaridad femenina' => 9.41
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 63.28,
                    'Población Económicamente Activa masculina' => 67.43,
                    'Población Económicamente Activa femenina' => 32.57,
                    'Población Ocupada' => 93.24,
                    'Población Ocupada masculina' => 66.79,
                    'Población Ocupada femenina' => 33.21,
                    'Población Desocupada' => 6.76,
                    'Derechohabiencia' => 81.14
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 277,
                    'Hogares Jefatura masculina' => 83.03,
                    'Hogares Jefatura femenina' => 16.97,
                    'Ocupación por Vivienda' => 3.57,
                    'Viviendas con Electricidad' => 99.97,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.86,
                    'Viviendas con Automóvil' => 48.52,
                    'Viviendas con Computadora' => 25.90,
                    'Viviendas con Celular' => 87.62,
                    'Viviendas con Internet' => 3.94
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 29,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 68.97,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 13.79,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 6.90,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 6.90,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
                    'Quinta actividad porcentaje' => 3.45
                )
            )
        );
    } // datos

} // Clase JardinesDelSol

?>
