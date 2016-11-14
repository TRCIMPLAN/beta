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
 * Clase ResidencialGalerias
 */
class ResidencialGalerias extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Galerias';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-14 14:03:31';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-galerias';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Galerias de Torreón.';
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
                    'Población total' => 21,
                    'Porcentaje de población masculina' => 44.75,
                    'Porcentaje de población femenina' => 55.25,
                    'Porcentaje de población de 0 a 14 años' => 40.31,
                    'Porcentaje de población de 15 a 64 años' => 58.91,
                    'Porcentaje de población de 65 y más años' => 0.63,
                    'Porcentaje de población no especificada' => 0.15,
                    'Fecundidad promedio' => 1.53,
                    'Porcentaje de población nacida en otro estado' => 22.52,
                    'Porcentaje de población con discapacidad' => 0.37,
                    'Porcentaje de población de 15 y más analfabeta' => 0.19,
                    'Porcentaje de población de 18 y más' => 58.02,
                    'Porcentaje de población de 18 y más postbásicos' => 54.31
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 15.19,
                    'Grado Promedio de Escolaridad masculina' => 15.12,
                    'Grado Promedio de Escolaridad femenina' => 15.23
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.59,
                    'Población Económicamente Activa masculina' => 61.01,
                    'Población Económicamente Activa femenina' => 38.99,
                    'Población Ocupada' => 98.93,
                    'Población Ocupada masculina' => 60.77,
                    'Población Ocupada femenina' => 39.23,
                    'Población Desocupada' => 1.07,
                    'Derechohabiencia' => 93.68
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 5,
                    'Hogares Jefatura masculina' => 77.88,
                    'Hogares Jefatura femenina' => 22.12,
                    'Ocupación por Vivienda' => 4.20,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 100.00,
                    'Viviendas con Computadora' => 99.46,
                    'Viviendas con Celular' => 100.00,
                    'Viviendas con Internet' => 98.65
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 0
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

} // Clase ResidencialGalerias

?>
