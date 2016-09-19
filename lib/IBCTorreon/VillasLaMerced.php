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
 * Clase VillasLaMerced
 */
class VillasLaMerced extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villas La Merced';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'villas-la-merced';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas La Merced de Torreón.';
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
                    'Población total' => 15270,
                    'Porcentaje de población masculina' => 48.79,
                    'Porcentaje de población femenina' => 51.21,
                    'Porcentaje de población de 0 a 14 años' => 30.29,
                    'Porcentaje de población de 15 a 64 años' => 64.47,
                    'Porcentaje de población de 65 y más años' => 3.68,
                    'Porcentaje de población no especificada' => 1.56,
                    'Fecundidad promedio' => 1.94,
                    'Porcentaje de población nacida en otro estado' => 14.97,
                    'Porcentaje de población con discapacidad' => 2.98
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.74,
                    'Grado Promedio de Escolaridad masculina' => 10.88,
                    'Grado Promedio de Escolaridad femenina' => 10.60
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.45,
                    'Población Económicamente Activa masculina' => 61.52,
                    'Población Económicamente Activa femenina' => 38.48,
                    'Población Ocupada' => 91.76,
                    'Población Ocupada masculina' => 61.05,
                    'Población Ocupada femenina' => 38.95,
                    'Población Desocupada' => 8.24,
                    'Derechohabiencia' => 74.77
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 3874,
                    'Hogares Jefatura masculina' => 76.91,
                    'Hogares Jefatura femenina' => 23.09,
                    'Ocupación por Vivienda' => 3.94,
                    'Viviendas con Electricidad' => 99.90,
                    'Viviendas con Agua' => 99.51,
                    'Viviendas con Drenaje' => 99.33,
                    'Viviendas con Televisión' => 98.94,
                    'Viviendas con Automóvil' => 65.23,
                    'Viviendas con Computadora' => 48.37,
                    'Viviendas con Celular' => 82.34,
                    'Viviendas con Internet' => 35.71
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 428,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.19,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 17.06,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 14.49,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 6.07,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
                    'Quinta actividad porcentaje' => 3.04
                )
            )
        );
    } // datos

} // Clase VillasLaMerced

?>
