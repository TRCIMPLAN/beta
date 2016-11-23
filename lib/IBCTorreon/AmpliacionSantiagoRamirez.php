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
 * Clase AmpliacionSantiagoRamirez
 */
class AmpliacionSantiagoRamirez extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ampliación Santiago Ramírez';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:07';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ampliacion-santiago-ramirez';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ampliación Santiago Ramírez de Torreón.';
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
                    'Población total' => 3511,
                    'Porcentaje de población masculina' => 49.40,
                    'Porcentaje de población femenina' => 50.60,
                    'Porcentaje de población de 0 a 14 años' => 32.93,
                    'Porcentaje de población de 15 a 64 años' => 62.38,
                    'Porcentaje de población de 65 y más años' => 4.32,
                    'Porcentaje de población no especificada' => 0.37,
                    'Fecundidad promedio' => 2.51,
                    'Porcentaje de población nacida en otro estado' => 21.06,
                    'Porcentaje de población con discapacidad' => 10.83,
                    'Porcentaje de población de 15 y más analfabeta' => 2.71,
                    'Porcentaje de población de 18 y más' => 60.44,
                    'Porcentaje de población de 18 y más postbásicos' => 11.01
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.36,
                    'Grado Promedio de Escolaridad masculina' => 7.37,
                    'Grado Promedio de Escolaridad femenina' => 7.36
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.08,
                    'Población Económicamente Activa masculina' => 70.46,
                    'Población Económicamente Activa femenina' => 29.54,
                    'Población Ocupada' => 88.53,
                    'Población Ocupada masculina' => 69.64,
                    'Población Ocupada femenina' => 30.36,
                    'Población Desocupada' => 11.47,
                    'Derechohabiencia' => 62.09
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 844,
                    'Hogares Jefatura masculina' => 81.74,
                    'Hogares Jefatura femenina' => 18.26,
                    'Ocupación por Vivienda' => 4.16,
                    'Viviendas con Electricidad' => 99.66,
                    'Viviendas con Agua' => 98.83,
                    'Viviendas con Drenaje' => 97.40,
                    'Viviendas con Televisión' => 98.23,
                    'Viviendas con Automóvil' => 36.98,
                    'Viviendas con Computadora' => 14.61,
                    'Viviendas con Celular' => 61.21,
                    'Viviendas con Internet' => 5.69
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 86,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 47.67,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 19.77,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 9.30,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 8.14,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 4.65
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

} // Clase AmpliacionSantiagoRamirez

?>
