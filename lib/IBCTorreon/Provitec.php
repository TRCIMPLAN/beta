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
 * Clase Provitec
 */
class Provitec extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Provitec';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:10';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'provitec';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Provitec de Torreón.';
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
                    'Población total' => 1243,
                    'Porcentaje de población masculina' => 47.95,
                    'Porcentaje de población femenina' => 52.05,
                    'Porcentaje de población de 0 a 14 años' => 21.48,
                    'Porcentaje de población de 15 a 64 años' => 73.93,
                    'Porcentaje de población de 65 y más años' => 4.59,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.69,
                    'Porcentaje de población nacida en otro estado' => 16.41,
                    'Porcentaje de población con discapacidad' => 3.30,
                    'Porcentaje de población de 15 y más analfabeta' => 0.79,
                    'Porcentaje de población de 18 y más' => 71.52,
                    'Porcentaje de población de 18 y más postbásicos' => 56.15
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.73,
                    'Grado Promedio de Escolaridad masculina' => 13.09,
                    'Grado Promedio de Escolaridad femenina' => 12.39
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.93,
                    'Población Económicamente Activa masculina' => 59.50,
                    'Población Económicamente Activa femenina' => 40.50,
                    'Población Ocupada' => 93.00,
                    'Población Ocupada masculina' => 60.27,
                    'Población Ocupada femenina' => 39.73,
                    'Población Desocupada' => 7.00,
                    'Derechohabiencia' => 77.15
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 351,
                    'Hogares Jefatura masculina' => 69.80,
                    'Hogares Jefatura femenina' => 30.20,
                    'Ocupación por Vivienda' => 3.54,
                    'Viviendas con Electricidad' => 99.72,
                    'Viviendas con Agua' => 99.43,
                    'Viviendas con Drenaje' => 99.72,
                    'Viviendas con Televisión' => 99.15,
                    'Viviendas con Automóvil' => 73.79,
                    'Viviendas con Computadora' => 65.81,
                    'Viviendas con Celular' => 86.04,
                    'Viviendas con Internet' => 52.14
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 82,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 39.02,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 19.51,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 12.20,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 9.76,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 6.10
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
            'Centro latitud'  => 25.5300458816568,
            'Centro longitud' => -103.395006522986
        );
    } // mapas

} // Clase Provitec

?>
