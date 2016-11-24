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
 * Clase AmpliacionLaRosita
 */
class AmpliacionLaRosita extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ampliación La Rosita';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:07';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ampliacion-la-rosita';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ampliación La Rosita de Torreón.';
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
                    'Población total' => 3434,
                    'Porcentaje de población masculina' => 48.22,
                    'Porcentaje de población femenina' => 51.78,
                    'Porcentaje de población de 0 a 14 años' => 14.53,
                    'Porcentaje de población de 15 a 64 años' => 76.93,
                    'Porcentaje de población de 65 y más años' => 6.09,
                    'Porcentaje de población no especificada' => 2.45,
                    'Fecundidad promedio' => 1.67,
                    'Porcentaje de población nacida en otro estado' => 27.92,
                    'Porcentaje de población con discapacidad' => 2.45,
                    'Porcentaje de población de 15 y más analfabeta' => 0.03,
                    'Porcentaje de población de 18 y más' => 78.14,
                    'Porcentaje de población de 18 y más postbásicos' => 70.41
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.37,
                    'Grado Promedio de Escolaridad masculina' => 14.96,
                    'Grado Promedio de Escolaridad femenina' => 13.82
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.96,
                    'Población Económicamente Activa masculina' => 59.22,
                    'Población Económicamente Activa femenina' => 40.78,
                    'Población Ocupada' => 94.68,
                    'Población Ocupada masculina' => 58.95,
                    'Población Ocupada femenina' => 41.05,
                    'Población Desocupada' => 5.32,
                    'Derechohabiencia' => 77.88
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 934,
                    'Hogares Jefatura masculina' => 78.07,
                    'Hogares Jefatura femenina' => 21.93,
                    'Ocupación por Vivienda' => 3.68,
                    'Viviendas con Electricidad' => 99.97,
                    'Viviendas con Agua' => 99.54,
                    'Viviendas con Drenaje' => 99.65,
                    'Viviendas con Televisión' => 99.65,
                    'Viviendas con Automóvil' => 95.42,
                    'Viviendas con Computadora' => 86.92,
                    'Viviendas con Celular' => 94.50,
                    'Viviendas con Internet' => 82.60
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 163,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 30.67,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 14.11,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 11.66,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 11.66,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 7.36
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
            'Centro latitud'  => 25.5148944166436,
            'Centro longitud' => -103.401814530276
        );
    } // mapas

} // Clase AmpliacionLaRosita

?>
