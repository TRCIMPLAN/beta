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
 * Clase AmpliacionFuentes
 */
class AmpliacionFuentes extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ampliación Fuentes';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ampliacion-fuentes';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ampliación Fuentes de Torreón.';
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
                    'Población total' => 2298,
                    'Porcentaje de población masculina' => 49.74,
                    'Porcentaje de población femenina' => 50.26,
                    'Porcentaje de población de 0 a 14 años' => 30.37,
                    'Porcentaje de población de 15 a 64 años' => 64.11,
                    'Porcentaje de población de 65 y más años' => 4.97,
                    'Porcentaje de población no especificada' => 0.55,
                    'Fecundidad promedio' => 2.25,
                    'Porcentaje de población nacida en otro estado' => 16.06,
                    'Porcentaje de población con discapacidad' => 4.32,
                    'Porcentaje de población de 15 y más analfabeta' => 2.57,
                    'Porcentaje de población de 18 y más' => 61.11,
                    'Porcentaje de población de 18 y más postbásicos' => 21.51
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.94,
                    'Grado Promedio de Escolaridad masculina' => 8.83,
                    'Grado Promedio de Escolaridad femenina' => 9.03
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.79,
                    'Población Económicamente Activa masculina' => 66.39,
                    'Población Económicamente Activa femenina' => 33.61,
                    'Población Ocupada' => 87.07,
                    'Población Ocupada masculina' => 65.41,
                    'Población Ocupada femenina' => 34.59,
                    'Población Desocupada' => 12.93,
                    'Derechohabiencia' => 59.65
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 559,
                    'Hogares Jefatura masculina' => 77.30,
                    'Hogares Jefatura femenina' => 22.70,
                    'Ocupación por Vivienda' => 4.11,
                    'Viviendas con Electricidad' => 99.13,
                    'Viviendas con Agua' => 99.12,
                    'Viviendas con Drenaje' => 99.48,
                    'Viviendas con Televisión' => 96.97,
                    'Viviendas con Automóvil' => 52.09,
                    'Viviendas con Computadora' => 30.36,
                    'Viviendas con Celular' => 69.02,
                    'Viviendas con Internet' => 17.47
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 55,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 29.09,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 18.18,
                    'Cuarta actividad nombre' => 'Inmobiliarios',
                    'Cuarta actividad porcentaje' => 10.91,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 10.91
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

} // Clase AmpliacionFuentes

?>
