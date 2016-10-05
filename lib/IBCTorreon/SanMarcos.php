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
 * Clase SanMarcos
 */
class SanMarcos extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'San Marcos';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'san-marcos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia San Marcos de Torreón.';
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
                    'Población total' => 1837,
                    'Porcentaje de población masculina' => 47.47,
                    'Porcentaje de población femenina' => 52.53,
                    'Porcentaje de población de 0 a 14 años' => 25.11,
                    'Porcentaje de población de 15 a 64 años' => 63.52,
                    'Porcentaje de población de 65 y más años' => 9.89,
                    'Porcentaje de población no especificada' => 1.48,
                    'Fecundidad promedio' => 2.67,
                    'Porcentaje de población nacida en otro estado' => 16.88,
                    'Porcentaje de población con discapacidad' => 8.97
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.31,
                    'Grado Promedio de Escolaridad masculina' => 9.50,
                    'Grado Promedio de Escolaridad femenina' => 9.14
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.08,
                    'Población Económicamente Activa masculina' => 62.75,
                    'Población Económicamente Activa femenina' => 37.25,
                    'Población Ocupada' => 94.86,
                    'Población Ocupada masculina' => 62.14,
                    'Población Ocupada femenina' => 37.86,
                    'Población Desocupada' => 5.14,
                    'Derechohabiencia' => 70.73
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 482,
                    'Hogares Jefatura masculina' => 68.05,
                    'Hogares Jefatura femenina' => 31.95,
                    'Ocupación por Vivienda' => 3.81,
                    'Viviendas con Electricidad' => 99.90,
                    'Viviendas con Agua' => 99.90,
                    'Viviendas con Drenaje' => 99.90,
                    'Viviendas con Televisión' => 97.83,
                    'Viviendas con Automóvil' => 51.23,
                    'Viviendas con Computadora' => 30.84,
                    'Viviendas con Celular' => 65.63,
                    'Viviendas con Internet' => 20.50
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 74,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 35.14,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 21.62,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 17.57,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 8.11,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 4.05
                )
            )
        );
    } // datos

    /**
     * Mapas
     *
     * @return array Arreglo asociativo
     */
    public function mapas() {
        return array(
            'Límites' => \Configuracion\IBCTorreonConfig::LIMITES
        );
    } // mapas

} // Clase SanMarcos

?>
