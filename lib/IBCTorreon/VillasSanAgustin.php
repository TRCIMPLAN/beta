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
 * Clase VillasSanAgustin
 */
class VillasSanAgustin extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villas San Agustin';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'villas-san-agustin';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas San Agustin de Torreón.';
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
                    'Población total' => 773,
                    'Porcentaje de población masculina' => 49.35,
                    'Porcentaje de población femenina' => 50.65,
                    'Porcentaje de población de 0 a 14 años' => 36.95,
                    'Porcentaje de población de 15 a 64 años' => 62.57,
                    'Porcentaje de población de 65 y más años' => 0.44,
                    'Porcentaje de población no especificada' => 0.04,
                    'Fecundidad promedio' => 1.70,
                    'Porcentaje de población nacida en otro estado' => 18.27,
                    'Porcentaje de población con discapacidad' => 0.77,
                    'Porcentaje de población de 15 y más analfabeta' => 0.06,
                    'Porcentaje de población de 18 y más' => 60.34,
                    'Porcentaje de población de 18 y más postbásicos' => 23.75
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.75,
                    'Grado Promedio de Escolaridad masculina' => 9.88,
                    'Grado Promedio de Escolaridad femenina' => 9.63
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 66.06,
                    'Población Económicamente Activa masculina' => 65.94,
                    'Población Económicamente Activa femenina' => 34.06,
                    'Población Ocupada' => 96.03,
                    'Población Ocupada masculina' => 65.50,
                    'Población Ocupada femenina' => 34.50,
                    'Población Desocupada' => 3.97,
                    'Derechohabiencia' => 77.87
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 234,
                    'Hogares Jefatura masculina' => 85.35,
                    'Hogares Jefatura femenina' => 14.65,
                    'Ocupación por Vivienda' => 3.30,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.45,
                    'Viviendas con Automóvil' => 41.53,
                    'Viviendas con Computadora' => 36.26,
                    'Viviendas con Celular' => 86.64,
                    'Viviendas con Internet' => 12.27
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 23,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 47.83,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 26.09,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 8.70,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 8.70,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 4.35
                )
            )
        );
    } // datos

} // Clase VillasSanAgustin

?>
