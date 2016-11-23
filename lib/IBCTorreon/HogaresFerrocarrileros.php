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
 * Clase HogaresFerrocarrileros
 */
class HogaresFerrocarrileros extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Hogares Ferrocarrileros';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:09';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'hogares-ferrocarrileros';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Hogares Ferrocarrileros de Torreón.';
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
                    'Población total' => 1719,
                    'Porcentaje de población masculina' => 47.41,
                    'Porcentaje de población femenina' => 52.59,
                    'Porcentaje de población de 0 a 14 años' => 20.42,
                    'Porcentaje de población de 15 a 64 años' => 66.84,
                    'Porcentaje de población de 65 y más años' => 11.11,
                    'Porcentaje de población no especificada' => 1.63,
                    'Fecundidad promedio' => 2.23,
                    'Porcentaje de población nacida en otro estado' => 19.22,
                    'Porcentaje de población con discapacidad' => 4.47,
                    'Porcentaje de población de 15 y más analfabeta' => 0.28,
                    'Porcentaje de población de 18 y más' => 71.61,
                    'Porcentaje de población de 18 y más postbásicos' => 40.43
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.81,
                    'Grado Promedio de Escolaridad masculina' => 11.03,
                    'Grado Promedio de Escolaridad femenina' => 10.62
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.64,
                    'Población Económicamente Activa masculina' => 58.33,
                    'Población Económicamente Activa femenina' => 41.67,
                    'Población Ocupada' => 92.47,
                    'Población Ocupada masculina' => 57.19,
                    'Población Ocupada femenina' => 42.81,
                    'Población Desocupada' => 7.53,
                    'Derechohabiencia' => 76.91
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 458,
                    'Hogares Jefatura masculina' => 70.09,
                    'Hogares Jefatura femenina' => 29.91,
                    'Ocupación por Vivienda' => 3.75,
                    'Viviendas con Electricidad' => 99.56,
                    'Viviendas con Agua' => 99.13,
                    'Viviendas con Drenaje' => 99.78,
                    'Viviendas con Televisión' => 97.82,
                    'Viviendas con Automóvil' => 52.93,
                    'Viviendas con Computadora' => 48.47,
                    'Viviendas con Celular' => 73.36,
                    'Viviendas con Internet' => 37.12
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 50,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 38.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 26.00,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 12.00,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 10.00,
                    'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Quinta actividad porcentaje' => 4.00
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

} // Clase HogaresFerrocarrileros

?>
