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
 * Clase JardinesDeCalifornia
 */
class JardinesDeCalifornia extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Jardines de California';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-16 15:38:41';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'jardines-de-california';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Jardines de California de Torreón.';
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
                    'Población total' => 2292,
                    'Porcentaje de población masculina' => 47.56,
                    'Porcentaje de población femenina' => 52.44,
                    'Porcentaje de población de 0 a 14 años' => 13.26,
                    'Porcentaje de población de 15 a 64 años' => 66.36,
                    'Porcentaje de población de 65 y más años' => 15.27,
                    'Porcentaje de población no especificada' => 5.11,
                    'Fecundidad promedio' => 2.14,
                    'Porcentaje de población nacida en otro estado' => 20.38,
                    'Porcentaje de población con discapacidad' => 7.89,
                    'Porcentaje de población de 15 y más analfabeta' => 0.27,
                    'Porcentaje de población de 18 y más' => 77.27,
                    'Porcentaje de población de 18 y más postbásicos' => 55.98
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.30,
                    'Grado Promedio de Escolaridad masculina' => 12.63,
                    'Grado Promedio de Escolaridad femenina' => 12.01
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 48.31,
                    'Población Económicamente Activa masculina' => 56.99,
                    'Población Económicamente Activa femenina' => 43.01,
                    'Población Ocupada' => 91.67,
                    'Población Ocupada masculina' => 56.03,
                    'Población Ocupada femenina' => 43.97,
                    'Población Desocupada' => 8.33,
                    'Derechohabiencia' => 75.61
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 658,
                    'Hogares Jefatura masculina' => 68.24,
                    'Hogares Jefatura femenina' => 31.76,
                    'Ocupación por Vivienda' => 3.48,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.70,
                    'Viviendas con Drenaje' => 99.70,
                    'Viviendas con Televisión' => 99.85,
                    'Viviendas con Automóvil' => 79.03,
                    'Viviendas con Computadora' => 63.83,
                    'Viviendas con Celular' => 83.59,
                    'Viviendas con Internet' => 55.93
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 102,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 28.43,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 25.49,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 13.73,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 6.86,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 5.88
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

} // Clase JardinesDeCalifornia

?>
