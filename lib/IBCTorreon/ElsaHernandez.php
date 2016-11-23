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
 * Clase ElsaHernandez
 */
class ElsaHernandez extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Elsa Hernández';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:08';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'elsa-hernandez';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Elsa Hernández de Torreón.';
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
                    'Población total' => 2404,
                    'Porcentaje de población masculina' => 48.15,
                    'Porcentaje de población femenina' => 51.85,
                    'Porcentaje de población de 0 a 14 años' => 28.49,
                    'Porcentaje de población de 15 a 64 años' => 62.10,
                    'Porcentaje de población de 65 y más años' => 5.41,
                    'Porcentaje de población no especificada' => 4.00,
                    'Fecundidad promedio' => 2.59,
                    'Porcentaje de población nacida en otro estado' => 11.22,
                    'Porcentaje de población con discapacidad' => 1.90,
                    'Porcentaje de población de 15 y más analfabeta' => 3.05,
                    'Porcentaje de población de 18 y más' => 62.06,
                    'Porcentaje de población de 18 y más postbásicos' => 13.90
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.82,
                    'Grado Promedio de Escolaridad masculina' => 7.89,
                    'Grado Promedio de Escolaridad femenina' => 7.77
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.58,
                    'Población Económicamente Activa masculina' => 66.56,
                    'Población Económicamente Activa femenina' => 33.44,
                    'Población Ocupada' => 86.89,
                    'Población Ocupada masculina' => 66.34,
                    'Población Ocupada femenina' => 33.66,
                    'Población Desocupada' => 13.11,
                    'Derechohabiencia' => 59.40
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 569,
                    'Hogares Jefatura masculina' => 63.98,
                    'Hogares Jefatura femenina' => 36.02,
                    'Ocupación por Vivienda' => 4.22,
                    'Viviendas con Electricidad' => 99.95,
                    'Viviendas con Agua' => 99.78,
                    'Viviendas con Drenaje' => 99.25,
                    'Viviendas con Televisión' => 96.79,
                    'Viviendas con Automóvil' => 36.36,
                    'Viviendas con Computadora' => 16.90,
                    'Viviendas con Celular' => 60.90,
                    'Viviendas con Internet' => 13.77
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 89,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 38.20,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 23.60,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 12.36,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 7.87,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 7.87
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

} // Clase ElsaHernandez

?>
