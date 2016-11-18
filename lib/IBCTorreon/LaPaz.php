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
 * Clase LaPaz
 */
class LaPaz extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'La Paz';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'la-paz';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Paz de Torreón.';
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
                    'Población total' => 1550,
                    'Porcentaje de población masculina' => 50.42,
                    'Porcentaje de población femenina' => 49.58,
                    'Porcentaje de población de 0 a 14 años' => 40.41,
                    'Porcentaje de población de 15 a 64 años' => 58.54,
                    'Porcentaje de población de 65 y más años' => 1.04,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 2.14,
                    'Porcentaje de población nacida en otro estado' => 15.61,
                    'Porcentaje de población con discapacidad' => 1.55,
                    'Porcentaje de población de 15 y más analfabeta' => 0.67,
                    'Porcentaje de población de 18 y más' => 54.50,
                    'Porcentaje de población de 18 y más postbásicos' => 9.89
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.10,
                    'Grado Promedio de Escolaridad masculina' => 8.00,
                    'Grado Promedio de Escolaridad femenina' => 8.22
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.64,
                    'Población Económicamente Activa masculina' => 74.06,
                    'Población Económicamente Activa femenina' => 25.94,
                    'Población Ocupada' => 94.97,
                    'Población Ocupada masculina' => 73.47,
                    'Población Ocupada femenina' => 26.53,
                    'Población Desocupada' => 5.03,
                    'Derechohabiencia' => 72.63
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 398,
                    'Hogares Jefatura masculina' => 85.64,
                    'Hogares Jefatura femenina' => 14.36,
                    'Ocupación por Vivienda' => 3.89,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.82,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.31,
                    'Viviendas con Automóvil' => 43.40,
                    'Viviendas con Computadora' => 33.09,
                    'Viviendas con Celular' => 72.03,
                    'Viviendas con Internet' => 12.01
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 20,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 65.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 5.00,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 5.00,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 5.00
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

} // Clase LaPaz

?>
