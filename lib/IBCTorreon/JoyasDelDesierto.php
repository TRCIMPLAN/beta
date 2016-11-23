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
 * Clase JoyasDelDesierto
 */
class JoyasDelDesierto extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Joyas del Desierto';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:09';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'joyas-del-desierto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Joyas del Desierto de Torreón.';
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
                    'Población total' => 1556,
                    'Porcentaje de población masculina' => 49.51,
                    'Porcentaje de población femenina' => 50.49,
                    'Porcentaje de población de 0 a 14 años' => 36.33,
                    'Porcentaje de población de 15 a 64 años' => 62.66,
                    'Porcentaje de población de 65 y más años' => 0.73,
                    'Porcentaje de población no especificada' => 0.28,
                    'Fecundidad promedio' => 1.75,
                    'Porcentaje de población nacida en otro estado' => 18.41,
                    'Porcentaje de población con discapacidad' => 2.68,
                    'Porcentaje de población de 15 y más analfabeta' => 0.31,
                    'Porcentaje de población de 18 y más' => 59.73,
                    'Porcentaje de población de 18 y más postbásicos' => 35.65
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.11,
                    'Grado Promedio de Escolaridad masculina' => 11.38,
                    'Grado Promedio de Escolaridad femenina' => 10.85
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 65.76,
                    'Población Económicamente Activa masculina' => 61.04,
                    'Población Económicamente Activa femenina' => 38.96,
                    'Población Ocupada' => 93.63,
                    'Población Ocupada masculina' => 60.97,
                    'Población Ocupada femenina' => 39.03,
                    'Población Desocupada' => 6.37,
                    'Derechohabiencia' => 77.35
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 440,
                    'Hogares Jefatura masculina' => 84.14,
                    'Hogares Jefatura femenina' => 15.86,
                    'Ocupación por Vivienda' => 3.54,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 99.86,
                    'Viviendas con Televisión' => 98.49,
                    'Viviendas con Automóvil' => 60.96,
                    'Viviendas con Computadora' => 36.36,
                    'Viviendas con Celular' => 94.00,
                    'Viviendas con Internet' => 13.31
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 9,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 77.78,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 11.11,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 11.11
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
        return array(
            'Límites'         => \Configuracion\IBCTorreonConfig::LIMITES,
            'Centro latitud'  => 25.0,
            'Centro longitud' => -103.5);
    } // mapas

} // Clase JoyasDelDesierto

?>
