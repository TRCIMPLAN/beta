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
 * Clase RinconDeLaHacienda
 */
class RinconDeLaHacienda extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Rincon de La Hacienda';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:11';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'rincon-de-la-hacienda';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Rincon de La Hacienda de Torreón.';
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
                    'Población total' => 520,
                    'Porcentaje de población masculina' => 46.92,
                    'Porcentaje de población femenina' => 53.08,
                    'Porcentaje de población de 0 a 14 años' => 17.88,
                    'Porcentaje de población de 15 a 64 años' => 71.92,
                    'Porcentaje de población de 65 y más años' => 7.31,
                    'Porcentaje de población no especificada' => 2.89,
                    'Fecundidad promedio' => 1.59,
                    'Porcentaje de población nacida en otro estado' => 29.42,
                    'Porcentaje de población con discapacidad' => 1.78,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 70.96,
                    'Porcentaje de población de 18 y más postbásicos' => 58.65
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 13.08,
                    'Grado Promedio de Escolaridad masculina' => 13.72,
                    'Grado Promedio de Escolaridad femenina' => 12.54
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.42,
                    'Población Económicamente Activa masculina' => 59.03,
                    'Población Económicamente Activa femenina' => 40.97,
                    'Población Ocupada' => 97.29,
                    'Población Ocupada masculina' => 59.28,
                    'Población Ocupada femenina' => 40.72,
                    'Población Desocupada' => 2.71,
                    'Derechohabiencia' => 70.96
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 148,
                    'Hogares Jefatura masculina' => 75.00,
                    'Hogares Jefatura femenina' => 25.00,
                    'Ocupación por Vivienda' => 3.51,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.32,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.32,
                    'Viviendas con Automóvil' => 82.43,
                    'Viviendas con Computadora' => 75.00,
                    'Viviendas con Celular' => 91.22,
                    'Viviendas con Internet' => 68.92
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 27,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 14.81,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 11.11,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 11.11,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 11.11
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
            'Centro latitud'  => 25.5163694163769,
            'Centro longitud' => -103.392401878125
        );
    } // mapas

} // Clase RinconDeLaHacienda

?>
