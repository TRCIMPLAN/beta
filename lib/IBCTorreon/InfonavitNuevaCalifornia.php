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
 * Clase InfonavitNuevaCalifornia
 */
class InfonavitNuevaCalifornia extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Infonavit Nueva California';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-16 15:38:41';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'infonavit-nueva-california';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Infonavit Nueva California de Torreón.';
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
                    'Población total' => 2899,
                    'Porcentaje de población masculina' => 49.67,
                    'Porcentaje de población femenina' => 50.33,
                    'Porcentaje de población de 0 a 14 años' => 19.97,
                    'Porcentaje de población de 15 a 64 años' => 76.66,
                    'Porcentaje de población de 65 y más años' => 2.53,
                    'Porcentaje de población no especificada' => 0.84,
                    'Fecundidad promedio' => 1.98,
                    'Porcentaje de población nacida en otro estado' => 14.22,
                    'Porcentaje de población con discapacidad' => 7.71,
                    'Porcentaje de población de 15 y más analfabeta' => 0.41,
                    'Porcentaje de población de 18 y más' => 71.47,
                    'Porcentaje de población de 18 y más postbásicos' => 34.38
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.95,
                    'Grado Promedio de Escolaridad masculina' => 10.14,
                    'Grado Promedio de Escolaridad femenina' => 9.77
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.48,
                    'Población Económicamente Activa masculina' => 63.11,
                    'Población Económicamente Activa femenina' => 36.89,
                    'Población Ocupada' => 88.29,
                    'Población Ocupada masculina' => 61.64,
                    'Población Ocupada femenina' => 38.36,
                    'Población Desocupada' => 11.71,
                    'Derechohabiencia' => 73.75
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 766,
                    'Hogares Jefatura masculina' => 78.46,
                    'Hogares Jefatura femenina' => 21.54,
                    'Ocupación por Vivienda' => 3.78,
                    'Viviendas con Electricidad' => 99.61,
                    'Viviendas con Agua' => 99.35,
                    'Viviendas con Drenaje' => 99.74,
                    'Viviendas con Televisión' => 99.09,
                    'Viviendas con Automóvil' => 50.53,
                    'Viviendas con Computadora' => 40.73,
                    'Viviendas con Celular' => 80.16,
                    'Viviendas con Internet' => 27.20
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 47,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 55.32,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 21.28,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 14.89,
                    'Cuarta actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Cuarta actividad porcentaje' => 6.38,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
                    'Quinta actividad porcentaje' => 2.13
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

} // Clase InfonavitNuevaCalifornia

?>
