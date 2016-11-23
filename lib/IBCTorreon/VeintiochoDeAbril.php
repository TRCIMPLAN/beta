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
 * Clase VeintiochoDeAbril
 */
class VeintiochoDeAbril extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Veintiocho de Abril';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:12';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'veintiocho-de-abril';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Veintiocho de Abril de Torreón.';
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
                    'Población total' => 757,
                    'Porcentaje de población masculina' => 46.76,
                    'Porcentaje de población femenina' => 53.24,
                    'Porcentaje de población de 0 a 14 años' => 24.31,
                    'Porcentaje de población de 15 a 64 años' => 63.28,
                    'Porcentaje de población de 65 y más años' => 9.64,
                    'Porcentaje de población no especificada' => 2.77,
                    'Fecundidad promedio' => 2.15,
                    'Porcentaje de población nacida en otro estado' => 13.08,
                    'Porcentaje de población con discapacidad' => 6.53,
                    'Porcentaje de población de 15 y más analfabeta' => 0.94,
                    'Porcentaje de población de 18 y más' => 68.96,
                    'Porcentaje de población de 18 y más postbásicos' => 28.40
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.68,
                    'Grado Promedio de Escolaridad masculina' => 10.10,
                    'Grado Promedio de Escolaridad femenina' => 9.32
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.01,
                    'Población Económicamente Activa masculina' => 65.23,
                    'Población Económicamente Activa femenina' => 34.77,
                    'Población Ocupada' => 93.69,
                    'Población Ocupada masculina' => 63.73,
                    'Población Ocupada femenina' => 36.27,
                    'Población Desocupada' => 6.31,
                    'Derechohabiencia' => 60.90
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 194,
                    'Hogares Jefatura masculina' => 61.86,
                    'Hogares Jefatura femenina' => 38.14,
                    'Ocupación por Vivienda' => 3.90,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.97,
                    'Viviendas con Automóvil' => 41.63,
                    'Viviendas con Computadora' => 37.46,
                    'Viviendas con Celular' => 67.31,
                    'Viviendas con Internet' => 24.29
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 19,
                    'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Primer actividad porcentaje' => 31.58,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 26.32,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 21.05,
                    'Cuarta actividad nombre' => 'Manejo de Residuos',
                    'Cuarta actividad porcentaje' => 10.53,
                    'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Quinta actividad porcentaje' => 10.53
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

} // Clase VeintiochoDeAbril

?>
