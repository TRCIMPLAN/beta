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
 * Clase ResidencialLosFresnos
 */
class ResidencialLosFresnos extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Los Fresnos';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 07:55:31';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-los-fresnos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Los Fresnos de Torreón.';
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
                    'Población total' => 936,
                    'Porcentaje de población masculina' => 46.58,
                    'Porcentaje de población femenina' => 53.42,
                    'Porcentaje de población de 0 a 14 años' => 27.56,
                    'Porcentaje de población de 15 a 64 años' => 69.23,
                    'Porcentaje de población de 65 y más años' => 2.46,
                    'Porcentaje de población no especificada' => 0.75,
                    'Fecundidad promedio' => 1.54,
                    'Porcentaje de población nacida en otro estado' => 20.19,
                    'Porcentaje de población con discapacidad' => 1.39,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 65.28,
                    'Porcentaje de población de 18 y más postbásicos' => 58.55
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.27,
                    'Grado Promedio de Escolaridad masculina' => 15.14,
                    'Grado Promedio de Escolaridad femenina' => 13.56
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.05,
                    'Población Económicamente Activa masculina' => 66.76,
                    'Población Económicamente Activa femenina' => 33.24,
                    'Población Ocupada' => 98.31,
                    'Población Ocupada masculina' => 66.48,
                    'Población Ocupada femenina' => 33.52,
                    'Población Desocupada' => 1.69,
                    'Derechohabiencia' => 88.57
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 235,
                    'Hogares Jefatura masculina' => 90.64,
                    'Hogares Jefatura femenina' => 9.36,
                    'Ocupación por Vivienda' => 3.98,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 99.57,
                    'Viviendas con Televisión' => 97.87,
                    'Viviendas con Automóvil' => 97.87,
                    'Viviendas con Computadora' => 92.77,
                    'Viviendas con Celular' => 98.30,
                    'Viviendas con Internet' => 92.34
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 1,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 100.00
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

} // Clase ResidencialLosFresnos

?>
