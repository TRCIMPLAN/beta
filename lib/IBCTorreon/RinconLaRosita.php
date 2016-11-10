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
 * Clase RinconLaRosita
 */
class RinconLaRosita extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Rincon La Rosita';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'rincon-la-rosita';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Rincon La Rosita de Torreón.';
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
                    'Población total' => 445,
                    'Porcentaje de población masculina' => 46.97,
                    'Porcentaje de población femenina' => 53.03,
                    'Porcentaje de población de 0 a 14 años' => 19.16,
                    'Porcentaje de población de 15 a 64 años' => 75.74,
                    'Porcentaje de población de 65 y más años' => 5.10,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.51,
                    'Porcentaje de población nacida en otro estado' => 21.57,
                    'Porcentaje de población con discapacidad' => 2.78,
                    'Porcentaje de población de 15 y más analfabeta' => 0.02,
                    'Porcentaje de población de 18 y más' => 72.36,
                    'Porcentaje de población de 18 y más postbásicos' => 68.09
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.66,
                    'Grado Promedio de Escolaridad masculina' => 15.06,
                    'Grado Promedio de Escolaridad femenina' => 14.32
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 48.31,
                    'Población Económicamente Activa masculina' => 54.84,
                    'Población Económicamente Activa femenina' => 45.16,
                    'Población Ocupada' => 99.46,
                    'Población Ocupada masculina' => 54.59,
                    'Población Ocupada femenina' => 45.41,
                    'Población Desocupada' => 0.54,
                    'Derechohabiencia' => 90.56
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 129,
                    'Hogares Jefatura masculina' => 68.22,
                    'Hogares Jefatura femenina' => 31.78,
                    'Ocupación por Vivienda' => 3.45,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 97.67,
                    'Viviendas con Computadora' => 85.27,
                    'Viviendas con Celular' => 97.67,
                    'Viviendas con Internet' => 82.17
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 20,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 25.00,
                    'Segunda actividad nombre' => 'Salud',
                    'Segunda actividad porcentaje' => 15.00,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 15.00,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 10.00,
                    'Quinta actividad nombre' => 'Financieros y Seguros',
                    'Quinta actividad porcentaje' => 10.00
                )
            )
        );
    } // datos

} // Clase RinconLaRosita

?>
