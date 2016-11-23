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
 * Clase LasAves
 */
class LasAves extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Las Aves';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:09';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'las-aves';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Las Aves de Torreón.';
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
                    'Población total' => 246,
                    'Porcentaje de población masculina' => 46.75,
                    'Porcentaje de población femenina' => 53.25,
                    'Porcentaje de población de 0 a 14 años' => 39.13,
                    'Porcentaje de población de 15 a 64 años' => 59.14,
                    'Porcentaje de población de 65 y más años' => 0.48,
                    'Porcentaje de población no especificada' => 1.25,
                    'Fecundidad promedio' => 2.10,
                    'Porcentaje de población nacida en otro estado' => 14.36,
                    'Porcentaje de población con discapacidad' => 0.60,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 56.10,
                    'Porcentaje de población de 18 y más postbásicos' => 24.80
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.78,
                    'Grado Promedio de Escolaridad masculina' => 10.13,
                    'Grado Promedio de Escolaridad femenina' => 9.47
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 64.95,
                    'Población Económicamente Activa masculina' => 62.97,
                    'Población Económicamente Activa femenina' => 37.03,
                    'Población Ocupada' => 94.74,
                    'Población Ocupada masculina' => 61.04,
                    'Población Ocupada femenina' => 38.96,
                    'Población Desocupada' => 5.26,
                    'Derechohabiencia' => 75.26
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 65,
                    'Hogares Jefatura masculina' => 79.22,
                    'Hogares Jefatura femenina' => 20.78,
                    'Ocupación por Vivienda' => 3.78,
                    'Viviendas con Electricidad' => 99.99,
                    'Viviendas con Agua' => 99.98,
                    'Viviendas con Drenaje' => 99.98,
                    'Viviendas con Televisión' => 99.98,
                    'Viviendas con Automóvil' => 41.84,
                    'Viviendas con Computadora' => 36.39,
                    'Viviendas con Celular' => 87.25,
                    'Viviendas con Internet' => 15.58
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 4,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 75.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 25.00
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

} // Clase LasAves

?>
