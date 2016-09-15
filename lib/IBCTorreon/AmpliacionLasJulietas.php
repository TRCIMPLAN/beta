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
 * Clase AmpliacionLasJulietas
 */
class AmpliacionLasJulietas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ampliacion Las Julietas';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ampliacion-las-julietas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ampliacion Las Julietas de Torreón.';
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
                'Población total' => '701',
                'Porcentaje de población masculina' => '49.79',
                'Porcentaje de población femenina' => '50.21',
                'Porcentaje de población de 0 a 14 años' => '34.38',
                'Porcentaje de población de 15 a 64 años' => '61.91',
                'Porcentaje de población de 65 y más años' => '3.28',
                'Porcentaje de población no especificada' => '0.43',
                'Fecundidad promedio' => '2.29',
                'Porcentaje de población nacida en otro estado' => '22.68',
                'Porcentaje de población con discapacidad' => '2.14'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.99',
                'Grado Promedio de Escolaridad masculina' => '7.70',
                'Grado Promedio de Escolaridad femenina' => '8.28'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '56.69',
                'Población Económicamente Activa masculina' => '69.79',
                'Población Económicamente Activa femenina' => '30.21',
                'Población Ocupada' => '89.75',
                'Población Ocupada masculina' => '67.43',
                'Población Ocupada femenina' => '32.57',
                'Población Desocupada' => '10.25',
                'Derechohabiencia' => '62.05'
            ),
            'Viviendas' => array(
                'Hogares' => '163',
                'Hogares Jefatura masculina' => '85.28',
                'Hogares Jefatura femenina' => '14.72',
                'Ocupación por Vivienda' => '4.30',
                'Viviendas con Electricidad' => '98.77',
                'Viviendas con Agua' => '99.39',
                'Viviendas con Drenaje' => '96.93',
                'Viviendas con Televisión' => '98.77',
                'Viviendas con Automóvil' => '50.31',
                'Viviendas con Computadora' => '28.61',
                'Viviendas con Celular' => '73.01',
                'Viviendas con Internet' => '19.36'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '13',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '23.08',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '23.08',
                'Tercera actividad nombre' => 'Industria Manufacturera',
                'Tercera actividad porcentaje' => '15.38',
                'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Cuarta actividad porcentaje' => '15.38',
                'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Quinta actividad porcentaje' => '7.69'
            )
        );
    } // datos

} // Clase AmpliacionLasJulietas

?>
