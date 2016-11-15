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
 * Clase FraccionamientoLaCienega
 */
class FraccionamientoLaCienega extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Fraccionamiento La Cienega';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'fraccionamiento-la-cienega';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Fraccionamiento La Cienega de Torreón.';
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
                    'Población total' => 114,
                    'Porcentaje de población masculina' => 50.00,
                    'Porcentaje de población femenina' => 50.00,
                    'Porcentaje de población de 0 a 14 años' => 25.44,
                    'Porcentaje de población de 15 a 64 años' => 73.68,
                    'Porcentaje de población de 65 y más años' => 0.88,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.32,
                    'Porcentaje de población nacida en otro estado' => 37.72,
                    'Porcentaje de población con discapacidad' => 0.00,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 69.30,
                    'Porcentaje de población de 18 y más postbásicos' => 64.04
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 15.13,
                    'Grado Promedio de Escolaridad masculina' => 14.86,
                    'Grado Promedio de Escolaridad femenina' => 15.40
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 65.56,
                    'Población Económicamente Activa masculina' => 59.32,
                    'Población Económicamente Activa femenina' => 40.68,
                    'Población Ocupada' => 92.76,
                    'Población Ocupada masculina' => 60.00,
                    'Población Ocupada femenina' => 40.00,
                    'Población Desocupada' => 7.24,
                    'Derechohabiencia' => 79.82
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 33,
                    'Hogares Jefatura masculina' => 90.91,
                    'Hogares Jefatura femenina' => 9.09,
                    'Ocupación por Vivienda' => 3.45,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 100.00,
                    'Viviendas con Computadora' => 96.97,
                    'Viviendas con Celular' => 100.00,
                    'Viviendas con Internet' => 90.91
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 48,
                    'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 22.92,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 18.75,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 8.33,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 8.33
                )
            )
        );
    } // datos

    /**
     * Mapas
     *
     * @return string
     */
    public function mapas() {
        return array('Límites' => \Configuracion\IBCTorreonConfig::LIMITES);
    } // mapas

} // Clase FraccionamientoLaCienega

?>
