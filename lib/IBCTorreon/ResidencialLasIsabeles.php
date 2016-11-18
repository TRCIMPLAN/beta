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
 * Clase ResidencialLasIsabeles
 */
class ResidencialLasIsabeles extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Las Isabeles';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-las-isabeles';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Las Isabeles de Torreón.';
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
                    'Población total' => 464,
                    'Porcentaje de población masculina' => 48.28,
                    'Porcentaje de población femenina' => 51.72,
                    'Porcentaje de población de 0 a 14 años' => 31.90,
                    'Porcentaje de población de 15 a 64 años' => 60.13,
                    'Porcentaje de población de 65 y más años' => 0.22,
                    'Porcentaje de población no especificada' => 7.75,
                    'Fecundidad promedio' => 1.56,
                    'Porcentaje de población nacida en otro estado' => 18.99,
                    'Porcentaje de población con discapacidad' => 0.47,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 54.96,
                    'Porcentaje de población de 18 y más postbásicos' => 52.59
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.96,
                    'Grado Promedio de Escolaridad masculina' => 15.45,
                    'Grado Promedio de Escolaridad femenina' => 14.51
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.24,
                    'Población Económicamente Activa masculina' => 68.71,
                    'Población Económicamente Activa femenina' => 31.29,
                    'Población Ocupada' => 98.13,
                    'Población Ocupada masculina' => 68.12,
                    'Población Ocupada femenina' => 31.88,
                    'Población Desocupada' => 1.87,
                    'Derechohabiencia' => 83.89
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 100,
                    'Hogares Jefatura masculina' => 89.00,
                    'Hogares Jefatura femenina' => 11.00,
                    'Ocupación por Vivienda' => 4.64,
                    'Viviendas con Electricidad' => 99.00,
                    'Viviendas con Agua' => 97.00,
                    'Viviendas con Drenaje' => 98.00,
                    'Viviendas con Televisión' => 99.00,
                    'Viviendas con Automóvil' => 99.00,
                    'Viviendas con Computadora' => 98.00,
                    'Viviendas con Celular' => 97.00,
                    'Viviendas con Internet' => 96.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 80.00,
                    'Segunda actividad nombre' => 'Educativos',
                    'Segunda actividad porcentaje' => 20.00
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

} // Clase ResidencialLasIsabeles

?>
