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
 * Clase LucioCabanas
 */
class LucioCabanas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Lucio Cabañas';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'lucio-cabanas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Lucio Cabañas de Torreón.';
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
                    'Población total' => 386,
                    'Porcentaje de población masculina' => 52.33,
                    'Porcentaje de población femenina' => 47.67,
                    'Porcentaje de población de 0 a 14 años' => 32.38,
                    'Porcentaje de población de 15 a 64 años' => 64.51,
                    'Porcentaje de población de 65 y más años' => 2.33,
                    'Porcentaje de población no especificada' => 0.78,
                    'Fecundidad promedio' => 2.43,
                    'Porcentaje de población nacida en otro estado' => 13.21,
                    'Porcentaje de población con discapacidad' => 5.60,
                    'Porcentaje de población de 15 y más analfabeta' => 2.76,
                    'Porcentaje de población de 18 y más' => 57.77,
                    'Porcentaje de población de 18 y más postbásicos' => 9.61
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.07,
                    'Grado Promedio de Escolaridad masculina' => 7.47,
                    'Grado Promedio de Escolaridad femenina' => 6.61
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.54,
                    'Población Económicamente Activa masculina' => 76.83,
                    'Población Económicamente Activa femenina' => 23.17,
                    'Población Ocupada' => 66.62,
                    'Población Ocupada masculina' => 74.17,
                    'Población Ocupada femenina' => 25.83,
                    'Población Desocupada' => 33.38,
                    'Derechohabiencia' => 53.63
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 77,
                    'Hogares Jefatura masculina' => 62.34,
                    'Hogares Jefatura femenina' => 37.66,
                    'Ocupación por Vivienda' => 5.01,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 96.10,
                    'Viviendas con Automóvil' => 21.75,
                    'Viviendas con Computadora' => 15.26,
                    'Viviendas con Celular' => 51.95,
                    'Viviendas con Internet' => 8.07
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 4,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 75.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 25.00
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

} // Clase LucioCabanas

?>
