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
 * Clase ParaisoDelNazas
 */
class ParaisoDelNazas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Paraíso del Nazas';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'paraiso-del-nazas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Paraíso del Nazas de Torreón.';
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
                    'Población total' => 515,
                    'Porcentaje de población masculina' => 48.89,
                    'Porcentaje de población femenina' => 51.11,
                    'Porcentaje de población de 0 a 14 años' => 30.21,
                    'Porcentaje de población de 15 a 64 años' => 58.43,
                    'Porcentaje de población de 65 y más años' => 5.51,
                    'Porcentaje de población no especificada' => 5.85,
                    'Fecundidad promedio' => 1.97,
                    'Porcentaje de población nacida en otro estado' => 17.80,
                    'Porcentaje de población con discapacidad' => 2.79,
                    'Porcentaje de población de 15 y más analfabeta' => 0.19,
                    'Porcentaje de población de 18 y más' => 55.75,
                    'Porcentaje de población de 18 y más postbásicos' => 32.19
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.68,
                    'Grado Promedio de Escolaridad masculina' => 10.67,
                    'Grado Promedio de Escolaridad femenina' => 10.73
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 48.48,
                    'Población Económicamente Activa masculina' => 67.93,
                    'Población Económicamente Activa femenina' => 32.07,
                    'Población Ocupada' => 88.53,
                    'Población Ocupada masculina' => 66.34,
                    'Población Ocupada femenina' => 33.66,
                    'Población Desocupada' => 11.47,
                    'Derechohabiencia' => 60.29
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 123,
                    'Hogares Jefatura masculina' => 42.05,
                    'Hogares Jefatura femenina' => 57.95,
                    'Ocupación por Vivienda' => 4.19,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.86,
                    'Viviendas con Drenaje' => 94.72,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 73.27,
                    'Viviendas con Computadora' => 44.23,
                    'Viviendas con Celular' => 82.94,
                    'Viviendas con Internet' => 30.30
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 24,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 41.67,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 25.00,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 12.50,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 4.17
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

} // Clase ParaisoDelNazas

?>
