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
 * Clase AngelesResidencialIii
 */
class AngelesResidencialIii extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Angeles Residencial Iii';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'angeles-residencial-iii';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Angeles Residencial Iii de IBC Torreón.';
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
                'Población total' => '101',
                'Porcentaje de población masculina' => '44.55',
                'Porcentaje de población femenina' => '55.45',
                'Porcentaje de población de 0 a 14 años' => '15.84',
                'Porcentaje de población de 15 a 64 años' => '83.17',
                'Porcentaje de población de 65 y más años' => '0.99',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.45',
                'Porcentaje de población nacida en otro estado' => '37.62',
                'Porcentaje de población con discapacidad' => '1.48'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.48',
                'Grado Promedio de Escolaridad masculina' => '14.87',
                'Grado Promedio de Escolaridad femenina' => '14.21'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '60.92',
                'Población Económicamente Activa masculina' => '47.17',
                'Población Económicamente Activa femenina' => '52.83',
                'Población Ocupada' => '89.68',
                'Población Ocupada masculina' => '52.08',
                'Población Ocupada femenina' => '47.92',
                'Población Desocupada' => '10.32',
                'Derechohabiencia' => '87.13'
            ),
            'Viviendas' => array(
                'Hogares' => '27',
                'Hogares Jefatura masculina' => '70.37',
                'Hogares Jefatura femenina' => '29.63',
                'Ocupación por Vivienda' => '3.74',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '92.59',
                'Viviendas con Automóvil' => '96.30',
                'Viviendas con Computadora' => '88.89',
                'Viviendas con Celular' => '100.00',
                'Viviendas con Internet' => '74.07'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '1',
                'Primer actividad nombre' => 'Industria Manufacturera',
                'Primer actividad porcentaje' => '100.00'
            )
        );
    } // datos

} // Clase AngelesResidencialIii

?>
