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
 * Clase LosAngeles
 */
class LosAngeles extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Los Ángeles';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-14 14:03:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'los-angeles';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Los Ángeles de Torreón.';
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
                    'Población total' => 556,
                    'Porcentaje de población masculina' => 47.54,
                    'Porcentaje de población femenina' => 52.46,
                    'Porcentaje de población de 0 a 14 años' => 16.93,
                    'Porcentaje de población de 15 a 64 años' => 56.15,
                    'Porcentaje de población de 65 y más años' => 20.81,
                    'Porcentaje de población no especificada' => 6.11,
                    'Fecundidad promedio' => 2.13,
                    'Porcentaje de población nacida en otro estado' => 16.87,
                    'Porcentaje de población con discapacidad' => 5.15,
                    'Porcentaje de población de 15 y más analfabeta' => 0.09,
                    'Porcentaje de población de 18 y más' => 71.39,
                    'Porcentaje de población de 18 y más postbásicos' => 63.55
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.17,
                    'Grado Promedio de Escolaridad masculina' => 14.96,
                    'Grado Promedio de Escolaridad femenina' => 13.50
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.32,
                    'Población Económicamente Activa masculina' => 60.73,
                    'Población Económicamente Activa femenina' => 39.27,
                    'Población Ocupada' => 99.97,
                    'Población Ocupada masculina' => 60.71,
                    'Población Ocupada femenina' => 39.29,
                    'Población Desocupada' => 0.03,
                    'Derechohabiencia' => 83.16
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 155,
                    'Hogares Jefatura masculina' => 70.82,
                    'Hogares Jefatura femenina' => 29.18,
                    'Ocupación por Vivienda' => 3.59,
                    'Viviendas con Electricidad' => 99.45,
                    'Viviendas con Agua' => 99.45,
                    'Viviendas con Drenaje' => 99.45,
                    'Viviendas con Televisión' => 96.67,
                    'Viviendas con Automóvil' => 93.20,
                    'Viviendas con Computadora' => 86.70,
                    'Viviendas con Celular' => 89.45,
                    'Viviendas con Internet' => 85.05
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 70,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 15.71,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 14.29,
                    'Tercera actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Tercera actividad porcentaje' => 12.86,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 12.86,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 11.43
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

} // Clase LosAngeles

?>
