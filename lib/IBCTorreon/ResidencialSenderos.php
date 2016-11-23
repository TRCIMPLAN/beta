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
 * Clase ResidencialSenderos
 */
class ResidencialSenderos extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Senderos';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:11';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-senderos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Senderos de Torreón.';
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
                    'Población total' => 3094,
                    'Porcentaje de población masculina' => 48.83,
                    'Porcentaje de población femenina' => 51.17,
                    'Porcentaje de población de 0 a 14 años' => 29.37,
                    'Porcentaje de población de 15 a 64 años' => 64.33,
                    'Porcentaje de población de 65 y más años' => 2.86,
                    'Porcentaje de población no especificada' => 3.44,
                    'Fecundidad promedio' => 1.30,
                    'Porcentaje de población nacida en otro estado' => 30.70,
                    'Porcentaje de población con discapacidad' => 0.98,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 61.86,
                    'Porcentaje de población de 18 y más postbásicos' => 59.52
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 15.38,
                    'Grado Promedio de Escolaridad masculina' => 15.68,
                    'Grado Promedio de Escolaridad femenina' => 15.09
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 68.43,
                    'Población Económicamente Activa masculina' => 58.57,
                    'Población Económicamente Activa femenina' => 41.43,
                    'Población Ocupada' => 98.88,
                    'Población Ocupada masculina' => 58.73,
                    'Población Ocupada femenina' => 41.27,
                    'Población Desocupada' => 1.12,
                    'Derechohabiencia' => 81.81
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 911,
                    'Hogares Jefatura masculina' => 84.93,
                    'Hogares Jefatura femenina' => 15.07,
                    'Ocupación por Vivienda' => 3.40,
                    'Viviendas con Electricidad' => 99.95,
                    'Viviendas con Agua' => 99.51,
                    'Viviendas con Drenaje' => 99.73,
                    'Viviendas con Televisión' => 99.29,
                    'Viviendas con Automóvil' => 98.19,
                    'Viviendas con Computadora' => 89.68,
                    'Viviendas con Celular' => 98.48,
                    'Viviendas con Internet' => 78.09
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 17,
                    'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Primer actividad porcentaje' => 35.29,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 23.53,
                    'Tercera actividad nombre' => 'Construcción',
                    'Tercera actividad porcentaje' => 11.76,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 11.76,
                    'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Quinta actividad porcentaje' => 5.88
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

} // Clase ResidencialSenderos

?>
