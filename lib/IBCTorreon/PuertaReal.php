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
 * Clase PuertaReal
 */
class PuertaReal extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Puerta Real';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'puerta-real';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Puerta Real de IBC Torreón.';
        $this->claves          = 'IMPLAN, Torreon, Desagregación';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'IBC > IBC Torreón';
        // Para el Organizador
        $this->categorias      = array();
        $this->fuentes         = array();
        $this->regiones        = array();
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                'Población total' => '880',
                'Porcentaje de población masculina' => '48.75',
                'Porcentaje de población femenina' => '51.25',
                'Porcentaje de población de 0 a 14 años' => '33.18',
                'Porcentaje de población de 15 a 64 años' => '64.77',
                'Porcentaje de población de 65 y más años' => '1.93',
                'Porcentaje de población no especificada' => '0.12',
                'Fecundidad promedio' => '1.29',
                'Porcentaje de población nacida en otro estado' => '32.16',
                'Porcentaje de población con discapacidad' => '1.06'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '15.20',
                'Grado Promedio de Escolaridad masculina' => '15.57',
                'Grado Promedio de Escolaridad femenina' => '14.85'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '64.90',
                'Población Económicamente Activa masculina' => '60.37',
                'Población Económicamente Activa femenina' => '39.63',
                'Población Ocupada' => '97.99',
                'Población Ocupada masculina' => '60.81',
                'Población Ocupada femenina' => '39.19',
                'Población Desocupada' => '2.01',
                'Derechohabiencia' => '86.14'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '64.06',
                'Hogares Jefatura femenina' => '35.94',
                'Ocupación por Vivienda' => '3.21',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.64',
                'Viviendas con Automóvil' => '96.35',
                'Viviendas con Computadora' => '85.40',
                'Viviendas con Celular' => '99.64',
                'Viviendas con Internet' => '72.74'
            )
        );
    } // datos

} // Clase PuertaReal

?>
