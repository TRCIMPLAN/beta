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
 * Clase SanDiego
 */
class SanDiego extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'San Diego';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'san-diego';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia San Diego de Torreón.';
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
                    'Población total' => 162,
                    'Porcentaje de población masculina' => 45.06,
                    'Porcentaje de población femenina' => 54.94,
                    'Porcentaje de población de 0 a 14 años' => 25.93,
                    'Porcentaje de población de 15 a 64 años' => 70.37,
                    'Porcentaje de población de 65 y más años' => 3.70,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.75,
                    'Porcentaje de población nacida en otro estado' => 19.14,
                    'Porcentaje de población con discapacidad' => 3.70,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 67.90,
                    'Porcentaje de población de 18 y más postbásicos' => 50.62
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.10,
                    'Grado Promedio de Escolaridad masculina' => 12.86,
                    'Grado Promedio de Escolaridad femenina' => 11.57
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 64.80,
                    'Población Económicamente Activa masculina' => 51.85,
                    'Población Económicamente Activa femenina' => 48.15,
                    'Población Ocupada' => 94.82,
                    'Población Ocupada masculina' => 50.65,
                    'Población Ocupada femenina' => 49.35,
                    'Población Desocupada' => 5.18,
                    'Derechohabiencia' => 88.27
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 54,
                    'Hogares Jefatura masculina' => 61.11,
                    'Hogares Jefatura femenina' => 38.89,
                    'Ocupación por Vivienda' => 3.00,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 83.33,
                    'Viviendas con Computadora' => 40.74,
                    'Viviendas con Celular' => 96.30,
                    'Viviendas con Internet' => 14.81
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 2,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 50.00
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

} // Clase SanDiego

?>
