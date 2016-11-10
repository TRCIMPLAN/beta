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
 * Clase SinNombre
 */
class SinNombre extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Sin Nombre';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'sin-nombre';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Sin Nombre de Torreón.';
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
                    'Población total' => 52,
                    'Porcentaje de población masculina' => 44.96,
                    'Porcentaje de población femenina' => 55.04,
                    'Porcentaje de población de 0 a 14 años' => 31.35,
                    'Porcentaje de población de 15 a 64 años' => 60.49,
                    'Porcentaje de población de 65 y más años' => 8.06,
                    'Porcentaje de población no especificada' => 0.10,
                    'Fecundidad promedio' => 2.13,
                    'Porcentaje de población nacida en otro estado' => 17.85,
                    'Porcentaje de población con discapacidad' => 1.07,
                    'Porcentaje de población de 15 y más analfabeta' => 0.19,
                    'Porcentaje de población de 18 y más' => 63.58,
                    'Porcentaje de población de 18 y más postbásicos' => 29.50
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.01,
                    'Grado Promedio de Escolaridad masculina' => 9.39,
                    'Grado Promedio de Escolaridad femenina' => 10.61
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.07,
                    'Población Económicamente Activa masculina' => 54.07,
                    'Población Económicamente Activa femenina' => 45.93,
                    'Población Ocupada' => 78.80,
                    'Población Ocupada masculina' => 49.33,
                    'Población Ocupada femenina' => 50.67,
                    'Población Desocupada' => 21.20,
                    'Derechohabiencia' => 70.68
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 14,
                    'Hogares Jefatura masculina' => 70.03,
                    'Hogares Jefatura femenina' => 29.97,
                    'Ocupación por Vivienda' => 3.71,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 50.85,
                    'Viviendas con Computadora' => 40.90,
                    'Viviendas con Celular' => 76.70,
                    'Viviendas con Internet' => 20.95
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 190,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 57.37,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 14.21,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 5.26,
                    'Cuarta actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Cuarta actividad porcentaje' => 4.74,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 3.68
                )
            )
        );
    } // datos

} // Clase SinNombre

?>
