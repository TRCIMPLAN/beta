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
 * Clase VillasLaRosita
 */
class VillasLaRosita extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villas La Rosita';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'villas-la-rosita';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas La Rosita de Torreón.';
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
                    'Población total' => 480,
                    'Porcentaje de población masculina' => 46.67,
                    'Porcentaje de población femenina' => 53.33,
                    'Porcentaje de población de 0 a 14 años' => 12.50,
                    'Porcentaje de población de 15 a 64 años' => 71.25,
                    'Porcentaje de población de 65 y más años' => 8.75,
                    'Porcentaje de población no especificada' => 7.50,
                    'Fecundidad promedio' => 1.51,
                    'Porcentaje de población nacida en otro estado' => 21.46,
                    'Porcentaje de población con discapacidad' => 3.39,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 74.79,
                    'Porcentaje de población de 18 y más postbásicos' => 68.33
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.71,
                    'Grado Promedio de Escolaridad masculina' => 15.47,
                    'Grado Promedio de Escolaridad femenina' => 14.07
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.09,
                    'Población Económicamente Activa masculina' => 61.01,
                    'Población Económicamente Activa femenina' => 38.99,
                    'Población Ocupada' => 92.65,
                    'Población Ocupada masculina' => 61.08,
                    'Población Ocupada femenina' => 38.92,
                    'Población Desocupada' => 7.35,
                    'Derechohabiencia' => 73.75
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 128,
                    'Hogares Jefatura masculina' => 82.03,
                    'Hogares Jefatura femenina' => 17.97,
                    'Ocupación por Vivienda' => 3.75,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 97.66,
                    'Viviendas con Automóvil' => 96.09,
                    'Viviendas con Computadora' => 88.28,
                    'Viviendas con Celular' => 96.09,
                    'Viviendas con Internet' => 86.72
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 20,
                    'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Primer actividad porcentaje' => 15.00,
                    'Segunda actividad nombre' => 'Financieros y Seguros',
                    'Segunda actividad porcentaje' => 15.00,
                    'Tercera actividad nombre' => 'Comercio Menudeo',
                    'Tercera actividad porcentaje' => 10.00,
                    'Cuarta actividad nombre' => 'Información Medios Masivos',
                    'Cuarta actividad porcentaje' => 10.00,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 10.00
                )
            )
        );
    } // datos

} // Clase VillasLaRosita

?>
