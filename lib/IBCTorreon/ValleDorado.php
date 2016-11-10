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
 * Clase ValleDorado
 */
class ValleDorado extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Valle Dorado';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'valle-dorado';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Valle Dorado de Torreón.';
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
                    'Población total' => 3485,
                    'Porcentaje de población masculina' => 48.44,
                    'Porcentaje de población femenina' => 51.56,
                    'Porcentaje de población de 0 a 14 años' => 21.61,
                    'Porcentaje de población de 15 a 64 años' => 69.93,
                    'Porcentaje de población de 65 y más años' => 6.66,
                    'Porcentaje de población no especificada' => 1.80,
                    'Fecundidad promedio' => 2.03,
                    'Porcentaje de población nacida en otro estado' => 18.25,
                    'Porcentaje de población con discapacidad' => 2.91,
                    'Porcentaje de población de 15 y más analfabeta' => 0.24,
                    'Porcentaje de población de 18 y más' => 71.85,
                    'Porcentaje de población de 18 y más postbásicos' => 53.74
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.54,
                    'Grado Promedio de Escolaridad masculina' => 13.01,
                    'Grado Promedio de Escolaridad femenina' => 12.11
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.78,
                    'Población Económicamente Activa masculina' => 56.64,
                    'Población Económicamente Activa femenina' => 43.36,
                    'Población Ocupada' => 91.19,
                    'Población Ocupada masculina' => 55.62,
                    'Población Ocupada femenina' => 44.38,
                    'Población Desocupada' => 8.81,
                    'Derechohabiencia' => 75.38
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 981,
                    'Hogares Jefatura masculina' => 69.83,
                    'Hogares Jefatura femenina' => 30.17,
                    'Ocupación por Vivienda' => 3.55,
                    'Viviendas con Electricidad' => 99.80,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.39,
                    'Viviendas con Automóvil' => 75.54,
                    'Viviendas con Computadora' => 60.65,
                    'Viviendas con Celular' => 84.10,
                    'Viviendas con Internet' => 47.81
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 69,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 34.78,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 21.74,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 17.39,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 5.80,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 4.35
                )
            )
        );
    } // datos

} // Clase ValleDorado

?>
