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
 * Clase QuintasLaguna
 */
class QuintasLaguna extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Quintas Laguna';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:10';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'quintas-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Quintas Laguna de Torreón.';
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
                    'Población total' => 955,
                    'Porcentaje de población masculina' => 50.05,
                    'Porcentaje de población femenina' => 49.95,
                    'Porcentaje de población de 0 a 14 años' => 36.86,
                    'Porcentaje de población de 15 a 64 años' => 58.64,
                    'Porcentaje de población de 65 y más años' => 1.36,
                    'Porcentaje de población no especificada' => 3.14,
                    'Fecundidad promedio' => 1.84,
                    'Porcentaje de población nacida en otro estado' => 13.72,
                    'Porcentaje de población con discapacidad' => 1.47,
                    'Porcentaje de población de 15 y más analfabeta' => 0.02,
                    'Porcentaje de población de 18 y más' => 54.76,
                    'Porcentaje de población de 18 y más postbásicos' => 30.26
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.80,
                    'Grado Promedio de Escolaridad masculina' => 10.96,
                    'Grado Promedio de Escolaridad femenina' => 10.66
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.56,
                    'Población Económicamente Activa masculina' => 65.30,
                    'Población Económicamente Activa femenina' => 34.70,
                    'Población Ocupada' => 93.93,
                    'Población Ocupada masculina' => 64.93,
                    'Población Ocupada femenina' => 35.07,
                    'Población Desocupada' => 6.07,
                    'Derechohabiencia' => 79.06
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 243,
                    'Hogares Jefatura masculina' => 85.19,
                    'Hogares Jefatura femenina' => 14.81,
                    'Ocupación por Vivienda' => 3.93,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.59,
                    'Viviendas con Automóvil' => 62.55,
                    'Viviendas con Computadora' => 35.07,
                    'Viviendas con Celular' => 87.65,
                    'Viviendas con Internet' => 28.79
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 19,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 47.37,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 26.32,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 15.79,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 5.26,
                    'Quinta actividad nombre' => 'Financieros y Seguros',
                    'Quinta actividad porcentaje' => 5.26
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

} // Clase QuintasLaguna

?>
